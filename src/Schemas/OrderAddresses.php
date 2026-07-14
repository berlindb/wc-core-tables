<?php
/**
 * GENERATED FILE - do not edit by hand.
 *
 * Introspected from the live WooCommerce table `wp_wc_order_addresses` (structure only).
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
class OrderAddresses extends Schema {

	/** @var array<int, array<string, mixed>> */
	public $columns = array(
			array( 'name' => 'id', 'type' => 'bigint', 'length' => '20', 'unsigned' => true, 'extra' => 'auto_increment', 'primary' => true ),
			array( 'name' => 'order_id', 'type' => 'bigint', 'length' => '20', 'unsigned' => true, 'default' => false ),
			array( 'name' => 'address_type', 'type' => 'varchar', 'length' => '20', 'allow_null' => true, 'default' => null ),
			array( 'name' => 'first_name', 'type' => 'text', 'allow_null' => true, 'default' => null ),
			array( 'name' => 'last_name', 'type' => 'text', 'allow_null' => true, 'default' => null ),
			array( 'name' => 'company', 'type' => 'text', 'allow_null' => true, 'default' => null ),
			array( 'name' => 'address_1', 'type' => 'text', 'allow_null' => true, 'default' => null ),
			array( 'name' => 'address_2', 'type' => 'text', 'allow_null' => true, 'default' => null ),
			array( 'name' => 'city', 'type' => 'text', 'allow_null' => true, 'default' => null ),
			array( 'name' => 'state', 'type' => 'text', 'allow_null' => true, 'default' => null ),
			array( 'name' => 'postcode', 'type' => 'text', 'allow_null' => true, 'default' => null ),
			array( 'name' => 'country', 'type' => 'text', 'allow_null' => true, 'default' => null ),
			array( 'name' => 'email', 'type' => 'varchar', 'length' => '320', 'allow_null' => true, 'default' => null ),
			array( 'name' => 'phone', 'type' => 'varchar', 'length' => '100', 'allow_null' => true, 'default' => null ),
	);

	/** @var array<int, array<string, mixed>> */
	public $indexes = array(
			array( 'type' => 'unique', 'name' => 'address_type_order_id', 'columns' => array( 'address_type', 'order_id' ) ),
			array( 'type' => 'key', 'name' => 'email', 'columns' => array( 'email(191)' ) ),
			array( 'type' => 'key', 'name' => 'order_id', 'columns' => array( 'order_id' ) ),
			array( 'type' => 'key', 'name' => 'phone', 'columns' => array( 'phone' ) ),
			array( 'type' => 'primary', 'columns' => array( 'id' ) ),
	);
}
