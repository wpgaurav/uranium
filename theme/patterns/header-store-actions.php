<?php
/**
 * Title: Header store links
 * Slug: uranium/header-store-actions
 * Inserter: no
 * Description: Account and cart links for whichever store plugin is active. Renders nothing without one.
 *
 * @package Uranium
 */

if ( class_exists( 'WooCommerce' ) ) :
	?>
<!-- wp:woocommerce/customer-account {"displayStyle":"icon_only","iconStyle":"line","iconClass":"wc-block-customer-account__account-icon"} /-->

<!-- wp:woocommerce/mini-cart /-->
	<?php
elseif ( defined( 'FLUENTCART_VERSION' ) ) :
	?>
<!-- wp:fluent-cart/customer-dashboard-button /-->

<!-- wp:fluent-cart/mini-cart /-->
	<?php
endif;
