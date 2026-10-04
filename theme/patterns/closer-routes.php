<?php
/**
 * Title: Closer with next steps
 * Slug: uranium/closer-routes
 * Categories: uranium-closers
 * Keywords: call to action, next steps, routes, links, closing, cta
 * Viewport Width: 1440
 * Description: A surface band with a heading and a short line beside a compact numbered list of next steps, each a link with an arrow.
 *
 * @package Uranium
 */

$uranium_routes = array(
	array( __( 'Request a quote for new equipment', 'uranium' ), '/contact/' ),
	array( __( 'Book a service visit', 'uranium' ), '/services/' ),
	array( __( 'Find a spare part by number', 'uranium' ), '/shop/' ),
	array( __( 'Download a manual or drawing', 'uranium' ), '/support/' ),
);
?>
<!-- wp:group {"align":"full","className":"u-band","backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull u-band has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"align":"wide","className":"u-split"} -->
<div class="wp-block-columns alignwide u-split"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Where do you want to start?', 'uranium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"u-muted"} -->
<p class="u-muted"><?php esc_html_e( 'Each route goes straight to the team that handles it. No ticket queue, no call center.', 'uranium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:group {"className":"is-style-index is-compact","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-index is-compact"><?php foreach ( $uranium_routes as $uranium_route ) : ?><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><a href="<?php echo esc_url( home_url( $uranium_route[1] ) ); ?>"><?php echo esc_html( $uranium_route[0] ); ?></a></h3>
<!-- /wp:heading --></div>
<!-- /wp:group --><?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
