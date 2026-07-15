<?php
/**
 * GENERATED FILE - do not edit by hand.
 *
 * Introspected from the live WooCommerce table `wp_woocommerce_shipping_zones` (structure only).
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
class ShippingZones extends Schema {

	/** @var array<int, array<string, mixed>> */
	public $columns = array(
			array( 'name' => 'zone_id', 'type' => 'bigint', 'unsigned' => true, 'extra' => 'auto_increment', 'primary' => true ),
			array( 'name' => 'zone_name', 'type' => 'varchar', 'length' => '200', 'default' => false ),
			array( 'name' => 'zone_order', 'type' => 'bigint', 'unsigned' => true, 'default' => false ),
	);

	/** @var array<int, array<string, mixed>> */
	public $indexes = array(
			array( 'type' => 'primary', 'columns' => array( 'zone_id' ) ),
			array( 'type' => 'key', 'name' => 'zone_order_id', 'columns' => array( 'zone_order', 'zone_id' ) ),
	);
}
