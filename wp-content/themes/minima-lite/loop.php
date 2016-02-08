<?php
/* loop.php
 * common loop
 *
 */
?>
<?php if (!have_posts()) { ?>
    <p><?php _e('Sorry, no results were found.', 'minima'); ?></p>
    <?php
    if (!is_search()) {
        get_search_form();
    }
    ?>
<?php } ?>
<?php /* Start loop */ ?>

<?php
while (have_posts()) : the_post();
    if (has_post_thumbnail()) {
        $tl = true;
    } else {
        $tl = false;
    }
    ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="post-info <?php echo ($tl)?'post-thumb':''; ?>">

            <div class="breadcrum-menu">
                <span class="format-icon">
                    <?php if ($tl) {
                        ?><?php the_post_thumbnail(array(250,250),array('class'=>"post-thumb")); ?>
                    <?php }elseif (get_post_type() == "post") { ?>
                        <?php minima_post_format_icon(); ?>
                    <?php } ?>
               </span>
            <div class="post-meta"><span class="segment categories"> <b>Categories</b><br/> <?php the_category(', '); ?> <br/>  </span><span class="segment"><span class="icon-clock"></span><?php the_time('M jS, Y'); ?>&nbsp;</span><span class="segment"><span class="icon-chat"></span><?php comments_number('no comments', 'one comment', '% comments'); ?></span></div>
             
            </div>
            <?php
            $tags = get_the_tags();
            if ($tags) {
                ?><p class="post-tags"><?php the_tags(); ?></p><?php } ?>
        </div>
        <header class="<?php echo $tl?'post-title-with-thumb':''; ?>">
            <div class="ti-title">
                <h2><a href="<?php the_permalink(); ?>" class="list-title"><?php _e(get_the_title()); ?></a></h2>
            </div>
        </header>
        <div class="entry-content loop-content <?php echo $tl?'post-content-with-thumb':''; ?>">
            <div class="post-content">
                    <?php get_template_part('content',  get_post_format()); ?>
            </div>
        </div>
<!--        <footer class="loop-footer">-->
<!--            --><?php
//            $tags = get_the_tags();
//            if ($tags) {
//                ?><!--<p class="post-tags">--><?php //the_tags(); ?><!--</p>--><?php //} ?>
<!--            <div class="breadcrum-menu">-->
<!--                --><?php //if (get_post_type() == "post") { ?>
<!--                    <div class="post-meta"><span class="segment"><span class="icon-clock"></span>--><?php //the_time('l, F jS, Y'); ?><!--&nbsp;</span><span class="segment"> | --><?php //the_category(', '); ?><!-- |  </span><span class="segment"><span class="icon-chat"></span>--><?php //comments_number('no comments', 'one comment', '% comments'); ?><!--</span></div>-->
<!--                --><?php //} ?>
<!--            </div>-->
<!--        </footer>-->
        <span class="clear"></span>
    </article>
<?php endwhile; /* End loop */ ?>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php
global $wp_query;

$big = 999999999; // need an unlikely integer

$pages= paginate_links( array(
    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
    'total' => $wp_query->max_num_pages,
    'prev_text' => __( '&larr; Previous', 'minima' ),
    'next_text' => __( 'Next &rarr;', 'minima' ),
) );
if($pages){
    ?>
    <div class="pagination"><?php echo $pages; ?></div>
<?php
}
?>