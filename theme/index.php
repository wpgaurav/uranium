<?php
/**
 * The main template: the blog index, archives and any view without its own template.
 *
 * @package Uranium
 */

get_header();

if ( is_home() && ! is_front_page() ) {
	$uranium_title = single_post_title( '', false );
} elseif ( is_home() ) {
	$uranium_title = __( 'Latest articles', 'uranium' );
} else {
	$uranium_title = get_the_archive_title();
}

uranium_page_heading(
	array(
		'title' => $uranium_title,
		'intro' => uranium_archive_intro(),
	)
);

$uranium_cards = 'cards' === uranium_blog_layout();
?>
<div class="u-wrap u-listing">
	<?php if ( have_posts() ) : ?>
		<div class="<?php echo $uranium_cards ? 'u-post-cards' : 'u-post-rows'; ?>">
			<?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', $uranium_cards ? 'card' : 'row' );
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
