<?php
/**
 * The footer: closes the main landmark and renders the footer template part.
 *
 * @package Uranium
 */

?>
	</main>
	<?php do_action( 'uranium_before_footer' ); ?>
	<footer class="u-footer">
		<?php block_template_part( 'footer' ); ?>
	</footer>
	<?php do_action( 'uranium_after_footer' ); ?>
</div>
<?php wp_footer(); ?>
</body>
</html>
