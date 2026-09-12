<?php
/**
 * Shared body for FluentCart category and brand archives.
 *
 * Uranium's page heading carries the title and description, so FluentCart's
 * own archive header is hidden in fluent-cart.css.
 *
 * @package Uranium
 */

get_header();

$uranium_term = get_queried_object();

uranium_page_heading(
	array(
		'title' => $uranium_term instanceof WP_Term ? $uranium_term->name : get_the_archive_title(),
		'intro' => wp_strip_all_tags( term_description() ),
	)
);
?>
<div class="u-wrap u-fct u-fct--archive">
	<?php
	do_action( 'fluent_cart/template/before_content' );
	do_action( 'fluent_cart/template/main_content' );
	do_action( 'fluent_cart/template/after_content' );
	?>
</div>
<?php
get_footer();
