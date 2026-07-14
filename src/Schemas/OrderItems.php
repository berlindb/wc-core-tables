<?php
/**
 * GENERATED FILE - do not edit by hand.
 *
 * Introspected from the live WooCommerce table `wp_woocommerce_order_items` (structure only).
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
class OrderItems extends Schema {

	/** @var array<int, array<string, mixed>> */
	public $columns = array(
			array( 'name' => 'order_item_id', 'type' => 'bigint', 'length' => '20', 'unsigned' => true, 'extra' => 'auto_increment', 'primary' => true ),
			array( 'name' => 'order_item_name', 'type' => 'text' ),
			array( 'name' => 'order_item_type', 'type' => 'varchar', 'length' => '200', 'default' => '' ),
			array( 'name' => 'order_id', 'type' => 'bigint', 'length' => '20', 'unsigned' => true, 'default' => false ),
	);

	/** @var array<int, array<string, mixed>> */
	public $indexes = array(
			array( 'type' => 'key', 'name' => 'order_id', 'columns' => array( 'order_id' ) ),
			array( 'type' => 'primary', 'columns' => array( 'order_item_id' ) ),
	);
}
