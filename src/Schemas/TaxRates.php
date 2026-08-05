<?php
/**
 * GENERATED FILE - do not edit by hand.
 *
 * Introspected from the live WooCommerce table `wp_woocommerce_tax_rates` (structure only).
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
class TaxRates extends Schema {

	/** @var array<int, array<string, mixed>> */
	public $columns = array(
			array( 'name' => 'tax_rate_id', 'type' => 'bigint', 'unsigned' => true, 'extra' => 'auto_increment', 'primary' => true ),
			array( 'name' => 'tax_rate_country', 'type' => 'varchar', 'length' => '2', 'default' => '' ),
			array( 'name' => 'tax_rate_state', 'type' => 'varchar', 'length' => '200', 'default' => '' ),
			array( 'name' => 'tax_rate', 'type' => 'varchar', 'length' => '8', 'default' => '' ),
			array( 'name' => 'tax_rate_name', 'type' => 'varchar', 'length' => '200', 'default' => '' ),
			array( 'name' => 'tax_rate_priority', 'type' => 'bigint', 'unsigned' => true, 'default' => false ),
			array( 'name' => 'tax_rate_compound', 'type' => 'int', 'unsigned' => false, 'default' => '0' ),
			array( 'name' => 'tax_rate_shipping', 'type' => 'int', 'unsigned' => false, 'default' => '1' ),
			array( 'name' => 'tax_rate_order', 'type' => 'bigint', 'unsigned' => true, 'default' => false ),
			array( 'name' => 'tax_rate_class', 'type' => 'varchar', 'length' => '200', 'default' => '' ),
	);

	/** @var array<int, array<string, mixed>> */
	public $indexes = array(
			array( 'type' => 'primary', 'columns' => array( 'tax_rate_id' ) ),
			array( 'type' => 'key', 'name' => 'tax_rate_class', 'columns' => array( 'tax_rate_class(10)' ) ),
			array( 'type' => 'key', 'name' => 'tax_rate_country', 'columns' => array( 'tax_rate_country' ) ),
			array( 'type' => 'key', 'name' => 'tax_rate_priority', 'columns' => array( 'tax_rate_priority' ) ),
			array( 'type' => 'key', 'name' => 'tax_rate_state', 'columns' => array( 'tax_rate_state(2)' ) ),
	);
}
