<?php
/**
 * GENERATED FILE - do not edit by hand.
 *
 * Introspected from the live WooCommerce table `wp_wc_product_attributes_lookup` (structure only).
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
class ProductAttributesLookup extends Schema {

	/** @var array<int, array<string, mixed>> */
	public $columns = array(
			array( 'name' => 'product_id', 'type' => 'bigint', 'length' => '20', 'unsigned' => false, 'default' => false ),
			array( 'name' => 'product_or_parent_id', 'type' => 'bigint', 'length' => '20', 'unsigned' => false, 'default' => false ),
			array( 'name' => 'taxonomy', 'type' => 'varchar', 'length' => '32', 'default' => false ),
			array( 'name' => 'term_id', 'type' => 'bigint', 'length' => '20', 'unsigned' => false, 'default' => false ),
			array( 'name' => 'is_variation_attribute', 'type' => 'tinyint', 'length' => '1', 'unsigned' => false, 'default' => false ),
			array( 'name' => 'in_stock', 'type' => 'tinyint', 'length' => '1', 'unsigned' => false, 'default' => false ),
	);

	/** @var array<int, array<string, mixed>> */
	public $indexes = array(
			array( 'type' => 'key', 'name' => 'is_variation_attribute_term_id', 'columns' => array( 'is_variation_attribute', 'term_id' ) ),
			array( 'type' => 'primary', 'columns' => array( 'product_or_parent_id', 'term_id', 'product_id', 'taxonomy' ) ),
			array( 'type' => 'key', 'name' => 'product_id', 'columns' => array( 'product_id' ) ),
			array( 'type' => 'key', 'name' => 'taxonomy_term_id_in_stock_product_or_parent_id', 'columns' => array( 'taxonomy', 'term_id', 'in_stock', 'product_or_parent_id' ) ),
	);
}
