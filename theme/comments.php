<?php
/**
 * Comments.
 *
 * @package Uranium
 */

if ( post_password_required() ) {
	return;
}
?>
<section id="comments" class="u-comments u-wrap u-wrap--prose">
	<?php if ( have_comments() ) : ?>
		<h2 class="u-comments__title">
			<?php
			$uranium_count = (int) get_comments_number();
			/* translators: %d: number of comments. */
			echo esc_html( sprintf( _n( '%d comment', '%d comments', $uranium_count, 'uranium' ), $uranium_count ) );
			?>
		</h2>

		<ol class="u-comment-list">
			<?php
			wp_list_comments(
				array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 40,
				)
			);
			?>
		</ol>

		<?php
		the_comments_navigation(
			array(
				'prev_text' => __( 'Older comments', 'uranium' ),
				'next_text' => __( 'Newer comments', 'uranium' ),
			)
		);
		?>

		<?php if ( ! comments_open() ) : ?>
			<p class="u-comments__closed"><?php esc_html_e( 'Comments are closed.', 'uranium' ); ?></p>
		<?php endif; ?>
	<?php endif; ?>

	<?php
	comment_form(
		array(
			'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
			'title_reply_after'  => '</h2>',
			'class_submit'       => 'submit wp-element-button',
		)
	);
	?>
</section>
