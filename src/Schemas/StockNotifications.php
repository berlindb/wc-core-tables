<?php
/**
 * GENERATED FILE - do not edit by hand.
 *
 * Introspected from the live WooCommerce table `wp_wc_stock_notifications` (structure only).
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
class StockNotifications extends Schema {

	/** @var array<int, array<string, mixed>> */
	public $columns = array(
			array( 'name' => 'id', 'type' => 'bigint', 'unsigned' => true, 'extra' => 'auto_increment', 'primary' => true ),
			array( 'name' => 'product_id', 'type' => 'bigint', 'unsigned' => true, 'default' => false ),
			array( 'name' => 'user_id', 'type' => 'bigint', 'unsigned' => true, 'default' => false ),
			array( 'name' => 'user_email', 'type' => 'varchar', 'length' => '100', 'default' => false ),
			array( 'name' => 'status', 'type' => 'varchar', 'length' => '20', 'default' => 'pending' ),
			array( 'name' => 'date_created_gmt', 'type' => 'datetime', 'allow_null' => true, 'default' => null ),
			array( 'name' => 'date_modified_gmt', 'type' => 'datetime', 'allow_null' => true, 'default' => null ),
			array( 'name' => 'date_confirmed_gmt', 'type' => 'datetime', 'allow_null' => true, 'default' => null ),
			array( 'name' => 'date_last_attempt_gmt', 'type' => 'datetime', 'allow_null' => true, 'default' => null ),
			array( 'name' => 'date_notified_gmt', 'type' => 'datetime', 'allow_null' => true, 'default' => null ),
			array( 'name' => 'date_cancelled_gmt', 'type' => 'datetime', 'allow_null' => true, 'default' => null ),
			array( 'name' => 'cancellation_source', 'type' => 'varchar', 'length' => '30', 'allow_null' => true, 'default' => null ),
	);

	/** @var array<int, array<string, mixed>> */
	public $indexes = array(
			array( 'type' => 'key', 'name' => 'email_lookup', 'columns' => array( 'user_email', 'product_id', 'status' ) ),
			array( 'type' => 'primary', 'columns' => array( 'id' ) ),
			array( 'type' => 'key', 'name' => 'product_status_attempt', 'columns' => array( 'product_id', 'status', 'date_last_attempt_gmt', 'id' ) ),
			array( 'type' => 'key', 'name' => 'user_lookup', 'columns' => array( 'user_id', 'product_id', 'status' ) ),
	);
}
