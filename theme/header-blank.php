<?php
/**
 * Header for the Blank canvas template: no site header, only the document head.
 *
 * @package Uranium
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class( 'u-blank' ); ?>>
<?php wp_body_open(); ?>
<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'uranium' ); ?></a>
<main id="content" class="u-main" tabindex="-1">
