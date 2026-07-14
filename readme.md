# wc-core-tables

BerlinDB schemas for **WooCommerce's** core database tables - **auto-generated** by
introspecting a live install, and continuously tested to measure whether shared
[`berlindb/core`](https://github.com/berlindb/core) can faithfully reproduce them.

Sibling of [`berlindb/wp-core-tables`](https://github.com/berlindb/wp-core-tables),
[`edd-core-tables`](https://github.com/berlindb/edd-core-tables), and
[`sc-core-tables`](https://github.com/berlindb/sc-core-tables).

> This is an independent, community project. It is **not affiliated with, endorsed by, or
> sponsored by** WooCommerce or Automattic. "WooCommerce" is a trademark of Automattic
> Inc., used here only nominatively to describe compatibility. No WooCommerce trademark
> appears in this project's package, namespace, or class names.

## Why this exists

WooCommerce does not use BerlinDB - it has its own CRUD data stores and HPOS
(High-Performance Order Storage). So, like `wp-core-tables`, this project *adds* a
BerlinDB layer over WooCommerce's existing tables: it declares each table as a
`berlindb/core` schema and verifies core can express it exactly.

## How it works

1. **Generate** (`bin/generate-schemas.php`) - reads every WooCommerce-owned table (the
   authoritative `WC_Install::get_tables()` list, both the `wc_*` and `woocommerce_*`
   prefixes, incl. the HPOS order tables; **excludes** the bundled Action Scheduler
   library) via `information_schema` and emits a `berlindb/core` Schema class per table
   into [`src/Schemas/`](src/Schemas/). Both prefixes are stripped from class names, so no
   class is named after the WooCommerce mark (`wc_orders` -> `Orders`,
   `woocommerce_order_items` -> `OrderItems`).
2. **Capability test** (`tests/CapabilityTest.php`) - core creates a scratch table from
   each schema, re-introspects it, and compares against the live table. Strict.

## Current status

**Green** - all **35** WooCommerce tables (31 base + 4 HPOS) reproduce exactly on today's
`berlindb/core`. This validates the two fixes WooCommerce's schema stresses hardest:
`decimal(P,S)` scale (WooCommerce money is `decimal(26,8)`;
[core#244](https://github.com/berlindb/core/issues/244)) and DEFAULT-less NOT NULL text
([core#245](https://github.com/berlindb/core/issues/245)). Composite and non-auto-increment
primary keys (WooCommerce has several, incl. HPOS `wc_orders`) also reproduce.

## Staying current

A scheduled workflow polls WooCommerce's latest release, regenerates the schemas, and
opens a PR when the schema changes. CI runs the capability test against released
WooCommerce plugin builds (from wordpress.org), and `berlindb/core` canaries this suite on
every push to core master.

## Structural parity only

Generation reads the DDL (columns + indexes) - not WooCommerce's higher-level data-store
behavior. This proves *structural* parity, not *behavioral* parity.
