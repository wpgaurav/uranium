<?php
/**
 * Single posts, pages and any other single view.
 *
 * @package Uranium
 */

get_header();

while ( have_posts() ) :
	the_post();

	$uranium_is_post = is_singular( 'post' );
	$uranium_canvas  = uranium_content_has_opener();

	if ( ! $uranium_canvas ) {
		uranium_page_heading(
			array(
				'title' => get_the_title(),
				'intro' => ! $uranium_is_post && has_excerpt() ? get_the_excerpt() : '',
				'meta'  => $uranium_is_post ? uranium_get_post_meta() : '',
				'class' => $uranium_is_post ? 'is-post' : '',
			)
		);
	}
	?>
	<article id="post-<?php the_ID(); ?>" <?php post_class( 'u-entry' ); ?>>
		<?php if ( $uranium_is_post && has_post_thumbnail() ) : ?>
			<figure class="u-entry__media u-wrap">
				<?php the_post_thumbnail( 'full', array( 'fetchpriority' => 'high' ) ); ?>
			</figure>
		<?php endif; ?>

		<div class="entry-content wp-block-post-content is-layout-constrained has-global-padding<?php echo $uranium_is_post ? ' u-prose' : ''; ?><?php echo $uranium_canvas ? ' u-canvas' : ''; ?>">
			<?php
			the_content();

			wp_link_pages(
				array(
					'before' => '<nav class="u-page-links" aria-label="' . esc_attr__( 'Page', 'uranium' ) . '"><span class="u-page-links__label">' . esc_html__( 'Pages', 'uranium' ) . '</span>',
					'after'  => '</nav>',
				)
			);
			?>
		</div>

		<?php if ( $uranium_is_post ) : ?>
			<footer class="u-entry__footer u-wrap u-wrap--prose">
				<?php
				$uranium_tags = get_the_tag_list( '<p class="u-entry__tags">', '<span class="u-sep" aria-hidden="true"> / </span>', '</p>' );
				if ( $uranium_tags && ! is_wp_error( $uranium_tags ) ) {
					echo wp_kses_post( $uranium_tags );
				}

				the_post_navigation(
					array(
						'prev_text' => '<span class="u-nav-label">' . esc_html__( 'Previous', 'uranium' ) . '</span><span class="u-nav-title">%title</span>',
						'next_text' => '<span class="u-nav-label">' . esc_html__( 'Next', 'uranium' ) . '</span><span class="u-nav-title">%title</span>',
					)
				);
				?>
			</footer>
		<?php endif; ?>
	</article>
	<?php

	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
endwhile;

get_footer();
