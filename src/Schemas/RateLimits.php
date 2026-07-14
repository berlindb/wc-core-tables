<?php
/**
 * GENERATED FILE - do not edit by hand.
 *
 * Introspected from the live WooCommerce table `wp_wc_rate_limits` (structure only).
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
class RateLimits extends Schema {

	/** @var array<int, array<string, mixed>> */
	public $columns = array(
			array( 'name' => 'rate_limit_id', 'type' => 'bigint', 'length' => '20', 'unsigned' => true, 'extra' => 'auto_increment', 'primary' => true ),
			array( 'name' => 'rate_limit_key', 'type' => 'varchar', 'length' => '200', 'default' => false ),
			array( 'name' => 'rate_limit_expiry', 'type' => 'bigint', 'length' => '20', 'unsigned' => true, 'default' => false ),
			array( 'name' => 'rate_limit_remaining', 'type' => 'smallint', 'length' => '10', 'unsigned' => false, 'default' => '0' ),
	);

	/** @var array<int, array<string, mixed>> */
	public $indexes = array(
			array( 'type' => 'primary', 'columns' => array( 'rate_limit_id' ) ),
			array( 'type' => 'unique', 'name' => 'rate_limit_key', 'columns' => array( 'rate_limit_key(191)' ) ),
	);
}
