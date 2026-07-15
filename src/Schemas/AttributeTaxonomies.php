<?php
/**
 * GENERATED FILE - do not edit by hand.
 *
 * Introspected from the live WooCommerce table `wp_woocommerce_attribute_taxonomies` (structure only).
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
class AttributeTaxonomies extends Schema {

	/** @var array<int, array<string, mixed>> */
	public $columns = array(
			array( 'name' => 'attribute_id', 'type' => 'bigint', 'unsigned' => true, 'extra' => 'auto_increment', 'primary' => true ),
			array( 'name' => 'attribute_name', 'type' => 'varchar', 'length' => '200', 'default' => false ),
			array( 'name' => 'attribute_label', 'type' => 'varchar', 'length' => '200', 'allow_null' => true, 'default' => null ),
			array( 'name' => 'attribute_type', 'type' => 'varchar', 'length' => '20', 'default' => false ),
			array( 'name' => 'attribute_orderby', 'type' => 'varchar', 'length' => '20', 'default' => false ),
			array( 'name' => 'attribute_public', 'type' => 'int', 'unsigned' => false, 'default' => '1' ),
	);

	/** @var array<int, array<string, mixed>> */
	public $indexes = array(
			array( 'type' => 'key', 'name' => 'attribute_name', 'columns' => array( 'attribute_name(20)' ) ),
			array( 'type' => 'primary', 'columns' => array( 'attribute_id' ) ),
	);
}
