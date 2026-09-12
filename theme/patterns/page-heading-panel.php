<?php
/**
 * Title: Page heading with a side panel
 * Slug: uranium/page-heading-panel
 * Categories: uranium-openers
 * Keywords: heading, service, contact, panel
 * Viewport Width: 1440
 * Description: A page title, intro and benefit rows beside a surface panel with contact details and a booking button.
 *
 * @package Uranium
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"60px","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:60px;padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"align":"wide","className":"u-split"} -->
<div class="wp-block-columns alignwide u-split"><!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:heading {"level":1,"fontSize":"page-title"} -->
<h1 class="wp-block-heading has-page-title-font-size"><?php esc_html_e( 'Service that keeps its promises', 'uranium' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"u-muted","fontSize":"intro"} -->
<p class="u-muted has-intro-font-size"><?php esc_html_e( 'Planned maintenance, repairs and emergency call-outs from technicians who install the same equipment they fix.', 'uranium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-hairline"} -->
<ul class="wp-block-list is-style-hairline"><!-- wp:list-item -->
<li><?php esc_html_e( 'A response inside 24 hours on critical equipment.', 'uranium' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Technicians trained on every product we sell.', 'uranium' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'A written report after every visit, with photos and readings.', 'uranium' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:group {"className":"is-style-panel","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-panel"><!-- wp:heading {"fontSize":"title"} -->
<h2 class="wp-block-heading has-title-font-size"><?php esc_html_e( 'Book a visit', 'uranium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"u-muted"} -->
<p class="u-muted"><?php esc_html_e( "Tell us the equipment and the fault. We'll confirm a time within one working day.", 'uranium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:columns {"className":"is-style-spec-rail"} -->
<div class="wp-block-columns is-style-spec-rail"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p><?php esc_html_e( 'Breakdown line', 'uranium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>+1 555 014 2299</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p><?php esc_html_e( 'Service desk', 'uranium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>7 a.m. to 6 p.m.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"dimensions":{"width":"100%"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Request a service visit', 'uranium' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
