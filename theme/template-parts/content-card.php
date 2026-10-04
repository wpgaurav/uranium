<?php
/**
 * A post as a card: image, meta line, title and excerpt. Used when the blog
 * layout in the Customizer is set to cards.
 *
 * @package Uranium
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'u-post-card' ); ?>>
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="u-post-card__media">
			<?php
			the_post_thumbnail(
				'medium_large',
				array(
					'loading' => 'lazy',
					'alt'     => '',
				)
			);
			?>
		</div>
	<?php endif; ?>
	<p class="u-post-card__meta"><?php echo wp_kses_post( uranium_get_post_meta() ); ?></p>
	<?php the_title( sprintf( '<h2 class="u-post-card__title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	<?php if ( has_excerpt() || get_the_content() ) : ?>
		<div class="u-post-card__excerpt"><?php the_excerpt(); ?></div>
	<?php endif; ?>
</article>
