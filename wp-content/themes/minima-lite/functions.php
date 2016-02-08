<?php
/**
 * Custom built functions for better management of theme
 * @package Minima
 */
/**
 * Load required files
 * @packgae Minima
 */
require_once locate_template("inc/admin-elems.php");
require_once locate_template("inc/admin.php");
require_once locate_template("inc/layout-actions.php");
require_once locate_template("inc/widgets.php");
require_once locate_template("inc/font-render.php");
require_once locate_template("inc/custom-options.php");
 global  $content_width;
        if ( ! isset( $content_width ) ) $content_width = 960;

/**
 * Add css styles in editor
 */
add_filter('init', 'minima_editor_style');
if(!function_exists('minima_editor_style')){
function minima_editor_style($url) {
    add_editor_style('css/minima.css');
}
}

add_action("after_setup_theme", "minima_install");

/**
 * Creates options for different layout elements which can be later changed from admin panel
 */
if(!function_exists('minima_install')){
function minima_install() {
    load_theme_textdomain('minima', get_template_directory() . '/langs');
    /**
     * Thumbnail support
     */
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size( 672, 372, true );
    add_image_size( 'minima-full-width', 1038, 576, true );
    /**
     * Feed Links Support
     */
    add_theme_support('automatic-feed-links');
    /**
     * Custom elements /Uses inbuilt appearance editor for custom elements
     */
    add_theme_support('custom-background');
    add_theme_support('custom-header');
    add_theme_support('post-formats', array('chat', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'aside'));
    get_template_part('inc/install');
}
}
// Add specific CSS class by filter
add_filter('body_class','minima_class_names');
if(!function_exists('minima_class_names')){
function minima_class_names($classes) {
    // add 'class-name' to the $classes array
    $classes[] = 'hover-on minima';
    // return the $classes array
    return $classes;
}
}
/**
 * To fomat title
 * @param string $title
 * @param string $sep
 * @return string The
 */
if(!function_exists('minima_wp_title')){
function minima_wp_title( $title, $sep ) {
    global $paged, $page;

    if ( is_feed() ) {
        return $title;
    }

    $title .= get_bloginfo( 'name' );

    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) ) {
        $title = "$title $sep $site_description";
    }

    if ( $paged >= 2 || $page >= 2 ) {
        $title = "$title $sep " . sprintf( __( 'Page %s', 'minima' ), max( $paged, $page ) );
    }

    return $title;
}
}
add_filter( 'wp_title', 'minima_wp_title', 10, 2 );
/** Navigation
 * thanks to http://www.catswhocode.com/blog/how-to-breadcrumb-function-for-wordpress
 * @packgae twistItAdmin
 */
if(!function_exists('minima_the_breadcrumb')){
function minima_the_breadcrumb() {
    if (!is_home()) {
        echo '<a href="';
        echo esc_url(home_url('/'));
        echo '">Home';
        echo "</a>";
        if(is_attachment()){
            echo " &raquo; ";
            echo "Attachments";
            echo " &raquo; ";
            the_title();
        }
        elseif (is_category() || is_single()) {
            echo " &raquo; ";
            the_category(' &raquo; ');
            if (is_single()) {
                echo " &raquo; ";
                the_title();
            }
        } elseif (is_page()) {
            echo " &raquo; ";
            echo the_title();
        }
    } else {
        echo "&nbsp;";
    }
}
}
if(!function_exists('minima_post_thumbnail')){
function minima_post_thumbnail(){
    if(has_post_thumbnail()){?>
        <div class="min-post-thumbnail" xmlns="http://www.w3.org/1999/html">
    <?php
    the_post_thumbnail();
    ?>
    </div>
    <?php
    }
}
}
if(!function_exists('minima_post_nav')){
function minima_post_nav() {
    $previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
    $next     = get_adjacent_post( false, '', false );

    if ( ! $next && ! $previous ) {
        return;
    }

    ?>
    <nav class="navigation row post-navigation" role="navigation">
            <?php
            if ( is_attachment() ) :
             ?> <div class="span6"><?php previous_post_link( '%link', '<span class="icon-leftarrow"></span><span class="label">Published in</span> %title' );?></div><?php
            else :
            ?><div class="span6">&nbsp;<?php previous_post_link( '%link',  '<span class="nav-button"><span class="icon-leftarrow"></span><span class="label">Previous post</span></span><br/>%title' );?></div>
            <div class="span6">&nbsp;<?php next_post_link( '%link', '<span class="nav-button"><span class="label">Next post</span><span class="icon-rightarrow"></span></span><br/>%title' );?></div><?php
            endif;
            ?>
    </nav>
<?php
}
}
/**
 * Register sidebars in wordpress
 * @package twistItAdmin
 */
if(!function_exists('minima_widgets_init')){
function minima_widgets_init() {
// Register widgetized areas
    /* Horizontal Sidebars */
    register_sidebar(array(
        'name' => __('Left sidebar', 'minima'),
        'id' => 'sidebar-1',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="min-widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => __('Right sidebar', 'minima'),
        'id' => 'sidebar-2',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="min-widget-title">',
        'after_title' => '</h3>',
    ));
    /* Vertical Sidebars */
    register_sidebar(array(
        'name' => __('Footer', 'minima'),
        'id' => 'sidebar-3',
        'before_widget' => '<section id="%1$s" class="span3 widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="min-widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => __('After Content', 'minima'),
        'id' => 'sidebar-4',
        'before_widget' => '<section id="%1$s" class="span3 widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="min-widget-title">',
        'after_title' => '</h3>',
    ));
}
}
add_action('widgets_init', 'minima_widgets_init');


/**
 * Where the post has no post title, but must still display a link to the single-page post view.
 */
add_filter('the_title', 'minima_title');
if(!function_exists('minima_title')){
function minima_title($title) {
    if ($title == '') {
        return 'Untitled';
    } else {
        return $title;
    }
}
}
if(!function_exists('minima_post_format_icon')){
    function minima_post_format_icon(){
        switch(get_post_format()){
            case 'aside':
                ?><span class="icon-minus"></span><?php
                break;
            case 'audio':
                ?><span class="icon-sound-half"></span><?php
                break;
            case 'chat':
                ?><span class="icon-chat"></span> <?php
                break;
            case 'gallery':
                ?><span class="icon-slider"></span><?php
                break;
            case 'image':
                ?><span class="icon-images"></span> <?php
                break;
            case 'link':
                ?><span class="icon-links"></span><?php
                break;
            case 'quote':
                ?><span class="icon-quote"></span><?php
                break;
            case 'status':
                ?><span class="icon-pencil"></span><?php
                break;
            case 'video':
                ?><span class="icon-video"></span><?php
                break;
            default:
                ?><span class="icon-documentaion"></span><?php
                break;
        }
    }
}
add_action("wp_enqueue_scripts", "minima_enqueqe_resourses");
/**
 * Loading all resources dynamically
 * @package twistItAdmin
 */
if(!function_exists('minima_enqueqe_resourses')){
function minima_enqueqe_resourses() {
    wp_enqueue_script(array('swfobject','jquery'));
    wp_enqueue_script('jquery-dbltaptogo', get_template_directory_uri() . '/js/jquery.dbltaptogo.js');
    wp_enqueue_script('jquery-touchswipe', get_template_directory_uri() . '/js/jquery.touchSwipe.js');
    wp_enqueue_script('twist-it', get_template_directory_uri() . '/js/minima.js');
    $color=get_option("sp-" . md5('min-color-theme'), '');
    if($color && is_numeric($color)){
        wp_enqueue_style('minima-color', get_template_directory_uri() . '/css/themes/'.$color.'.css');
    }else{
		wp_enqueue_style('minima-color', get_template_directory_uri() . '/css/themes/1.css');
	}
    wp_enqueue_style('minima-base', get_template_directory_uri() . '/css/minima.css');
    wp_enqueue_style('minima-widgets', get_template_directory_uri() . '/css/minima-widgets.css');
    wp_enqueue_style('minima',get_stylesheet_uri());
    wp_enqueue_style('cabin-condensed-font','//fonts.googleapis.com/css?family=Cabin+Condensed:700');
}
}
add_action("wp_footer", "minima_footer_res");
if(!function_exists('minima_footer_res')){
function minima_footer_res() {
}
}
if(!function_exists('minima_page_num')){
function minima_page_num() {
    global $paged;
    if (!($paged))
        $paged = 1;
    if (!isset($pages)) {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if (!$pages) {
            $pages = 1;
        }
    }
    _e("Page",'minima');
    echo ' ' . (int)$paged . " ";
    _e('of','minima');
    echo " " . (int)$pages;
}
function nav_class_filter( $var ) {
    $var[]='nav';
return $var;
}
}
add_filter('nav_menu_css_class', 'nav_class_filter', 100, 1);
register_nav_menu('primary_navigation', 'Primary Menu');
register_nav_menu('secondary_navigation', 'Secondary Menu');


/**
 * add action hook for homepage slider
 */
add_action("minima_homepage_slider", "minima_homepage_slider");
if(!function_exists("minima_homepage_slider")){
function minima_homepage_slider() {
    if(get_option("sp-" . md5('min-homepage-slider'), '')!=''){
    ?>
    <div id="ti-slideshow-container">
        <?php
            echo do_shortcode(get_option("sp-" . md5('min-homepage-slider'), ''));
        ?>
    </div>
        <?php
        }
}
}

?>