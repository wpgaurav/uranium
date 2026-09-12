<?php
/**
 * Title: Contact page
 * Slug: uranium/page-contact
 * Categories: uranium-pages
 * Keywords: contact, sales, service, phone
 * Block Types: core/post-content
 * Post Types: page
 * Viewport Width: 1440
 * Description: A page heading, direct lines for sales, service and parts, questions and a standards row.
 *
 * @package Uranium
 */

uranium_heading_block(
	__( 'Talk to an engineer', 'uranium' ),
	__( 'Sales, service and parts each have a direct line. Urgent jobs never wait in a ticket queue.', 'uranium' )
);
?>
<!-- wp:pattern {"slug":"uranium/contact-split"} /-->

<!-- wp:pattern {"slug":"uranium/faq"} /-->

<!-- wp:pattern {"slug":"uranium/standards-row"} /-->
