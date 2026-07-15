<?php
/**
 * GENERATED FILE - do not edit by hand.
 *
 * Introspected from the live WooCommerce table `wp_wc_order_stats` (structure only).
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
class OrderStats extends Schema {

	/** @var array<int, array<string, mixed>> */
	public $columns = array(
			array( 'name' => 'order_id', 'type' => 'bigint', 'unsigned' => true, 'primary' => true, 'default' => false ),
			array( 'name' => 'parent_id', 'type' => 'bigint', 'unsigned' => true, 'default' => '0' ),
			array( 'name' => 'date_created', 'type' => 'datetime', 'default' => '0000-00-00 00:00:00' ),
			array( 'name' => 'date_created_gmt', 'type' => 'datetime', 'default' => '0000-00-00 00:00:00' ),
			array( 'name' => 'date_paid', 'type' => 'datetime', 'allow_null' => true, 'default' => '0000-00-00 00:00:00' ),
			array( 'name' => 'date_completed', 'type' => 'datetime', 'allow_null' => true, 'default' => '0000-00-00 00:00:00' ),
			array( 'name' => 'num_items_sold', 'type' => 'int', 'unsigned' => false, 'default' => '0' ),
			array( 'name' => 'total_sales', 'type' => 'double', 'unsigned' => false, 'default' => '0' ),
			array( 'name' => 'tax_total', 'type' => 'double', 'unsigned' => false, 'default' => '0' ),
			array( 'name' => 'shipping_total', 'type' => 'double', 'unsigned' => false, 'default' => '0' ),
			array( 'name' => 'net_total', 'type' => 'double', 'unsigned' => false, 'default' => '0' ),
			array( 'name' => 'returning_customer', 'type' => 'tinyint', 'length' => '1', 'unsigned' => false, 'allow_null' => true, 'default' => null ),
			array( 'name' => 'status', 'type' => 'varchar', 'length' => '20', 'default' => false ),
			array( 'name' => 'customer_id', 'type' => 'bigint', 'unsigned' => true, 'default' => false ),
	);

	/** @var array<int, array<string, mixed>> */
	public $indexes = array(
			array( 'type' => 'key', 'name' => 'customer_id', 'columns' => array( 'customer_id' ) ),
			array( 'type' => 'key', 'name' => 'date_created', 'columns' => array( 'date_created' ) ),
			array( 'type' => 'key', 'name' => 'idx_date_paid_status_parent', 'columns' => array( 'date_paid', 'status', 'parent_id' ) ),
			array( 'type' => 'primary', 'columns' => array( 'order_id' ) ),
			array( 'type' => 'key', 'name' => 'status', 'columns' => array( 'status' ) ),
	);
}
