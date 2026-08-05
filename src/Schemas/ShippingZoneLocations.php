<?php
/**
 * GENERATED FILE - do not edit by hand.
 *
 * Introspected from the live WooCommerce table `wp_woocommerce_shipping_zone_locations` (structure only).
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
class ShippingZoneLocations extends Schema {

	/** @var array<int, array<string, mixed>> */
	public $columns = array(
			array( 'name' => 'location_id', 'type' => 'bigint', 'unsigned' => true, 'extra' => 'auto_increment', 'primary' => true ),
			array( 'name' => 'zone_id', 'type' => 'bigint', 'unsigned' => true, 'default' => false ),
			array( 'name' => 'location_code', 'type' => 'varchar', 'length' => '200', 'default' => false ),
			array( 'name' => 'location_type', 'type' => 'varchar', 'length' => '40', 'default' => false ),
	);

	/** @var array<int, array<string, mixed>> */
	public $indexes = array(
			array( 'type' => 'key', 'name' => 'location_type_code', 'columns' => array( 'location_type(10)', 'location_code(20)' ) ),
			array( 'type' => 'primary', 'columns' => array( 'location_id' ) ),
			array( 'type' => 'key', 'name' => 'zone_id', 'columns' => array( 'zone_id' ) ),
	);
}
