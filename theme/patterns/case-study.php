<?php
/**
 * Title: Case study split
 * Slug: uranium/case-study
 * Categories: uranium-proof, uranium-splits
 * Keywords: case study, project, results, story, proof, reference
 * Viewport Width: 1440
 * Description: A site photo beside a project heading, a mono project line and split rows for the problem, the work and the result, with a link to the full story.
 *
 * @package Uranium
 */

$uranium_steps = array(
	array( __( 'The problem', 'uranium' ), __( 'Fourteen pumps over 30 years old, no spares left on the market and a treatment plant that is not allowed to stop.', 'uranium' ) ),
	array( __( 'What we did', 'uranium' ), __( 'We surveyed every duty point, standardized on two pump sizes and swapped one pump a night over five weeks.', 'uranium' ) ),
	array( __( 'The result', 'uranium' ), __( 'Energy use at the pumping station fell 23% in the first year, and the spares shelf went from 14 part numbers to 3.', 'uranium' ) ),
);
?>
<!-- wp:group {"align":"full","className":"u-case-study","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull u-case-study" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"align":"wide","className":"u-split"} -->
<div class="wp-block-columns alignwide u-split"><!-- wp:column {"width":"45%"} -->
<div class="wp-block-column" style="flex-basis:45%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"u-case-study__media"} -->
<figure class="wp-block-image size-full u-case-study__media"><img src="<?php echo esc_url( uranium_image( 'sector-water.webp' ) ); ?>" alt="<?php echo esc_attr__( 'A row of pumps and blue pipework in a water treatment pump room', 'uranium' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"55%"} -->
<div class="wp-block-column" style="flex-basis:55%"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Fourteen pumps replaced without stopping the plant', 'uranium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-meta"} -->
<p class="is-style-meta"><?php esc_html_e( 'Water treatment / 2025 / Five weeks on site', 'uranium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"is-style-rows is-split","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-rows is-split"><?php foreach ( $uranium_steps as $uranium_step ) : ?><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html( $uranium_step[0] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"u-muted"} -->
<p class="u-muted"><?php echo esc_html( $uranium_step[1] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><?php endforeach; ?></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/solutions/' ) ); ?>"><?php esc_html_e( 'Read the full project notes', 'uranium' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
