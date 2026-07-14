<?php
/**
 * Plugin Name:  WC Core Tables (BerlinDB parity)
 * Description:  BerlinDB schemas for WooCommerce's core tables, auto-generated from a live install to measure structural parity. Not affiliated with or endorsed by WooCommerce or Automattic.
 * Author:       BerlinDB
 * License:      GPL-2.0-or-later
 * Requires PHP: 8.1
 *
 * @package WcCoreTables
 */

declare( strict_types = 1 );

defined( 'ABSPATH' ) || exit;

/*
 * A parity harness (generated Schemas + capability tests + the generator), not a runtime
 * feature plugin, so booting only means making the generated classes autoloadable.
 * WooCommerce owns and installs these tables; this package only reads and re-expresses
 * their structure.
 */
if ( is_readable( __DIR__ . '/vendor/autoload.php' ) ) {
	require_once __DIR__ . '/vendor/autoload.php';
}
