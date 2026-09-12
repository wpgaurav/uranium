<?php
/**
 * Title: Industries page
 * Slug: uranium/page-solutions
 * Categories: uranium-pages
 * Keywords: industries, solutions, sectors, markets
 * Block Types: core/post-content
 * Post Types: page
 * Viewport Width: 1440
 * Description: A page heading, industry cards, a figure rail, questions and a closing band.
 *
 * @package Uranium
 */

uranium_heading_block(
	__( 'Industries', 'uranium' ),
	__( 'Every sector wears equipment out in its own way. Pick yours to see the products, service plans and lead times that fit it.', 'uranium' )
);
?>
<!-- wp:pattern {"slug":"uranium/sector-cards"} /-->

<!-- wp:pattern {"slug":"uranium/figure-rail"} /-->

<!-- wp:pattern {"slug":"uranium/faq"} /-->

<!-- wp:pattern {"slug":"uranium/signal-band"} /-->
