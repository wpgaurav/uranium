<?php
/**
 * Shown when a listing or search has nothing to show.
 *
 * @package Uranium
 */

?>
<div class="u-empty">
	<?php if ( is_search() ) : ?>
		<h2 class="u-empty__title"><?php esc_html_e( 'Nothing matched that search.', 'uranium' ); ?></h2>
		<p><?php esc_html_e( 'Try a part number, a product family or a shorter phrase.', 'uranium' ); ?></p>
	<?php else : ?>
		<h2 class="u-empty__title"><?php esc_html_e( 'Nothing here yet.', 'uranium' ); ?></h2>
		<p><?php esc_html_e( 'New articles will show up here as soon as they are published.', 'uranium' ); ?></p>
		<?php get_search_form(); ?>
	<?php endif; ?>
</div>
