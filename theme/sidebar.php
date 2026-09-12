<?php
/**
 * The page sidebar.
 *
 * @package Uranium
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<aside class="u-sidebar widget-area" aria-label="<?php esc_attr_e( 'Sidebar', 'uranium' ); ?>">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside>
