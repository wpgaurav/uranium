<?php
/**
 * Product rail from the FluentCart store.
 *
 * Registered by inc/fluent-cart.php only when FluentCart is active.
 *
 * @package Uranium
 */

$uranium_fct_shop = home_url( '/shop/' );
if ( function_exists( 'uranium_fluent_cart_page_ids' ) ) {
	$uranium_fct_ids = uranium_fluent_cart_page_ids();
	if ( ! empty( $uranium_fct_ids['shop'] ) ) {
		$uranium_fct_shop = get_permalink( $uranium_fct_ids['shop'] );
	}
}
?>
<!-- wp:group {"align":"full","className":"u-product-rail","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull u-product-rail" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"align":"wide","className":"u-section-head","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide u-section-head"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Ready to ship this week', 'uranium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( $uranium_fct_shop ); ?>"><?php esc_html_e( 'Browse the full catalog', 'uranium' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:shortcode -->
[fluent_cart_products per_page="3" columns="3" paginator="none" view_mode="grid"]
<!-- /wp:shortcode --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
