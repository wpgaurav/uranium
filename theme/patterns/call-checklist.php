<?php
/**
 * Title: Breakdown call checklist
 * Slug: uranium/call-checklist
 * Categories: uranium-contact
 * Keywords: support, breakdown, checklist, emergency, phone, service desk
 * Viewport Width: 1440
 * Description: A heading and a checklist of what to have ready before calling, beside a surface panel with the breakdown number, opening hours and a link to book a planned visit.
 *
 * @package Uranium
 */

$uranium_checks = array(
	__( 'The model and serial number from the nameplate, or a photo of it', 'uranium' ),
	__( 'What the equipment was doing when it stopped, and any alarm codes', 'uranium' ),
	__( 'Whether it can run at reduced load while you wait', 'uranium' ),
	__( 'The site address and a name we can ask for at the gate', 'uranium' ),
	__( 'Your order number, if the equipment is on a service plan', 'uranium' ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"align":"wide","className":"u-split"} -->
<div class="wp-block-columns alignwide u-split"><!-- wp:column {"width":"55%"} -->
<div class="wp-block-column" style="flex-basis:55%"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Before you call the breakdown line', 'uranium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"u-muted"} -->
<p class="u-muted"><?php esc_html_e( 'Five answers let the engineer on call bring the right parts on the first trip.', 'uranium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-checklist"} -->
<ul class="wp-block-list is-style-checklist"><?php foreach ( $uranium_checks as $uranium_check ) : ?><!-- wp:list-item -->
<li><?php echo esc_html( $uranium_check ); ?></li>
<!-- /wp:list-item --><?php endforeach; ?></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"45%"} -->
<div class="wp-block-column" style="flex-basis:45%"><!-- wp:group {"className":"is-style-panel","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-panel"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php esc_html_e( 'Breakdown line, 24 hours', 'uranium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"u-callout-number"} -->
<p class="u-callout-number"><a href="tel:+15550142299">+1 555 014 2299</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"u-muted"} -->
<p class="u-muted"><?php esc_html_e( 'An engineer calls back within 60 minutes. Plan customers are on site inside 24 hours.', 'uranium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-note"} -->
<p class="is-style-note"><?php esc_html_e( 'Planned visits are booked Monday to Friday, 7 a.m. to 6 p.m.', 'uranium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'Book a planned visit', 'uranium' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
