<?php
/**
 * Title: Industry list with a featured panel
 * Slug: uranium/sector-list-panel
 * Categories: uranium-splits
 * Keywords: industries, sectors, selector, markets, solutions
 * Viewport Width: 1440
 * Description: A numbered list of industries beside a featured panel with a photo, a heading and a link. Uranium Pro turns the list into working tabs.
 *
 * @package Uranium
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"align":"wide","className":"u-section-head","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide u-section-head"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Find your industry', 'uranium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"u-muted"} -->
<p class="u-muted"><?php esc_html_e( 'Each sector wears equipment out in its own way. Start there and we will build the setup around it.', 'uranium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","className":"u-selector"} -->
<div class="wp-block-columns alignwide u-selector"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"className":"is-style-index is-compact","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-index is-compact"><!-- wp:group {"className":"is-current","layout":{"type":"default"}} -->
<div class="wp-block-group is-current"><!-- wp:paragraph -->
<p><a href="<?php echo esc_url( home_url( '/solutions/manufacturing/' ) ); ?>"><?php esc_html_e( 'Manufacturing', 'uranium' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><a href="<?php echo esc_url( home_url( '/solutions/' ) ); ?>"><?php esc_html_e( 'Energy and utilities', 'uranium' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><a href="<?php echo esc_url( home_url( '/solutions/' ) ); ?>"><?php esc_html_e( 'Water and wastewater', 'uranium' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><a href="<?php echo esc_url( home_url( '/solutions/' ) ); ?>"><?php esc_html_e( 'Food and beverage', 'uranium' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><a href="<?php echo esc_url( home_url( '/solutions/' ) ); ?>"><?php esc_html_e( 'Logistics and warehousing', 'uranium' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><a href="<?php echo esc_url( home_url( '/solutions/' ) ); ?>"><?php esc_html_e( 'Mining and aggregates', 'uranium' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:group {"className":"u-selector__panel","layout":{"type":"default"}} -->
<div class="wp-block-group u-selector__panel"><!-- wp:image {"aspectRatio":"16/7","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( uranium_image( 'sector-manufacturing.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Robotic welding cells behind yellow safety fencing on a fabrication line', 'uranium' ); ?>" style="aspect-ratio:16/7;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e( 'Uptime on the production line', 'uranium' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"className":"u-muted"} -->
<p class="u-muted"><?php esc_html_e( 'Coolant, washdown and hydraulic pumps, with the spares held on site so a failed seal never stops a shift.', 'uranium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link is-arrow-diagonal"} -->
<div class="wp-block-button is-style-text-link is-arrow-diagonal"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/solutions/manufacturing/' ) ); ?>"><?php esc_html_e( 'Explore manufacturing', 'uranium' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
