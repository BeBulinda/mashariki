<?php
/*
Template Name: No Sidebar
*/
?>
<?php get_header(); ?>
<div id="wrapper">
    <div id="site-header">
        <?php tally_content_part_header(); ?>
        <?php tally_content_part_subHeader(); ?>
    </div>
    
    <div id="site-main">
        <div id="site-main-inner" class="site_content_width">
            <div id="page-content">
                <div id="page-content-inner">
                    <?php tally_content_loop_page(); ?>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    
    <div id="site-footer">
        <div id="site-footer-inner">
            <?php tally_content_part_footerWidgets(); ?>
            <?php tally_content_part_footer(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>