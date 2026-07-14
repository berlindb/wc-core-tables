<?php
/**
 * GENERATED FILE - do not edit by hand.
 *
 * Introspected from the live WooCommerce table `wp_wc_customer_lookup` (structure only).
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
class CustomerLookup extends Schema {

	/** @var array<int, array<string, mixed>> */
	public $columns = array(
			array( 'name' => 'customer_id', 'type' => 'bigint', 'length' => '20', 'unsigned' => true, 'extra' => 'auto_increment', 'primary' => true ),
			array( 'name' => 'user_id', 'type' => 'bigint', 'length' => '20', 'unsigned' => true, 'allow_null' => true, 'default' => null ),
			array( 'name' => 'username', 'type' => 'varchar', 'length' => '60', 'default' => '' ),
			array( 'name' => 'first_name', 'type' => 'varchar', 'length' => '255', 'default' => false ),
			array( 'name' => 'last_name', 'type' => 'varchar', 'length' => '255', 'default' => false ),
			array( 'name' => 'email', 'type' => 'varchar', 'length' => '100', 'allow_null' => true, 'default' => null ),
			array( 'name' => 'date_last_active', 'type' => 'timestamp', 'allow_null' => true, 'default' => null ),
			array( 'name' => 'date_registered', 'type' => 'timestamp', 'allow_null' => true, 'default' => null ),
			array( 'name' => 'country', 'type' => 'char', 'length' => '2', 'default' => '' ),
			array( 'name' => 'postcode', 'type' => 'varchar', 'length' => '20', 'default' => '' ),
			array( 'name' => 'city', 'type' => 'varchar', 'length' => '100', 'default' => '' ),
			array( 'name' => 'state', 'type' => 'varchar', 'length' => '100', 'default' => '' ),
	);

	/** @var array<int, array<string, mixed>> */
	public $indexes = array(
			array( 'type' => 'key', 'name' => 'email', 'columns' => array( 'email' ) ),
			array( 'type' => 'primary', 'columns' => array( 'customer_id' ) ),
			array( 'type' => 'unique', 'name' => 'user_id', 'columns' => array( 'user_id' ) ),
	);
}
