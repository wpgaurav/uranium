<?php
/**
 * Title: Photo band
 * Slug: uranium/photo-band
 * Categories: uranium-openers
 * Keywords: photo, cover, image, band, project
 * Viewport Width: 1440
 * Description: A full-width photo with a caption tag in the corner and an arrow tile that links to the project.
 *
 * @package Uranium
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( uranium_image( 'sector-manufacturing.webp' ) ); ?>","alt":"<?php echo esc_attr__( 'Robotic welding cells behind yellow safety fencing on a fabrication line', 'uranium' ); ?>","dimRatio":0,"minHeight":520,"contentPosition":"bottom left","isDark":false,"align":"full","className":"u-photo-band","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull is-light has-custom-content-position is-position-bottom-left u-photo-band" style="min-height:520px"><img class="wp-block-cover__image-background" alt="<?php echo esc_attr__( 'Robotic welding cells behind yellow safety fencing on a fabrication line', 'uranium' ); ?>" src="<?php echo esc_url( uranium_image( 'sector-manufacturing.webp' ) ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"is-style-tag","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-tag"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php esc_html_e( 'Recent project', 'uranium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Coolant pumps for a stamping line', 'uranium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"u-tile"} -->
<div class="wp-block-buttons u-tile"><!-- wp:button {"className":"is-arrow-diagonal"} -->
<div class="wp-block-button is-arrow-diagonal"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/solutions/' ) ); ?>"><?php esc_html_e( 'Read about the stamping line project', 'uranium' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->
