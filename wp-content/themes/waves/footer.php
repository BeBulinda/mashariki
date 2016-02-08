<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package waves
 */
?>
		</div> <!-- .container -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
	<?php 
		$footer_widgets = get_theme_mod( 'footer_widgets' );
		if( $footer_widgets ) : ?>
		<div class="footer-widgets">
			<div class="container">
				<?php get_template_part('footer','widgets'); ?>
			</div>
		</div>
	<?php endif; ?>    
		<div class="site-info">
			<div class="container">
				<div class="copyright sixteen columns">
					<?php 
						printf( __('<p>Powered by <a href="%1$s">WordPress</a>', 'waves'),
							esc_url( 'http://wordpress.org/' ));
						printf( '<span class="sep"> .</span>' );
						printf( __( 'Theme: %1$s by %2$s', 'waves' ), 'Waves', '<a href="http://www.webulousthemes.com/" rel="designer">Webulous Themes</a></p>' );
					?>
				</div>
				<div class="left-sidebar sixteen columns">
					<?php dynamic_sidebar( 'footer-nav' ); ?>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
