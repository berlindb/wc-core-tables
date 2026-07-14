<?php
/**
 * GENERATED FILE - do not edit by hand.
 *
 * Introspected from the live WooCommerce table `wp_wc_admin_note_actions` (structure only).
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
class AdminNoteActions extends Schema {

	/** @var array<int, array<string, mixed>> */
	public $columns = array(
			array( 'name' => 'action_id', 'type' => 'bigint', 'length' => '20', 'unsigned' => true, 'extra' => 'auto_increment', 'primary' => true ),
			array( 'name' => 'note_id', 'type' => 'bigint', 'length' => '20', 'unsigned' => true, 'default' => false ),
			array( 'name' => 'name', 'type' => 'varchar', 'length' => '255', 'default' => false ),
			array( 'name' => 'label', 'type' => 'varchar', 'length' => '255', 'default' => false ),
			array( 'name' => 'query', 'type' => 'longtext' ),
			array( 'name' => 'status', 'type' => 'varchar', 'length' => '255', 'default' => false ),
			array( 'name' => 'actioned_text', 'type' => 'varchar', 'length' => '255', 'default' => false ),
			array( 'name' => 'nonce_action', 'type' => 'varchar', 'length' => '255', 'allow_null' => true, 'default' => null ),
			array( 'name' => 'nonce_name', 'type' => 'varchar', 'length' => '255', 'allow_null' => true, 'default' => null ),
	);

	/** @var array<int, array<string, mixed>> */
	public $indexes = array(
			array( 'type' => 'key', 'name' => 'note_id', 'columns' => array( 'note_id' ) ),
			array( 'type' => 'primary', 'columns' => array( 'action_id' ) ),
	);
}
