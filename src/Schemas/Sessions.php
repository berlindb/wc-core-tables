<?php
/**
 * GENERATED FILE - do not edit by hand.
 *
 * Introspected from the live WooCommerce table `wp_woocommerce_sessions` (structure only).
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
class Sessions extends Schema {

	/** @var array<int, array<string, mixed>> */
	public $columns = array(
			array( 'name' => 'session_id', 'type' => 'bigint', 'length' => '20', 'unsigned' => true, 'extra' => 'auto_increment', 'primary' => true ),
			array( 'name' => 'session_key', 'type' => 'char', 'length' => '32', 'default' => false ),
			array( 'name' => 'session_value', 'type' => 'longtext' ),
			array( 'name' => 'session_expiry', 'type' => 'bigint', 'length' => '20', 'unsigned' => true, 'default' => false ),
	);

	/** @var array<int, array<string, mixed>> */
	public $indexes = array(
			array( 'type' => 'primary', 'columns' => array( 'session_id' ) ),
			array( 'type' => 'key', 'name' => 'session_expiry', 'columns' => array( 'session_expiry' ) ),
			array( 'type' => 'unique', 'name' => 'session_key', 'columns' => array( 'session_key' ) ),
	);
}
