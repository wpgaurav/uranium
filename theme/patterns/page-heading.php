<?php
/**
 * Title: Page heading
 * Slug: uranium/page-heading
 * Categories: uranium-openers
 * Keywords: heading, title, intro, page
 * Viewport Width: 1440
 * Description: A large page title with an intro line and two actions over a bottom rule. Use it at the top of pages on the Full width template.
 *
 * @package Uranium
 */

?>
<!-- wp:group {"align":"full","className":"u-heading-block","style":{"spacing":{"padding":{"top":"60px","bottom":"52px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull u-heading-block" style="padding-top:60px;padding-bottom:52px"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"level":1,"fontSize":"page-title"} -->
<h1 class="wp-block-heading has-page-title-font-size"><?php esc_html_e( 'Equipment for every stage of the process', 'uranium' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"u-muted","fontSize":"intro"} -->
<p class="u-muted has-intro-font-size"><?php esc_html_e( 'Pumps, valves, drives and instruments from one supplier, with one team that knows how it all fits together.', 'uranium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Request a quote', 'uranium' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/support/' ) ); ?>"><?php esc_html_e( 'Download the catalog', 'uranium' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
