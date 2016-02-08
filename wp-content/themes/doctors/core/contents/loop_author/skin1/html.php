<div class="tally_loop_author">
	<div class="tla_info">
		<div class="tla_author_avatar"><?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'tally_author_bio_avatar_size', 160 ) ); ?></div>
		<div class="tla_author_des">
			<h2 class="tla_author_title"><?php echo get_the_author(); ?></h2>
			<p class="tla_author_text"><?php the_author_meta( 'description' ); ?></p>
		</div>
        <div class="clear"></div>
	</div>
    <div class="clear"></div>
	<div class="tla_posts">
        <?php if ( have_posts() ) : ?>
        	<h2 class="tla_posts_heading"><?php printf( __( 'Posts Created By: %s', 'doctors' ), get_the_author() ); ?></h2>
			<?php while ( have_posts() ) : the_post(); ?>
                <div class="tla_post_item">
                    <div class="tla_post_image"><?php the_post_thumbnail('thumbnail'); ?></div>
                    <div class="tla_post_content">
                        <h4 class="tla_post_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        <p class="tla_post_meta">By <?php the_author_posts_link(); ?> | <?php the_date(); ?> | <?php the_category(', '); ?> | <?php comments_popup_link(__('No Comments', 'doctors'), __('1 Comment', 'doctors'), '% '.__('Comments', 'doctors')); ?></p>
                        <div class="tla_post_text"><?php the_excerpt(); ?></div>
                        <a class="tla_post_more" href="<?php the_permalink(); ?>"><?php _e( 'Read More', 'doctors'); ?></a>
                    </div>
                    <div class="clear"></div>
                </div>
            <?php endwhile; ?>
        	<?php echo tally_paginate2() ?>
        <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.', 'doctors'); ?></p>
        <?php endif; ?>
	</div>
</div>
