<?php
/**
 * GENERATED FILE - do not edit by hand.
 *
 * Introspected from the live WooCommerce table `wp_woocommerce_payment_tokenmeta` (structure only).
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
class PaymentTokenmeta extends Schema {

	/** @var array<int, array<string, mixed>> */
	public $columns = array(
			array( 'name' => 'meta_id', 'type' => 'bigint', 'length' => '20', 'unsigned' => true, 'extra' => 'auto_increment', 'primary' => true ),
			array( 'name' => 'payment_token_id', 'type' => 'bigint', 'length' => '20', 'unsigned' => true, 'default' => false ),
			array( 'name' => 'meta_key', 'type' => 'varchar', 'length' => '255', 'allow_null' => true, 'default' => null ),
			array( 'name' => 'meta_value', 'type' => 'longtext', 'allow_null' => true, 'default' => null ),
	);

	/** @var array<int, array<string, mixed>> */
	public $indexes = array(
			array( 'type' => 'key', 'name' => 'meta_key', 'columns' => array( 'meta_key(32)' ) ),
			array( 'type' => 'key', 'name' => 'payment_token_id', 'columns' => array( 'payment_token_id' ) ),
			array( 'type' => 'primary', 'columns' => array( 'meta_id' ) ),
	);
}
