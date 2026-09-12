<?php
/**
 * Title: Header without utility bar
 * Slug: uranium/header-compact
 * Categories: uranium-headers
 * Block Types: core/template-part/header
 * Description: The logo, main navigation, search, store links, a color mode toggle and a quote button in one row.
 *
 * @package Uranium
 */

?>
<!-- wp:group {"className":"u-masthead","layout":{"type":"constrained"}} -->
<div class="wp-block-group u-masthead"><!-- wp:group {"align":"wide","className":"u-masthead__bar","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide u-masthead__bar"><!-- wp:group {"className":"u-brand","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group u-brand"><!-- wp:site-logo {"width":172,"shouldSyncIcon":false} /-->

<!-- wp:site-title {"level":0} /--></div>
<!-- /wp:group -->

<!-- wp:navigation {"className":"u-primary-nav","overlayMenu":"mobile","layout":{"type":"flex","justifyContent":"center"}} /-->

<!-- wp:group {"className":"u-actions","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group u-actions"><!-- wp:search {"label":"<?php echo esc_attr__( 'Search', 'uranium' ); ?>","showLabel":false,"placeholder":"<?php echo esc_attr__( 'Search products and pages', 'uranium' ); ?>","buttonText":"<?php echo esc_attr__( 'Search', 'uranium' ); ?>","buttonPosition":"button-only","buttonUseIcon":true,"isSearchFieldHidden":true,"className":"u-search"} /-->

<!-- wp:pattern {"slug":"uranium/header-store-actions"} /-->

<!-- wp:buttons {"className":"u-mode-toggle"} -->
<div class="wp-block-buttons u-mode-toggle"><!-- wp:button {"className":"is-arrow-none"} -->
<div class="wp-block-button is-arrow-none"><a class="wp-block-button__link wp-element-button" href="#color-mode"><?php esc_html_e( 'Color mode', 'uranium' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:buttons {"className":"u-header-cta"} -->
<div class="wp-block-buttons u-header-cta"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Request a quote', 'uranium' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
