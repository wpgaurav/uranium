<?php
/**
 * The header: document head, skip link and the header template part.
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

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'uranium' ); ?></a>
<div class="u-site">
	<?php do_action( 'uranium_before_header' ); ?>
	<header class="u-header">
		<?php block_template_part( 'header' ); ?>
	</header>
	<?php do_action( 'uranium_after_header' ); ?>
	<main id="content" class="u-main" tabindex="-1">
