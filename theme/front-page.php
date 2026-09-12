<?php
/**
 * Front page.
 *
 * A static front page renders its blocks edge to edge with no page heading,
 * so a hero pattern can open the site. A front page that lists posts uses
 * the blog index instead.
 *
 * @package Uranium
 */

if ( 'page' !== get_option( 'show_on_front' ) ) {
	require get_home_template();
	return;
}

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
