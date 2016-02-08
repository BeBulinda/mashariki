<div class="tally_loop_single">
	<?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
        	
            <?php 
				if( (get_post_format() == 'video') && ( tally_get_first_embed_media(get_the_ID()) != false)){
					echo '<div style="margin-bottom:30px;">';
						echo tally_get_first_embed_media(get_the_ID());
					echo '</div>';
				}elseif( (get_post_format() == 'audio') && ( tally_get_first_embed_media(get_the_ID(), 'audio') != false)){
					echo '<div style="margin-bottom:30px;">';
						echo tally_get_first_embed_media(get_the_ID(), 'audio');
					echo '</div>';
				}else{
					echo '<div style="margin-bottom:30px;">';
						the_post_thumbnail('tally_blog');
					echo '</div>';
				}
			?>
        
        	<p class="tls_meta">
           		<?php _e('By', 'doctors') ?> <?php the_author_posts_link(); ?> &bull; <?php the_date(); ?> &bull; <?php comments_popup_link(__('No Comments', 'doctors'), __('1 Comment', 'doctors'), '% '.__('Comments', 'doctors')); ?>
            </p>
            
            <div class="tls_content">
				<?php the_content(); ?>
                <?php wp_link_pages(); ?>
            </div>
            
            <div class="tls_taxonomy">
               	<strong><?php _e('Categories:', 'doctors'); ?></strong><?php the_category(' '); ?>
                <div class="clear" style="height:5px;"></div>
                <?php the_tags('<strong>Tags:</strong>',' '); ?>
            </div>
            
            <div class="tls_authorBio">
                <div class="tls_authorBio_avatar"><?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'tally_author_bio_avatar_size', 160 ) ); ?></div>
                <div class="tls_authorBio_des">
                    <h2 class="tls_authorBio_title"><?php echo get_the_author(); ?></h2>
                    <p class="tls_authorBio_text"><?php the_author_meta( 'description' ); ?></p>
                </div>
                <div class="clear"></div>
            </div>
            
			<div class="tls_comments">
				<?php comments_template(); ?>
            </div>      
        <?php endwhile; ?>
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.', 'doctors'); ?></p>
    <?php endif; ?>
</div>