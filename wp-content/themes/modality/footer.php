<?php
/**
 * The template for displaying the footer.
 *
 *
 * @package Modality
 */ 
$modality_theme_options = modality_get_options( 'modality_theme_options' );?>
	<div class="clear"></div>
	<div id="footer">
	<?php if ( $modality_theme_options['footer_widgets'] == '1') { ?>
		<div id="footer-wrap">
			<?php  get_sidebar('footer'); ?>
		</div><!--footer-wrap-->
	<?php } ?>
	</div><!--footer-->
	<?php //get_template_part( 'copyright' ); ?>
        <div id="copy_line"></div>
                <div id="copyright">
	<div class="copyright-wrap">
            <span class="left"><a href="http://www.afrikamasharikifest.com/">&copy; 2016 Afrika Mashariki Fest</a></span>
		<span class="right"><a title="#SimplicityElegance" target="_blank" href="http://instagram.com/reflex.concepts">Created/Designed</a> 
                    by <a title="ReflexConcepts" href="http://reflexconcepts.co.ke/"><img class="footer_img" src="http://kitambulisho.com/images/reflex_logo.png" width="80"/></a></span>
	</div>
            </div>
</div><!--grid-container-->
<?php wp_footer(); ?>
</body>
</html>
