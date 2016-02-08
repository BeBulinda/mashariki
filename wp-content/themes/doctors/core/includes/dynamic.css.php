<?php
header("Content-type: text/css; charset: UTF-8");

if(file_exists(tally_file_directory('assets/css/theme-base-css.php'))){
	include(tally_file_directory('assets/css/theme-base-css.php'));
}
tally_home_css_builder('css');

tally_content_resource_loader('css', 'part_header', $current_post_id);
tally_content_resource_loader('css', 'part_subHeader', $current_post_id);
tally_content_resource_loader('css', 'part_sidebar', $current_post_id);
tally_content_resource_loader('css', 'part_footerWidgets', $current_post_id);
tally_content_resource_loader('css', 'part_footer', $current_post_id);

tally_content_resource_loader('css', 'loop_404', $current_post_id);
tally_content_resource_loader('css', 'loop_attachment', $current_post_id);
tally_content_resource_loader('css', 'loop_author', $current_post_id);
tally_content_resource_loader('css', 'loop_category', $current_post_id);
tally_content_resource_loader('css', 'loop_comments', $current_post_id);
tally_content_resource_loader('css', 'loop_frontPage', $current_post_id);
tally_content_resource_loader('css', 'loop_home', $current_post_id);
tally_content_resource_loader('css', 'loop_page', $current_post_id);
tally_content_resource_loader('css', 'loop_post', $current_post_id);
tally_content_resource_loader('css', 'loop_search', $current_post_id);
tally_content_resource_loader('css', 'loop_single', $current_post_id);
tally_content_resource_loader('css', 'loop_tag', $current_post_id);
tally_content_resource_loader('css', 'loop_templateAbout', $current_post_id);
tally_content_resource_loader('css', 'loop_templateContact', $current_post_id);
tally_content_resource_loader('css', 'loop_templateSitemap', $current_post_id);

if(file_exists(tally_file_directory('assets/css/theme-customize-css.php'))){
	include(tally_file_directory('assets/css/theme-customize-css.php'));
}