<?php
/**
 * FluentCart support.
 *
 * Declaring `fluent_cart` support makes FluentCart load the templates in
 * fluent-cart/ instead of its generic fallback. Those templates are thin
 * wrappers around FluentCart's own renderers.
 *
 * @package Uranium
 */

defined( 'ABSPATH' ) || exit;

/**
 * Declares FluentCart support.
 */
function uranium_fluent_cart_setup() {
	add_theme_support( 'fluent_cart' );
	add_editor_style( 'assets/css/fluent-cart.css' );
}
add_action( 'after_setup_theme', 'uranium_fluent_cart_setup' );

/**
 * Loads Uranium's FluentCart styles.
 */
function uranium_fluent_cart_assets() {
	wp_enqueue_style( 'uranium-fluent-cart', get_template_directory_uri() . '/assets/css/fluent-cart.css', array( 'uranium' ), uranium_asset_version( 'assets/css/fluent-cart.css' ) );
}
add_action( 'wp_enqueue_scripts', 'uranium_fluent_cart_assets', 20 );

/**
 * Removes FluentCart's own archive header (a second h1) from category and
 * brand archives, since Uranium's page heading already carries the title.
 * Other callbacks on the hook stay in place.
 */
function uranium_fluent_cart_drop_archive_header() {
	global $wp_filter;

	$hook = 'fluent_cart/template/before_content';
	if ( empty( $wp_filter[ $hook ] ) ) {
		return;
	}

	foreach ( $wp_filter[ $hook ]->callbacks as $priority => $callbacks ) {
		foreach ( $callbacks as $callback ) {
			$function = $callback['function'];
			if ( is_array( $function ) && is_object( $function[0] ) && 'renderArchiveHeader' === $function[1] ) {
				remove_action( $hook, $function, $priority );
			}
		}
	}
}
add_action( 'template_redirect', 'uranium_fluent_cart_drop_archive_header', 20 );

/**
 * Returns the page IDs FluentCart uses for its store pages.
 *
 * @return int[]
 */
function uranium_fluent_cart_page_ids() {
	if ( ! class_exists( '\FluentCart\Api\StoreSettings' ) ) {
		return array();
	}

	$settings = new \FluentCart\Api\StoreSettings();
	$ids      = array();

	foreach ( array( 'shop', 'cart', 'checkout', 'receipt', 'customer_profile' ) as $key ) {
		$id = (int) $settings->get( $key . '_page_id' );
		if ( $id ) {
			$ids[ $key ] = $id;
		}
	}

	return $ids;
}

/**
 * Gives FluentCart's store pages the wide container.
 *
 * @param string[] $classes Body classes.
 * @return string[]
 */
function uranium_fluent_cart_body_classes( $classes ) {
	if ( is_page() && in_array( get_queried_object_id(), uranium_fluent_cart_page_ids(), true ) ) {
		$classes[] = 'u-store-page';
		$classes[] = 'u-fct-page';
	}

	if ( is_singular( 'fluent-products' ) || is_tax( get_object_taxonomies( 'fluent-products' ) ) ) {
		$classes[] = 'u-fct-view';
	}

	return $classes;
}
add_filter( 'body_class', 'uranium_fluent_cart_body_classes' );

/**
 * Registers the FluentCart product rail pattern.
 */
function uranium_fluent_cart_patterns() {
	register_block_pattern(
		'uranium/product-rail-fluent-cart',
		array(
			'title'       => __( 'Product rail from the FluentCart store', 'uranium' ),
			'description' => __( 'A heading with a catalog link above a row of live FluentCart products.', 'uranium' ),
			'categories'  => array( 'uranium-products' ),
			'keywords'    => array( 'products', 'fluentcart', 'shop' ),
			'filePath'    => get_template_directory() . '/inc/patterns/product-rail-fluent-cart.php',
		)
	);
}
add_action( 'init', 'uranium_fluent_cart_patterns' );
