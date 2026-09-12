<?php
/**
 * Template Name: Full width, no title
 * Template Post Type: page, post
 *
 * Blocks run edge to edge under the site header, with no page heading.
 * Use it for pages built from patterns or with a page builder.
 *
 * @package Uranium
 */

get_header();

while ( have_posts() ) :
	the_post();
	?>
	<div class="entry-content wp-block-post-content is-layout-constrained has-global-padding u-canvas">
		<?php the_content(); ?>
	</div>
	<?php
endwhile;

get_footer();
