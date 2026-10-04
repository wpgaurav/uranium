<?php
/**
 * Title: Customer quote with figures
 * Slug: uranium/customer-quote
 * Categories: uranium-proof
 * Keywords: testimonial, quote, review, customer, results, proof
 * Viewport Width: 1440
 * Description: A mono label in the side column beside a large customer quote, its source and three result figures on a rail.
 *
 * @package Uranium
 */

?>
<!-- wp:group {"align":"full","className":"u-customer-quote","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull u-customer-quote" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"align":"wide","className":"u-split"} -->
<div class="wp-block-columns alignwide u-split"><!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:paragraph {"className":"is-style-label u-side-label"} -->
<p class="is-style-label u-side-label"><?php esc_html_e( 'From a customer', 'uranium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"75%"} -->
<div class="wp-block-column" style="flex-basis:75%"><!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p><?php esc_html_e( "We used to keep two of every spare because we couldn't trust the lead times. Now we keep one, and their technician usually knows a seal is going before we do.", 'uranium' ); ?></p>
<!-- /wp:paragraph --><cite><?php esc_html_e( 'Maintenance lead, municipal water utility', 'uranium' ); ?></cite></blockquote>
<!-- /wp:quote -->

<!-- wp:columns {"className":"is-style-spec-rail is-large"} -->
<div class="wp-block-columns is-style-spec-rail is-large"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p><?php esc_html_e( 'Unplanned stops last year', 'uranium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>2</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p><?php esc_html_e( 'Pumps on the plan', 'uranium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>46</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p><?php esc_html_e( 'Spares held on site', 'uranium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Down 40%', 'uranium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
