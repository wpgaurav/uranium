<?php
/**
 * Title: Signal band
 * Slug: uranium/signal-band
 * Categories: uranium-closers, featured
 * Keywords: cta, call to action, closer, banner, accent
 * Viewport Width: 1440
 * Description: A band in the accent color with a large statement and a link to start a quote.
 *
 * @package Uranium
 */

?>
<!-- wp:group {"align":"full","className":"u-band u-signal-band","backgroundColor":"signal","textColor":"on-signal","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull u-band u-signal-band has-on-signal-color has-signal-background-color has-text-color has-background" style="padding-top:64px;padding-bottom:64px"><!-- wp:group {"align":"wide","className":"u-section-head","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide u-section-head"><!-- wp:heading {"fontSize":"statement"} -->
<h2 class="wp-block-heading has-statement-font-size"><?php esc_html_e( "Send us the spec. We'll send the quote.", 'uranium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link is-arrow-diagonal"} -->
<div class="wp-block-button is-style-text-link is-arrow-diagonal"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Start a quote', 'uranium' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
