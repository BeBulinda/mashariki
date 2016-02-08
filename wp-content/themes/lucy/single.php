<?php
/**
 * The template for displaying all pages.
 *
 * @package Lucy
 */
 get_header(); ?>
 <?php while (have_posts()) : the_post(); ?>
        <div class="heading-name bg-source" >
            <div class="wrap-grid">
            	<h3><?php echo esc_html(get_theme_mod('pp_blog_page')); ?></h3>
            </div>
        </div>
        <div class="blog-container wrap-grid">
            <section class="blog-content">
                <div class="the-blog-item post">
					<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
                    <div class="the-blog-item-top">
                    	<?php the_post_thumbnail($post->ID, 'featured'); ?>
                        <span class="icon bg isblock comment-count-top"><b><?php comments_popup_link( 'No comments', '1 comment', '% comments', 'comments-link', 'Comments are off for this post'); ?></b></span>
                    </div>					
					<?php endif; ?>				
                    <h1 class="the-blog-item-title"><?php the_title(); ?></h1>
				   <div class="the-blog-item-general-info">
						 <div class="blog-item-info"><span class="icon date iblock block-left valignmiddle"></span><span class="gen-text-info"><?php the_time( get_option( 'date_format' ) ); ?></span></div>
						<div class="blog-item-info"><span class="icon user iblock block-left valignmiddle"></span><span class="gen-text-info"><?php _e( 'Posted by', 'lucy' ); ?> <?php the_author(); ?></span></div>
						<div class="blog-item-info"><span class="icon blog-item iblock block-left valignmiddle"></span><span class="gen-text-info"><?php the_category(', '); ?></span></div>	
				   </div>
                   <div class="the-blog-item-text">
                      <?php the_content(); ?>
					   <p class="the-blog-item-general-info"><?php the_tags(); ?></p>
					   <?php comments_template(); ?>					  
                   </div>
                </div>  
            </section>
           <?php  get_sidebar(); ?>
        </div>
<?php endwhile; ?>
<?php get_footer(); ?>