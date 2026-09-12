<?php
/**
 * Title: Minimal header for landing pages
 * Slug: uranium/header-minimal
 * Categories: uranium-headers
 * Block Types: core/template-part/header
 * Description: Only the logo and a single call to action, so a landing page keeps visitors on its offer.
 *
 * @package Uranium
 */

?>
<!-- wp:group {"className":"u-masthead","layout":{"type":"constrained"}} -->
<div class="wp-block-group u-masthead"><!-- wp:group {"align":"wide","className":"u-masthead__bar","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide u-masthead__bar"><!-- wp:group {"className":"u-brand","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group u-brand"><!-- wp:site-logo {"width":172,"shouldSyncIcon":false} /-->

<!-- wp:site-title {"level":0} /--></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Request a quote', 'uranium' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
