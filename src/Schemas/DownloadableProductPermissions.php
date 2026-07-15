<?php
/**
 * GENERATED FILE - do not edit by hand.
 *
 * Introspected from the live WooCommerce table `wp_woocommerce_downloadable_product_permissions` (structure only).
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
class DownloadableProductPermissions extends Schema {

	/** @var array<int, array<string, mixed>> */
	public $columns = array(
			array( 'name' => 'permission_id', 'type' => 'bigint', 'unsigned' => true, 'extra' => 'auto_increment', 'primary' => true ),
			array( 'name' => 'download_id', 'type' => 'varchar', 'length' => '36', 'default' => false ),
			array( 'name' => 'product_id', 'type' => 'bigint', 'unsigned' => true, 'default' => false ),
			array( 'name' => 'order_id', 'type' => 'bigint', 'unsigned' => true, 'default' => '0' ),
			array( 'name' => 'order_key', 'type' => 'varchar', 'length' => '200', 'default' => false ),
			array( 'name' => 'user_email', 'type' => 'varchar', 'length' => '200', 'default' => false ),
			array( 'name' => 'user_id', 'type' => 'bigint', 'unsigned' => true, 'allow_null' => true, 'default' => null ),
			array( 'name' => 'downloads_remaining', 'type' => 'varchar', 'length' => '9', 'allow_null' => true, 'default' => null ),
			array( 'name' => 'access_granted', 'type' => 'datetime', 'default' => '0000-00-00 00:00:00' ),
			array( 'name' => 'access_expires', 'type' => 'datetime', 'allow_null' => true, 'default' => null ),
			array( 'name' => 'download_count', 'type' => 'bigint', 'unsigned' => true, 'default' => '0' ),
	);

	/** @var array<int, array<string, mixed>> */
	public $indexes = array(
			array( 'type' => 'key', 'name' => 'download_order_key_product', 'columns' => array( 'product_id', 'order_id', 'order_key(16)', 'download_id' ) ),
			array( 'type' => 'key', 'name' => 'download_order_product', 'columns' => array( 'download_id', 'order_id', 'product_id' ) ),
			array( 'type' => 'key', 'name' => 'idx_user_email', 'columns' => array( 'user_email(100)' ) ),
			array( 'type' => 'key', 'name' => 'order_id', 'columns' => array( 'order_id' ) ),
			array( 'type' => 'primary', 'columns' => array( 'permission_id' ) ),
			array( 'type' => 'key', 'name' => 'user_order_remaining_expires', 'columns' => array( 'user_id', 'order_id', 'downloads_remaining', 'access_expires' ) ),
	);
}
