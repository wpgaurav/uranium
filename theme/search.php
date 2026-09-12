<?php
/**
 * Search results.
 *
 * @package Uranium
 */

get_header();

uranium_page_heading(
	array(
		/* translators: %s: search terms. */
		'title'  => sprintf( __( 'Results for "%s"', 'uranium' ), esc_html( get_search_query() ) ),
		'intro'  => have_posts()
			/* translators: %d: number of results. */
			? sprintf( _n( '%d page matched your search.', '%d pages matched your search.', (int) $wp_query->found_posts, 'uranium' ), (int) $wp_query->found_posts )
			: '',
		'search' => true,
	)
);
?>
<div class="u-wrap u-listing">
	<?php if ( have_posts() ) : ?>
		<div class="u-post-rows">
			<?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', 'row' );
			endwhile;
			?>
		</div>
		<?php uranium_pagination(); ?>
	<?php else : ?>
		<?php get_template_part( 'template-parts/content', 'none' ); ?>
	<?php endif; ?>
</div>
<?php
get_footer();
