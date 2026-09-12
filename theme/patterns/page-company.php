<?php
/**
 * Title: Company page
 * Slug: uranium/page-company
 * Categories: uranium-pages
 * Keywords: about, company, history, team
 * Block Types: core/post-content
 * Post Types: page
 * Viewport Width: 1440
 * Description: A page heading, the company intro, a figure rail, a timeline, standards and a dark closer.
 *
 * @package Uranium
 */

uranium_heading_block(
	__( 'A supplier that stays after the sale', 'uranium' ),
	__( 'Family owned since 1987, with two depots, 68 field technicians and a workshop that rebuilds what others replace.', 'uranium' )
);
?>
<!-- wp:pattern {"slug":"uranium/intro-split"} /-->

<!-- wp:pattern {"slug":"uranium/figure-rail"} /-->

<!-- wp:pattern {"slug":"uranium/timeline-rows"} /-->

<!-- wp:pattern {"slug":"uranium/standards-row"} /-->

<!-- wp:pattern {"slug":"uranium/dark-close"} /-->
