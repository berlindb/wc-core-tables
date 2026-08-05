<?php
/**
 * GENERATED FILE - do not edit by hand.
 *
 * Introspected from the live WooCommerce table `wp_woocommerce_payment_tokens` (structure only).
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
class PaymentTokens extends Schema {

	/** @var array<int, array<string, mixed>> */
	public $columns = array(
			array( 'name' => 'token_id', 'type' => 'bigint', 'unsigned' => true, 'extra' => 'auto_increment', 'primary' => true ),
			array( 'name' => 'gateway_id', 'type' => 'varchar', 'length' => '200', 'default' => false ),
			array( 'name' => 'token', 'type' => 'text' ),
			array( 'name' => 'user_id', 'type' => 'bigint', 'unsigned' => true, 'default' => '0' ),
			array( 'name' => 'type', 'type' => 'varchar', 'length' => '200', 'default' => false ),
			array( 'name' => 'is_default', 'type' => 'tinyint', 'length' => '1', 'unsigned' => false, 'default' => '0' ),
	);

	/** @var array<int, array<string, mixed>> */
	public $indexes = array(
			array( 'type' => 'primary', 'columns' => array( 'token_id' ) ),
			array( 'type' => 'key', 'name' => 'user_id', 'columns' => array( 'user_id' ) ),
	);
}
