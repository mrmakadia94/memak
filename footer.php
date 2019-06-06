<?php
/**
 * The template for displaying the footer
 */

?>
<footer class="site-footer" role="contentinfo">
	<div class="site-info container">
		<?php echo date_i18n(__('Y','memak')); ?> <?php esc_html_e( ' Memak ', 'memak'); ?>
	</div><!-- .site-info -->
</footer><!-- #colophon .site-footer -->

<?php wp_footer(); ?>

</body>
</html>
