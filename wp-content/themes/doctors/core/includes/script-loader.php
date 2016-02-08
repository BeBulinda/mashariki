<?php
/*----------------------------------------------------------------
 ## Load JavaScript and CSS
----------------------------------------------------------------*/

/*	Frontend Script
-------------------------------------------*/
function tally_script_loader(){
	wp_enqueue_style('font-awesome', TALLY_ASSETS_URL.'/css/font-awesome.min.css');
	
	if(tally_config('dev_mood') == true){
		$tally_css = admin_url('admin-ajax.php').'?action=tally_dynamic_script&post_id='.get_the_ID().'&type=css';
		$tally_js = admin_url('admin-ajax.php').'?action=tally_dynamic_script&post_id='.get_the_ID().'&type=js';
	}else{
		$tally_css = tally_file_directory_uri('assets/css/style.css');
		$tally_js = tally_file_directory_uri('assets/js/theme.js');
	}
	
	if(tally_option('tally_font_source_list') == 'google'){
		
		$http = (is_ssl()) ? 'https' : 'http';
		
		if(tally_option('tally_font_googleFont_heading') != ''){
			
			$font_handle = strstr(tally_option('tally_font_googleFont_heading'), ':', true);
			if($font_handle == ''){ $font_handle = tally_option('tally_font_googleFont_heading'); }
			
			wp_enqueue_style(
				'tally-'.strstr(tally_option('tally_font_googleFont_heading'), ':', true), 
				$http.'://fonts.googleapis.com/css?family='.tally_option('tally_font_googleFont_heading')
			);
		}
		if(tally_option('tally_font_googleFont_text') != ''){
			
			$font_handle = strstr(tally_option('tally_font_googleFont_text'), ':', true);
			if($font_handle == ''){ $font_handle = tally_option('tally_font_googleFont_text'); }
			
			wp_enqueue_style(
				'tally-'.strstr(tally_option('tally_font_googleFont_text'), ':', true), 
				$http.'://fonts.googleapis.com/css?family='.tally_option('tally_font_googleFont_text')
			);
		}
	}
	
	wp_enqueue_script('flexslider',tally_file_directory_uri('assets/js/jquery.flexslider-min.js') , array('jquery'), '', true);
	
	wp_enqueue_style('swipebox', tally_file_directory_uri('assets/css/swipebox.min.css'));
	wp_enqueue_script('swipebox',tally_file_directory_uri('assets/js/jquery.swipebox.min.js') , array('jquery'), '', true);
	
	wp_enqueue_style('owl.carousel', tally_file_directory_uri('assets/css/owl.carousel.css'));
	wp_enqueue_script('owl.carousel',tally_file_directory_uri('assets/js/owl.carousel.min.js') , array('jquery'), '', true);
	
	
	/*-----------*/
	wp_enqueue_style('tally-dynamic', $tally_css);
	wp_enqueue_style('tally-dynamic-custom', admin_url('admin-ajax.php').'?action=tally_dynamic_script&post_id='.get_the_ID().'&type=custom_css');
	wp_enqueue_script('tally-dynamic', $tally_js, array('jquery','jquery-masonry'), '', true);
}
add_action('wp_enqueue_scripts', 'tally_script_loader');



/*	Create Ajax
-------------------------------------------*/
function tally_dynamic_scripting() {
	$current_post_id = '';
	if(isset($_GET['post_id']) && !empty($_GET['post_id'])){ $current_post_id = $_GET['post_id']; }
	
	if($_GET['type'] == 'css'){ require( tally_file_directory('includes/dynamic.css.php') ); }
	if($_GET['type'] == 'custom_css'){ require( tally_file_directory('includes/dynamic-custom.css.php') ); }
	if($_GET['type'] == 'js'){ require( tally_file_directory('includes/dynamic.js.php') ); }
	
	exit;
}
add_action('wp_ajax_tally_dynamic_script', 'tally_dynamic_scripting');
add_action('wp_ajax_nopriv_tally_dynamic_script', 'tally_dynamic_scripting');



/*	Admin Script
-------------------------------------------*/
function tally_admin_script_loader(){
	
}
add_action('admin_enqueue_scripts', 'tally_admin_script_loader');


if(file_exists(tally_file_directory('includes/additional-script-loader.php'))){
	include(tally_file_directory('includes/additional-script-loader.php'));
}