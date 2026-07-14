# Changelog

## [Unreleased]

### Added

- Generator (`bin/generate-schemas.php` + `WcCoreTables\Generator\SchemaGenerator`) that
  introspects a live WooCommerce install via `information_schema` and emits one
  `berlindb/core` Schema class per WooCommerce-owned table (the `WC_Install::get_tables()`
  set - both `wc_*` and `woocommerce_*` prefixes, incl. HPOS; excludes bundled Action
  Scheduler) into `src/Schemas/`, plus a manifest. Class names strip both prefixes so no
  class is named after the WooCommerce mark. A composite primary key is declared via the
  PRIMARY index alone (declaring it per-column made core derive a redundant KEY).
- `CapabilityTest` - strict: core builds a scratch table from each schema, re-introspects
  it, and compares against the live table.
- CI (capability test against released WooCommerce builds from wordpress.org), a scheduled
  regenerate workflow, and a `repository_dispatch` trigger so `berlindb/core` canaries this
  suite.

### Status

**Green.** All 35 tables (31 base + 4 HPOS) reproduce exactly. WooCommerce validates the
`decimal(P,S)` scale fix ([core#244](https://github.com/berlindb/core/issues/244); its
money is `decimal(26,8)`) and the DEFAULT-less NOT NULL text fix
([core#245](https://github.com/berlindb/core/issues/245)) at scale, plus composite /
non-auto-increment primary keys.

### Notes

- Independent project; not affiliated with or endorsed by WooCommerce or Automattic.
- Structural parity only (columns + indexes), not WooCommerce's data-store behavior.
