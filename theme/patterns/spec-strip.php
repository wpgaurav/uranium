<?php
/**
 * Title: Spec strip
 * Slug: uranium/spec-strip
 * Categories: uranium-proof, uranium-products
 * Keywords: product, spotlight, specs, featured, dark
 * Viewport Width: 1440
 * Description: A dark band with a featured product name and link, a tilted product cutout and three key specs on a rail.
 *
 * @package Uranium
 */

?>
<!-- wp:group {"align":"full","className":"u-spec-strip","backgroundColor":"band","textColor":"on-band","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull u-spec-strip has-on-band-color has-band-background-color has-text-color has-background"><!-- wp:columns {"verticalAlignment":"center","align":"wide","className":"u-spec-strip__cols"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center u-spec-strip__cols"><!-- wp:column {"verticalAlignment":"center","width":"27.27%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:27.27%"><!-- wp:heading {"className":"u-spec-strip__name"} -->
<h2 class="wp-block-heading u-spec-strip__name"><?php esc_html_e( 'CP-80 end-suction pump', 'uranium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-meta"} -->
<p class="is-style-meta"><?php esc_html_e( 'Centrifugal pumps / Series CP', 'uranium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/shop/' ) ); ?>"><?php esc_html_e( 'See the full spec', 'uranium' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"27.27%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:27.27%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"u-spec-strip__cutout"} -->
<figure class="wp-block-image size-full u-spec-strip__cutout"><img src="<?php echo esc_url( uranium_image( 'product-pump-cutout.webp' ) ); ?>" alt="<?php echo esc_attr__( 'CP-80 end-suction pump with motor on a steel baseplate', 'uranium' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"45.46%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45.46%"><!-- wp:columns {"className":"is-style-spec-rail"} -->
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
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
