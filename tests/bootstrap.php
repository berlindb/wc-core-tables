<?php
/**
 * PHPUnit bootstrap: load WP test suite, berlindb/core, WooCommerce, and this package,
 * then run WooCommerce's installer (incl. HPOS) so the capability test has live tables.
 *
 * @package WcCoreTables\Tests
 */

declare( strict_types = 1 );

use Yoast\WPTestUtils\WPIntegration;

$wcct_root = dirname( __DIR__ );

require_once $wcct_root . '/vendor/autoload.php';
require_once $wcct_root . '/vendor/yoast/wp-test-utils/src/WPIntegration/bootstrap-functions.php';

$_tests_dir = WPIntegration\get_path_to_wp_test_dir();

require_once $_tests_dir . '/includes/functions.php';

// Load WooCommerce and this package as must-use plugins.
tests_add_filter(
	'muplugins_loaded',
	static function () use ( $wcct_root ) {
		// WooCommerce is checked out next to this plugin by CI (WC_PLUGIN_FILE).
		$wc = getenv( 'WC_PLUGIN_FILE' );
		if ( ! empty( $wc ) && is_readable( $wc ) ) {
			// Opt into HPOS before install so the order tables are created.
			if ( ! defined( 'WC_INSTALLING' ) ) {
				define( 'WC_INSTALLING', true );
			}
			require_once $wc;
		}

		require_once $wcct_root . '/wc-core-tables.php';
	}
);

// After WooCommerce has booted, run its installer and force the HPOS tables so every
// WooCommerce-owned table exists in the test database.
tests_add_filter(
	'init',
	static function () {
		if ( class_exists( '\\WC_Install' ) ) {
			\WC_Install::install();
		}

		if ( function_exists( 'wc_get_container' ) ) {
			$sync = '\\Automattic\\WooCommerce\\Internal\\DataStores\\Orders\\DataSynchronizer';
			try {
				$ds = wc_get_container()->get( $sync );
				if ( is_object( $ds ) && method_exists( $ds, 'create_database_tables' ) ) {
					$ds->create_database_tables();
				}
			} catch ( \Throwable $e ) {
				// HPOS tables are optional to the run; the capability test skips missing tables.
			}
		}
	},
	5
);

WPIntegration\bootstrap_it();
