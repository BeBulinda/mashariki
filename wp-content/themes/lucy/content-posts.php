<?php 
/**
 * 
 * @package Lucy 
 */
?>
<div class="blog-container wrap-grid">
	<section class="blog-content">
		<?php while (have_posts()) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
				<div class="the-blog-item-top">
					<a href="<?php the_permalink() ?>"><?php the_post_thumbnail($post->ID, 'featured'); ?></a>	
					<span class="icon bg isblock comment-count-top"><b><?php comments_popup_link( 'No comments', '1 comment', '% comments', 'comments-link', 'Comments are off for this post'); ?></b></span>
				</div>	
				<?php endif; ?>
			   <h1 class="the-blog-item-title"><a href="<?php the_permalink() ?>"><?php if(get_the_title($post->ID)) { the_title(); } else { the_time( get_option( 'date_format' ) ); } ?></a></h1>
			   <div class="the-blog-item-general-info">
					 <div class="blog-item-info"><span class="icon date iblock block-left valignmiddle"></span><span class="gen-text-info"><?php the_time( get_option( 'date_format' ) ); ?></span></div>
					<div class="blog-item-info"><span class="icon user iblock block-left valignmiddle"></span><span class="gen-text-info"><?php _e( 'Posted by', 'lucy' ); ?> <?php the_author(); ?></span></div>
					<div class="blog-item-info"><span class="icon blog-item iblock block-left valignmiddle"></span><span class="gen-text-info"><?php the_category(', '); ?></span></div>	
			   </div>
			   <div class="the-blog-item-text"><?php the_excerpt(); ?></div>
			   <div class="the-blog-item-readmore-btn"><a href="<?php the_permalink() ?>"><?php _e( 'Read More', 'lucy' ); ?></a></div>
			</div>
		<?php endwhile; ?>	
		<span class="prev"><?php next_posts_link(__('Previous Posts', 'lucy')) ?></span>
		<span class="next"><?php previous_posts_link(__('Next posts', 'lucy')) ?></span>						
	</section>
	<?php  get_sidebar(); ?>
</div>			