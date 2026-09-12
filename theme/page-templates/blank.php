<?php
/**
 * Template Name: Blank canvas
 * Template Post Type: page
 *
 * No site header, no footer and no page heading. Useful for landing pages
 * and page builders.
 *
 * @package Uranium
 */

get_header( 'blank' );

while ( have_posts() ) :
	the_post();
	?>
	<div class="entry-content wp-block-post-content is-layout-constrained has-global-padding u-canvas">
		<?php the_content(); ?>
	</div>
	<?php
endwhile;

get_footer( 'blank' );
