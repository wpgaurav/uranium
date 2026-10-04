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

	$wp_customize->add_section(
		'uranium_blog',
		array(
			'title'       => __( 'Uranium blog', 'uranium' ),
			'description' => __( 'How article listings look and what follows each article.', 'uranium' ),
			'priority'    => 31,
		)
	);

	$wp_customize->add_setting(
		'uranium_blog_layout',
		array(
			'default'           => 'rows',
			'sanitize_callback' => 'uranium_sanitize_blog_layout',
		)
	);

	$wp_customize->add_control(
		'uranium_blog_layout',
		array(
			'type'        => 'radio',
			'section'     => 'uranium_blog',
			'label'       => __( 'Article listings', 'uranium' ),
			'description' => __( 'Used on the blog, categories, tags and author pages. Search results always use rows.', 'uranium' ),
			'choices'     => array(
				'rows'  => __( 'Hairline rows', 'uranium' ),
				'cards' => __( 'Cards with images, three across', 'uranium' ),
			),
		)
	);

	$toggles = array(
		'uranium_post_author'   => __( 'Show the author note under each article when the author has a bio', 'uranium' ),
		'uranium_related_posts' => __( 'Show up to three related articles from the same category', 'uranium' ),
	);

	foreach ( $toggles as $id => $label ) {
		$wp_customize->add_setting(
			$id,
			array(
				'default'           => true,
				'sanitize_callback' => 'rest_sanitize_boolean',
			)
		);

		$wp_customize->add_control(
			$id,
			array(
				'type'    => 'checkbox',
				'section' => 'uranium_blog',
				'label'   => $label,
			)
		);
	}
}
add_action( 'customize_register', 'uranium_customize_register' );

/**
 * Returns the article listing layout: rows or cards.
 *
 * @return string
 */
function uranium_blog_layout() {
	return uranium_sanitize_blog_layout( get_theme_mod( 'uranium_blog_layout', 'rows' ) );
}

/**
 * Keeps the blog layout setting to a known value.
 *
 * @param string $value Submitted value.
 * @return string
 */
function uranium_sanitize_blog_layout( $value ) {
	return in_array( $value, array( 'rows', 'cards' ), true ) ? $value : 'rows';
}

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
