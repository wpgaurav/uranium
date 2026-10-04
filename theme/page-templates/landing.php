<?php
/**
 * Template Name: Landing page
 * Template Post Type: page
 *
 * The minimal header (logo and one call to action) and the compact footer,
 * with blocks running edge to edge and no page heading. Both parts are
 * editable in the Site Editor under Patterns > Template Parts.
 *
 * @package Uranium
 */

get_header( null, array( 'part' => 'header-minimal' ) );

while ( have_posts() ) :
	the_post();
	?>
	<div class="entry-content wp-block-post-content is-layout-constrained has-global-padding u-canvas">
		<?php the_content(); ?>
	</div>
	<?php
endwhile;

get_footer( null, array( 'part' => 'footer-compact' ) );
