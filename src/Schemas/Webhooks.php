<?php
/**
 * GENERATED FILE - do not edit by hand.
 *
 * Introspected from the live WooCommerce table `wp_wc_webhooks` (structure only).
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
class Webhooks extends Schema {

	/** @var array<int, array<string, mixed>> */
	public $columns = array(
			array( 'name' => 'webhook_id', 'type' => 'bigint', 'unsigned' => true, 'extra' => 'auto_increment', 'primary' => true ),
			array( 'name' => 'status', 'type' => 'varchar', 'length' => '200', 'default' => false ),
			array( 'name' => 'name', 'type' => 'text' ),
			array( 'name' => 'user_id', 'type' => 'bigint', 'unsigned' => true, 'default' => false ),
			array( 'name' => 'delivery_url', 'type' => 'text' ),
			array( 'name' => 'secret', 'type' => 'text' ),
			array( 'name' => 'topic', 'type' => 'varchar', 'length' => '200', 'default' => false ),
			array( 'name' => 'date_created', 'type' => 'datetime', 'default' => '0000-00-00 00:00:00' ),
			array( 'name' => 'date_created_gmt', 'type' => 'datetime', 'default' => '0000-00-00 00:00:00' ),
			array( 'name' => 'date_modified', 'type' => 'datetime', 'default' => '0000-00-00 00:00:00' ),
			array( 'name' => 'date_modified_gmt', 'type' => 'datetime', 'default' => '0000-00-00 00:00:00' ),
			array( 'name' => 'api_version', 'type' => 'smallint', 'unsigned' => false, 'default' => false ),
			array( 'name' => 'failure_count', 'type' => 'smallint', 'unsigned' => false, 'default' => '0' ),
			array( 'name' => 'pending_delivery', 'type' => 'tinyint', 'length' => '1', 'unsigned' => false, 'default' => '0' ),
	);

	/** @var array<int, array<string, mixed>> */
	public $indexes = array(
			array( 'type' => 'primary', 'columns' => array( 'webhook_id' ) ),
			array( 'type' => 'key', 'name' => 'user_id', 'columns' => array( 'user_id' ) ),
	);
}
