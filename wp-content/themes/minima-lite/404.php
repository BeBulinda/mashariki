<?php
//Single Post Display
//get template header
get_header();
global $wp_query;
do_action("minima_before_content");
?>
    <div id="ti-content-container">
        <!-- Before Content -->
        <?php do_action('minima_precontent_sidebar'); ?>
        <div id="ti-content" class="content-home content row">
            <?php do_action('minima_content_start'); ?>
            <div class="post-area post-area-left <?php minima_content_class(); ?>">
                <h2 class="ti-404-title">
                    404 / <?php _e('Page not found', 'minima'); ?>
                </h2>

                <div class="ti-404-desc">
                    <?php _e('The page you are looking for cannot be found!', 'minima'); ?>
                    <?php _e('Perhaps searching will help or ', 'minima'); ?><a href="<?php echo esc_url(home_url('/')); ?>"><?php _e('Back to home', 'minima'); ?>&rarr;</a>
                </div>
                <div class="ti-404-search">
                    <?php echo get_search_form(); ?>
                </div>
            </div>
            <?php do_action('minima_content_end'); ?>
        </div>
        <!-- After Content -->
        <?php do_action('minima_postcontent_sidebar'); ?>
    </div>
    <!-- Content End -->
<?php get_footer(); ?>