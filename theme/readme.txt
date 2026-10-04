=== Uranium ===
Contributors: gauravtiwari
Requires at least: 6.8
Tested up to: 7.1
Requires PHP: 8.1
Stable tag: 0.2.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Tags: e-commerce, one-column, two-columns, three-columns, four-columns, left-sidebar, wide-blocks, block-patterns, block-styles, custom-colors, custom-logo, custom-menu, editor-style, featured-images, full-width-template, rtl-language-support, sticky-post, theme-options, threaded-comments, translation-ready

A hybrid theme for industrial companies, with full WooCommerce and FluentCart support.

== Description ==

Uranium is built for manufacturers, equipment makers, parts distributors, engineering firms and field-service teams: sites that show a technical catalog, take quote requests and sell parts online.

It is a hybrid theme. PHP templates own the page shell and the store screens, theme.json owns the design tokens, and the header and footer are block template parts you can edit in the Site Editor.

* More than fifty patterns: split heroes, a product opener, a dark spec strip, specification sheets, model comparison tables, service plans, numbered product families, industry panels, case studies, customer quotes, a process band, product and spare part cards, latest articles, closing bands, contact and support layouts, and nine complete pages.
* A Landing page template with its own minimal header and compact footer, both editable in the Site Editor.
* Blog options in the Customizer: rows or cards for article listings, an author note and related articles under each post.
* WooCommerce: styled shop, categories, product pages, cart and checkout blocks, My Account and the Mini-Cart, using hooks only. No template overrides.
* FluentCart: theme templates for products, categories and brands, and FluentCart's colors mapped to the theme.
* Light and dark modes. Dark follows the visitor's device by default, and a header toggle remembers their choice.
* Four accent palettes in the Customizer: Signal, Hazard, Hi-vis and Cobalt.
* IBM Plex type, square corners and hairline rules, with no jQuery on the front end.

Uranium Pro, a separate plugin in development, will add quote requests, catalog filters and compare, product documents, interactive blocks and more patterns. The free theme is complete without it.

== Installation ==

1. In your admin panel, go to Appearance > Themes and click Add New Theme.
2. Click Upload Theme, choose the uranium zip file and click Install Now.
3. Click Activate.
4. Create a page, choose Home page from the Uranium pages in the pattern picker and set it as your front page under Settings > Reading.

== Frequently Asked Questions ==

= Where do I change the accent color? =

Appearance > Customize > Uranium design. The same panel sets whether the site follows the visitor's light or dark preference, stays light or stays dark.

= Where do I edit the header and footer? =

Appearance > Editor > Patterns > Template Parts. Uranium ships three header layouts and three footer layouts you can swap in.

= Does a page need a special template? =

No. When a page opens with one of Uranium's hero or heading patterns, the default template drops its own page title automatically. Use Full width, no title or Blank canvas when you build with a page builder.

= How do I build a landing page? =

Create a page, choose the Landing page template and insert the Landing page pattern. The template swaps in the minimal header and the compact footer for that page only. Edit them under Appearance > Editor > Patterns > Template Parts.

= Do I need WooCommerce or FluentCart? =

No. Both are optional. Uranium styles whichever one is active, and both can run side by side.

== Changelog ==

= 0.2.0 =
* New: 13 patterns. Product opener, specification sheet, model comparison table, service plans, customer quote with figures, case study, status strip, photo grid, latest articles, breakdown call checklist, a closer with next steps, and two complete pages for a product and a landing offer.
* New: a Landing page template that uses its own minimal header and compact footer template parts.
* New: Customizer options for the blog. Article listings can use rows or cards, and single posts can show an author note and up to three related articles.
* New: Badge, Checklist and Comparison block styles, and a download icon for buttons (the is-arrow-download class).
* New: a fresh install offers starter content, with the six page layouts as real pages, a front page, a posts page and a primary menu.
* New: a menu assigned to the Footer legal links location replaces the footer's Privacy and Terms links. The location existed before but nothing used it.
* Improved: search results label pages and products by type instead of showing a publish date.
* Fixed: in right-to-left languages, button and row arrows flipped back to pointing right on hover. Arrows, the plate arrow, the sale badge and the FAQ marker now follow the reading direction.
* Fixed: with reduced motion turned on, row arrows still moved on hover.
* Fixed: the closed WooCommerce Mini-Cart drawer stayed in the keyboard tab order on every page.
* Fixed: the add to cart button on a variable product faded to half opacity before options were chosen, which put its label below AA contrast.
* Fixed: FluentCart sale prices and the price filter's values failed AA contrast, the filter badly so in dark mode.
* Fixed: short links in the utility bar, footer and breadcrumbs had tap targets as small as 15px. They now reach 30px without changing the layout.
* Fixed: the comment form's consent checkbox was squeezed narrower than the other checkboxes.
* Fixed: related rows under a post repeated the author's name in their meta line.
* Fixed: a few colors were hard-coded in component CSS instead of coming from theme.json tokens.

= 0.1.2 =
* The download from gauravtiwari.org now includes free updates in WordPress. Theme layouts and patterns are unchanged.

= 0.1.1 =
* Fixed: the WooCommerce product rail pattern fits three products in a row again. Its wider spacing had broken WooCommerce's column sizing, so only two fit.

= 0.1.0 =
* First release.

== Copyright ==

Uranium WordPress Theme, Copyright 2026 Gaurav Tiwari.
Uranium is distributed under the terms of the GNU GPL.

This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 2 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

== Resources ==

* IBM Plex Sans, IBM Plex Sans Condensed and IBM Plex Mono
  Copyright IBM Corp., licensed under the SIL Open Font License 1.1 (assets/fonts/OFL.txt).
  Source: https://github.com/IBM/plex

* Interface icons drawn from Heroicons
  Copyright Tailwind Labs, licensed under the MIT License.
  Source: https://heroicons.com

* Photographs and product images in assets/images
  Created for Uranium in 2026 and released under CC0 1.0 (https://creativecommons.org/publicdomain/zero/1.0/).
