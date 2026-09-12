<?php
/**
 * Template Name: With sidebar
 * Template Post Type: page, post
 *
 * The page heading, then the content beside the Sidebar widget area.
 *
 * @package Uranium
 */

get_header();

while ( have_posts() ) :
	the_post();

	uranium_page_heading(
		array(
			'title' => get_the_title(),
			'intro' => has_excerpt() ? get_the_excerpt() : '',
		)
	);
	?>
	<div class="u-wrap u-with-sidebar">
		<article id="post-<?php the_ID(); ?>" <?php post_class( 'u-entry' ); ?>>
			<div class="entry-content wp-block-post-content is-layout-flow">
				<?php the_content(); ?>
			</div>
		</article>
		<?php get_sidebar(); ?>
	</div>
	<?php
endwhile;

get_footer();
