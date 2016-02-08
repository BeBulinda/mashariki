<div class="tally_loop_home">
	<?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <?php include(TALLY_CONTENT_DRI.'/loop_post/'.tally_config('loop_post').'/html.php'); ?>
        <?php endwhile; ?>
        <?php echo tally_paginate2() ?>
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.', 'doctors'); ?></p>
    <?php endif; ?>
</div>