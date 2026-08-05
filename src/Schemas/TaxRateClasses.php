<?php
/**
 * GENERATED FILE - do not edit by hand.
 *
 * Introspected from the live WooCommerce table `wp_wc_tax_rate_classes` (structure only).
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
class TaxRateClasses extends Schema {

	/** @var array<int, array<string, mixed>> */
	public $columns = array(
			array( 'name' => 'tax_rate_class_id', 'type' => 'bigint', 'unsigned' => true, 'extra' => 'auto_increment', 'primary' => true ),
			array( 'name' => 'name', 'type' => 'varchar', 'length' => '200', 'default' => '' ),
			array( 'name' => 'slug', 'type' => 'varchar', 'length' => '200', 'default' => '' ),
	);

	/** @var array<int, array<string, mixed>> */
	public $indexes = array(
			array( 'type' => 'primary', 'columns' => array( 'tax_rate_class_id' ) ),
			array( 'type' => 'unique', 'name' => 'slug', 'columns' => array( 'slug(191)' ) ),
	);
}
