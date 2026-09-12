<?php
/**
 * Title: Split hero
 * Slug: uranium/hero-split
 * Categories: uranium-openers, featured
 * Keywords: hero, banner, cover, intro, landing
 * Viewport Width: 1440
 * Description: An accent panel with an uppercase headline, a quote button and a catalog link beside a full-height photo with a caption tag and an arrow tile.
 *
 * @package Uranium
 */

?>
<!-- wp:group {"align":"full","className":"u-hero","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull u-hero"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"47%","className":"u-hero__panel"} -->
<div class="wp-block-column u-hero__panel" style="flex-basis:47%"><!-- wp:heading {"level":1,"className":"is-style-display"} -->
<h1 class="wp-block-heading is-style-display"><?php esc_html_e( 'Keep the line running.', 'uranium' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"u-hero__lead"} -->
<p class="u-hero__lead"><?php esc_html_e( "Pumps, valves, drives and spare parts for plants that can't afford a stop. We size the equipment, ship it from stock and keep it serviced for its whole working life.", 'uranium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Request a quote', 'uranium' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link is-arrow-diagonal"} -->
<div class="wp-block-button is-style-text-link is-arrow-diagonal"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/shop/' ) ); ?>"><?php esc_html_e( 'Browse the catalog', 'uranium' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"is-style-note"} -->
<p class="is-style-note"><?php esc_html_e( 'Stocked parts ship the same day on orders placed before 2 p.m.', 'uranium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"53%","className":"u-hero__media"} -->
<div class="wp-block-column u-hero__media" style="flex-basis:53%"><!-- wp:cover {"url":"<?php echo esc_url( uranium_image( 'hero-plant.webp' ) ); ?>","alt":"<?php echo esc_attr__( 'A technician checks a flange on a pump casing in a bright assembly hall', 'uranium' ); ?>","dimRatio":0,"minHeight":590,"contentPosition":"bottom left","isDark":false,"layout":{"type":"default"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left" style="min-height:590px"><img class="wp-block-cover__image-background" alt="<?php echo esc_attr__( 'A technician checks a flange on a pump casing in a bright assembly hall', 'uranium' ); ?>" src="<?php echo esc_url( uranium_image( 'hero-plant.webp' ) ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"is-style-tag","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-tag"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php esc_html_e( 'On the floor', 'uranium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Pump assembly and test', 'uranium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"u-tile"} -->
<div class="wp-block-buttons u-tile"><!-- wp:button {"className":"is-arrow-diagonal"} -->
<div class="wp-block-button is-arrow-diagonal"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'See how we build and test pumps', 'uranium' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
