<?php
/**
 * Title: Photo grid
 * Slug: uranium/photo-grid
 * Categories: uranium-splits, uranium-proof
 * Keywords: gallery, photos, workshop, projects, images, grid
 * Viewport Width: 1440
 * Description: A heading and a short line above three photos in a row, each with a mono caption.
 *
 * @package Uranium
 */

$uranium_photos = array(
	array( 'service.webp', __( 'A technician opens the terminal box on a gear motor', 'uranium' ), __( 'Motor rewind and test, Pittsburgh workshop', 'uranium' ) ),
	array( 'hero-plant.webp', __( 'A technician checks a flange on a pump casing in a bright assembly hall', 'uranium' ), __( 'Pump assembly and pressure test', 'uranium' ) ),
	array( 'sector-manufacturing.webp', __( 'Robotic welding cells on a fabrication line', 'uranium' ), __( 'Coolant pumps on a welding line, installed 2025', 'uranium' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"align":"wide","className":"u-section-head","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide u-section-head"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'From the workshop floor', 'uranium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"u-muted"} -->
<p class="u-muted"><?php esc_html_e( 'Every pump, motor and valve we sell is assembled or rebuilt here and tested before it ships.', 'uranium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"u-photo-grid","style":{"spacing":{"blockGap":"32px"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"16rem"}} -->
<div class="wp-block-group alignwide u-photo-grid"><?php foreach ( $uranium_photos as $uranium_photo ) : ?><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( uranium_image( $uranium_photo[0] ) ); ?>" alt="<?php echo esc_attr( $uranium_photo[1] ); ?>"/><figcaption class="wp-element-caption"><?php echo esc_html( $uranium_photo[2] ); ?></figcaption></figure>
<!-- /wp:image --><?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
