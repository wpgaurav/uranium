<?php
/**
 * Title: Photo beside text
 * Slug: uranium/media-split
 * Categories: uranium-splits
 * Keywords: image, media, text, service, feature
 * Viewport Width: 1440
 * Description: A photo on one side and a heading, paragraph, hairline list and link on the other.
 *
 * @package Uranium
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","className":"u-split"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center u-split"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( uranium_image( 'service.webp' ) ); ?>" alt="<?php echo esc_attr__( 'A technician in gloves opens the terminal box on a pump motor', 'uranium' ); ?>" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Service that starts before the breakdown', 'uranium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"u-muted"} -->
<p class="u-muted"><?php esc_html_e( 'Our technicians log vibration, temperature and current on every visit, so a failing bearing shows up on a chart weeks before it stops a line.', 'uranium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-hairline"} -->
<ul class="wp-block-list is-style-hairline"><!-- wp:list-item -->
<li><?php esc_html_e( 'Condition checks on a fixed schedule', 'uranium' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Repairs and overhauls in our own workshop', 'uranium' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Loan units while yours is away', 'uranium' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'See our service plans', 'uranium' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
