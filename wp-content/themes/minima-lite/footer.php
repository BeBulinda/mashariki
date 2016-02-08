<!-- Subfooter start -->
<?php if (get_option('sp-' . md5('min-sf-sb'), '')) { ?>
    <div id="ti-subfooter-container"  class="appear-edit">
        <?php do_action('minima_subfooter_sidebar'); ?>
    </div>
<?php } ?>
<!-- Subfooter end -->
<!-- footer start -->
<div id="ti-footer-container" class="appear-edit">
    <div id="ti-footer" class="row">
        <div class="span10 navbar">
        <?php wp_nav_menu(array('theme_location' => 'secondary_navigation','container_class'=>'nav', 'menu_class' => 'nav','depth'=>-1)); ?>
        </div>
        <?php 
        	$footer=get_option('sp-' . md5('min-copy-text'), '');
        	$link=esc_url( __( 'http://minima.in/', 'minima' ) );
        	if(!$footer){
        		$footer="Minima WordPress Theme";
        	}else{
        		$link=esc_url(home_url('/'));
        	}
        ?>
        <div class="span2"><a href="<?php echo $link; ?>" target="_blank" rel="copyright"><span class="footer-copyright"><?php echo $footer; ?></span></a></div>

    </div>
</div>
<!-- footer end -->

<?php wp_footer(); ?>
</div>
</body>
</html>