<?php
/**
 * GENERATED FILE - do not edit by hand.
 *
 * Introspected from the live WooCommerce table `wp_wc_email_unsubscribes` (structure only).
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
class EmailUnsubscribes extends Schema {

	/** @var array<int, array<string, mixed>> */
	public $columns = array(
			array( 'name' => 'id', 'type' => 'bigint', 'length' => '20', 'unsigned' => true, 'extra' => 'auto_increment', 'primary' => true ),
			array( 'name' => 'email_hash', 'type' => 'char', 'length' => '64', 'default' => false ),
			array( 'name' => 'email_kind', 'type' => 'varchar', 'length' => '64', 'default' => false ),
			array( 'name' => 'action', 'type' => 'varchar', 'length' => '20', 'default' => false ),
			array( 'name' => 'created_at', 'type' => 'datetime', 'default' => false ),
	);

	/** @var array<int, array<string, mixed>> */
	public $indexes = array(
			array( 'type' => 'key', 'name' => 'email_hash_kind', 'columns' => array( 'email_hash', 'email_kind' ) ),
			array( 'type' => 'primary', 'columns' => array( 'id' ) ),
	);
}
