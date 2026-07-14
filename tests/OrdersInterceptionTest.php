<?php
/**
 * POC test: a WooCommerce (HPOS) order query satisfied from BerlinDB.
 *
 * @package WcCoreTables\Tests
 */

declare( strict_types = 1 );

namespace WcCoreTables\Tests;

use WcCoreTables\Overrides\OrdersQueryOverride;
use Yoast\WPTestUtils\WPIntegration\TestCase;

/**
 * @since 0.1.0
 */
class OrdersInterceptionTest extends TestCase {

	/** @var class-string */
	private const HPOS_QUERY = '\\Automattic\\WooCommerce\\Internal\\DataStores\\Orders\\OrdersTableQuery';

	/** @var int[] */
	private $order_ids = array();

	public function set_up(): void {
		parent::set_up();

		if ( ! class_exists( self::HPOS_QUERY ) ) {
			$this->markTestSkipped( 'HPOS OrdersTableQuery unavailable.' );
		}

		global $wpdb;
		$table = $wpdb->prefix . 'wc_orders';

		// Three order rows to page through (inserted directly - this test exercises the
		// query interception, not WooCommerce's order-creation stack).
		foreach ( array( 1001, 1002, 1003 ) as $id ) {
			$wpdb->query(
				$wpdb->prepare(
					"INSERT INTO `{$table}` ( id, status, type, currency, total_amount, date_created_gmt, date_updated_gmt )
					 VALUES ( %d, %s, %s, %s, %s, %s, %s )",
					$id,
					'wc-completed',
					'shop_order',
					'USD',
					'10.00000000',
					'2026-01-01 00:00:00',
					'2026-01-01 00:00:00'
				)
			);
			$this->order_ids[] = $id;
		}

		OrdersQueryOverride::register();
	}

	public function tear_down(): void {
		OrdersQueryOverride::unregister();
		global $wpdb;
		$wpdb->query( "DELETE FROM `{$wpdb->prefix}wc_orders` WHERE id IN ( 1001, 1002, 1003 )" );
		parent::tear_down();
	}

	/**
	 * A run of the HPOS order query, with interception active, returns the IDs BerlinDB
	 * fetched - honoring limit and order - and reports the correct totals.
	 *
	 * @since 0.1.0
	 */
	public function test_hpos_query_is_backed_by_berlindb(): void {
		$query_class = self::HPOS_QUERY;

		OrdersQueryOverride::activate( true );
		$query = new $query_class(
			array(
				'limit'   => 2,
				'orderby' => 'id',
				'order'   => 'ASC',
				'type'    => 'shop_order',
			)
		);
		OrdersQueryOverride::activate( false );

		// BerlinDB returned the first two IDs (ascending), and the totals span all three.
		$this->assertSame( array( 1001, 1002 ), array_map( 'intval', $query->orders ) );
		$this->assertSame( 3, (int) $query->found_orders );
		$this->assertSame( 2, (int) $query->max_num_pages );
	}

	/**
	 * Without activation the override stays out of the way (WooCommerce runs its own SQL).
	 *
	 * @since 0.1.0
	 */
	public function test_inactive_override_leaves_query_to_woocommerce(): void {
		$query_class = self::HPOS_QUERY;

		$query = new $query_class(
			array(
				'limit'   => 10,
				'orderby' => 'id',
				'order'   => 'ASC',
				'type'    => 'shop_order',
			)
		);

		// WooCommerce's own query still finds the three orders.
		$this->assertSame( array( 1001, 1002, 1003 ), array_map( 'intval', $query->orders ) );
	}
}
