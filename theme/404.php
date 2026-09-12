<?php
/**
 * Not found.
 *
 * @package Uranium
 */

get_header();

uranium_page_heading(
	array(
		'title'  => __( 'This page moved or never existed.', 'uranium' ),
		'intro'  => __( 'Check the address, search the site or go back to the start.', 'uranium' ),
		'search' => true,
	)
);
?>
<div class="u-wrap u-404-actions">
	<div class="wp-block-buttons">
		<div class="wp-block-button">
			<a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Back to the home page', 'uranium' ); ?></a>
		</div>
	</div>
</div>
<?php
get_footer();
