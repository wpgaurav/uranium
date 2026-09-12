<?php
/**
 * Theme setup: supports, widget areas and editor styles.
 *
 * @package Uranium
 */

defined( 'ABSPATH' ) || exit;

/**
 * Registers theme supports and editor styles.
 */
function uranium_setup() {
	load_theme_textdomain( 'uranium', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'block-template-parts' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'customize-selective-refresh-widgets' );
	add_theme_support(
		'html5',
		array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script', 'navigation-widgets' )
	);
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 64,
			'width'       => 240,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	add_theme_support( 'align-wide' );

	/*
	 * The header uses the Navigation block. When no navigation menu exists
	 * yet, WordPress builds its fallback from the classic menu assigned to
	 * this location, so sites moving from a classic theme keep their menu.
	 */
	register_nav_menus(
		array(
			'primary' => __( 'Primary menu', 'uranium' ),
			'footer'  => __( 'Footer menu', 'uranium' ),
		)
	);

	remove_theme_support( 'core-block-patterns' );

	add_editor_style( array( 'assets/css/uranium.css', 'assets/css/editor.css' ) );

	add_post_type_support( 'page', 'excerpt' );
}
add_action( 'after_setup_theme', 'uranium_setup' );

/**
 * Sets the content width for embeds and images.
 */
function uranium_content_width() {
	$GLOBALS['content_width'] = 760; // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited
}
add_action( 'after_setup_theme', 'uranium_content_width', 0 );

/**
 * Registers the widget areas.
 */
function uranium_widgets_init() {
	$shared = array(
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	);

	register_sidebar(
		array_merge(
			$shared,
			array(
				'name'        => __( 'Sidebar', 'uranium' ),
				'id'          => 'sidebar-1',
				'description' => __( 'Shown on pages that use the With sidebar template.', 'uranium' ),
			)
		)
	);

	register_sidebar(
		array_merge(
			$shared,
			array(
				'name'        => __( 'Shop sidebar', 'uranium' ),
				'id'          => 'shop',
				'description' => __( 'Shown beside WooCommerce and FluentCart product archives. Category lists and product filters fit here.', 'uranium' ),
			)
		)
	);
}
add_action( 'widgets_init', 'uranium_widgets_init' );

/**
 * Stops remote patterns from the directory crowding the inserter.
 */
add_filter( 'should_load_remote_block_patterns', '__return_false' );

/**
 * Adds body classes the stylesheet relies on.
 *
 * @param string[] $classes Body classes.
 * @return string[]
 */
function uranium_body_classes( $classes ) {
	if ( is_singular() && ! is_front_page() && ! is_page_template() ) {
		$classes[] = 'u-has-page-heading';
	}

	if ( is_page_template( 'page-templates/with-sidebar.php' ) && is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'u-has-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'uranium_body_classes' );

/**
 * Drops the "Category:" style prefix, since the breadcrumb already says where you are.
 *
 * @return string
 */
function uranium_archive_title_prefix() {
	return '';
}
add_filter( 'get_the_archive_title_prefix', 'uranium_archive_title_prefix' );

/**
 * Shortens the automatic excerpt used in post rows.
 *
 * @return int
 */
function uranium_excerpt_length() {
	return 28;
}
add_filter( 'excerpt_length', 'uranium_excerpt_length' );

/**
 * Replaces the default "[...]" excerpt ending.
 *
 * @return string
 */
function uranium_excerpt_more() {
	return '&hellip;';
}
add_filter( 'excerpt_more', 'uranium_excerpt_more' );
