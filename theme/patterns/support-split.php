<?php
/**
 * Title: Support split
 * Slug: uranium/support-split
 * Categories: uranium-contact
 * Keywords: support, search, downloads, help, service desk
 * Viewport Width: 1440
 * Description: A document search and resource rows beside a help panel with a service desk button and a breakdown line.
 *
 * @package Uranium
 */

$uranium_docs = array(
	array( __( 'PDF / 2.4 MB', 'uranium' ), __( 'CP-80 installation and operation manual', 'uranium' ) ),
	array( __( 'PDF / 640 KB', 'uranium' ), __( 'Seal replacement guide for CP-series pumps', 'uranium' ) ),
	array( __( 'PDF / 1.3 MB', 'uranium' ), __( 'Commissioning checklist for new installations', 'uranium' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"align":"wide","className":"u-split"} -->
<div class="wp-block-columns alignwide u-split"><!-- wp:column {"width":"55%"} -->
<div class="wp-block-column" style="flex-basis:55%"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Find a manual, drawing or certificate', 'uranium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:search {"label":"<?php echo esc_attr__( 'Search documents', 'uranium' ); ?>","showLabel":false,"placeholder":"<?php echo esc_attr__( 'Model or part number', 'uranium' ); ?>","buttonText":"<?php echo esc_attr__( 'Search', 'uranium' ); ?>","className":"u-doc-search"} /-->

<!-- wp:group {"className":"is-style-rows","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-rows"><?php foreach ( $uranium_docs as $uranium_doc ) : ?><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-meta"} -->
<p class="is-style-meta"><?php echo esc_html( $uranium_doc[0] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><a href="<?php echo esc_url( home_url( '/support/' ) ); ?>"><?php echo esc_html( $uranium_doc[1] ); ?></a></h3>
<!-- /wp:heading --></div>
<!-- /wp:group --><?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"45%"} -->
<div class="wp-block-column" style="flex-basis:45%"><!-- wp:group {"className":"is-style-panel","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-panel"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e( "Can't find it?", 'uranium' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"u-muted"} -->
<p class="u-muted"><?php esc_html_e( 'Send the serial number and we will send the right document, including revisions for older units.', 'uranium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Ask the service desk', 'uranium' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"className":"u-muted","fontSize":"small"} -->
<p class="u-muted has-small-font-size"><?php esc_html_e( 'Equipment down right now?', 'uranium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link is-arrow-none"} -->
<div class="wp-block-button is-style-text-link is-arrow-none"><a class="wp-block-button__link wp-element-button" href="tel:+15550142299"><?php esc_html_e( 'Call +1 555 014 2299', 'uranium' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
