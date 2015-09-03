<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package hygieia
 */
?>

	</div><!-- #content -->


	<div id="footer-wrap">
		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="footer-top">
				<div class="centered">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="site-title">
						<?php echo file_get_contents(get_bloginfo('template_directory'). '/img/hygieia-logo.svg'); ?>
					</a>
					<p><strong>US:</strong> 6267 Jackson Road, Suite G | Ann Arbor, MIchigan 48103 | USA | +1.734.527.9160</p>
					<p><strong>UK:</strong> 6267 Jackson Road, Suite G | Ann Arbor, MIchigan 48103 | UK | +44 (0) 7474 673172</p>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="site-info">
					<p>&copy;<?php echo date('Y'); ?> <strong>HYGIEIA</strong> | <a href="<?php echo get_permalink(49); ?>">Privacy Policy</a> |  CE d-Nav&trade; is not available in the US</p>
				</div><!-- .site-info -->
			</div>
		</footer><!-- #colophon -->
	</div><!-- #footer-wrap -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
