<?php
/**
 * Title: Service plans
 * Slug: uranium/service-plans
 * Categories: uranium-products
 * Keywords: pricing, plans, service, maintenance, contracts, tiers
 * Viewport Width: 1440
 * Description: A heading and a short line above three plan cards, each with a name, a yearly price, a checklist of what's covered and a button. The middle plan sits on a surface fill with a badge.
 *
 * @package Uranium
 */

$uranium_plans = array(
	array(
		'name'     => __( 'Inspect', 'uranium' ),
		'price'    => '$1,800',
		'summary'  => __( 'For sites with their own fitters who want a second pair of eyes twice a year.', 'uranium' ),
		'items'    => array(
			__( 'Two planned inspection visits', 'uranium' ),
			__( 'Vibration and temperature readings on every covered unit', 'uranium' ),
			__( 'A written report that ranks equipment by risk', 'uranium' ),
		),
		'featured' => false,
	),
	array(
		'name'     => __( 'Maintain', 'uranium' ),
		'price'    => '$4,200',
		'summary'  => __( 'For plants that run two shifts and can lose a day to a single seal.', 'uranium' ),
		'items'    => array(
			__( 'Everything in Inspect', 'uranium' ),
			__( 'Priority on the breakdown line, on site inside 24 hours', 'uranium' ),
			__( 'Wear parts at cost, with seals and bearings held for your site', 'uranium' ),
			__( 'No call-out fees on covered equipment', 'uranium' ),
		),
		'featured' => true,
	),
	array(
		'name'     => __( 'Cover', 'uranium' ),
		'price'    => '$7,900',
		'summary'  => __( 'For plants that run around the clock and budget a fixed cost per year.', 'uranium' ),
		'items'    => array(
			__( 'Everything in Maintain', 'uranium' ),
			__( 'All parts and labor on covered equipment', 'uranium' ),
			__( 'A loan unit from the rental fleet while yours is repaired', 'uranium' ),
			__( 'Operator training for new starters, twice a year', 'uranium' ),
		),
		'featured' => false,
	),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"align":"wide","className":"u-section-head","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide u-section-head"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Service plans, priced per site', 'uranium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"u-muted"} -->
<p class="u-muted"><?php esc_html_e( 'One yearly price covers up to 20 units on one site. Larger sites get a quote after a walk-round.', 'uranium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"32px"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"17rem"}} -->
<div class="wp-block-group alignwide"><?php foreach ( $uranium_plans as $uranium_plan ) : ?><?php if ( $uranium_plan['featured'] ) : ?><!-- wp:group {"className":"u-plan","backgroundColor":"surface","layout":{"type":"default"}} -->
<div class="wp-block-group u-plan has-surface-background-color has-background"><?php else : ?><!-- wp:group {"className":"u-plan","layout":{"type":"default"}} -->
<div class="wp-block-group u-plan"><?php endif; ?><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html( $uranium_plan['name'] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"u-plan__price"} -->
<p class="u-plan__price"><?php echo esc_html( $uranium_plan['price'] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-meta"} -->
<p class="is-style-meta"><?php esc_html_e( 'Per site, per year', 'uranium' ); ?></p>
<!-- /wp:paragraph -->
<?php if ( $uranium_plan['featured'] ) : ?>
<!-- wp:paragraph {"className":"is-style-badge","backgroundColor":"signal","textColor":"on-signal"} -->
<p class="is-style-badge has-on-signal-color has-signal-background-color has-text-color has-background"><?php esc_html_e( 'Most chosen', 'uranium' ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?>

<!-- wp:paragraph -->
<p><?php echo esc_html( $uranium_plan['summary'] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-checklist"} -->
<ul class="wp-block-list is-style-checklist"><?php foreach ( $uranium_plan['items'] as $uranium_item ) : ?><!-- wp:list-item -->
<li><?php echo esc_html( $uranium_item ); ?></li>
<!-- /wp:list-item --><?php endforeach; ?></ul>
<!-- /wp:list -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><?php if ( $uranium_plan['featured'] ) : ?><!-- wp:button -->
<div class="wp-block-button"><?php else : ?><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><?php endif; ?><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php /* translators: %s: plan name. */ echo esc_html( sprintf( __( 'Start with %s', 'uranium' ), $uranium_plan['name'] ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --><?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
