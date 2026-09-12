<?php
/**
 * FluentCart single product.
 *
 * FluentCart renders the gallery, title, price and buy section through
 * `fluent_cart/product/render_product_header`. The product description and
 * anything FluentCart appends to it come from the_content().
 *
 * @package Uranium
 */

get_header();

while ( have_posts() ) :
	the_post();
	?>
	<div class="u-wrap u-fct u-fct--single">
		<?php uranium_breadcrumbs(); ?>
		<?php do_action( 'fluent_cart/product/render_product_header', get_the_ID() ); ?>
	</div>

	<div class="entry-content wp-block-post-content is-layout-constrained has-global-padding u-fct__content">
		<?php the_content(); ?>
	</div>

	<?php
	$uranium_related = do_shortcode( '[fluent_cart_related_products]' );
	if ( trim( wp_strip_all_tags( $uranium_related ) ) ) :
		?>
		<section class="u-wrap u-fct__related" aria-label="<?php esc_attr_e( 'Related products', 'uranium' ); ?>">
			<?php echo $uranium_related; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- FluentCart's rendered markup. ?>
		</section>
		<?php
	endif;
endwhile;

get_footer();
