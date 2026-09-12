<?php
/**
 * The shop sidebar, shared by WooCommerce and FluentCart archives.
 *
 * @package Uranium
 */

if ( ! is_active_sidebar( 'shop' ) ) {
	return;
}
?>
<aside class="u-shop-sidebar widget-area" aria-label="<?php esc_attr_e( 'Shop filters', 'uranium' ); ?>">
	<?php dynamic_sidebar( 'shop' ); ?>
</aside>
