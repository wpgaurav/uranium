<?php
/**
 * Title: Spare part cards
 * Slug: uranium/part-cards
 * Categories: uranium-products
 * Keywords: parts, spares, kits, cards, prices
 * Viewport Width: 1440
 * Description: A heading above three spare part cards with a part number, a name, a fit note, a price and a button.
 *
 * @package Uranium
 */

$uranium_parts = array(
	array( __( 'Part 40-118', 'uranium' ), __( 'Mechanical seal kit', 'uranium' ), __( 'Fits CP-65 and CP-80 pumps. Silicon carbide faces and FKM elastomers.', 'uranium' ), '$186' ),
	array( __( 'Part 40-204', 'uranium' ), __( 'Drive-end bearing set', 'uranium' ), __( 'For GM-200 and GM-250 gear motors, with the shaft seal included.', 'uranium' ), '$92' ),
	array( __( 'Part 22-310', 'uranium' ), __( 'Bronze impeller, 250 mm', 'uranium' ), __( 'For the CP-80, balanced to grade G2.5 and ready to fit.', 'uranium' ), '$640' ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"align":"wide","className":"u-section-head","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide u-section-head"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Common spares', 'uranium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"u-muted"} -->
<p class="u-muted"><?php esc_html_e( 'Held in stock at both depots and shipped the day you order.', 'uranium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"32px"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"16rem"}} -->
<div class="wp-block-group alignwide"><?php foreach ( $uranium_parts as $uranium_part ) : ?><!-- wp:group {"className":"u-card u-card--part","layout":{"type":"default"}} -->
<div class="wp-block-group u-card u-card--part"><!-- wp:paragraph {"className":"is-style-meta"} -->
<p class="is-style-meta"><?php echo esc_html( $uranium_part[0] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html( $uranium_part[1] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( $uranium_part[2] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"u-price"} -->
<p class="u-price"><?php echo esc_html( $uranium_part[3] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/shop/' ) ); ?>"><?php esc_html_e( 'View part', 'uranium' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --><?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
