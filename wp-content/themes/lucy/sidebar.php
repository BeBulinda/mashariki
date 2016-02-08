<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Lucy
 */
?>
<section class="blog-sidebar">
	<?php if ( is_active_sidebar('blog-sidebar') ) : ?>
		<?php dynamic_sidebar('blog-sidebar'); ?>
	<?php else : ?>	
		<div class="widget-container">
			<h3 class="widget-title"><?php _e( 'Recent Posts', "lucy" ); ?></h3>
			<ul>
				<?php wp_get_archives('type=postbypost&limit=10'); ?>
			</ul>
		</div>
		<div class="widget-container">
			<h3 class="widget-title"><?php _e( 'Pages', "lucy" ); ?></h3>
			<ul>
				<?php wp_list_pages('title_li='); ?>
			</ul>
		</div>
		<div class="widget-container">
			<h3 class="widget-title"><?php _e( 'Tag Cloud', "lucy" ); ?></h3>
			<div class="tagcloud">
				<?php wp_tag_cloud(); ?>
			</div>
		</div>
		<div class="widget-container">
			<h3 class="widget-title"><?php _e( 'Categories', "lucy" ); ?></h3>
			<ul>
				<?php wp_list_categories('title_li='); ?>
			</ul>
		</div>		
	<?php endif; ?>
</section>