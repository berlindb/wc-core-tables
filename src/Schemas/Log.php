<?php
/**
 * GENERATED FILE - do not edit by hand.
 *
 * Introspected from the live WooCommerce table `wp_woocommerce_log` (structure only).
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
class Log extends Schema {

	/** @var array<int, array<string, mixed>> */
	public $columns = array(
			array( 'name' => 'log_id', 'type' => 'bigint', 'length' => '20', 'unsigned' => true, 'extra' => 'auto_increment', 'primary' => true ),
			array( 'name' => 'timestamp', 'type' => 'datetime', 'default' => false ),
			array( 'name' => 'level', 'type' => 'smallint', 'length' => '4', 'unsigned' => false, 'default' => false ),
			array( 'name' => 'source', 'type' => 'varchar', 'length' => '200', 'default' => false ),
			array( 'name' => 'message', 'type' => 'longtext' ),
			array( 'name' => 'context', 'type' => 'longtext', 'allow_null' => true, 'default' => null ),
	);

	/** @var array<int, array<string, mixed>> */
	public $indexes = array(
			array( 'type' => 'key', 'name' => 'level', 'columns' => array( 'level' ) ),
			array( 'type' => 'primary', 'columns' => array( 'log_id' ) ),
	);
}
