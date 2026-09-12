<?php
/**
 * Title: Dark closer with two actions
 * Slug: uranium/dark-close
 * Categories: uranium-closers
 * Keywords: cta, call to action, closer, dark, contact
 * Viewport Width: 1440
 * Description: A dark band with a heading and a short line beside a quote button and a phone button.
 *
 * @package Uranium
 */

?>
<!-- wp:group {"align":"full","className":"u-band","backgroundColor":"band","textColor":"on-band","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull u-band has-on-band-color has-band-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"verticalAlignment":"bottom","align":"wide","className":"u-split"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-bottom u-split"><!-- wp:column {"verticalAlignment":"bottom","width":"60%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:60%"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Need it running again by Monday?', 'uranium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"u-muted"} -->
<p class="u-muted"><?php esc_html_e( 'Call the breakdown line at any hour. A technician calls you back within 60 minutes.', 'uranium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:40%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Request a quote', 'uranium' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline is-arrow-none"} -->
<div class="wp-block-button is-style-outline is-arrow-none"><a class="wp-block-button__link wp-element-button" href="tel:+15550142299"><?php esc_html_e( 'Call +1 555 014 2299', 'uranium' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
