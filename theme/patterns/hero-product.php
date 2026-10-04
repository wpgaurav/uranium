<?php
/**
 * Title: Product opener
 * Slug: uranium/hero-product
 * Categories: uranium-openers, uranium-products
 * Keywords: product, hero, spotlight, model, specs, landing
 * Viewport Width: 1440
 * Description: A product photo on a plate beside the product name, its part number, a short description, three key specs, a price line, a quote button and a data sheet download.
 *
 * @package Uranium
 */

?>
<!-- wp:group {"align":"full","className":"u-opener u-product-hero","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull u-opener u-product-hero" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","className":"u-split"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center u-split"><!-- wp:column {"verticalAlignment":"center","width":"58.33%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:58.33%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"is-style-plate"} -->
<figure class="wp-block-image size-full is-style-plate"><img src="<?php echo esc_url( uranium_image( 'product-pump.webp' ) ); ?>" alt="<?php echo esc_attr__( 'CP-80 end-suction pump with its motor on a steel baseplate', 'uranium' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"41.67%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:41.67%"><!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><?php esc_html_e( 'CP-80 end-suction pump', 'uranium' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-meta"} -->
<p class="is-style-meta"><?php esc_html_e( 'Part CP-80-15 / Series CP / Centrifugal pumps', 'uranium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"u-muted","fontSize":"intro"} -->
<p class="u-muted has-intro-font-size"><?php esc_html_e( 'A close-coupled pump for clean and lightly dirty water, sized for cooling circuits, washdown and transfer duty. It shares seals and bearings with the CP-50 and CP-65.', 'uranium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:columns {"className":"is-style-spec-rail"} -->
<div class="wp-block-columns is-style-spec-rail"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p><?php esc_html_e( 'Flow', 'uranium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>80 m³/h</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p><?php esc_html_e( 'Head', 'uranium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>54 m</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p><?php esc_html_e( 'Motor', 'uranium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>15 kW</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:paragraph {"className":"u-price"} -->
<p class="u-price"><?php esc_html_e( 'From $4,860, ex works', 'uranium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Request a quote', 'uranium' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline is-arrow-download"} -->
<div class="wp-block-button is-style-outline is-arrow-download"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/support/' ) ); ?>"><?php esc_html_e( 'Data sheet', 'uranium' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"is-style-note"} -->
<p class="is-style-note"><?php esc_html_e( 'In stock at both depots. Ships in two working days.', 'uranium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
