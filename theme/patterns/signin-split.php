<?php
/**
 * Title: Sign-in split
 * Slug: uranium/signin-split
 * Categories: uranium-contact
 * Keywords: login, sign in, portal, account, partners
 * Viewport Width: 1440
 * Description: A heading, intro and benefit rows beside a panel with the WordPress sign-in form.
 *
 * @package Uranium
 */

?>
<!-- wp:group {"align":"full","className":"u-signin","style":{"spacing":{"padding":{"top":"60px","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull u-signin" style="padding-top:60px;padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"align":"wide","className":"u-split"} -->
<div class="wp-block-columns alignwide u-split"><!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:heading {"fontSize":"page-title"} -->
<h2 class="wp-block-heading has-page-title-font-size"><?php esc_html_e( 'Everything your team orders, in one place', 'uranium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"u-muted","fontSize":"intro"} -->
<p class="u-muted has-intro-font-size"><?php esc_html_e( 'Sign in for account pricing, order history, drawings for the equipment on your sites and service reports.', 'uranium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-hairline"} -->
<ul class="wp-block-list is-style-hairline"><!-- wp:list-item -->
<li><?php esc_html_e( 'Reorder spares from past orders in two clicks.', 'uranium' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'See every service visit and report for each site.', 'uranium' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Download drawings and certificates for installed equipment.', 'uranium' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:group {"className":"is-style-panel","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-panel"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e( 'Sign in', 'uranium' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"u-muted","fontSize":"small"} -->
<p class="u-muted has-small-font-size"><?php esc_html_e( 'Use the account your company administrator set up for you.', 'uranium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:loginout {"displayLoginAsForm":true} /-->

<!-- wp:paragraph {"className":"u-muted","fontSize":"small"} -->
<p class="u-muted has-small-font-size"><?php esc_html_e( 'No account yet?', 'uranium' ); ?> <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Ask for one', 'uranium' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
