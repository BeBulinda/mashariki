<?php
/*
Template Name: Home Page
*/
?>
<?php get_header(); ?>
<div id="wrapper">
        <div id="site-header">
            <?php tally_content_part_header(); ?>
        </div>
        
        <div id="site-main" style="padding:0;">
            <div id="site-main-inner">
                <?php tally_home_content_builder(); ?>
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