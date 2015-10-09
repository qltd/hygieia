<?php
global $context;
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
						<?php echo file_get_contents(get_bloginfo('template_directory'). '/img/HygieiaLogoWithTag_Better.svg', false, $context); ?>
					</a>
					<div>
						<p><strong>US:</strong> 6276 Jackson Road, STE. G | Ann Arbor, MIchigan 48103 | USA | +1 734 369 9980</p>
						<p><strong>UK:</strong> Colvin House 20, Carrowreagh Road | Dundonald BT16 1QT | UK | +44 (0)2890 481762</p>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="site-info">
					<p>&copy;<?php echo date('Y'); ?> <strong>HYGIEIA</strong> | <a href="<?php echo get_permalink(49); ?>">Privacy Policy</a> |  <span class="ce"><?php echo file_get_contents(get_bloginfo('template_directory'). '/img/c-e.svg', false, $context); ?></span> | d-Nav&reg; is not available in the US</p>
				</div><!-- .site-info -->
			</div>
		</footer><!-- #colophon -->
	</div><!-- #footer-wrap -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
