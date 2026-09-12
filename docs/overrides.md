# Store template overrides

Uranium ships no WooCommerce template overrides. Everything in `inc/woocommerce.php` uses hooks, so a WooCommerce update never marks a Uranium template as outdated.

If an override ever becomes unavoidable, list it here with the WooCommerce version it was copied from and the reason a hook couldn't do the job.

| Template | Copied from | Reason |
|---|---|---|
| none | | |

The FluentCart templates in `theme/fluent-cart/` aren't overrides of FluentCart files. They're the theme templates FluentCart asks for once a theme declares `add_theme_support( 'fluent_cart' )`, and each one only calls FluentCart's own renderers.
