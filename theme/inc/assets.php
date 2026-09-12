<?php
/**
 * Front-end styles, scripts and font preloads.
 *
 * @package Uranium
 */

defined( 'ABSPATH' ) || exit;

/**
 * Returns a cache-busting version for a theme asset: the theme version plus
 * the file's modification time, so edited files never load stale.
 *
 * @param string $path Path relative to the theme folder.
 * @return string
 */
function uranium_asset_version( $path ) {
	$file = get_template_directory() . '/' . ltrim( $path, '/' );
	return URANIUM_VERSION . ( file_exists( $file ) ? '.' . filemtime( $file ) : '' );
}

/**
 * Enqueues the theme stylesheet and script.
 */
function uranium_enqueue_assets() {
	$uri = get_template_directory_uri();

	wp_enqueue_style( 'uranium', $uri . '/assets/css/uranium.css', array(), uranium_asset_version( 'assets/css/uranium.css' ) );

	wp_enqueue_script(
		'uranium',
		$uri . '/assets/js/theme.js',
		array(),
		uranium_asset_version( 'assets/js/theme.js' ),
		array(
			'strategy'  => 'defer',
			'in_footer' => true,
		)
	);

	wp_add_inline_script(
		'uranium',
		'window.uraniumL10n = ' . wp_json_encode(
			array(
				'toDark'  => __( 'Switch to dark mode', 'uranium' ),
				'toLight' => __( 'Switch to light mode', 'uranium' ),
			)
		) . ';',
		'before'
	);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'uranium_enqueue_assets' );

/**
 * Preloads the two font files every page uses above the fold.
 */
function uranium_preload_fonts() {
	$base  = get_template_directory_uri() . '/assets/fonts/';
	$files = array( 'ibm-plex-sans-latin-wght-normal.woff2', 'ibm-plex-sans-condensed-latin-600-normal.woff2' );

	foreach ( $files as $file ) {
		printf( '<link rel="preload" href="%s" as="font" type="font/woff2" crossorigin>' . "\n", esc_url( $base . $file ) );
	}
}
add_action( 'wp_head', 'uranium_preload_fonts', 2 );
