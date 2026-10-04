<?php
/**
 * The author note under a single post. Shows only when the author has
 * written a bio, and can be turned off in the Customizer.
 *
 * @package Uranium
 */

$uranium_author_id = (int) get_the_author_meta( 'ID' );
$uranium_bio       = get_the_author_meta( 'description', $uranium_author_id );

if ( ! $uranium_bio ) {
	return;
}
?>
<aside class="u-author" aria-label="<?php esc_attr_e( 'About the author', 'uranium' ); ?>">
	<?php echo get_avatar( $uranium_author_id, 64, '', '', array( 'class' => 'u-author__avatar' ) ); ?>
	<div class="u-author__body">
		<p class="u-author__name"><a href="<?php echo esc_url( get_author_posts_url( $uranium_author_id ) ); ?>"><?php echo esc_html( get_the_author_meta( 'display_name', $uranium_author_id ) ); ?></a></p>
		<div class="u-author__bio"><?php echo wp_kses_post( wpautop( $uranium_bio ) ); ?></div>
	</div>
</aside>
