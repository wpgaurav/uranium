<?php
/**
 * Title: Industry detail page
 * Slug: uranium/page-solution-detail
 * Categories: uranium-pages
 * Keywords: industry, solution, sector, detail
 * Block Types: core/post-content
 * Post Types: page
 * Viewport Width: 1440
 * Description: A page heading, a photo band, a service split, recommended products, plan benefits and a dark closer.
 *
 * @package Uranium
 */

uranium_heading_block(
	__( 'Manufacturing', 'uranium' ),
	__( 'Coolant, washdown and hydraulic duty on lines that run two or three shifts a day.', 'uranium' )
);
?>
<!-- wp:pattern {"slug":"uranium/photo-band"} /-->

<!-- wp:pattern {"slug":"uranium/media-split"} /-->

<!-- wp:pattern {"slug":"uranium/product-rail"} /-->

<!-- wp:pattern {"slug":"uranium/benefit-rows"} /-->

<!-- wp:pattern {"slug":"uranium/dark-close"} /-->
