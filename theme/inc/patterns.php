<?php
/**
 * Pattern categories.
 *
 * Pattern files in patterns/ register themselves. Store patterns are
 * registered by inc/woocommerce.php and inc/fluent-cart.php, so they only
 * appear when the store is active.
 *
 * @package Uranium
 */

defined( 'ABSPATH' ) || exit;

/**
 * Registers Uranium's pattern categories.
 */
function uranium_register_pattern_categories() {
	$categories = array(
		'uranium-openers'  => __( 'Uranium: openers', 'uranium' ),
		'uranium-proof'    => __( 'Uranium: proof and specs', 'uranium' ),
		'uranium-rows'     => __( 'Uranium: lists and rows', 'uranium' ),
		'uranium-splits'   => __( 'Uranium: splits', 'uranium' ),
		'uranium-process'  => __( 'Uranium: process', 'uranium' ),
		'uranium-products' => __( 'Uranium: products', 'uranium' ),
		'uranium-closers'  => __( 'Uranium: closers', 'uranium' ),
		'uranium-contact'  => __( 'Uranium: contact and support', 'uranium' ),
		'uranium-headers'  => __( 'Uranium: headers', 'uranium' ),
		'uranium-footers'  => __( 'Uranium: footers', 'uranium' ),
		'uranium-pages'    => __( 'Uranium: pages', 'uranium' ),
	);

	foreach ( $categories as $slug => $label ) {
		register_block_pattern_category( $slug, array( 'label' => $label ) );
	}
}
add_action( 'init', 'uranium_register_pattern_categories', 9 );

/**
 * Prints the heading block that opens Uranium's page patterns.
 *
 * @param string $title Page title.
 * @param string $intro Intro line.
 */
function uranium_heading_block( $title, $intro ) {
	?>
<!-- wp:group {"align":"full","className":"u-heading-block","style":{"spacing":{"padding":{"top":"60px","bottom":"52px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull u-heading-block" style="padding-top:60px;padding-bottom:52px"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"level":1,"fontSize":"page-title"} -->
<h1 class="wp-block-heading has-page-title-font-size"><?php echo esc_html( $title ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"u-muted","fontSize":"intro"} -->
<p class="u-muted has-intro-font-size"><?php echo esc_html( $intro ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

	<?php
}

/**
 * Returns the URL of a bundled image.
 *
 * @param string $file File name in assets/images.
 * @return string
 */
function uranium_image( $file ) {
	return get_theme_file_uri( 'assets/images/' . $file );
}
