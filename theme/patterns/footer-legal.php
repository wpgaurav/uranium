<?php
/**
 * Title: Footer legal row
 * Slug: uranium/footer-legal
 * Inserter: no
 * Description: Copyright line with the current year and the site name, plus legal links.
 *
 * @package Uranium
 */

$uranium_privacy = get_privacy_policy_url();
$uranium_privacy = $uranium_privacy ? $uranium_privacy : home_url( '/privacy-policy/' );
?>
<!-- wp:group {"align":"wide","className":"u-footer-legal","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide u-footer-legal"><!-- wp:paragraph {"fontSize":"micro"} -->
<p class="has-micro-font-size">&copy; <?php echo esc_html( gmdate( 'Y' ) . ' ' . get_bloginfo( 'name' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"u-footer-legal__links","fontSize":"micro"} -->
<p class="u-footer-legal__links has-micro-font-size"><a href="<?php echo esc_url( $uranium_privacy ); ?>"><?php esc_html_e( 'Privacy', 'uranium' ); ?></a><a href="<?php echo esc_url( home_url( '/terms/' ) ); ?>"><?php esc_html_e( 'Terms', 'uranium' ); ?></a><a href="https://gauravtiwari.org/product/uranium/"><?php esc_html_e( 'Uranium theme', 'uranium' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
