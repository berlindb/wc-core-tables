<?php
/**
 * GENERATED FILE - do not edit by hand.
 *
 * Introspected from the live WooCommerce table `wp_wc_product_meta_lookup` (structure only).
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
class ProductMetaLookup extends Schema {

	/** @var array<int, array<string, mixed>> */
	public $columns = array(
			array( 'name' => 'product_id', 'type' => 'bigint', 'length' => '20', 'unsigned' => false, 'primary' => true, 'default' => false ),
			array( 'name' => 'sku', 'type' => 'varchar', 'length' => '100', 'allow_null' => true, 'default' => '' ),
			array( 'name' => 'global_unique_id', 'type' => 'varchar', 'length' => '100', 'allow_null' => true, 'default' => '' ),
			array( 'name' => 'virtual', 'type' => 'tinyint', 'length' => '1', 'unsigned' => false, 'allow_null' => true, 'default' => '0' ),
			array( 'name' => 'downloadable', 'type' => 'tinyint', 'length' => '1', 'unsigned' => false, 'allow_null' => true, 'default' => '0' ),
			array( 'name' => 'min_price', 'type' => 'decimal', 'length' => '19', 'scale' => '4', 'unsigned' => false, 'allow_null' => true, 'default' => null ),
			array( 'name' => 'max_price', 'type' => 'decimal', 'length' => '19', 'scale' => '4', 'unsigned' => false, 'allow_null' => true, 'default' => null ),
			array( 'name' => 'onsale', 'type' => 'tinyint', 'length' => '1', 'unsigned' => false, 'allow_null' => true, 'default' => '0' ),
			array( 'name' => 'stock_quantity', 'type' => 'double', 'unsigned' => false, 'allow_null' => true, 'default' => null ),
			array( 'name' => 'stock_status', 'type' => 'varchar', 'length' => '100', 'allow_null' => true, 'default' => 'instock' ),
			array( 'name' => 'rating_count', 'type' => 'bigint', 'length' => '20', 'unsigned' => false, 'allow_null' => true, 'default' => '0' ),
			array( 'name' => 'average_rating', 'type' => 'decimal', 'length' => '3', 'scale' => '2', 'unsigned' => false, 'allow_null' => true, 'default' => '0.00' ),
			array( 'name' => 'total_sales', 'type' => 'bigint', 'length' => '20', 'unsigned' => false, 'allow_null' => true, 'default' => '0' ),
			array( 'name' => 'tax_status', 'type' => 'varchar', 'length' => '100', 'allow_null' => true, 'default' => 'taxable' ),
			array( 'name' => 'tax_class', 'type' => 'varchar', 'length' => '100', 'allow_null' => true, 'default' => '' ),
	);

	/** @var array<int, array<string, mixed>> */
	public $indexes = array(
			array( 'type' => 'key', 'name' => 'downloadable', 'columns' => array( 'downloadable' ) ),
			array( 'type' => 'key', 'name' => 'min_max_price', 'columns' => array( 'min_price', 'max_price' ) ),
			array( 'type' => 'key', 'name' => 'onsale', 'columns' => array( 'onsale' ) ),
			array( 'type' => 'primary', 'columns' => array( 'product_id' ) ),
			array( 'type' => 'key', 'name' => 'sku', 'columns' => array( 'sku(50)' ) ),
			array( 'type' => 'key', 'name' => 'stock_quantity', 'columns' => array( 'stock_quantity' ) ),
			array( 'type' => 'key', 'name' => 'stock_status', 'columns' => array( 'stock_status' ) ),
			array( 'type' => 'key', 'name' => 'virtual', 'columns' => array( 'virtual' ) ),
	);
}
