<?php
/**
 * Title: Figure rail
 * Slug: uranium/figure-rail
 * Categories: uranium-proof
 * Keywords: numbers, stats, figures, proof, metrics
 * Viewport Width: 1440
 * Description: A heading beside a short line, then four large figures on a rail with mono labels.
 *
 * @package Uranium
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"align":"wide","className":"u-section-head","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide u-section-head"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'The numbers we answer for', 'uranium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"u-muted"} -->
<p class="u-muted"><?php esc_html_e( 'Measured across every customer site we supported last year, not a best month.', 'uranium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","className":"is-style-spec-rail is-large"} -->
<div class="wp-block-columns alignwide is-style-spec-rail is-large"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p><?php esc_html_e( 'Stocked spare parts', 'uranium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>12,400</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p><?php esc_html_e( 'Field technicians', 'uranium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>68</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p><?php esc_html_e( 'Median response time', 'uranium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( '19 hours', 'uranium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p><?php esc_html_e( 'Plants on a service plan', 'uranium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>1,150</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
