<?php
/**
 * Title: Support and downloads page
 * Slug: uranium/page-support
 * Categories: uranium-pages
 * Keywords: support, downloads, manuals, help
 * Block Types: core/post-content
 * Post Types: page
 * Viewport Width: 1440
 * Description: A page heading, a document search with a help panel, more documents, questions and a dark closer.
 *
 * @package Uranium
 */

uranium_heading_block(
	__( 'Support and downloads', 'uranium' ),
	__( 'Manuals, data sheets, CAD models and certificates for the equipment we sell, and a direct line to the service desk.', 'uranium' )
);
?>
<!-- wp:pattern {"slug":"uranium/support-split"} /-->

<!-- wp:pattern {"slug":"uranium/resource-rows"} /-->

<!-- wp:pattern {"slug":"uranium/faq"} /-->

<!-- wp:pattern {"slug":"uranium/dark-close"} /-->
