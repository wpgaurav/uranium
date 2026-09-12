<?php
/**
 * Light and dark mode.
 *
 * By default the page follows the visitor's device. A header toggle stores
 * the visitor's own choice, and the Customizer can force either mode.
 *
 * @package Uranium
 */

defined( 'ABSPATH' ) || exit;

/**
 * Returns the site-wide color mode: system, light or dark.
 *
 * @return string
 */
function uranium_color_mode() {
	$mode = get_theme_mod( 'uranium_color_mode', 'system' );
	return in_array( $mode, array( 'system', 'light', 'dark' ), true ) ? $mode : 'system';
}

/**
 * Whether the header toggle should be shown.
 *
 * @return bool
 */
function uranium_mode_toggle_enabled() {
	return 'system' === uranium_color_mode() && (bool) get_theme_mod( 'uranium_mode_toggle', true );
}

/**
 * Prints a forced mode on the root element.
 *
 * @param string $output Language attributes.
 * @return string
 */
function uranium_color_mode_attribute( $output ) {
	$mode = uranium_color_mode();

	if ( 'system' !== $mode && ! is_admin() ) {
		$output .= ' data-theme="' . esc_attr( $mode ) . '"';
	}

	return $output;
}
add_filter( 'language_attributes', 'uranium_color_mode_attribute' );

/**
 * Applies a stored choice before first paint and marks the page as scripted.
 */
function uranium_color_mode_script() {
	$script = "document.documentElement.classList.add('u-js');";

	if ( uranium_mode_toggle_enabled() ) {
		$script .= "try{var m=localStorage.getItem('uranium-color-mode');if(m==='light'||m==='dark'){document.documentElement.setAttribute('data-theme',m);}}catch(e){}";
	}

	wp_print_inline_script_tag( $script, array( 'id' => 'uranium-color-mode' ) );
}
add_action( 'wp_head', 'uranium_color_mode_script', 1 );

/**
 * Prints theme-color hints so mobile browser chrome matches the page.
 */
function uranium_theme_color_meta() {
	$mode = uranium_color_mode();

	if ( 'dark' !== $mode ) {
		echo '<meta name="theme-color" content="#FAFBF8"' . ( 'system' === $mode ? ' media="(prefers-color-scheme: light)"' : '' ) . ">\n";
	}

	if ( 'light' !== $mode ) {
		echo '<meta name="theme-color" content="#181B17"' . ( 'system' === $mode ? ' media="(prefers-color-scheme: dark)"' : '' ) . ">\n";
	}
}
add_action( 'wp_head', 'uranium_theme_color_meta', 2 );

/**
 * Hides the toggle when it's switched off.
 *
 * @param string[] $classes Body classes.
 * @return string[]
 */
function uranium_color_mode_body_class( $classes ) {
	if ( ! uranium_mode_toggle_enabled() ) {
		$classes[] = 'u-no-mode-toggle';
	}

	return $classes;
}
add_filter( 'body_class', 'uranium_color_mode_body_class' );
