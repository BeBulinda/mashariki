<?php
header("Content-type: text/css; charset: UTF-8");

?>
/*	Main
-----------------------------------------------------------------------*/
#site-main{ 
	color:<?php echo tally_option('tally_color_main_text'); ?>;
    border-color: <?php echo tally_option('tally_color_main_border'); ?>;
    background-color:<?php echo tally_option('tally_color_main_bg'); ?>;
    background-image:url(<?php echo tally_option('tally_color_main_bgImage'); ?>);
	background-repeat:<?php echo tally_option('tally_color_main_bgImage_repeat'); ?>;
	background-position:<?php echo tally_option('tally_color_main_bgImage_position'); ?>;
    background-attachmen:<?php echo tally_option('tally_color_main_bgImage_attachment'); ?>;
    background-size:<?php echo tally_option('tally_color_main_bgImage_size'); ?>;
}
#site-main *{ border-color: <?php echo tally_option('tally_color_main_borderAlt'); ?> !important; }
#site-main h1, #site-main h2, #site-main h3, #site-main h4, #site-main h5, #site-main h6{ color:<?php echo tally_option('tally_color_main_heading'); ?>; }
#site-main a{ color:<?php echo tally_option('tally_color_accent_primary'); ?>; }
#site-main a:hover{	color:<?php echo tally_option('tally_color_accent_info'); ?>; }
#site-main input, #site-main select, #site-main textarea{ color:<?php echo tally_option('tally_color_main_textMeta'); ?>; }
#site-main  input[type="submit"], #site-main  button[type="submit"], #site-main  input[type="button"]{
	background-color:<?php echo tally_option('tally_color_accent_primary'); ?>;
    color:#fff; 
}
#site-main input[type="submit"]:hover, #site-main button[type="submit"]:hover, #site-main input[type="button"]:hover{
	background-color:<?php echo tally_option('tally_color_accent_info'); ?>;
    color:#fff;
}
#site-main .widget_meta ul li a,
#site-main .widget_pages ul li a,
#site-main .widget_nav_menu ul li a,
#site-main .widget_recent_entries ul li a,
#site-main .widget_archive ul li a,
#site-main .widget_categories ul li a,
#site-main .widget_recent_comments ul li a{ color:<?php echo tally_option('tally_color_main_text'); ?>; }
#site-main .widget_meta ul li a:hover,
#site-main .widget_pages ul li a:hover,
#site-main .widget_nav_menu ul li a:hover,
#site-main .widget_recent_entries ul li a:hover,
#site-main .widget_archive ul li a:hover,
#site-main .widget_categories ul li a:hover,
#site-main .widget_recent_comments ul li a:hover{ color:<?php echo tally_option('tally_color_accent_primary'); ?>; }



/*	Footer Widgets
-----------------------------------------------------------------------*/
.tally-footerWidgets{
	color:<?php echo tally_option('tally_color_fwidget_text'); ?>;
    border-color: <?php echo tally_option('tally_color_fwidget_border'); ?>;
    background-color:<?php echo tally_option('tally_color_fwidget_bg'); ?>;
    background-image:url(<?php echo tally_option('tally_color_fwidget_bgImage'); ?>);
	background-repeat:<?php echo tally_option('tally_color_fwidget_bgImage_repeat'); ?>;
	background-position:<?php echo tally_option('tally_color_fwidget_bgImage_position'); ?>;
    background-attachmen:<?php echo tally_option('tally_color_fwidget_bgImage_attachment'); ?>;
    background-size:<?php echo tally_option('tally_color_fwidget_bgImage_size'); ?>;
}
.tally-footerWidgets *{
	border-color: <?php echo tally_option('tally_color_fwidget_borderAlt'); ?> !important;
}
.tally-footerWidgets h1, .tally-footerWidgets h2, .tally-footerWidgets h3, .tally-footerWidgets h4, .tally-footerWidgets h5, .tally-footerWidgets h6{
	color:<?php echo tally_option('tally_color_fwidget_heading'); ?>;
}
.tally-footerWidgets a{
	color:<?php echo tally_option('tally_color_fwidget_link'); ?>;
}
.tally-footerWidgets a:hover{
	color:<?php echo tally_option('tally_color_fwidget_linkHover'); ?>;
}



/*	Footer
-----------------------------------------------------------------------*/
.tally_footer{
	color:<?php echo tally_option('tally_color_footer_text'); ?>;
    border-color: <?php echo tally_option('tally_color_footer_border'); ?>;
    background-color:<?php echo tally_option('tally_color_footer_bg'); ?>;
    background-image:url(<?php echo tally_option('tally_color_footer_bgImage'); ?>);
	background-repeat:<?php echo tally_option('tally_color_footer_bgImage_repeat'); ?>;
	background-position:<?php echo tally_option('tally_color_footer_bgImage_position'); ?>;
    background-attachmen:<?php echo tally_option('tally_color_footer_bgImage_attachment'); ?>;
    background-size:<?php echo tally_option('tally_color_footer_bgImage_size'); ?>;
}
.tally_footer *{
	border-color: <?php echo tally_option('tally_color_footer_borderAlt'); ?> !important;
}
.tally_footer a{
	color:<?php echo tally_option('tally_color_footer_link'); ?>;
}
.tally_footer a:hover{
	color:<?php echo tally_option('tally_color_footer_linkHover'); ?>;
}
<?php
tally_content_resource_loader('c-css', 'part_header', $current_post_id);
tally_content_resource_loader('c-css', 'part_subHeader', $current_post_id);
tally_content_resource_loader('c-css', 'part_sidebar', $current_post_id);
tally_content_resource_loader('c-css', 'part_footerWidgets', $current_post_id);
tally_content_resource_loader('c-css', 'part_footer', $current_post_id);

tally_content_resource_loader('c-css', 'loop_404', $current_post_id);
tally_content_resource_loader('c-css', 'loop_attachment', $current_post_id);
tally_content_resource_loader('c-css', 'loop_author', $current_post_id);
tally_content_resource_loader('c-css', 'loop_category', $current_post_id);
tally_content_resource_loader('c-css', 'loop_comments', $current_post_id);
tally_content_resource_loader('c-css', 'loop_frontPage', $current_post_id);
tally_content_resource_loader('c-css', 'loop_home', $current_post_id);
tally_content_resource_loader('c-css', 'loop_page', $current_post_id);
tally_content_resource_loader('c-css', 'loop_post', $current_post_id);
tally_content_resource_loader('c-css', 'loop_search', $current_post_id);
tally_content_resource_loader('c-css', 'loop_tag', $current_post_id);
tally_content_resource_loader('c-css', 'loop_single', $current_post_id);
tally_content_resource_loader('c-css', 'loop_templateAbout', $current_post_id);
tally_content_resource_loader('c-css', 'loop_templateContact', $current_post_id);
tally_content_resource_loader('c-css', 'loop_templateSitemap', $current_post_id);

tally_home_css_builder('c-css');