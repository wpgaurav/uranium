# Phase 0 findings

Checked on 2026-09-12 against WordPress 7.1, WooCommerce 11.1.0 and FluentCart 1.6.4 on the Uranium Theme Dev and Uranium FluentCart Dev Studio sites.

## WordPress 7.1 and a hybrid theme

- **Styles panel:** a classic theme with theme.json gets no Styles panel in the Site Editor. That's why the accent palette and color mode live in the Customizer. `inc/palettes.php` merges the chosen palette through `wp_theme_json_data_theme`, so the editor and the front end use the same values.
- **Template parts:** `add_theme_support( 'block-template-parts' )` makes `parts/header.html` and `parts/footer.html` editable in the Site Editor. `block_template_part()` renders them from the PHP shell.
- **Where presets live:** preset custom properties are printed on `:root`, and the default palette's variables are printed even with `defaultPalette: false`. Uranium's dark mode redefines the presets on `html[data-theme]` and on `body`.
- **Pattern cache:** the pattern file list is cached. New files in `patterns/` only show up after the cache expires, unless `WP_DEVELOPMENT_MODE` is `theme`. Both dev sites set it.
- **Grid gaps:** a Grid-layout group computes its column widths from `blockGap`. Overriding `gap` in CSS makes the grid drop a column. Set the gap with the block's own spacing attribute instead.

## FluentCart 1.6.4

- **Theme support:** `add_theme_support( 'fluent_cart' )` switches FluentCart from its generic fallback to `template_include` with `locate_template()`. It looks in the theme root and in `fluent-cart/` (the `fluent_cart/template_path` filter) for these files:
  - `single-fluent-products.php`
  - `taxonomy-product-categories.php`
  - `taxonomy-product-brands.php`
  - `archive-fluent-products.php`
- **Single product:** a supported theme renders the gallery, title, price and buy box itself, by calling `do_action( 'fluent_cart/product/render_product_header', $post_id )`. `the_content()` appends anything hooked to `fluent_cart/product/after_product_content`.
- **Archives:** taxonomy templates call these actions in order:
  - `fluent_cart/template/before_content`, which prints FluentCart's archive header; Uranium hides it and uses its own page heading
  - `fluent_cart/template/main_content`
  - `fluent_cart/template/after_content`
- **Block templates:** FluentCart only registers them for block themes (`supportsBlockTemplates( 'wp_template' )`), so a hybrid theme gets none.
- **Colors:** colors are `--fct-*` variables declared on `:root` with fallbacks, for example `--fct-single-product-primary-text-color: var(--fct-primary-text-color, #2F3448)`. Redefining them on `body` maps every FluentCart screen to Uranium's tokens.
- **Store pages:** `\FluentCart\App\CPT\Pages::createPages()` creates Checkout, Cart, Receipt, Shop and Account pages and saves their IDs as `{key}_page_id` in the store settings.
- **Header blocks:** FluentCart has a `fluent-cart/mini-cart` block and a `fluent-cart/customer-dashboard-button` block.

## WooCommerce 11.1

- **Cart and checkout:** a new install creates both pages from blocks and My Account from a shortcode. The blocks keep working in a classic theme.
- **Block Hooks:** WooCommerce adds its Customer Account and Mini-Cart blocks after `core/navigation` in header parts. Uranium removes them with `hooked_block_types`, because its header already places them with the other actions.
- **Coming soon mode:** new stores start in coming soon mode (`woocommerce_coming_soon`), which hides the Mini-Cart from signed-out visitors. The dev site turns it off.
- **Classic templates:** no overrides are needed. Wrappers, the page heading, product cards and the single product layout all use hooks.
