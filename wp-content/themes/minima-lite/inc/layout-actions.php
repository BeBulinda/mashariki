<?php
/**
 * Layout actions
 * @package minima
 */
/* Sidebars */

/**
 * Twistit sidebar init
 *
 * Check all sidebars and set grid system to be used
 * @package minima
 * @return void
 */
if (!function_exists('minima_sidebar_init')) {

    function minima_sidebar_init() {
        global $sidebars;
        $sidebars = array(
            'sb_left' => get_option('sp-' . md5('min-l-sb'), ''),
            'sb_right' => get_option('sp-' . md5('min-r-sb'), ''),
            'sb_postcontent' => get_option('sp-' . md5('min-ac-sb'), ''),
            'sb_subfooter' => get_option('sp-' . md5('min-sf-sb'), '')
        );
        $layout = array();
        if ($sidebars['sb_right'] && $sidebars['sb_left']) {
            $layout['content_class'] = 'span6';
        } elseif ($sidebars['sb_left']) {
            $layout['content_class'] = 'span9';
        } elseif ($sidebars['sb_right']) {
            $layout['content_class'] = 'span9';
        } else {
            $layout['content_class'] = 'span12';
        }
        define('TI_LAYOUT', serialize($layout));
    }

}
add_action('init', 'minima_sidebar_init');
/**
 * Content Class
 *
 * Returns grid system class for content based on sidebars
 * @package minima
 * @return void
 */
if (!function_exists('minima_content_class')) {

    function minima_content_class() {
        if (defined('TI_LAYOUT')) {
            $lo = unserialize(TI_LAYOUT);
            echo $lo['content_class'];
        }
    }

}
add_action('minima_content_start', 'minima_sidebars_before_content');
/**
 * Right Sidebar
 *
 * Checks and renders right sidebar
 * @package minima
 * @return void
 */
if (!function_exists('minima_sidebars_before_content')) {

    function minima_sidebars_before_content() {
        global $sidebars;
        if ($sidebars['sb_left']) {
            get_sidebar('left');
        }
    }

}
add_action('minima_content_end', 'minima_sidebars_after_content');
/**
 * Left Sidebar
 *
 * Checks and renders left sidebar
 * @package minima
 * @return void
 */
if (!function_exists('minima_sidebars_after_content')) {

    function minima_sidebars_after_content() {
        global $sidebars;
        if ($sidebars['sb_right']) {
            get_sidebar();
        }
    }

}
add_action('minima_subfooter_sidebar', 'minima_sidebars_sub_footer');
/**
 * Subfooter Sidebar
 *
 * Checks and renders subfooter sidebar
 * @package minima
 * @return void
 */
if (!function_exists('minima_sidebars_sub_footer')) {

    function minima_sidebars_sub_footer() {
        global $sidebars;
        if ($sidebars['sb_subfooter']) {
            get_sidebar('subfooter');
        }
    }

}
add_action('minima_postcontent_sidebar', 'minima_sidebars_postcontent_sidebar');
/**
 * After-content sidebar
 *
 * Checks and renders post-content sidebar
 * @package minima
 * @return void
 */
if (!function_exists('minima_sidebars_postcontent_sidebar')) {

    function minima_sidebars_postcontent_sidebar() {
        global $sidebars;
        if ($sidebars['sb_postcontent']) {
            get_sidebar('postcontent');
        }
    }

}
/** Before content
 *  This function checks and loads sliders, carousels and headers as per configurations
 * */
if (!function_exists('minima_before_content')) {

    function minima_before_content() {
        //check if current page is home and home slider is enabled
        if (is_home() && get_option('sp-' . md5('min-homepage-carousel'), '')) {
            //show homepage carousel and dont show the title bar
            minima_display_carousel();
            minima_featured_boxes();
        } elseif (is_home() && !get_option('sp-' . md5('min-homepage-carousel'), '')) {
            //check if the page has image attaches if yes show a well formatted image
            //else show a regular title
            minima_featured_boxes();
        } else {
            //display title or slider based on configuration
            if (is_page()) {
                minima_display_carousel();
            }
        }
        if (is_page() && get_post_meta(get_the_ID(), '_minima_display_featured_boxes', true)) {
            minima_featured_boxes();
        }
        if (is_single()) {
            minima_display_carousel();
        }
        minima_page_title();
    }

}
add_action('minima_before_content', 'minima_before_content');
/** Displays featured boxes based on configuration
 *  Should be always called inside loop */
if (!function_exists('minima_featured_boxes')) {

    function minima_featured_boxes() {
        $count = get_option('sp-' . md5('min-fb-count'));
        $fb_posts = array(
            array(
                'image' => get_template_directory_uri() . '/images/features/1.png',
                'url' => '#',
                'title' => 'Complete User Guides',
                'description' => 'We have created an easy to follow user guide for modifying and updating content'
            ),
            array(
                'image' => get_template_directory_uri() . '/images/features/4.png',
                'url' => '#',
                'title' => 'Appearance editor',
                'description' => 'Easy to use appearance editor using which you can change background to font of almost any element in your website.'
            ),
            array(
                'image' => get_template_directory_uri() . '/images/features/2.png',
                'url' => '#',
                'title' => 'Detailed settings panel',
                'description' => 'Easy to use settings panel with tons of options to manage your blog.'
            ),
            array(
                'image' => get_template_directory_uri() . '/images/features/3.png',
                'url' => '#',
                'title' => '12 column responsive system',
                'description' => '12 column responsive layout system, with Minima your blog will look as good on all type of devices.'
            ),
            array(
                'image' => get_template_directory_uri() . '/images/features/5.png',
                'url' => '#',
                'title' => 'Cross browser',
                'description' => 'Minima have been tested on Internet explorer version 9, 10, Google Chrome, Mozilla Firefox and safari.'
            )
        );
        $args = array(
            'post_type' => 'minima-fb',
            'post_status' => 'publish',
            'posts_per_page' => $count,
            'ignore_sticky_posts' => 1
        );
        $my_query = null;
        $my_query = new WP_Query($args);
        if ($my_query->have_posts()) {
            $fb_posts = array(); //remove default slider
            while ($my_query->have_posts()) : $my_query->the_post();
                $fb_posts[] = array(
                    'image' => wp_get_attachment_url(get_post_meta(get_the_ID(), '_minima_fb_image', true)),
                    'url' => get_post_meta(get_the_ID(), '_minima_fb_url', true),
                    'description' => get_post_meta(get_the_ID(), '_minima_fb_description', true),
                    'title' => get_the_title(),
                );
            endwhile;
        }
        wp_reset_query();
        if (count($fb_posts) > $count) {
            $fb_posts = array_splice($fb_posts, 0, $count);
        }
        ?>
        <div class="ui-featured-boxes ui-element"><?php
            foreach ($fb_posts as $post) {
                ?>
                <div class="featured-box">
                    <a href="<?php echo esc_url($post['url']); ?>">
                        <img src="<?php echo esc_url($post['image']); ?>" alt="<?php echo $post['title']; ?>"/>

                        <h3><?php echo $post['title']; ?></h3>

                        <p class="description">
                            <?php echo $post['description']; ?>
                        </p>
                    </a>
                </div>
                <?php
            }
            ?>
<div class="nav">
                <div class="nav-inner">
                    <div class="nav-container">
                        <a href="#" class="prev"><span class="icon-arrowleftthin"></span> </a>
                        <ul class="bullets">
                        </ul>
                        <a href="#" class="next"><span class="icon-arrowrightthin"></span> </a>
                    </div>
                </div>
            </div>
        </div>

        <?php
    }

}
if (!function_exists('minima_display_carousel')) {

    function minima_display_carousel() {
        $slides = array(
            array(
                'image' => get_template_directory_uri() . '/images/slides/2.jpg',
                'url' => '#',
                'title' => 'Easy to follow documention for all theme features!'
            ),
            array(
                'image' => get_template_directory_uri() . '/images/slides/3.jpg',
                'url' => '#',
                'title' => 'Detailed settings panel to easily manage the theme!'
            ),
            array(
                'image' => get_template_directory_uri() . '/images/slides/1.jpg',
                'url' => '#',
                'title' => '12 column responsive system and touch friendly!'
            )
        );
        //check if its a page or a post
        if (is_page() || is_single()) {
            $page_slides = get_post_meta(get_the_ID(), '_minima_page_slides', true);
            if (empty($page_slides)||count($page_slides)<2)//no slides are configured don't show the slider
                return false;

            if (!empty($page_slides)) {
                $slides = array();
                foreach ($page_slides as $slide) {
                    $slides[] = array(
                        'image' => esc_url(wp_get_attachment_url($slide->attachment)),
                        'url' => esc_url($slide->url),
                        'title' => esc_attr($slide->title),
                    );
                }
            }
        }
        ?>
        <div class="ui-carousel ui-element">
            <div class="carousel-inner">
                <?php foreach ($slides as $slide) { ?>
                    <div class="slide">
                        <img src="<?php echo esc_url($slide['image']); ?>" alt="<?php echo $slide['title']; ?>"/>
                        <div class="caption">
                            <a href="<?php echo $slide['url']; ?>">
                                <h4><?php echo $slide['title']; ?></h4>
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="carousel-footer">

                <div class="carousel-text">
                    <h4><a href="#"></a></h4>
                    <p>
                        
                    </p>
                </div>
                <div class="nav">
                    <div class="nav-inner">
                        <div class="nav-container">
                            <a href="#" class="prev"><span class="icon-arrowleftthin"></span> </a>
                            <ul class="bullets">
                            </ul>
                            <a href="#" class="next"><span class="icon-arrowrightthin"></span> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }

}
if (!function_exists('minima_page_title')) {

    /**
     * Returns a formatted title
     * @return boolean
     */
    function minima_page_title() {
        global $wp_query;
        if(is_page() && get_post_meta(get_the_ID(), '_minima_hide_page_title', true)){
            return false;
        }
        if (is_404()) {
            ?>
            <div id="ti-title-container">
                <div class="ti-title row">
                    <h1 class="span12"><?php _e('Page not found', 'minima'); ?></h1>

                    <div class="breadcrum-menu span4">
                        <span class="post-meta"><?php minima_the_breadcrumb(); ?></span>

                        <div class="span4 offset4 post-meta"></div>
                    </div>
                </div>
            </div>
            <?php
            return true;
        }
        if (is_page() && !get_post_meta(get_the_ID(), '_minima_hide_page_title', true) && !is_home()) {
            ?>
            <div id="ti-title-container" class="appear-edit">
                <div class="ti-title row">
                    <h1 class="span12"><?php the_title(); ?></h1>
                    <div class="breadcrum-menu">
                        <div class="span4"><?php minima_the_breadcrumb(); ?></div>
                        <span class="post-meta span4 offset4"></span>
                    </div>
                </div>
            </div>
                <?php
            return true;
        }
        if (is_single()) {
            ?>
            <div id="ti-title-container" class="appear-edit">
                <div class="ti-title row">
                    <h1 class="span12"><?php the_title(); ?><?php echo ((get_post_format()=="link")?'&rarr;':''); ?></h1>
                    <div class="breadcrum-menu">
                        <div class="span8"><?php minima_the_breadcrumb(); ?></div>
                        <div class="post-meta span4">
                            <span class="segment">
                                <span class="icon-clock"></span>
                                <span class="label"><?php the_time('l, F jS, Y'); ?></span></span>
                                <a href="#comments" class="segment">
                                <span class="icon-chat"></span>
                                <span class="label"><?php comments_number('No comments', 'One comment', '% comments'); ?></div></span>
                                </a>
                    </div>
                </div>
            </div>
        <?php
        return true;
        }
        if (is_category()||is_tag() ) {
            ?><div id="ti-title-container" class="appear-edit">
                <div class="ti-title row">
                    <h1 class="span12"><?php single_cat_title(''); ?></h1>
                    <div class="breadcrum-menu">
                        <div class="span8"><?php minima_the_breadcrumb(); ?></div>
                        <div class="post-meta span4"><span class="segment"><span class="icon-clock"></span> 
                        <span class="label"><?php the_time('l, F jS, Y'); ?></span></span> </div>
                    </div>
                </div>
            </div><?php
            return true;
        }
        
        
        if (is_home()) {
            ?>
                <div id="ti-title-container" class="appear-edit">
                <div class="ti-title ti-title-home row">
                    <h1 class="span12"><?php bloginfo('description'); ?></h1>
                </div>
            </div><?php
            return true;
        }
        if (is_search()) {
            ?>
                <div id="ti-title-container" class="appear-edit">
    <div class="ti-title row">
        <h1 class="span12">
            <?php _e('Search Results for:','minima'); ?> <?php echo get_search_query(); ?>
        </h1>
        <div class="breadcrum-menu">
            <div class="span4"><?php minima_page_num(); ?></div>
            <span class="post-meta span4 offset4"><?php
            echo (int) $wp_query->found_posts . " ";
            _e('Post found','minima');
            ?></span>
        </div>
    </div>
</div>
            <?php
            return true;
        }
        
        if (is_archive()) {
            ?>
            <div id="ti-title-container" class="appear-edit">
                <div class="ti-title row">
                    <h1 class="span12">
                        <?php
                        $term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
                        if ($term) {
                            echo ($term->name);
                        } elseif (is_post_type_archive()) {
                            echo (get_queried_object()->labels->name);
                        } elseif (is_day()) {
                            printf(__('Daily Archives: %s', 'minima'), get_the_date());
                        } elseif (is_month()) {
                            printf(__('Monthly Archives: %s', 'minima'), get_the_date('F Y'));
                        } elseif (is_year()) {
                            printf(__('Yearly Archives: %s', 'minima'), get_the_date('Y'));
                        } elseif (is_author()) {
                            global $post;
                            $author_id = $post->post_author;
                            printf(__('Author Archives: %s','minima'), get_the_author_meta('user_nicename', $author_id));
                        } else {
                            single_cat_title();
                        }
                        ?>
                    </h1>
                    <div class="breadcrum-menu">
                        <div class="span4"><?php minima_page_num(); ?></div>
                        <span class="post-meta span4 offset4"><?php echo (int)$wp_query->found_posts . " ";
                        _e('Posts found','minima') ?></span>

                    </div>
                </div>
            </div>
            <?php
            return true;
            
        }
        ?>
    <div id="ti-title-container" class="appear-edit">
        <div class="ti-title row">
            <div class="span12"><h1><?php (is_tag() || is_archive()) ? single_cat_title('') : _e('Latest Posts','minima'); ?></h1></div>
            <div class="breadcrum-menu">
                <div class="span8"><span class="post-meta"><?php minima_the_breadcrumb(); ?></span></div>
                <div class="span4 post-meta"><?php minima_page_num(); ?></div>
            </div>
        </div>
    </div>
<?php
return true;
    }

}
?>
