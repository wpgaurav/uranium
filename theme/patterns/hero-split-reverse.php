<?php
/**
 * Title: Split hero, photo first
 * Slug: uranium/hero-split-reverse
 * Categories: uranium-openers
 * Keywords: hero, banner, cover, service, parts
 * Viewport Width: 1440
 * Description: A full-height photo on the left and an accent panel on the right, built for parts and service offers.
 *
 * @package Uranium
 */

?>
<!-- wp:group {"align":"full","className":"u-hero u-hero--reverse","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull u-hero u-hero--reverse"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"53%","className":"u-hero__media"} -->
<div class="wp-block-column u-hero__media" style="flex-basis:53%"><!-- wp:cover {"url":"<?php echo esc_url( uranium_image( 'sector-logistics.webp' ) ); ?>","alt":"<?php echo esc_attr__( 'A forklift carries a crated machine part past tall parts racking', 'uranium' ); ?>","dimRatio":0,"minHeight":590,"contentPosition":"bottom left","isDark":false,"layout":{"type":"default"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left" style="min-height:590px"><img class="wp-block-cover__image-background" alt="<?php echo esc_attr__( 'A forklift carries a crated machine part past tall parts racking', 'uranium' ); ?>" src="<?php echo esc_url( uranium_image( 'sector-logistics.webp' ) ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"is-style-tag","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-tag"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php esc_html_e( 'Parts store', 'uranium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( '12,400 lines on the shelf', 'uranium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"47%","className":"u-hero__panel"} -->
<div class="wp-block-column u-hero__panel" style="flex-basis:47%"><!-- wp:heading {"level":1,"className":"is-style-display"} -->
<h1 class="wp-block-heading is-style-display"><?php esc_html_e( 'Parts in stock. Crews on call.', 'uranium' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"u-hero__lead"} -->
<p class="u-hero__lead"><?php esc_html_e( 'More than 12,000 stocked spares for the equipment you already run, and technicians who can reach your site within a day.', 'uranium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/shop/' ) ); ?>"><?php esc_html_e( 'Find a part', 'uranium' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link is-arrow-diagonal"} -->
<div class="wp-block-button is-style-text-link is-arrow-diagonal"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'Book a service visit', 'uranium' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"is-style-note"} -->
<p class="is-style-note"><?php esc_html_e( 'Breakdown line, 24 hours: +1 555 014 2299', 'uranium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
