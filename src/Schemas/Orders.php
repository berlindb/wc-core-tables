<?php
/**
 * GENERATED FILE - do not edit by hand.
 *
 * Introspected from the live WooCommerce table `wp_wc_orders` (structure only).
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
class Orders extends Schema {

	/** @var array<int, array<string, mixed>> */
	public $columns = array(
			array( 'name' => 'id', 'type' => 'bigint', 'length' => '20', 'unsigned' => true, 'primary' => true, 'default' => false ),
			array( 'name' => 'status', 'type' => 'varchar', 'length' => '20', 'allow_null' => true, 'default' => null ),
			array( 'name' => 'currency', 'type' => 'varchar', 'length' => '10', 'allow_null' => true, 'default' => null ),
			array( 'name' => 'type', 'type' => 'varchar', 'length' => '20', 'allow_null' => true, 'default' => null ),
			array( 'name' => 'tax_amount', 'type' => 'decimal', 'length' => '26', 'scale' => '8', 'unsigned' => false, 'allow_null' => true, 'default' => null ),
			array( 'name' => 'total_amount', 'type' => 'decimal', 'length' => '26', 'scale' => '8', 'unsigned' => false, 'allow_null' => true, 'default' => null ),
			array( 'name' => 'customer_id', 'type' => 'bigint', 'length' => '20', 'unsigned' => true, 'allow_null' => true, 'default' => null ),
			array( 'name' => 'billing_email', 'type' => 'varchar', 'length' => '320', 'allow_null' => true, 'default' => null ),
			array( 'name' => 'date_created_gmt', 'type' => 'datetime', 'allow_null' => true, 'default' => null ),
			array( 'name' => 'date_updated_gmt', 'type' => 'datetime', 'allow_null' => true, 'default' => null ),
			array( 'name' => 'parent_order_id', 'type' => 'bigint', 'length' => '20', 'unsigned' => true, 'allow_null' => true, 'default' => null ),
			array( 'name' => 'payment_method', 'type' => 'varchar', 'length' => '100', 'allow_null' => true, 'default' => null ),
			array( 'name' => 'payment_method_title', 'type' => 'text', 'allow_null' => true, 'default' => null ),
			array( 'name' => 'transaction_id', 'type' => 'varchar', 'length' => '100', 'allow_null' => true, 'default' => null ),
			array( 'name' => 'ip_address', 'type' => 'varchar', 'length' => '100', 'allow_null' => true, 'default' => null ),
			array( 'name' => 'user_agent', 'type' => 'text', 'allow_null' => true, 'default' => null ),
			array( 'name' => 'customer_note', 'type' => 'text', 'allow_null' => true, 'default' => null ),
	);

	/** @var array<int, array<string, mixed>> */
	public $indexes = array(
			array( 'type' => 'key', 'name' => 'billing_email', 'columns' => array( 'billing_email(191)' ) ),
			array( 'type' => 'key', 'name' => 'customer_id_billing_email', 'columns' => array( 'customer_id', 'billing_email(171)' ) ),
			array( 'type' => 'key', 'name' => 'customer_id_status', 'columns' => array( 'customer_id', 'status' ) ),
			array( 'type' => 'key', 'name' => 'date_created', 'columns' => array( 'date_created_gmt' ) ),
			array( 'type' => 'key', 'name' => 'date_updated', 'columns' => array( 'date_updated_gmt' ) ),
			array( 'type' => 'key', 'name' => 'parent_order_id', 'columns' => array( 'parent_order_id' ) ),
			array( 'type' => 'primary', 'columns' => array( 'id' ) ),
			array( 'type' => 'key', 'name' => 'status', 'columns' => array( 'status' ) ),
			array( 'type' => 'key', 'name' => 'transaction_id', 'columns' => array( 'transaction_id(20)' ) ),
			array( 'type' => 'key', 'name' => 'type_status_date', 'columns' => array( 'type', 'status', 'date_created_gmt' ) ),
	);
}
