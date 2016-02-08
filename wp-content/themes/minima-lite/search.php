<?php
//Single Post Display
//get template header
get_header();
?>
<?php do_action("minima_before_content"); ?>
<div id="ti-content-container" class="appear-edit">
    <?php do_action('minima_precontent_sidebar'); ?>
    <div id="ti-content" class="content-home content row">
        <?php do_action('minima_content_start'); ?>
        <div class="post-area search-area post-area-left <?php minima_content_class(); ?> ">
            <?php get_search_form(); ?>
        <?php get_template_part('loop', 'index'); ?>
        </div>
        <?php do_action('minima_content_end'); ?>
    </div>
    <?php do_action('minima_postcontent_sidebar'); ?>
</div>
<!-- Content End -->
<?php get_footer(); ?>