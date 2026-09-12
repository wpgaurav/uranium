<?php
/**
 * Title: Compact footer
 * Slug: uranium/footer-compact
 * Categories: uranium-footers
 * Block Types: core/template-part/footer
 * Description: A dark footer with the site name, a short line, a project link and the legal row.
 *
 * @package Uranium
 */

?>
<!-- wp:group {"className":"u-footer-main","style":{"spacing":{"padding":{"top":"48px","bottom":"28px"}}},"backgroundColor":"band","textColor":"on-band","layout":{"type":"constrained"}} -->
<div class="wp-block-group u-footer-main has-on-band-color has-band-background-color has-text-color has-background" style="padding-top:48px;padding-bottom:28px"><!-- wp:group {"align":"wide","className":"u-footer-top","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group alignwide u-footer-top"><!-- wp:group {"className":"u-footer-brand","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group u-footer-brand"><!-- wp:site-title {"level":0} /-->

<!-- wp:paragraph {"className":"u-muted","fontSize":"small"} -->
<p class="u-muted has-small-font-size"><?php esc_html_e( 'Equipment and service for plants that run around the clock.', 'uranium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link is-arrow-diagonal"} -->
<div class="wp-block-button is-style-text-link is-arrow-diagonal"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Start a project with us', 'uranium' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:separator {"align":"wide"} -->
<hr class="wp-block-separator alignwide has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:pattern {"slug":"uranium/footer-legal"} /--></div>
<!-- /wp:group -->
