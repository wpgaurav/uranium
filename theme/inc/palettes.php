<?php
/**
 * Accent palettes and the theme.json filter that applies the chosen one.
 *
 * Classic themes don't get the Styles panel, so the palette is picked in the
 * Customizer and merged into theme.json here. The editor and the front end
 * read the same values.
 *
 * @package Uranium
 */

defined( 'ABSPATH' ) || exit;

/**
 * Returns the bundled accent palettes.
 *
 * `signal` fills buttons and bands, `on_signal` is text on that fill and
 * `signal_text` is the accent when it's used as text on dark bands.
 *
 * @return array<string, array<string, string>>
 */
function uranium_palettes() {
	return array(
		'signal' => array(
			'label'        => __( 'Signal (safety yellow)', 'uranium' ),
			'signal'       => '#FFCC00',
			'signal_hover' => '#F0C900',
			'on_signal'    => '#181A17',
			'signal_text'  => '#FFCC00',
		),
		'hazard' => array(
			'label'        => __( 'Hazard (orange)', 'uranium' ),
			'signal'       => '#FF6B1A',
			'signal_hover' => '#F25C0B',
			'on_signal'    => '#181A17',
			'signal_text'  => '#FF8A4C',
		),
		'hivis'  => array(
			'label'        => __( 'Hi-vis (lime)', 'uranium' ),
			'signal'       => '#D4F53C',
			'signal_hover' => '#C6E82B',
			'on_signal'    => '#181A17',
			'signal_text'  => '#D4F53C',
		),
		'cobalt' => array(
			'label'        => __( 'Cobalt (blue)', 'uranium' ),
			'signal'       => '#2F5FBF',
			'signal_hover' => '#2753AA',
			'on_signal'    => '#FFFFFF',
			'signal_text'  => '#8FB3FF',
		),
	);
}

/**
 * Returns the key of the palette chosen in the Customizer.
 *
 * @return string
 */
function uranium_palette_key() {
	$key = get_theme_mod( 'uranium_palette', 'signal' );
	return array_key_exists( $key, uranium_palettes() ) ? $key : 'signal';
}

/**
 * Merges the chosen palette into the theme's theme.json data.
 *
 * @param WP_Theme_JSON_Data $theme_json Theme data.
 * @return WP_Theme_JSON_Data
 */
function uranium_apply_palette( $theme_json ) {
	$key = uranium_palette_key();

	if ( 'signal' === $key ) {
		return $theme_json;
	}

	$chosen  = uranium_palettes()[ $key ];
	$data    = $theme_json->get_data();
	$palette = $data['settings']['color']['palette']['theme'] ?? $data['settings']['color']['palette'] ?? array();

	foreach ( $palette as $index => $entry ) {
		if ( 'signal' === $entry['slug'] ) {
			$palette[ $index ]['color'] = $chosen['signal'];
		} elseif ( 'on-signal' === $entry['slug'] ) {
			$palette[ $index ]['color'] = $chosen['on_signal'];
		}
	}

	return $theme_json->update_with(
		array(
			'version'  => 3,
			'settings' => array(
				'color'  => array( 'palette' => $palette ),
				'custom' => array(
					'color' => array(
						'signal-hover' => $chosen['signal_hover'],
						'signal-text'  => $chosen['signal_text'],
					),
				),
			),
		)
	);
}
add_filter( 'wp_theme_json_data_theme', 'uranium_apply_palette' );
