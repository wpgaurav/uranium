<?php
/**
 * Title: Contact split
 * Slug: uranium/contact-split
 * Categories: uranium-contact
 * Keywords: contact, phone, email, sales, service
 * Viewport Width: 1440
 * Description: A heading, intro and email link beside direct lines for sales, service and parts. Add your form plugin's block below the rows if you want a form here.
 *
 * @package Uranium
 */

$uranium_lines = array(
	array( __( 'Sales', 'uranium' ), 'tel:+15550142200', '+1 555 014 2200', __( 'Monday to Friday, 7 a.m. to 6 p.m. Eastern', 'uranium' ) ),
	array( __( 'Service and breakdowns', 'uranium' ), 'tel:+15550142299', '+1 555 014 2299', __( '24 hours, every day of the year', 'uranium' ) ),
	array( __( 'Parts', 'uranium' ), 'mailto:parts@example.com', 'parts@example.com', __( 'Same-day shipping on stocked items', 'uranium' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"align":"wide","className":"u-split"} -->
<div class="wp-block-columns alignwide u-split"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Start with the details you have', 'uranium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"u-muted"} -->
<p class="u-muted"><?php esc_html_e( 'A model number, a photo of the nameplate or a rough duty point is enough to begin. We will ask for the rest.', 'uranium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link is-arrow-diagonal"} -->
<div class="wp-block-button is-style-text-link is-arrow-diagonal"><a class="wp-block-button__link wp-element-button" href="mailto:sales@example.com">sales@example.com</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"className":"u-muted","fontSize":"small"} -->
<p class="u-muted has-small-font-size"><?php esc_html_e( 'Already a customer?', 'uranium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/support/' ) ); ?>"><?php esc_html_e( 'Open a service request', 'uranium' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:group {"className":"is-style-rows","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-rows"><?php foreach ( $uranium_lines as $uranium_line ) : ?><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-meta"} -->
<p class="is-style-meta"><?php echo esc_html( $uranium_line[0] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><a href="<?php echo esc_url( $uranium_line[1], array( 'tel', 'mailto' ) ); ?>"><?php echo esc_html( $uranium_line[2] ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"u-muted"} -->
<p class="u-muted"><?php echo esc_html( $uranium_line[3] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
