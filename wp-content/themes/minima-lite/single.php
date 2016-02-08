<?php
//Single Post Display
//get template header
get_header();
?>
<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post();
    do_action('minima_before_content');
endwhile; ?>
    <div id="ti-content-container" class="appear-edit">
        <?php do_action('minima_precontent_sidebar'); ?>
        <div id="ti-content" class="content-home content row">
            <?php do_action('minima_content_start'); ?>
            <div class="post-area post-area-left <?php minima_content_class(); ?> " id="post-single">
                <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php (int)the_ID(); ?>" <?php post_class(); ?>>
                    <div class="entry-content">
                        <?php minima_post_thumbnail();?>
                        <?php get_template_part('content',  get_post_format()); ?>
                        <span class="clear"></span>
                        <?php wp_link_pages(array('before' => '<div class="page-link">' . __('Pages:', 'twist_it'), 'after' => '</div>')); ?>
                        <?php minima_post_nav(); ?>
                        <?php if (get_the_author_meta('description')) : // If a user has filled out their description, show a bio on their entries  ?>
                            <div id="entry-author-info" class="row">
                                <div id="author-description" class="span12">
                                    <div id="author-avatar">
                                        <?php echo get_avatar(get_the_author_meta('user_email'), 60); ?>
                                    </div><!-- #author-avatar -->
                                    <h4><?php printf(__('About %s', 'twist_it'), get_the_author()); ?></h4>
                                    <?php the_author_meta('description'); ?>
                                    <div id="author-link">
                                        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author">
                                            <?php printf(__('View all posts by %s <span class="meta-nav">&rarr;</span>', 'twist_it'), get_the_author()); ?>
                                        </a>
                                    </div><!-- #author-link	-->
                                </div><!-- #author-description -->


                            </div><!-- #entry-author-info -->
                        <?php endif; ?>
                    </div>
                    <footer>
                        <?php
                        $tags = get_the_tags();
                        if ($tags) {
                            ?><p class="post-tags"><?php the_tags(); ?></p><?php } ?>
                    </footer>
                    <?php comments_template(); ?>
                    <span class="clear"></span>
                </article>
            <?php endwhile; /* End loop */ ?>
        </div>
        <?php do_action('minima_content_end'); ?>
    </div>
    <?php do_action('minima_postcontent_sidebar'); ?>
</div>
<!-- Content End -->
<?php get_footer(); ?>