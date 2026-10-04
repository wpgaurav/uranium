<?php
/**
 * Title: Specification sheet
 * Slug: uranium/spec-sheet
 * Categories: uranium-proof, uranium-products
 * Keywords: specification, spec, table, data sheet, technical, downloads
 * Viewport Width: 1440
 * Description: A heading, a short note and download rows for the data sheet and drawings beside a full specification table.
 *
 * @package Uranium
 */

$uranium_specs = array(
	array( __( 'Flow range', 'uranium' ), __( '10 to 80 m³/h', 'uranium' ) ),
	array( __( 'Maximum head', 'uranium' ), '54 m' ),
	array( __( 'Motor', 'uranium' ), __( '15 kW, IE4, 400 V, 50 Hz', 'uranium' ) ),
	array( __( 'Speed', 'uranium' ), '2,950 rpm' ),
	array( __( 'Casing', 'uranium' ), __( 'Cast iron, EN-GJL-250', 'uranium' ) ),
	array( __( 'Impeller', 'uranium' ), __( 'Bronze, 250 mm, balanced to G2.5', 'uranium' ) ),
	array( __( 'Shaft seal', 'uranium' ), __( 'Mechanical, silicon carbide faces, FKM', 'uranium' ) ),
	array( __( 'Liquid temperature', 'uranium' ), __( '-10 to 120 °C', 'uranium' ) ),
	array( __( 'Maximum pressure', 'uranium' ), '16 bar' ),
	array( __( 'Connections', 'uranium' ), __( 'DN 100 suction, DN 80 discharge', 'uranium' ) ),
	array( __( 'Weight with motor', 'uranium' ), '212 kg' ),
);

$uranium_files = array(
	array( __( 'PDF / 1.2 MB / Revision 7', 'uranium' ), __( 'CP-80 data sheet', 'uranium' ) ),
	array( __( 'DWG and PDF / 3.8 MB', 'uranium' ), __( 'Dimension drawing', 'uranium' ) ),
	array( __( 'PDF / 640 KB', 'uranium' ), __( 'Pump curves at 50 and 60 Hz', 'uranium' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"align":"wide","className":"u-split"} -->
<div class="wp-block-columns alignwide u-split"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Full specification', 'uranium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"u-muted"} -->
<p class="u-muted"><?php esc_html_e( 'Figures are for clean water at 20 °C. Send us your duty point and liquid, and we check the selection before you order.', 'uranium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"is-style-rows","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-rows"><?php foreach ( $uranium_files as $uranium_file ) : ?><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-meta"} -->
<p class="is-style-meta"><?php echo esc_html( $uranium_file[0] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><a href="<?php echo esc_url( home_url( '/support/' ) ); ?>"><?php echo esc_html( $uranium_file[1] ); ?></a></h3>
<!-- /wp:heading --></div>
<!-- /wp:group --><?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.67%"} -->
<div class="wp-block-column" style="flex-basis:66.67%"><!-- wp:table {"className":"is-style-spec"} -->
<figure class="wp-block-table is-style-spec"><table class="has-fixed-layout"><tbody><?php foreach ( $uranium_specs as $uranium_spec ) : ?><tr><td><?php echo esc_html( $uranium_spec[0] ); ?></td><td><?php echo esc_html( $uranium_spec[1] ); ?></td></tr><?php endforeach; ?></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
