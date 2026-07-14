<?php
/**
 * GENERATED FILE - do not edit by hand.
 *
 * Introspected from the live WooCommerce table `wp_wc_download_log` (structure only).
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
class DownloadLog extends Schema {

	/** @var array<int, array<string, mixed>> */
	public $columns = array(
			array( 'name' => 'download_log_id', 'type' => 'bigint', 'length' => '20', 'unsigned' => true, 'extra' => 'auto_increment', 'primary' => true ),
			array( 'name' => 'timestamp', 'type' => 'datetime', 'default' => false ),
			array( 'name' => 'permission_id', 'type' => 'bigint', 'length' => '20', 'unsigned' => true, 'default' => false ),
			array( 'name' => 'user_id', 'type' => 'bigint', 'length' => '20', 'unsigned' => true, 'allow_null' => true, 'default' => null ),
			array( 'name' => 'user_ip_address', 'type' => 'varchar', 'length' => '100', 'allow_null' => true, 'default' => '' ),
	);

	/** @var array<int, array<string, mixed>> */
	public $indexes = array(
			array( 'type' => 'key', 'name' => 'permission_id', 'columns' => array( 'permission_id' ) ),
			array( 'type' => 'primary', 'columns' => array( 'download_log_id' ) ),
			array( 'type' => 'key', 'name' => 'timestamp', 'columns' => array( 'timestamp' ) ),
	);
}
