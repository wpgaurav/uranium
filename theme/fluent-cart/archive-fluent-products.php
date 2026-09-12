<?php
/**
 * FluentCart product archive.
 *
 * Only used when FluentCart has no shop page set; otherwise FluentCart
 * redirects this archive to the shop page.
 *
 * @package Uranium
 */

get_header();

uranium_page_heading(
	array(
		'title' => post_type_archive_title( '', false ),
	)
);
?>
<div class="u-wrap u-fct u-fct--archive">
	<?php do_action( 'fluent_cart/render_products_archive' ); ?>
</div>
<?php
get_footer();
