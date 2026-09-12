<?php
/**
 * WooCommerce support.
 *
 * Everything here uses hooks. The theme ships no WooCommerce template
 * overrides, so WooCommerce updates never flag outdated templates.
 *
 * @package Uranium
 */

defined( 'ABSPATH' ) || exit;

/**
 * Declares WooCommerce support and the product gallery features.
 */
function uranium_woocommerce_setup() {
	add_theme_support(
		'woocommerce',
		array(
			'thumbnail_image_width'         => 600,
			'single_image_width'            => 900,
			'gallery_thumbnail_image_width' => 150,
			'product_grid'                  => array(
				'default_rows'    => 4,
				'min_rows'        => 1,
				'max_rows'        => 8,
				'default_columns' => 3,
				'min_columns'     => 2,
				'max_columns'     => 4,
			),
		)
	);
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'uranium_woocommerce_setup' );

/**
 * Stops WooCommerce from auto-inserting its account and cart blocks next to
 * the navigation. Uranium's header already places them with the other actions.
 *
 * @param string[] $hooked   Hooked block types.
 * @param string   $position Position relative to the anchor.
 * @param string   $anchor   Anchor block type.
 * @return string[]
 */
function uranium_woocommerce_hooked_blocks( $hooked, $position, $anchor ) {
	if ( 'core/navigation' === $anchor ) {
		$hooked = array_values( array_diff( $hooked, array( 'woocommerce/customer-account', 'woocommerce/mini-cart' ) ) );
	}

	return $hooked;
}
add_filter( 'hooked_block_types', 'uranium_woocommerce_hooked_blocks', 20, 3 );

/**
 * Loads Uranium's WooCommerce styles after WooCommerce's own.
 */
function uranium_woocommerce_assets() {
	$deps = array( 'uranium' );
	if ( wp_style_is( 'woocommerce-general', 'registered' ) ) {
		$deps[] = 'woocommerce-general';
	}

	wp_enqueue_style( 'uranium-woocommerce', get_template_directory_uri() . '/assets/css/woocommerce.css', $deps, uranium_asset_version( 'assets/css/woocommerce.css' ) );
}
add_action( 'wp_enqueue_scripts', 'uranium_woocommerce_assets', 20 );

/**
 * Loads the same styles in the editor so store blocks preview correctly.
 */
function uranium_woocommerce_editor_style() {
	add_editor_style( 'assets/css/woocommerce.css' );
}
add_action( 'after_setup_theme', 'uranium_woocommerce_editor_style', 20 );

/*
 * Page shell: Uranium's page heading and container replace WooCommerce's
 * wrappers, title and breadcrumb position.
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
remove_action( 'woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10 );
remove_action( 'woocommerce_archive_description', 'woocommerce_product_archive_description', 10 );
add_filter( 'woocommerce_show_page_title', '__return_false' );

/**
 * Opens the store container.
 */
function uranium_woocommerce_wrapper_start() {
	if ( is_product() ) {
		echo '<div class="u-wrap u-wc u-wc--single">';
		woocommerce_breadcrumb();
		return;
	}

	ob_start();
	woocommerce_taxonomy_archive_description();
	woocommerce_product_archive_description();
	$intro = trim( (string) ob_get_clean() );

	uranium_page_heading(
		array(
			'title' => woocommerce_page_title( false ),
			'intro' => $intro,
			'class' => 'u-wc-heading',
		)
	);

	printf(
		'<div class="u-wrap u-wc u-wc--archive%s"><div class="u-wc__main">',
		is_active_sidebar( 'shop' ) ? ' has-sidebar' : ''
	);
}
add_action( 'woocommerce_before_main_content', 'uranium_woocommerce_wrapper_start', 10 );

/**
 * Closes the store container, with the shop sidebar on archives.
 */
function uranium_woocommerce_wrapper_end() {
	if ( is_product() ) {
		echo '</div>';
		return;
	}

	echo '</div>';
	get_sidebar( 'shop' );
	echo '</div>';
}
add_action( 'woocommerce_after_main_content', 'uranium_woocommerce_wrapper_end', 10 );

/**
 * Formats WooCommerce breadcrumbs as Uranium's mono slash path.
 *
 * @param array $defaults Breadcrumb arguments.
 * @return array
 */
function uranium_woocommerce_breadcrumb_defaults( $defaults ) {
	return array_merge(
		$defaults,
		array(
			'delimiter'   => '',
			'wrap_before' => '<nav class="u-breadcrumbs woocommerce-breadcrumb" aria-label="' . esc_attr__( 'Breadcrumb', 'uranium' ) . '"><ol>',
			'wrap_after'  => '</ol></nav>',
			'before'      => '<li>',
			'after'       => '</li>',
			'home'        => _x( 'Home', 'breadcrumb', 'uranium' ),
		)
	);
}
add_filter( 'woocommerce_breadcrumb_defaults', 'uranium_woocommerce_breadcrumb_defaults' );

/**
 * Uses WooCommerce's breadcrumb trail in Uranium's page heading on store pages.
 *
 * @param string|null $html Breadcrumb HTML, or null to use Uranium's own.
 * @return string|null
 */
function uranium_woocommerce_breadcrumbs_html( $html ) {
	if ( function_exists( 'is_woocommerce' ) && is_woocommerce() ) {
		ob_start();
		woocommerce_breadcrumb();
		return (string) ob_get_clean();
	}

	return $html;
}
add_filter( 'uranium_breadcrumbs_html', 'uranium_woocommerce_breadcrumbs_html' );

/*
 * Product cards: the image sits on a plate with a corner arrow, a category
 * line sits above the title and a facts line from attributes sits below it.
 */
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );

/**
 * Prints the product image on a plate.
 */
function uranium_woocommerce_loop_plate() {
	echo '<span class="u-wc-plate">';
	woocommerce_show_product_loop_sale_flash();
	woocommerce_template_loop_product_thumbnail();
	echo '<span class="u-wc-plate__arrow" aria-hidden="true"></span></span>';
}
add_action( 'woocommerce_before_shop_loop_item_title', 'uranium_woocommerce_loop_plate', 10 );

/**
 * Prints the product's first category above the title.
 */
function uranium_woocommerce_loop_category() {
	$terms = get_the_terms( get_the_ID(), 'product_cat' );
	if ( $terms && ! is_wp_error( $terms ) ) {
		printf( '<span class="u-card-meta">%s</span>', esc_html( $terms[0]->name ) );
	}
}
add_action( 'woocommerce_shop_loop_item_title', 'uranium_woocommerce_loop_category', 5 );

/**
 * Returns short facts from a product's visible attributes.
 *
 * @param WC_Product $product Product.
 * @param int        $limit   Maximum number of facts.
 * @return array<string, string> Attribute label => value.
 */
function uranium_woocommerce_product_facts( $product, $limit = 3 ) {
	$facts = array();

	if ( ! $product instanceof WC_Product ) {
		return $facts;
	}

	foreach ( $product->get_attributes() as $attribute ) {
		if ( ! $attribute->get_visible() ) {
			continue;
		}

		$values = $attribute->is_taxonomy()
			? wc_get_product_terms( $product->get_id(), $attribute->get_name(), array( 'fields' => 'names' ) )
			: $attribute->get_options();

		if ( $values ) {
			$facts[ wc_attribute_label( $attribute->get_name(), $product ) ] = implode( ', ', $values );
		}

		if ( count( $facts ) >= $limit ) {
			break;
		}
	}

	/**
	 * Filters the facts shown on product cards and above the price.
	 *
	 * @param array      $facts   Attribute label => value.
	 * @param WC_Product $product Product.
	 */
	return apply_filters( 'uranium_product_facts', $facts, $product );
}

/**
 * Prints the facts line on product cards.
 */
function uranium_woocommerce_loop_facts() {
	$facts = uranium_woocommerce_product_facts( wc_get_product( get_the_ID() ) );
	if ( $facts ) {
		printf( '<span class="u-card-facts">%s</span>', esc_html( implode( ' / ', $facts ) ) );
	}
}
add_action( 'woocommerce_after_shop_loop_item_title', 'uranium_woocommerce_loop_facts', 7 );

/*
 * Single product: SKU, title, short description, spec rail, price, then
 * the add-to-cart form.
 */
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 8 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 25 );

/**
 * Prints the SKU line above the product title.
 */
function uranium_woocommerce_single_sku() {
	global $product;

	if ( $product instanceof WC_Product && wc_product_sku_enabled() && $product->get_sku() ) {
		printf(
			'<p class="u-sku">%1$s <span aria-hidden="true">/</span> %2$s</p>',
			esc_html__( 'SKU', 'uranium' ),
			esc_html( $product->get_sku() )
		);
	}
}
add_action( 'woocommerce_single_product_summary', 'uranium_woocommerce_single_sku', 3 );

/**
 * Prints the spec rail from the first three visible attributes.
 */
function uranium_woocommerce_single_specs() {
	global $product;

	$facts = uranium_woocommerce_product_facts( $product );
	if ( ! $facts ) {
		return;
	}

	echo '<dl class="u-spec-list">';
	foreach ( $facts as $label => $value ) {
		printf( '<div><dt>%1$s</dt><dd>%2$s</dd></div>', esc_html( $label ), esc_html( $value ) );
	}
	echo '</dl>';
}
add_action( 'woocommerce_single_product_summary', 'uranium_woocommerce_single_specs', 9 );

/**
 * Shows three related products in one row.
 *
 * @param array $args Related products arguments.
 * @return array
 */
function uranium_woocommerce_related_args( $args ) {
	$args['posts_per_page'] = 3;
	$args['columns']        = 3;
	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'uranium_woocommerce_related_args' );

/**
 * Upsells use the same three-column row.
 *
 * @return int
 */
function uranium_woocommerce_upsell_columns() {
	return 3;
}
add_filter( 'woocommerce_upsells_columns', 'uranium_woocommerce_upsell_columns' );

/**
 * Gives account, cart and checkout pages the wide container.
 *
 * @param string[] $classes Body classes.
 * @return string[]
 */
function uranium_woocommerce_body_classes( $classes ) {
	if ( is_account_page() || is_cart() || is_checkout() ) {
		$classes[] = 'u-store-page';
	}

	return $classes;
}
add_filter( 'body_class', 'uranium_woocommerce_body_classes' );

/**
 * Registers the WooCommerce product rail pattern.
 */
function uranium_woocommerce_patterns() {
	register_block_pattern(
		'uranium/product-rail-woocommerce',
		array(
			'title'       => __( 'Product rail from the WooCommerce store', 'uranium' ),
			'description' => __( 'A heading with a catalog link above three live products in Uranium cards.', 'uranium' ),
			'categories'  => array( 'uranium-products' ),
			'keywords'    => array( 'products', 'woocommerce', 'shop' ),
			'filePath'    => get_template_directory() . '/inc/patterns/product-rail-woocommerce.php',
		)
	);
}
add_action( 'init', 'uranium_woocommerce_patterns' );
