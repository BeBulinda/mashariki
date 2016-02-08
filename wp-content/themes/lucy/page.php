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
			   <h3><?php the_title(); ?></h3>
            </div>
        </div>
        <div class="blog-container wrap-grid">
            <section class="blog-content">
                <div class="the-blog-item post">
					<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
                    <div class="the-blog-item-top">
                    	<?php the_post_thumbnail($post->ID, 'featured'); ?>
                    </div>					
					<?php endif; ?>				
                    <div class="the-blog-item-text">
					   <?php the_content(); ?>
						<p><?php posts_nav_link(); ?></p>
					    <?php lucy_paginate_page(); ?> 
					    <?php comments_template(); ?>					
					</div>
                </div>
            </section>
            <?php  get_sidebar(); ?>
        </div>
<?php endwhile; ?>
<?php get_footer(); ?>