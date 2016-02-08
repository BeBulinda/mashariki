<?php 
/**
 * 
 * @package Lucy 
 */
get_header(); 
if ( have_posts() ) : 
if ( 'posts' == get_option( 'show_on_front')) {
?>
	<div class="heading-name bg-source" >
		<div class="wrap-grid">
			<h3><?php echo esc_html(get_theme_mod('pp_blog_page')); ?></h3>
		</div>
	</div>
		<?php get_template_part( 'content', 'posts' ); ?>	
<?php } else { ?>		
        <?php get_template_part( 'content', 'home' ); ?>
<?php } 
endif; 
get_footer(); ?>