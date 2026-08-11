<?php
/**
 * GENERATED FILE - do not edit by hand.
 *
 * Introspected from the live WooCommerce table `wp_wc_order_coupon_lookup` (structure only).
 * Regenerate with `bin/generate-schemas.php`.
 *
 * @package WcCoreTables\Schemas
 */

declare( strict_types = 1 );

namespace WcCoreTables\Schemas;

use BerlinDB\Database\Kern\Schema;

defined( 'ABSPATH' ) || exit;

/**
 * @since 0.1.0
 */
class OrderCouponLookup extends Schema {

	/** @var array<int, array<string, mixed>> */
	public $columns = array(
			array( 'name' => 'order_id', 'type' => 'bigint', 'unsigned' => true, 'default' => false ),
			array( 'name' => 'coupon_id', 'type' => 'bigint', 'unsigned' => false, 'default' => false ),
			array( 'name' => 'date_created', 'type' => 'datetime', 'default' => '0000-00-00 00:00:00' ),
			array( 'name' => 'discount_amount', 'type' => 'double', 'unsigned' => false, 'default' => '0' ),
	);

	/** @var array<int, array<string, mixed>> */
	public $indexes = array(
			array( 'type' => 'key', 'name' => 'coupon_id', 'columns' => array( 'coupon_id' ) ),
			array( 'type' => 'key', 'name' => 'date_created', 'columns' => array( 'date_created' ) ),
			array( 'type' => 'primary', 'columns' => array( 'order_id', 'coupon_id' ) ),
	);
}
