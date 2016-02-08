<?php

$child_getver_file_f = get_stylesheet_directory().'/app/includes/getver-f.php';
$theme_app_getver_file_f = get_template_directory().'/app/includes/getver-f.php';
$theme_getver_file_f = get_template_directory().'/includes/getver-f.php';

$child_getver_file_a = get_stylesheet_directory().'/app/includes/getver-a.php';
$theme_app_getver_file_a = get_template_directory().'/app/includes/getver-a.php';
$theme_getver_file_a = get_template_directory().'/includes/getver-a.php';

$child_getver_file_n = get_stylesheet_directory().'/app/includes/getver-n.php';
$theme_app_getver_file_n = get_template_directory().'/app/includes/getver-n.php';
$theme_getver_file_n = get_template_directory().'/includes/getver-n.php';

$tally_getver_type = 'none';
$tally_getver_data = array();

if(file_exists($child_getver_file_f)){
	include($child_getver_file_f);
	$tally_getver_type = 'full';
}elseif(file_exists($theme_app_getver_file_f)){
	include($theme_app_getver_file_f);
	$tally_getver_type = 'full';
}elseif(file_exists($theme_getver_file_f)){
	include($theme_getver_file_f);
	$tally_getver_type = 'full';
}elseif(file_exists($child_getver_file_a)){
	include($child_getver_file_a);
	$tally_getver_type = 'away';
}elseif(file_exists($theme_app_getver_file_a)){
	include($theme_app_getver_file_a);
	$tally_getver_type = 'away';
}elseif(file_exists($theme_getver_file_a)){
	include($theme_getver_file_a);
	$tally_getver_type = 'away';
}elseif(file_exists($child_getver_file_n)){
	include($child_getver_file_n);
	$tally_getver_type = 'none';
}elseif(file_exists($theme_app_getver_file_n)){
	include($theme_app_getver_file_n);
	$tally_getver_type = 'none';
}elseif(file_exists($theme_getver_file_n)){
	include($theme_getver_file_n);
	$tally_getver_type = 'none';
}

//$tally_getver_type = 'away';

$tally_getver_default = array();
$tally_getver_default['part_header']			= 'skin2';
$tally_getver_default['part_subHeader']			= 'skin1';
$tally_getver_default['part_sidebar']			= 'skin1';
$tally_getver_default['part_footerWidgets']		= 'skin1';
$tally_getver_default['part_footer']			= 'skin2';
	
$tally_getver_default['loop_404']				= 'skin1';
$tally_getver_default['loop_attachment']		= 'skin1';
$tally_getver_default['loop_author']			= 'skin1';
$tally_getver_default['loop_category']			= 'skin1';
$tally_getver_default['loop_comments']			= 'skin1';
$tally_getver_default['loop_frontPage']			= 'skin1';
$tally_getver_default['loop_home']				= 'skin1';
$tally_getver_default['loop_page']	 			= 'skin1';
$tally_getver_default['loop_post']				= 'skin1';
$tally_getver_default['loop_search']	 		= 'skin1';
$tally_getver_default['loop_single']	 		= 'skin1';
$tally_getver_default['loop_tag']	 			= 'skin1';
$tally_getver_default['loop_templateAbout']		= 'skin1';
$tally_getver_default['loop_templateContact']	= 'skin1';
$tally_getver_default['loop_templateSitemap']	= 'skin1';

$tally_getver_default['theme_url']				= 'http://tallythemes.com/';
$tally_getver_default['doc_url']				= 'http://tallythemes.com/';
$tally_getver_default['theme_name']				= 'TallyThemes';
$tally_getver_default['type']					= $tally_getver_type;

$tally_getver = array_merge($tally_getver_default, $tally_getver_data);