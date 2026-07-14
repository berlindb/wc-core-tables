<?php
/**
 * GENERATED FILE - do not edit by hand.
 *
 * Introspected from the live WooCommerce table `wp_woocommerce_api_keys` (structure only).
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
class ApiKeys extends Schema {

	/** @var array<int, array<string, mixed>> */
	public $columns = array(
			array( 'name' => 'key_id', 'type' => 'bigint', 'length' => '20', 'unsigned' => true, 'extra' => 'auto_increment', 'primary' => true ),
			array( 'name' => 'user_id', 'type' => 'bigint', 'length' => '20', 'unsigned' => true, 'default' => false ),
			array( 'name' => 'description', 'type' => 'varchar', 'length' => '200', 'allow_null' => true, 'default' => null ),
			array( 'name' => 'permissions', 'type' => 'varchar', 'length' => '10', 'default' => false ),
			array( 'name' => 'consumer_key', 'type' => 'char', 'length' => '64', 'default' => false ),
			array( 'name' => 'consumer_secret', 'type' => 'char', 'length' => '43', 'default' => false ),
			array( 'name' => 'nonces', 'type' => 'longtext', 'allow_null' => true, 'default' => null ),
			array( 'name' => 'truncated_key', 'type' => 'char', 'length' => '7', 'default' => false ),
			array( 'name' => 'last_access', 'type' => 'datetime', 'allow_null' => true, 'default' => null ),
	);

	/** @var array<int, array<string, mixed>> */
	public $indexes = array(
			array( 'type' => 'key', 'name' => 'consumer_key', 'columns' => array( 'consumer_key' ) ),
			array( 'type' => 'key', 'name' => 'consumer_secret', 'columns' => array( 'consumer_secret' ) ),
			array( 'type' => 'primary', 'columns' => array( 'key_id' ) ),
	);
}
