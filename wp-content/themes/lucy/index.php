<?php
/**
 * The main template file.
 *
 * @package Lucy
 */
get_header(); ?>
	<div class="heading-name bg-source" >
		<div class="wrap-grid">
			<h3><?php echo esc_html(get_theme_mod('pp_blog_page')); ?></h3>
		</div>
	</div>
	<?php get_template_part( 'content', 'posts' ); ?>	
<?php get_footer(); ?>