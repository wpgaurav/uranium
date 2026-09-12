<?php
/**
 * Page heading: breadcrumbs, title, meta, intro and an optional search form.
 *
 * @package Uranium
 */

$uranium_args = wp_parse_args(
	$args ?? array(),
	array(
		'title'  => '',
		'intro'  => '',
		'meta'   => '',
		'class'  => '',
		'search' => false,
	)
);
?>
<header class="u-page-heading <?php echo esc_attr( $uranium_args['class'] ); ?>">
	<div class="u-wrap">
		<?php uranium_breadcrumbs(); ?>

		<?php if ( $uranium_args['title'] ) : ?>
			<h1 class="u-page-heading__title"><?php echo wp_kses_post( $uranium_args['title'] ); ?></h1>
		<?php endif; ?>

		<?php if ( $uranium_args['meta'] ) : ?>
			<p class="u-page-heading__meta"><?php echo wp_kses_post( $uranium_args['meta'] ); ?></p>
		<?php endif; ?>

		<?php if ( $uranium_args['intro'] ) : ?>
			<div class="u-page-heading__intro"><?php echo wp_kses_post( wpautop( $uranium_args['intro'] ) ); ?></div>
		<?php endif; ?>

		<?php if ( $uranium_args['search'] ) : ?>
			<div class="u-page-heading__search"><?php get_search_form(); ?></div>
		<?php endif; ?>

		<?php do_action( 'uranium_page_heading_end', $uranium_args ); ?>
	</div>
</header>
