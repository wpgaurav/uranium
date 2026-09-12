<?php
/**
 * Title: Questions and answers
 * Slug: uranium/faq
 * Categories: uranium-rows, uranium-contact
 * Keywords: faq, questions, answers, details, accordion
 * Viewport Width: 1440
 * Description: A heading and a contact link beside expandable questions on hairline rows.
 *
 * @package Uranium
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"align":"wide","className":"u-split"} -->
<div class="wp-block-columns alignwide u-split"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Questions buyers ask', 'uranium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"u-muted"} -->
<p class="u-muted"><?php esc_html_e( "If yours isn't here, an engineer will answer it within a working day.", 'uranium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Ask your question', 'uranium' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:details -->
<details class="wp-block-details"><summary><?php esc_html_e( 'Can you match a pump that is no longer made?', 'uranium' ); ?></summary><!-- wp:paragraph -->
<p><?php esc_html_e( 'Usually, yes. Send the nameplate and the flange dimensions and we will propose a drop-in replacement or an adapter kit.', 'uranium' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary><?php esc_html_e( 'How fast do stocked parts ship?', 'uranium' ); ?></summary><!-- wp:paragraph -->
<p><?php esc_html_e( 'Orders placed before 2 p.m. leave the same day. Next-day delivery is available across most of the country.', 'uranium' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary><?php esc_html_e( 'Do you test equipment before it ships?', 'uranium' ); ?></summary><!-- wp:paragraph -->
<p><?php esc_html_e( 'Every pump is run on our test bed and ships with its performance curve. Witness tests can be booked in advance.', 'uranium' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary><?php esc_html_e( 'Can we buy on account?', 'uranium' ); ?></summary><!-- wp:paragraph -->
<p><?php esc_html_e( 'Approved business customers can order on 30-day terms. New accounts are usually approved within two working days.', 'uranium' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary><?php esc_html_e( 'What does the warranty cover?', 'uranium' ); ?></summary><!-- wp:paragraph -->
<p><?php esc_html_e( 'Two years on new equipment and one year on repairs, covering parts and labor. Wear parts are excluded.', 'uranium' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
