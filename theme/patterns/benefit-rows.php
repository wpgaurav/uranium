<?php
/**
 * Title: Benefit rows
 * Slug: uranium/benefit-rows
 * Categories: uranium-rows, uranium-splits
 * Keywords: benefits, included, checklist, plan, list
 * Viewport Width: 1440
 * Description: A heading, short intro and link beside a hairline list of what's included.
 *
 * @package Uranium
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"align":"wide","className":"u-split"} -->
<div class="wp-block-columns alignwide u-split"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'What a service plan covers', 'uranium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"u-muted"} -->
<p class="u-muted"><?php esc_html_e( 'One fixed yearly price per site. No call-out fees on covered equipment.', 'uranium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'Compare service plans', 'uranium' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:list {"className":"is-style-hairline"} -->
<ul class="wp-block-list is-style-hairline"><!-- wp:list-item -->
<li><?php esc_html_e( 'Two planned inspections a year, with vibration and temperature readings.', 'uranium' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Priority on the breakdown line, with a technician on site inside 24 hours.', 'uranium' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Wear parts at cost, and seals and bearings held for your site.', 'uranium' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'A yearly report that ranks equipment by the risk of failure.', 'uranium' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Operator training for new starters, twice a year.', 'uranium' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
