<?php
header("Content-type: text/javascript; charset: UTF-8");

if(file_exists(tally_file_directory('assets/js/theme-base-js.php'))){
	include(tally_file_directory('assets/js/theme-base-js.php'));
}

tally_home_js_builder();
tally_content_resource_loader('js', 'part_header', $current_post_id);
tally_content_resource_loader('js', 'part_subHeader', $current_post_id);
tally_content_resource_loader('js', 'part_sidebar', $current_post_id);
tally_content_resource_loader('js', 'part_footerWidgets', $current_post_id);
tally_content_resource_loader('js', 'part_footer', $current_post_id);

tally_content_resource_loader('js', 'loop_404', $current_post_id);
tally_content_resource_loader('js', 'loop_attachment', $current_post_id);
tally_content_resource_loader('js', 'loop_author', $current_post_id);
tally_content_resource_loader('js', 'loop_category', $current_post_id);
tally_content_resource_loader('js', 'loop_comments', $current_post_id);
tally_content_resource_loader('js', 'loop_frontPage', $current_post_id);
tally_content_resource_loader('js', 'loop_home', $current_post_id);
tally_content_resource_loader('js', 'loop_page', $current_post_id);
tally_content_resource_loader('js', 'loop_post', $current_post_id);
tally_content_resource_loader('js', 'loop_search', $current_post_id);
tally_content_resource_loader('js', 'loop_tag', $current_post_id);
tally_content_resource_loader('js', 'loop_single', $current_post_id);
tally_content_resource_loader('js', 'loop_templateAbout', $current_post_id);
tally_content_resource_loader('js', 'loop_templateContact', $current_post_id);
tally_content_resource_loader('js', 'loop_templateSitemap', $current_post_id);

if(file_exists(tally_file_directory('assets/js/theme-customize-js.php'))){
	include(tally_file_directory('assets/js/theme-customize-js.php'));
}