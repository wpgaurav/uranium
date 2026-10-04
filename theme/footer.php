<?php
/**
 * The footer: closes the main landmark and renders the footer template part.
 *
 * A template can pass `array( 'part' => 'footer-compact' )` to get_footer()
 * to render a different footer part.
 *
 * @package Uranium
 */

$uranium_footer_part = uranium_template_part_name( 'footer', $args['part'] ?? 'footer' );
?>
	</main>
	<?php do_action( 'uranium_before_footer' ); ?>
	<footer class="u-footer">
		<?php block_template_part( $uranium_footer_part ); ?>
	</footer>
	<?php do_action( 'uranium_after_footer' ); ?>
</div>
<?php wp_footer(); ?>
</body>
</html>
