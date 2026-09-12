<?php
/**
 * Title: Industry cards
 * Slug: uranium/sector-cards
 * Categories: uranium-splits, uranium-products
 * Keywords: industries, sectors, cards, grid, markets
 * Viewport Width: 1440
 * Description: A heading and link above a two-column grid of industry cards, each with a photo, a title link and a short description.
 *
 * @package Uranium
 */

$uranium_sectors = array(
	array( 'sector-manufacturing.webp', __( 'Robotic welding cells on a fabrication line', 'uranium' ), __( 'Manufacturing', 'uranium' ), __( 'Coolant, washdown and hydraulic duty, with spares held at the line.', 'uranium' ), '/solutions/manufacturing/' ),
	array( 'sector-energy.webp', __( 'Transformers at an electrical substation', 'uranium' ), __( 'Energy and utilities', 'uranium' ), __( 'Cooling water, boiler feed and condensate pumps built for continuous running.', 'uranium' ), '/solutions/' ),
	array( 'sector-water.webp', __( 'Blue vertical pumps in a water treatment pump room', 'uranium' ), __( 'Water and wastewater', 'uranium' ), __( 'Lift stations, dosing and filtration, sized for the flow you actually see.', 'uranium' ), '/solutions/' ),
	array( 'sector-food.webp', __( 'Stainless steel tanks in a food processing hall', 'uranium' ), __( 'Food and beverage', 'uranium' ), __( 'Hygienic pumps and valves with the paperwork auditors ask for.', 'uranium' ), '/solutions/' ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"align":"wide","className":"u-section-head","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide u-section-head"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Industries we equip', 'uranium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/solutions/' ) ); ?>"><?php esc_html_e( 'All industries', 'uranium' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"48px"}},"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":"20rem"}} -->
<div class="wp-block-group alignwide"><?php foreach ( $uranium_sectors as $uranium_sector ) : ?><!-- wp:group {"className":"u-card u-card--sector","layout":{"type":"default"}} -->
<div class="wp-block-group u-card u-card--sector"><!-- wp:image {"aspectRatio":"3/2","scale":"cover","sizeSlug":"full","linkDestination":"custom"} -->
<figure class="wp-block-image size-full"><a href="<?php echo esc_url( home_url( $uranium_sector[4] ) ); ?>"><img src="<?php echo esc_url( uranium_image( $uranium_sector[0] ) ); ?>" alt="<?php echo esc_attr( $uranium_sector[1] ); ?>" style="aspect-ratio:3/2;object-fit:cover"/></a></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><a href="<?php echo esc_url( home_url( $uranium_sector[4] ) ); ?>"><?php echo esc_html( $uranium_sector[2] ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( $uranium_sector[3] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
