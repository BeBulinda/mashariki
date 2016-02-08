<?php
/**
 * The template for displaying the footer.
 *
 *
 * @package Lucy
 */
?>
		<footer class="bottom">
            <div class="bottom-navigation">
                <div class="wrap-grid bottom-navigation-content">
				<?php if ( is_active_sidebar('footer-widget-area') ) : ?>
				<?php dynamic_sidebar('footer-widget-area'); ?>
				<?php else : ?>	
					<div class="widget">
						<h3 class="widget-title"><?php _e( 'Recent Posts', "lucy" ); ?></h3>
						<ul>
							<?php wp_get_archives('type=postbypost&limit=10'); ?>
						</ul>
					</div>
					<div class="widget">
						<h3 class="widget-title"><?php _e( 'Tag Cloud', "lucy" ); ?></h3>
						<div class="tagcloud">
							<?php wp_tag_cloud(); ?>
						</div>
					</div>
					<div class="widget">
						<h3 class="widget-title"><?php _e( 'Pages', "lucy" ); ?></h3>
						<ul>
							<?php wp_list_pages('title_li='); ?>
						</ul>
					</div>
					<div class="widget">
						<h3 class="widget-title"><?php _e( 'Categories', "lucy" ); ?></h3>
						<ul>
							<?php wp_list_categories('title_li='); ?>
						</ul>
					</div>
				<?php endif; ?>					
                </div>
            </div>
            <div class="copyright">
                <div class="wrap-grid copyright-content">
                    <?php if ( get_theme_mod('pp_copyrights') ) { ?><div class="block-left"><?php echo esc_html(get_theme_mod('pp_copyrights')); ?></div><?php } ?>
                    <div class="block-right"><?php do_action( 'lucy_display_credits' ); ?></div>
                </div>
            </div>
        </footer>
		<?php wp_footer(); ?>
    </body>
</html>