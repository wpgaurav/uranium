<?php
/**
 * Title: Footer with four link columns
 * Slug: uranium/footer-columns
 * Categories: uranium-footers
 * Block Types: core/template-part/footer
 * Description: A dark footer with the site name, a short line, a project link, four link columns and a legal row.
 *
 * @package Uranium
 */

?>
<!-- wp:group {"className":"u-footer-main","style":{"spacing":{"padding":{"top":"60px","bottom":"28px"}}},"backgroundColor":"band","textColor":"on-band","layout":{"type":"constrained"}} -->
<div class="wp-block-group u-footer-main has-on-band-color has-band-background-color has-text-color has-background" style="padding-top:60px;padding-bottom:28px"><!-- wp:group {"align":"wide","className":"u-footer-top","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
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

<!-- wp:group {"align":"wide","className":"u-footer-cols","style":{"spacing":{"blockGap":"32px"}},"layout":{"type":"grid","columnCount":4,"minimumColumnWidth":"11rem"}} -->
<div class="wp-block-group alignwide u-footer-cols"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-label u-muted"} -->
<p class="is-style-label u-muted"><?php esc_html_e( 'Equipment', 'uranium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"u-link-list"} -->
<ul class="wp-block-list u-link-list"><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/shop/' ) ); ?>"><?php esc_html_e( 'Pumps', 'uranium' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/shop/' ) ); ?>"><?php esc_html_e( 'Valves and actuators', 'uranium' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/shop/' ) ); ?>"><?php esc_html_e( 'Drives and motors', 'uranium' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/shop/' ) ); ?>"><?php esc_html_e( 'Instrumentation', 'uranium' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/shop/' ) ); ?>"><?php esc_html_e( 'Spare parts', 'uranium' ); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-label u-muted"} -->
<p class="is-style-label u-muted"><?php esc_html_e( 'Service', 'uranium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"u-link-list"} -->
<ul class="wp-block-list u-link-list"><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'Field service', 'uranium' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'Repairs and overhauls', 'uranium' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'Rental fleet', 'uranium' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/support/' ) ); ?>"><?php esc_html_e( 'Manuals and downloads', 'uranium' ); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-label u-muted"} -->
<p class="is-style-label u-muted"><?php esc_html_e( 'Company', 'uranium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"u-link-list"} -->
<ul class="wp-block-list u-link-list"><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/company/' ) ); ?>"><?php esc_html_e( 'About us', 'uranium' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/solutions/' ) ); ?>"><?php esc_html_e( 'Industries', 'uranium' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/company/' ) ); ?>"><?php esc_html_e( 'Careers', 'uranium' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>"><?php esc_html_e( 'News and field notes', 'uranium' ); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-label u-muted"} -->
<p class="is-style-label u-muted"><?php esc_html_e( 'Contact', 'uranium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"u-link-list"} -->
<ul class="wp-block-list u-link-list"><!-- wp:list-item -->
<li><a href="tel:+15550142200">+1 555 014 2200</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="mailto:sales@example.com">sales@example.com</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item {"className":"u-muted"} -->
<li class="u-muted"><?php esc_html_e( '1200 Foundry Road, Pittsburgh, PA', 'uranium' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:separator {"align":"wide"} -->
<hr class="wp-block-separator alignwide has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:pattern {"slug":"uranium/footer-legal"} /--></div>
<!-- /wp:group -->
