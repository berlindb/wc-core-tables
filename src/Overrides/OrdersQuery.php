<?php
/**
 * A BerlinDB query over WooCommerce's HPOS `wc_orders` table.
 *
 * @package WcCoreTables\Overrides
 */

declare( strict_types = 1 );

namespace WcCoreTables\Overrides;

use BerlinDB\Database\Kern\Query;
use WcCoreTables\Schemas\Orders as OrdersSchema;

defined( 'ABSPATH' ) || exit;

/**
 * Reads the HPOS orders table the BerlinDB way. Used by OrdersQueryOverride to satisfy a
 * WooCommerce order query from BerlinDB instead of WooCommerce's own generated SQL.
 *
 * Item names are namespaced ('wcct_order') so BerlinDB's hooks/filters never collide with
 * WooCommerce's own. The schema is the generated, structure-only `wc_orders` Schema, so
 * this supports the built-in query vars (number/offset/orderby/order/include/fields) - not
 * WooCommerce's full order-query grammar.
 *
 * @since 0.1.0
 */
class OrdersQuery extends Query {

	/** Base (unprefixed) table name: resolves to {$wpdb->prefix}wc_orders. */
	protected $table_name = 'wc_orders';

	/** Short alias used in generated SQL. */
	protected $table_alias = 'o';

	/** The generated schema describing wc_orders' columns and indexes. */
	protected $table_schema = OrdersSchema::class;

	/** Namespaced item name (drives BerlinDB hook names; kept away from WooCommerce). */
	protected $item_name = 'wcct_order';

	/** Namespaced plural item name. */
	protected $item_name_plural = 'wcct_orders';

	/** Raw rows are returned as plain objects. */
	protected $item_shape = 'stdClass';

	/** Object cache group (namespaced away from WooCommerce). */
	protected $cache_group = 'wccoretables_orders';
}
