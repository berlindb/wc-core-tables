<?php
/**
 * GENERATED FILE - do not edit by hand.
 *
 * Introspected from the live WooCommerce table `wp_woocommerce_shipping_zone_methods` (structure only).
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
class ShippingZoneMethods extends Schema {

	/** @var array<int, array<string, mixed>> */
	public $columns = array(
			array( 'name' => 'zone_id', 'type' => 'bigint', 'unsigned' => true, 'default' => false ),
			array( 'name' => 'instance_id', 'type' => 'bigint', 'unsigned' => true, 'extra' => 'auto_increment', 'primary' => true ),
			array( 'name' => 'method_id', 'type' => 'varchar', 'length' => '200', 'default' => false ),
			array( 'name' => 'method_order', 'type' => 'bigint', 'unsigned' => true, 'default' => false ),
			array( 'name' => 'is_enabled', 'type' => 'tinyint', 'length' => '1', 'unsigned' => false, 'default' => '1' ),
	);

	/** @var array<int, array<string, mixed>> */
	public $indexes = array(
			array( 'type' => 'key', 'name' => 'method_id', 'columns' => array( 'method_id(20)' ) ),
			array( 'type' => 'primary', 'columns' => array( 'instance_id' ) ),
			array( 'type' => 'key', 'name' => 'zone_id', 'columns' => array( 'zone_id' ) ),
	);
}
