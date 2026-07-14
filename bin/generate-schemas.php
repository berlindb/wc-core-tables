<?php
/**
 * Regenerate the schema classes from a live WooCommerce install.
 *
 * Run inside a WordPress environment that has WooCommerce active (with HPOS enabled to
 * include the order tables):
 *   wp eval-file bin/generate-schemas.php
 *
 * It introspects every WooCommerce-owned `{$prefix}wc_*` and `{$prefix}woocommerce_*`
 * table and writes one berlindb/core Schema class per table into src/Schemas/, plus a
 * manifest mapping class name -> unprefixed table name.
 *
 * Naming: BOTH the `wc_` and `woocommerce_` prefixes are stripped from class names, so a
 * class is never named after the WooCommerce mark (wc_orders -> Orders,
 * woocommerce_order_items -> OrderItems).
 *
 * @package WcCoreTables
 */

declare( strict_types = 1 );

use WcCoreTables\Generator\SchemaGenerator;

if ( ! defined( 'ABSPATH' ) ) {
	fwrite( STDERR, "Must run inside WordPress (wp eval-file).\n" );
	exit( 1 );
}

require_once __DIR__ . '/../vendor/autoload.php';

global $wpdb;

$schemas_dir = __DIR__ . '/../src/Schemas';

/*
 * The authoritative WooCommerce-owned table list is WC_Install::get_tables() - use it
 * so we track exactly WooCommerce's set (and never Action Scheduler's `actionscheduler_*`
 * tables, which are a bundled, independently-maintained library, not part of it).
 */
$tables = array();
if ( is_callable( array( 'WC_Install', 'get_tables' ) ) ) {
	$tables = \WC_Install::get_tables();
} else {
	// Fallback: enumerate by prefix if WC_Install is unavailable.
	foreach ( array( 'wc_', 'woocommerce_' ) as $p ) {
		$like     = $wpdb->esc_like( $wpdb->prefix . $p ) . '%';
		$tables   = array_merge( $tables, (array) $wpdb->get_col( $wpdb->prepare( 'SHOW TABLES LIKE %s', $like ) ) );
	}
}

// Only introspect tables that actually exist (HPOS/feature tables may be absent).
$tables = array_values( array_filter(
	$tables,
	static function ( $t ) use ( $wpdb ) {
		return (bool) $wpdb->get_var( $wpdb->prepare( 'SHOW TABLES LIKE %s', $t ) );
	}
) );

if ( empty( $tables ) ) {
	fwrite( STDERR, "No WooCommerce tables found. Is WooCommerce active and installed (HPOS enabled)?\n" );
	exit( 1 );
}

$generator = new SchemaGenerator( $wpdb );
$manifest  = array();

foreach ( $tables as $physical ) {
	$unprefixed = substr( $physical, strlen( $wpdb->prefix ) ); // e.g. wc_orders / woocommerce_order_items
	$bare       = preg_replace( '/^(wc_|woocommerce_)/', '', $unprefixed ); // e.g. orders / order_items
	$class      = str_replace( ' ', '', ucwords( str_replace( '_', ' ', $bare ) ) );

	if ( isset( $manifest[ $class ] ) ) {
		// Extremely unlikely collision between a wc_X and woocommerce_X; keep both by
		// prefixing the class with its own prefix's initial.
		$class = ( 0 === strpos( $unprefixed, 'wc_' ) ? 'Wc' : 'Legacy' ) . $class;
	}

	file_put_contents( "{$schemas_dir}/{$class}.php", $generator->generate( $physical, $class ) );
	$manifest[ $class ] = $unprefixed;

	echo "generated {$class} <- {$physical}\n";
}

ksort( $manifest );
$entries = '';
foreach ( $manifest as $class => $table ) {
	$entries .= "\t'{$class}' => '{$table}',\n";
}

$manifest_src = "<?php\n/**\n * GENERATED - class name => unprefixed WooCommerce table name.\n *\n"
	. " * @package WcCoreTables\\Schemas\n */\n\ndeclare( strict_types = 1 );\n\nreturn array(\n{$entries});\n";

file_put_contents( "{$schemas_dir}/manifest.php", $manifest_src );

echo 'wrote ' . count( $manifest ) . " schema(s) + manifest.\n";
