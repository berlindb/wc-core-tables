<?php
/**
 * GENERATED FILE - do not edit by hand.
 *
 * Introspected from the live WooCommerce table `wp_wc_orders_meta` (structure only).
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
class OrdersMeta extends Schema {

	/** @var array<int, array<string, mixed>> */
	public $columns = array(
			array( 'name' => 'id', 'type' => 'bigint', 'unsigned' => true, 'extra' => 'auto_increment', 'primary' => true ),
			array( 'name' => 'order_id', 'type' => 'bigint', 'unsigned' => true, 'allow_null' => true, 'default' => null ),
			array( 'name' => 'meta_key', 'type' => 'varchar', 'length' => '255', 'allow_null' => true, 'default' => null ),
			array( 'name' => 'meta_value', 'type' => 'text', 'allow_null' => true, 'default' => null ),
	);

	/** @var array<int, array<string, mixed>> */
	public $indexes = array(
			array( 'type' => 'key', 'name' => 'meta_key_value', 'columns' => array( 'meta_key(50)', 'meta_value(20)' ) ),
			array( 'type' => 'key', 'name' => 'order_id_meta_key_meta_value', 'columns' => array( 'order_id', 'meta_key(100)', 'meta_value(82)' ) ),
			array( 'type' => 'primary', 'columns' => array( 'id' ) ),
	);
}
