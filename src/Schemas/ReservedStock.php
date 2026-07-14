<?php
/**
 * GENERATED FILE - do not edit by hand.
 *
 * Introspected from the live WooCommerce table `wp_wc_reserved_stock` (structure only).
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
class ReservedStock extends Schema {

	/** @var array<int, array<string, mixed>> */
	public $columns = array(
			array( 'name' => 'order_id', 'type' => 'bigint', 'length' => '20', 'unsigned' => false, 'default' => false ),
			array( 'name' => 'product_id', 'type' => 'bigint', 'length' => '20', 'unsigned' => false, 'default' => false ),
			array( 'name' => 'stock_quantity', 'type' => 'double', 'unsigned' => false, 'default' => '0' ),
			array( 'name' => 'timestamp', 'type' => 'datetime', 'default' => '0000-00-00 00:00:00' ),
			array( 'name' => 'expires', 'type' => 'datetime', 'default' => '0000-00-00 00:00:00' ),
	);

	/** @var array<int, array<string, mixed>> */
	public $indexes = array(
			array( 'type' => 'primary', 'columns' => array( 'order_id', 'product_id' ) ),
			array( 'type' => 'key', 'name' => 'product_id_expires', 'columns' => array( 'product_id', 'expires' ) ),
	);
}
