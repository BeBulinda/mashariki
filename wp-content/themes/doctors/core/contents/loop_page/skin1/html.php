<div id="page-<?php the_ID(); ?>" <?php post_class('tally_loop_page'); ?>>
	<?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
            <?php wp_link_pages(); ?>
        <?php endwhile; ?>
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.', 'doctors'); ?></p>
    <?php endif; ?>
    <div class="tls_comments">
				<?php comments_template(); ?>
            </div> 
</div>