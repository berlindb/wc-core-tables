<?php
/**
 * Proof of concept: satisfy a WooCommerce (HPOS) order query from BerlinDB.
 *
 * @package WcCoreTables\Overrides
 */

declare( strict_types = 1 );

namespace WcCoreTables\Overrides;

defined( 'ABSPATH' ) || exit;

/**
 * Hooks `woocommerce_hpos_pre_query` so a WooCommerce order query (wc_get_orders() /
 * WC_Order_Query, in HPOS mode) returns order IDs fetched by BerlinDB rather than by
 * WooCommerce's own generated SQL. WooCommerce still hydrates the WC_Order objects from
 * those IDs, so this replaces only the *query*, cleanly - the WooCommerce-native analog of
 * backing WP_Query with `posts_pre_query`.
 *
 * Scope: a demonstration, not a drop-in. It is OPT-IN (nothing happens unless `activate()`
 * is called around a query), and it translates only the pagination/order slice of the
 * order-query grammar (limit, page, offset, orderby, order). Every other query, and the
 * full WooCommerce order grammar (status/customer/meta/date filters), is left to
 * WooCommerce. Enabling it wholesale for a live store is out of scope.
 *
 * @since 0.1.0
 */
final class OrdersQueryOverride {

	/**
	 * Whether the next HPOS order queries should be BerlinDB-backed.
	 *
	 * @since 0.1.0
	 * @var   bool
	 */
	private static $active = false;

	/**
	 * Register the interception hook (idempotent). Inert until activate().
	 *
	 * @since 0.1.0
	 */
	public static function register(): void {
		add_filter( 'woocommerce_hpos_pre_query', array( self::class, 'pre_query' ), 10, 2 );
	}

	/**
	 * Remove the interception hook.
	 *
	 * @since 0.1.0
	 */
	public static function unregister(): void {
		remove_filter( 'woocommerce_hpos_pre_query', array( self::class, 'pre_query' ), 10 );
		self::$active = false;
	}

	/**
	 * Turn interception on or off for the queries that follow.
	 *
	 * @since 0.1.0
	 *
	 * @param bool $on Whether BerlinDB should back subsequent order queries.
	 */
	public static function activate( bool $on = true ): void {
		self::$active = $on;
	}

	/**
	 * Short-circuit an HPOS order query with BerlinDB-fetched IDs.
	 *
	 * @since 0.1.0
	 *
	 * @param array|null $pre_query Null until filtered; a non-null array short-circuits.
	 * @param object     $query     The OrdersTableQuery instance.
	 * @return array|null [ int[] $order_ids, int $found, int $max_num_pages ] or null.
	 */
	public static function pre_query( $pre_query, $query ) {

		// Only act when explicitly activated; otherwise let WooCommerce run its query.
		if ( ! self::$active || ! is_object( $query ) || ! method_exists( $query, 'get_query_args' ) ) {
			return $pre_query;
		}

		$args = $query->get_query_args();

		$berlin  = new OrdersQuery( self::translate_args( $args ) );
		$ids     = array_map( 'intval', $berlin->items );
		$found   = (int) $berlin->get_found_items();
		$limit   = (int) ( $args['limit'] ?? 0 );
		$pages   = ( $limit > 0 ) ? (int) ceil( $found / $limit ) : ( $found > 0 ? 1 : 0 );

		return array( $ids, $found, $pages );
	}

	/**
	 * Translate the supported slice of WooCommerce order-query args into BerlinDB vars.
	 *
	 * @since 0.1.0
	 *
	 * @param array<string, mixed> $args WooCommerce HPOS query args.
	 * @return array<string, mixed> BerlinDB query vars.
	 */
	private static function translate_args( array $args ): array {
		$vars = array(
			'fields'        => 'ids',
			'no_found_rows' => false,
		);

		// Limit: WooCommerce uses -1 for "all".
		$limit = (int) ( $args['limit'] ?? 10 );
		$vars['number'] = ( $limit < 0 ) ? 0 : $limit;

		// Offset, directly or derived from page.
		$offset = (int) ( $args['offset'] ?? 0 );
		if ( ( $offset <= 0 ) && ! empty( $args['page'] ) && ( $limit > 0 ) ) {
			$offset = ( ( (int) $args['page'] ) - 1 ) * $limit;
		}
		if ( $offset > 0 ) {
			$vars['offset'] = $offset;
		}

		// Orderby: map the common WooCommerce aliases to wc_orders columns.
		$orderby_map = array(
			'id'            => 'id',
			'date'          => 'date_created_gmt',
			'modified'      => 'date_updated_gmt',
			'total'         => 'total_amount',
		);
		$orderby         = strtolower( (string) ( $args['orderby'] ?? 'id' ) );
		$vars['orderby'] = $orderby_map[ $orderby ] ?? 'id';

		$order         = strtoupper( (string) ( $args['order'] ?? 'DESC' ) );
		$vars['order'] = ( 'ASC' === $order ) ? 'ASC' : 'DESC';

		return $vars;
	}
}
