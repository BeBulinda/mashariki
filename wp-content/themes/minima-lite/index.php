<?php
//Single Post Display
//get template header
get_header();
?>
<?php if (have_posts()) : 
    do_action('minima_before_content');
endif;
?>
<div id="ti-content-container" class="appear-edit">
    <!-- Before Content -->
        <?php do_action('minima_precontent_sidebar'); ?>
    <div id="ti-content" class="content-home content row">
            <?php do_action('minima_content_start'); ?>
        <div class="post-area post-area-left <?php minima_content_class(); ?>">
        <?php get_template_part('loop', 'index'); ?>
        </div>
<?php do_action('minima_content_end'); ?>
    </div>
    <!-- After Content -->
<?php do_action('minima_postcontent_sidebar'); ?>
</div>
<!-- Content End -->
<?php get_footer(); ?>