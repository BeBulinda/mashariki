<?php
/**
 * Lucy functions and definitions
 *
 * @package Lucy
 */
 
/*
 * Loads the Options Panel
 *
 */

/*----------------------------*/
/*	Adding customizer with kirki 
/*----------------------------*/ 
include_once( dirname( __FILE__ ) . '/lib/customizer.php' );
include_once( dirname( __FILE__ ) . '/lib/kirki/kirki.php' );

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @see http://developer.wordpress.com/themes/content-width/Enqueue
 */
 
if ( ! isset( $content_width ) ) {

    global $content_width;

	$content_width = 980; /* pixels */
}

/**
 * Theme support and thumbnail sizes
*/
 
if( ! function_exists( 'lucy_theme_setup' ) ) {

	function lucy_theme_setup() {
	
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on BuildPress, use a find and replace
		 */
		 
		load_theme_textdomain( 'lucy', get_template_directory() . '/lang' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Custom Backgrounds
		add_theme_support( 'custom-background', array(
			'default-color' => 'ffffff',
		) );

		/**
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		 */
		 
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 150, 150, true );
		add_image_size( 'lucy-news-box', 274, 207, true );
		add_image_size( 'lucy-portfolio-box', 230, 230, true );

		// Menus
		add_theme_support( 'menus' );
		register_nav_menu( 'main-menu', _x( 'Main Menu', 'backend', 'lucy' ) );

		// Add theme support for Semantic Markup
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption'
		) );

		// add excerpt support for pages
		add_post_type_support( 'page', 'excerpt' );

		// Add CSS for the TinyMCE editor
		add_editor_style();
	}
	add_action( 'after_setup_theme', 'lucy_theme_setup' );
}


/**
 * Enqueue CSS stylesheets
 */
 
if( ! function_exists( 'lucy_enqueue_styles' ) ) {
	function lucy_enqueue_styles() {
	
	
	    // main style
	
	    wp_enqueue_style( 'amaryllo-style', get_stylesheet_uri() );
	
		// reset
		wp_enqueue_style( 'lucy-reset', get_template_directory_uri() . '/assets/css/reset.css', array(), '1.0' );
		
		// responsive
		wp_enqueue_style( 'lucy-responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0' );
		
		// style
		wp_enqueue_style( 'lucy-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0' ); 		

	}
	add_action( 'wp_enqueue_scripts', 'lucy_enqueue_styles' );
}

/**
 * Enqueue JS scripts
 */
 
if( ! function_exists( 'lucy_enqueue_scripts' ) ) {
	function lucy_enqueue_scripts() {

		// main for script js
		wp_enqueue_script( 'lucy-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null );			

		// for nested comments
		if ( is_singular() && comments_open() ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
	add_action( 'wp_enqueue_scripts', 'lucy_enqueue_scripts' );
}

/**
 * Create a nicely formatted and more specific title element text for output
 * in head of document, based on current view.
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string The filtered title.
 */

if ( ! function_exists( 'lucy_wp_title' ) ) {
	function lucy_wp_title( $title, $sep ) {
		global $paged, $page;

		if ( is_feed() ) {
			return $title;
		}

		// Add the site name.
		$title .= get_bloginfo( 'name' );

		// Add the site description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) ) {
			$title = "$title $sep $site_description";
		}

		// Add a page number if necessary.
		if ( $paged >= 2 || $page >= 2 ) {
			$title = "$title $sep " . sprintf( __( 'Page %s', 'lucy'), max( $paged, $page ) );
		}

		return $title;
	}
	add_filter( 'wp_title', 'lucy_wp_title', 10, 2 );
}

/**
 * Register sidebars for Lucy
 *
 * @package Lucy
 */

function lucy_sidebars() {

	// Blog Sidebar
	
	register_sidebar(array(
		'name' => __( 'Blog Sidebar', "lucy"),
		'id' => 'blog-sidebar',
		'description' => __( 'Sidebar on the blog layout.', "lucy"),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	));	
	
	// Footer Sidebar
	
	register_sidebar(array(
		'name' => __( 'Footer Widget Area', "lucy"),
		'id' => 'footer-widget-area',
		'description' => __( 'The footer widget area', "lucy"),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	));	
}

add_action( 'widgets_init', 'lucy_sidebars' );

// Create List Post

if ( ! function_exists( 'lucy_get_list_posts' ) ) :
	function lucy_get_list_posts() {
	
		global $wp_query;
		
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		
		$args = array(
			'post_type' => 'post',
			'orderby' => 'date',
			'order' => 'DESC',
			'posts_per_page' => 3
		);
		
		$wp_query->query( $args );
		
		return new WP_Query( $args );
	}
endif; 


// Create Function Paginate

if ( ! function_exists( 'lucy_paginate_page' ) ) :
	function lucy_paginate_page() {
	
		wp_link_pages( array( 'before' => '<div class="pagination">', 'after' => '</div><div class="clear"></div>', 'link_before' => '<span class="current_pag">','link_after' => '</span>' ) );
		
	}
endif; 

// Create Function Credits

if ( ! function_exists( 'lucy_credits' ) ) :
	function lucy_credits() {
	
		$text = 'Theme created by <a href="'.esc_url('http://www.themestune.com/').'">Themes Tune</a>. Powered by <a href="'.esc_url('http://wordpress.org/').'">WordPress.org</a>';
		
		echo apply_filters( 'lucy_credits_text', $text) ;
		
	}
endif; 

add_action( 'lucy_display_credits', 'lucy_credits' );
?>