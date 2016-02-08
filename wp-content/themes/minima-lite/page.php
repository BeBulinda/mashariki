<?php
//Single Post Display
//get template header
get_header();
?>
<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); 
        do_action("minima_before_content");
    endwhile; /* End loop */ ?>
    <div id="ti-content-container" class="appear-edit">
        <?php do_action('minima_precontent_sidebar'); ?>
        <div id="ti-content" class="content-home content row">
            <?php do_action('minima_content_start'); ?>
            <div class="post-area post-area-left <?php minima_content_class(); ?> ">
            <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php (int)the_ID(); ?>" <?php post_class(); ?>>
                    <div class="entry-content">
                        <?php minima_post_thumbnail();?>
                        <?php if (is_archive() || is_search()) { ?>
                            <?php the_excerpt(); ?>
                        <?php } else { ?>
                            <?php the_content(); ?>
                        <?php } ?>
                    </div>
                    <footer>

                    </footer>
                    <span class="clear"></span>
                </article>
                    <?php if(comments_open()){comments_template();}?>

                <?php endwhile; /* End loop */ ?>
        </div>
        <?php do_action('minima_content_end'); ?>
    </div>
    <?php do_action('minima_postcontent_sidebar'); ?>
</div>
<!-- Content End -->
<?php get_footer(); ?>