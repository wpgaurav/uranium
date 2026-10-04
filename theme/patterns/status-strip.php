<?php
/**
 * Title: Status strip
 * Slug: uranium/status-strip
 * Categories: uranium-proof
 * Keywords: stock, delivery, service, notes, trust, strip
 * Viewport Width: 1440
 * Description: A thin surface band with three status notes for stock, the breakdown line and parts support. It sits well right under an opener.
 *
 * @package Uranium
 */

$uranium_notes = array(
	__( '12,400 parts in stock. Orders placed before 2 p.m. ship the same day.', 'uranium' ),
	__( 'The breakdown line is answered around the clock, every day of the year.', 'uranium' ),
	__( 'Spares and service for equipment up to 30 years old, whoever supplied it.', 'uranium' ),
);
?>
<!-- wp:group {"align":"full","className":"u-status-strip","backgroundColor":"surface","style":{"spacing":{"padding":{"top":"28px","bottom":"28px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull u-status-strip has-surface-background-color has-background" style="padding-top:28px;padding-bottom:28px"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><?php foreach ( $uranium_notes as $uranium_note ) : ?><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"className":"is-style-note"} -->
<p class="is-style-note"><?php echo esc_html( $uranium_note ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --><?php endforeach; ?></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
