<?php
function tally_content_customizer_loader($wp_customize){
	$contents = array(
		'part_header',
		'part_subHeader',
		'part_sidebar',
		'part_footerWidgets',
		'part_footer',
		
		'loop_404',
		'loop_attachment',
		'loop_author',
		'loop_category',
		'loop_comments',
		'loop_frontPage',
		'loop_home',
		'loop_page',
		'loop_post',
		'loop_search',
		'loop_single',
		'loop_tag',
		'loop_templateAbout',
		'loop_templateContact',
		'loop_templateSitemap',
	);
	
	foreach($contents as $content){
		$file = tally_file_directory('contents/'.$content.'/'.tally_config($content).'/customizer.php');
		if(file_exists($file)){ include($file); }
	}
	
}
add_action( 'customize_register' , 'tally_content_customizer_loader' );