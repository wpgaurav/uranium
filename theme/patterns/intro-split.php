<?php
/**
 * Title: Intro with a side label
 * Slug: uranium/intro-split
 * Categories: uranium-splits
 * Keywords: about, intro, company, statement
 * Viewport Width: 1440
 * Description: A surface band with a mono label in the side column and a large statement, a paragraph and a link beside it.
 *
 * @package Uranium
 */

?>
<!-- wp:group {"align":"full","backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"align":"wide","className":"u-split"} -->
<div class="wp-block-columns alignwide u-split"><!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:paragraph {"className":"is-style-label u-side-label"} -->
<p class="is-style-label u-side-label"><?php esc_html_e( 'Who we are', 'uranium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"75%"} -->
<div class="wp-block-column" style="flex-basis:75%"><!-- wp:heading {"style":{"typography":{"lineHeight":"1.08"}}} -->
<h2 class="wp-block-heading" style="line-height:1.08"><?php esc_html_e( 'We have supplied and serviced process equipment since 1987. Most of our customers have never had to call anyone else.', 'uranium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"u-muted","style":{"layout":{"selfStretch":"fit"}}} -->
<p class="u-muted"><?php esc_html_e( 'Buying equipment for a plant is an engineering decision. We start with your duty, your conditions and your maintenance team, then recommend the smallest set of equipment that does the job and the service plan that keeps it running.', 'uranium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/company/' ) ); ?>"><?php esc_html_e( 'Meet the company', 'uranium' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
