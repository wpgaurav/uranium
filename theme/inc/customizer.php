<?php
/**
 * Customizer: accent palette and color mode.
 *
 * @package Uranium
 */

defined( 'ABSPATH' ) || exit;

/**
 * Registers the Uranium design section.
 *
 * @param WP_Customize_Manager $wp_customize Customizer manager.
 */
function uranium_customize_register( $wp_customize ) {
	$wp_customize->add_section(
		'uranium_design',
		array(
			'title'       => __( 'Uranium design', 'uranium' ),
			'description' => __( 'Pick the accent color and how light and dark mode behave.', 'uranium' ),
			'priority'    => 30,
		)
	);

	$wp_customize->add_setting(
		'uranium_palette',
		array(
			'default'           => 'signal',
			'sanitize_callback' => 'uranium_sanitize_palette',
		)
	);

	$wp_customize->add_control(
		'uranium_palette',
		array(
			'type'    => 'select',
			'section' => 'uranium_design',
			'label'   => __( 'Accent palette', 'uranium' ),
			'choices' => wp_list_pluck( uranium_palettes(), 'label' ),
		)
	);

	$wp_customize->add_setting(
		'uranium_color_mode',
		array(
			'default'           => 'system',
			'sanitize_callback' => 'uranium_sanitize_color_mode',
		)
	);

	$wp_customize->add_control(
		'uranium_color_mode',
		array(
			'type'    => 'radio',
			'section' => 'uranium_design',
			'label'   => __( 'Color mode', 'uranium' ),
			'choices' => array(
				'system' => __( "Follow the visitor's device", 'uranium' ),
				'light'  => __( 'Always light', 'uranium' ),
				'dark'   => __( 'Always dark', 'uranium' ),
			),
		)
	);

	$wp_customize->add_setting(
		'uranium_mode_toggle',
		array(
			'default'           => true,
			'sanitize_callback' => 'rest_sanitize_boolean',
		)
	);

	$wp_customize->add_control(
		'uranium_mode_toggle',
		array(
			'type'        => 'checkbox',
			'section'     => 'uranium_design',
			'label'       => __( 'Show the light and dark toggle in the header', 'uranium' ),
			'description' => __( "Only used when the color mode follows the visitor's device.", 'uranium' ),
		)
	);
}
add_action( 'customize_register', 'uranium_customize_register' );

/**
 * Keeps the palette setting to a known key.
 *
 * @param string $value Submitted value.
 * @return string
 */
function uranium_sanitize_palette( $value ) {
	return array_key_exists( $value, uranium_palettes() ) ? $value : 'signal';
}

/**
 * Keeps the color mode setting to a known value.
 *
 * @param string $value Submitted value.
 * @return string
 */
function uranium_sanitize_color_mode( $value ) {
	return in_array( $value, array( 'system', 'light', 'dark' ), true ) ? $value : 'system';
}
