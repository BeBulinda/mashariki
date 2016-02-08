<div class="tally_homeBlock_blogGrid thbbg_skin1 thbbg_<?php echo $tally_home_column_block['id']; ?> thbbg_column_<?php echo tally_option($block_id.'column'); ?>">
	<div class="thbbg_inner">
    	<?php
			$args['post_type']		= 'post';
			if(tally_option($block_id.'cat') != ''){ $args['cat'] = tally_option($block_id.'cat'); }
			if(tally_option($block_id.'limit') != ''){ $args['posts_per_page'] = tally_option($block_id.'limit'); }
			if(tally_option($block_id.'tag') != ''){ $args['tag_id'] = tally_option($block_id.'tag'); }
			$the_query = new WP_Query( $args );
		?>
        <?php if($the_query->have_posts()): ?>
        	<div class="grid js-masonry" data-masonry-options='{ "itemSelector": ".thbbg_item", "columWidth": 200 }'>
            	<?php while ( $the_query->have_posts() ): $the_query->the_post(); ?>
                	<div class="thbbg_item" style="width:">
                    	<div class="thbbg_item_inner">
							<?php
								$get_image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full' );
							?>
                            <img src="<?php echo tally_image( $get_image[0], 335, 204, true); ?>" alt="<?php echo tally_option($block_id.'name'); ?>" />
                            <div class="thbbg_item_content">
                                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                <p><?php echo tally_max_charlength(120); ?></p>
                                <a href="<?php the_permalink(); ?>" class="thbbg_item_more"><?php _e('Read More', 'doctors'); ?></a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
            <?php if(tally_option($block_id.'link') != ''): ?>
            	<a class="thbbg_moreBlog" href="<?php echo tally_option($block_id.'link'); ?>"><span><?php echo tally_option($block_id.'more'); ?></span></a>
			<?php endif; ?>
        <?php else: ?>
        	<?php _e('Sorry no post found.', 'doctors'); ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </div>
</div>