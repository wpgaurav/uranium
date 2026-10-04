<?php
/**
 * Title: Model comparison
 * Slug: uranium/compare-table
 * Categories: uranium-products, uranium-proof
 * Keywords: compare, comparison, table, models, sizes, specs
 * Viewport Width: 1440
 * Description: A heading and a short line above a table that compares three models side by side, with a note and a sizing link below. The table scrolls sideways on small screens.
 *
 * @package Uranium
 */

$uranium_rows = array(
	array( __( 'Flow at best efficiency', 'uranium' ), '32 m³/h', '50 m³/h', '80 m³/h' ),
	array( __( 'Maximum head', 'uranium' ), '38 m', '46 m', '54 m' ),
	array( __( 'Motor', 'uranium' ), '5.5 kW', '9.2 kW', '15 kW' ),
	array( __( 'Suction and discharge', 'uranium' ), 'DN 65 / DN 50', 'DN 80 / DN 65', 'DN 100 / DN 80' ),
	array( __( 'Weight with motor', 'uranium' ), '96 kg', '148 kg', '212 kg' ),
	array( __( 'Seal kit', 'uranium' ), '40-118', '40-118', '40-118' ),
	array( __( 'Price from', 'uranium' ), '$2,940', '$3,780', '$4,860' ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"align":"wide","className":"u-section-head","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide u-section-head"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Three sizes on one frame', 'uranium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"u-muted"} -->
<p class="u-muted"><?php esc_html_e( 'All three use the same seal kit, bearings and baseplate, so one shelf of spares covers a mixed site.', 'uranium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:table {"align":"wide","className":"is-style-comparison"} -->
<figure class="wp-block-table alignwide is-style-comparison"><table class="has-fixed-layout"><thead><tr><th><?php esc_html_e( 'Model', 'uranium' ); ?></th><th>CP-50</th><th>CP-65</th><th>CP-80</th></tr></thead><tbody><?php foreach ( $uranium_rows as $uranium_row ) : ?><tr><td><?php echo esc_html( $uranium_row[0] ); ?></td><td><?php echo esc_html( $uranium_row[1] ); ?></td><td><?php echo esc_html( $uranium_row[2] ); ?></td><td><?php echo esc_html( $uranium_row[3] ); ?></td></tr><?php endforeach; ?></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:group {"align":"wide","className":"u-section-foot","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide u-section-foot"><!-- wp:paragraph {"className":"is-style-note"} -->
<p class="is-style-note"><?php esc_html_e( 'Prices are ex works and exclude tax and freight. Duties outside this range are built to order.', 'uranium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Ask for a sizing check', 'uranium' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
