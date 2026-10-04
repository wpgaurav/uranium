<?php
/**
 * Related articles under a single post: up to three from the same
 * categories, as hairline rows. Can be turned off in the Customizer.
 *
 * @package Uranium
 */

$uranium_post_id    = get_the_ID();
$uranium_categories = wp_get_post_categories( $uranium_post_id );

if ( ! $uranium_categories ) {
	return;
}

/**
 * Filters the query that picks related articles.
 *
 * @param array $args    WP_Query arguments.
 * @param int   $post_id The post being read.
 */
$uranium_related = new WP_Query(
	apply_filters(
		'uranium_related_posts_args',
		array(
			'post_type'           => 'post',
			'posts_per_page'      => 3,
			'post__not_in'        => array( $uranium_post_id ),
			'category__in'        => $uranium_categories,
			'ignore_sticky_posts' => true,
			'no_found_rows'       => true,
		),
		$uranium_post_id
	)
);

if ( ! $uranium_related->have_posts() ) {
	return;
}
?>
<section class="u-related u-wrap u-wrap--prose" aria-labelledby="u-related-title">
	<h2 id="u-related-title" class="u-related__title"><?php esc_html_e( 'Related articles', 'uranium' ); ?></h2>
	<div class="u-post-rows">
		<?php
		while ( $uranium_related->have_posts() ) :
			$uranium_related->the_post();
			get_template_part( 'template-parts/content', 'row' );
		endwhile;
		wp_reset_postdata();
		?>
	</div>
</section>
