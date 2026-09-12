<?php
/**
 * Template helpers: page heading, breadcrumbs, post meta and pagination.
 *
 * @package Uranium
 */

defined( 'ABSPATH' ) || exit;

/**
 * Prints the page heading.
 *
 * @param array $args {
 *     @type string $title Heading text. Already escaped or plain text.
 *     @type string $intro Optional intro paragraph.
 *     @type string $meta  Optional meta line (HTML allowed).
 *     @type string $class Extra class names.
 * }
 */
function uranium_page_heading( $args = array() ) {
	get_template_part( 'template-parts/page-heading', null, $args );
}

/**
 * Returns the breadcrumb trail as label and URL pairs.
 *
 * @return array<int, array{label: string, url?: string}>
 */
function uranium_breadcrumb_items() {
	$items = array(
		array(
			'label' => __( 'Home', 'uranium' ),
			'url'   => home_url( '/' ),
		),
	);

	$posts_page = (int) get_option( 'page_for_posts' );

	if ( is_home() ) {
		$items[] = array( 'label' => $posts_page ? get_the_title( $posts_page ) : __( 'Articles', 'uranium' ) );
	} elseif ( is_singular( 'post' ) ) {
		if ( $posts_page ) {
			$items[] = array(
				'label' => get_the_title( $posts_page ),
				'url'   => get_permalink( $posts_page ),
			);
		}
		$categories = get_the_category();
		if ( $categories ) {
			$items[] = array(
				'label' => $categories[0]->name,
				'url'   => get_category_link( $categories[0] ),
			);
		}
		$items[] = array( 'label' => get_the_title() );
	} elseif ( is_page() ) {
		foreach ( array_reverse( get_post_ancestors( get_the_ID() ) ) as $ancestor ) {
			$items[] = array(
				'label' => get_the_title( $ancestor ),
				'url'   => get_permalink( $ancestor ),
			);
		}
		$items[] = array( 'label' => get_the_title() );
	} elseif ( is_singular() ) {
		$type = get_post_type_object( get_post_type() );
		if ( $type && $type->has_archive ) {
			$items[] = array(
				'label' => $type->labels->name,
				'url'   => get_post_type_archive_link( $type->name ),
			);
		}
		$items[] = array( 'label' => get_the_title() );
	} elseif ( is_category() || is_tag() || is_tax() ) {
		$term = get_queried_object();
		if ( $term instanceof WP_Term ) {
			foreach ( array_reverse( get_ancestors( $term->term_id, $term->taxonomy, 'taxonomy' ) ) as $ancestor ) {
				$parent = get_term( $ancestor, $term->taxonomy );
				if ( $parent instanceof WP_Term ) {
					$items[] = array(
						'label' => $parent->name,
						'url'   => get_term_link( $parent ),
					);
				}
			}
			$items[] = array( 'label' => $term->name );
		}
	} elseif ( is_post_type_archive() ) {
		$items[] = array( 'label' => post_type_archive_title( '', false ) );
	} elseif ( is_author() || is_date() ) {
		$items[] = array( 'label' => wp_strip_all_tags( get_the_archive_title() ) );
	} elseif ( is_search() ) {
		$items[] = array( 'label' => __( 'Search', 'uranium' ) );
	} elseif ( is_404() ) {
		$items[] = array( 'label' => __( 'Not found', 'uranium' ) );
	}

	/**
	 * Filters the breadcrumb items.
	 *
	 * @param array $items Label and URL pairs, first to last.
	 */
	return apply_filters( 'uranium_breadcrumb_items', $items );
}

/**
 * Prints the breadcrumb trail.
 *
 * Return a string from the `uranium_breadcrumbs_html` filter to swap in an
 * SEO plugin's breadcrumbs.
 */
function uranium_breadcrumbs() {
	if ( is_front_page() ) {
		return;
	}

	$custom = apply_filters( 'uranium_breadcrumbs_html', null );
	if ( is_string( $custom ) ) {
		echo wp_kses_post( $custom );
		return;
	}

	$items = uranium_breadcrumb_items();
	if ( count( $items ) < 2 ) {
		return;
	}

	echo '<nav class="u-breadcrumbs" aria-label="' . esc_attr__( 'Breadcrumb', 'uranium' ) . '"><ol>';
	$last = count( $items ) - 1;
	foreach ( $items as $index => $item ) {
		if ( $index < $last && ! empty( $item['url'] ) ) {
			printf( '<li><a href="%1$s">%2$s</a></li>', esc_url( $item['url'] ), esc_html( $item['label'] ) );
		} else {
			printf( '<li aria-current="page">%s</li>', esc_html( $item['label'] ) );
		}
	}
	echo '</ol></nav>';
}

/**
 * Returns the mono meta line for a post: date and first category.
 *
 * @param int|null $post_id Post ID, defaults to the current post.
 * @return string
 */
function uranium_get_post_meta( $post_id = null ) {
	$post_id = $post_id ? $post_id : get_the_ID();
	$parts   = array();

	if ( is_sticky( $post_id ) && ! is_singular() ) {
		$parts[] = '<span class="u-meta-flag">' . esc_html__( 'Featured', 'uranium' ) . '</span>';
	}

	$parts[] = sprintf(
		'<time datetime="%1$s">%2$s</time>',
		esc_attr( get_the_date( DATE_W3C, $post_id ) ),
		esc_html( get_the_date( '', $post_id ) )
	);

	$categories = get_the_category( $post_id );
	if ( $categories ) {
		$parts[] = esc_html( $categories[0]->name );
	}

	if ( is_singular( 'post' ) ) {
		$parts[] = esc_html( get_the_author_meta( 'display_name', (int) get_post_field( 'post_author', $post_id ) ) );
	}

	return implode( '<span class="u-sep" aria-hidden="true"> / </span>', $parts );
}

/**
 * Prints numbered pagination for archives.
 */
function uranium_pagination() {
	the_posts_pagination(
		array(
			'mid_size'           => 1,
			'prev_text'          => __( 'Previous', 'uranium' ),
			'next_text'          => __( 'Next', 'uranium' ),
			'before_page_number' => '<span class="screen-reader-text">' . esc_html__( 'Page', 'uranium' ) . ' </span>',
			'class'              => 'u-pagination',
		)
	);
}

/**
 * Whether a list of parsed blocks opens with a Uranium hero or heading block.
 *
 * Follows pattern references, so a page whose content is a single page
 * pattern is checked against that pattern's first block.
 *
 * @param array $blocks Parsed blocks.
 * @param int   $depth  Recursion guard.
 * @return bool
 */
function uranium_blocks_open_with_heading( $blocks, $depth = 0 ) {
	$blocks = array_values( array_filter( $blocks, fn( $block ) => ! empty( $block['blockName'] ) ) );

	if ( ! $blocks || $depth > 3 ) {
		return false;
	}

	$first = $blocks[0];

	if ( 'core/pattern' === $first['blockName'] && ! empty( $first['attrs']['slug'] ) ) {
		$pattern = WP_Block_Patterns_Registry::get_instance()->get_registered( $first['attrs']['slug'] );
		return $pattern ? uranium_blocks_open_with_heading( parse_blocks( $pattern['content'] ?? '' ), $depth + 1 ) : false;
	}

	return (bool) preg_match( '/\bu-(hero|heading-block|opener)\b/', $first['attrs']['className'] ?? '' );
}

/**
 * Whether the current page's content supplies its own opening heading.
 *
 * When it does, the default template skips the automatic page heading, so a
 * page built from a Uranium page pattern never shows two titles.
 *
 * @return bool
 */
function uranium_content_has_opener() {
	return is_page() && uranium_blocks_open_with_heading( parse_blocks( (string) get_post_field( 'post_content', get_the_ID() ) ) );
}

/**
 * Returns the intro text for the current archive or listing.
 *
 * @return string
 */
function uranium_archive_intro() {
	if ( is_home() ) {
		$posts_page = (int) get_option( 'page_for_posts' );
		return $posts_page && has_excerpt( $posts_page ) ? get_the_excerpt( $posts_page ) : '';
	}

	return wp_strip_all_tags( get_the_archive_description() );
}
