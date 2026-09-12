<?php
/**
 * Title: Timeline rows
 * Slug: uranium/timeline-rows
 * Categories: uranium-process, uranium-rows
 * Keywords: history, timeline, milestones, years, company
 * Viewport Width: 1440
 * Description: A heading and short intro beside hairline rows that pair a year with a milestone.
 *
 * @package Uranium
 */

$uranium_milestones = array(
	array( '1987', __( 'Opened as a pump repair shop with two workshop benches and one van.', 'uranium' ) ),
	array( '1998', __( 'Added valves and actuators, and started designing complete pump skids.', 'uranium' ) ),
	array( '2011', __( 'Launched the 24-hour breakdown line and the first yearly service plans.', 'uranium' ) ),
	array( '2024', __( 'Opened a second depot and put the full parts catalog online.', 'uranium' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"align":"wide","className":"u-split"} -->
<div class="wp-block-columns alignwide u-split"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'How we got here', 'uranium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"u-muted"} -->
<p class="u-muted"><?php esc_html_e( 'Four decades of growing only as fast as the service team could keep up.', 'uranium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:group {"className":"is-style-rows is-split is-timeline","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-rows is-split is-timeline"><?php foreach ( $uranium_milestones as $uranium_milestone ) : ?><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"u-year"} -->
<p class="u-year"><?php echo esc_html( $uranium_milestone[0] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( $uranium_milestone[1] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
