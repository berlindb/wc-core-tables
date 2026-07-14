<?php
/**
 * GENERATED FILE - do not edit by hand.
 *
 * Introspected from the live WooCommerce table `wp_wc_admin_notes` (structure only).
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
class AdminNotes extends Schema {

	/** @var array<int, array<string, mixed>> */
	public $columns = array(
			array( 'name' => 'note_id', 'type' => 'bigint', 'length' => '20', 'unsigned' => true, 'extra' => 'auto_increment', 'primary' => true ),
			array( 'name' => 'name', 'type' => 'varchar', 'length' => '255', 'default' => false ),
			array( 'name' => 'type', 'type' => 'varchar', 'length' => '20', 'default' => false ),
			array( 'name' => 'locale', 'type' => 'varchar', 'length' => '20', 'default' => false ),
			array( 'name' => 'title', 'type' => 'longtext' ),
			array( 'name' => 'content', 'type' => 'longtext' ),
			array( 'name' => 'content_data', 'type' => 'longtext', 'allow_null' => true, 'default' => null ),
			array( 'name' => 'status', 'type' => 'varchar', 'length' => '200', 'default' => false ),
			array( 'name' => 'source', 'type' => 'varchar', 'length' => '200', 'default' => false ),
			array( 'name' => 'date_created', 'type' => 'datetime', 'default' => '0000-00-00 00:00:00' ),
			array( 'name' => 'date_reminder', 'type' => 'datetime', 'allow_null' => true, 'default' => null ),
			array( 'name' => 'is_snoozable', 'type' => 'tinyint', 'length' => '1', 'unsigned' => false, 'default' => '0' ),
			array( 'name' => 'layout', 'type' => 'varchar', 'length' => '20', 'default' => '' ),
			array( 'name' => 'image', 'type' => 'varchar', 'length' => '200', 'allow_null' => true, 'default' => null ),
			array( 'name' => 'is_deleted', 'type' => 'tinyint', 'length' => '1', 'unsigned' => false, 'default' => '0' ),
			array( 'name' => 'is_read', 'type' => 'tinyint', 'length' => '1', 'unsigned' => false, 'default' => '0' ),
			array( 'name' => 'icon', 'type' => 'varchar', 'length' => '200', 'default' => 'info' ),
	);

	/** @var array<int, array<string, mixed>> */
	public $indexes = array(
			array( 'type' => 'primary', 'columns' => array( 'note_id' ) ),
	);
}
