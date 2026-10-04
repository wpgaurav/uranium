<?php
/**
 * Title: Footer legal row
 * Slug: uranium/footer-legal
 * Inserter: no
 * Description: Copyright line with the current year and the site name, plus legal links.
 *
 * @package Uranium
 */

/*
 * A menu assigned to the "Footer legal links" location replaces the default
 * Privacy and Terms links. The theme credit always comes last.
 */
$uranium_links     = array();
$uranium_locations = get_nav_menu_locations();

if ( ! empty( $uranium_locations['footer'] ) ) {
	foreach ( (array) wp_get_nav_menu_items( $uranium_locations['footer'] ) as $uranium_item ) {
		if ( $uranium_item instanceof WP_Post && ! (int) $uranium_item->menu_item_parent ) {
			$uranium_links[] = array( $uranium_item->url, $uranium_item->title );
		}
	}
}

if ( ! $uranium_links ) {
	$uranium_privacy = get_privacy_policy_url();
	$uranium_links   = array(
		array( $uranium_privacy ? $uranium_privacy : home_url( '/privacy-policy/' ), __( 'Privacy', 'uranium' ) ),
		array( home_url( '/terms/' ), __( 'Terms', 'uranium' ) ),
	);
}

$uranium_links[] = array( 'https://gauravtiwari.org/product/uranium/', __( 'Uranium theme', 'uranium' ) );
?>
<!-- wp:group {"align":"wide","className":"u-footer-legal","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide u-footer-legal"><!-- wp:paragraph {"fontSize":"micro"} -->
<p class="has-micro-font-size">&copy; <?php echo esc_html( gmdate( 'Y' ) . ' ' . get_bloginfo( 'name' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"u-footer-legal__links","fontSize":"micro"} -->
<p class="u-footer-legal__links has-micro-font-size"><?php foreach ( $uranium_links as $uranium_link ) : ?><a href="<?php echo esc_url( $uranium_link[0] ); ?>"><?php echo esc_html( $uranium_link[1] ); ?></a><?php endforeach; ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
