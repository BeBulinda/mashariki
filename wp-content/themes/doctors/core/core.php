<?php
if ( ! isset( $content_width ) ) $content_width = 900;

add_action( 'after_setup_theme', 'tally_after_setup_theme');
function tally_after_setup_theme(){
	define('TALLY_CONTENT_DRI', get_template_directory().'/core/contents');
	define('TALLY_INCLUDES_DRI', get_template_directory().'/core/includes');
	define('TALLY_ASSETS_URL', get_template_directory_uri().'/core/assets');
	define('TALLY_ASSETS_DRI', get_template_directory().'/core/assets');
	define('TALLY_CUSTOMIZE_DRI', get_template_directory().'/core/customizer');
	define('TALLY_CUSTOMIZE_URL', get_template_directory_uri().'/core/customizer');
	define('TALLY_HOME_DRI', get_template_directory().'/core/home');
	define('TALLY_IMAGE_RETINA_SUPPORT', false);
	
	$menus = array();
	$menus['main_menu'] =  'Main Menu';
	$menus['footer_menu'] =  'Footer Menu';
	$menus['alt_menu'] =  'Header Alt Menu';
	register_nav_menus($menus);	
	
	
	add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio', 'chat' ) );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	
	add_theme_support( 'woocommerce' );
	
	add_image_size('tally_blog', 770, 470, true);
	
	include('vandors/mr-image-resize.php');

	include('includes/custom-functions.php');
	include('includes/script-loader.php');
	include('includes/content-loader.php');
	include('includes/customize-loader.php');
	
	include('customizer/customizer.php');
	
	include('home/home-customizer-builder.php');
	include('home/home-content-builder.php');
	include('home/home-css-builder.php');
	include('home/home-js-builder.php');
	
	include('contents/woocommerce/woo-functions.php');
	
	function tally_add_editor_styles() {
		add_editor_style( 'editor-style.css' );
	}
	add_action( 'admin_init', 'tally_add_editor_styles' );
}

