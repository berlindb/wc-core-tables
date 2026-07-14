<?php
/**
 * GENERATED FILE - do not edit by hand.
 *
 * Introspected from the live WooCommerce table `wp_wc_order_operational_data` (structure only).
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
class OrderOperationalData extends Schema {

	/** @var array<int, array<string, mixed>> */
	public $columns = array(
			array( 'name' => 'id', 'type' => 'bigint', 'length' => '20', 'unsigned' => true, 'extra' => 'auto_increment', 'primary' => true ),
			array( 'name' => 'order_id', 'type' => 'bigint', 'length' => '20', 'unsigned' => true, 'allow_null' => true, 'default' => null ),
			array( 'name' => 'created_via', 'type' => 'varchar', 'length' => '100', 'allow_null' => true, 'default' => null ),
			array( 'name' => 'woocommerce_version', 'type' => 'varchar', 'length' => '20', 'allow_null' => true, 'default' => null ),
			array( 'name' => 'prices_include_tax', 'type' => 'tinyint', 'length' => '1', 'unsigned' => false, 'allow_null' => true, 'default' => null ),
			array( 'name' => 'coupon_usages_are_counted', 'type' => 'tinyint', 'length' => '1', 'unsigned' => false, 'allow_null' => true, 'default' => null ),
			array( 'name' => 'download_permission_granted', 'type' => 'tinyint', 'length' => '1', 'unsigned' => false, 'allow_null' => true, 'default' => null ),
			array( 'name' => 'cart_hash', 'type' => 'varchar', 'length' => '100', 'allow_null' => true, 'default' => null ),
			array( 'name' => 'new_order_email_sent', 'type' => 'tinyint', 'length' => '1', 'unsigned' => false, 'allow_null' => true, 'default' => null ),
			array( 'name' => 'order_key', 'type' => 'varchar', 'length' => '100', 'allow_null' => true, 'default' => null ),
			array( 'name' => 'order_stock_reduced', 'type' => 'tinyint', 'length' => '1', 'unsigned' => false, 'allow_null' => true, 'default' => null ),
			array( 'name' => 'date_paid_gmt', 'type' => 'datetime', 'allow_null' => true, 'default' => null ),
			array( 'name' => 'date_completed_gmt', 'type' => 'datetime', 'allow_null' => true, 'default' => null ),
			array( 'name' => 'shipping_tax_amount', 'type' => 'decimal', 'length' => '26', 'scale' => '8', 'unsigned' => false, 'allow_null' => true, 'default' => null ),
			array( 'name' => 'shipping_total_amount', 'type' => 'decimal', 'length' => '26', 'scale' => '8', 'unsigned' => false, 'allow_null' => true, 'default' => null ),
			array( 'name' => 'discount_tax_amount', 'type' => 'decimal', 'length' => '26', 'scale' => '8', 'unsigned' => false, 'allow_null' => true, 'default' => null ),
			array( 'name' => 'discount_total_amount', 'type' => 'decimal', 'length' => '26', 'scale' => '8', 'unsigned' => false, 'allow_null' => true, 'default' => null ),
			array( 'name' => 'recorded_sales', 'type' => 'tinyint', 'length' => '1', 'unsigned' => false, 'allow_null' => true, 'default' => null ),
	);

	/** @var array<int, array<string, mixed>> */
	public $indexes = array(
			array( 'type' => 'unique', 'name' => 'order_id', 'columns' => array( 'order_id' ) ),
			array( 'type' => 'key', 'name' => 'order_key', 'columns' => array( 'order_key' ) ),
			array( 'type' => 'primary', 'columns' => array( 'id' ) ),
	);
}
