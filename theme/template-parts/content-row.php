<?php
/**
 * A post as a hairline row: meta line, title, excerpt and an optional thumbnail.
 *
 * @package Uranium
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'u-post-row' ); ?>>
	<div class="u-post-row__body">
		<p class="u-post-row__meta"><?php echo wp_kses_post( uranium_get_post_meta() ); ?></p>
		<?php the_title( sprintf( '<h2 class="u-post-row__title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<?php if ( has_excerpt() || get_the_content() ) : ?>
			<div class="u-post-row__excerpt"><?php the_excerpt(); ?></div>
		<?php endif; ?>
	</div>
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="u-post-row__media">
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
</article>
