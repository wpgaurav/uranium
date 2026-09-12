<?php
/**
 * Block styles: the design's devices applied to core blocks.
 *
 * The CSS for every style lives in assets/css/uranium.css, which also loads
 * in the editor.
 *
 * @package Uranium
 */

defined( 'ABSPATH' ) || exit;

/**
 * Registers Uranium's block styles.
 */
function uranium_register_block_styles() {
	$styles = array(
		'core/button'        => array(
			'ink'       => __( 'Ink', 'uranium' ),
			'text-link' => __( 'Text link', 'uranium' ),
		),
		'core/group'         => array(
			'rows'  => __( 'Hairline rows', 'uranium' ),
			'index' => __( 'Numbered rows', 'uranium' ),
			'panel' => __( 'Panel', 'uranium' ),
			'tag'   => __( 'Caption tag', 'uranium' ),
		),
		'core/columns'       => array(
			'spec-rail' => __( 'Spec rail', 'uranium' ),
			'steps'     => __( 'Numbered steps', 'uranium' ),
		),
		'core/paragraph'     => array(
			'label' => __( 'Mono label', 'uranium' ),
			'meta'  => __( 'Mono meta', 'uranium' ),
			'note'  => __( 'Status note', 'uranium' ),
		),
		'core/heading'       => array(
			'display' => __( 'Display', 'uranium' ),
		),
		'core/image'         => array(
			'plate' => __( 'Product plate', 'uranium' ),
		),
		'core/table'         => array(
			'spec' => __( 'Spec table', 'uranium' ),
		),
		'core/list'          => array(
			'hairline' => __( 'Hairline rows', 'uranium' ),
		),
		'core/post-template' => array(
			'rows' => __( 'Hairline rows', 'uranium' ),
		),
	);

	foreach ( $styles as $block => $list ) {
		foreach ( $list as $name => $label ) {
			register_block_style(
				$block,
				array(
					'name'  => $name,
					'label' => $label,
				)
			);
		}
	}
}
add_action( 'init', 'uranium_register_block_styles' );
