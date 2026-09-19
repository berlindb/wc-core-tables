<?php
/**
 * GENERATED FILE - do not edit by hand.
 *
 * Introspected from the live WooCommerce table `wp_wc_order_product_lookup` (structure only).
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
class OrderProductLookup extends Schema {

	/** @var array<int, array<string, mixed>> */
	public $columns = array(
			array( 'name' => 'order_item_id', 'type' => 'bigint', 'unsigned' => true, 'default' => false ),
			array( 'name' => 'order_id', 'type' => 'bigint', 'unsigned' => true, 'default' => false ),
			array( 'name' => 'product_id', 'type' => 'bigint', 'unsigned' => true, 'default' => false ),
			array( 'name' => 'variation_id', 'type' => 'bigint', 'unsigned' => true, 'default' => false ),
			array( 'name' => 'customer_id', 'type' => 'bigint', 'unsigned' => true, 'allow_null' => true, 'default' => null ),
			array( 'name' => 'date_created', 'type' => 'datetime', 'default' => 'CURRENT_TIMESTAMP' ),
			array( 'name' => 'product_qty', 'type' => 'int', 'unsigned' => false, 'default' => false ),
			array( 'name' => 'product_net_revenue', 'type' => 'double', 'unsigned' => false, 'default' => '0' ),
			array( 'name' => 'product_gross_revenue', 'type' => 'double', 'unsigned' => false, 'default' => '0' ),
			array( 'name' => 'coupon_amount', 'type' => 'double', 'unsigned' => false, 'default' => '0' ),
			array( 'name' => 'tax_amount', 'type' => 'double', 'unsigned' => false, 'default' => '0' ),
			array( 'name' => 'shipping_amount', 'type' => 'double', 'unsigned' => false, 'default' => '0' ),
			array( 'name' => 'shipping_tax_amount', 'type' => 'double', 'unsigned' => false, 'default' => '0' ),
	);

	/** @var array<int, array<string, mixed>> */
	public $indexes = array(
			array( 'type' => 'key', 'name' => 'customer_id', 'columns' => array( 'customer_id' ) ),
			array( 'type' => 'key', 'name' => 'customer_product_date', 'columns' => array( 'customer_id', 'product_id', 'date_created' ) ),
			array( 'type' => 'key', 'name' => 'date_created', 'columns' => array( 'date_created' ) ),
			array( 'type' => 'key', 'name' => 'order_id', 'columns' => array( 'order_id' ) ),
			array( 'type' => 'primary', 'columns' => array( 'order_item_id', 'order_id' ) ),
			array( 'type' => 'key', 'name' => 'product_id', 'columns' => array( 'product_id' ) ),
	);
}
