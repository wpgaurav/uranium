<?php
/**
 * Title: Product rail
 * Slug: uranium/product-rail
 * Categories: uranium-products, featured
 * Keywords: products, cards, catalog, featured, equipment
 * Viewport Width: 1440
 * Description: A heading and catalog link above three product cards, each with a plate image, a family line, a name, a facts line and a price. Works without a store plugin.
 *
 * @package Uranium
 */

$uranium_products = array(
	array( 'product-pump.webp', __( 'Pumps', 'uranium' ), __( 'CP-80 end-suction pump', 'uranium' ), '80 m³/h / 54 m / 15 kW', __( 'From $4,860', 'uranium' ) ),
	array( 'product-valve.webp', __( 'Valves and actuators', 'uranium' ), __( 'V4 pneumatic control valve', 'uranium' ), 'DN80 / PN40 / Kvs 100', __( 'From $2,190', 'uranium' ) ),
	array( 'product-motor.webp', __( 'Drives and motors', 'uranium' ), __( 'GM-200 helical gear motor', 'uranium' ), '7.5 kW / 1:25 / IE4', __( 'From $1,740', 'uranium' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"align":"wide","className":"u-section-head","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide u-section-head"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Popular this quarter', 'uranium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/shop/' ) ); ?>"><?php esc_html_e( 'Browse the catalog', 'uranium' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"32px"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"16rem"}} -->
<div class="wp-block-group alignwide"><?php foreach ( $uranium_products as $uranium_product ) : ?><!-- wp:group {"className":"u-card","layout":{"type":"default"}} -->
<div class="wp-block-group u-card"><!-- wp:image {"sizeSlug":"full","linkDestination":"custom","className":"is-style-plate"} -->
<figure class="wp-block-image size-full is-style-plate"><a href="<?php echo esc_url( home_url( '/shop/' ) ); ?>"><img src="<?php echo esc_url( uranium_image( $uranium_product[0] ) ); ?>" alt="<?php echo esc_attr( $uranium_product[2] ); ?>"/></a></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"is-style-meta"} -->
<p class="is-style-meta"><?php echo esc_html( $uranium_product[1] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><a href="<?php echo esc_url( home_url( '/shop/' ) ); ?>"><?php echo esc_html( $uranium_product[2] ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"u-facts"} -->
<p class="u-facts"><?php echo esc_html( $uranium_product[3] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"u-price"} -->
<p class="u-price"><?php echo esc_html( $uranium_product[4] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
