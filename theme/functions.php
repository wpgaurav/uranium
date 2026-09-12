<?php
/**
 * Uranium functions and definitions.
 *
 * Each concern lives in its own file under inc/. Store support loads only
 * when the matching plugin is active.
 *
 * @package Uranium
 */

defined( 'ABSPATH' ) || exit;

define( 'URANIUM_VERSION', wp_get_theme( get_template() )->get( 'Version' ) );

$uranium_modules = array(
	'setup',
	'palettes',
	'assets',
	'template-tags',
	'color-mode',
	'customizer',
	'block-styles',
	'patterns',
);

foreach ( $uranium_modules as $uranium_module ) {
	require get_template_directory() . '/inc/' . $uranium_module . '.php';
}

if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

if ( defined( 'FLUENTCART_VERSION' ) ) {
	require get_template_directory() . '/inc/fluent-cart.php';
}
