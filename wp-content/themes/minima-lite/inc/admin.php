<?php
/**
 * Minima Admin Panel
 *
 * The development goal for admin panel of minima is to make a simple system, which should be easy to customize and Extend
 * @package: minima
 */
if (get_magic_quotes_gpc()) {
    $process = array(&$_GET, &$_POST, &$_COOKIE, &$_REQUEST);
    while (list($key, $val) = each($process)) {
        foreach ($val as $k => $v) {
            unset($process[$key][$k]);
            if (is_array($v)) {
                $process[$key][stripslashes($k)] = $v;
                $process[] = & $process[$key][stripslashes($k)];
            } else {
                $process[$key][stripslashes($k)] = stripslashes($v);
            }
        }
    }
    unset($process);
}
add_action('_admin_menu', 'minima_admin_init');

/**
 * Admin Panel Init
 *
 * The function parses main XML document for admin panel, prepares list of callbacks, css and javascript resources and pages.
 *
 * @global mixed stores contents of XML document in array format
 * @global mixed stores callback info for pages
 * @global mixed stores pages to be defined
 * @global mixed stores css and js resources to be included
 * @package minima
 * @return void
 */
if (!function_exists('minima_admin_init')) {

    function minima_admin_init() {
        global $min_admin, $min_admin_menu, $min_callbacks, $min_admin_pages, $min_admin_resources;
        get_template_part('admin/base');
        $min_admin_menu = $min_admin['menu'];
        $min_callbacks = $min_admin['callbacks'];
        $page = $min_admin['menu'];
        $min_admin_resources = $min_admin['resources'];
        unset($page['children']);
        $min_admin_pages[] = $page;
        foreach ($min_admin['menu']['children'] as $page) {
            $min_admin_pages[] = $page;
        }
        WP_Filesystem();
        global $wp_filesystem;
        //print_r($wp_filesystem);
    }

}
add_action("admin_menu", "minima_admin_menu");

/**
 * Admin Menu
 *
 * The function adds admin pages to wordpress admin menu
 *
 * @global mixed stores contents of XML document in array format
 * @package minima
 * @return void
 */
if (!function_exists('minima_admin_menu')) {

    function minima_admin_menu() {
        global $min_admin_menu;
        add_theme_page($min_admin_menu['name'], 'Minima ' . $min_admin_menu['name'], $min_admin_menu['capability'], $min_admin_menu['slug'], 'minima_admin_page');
    }

}
add_action('admin_print_scripts-appearance_page_minima-settings', 'minima_admin_resources');

/**
 * Admin Menu
 *
 * The function adds css/js files to admin panel
 *
 * @global mixed stores css and js resources to be included
 * @package twistItAdmin
 * @return void
 */
if (!function_exists('minima_admin_resources')) {

    function minima_admin_resources() {
        global $min_admin_resources;
        foreach ($min_admin_resources as $res) {
            if (isset($res['type'])) {
                switch ($res['type']) {
                    case 'js':
                        if (isset($res['src'])) {
                            wp_enqueue_script($res['slug'], get_template_directory_uri() . '/admin/' . $res['src']);
                        } else {

                            wp_enqueue_script($res['slug']);
                        }
                        break;
                    case 'css':
                        if (isset($res['src'])) {
                            wp_enqueue_style($res['slug'], get_template_directory_uri() . '/admin/' . $res['src']);
                        } else {
                            wp_enqueue_style($res['slug']);
                        }
                        break;
                }
            }
        }
        $admin_ls_loc = array(
            'txt_remove' => __('Remove', 'minima'),
            'txt_random' => __('Random', 'minima'),
            'txt_top' => __('Top', 'minima'),
            'txt_right' => __('Right', 'minima'),
            'txt_bottom' => __('Bottom', 'minima'),
            'txt_left' => __('Left', 'minima'),
            'slide_conf' => __('Are you sure to delete this slide?', 'minima'),
            'slider_conf' => __('Are you sure to delete this slider?', 'minima')
        );
        wp_localize_script('sp-admin-ls', 'admin_ls_text', $admin_ls_loc);
        $admin_loc = array(
            'font_lbl' => __('Select a Font', 'minima'),
            'upload_lbl' => __('Upload Image', 'minima'),
            'remove_image' => __('Remove image', 'minima'),
            'saving_lbl' => __('Saving ..', 'minima'),
            'saved_lbl' => __('Saved!', 'minima'),
            'txt_preview' => __('Preview', 'minima'),
            'bg_rm' => __('Click to remove background!', 'minima'),
            'font_rm' => __('Click to remove font!', 'minima'),
            'font_preview' => __('The quick brown fox jumps over the lazy dog', 'minima'),
            'font_conf' => __('Are you sure to delete this font?', 'minima'),
            'font_iframe' => array(
                'n_font_text' => __('Add a new font', 'minima'),
                'o_font_text' => __('Edit font', 'minima'),
                'txt_font' => __('Font', 'minima'),
                'txt_font_file' => __('Font File', 'minima'),
                'txt_font_embed' => __('Font Embed Code(Import/Standard)', 'minima'),
                'txt_google_ff' => __('Google Font Family', 'minima'),
                'txt_google_font' => __('Google Font', 'minima'),
                'txt_cufon_font' => __('Cufon Font', 'minima'),
                'txt_add_font' => __('Add Font', 'minima'),
                'txt_font_type' => __('Font Type', 'minima'),
                'txt_update_font' => __('Update Font', 'minima'),
                'msg_font_type' => __('Plese Select a Font Type', 'minima'),
                'msg_google_ff' => __('Plese Provide Google Font Family', 'minima'),
                'msg_cufon_ff' => __('Please select a font file to upload!', 'minima'),
                'msg_invalid_cufon' => __('This Font is not supported, Please use valid cufon fonts(.js files)!', 'minima'),
                'msg_google_ec' => __('Please enter google embed code!', 'minima'),
                'msg_invalid_google' => __('Invalid Code! Make sure you paste code for either standard or @import tab.', 'minima'),
            )
        );
        wp_localize_script('min-admin', 'admin_text', $admin_loc);
    }

}
/** loads script to custom post type */
add_action('admin_print_scripts-post-new.php', 'minima_metaboxes_admin_script', 11);
add_action('admin_print_scripts-post.php', 'minima_metaboxes_admin_script', 11);
if(!function_exists('minima_metaboxes_admin_script')){
function minima_metaboxes_admin_script() {
    global $post_type;
    if ('minima-fb' == $post_type) {
        wp_enqueue_style('thickbox');
        wp_enqueue_style('minima-page-options-style', get_template_directory_uri() . '/admin/css/minima-metaboxes.css');
        wp_enqueue_script('minima-fb-admin-script', get_template_directory_uri() . '/admin/js/minima-fb.js');
        wp_enqueue_script('thickbox');
        $admin_ls_loc = array(
            'upload_lbl' => __('Upload image', 'minima'),
            'remove_image' => __('Remove image', 'minima')
        );
        wp_localize_script('minima-fb-admin-script', 'admin_text', $admin_ls_loc);
    }
    if ('post' == $post_type || 'page' == $post_type) {
        wp_enqueue_style('minima-page-options-style', get_template_directory_uri() . '/admin/css/minima-metaboxes.css');
        wp_enqueue_style('thickbox');
        wp_enqueue_script('json', get_template_directory_uri() . '/admin/js/json.js');
        wp_enqueue_script('minima-page-options-script', get_template_directory_uri() . '/admin/js/minima-metaboxes.js');
        wp_enqueue_script('thickbox');
        $admin_ls_loc = array(
            'image_lbl' => __('Slide image', 'minima'),
            'upload_lbl' => __('Upload image', 'minima'),
            'title_lbl' => __('Slide title', 'minima'),
            'btn_lbl' => __('Button text', 'minima'),
            'delete_title' => __('Delete slider', 'minima'),
            'slide_hint' => __('Choose an image to enable fields below!', 'minima'),
            'no_slides' => __('No slides found', 'minima'),
            'caption_lbl' => __('Slide caption', 'minima'),
            'url_lbl' => __('Slide URL', 'minima'),
            'remove_image' => __('Remove image', 'minima')
        );
        wp_localize_script('minima-page-options-script', 'admin_text', $admin_ls_loc);
    }
}
}
/**
 * Loadin admin page
 *
 * The function checks for $_REQUEST['page'] to obtain and loads the admin page,
 *
 * @package minima
 * @return void
 */
if (!function_exists('minima_admin_page')) {

    function minima_admin_page() {
        global $wp_filesystem;
        if (isset($_REQUEST['page']) && !isset($_REQUEST['min-subpage'])) {
            $callback = minima_get_callback($_REQUEST['page']);
            if (isset($callback['panel']['interface'])) {
                $file_name = $callback['panel']['interface'];
                require_once locate_template('/admin/' . $file_name);
                $iclass = (string) $callback['panel']['interface-class'];
                $ipage = new $iclass;
                $ipage->getAdminPage();
            } else {
                minima_admin_panel($callback['panel']);
            }
            do_action('ti_admin_end');
        } else {
            $callback = minima_get_callback($_REQUEST['min-subpage']);
            if (isset($callback['panel']['interface'])) {
                $file_name = $callback['panel']['interface'];
                require_once locate_template('/admin/' . $file_name);
                $iclass = (string) $callback['panel']['interface-class'];
                $ipage = new $iclass;
                $ipage->getAdminPage();
            } else {
                minima_admin_panel($callback['panel']);
            }
            do_action('ti_admin_end');
        }
    }

}
/**
 * Returns page's xml file
 *
 * The function checks callback and returns xml setting file's name
 * @param string $page Page slug
 * @global mixed stores callbacks
 * @package minima
 * @return array callback details
 */
if (!function_exists('minima_get_callback')) {

    function minima_get_callback($page) {
        global $min_callbacks;
        foreach ($min_callbacks as $cb) {
            if ($cb['name'] == $page) {
                return $cb;
            }
        }
    }

}

/**
 * prints leftslide menu for admin panel
 *
 * @package minima
 * @return void
 */
if (!function_exists('minima_admin_leftmenu')) {

    function minima_admin_leftmenu() {
        global $min_admin_menu;
        ?>
        <ul class="sp-admin-menu">
            <li><a href="admin.php?page=<?php echo $min_admin_menu['slug']; ?>"
                   class="<?php echo ((($_REQUEST['page'] == $min_admin_menu['slug']) && !isset($_REQUEST['subpage'])) ? 'active' : 'menu'); ?>"
                   id="<?php echo $min_admin_menu['slug']; ?>-leftmenu"><span class="ti-icon"
                                                                           title="<?php echo $min_admin_menu['name']; ?>"><?php echo $min_admin_menu['ticon']; ?></span><?php echo $min_admin_menu['name']; ?></a>
            </li>
            <?php foreach ($min_admin_menu['children'] as $page) { ?>
                <li><a href="admin.php?page=<?php echo $min_admin_menu['slug'] . '&min-subpage=' . $page['slug']; ?>"
                       class="<?php echo ((isset($_REQUEST['min-subpage']) && ($_REQUEST['min-subpage'] == $page['slug'])) ? 'active' : 'menu'); ?>"
                       id="<?php echo $page['slug']; ?>-leftmenu"><span class="ti-icon"
                                                                     title="<?php echo $page['name']; ?>"><?php echo $page['ticon']; ?></span><?php echo $page['name']; ?></a>
                </li>
            <?php
        }
        ?>
        </ul>
        <?php
    }

}
/**
 * Renders admin page
 *
 * The function renders admin panel based on SimpleXMLElemnt.
 * @param mixed $panel XML settings in SimpleXMLElement format
 * @package minima
 * @return void
 */
if (!function_exists('minima_admin_panel')) {

    function minima_admin_panel($panel) {
        ?>
        <div class='wrap'>
                    <?php minima_upgrade_nag('You are running lite version of minima, for tile slider and more features please upgrade to pro!'); ?>
                    <?php minima_admin_leftmenu(); ?>
            <div class="sp-admin-area">
                <div class="ti-admin-icon"><?php echo $panel['icon']; ?></div>
                <h2 class="sp-admin-title"><?php echo $panel['title'] ?></h2>

                <form method="post">
        <?php
        foreach ($panel['options'] as $option) {
            minima_admin_formelem($option);
        }
        ?>

                    <p class="sp-form-row sp-update"><label>&nbsp;</label>
                        <button class="button button-primary"><i>.</i><?php _e('Save', 'minima'); ?></button>
                        <input type="hidden" name="min-admin" value="1"/>
                    </p>
                </form>
            </div>
        </div>
        <?php
    }

}

/**
 * update API
 *
 * The function starts update process by triggering update hooks of custom interfaces
 * @param string $path Path to page's XML settings document
 * @return void
 * @package minima
 */
if (!function_exists('minima_update_init')) {

    function minima_update_init($cb) {
        if (isset($cb['panel']['interface'])) {
            $file_name = $cb['panel']['interface'];
            require_once locate_template('/admin/' . $file_name);
            $iclass = (string) $cb['panel']['interface-class'];
            $ipage = new $iclass;
            $ipage->updateAdminPage();
        } else {
            minima_update_panel($cb['panel']);
        }
    }

}
/**
 * Updates elements by panel
 * @param SimpleXMLElement $panel SimpleXMLElement object of current page
 * @return void
 * @package minima
 */
if (!function_exists('minima_update_panel')) {

    function minima_update_panel($panel) {
        foreach ($panel['options'] as $option) {
            minima_update_elem($option);
        }
    }

}
/**
 * Validates data entered for options elements
 * @param array $elem array Object of elem
 * @return Mixed Validation and sanitized data, false if validation fails
 * @package minima
 */
if (!function_exists('minima_validate_elem')) {

    function minima_validate_elem($elem) {
        //check if input is present in case input is not a checkbox
        if (!isset($_REQUEST['sp-' . md5($elem['slug'])]) && $elem['type'] != 'checkbox') {
            return false;
        }
        //the return data
        $return = false;
        $allowed_html = array(
            'a' => array(
                'href' => array(),
                'title' => array(),
                'class' => array()
            ),
            'br' => array(),
            'em' => array(),
            'strong' => array(),
            'div' => array('id' => array(), 'class' => array()),
            'p' => array('id' => array(), 'class' => array()),
            'img' => array('src' => array(), 'alt' => array(), 'class' => array()),
            'span' => array('id' => array(), 'class' => array()),
            'h4' => array(),
        );
        switch ($elem['type']) {
            case 'text':
            case 'textarea':
                //clean out textarea using sanitize
                $return = sanitize_text_field($_REQUEST['sp-' . md5($elem['slug'])]);
                break;
            case 'html':
                //clean out textarea using sanitize
                $return = wp_kses($_REQUEST['sp-' . md5($elem['slug'])], $allowed_html);
                break;
            case 'imgfield':
                //check if data contains a valid attachment id
                if (is_numeric($_REQUEST['sp-' . md5($elem['slug'])])) {
                    $return = $_REQUEST['sp-' . md5($elem['slug'])];
                } else {
                    $return = 0;
                }
                break;
            case 'checkbox':
                //return true/false based on if data is present
                $return = (isset($_REQUEST['sp-' . md5($elem['slug'])]) ? true : false);
                break;
            case 'radio':
                //return true/false based on if data is present
                $return = esc_attr($_REQUEST['sp-' . md5($elem['slug'])]);
                break;
            default:
                //return esc_attr
                $return = esc_attr($_REQUEST['sp-' . md5($elem['slug'])]);
                break;
        }
        return $return;
    }

}
/**
 * Updates single elements by type
 * @param array $elem array object of elem
 * @return void
 * @package minima
 */
if (!function_exists('minima_update_elem')) {

    function minima_update_elem($elem) {
        $value = minima_validate_elem($elem);
        if ($value !== false || $elem['type'] == 'checkbox') {
            update_option('sp-' . md5($elem['slug']), $value);
        }
    }

}

/**
 * Renders form elements based on their type.
 * @param arrat $elem array object of element
 * @return void
 * @package twistItAdmin
 */
if (!function_exists('minima_admin_formelem')) {

    function minima_admin_formelem($elem) {
        switch ($elem['type']) {
            case 'text':
                minima_admin_text($elem);
                break;
            case 'checkbox':
                minima_admin_checkbox($elem);
                break;
            case 'textarea':
                minima_admin_textarea($elem);
                break;
            case 'slider':
                minima_admin_slider($elem);
                break;
            case 'imgfield':
                minima_admin_imgfield($elem);
                break;
            case 'html':
                minima_admin_html($elem);
                break;
            case 'colorOption':
                minima_admin_colorOption($elem);
                break;
        }
    }

}
add_action('admin_menu', 'minima_admin_update');

/**
 * AJAX Handler
 *
 * Calls to start data update and also loads iframes
 * @package twistItAdmin
 * @return void
 */
if (!function_exists('minima_admin_update')) {

    function minima_admin_update() {
        global $min_callbacks;
        if (isset($_REQUEST['page']) && isset($_REQUEST['min-admin'])) {
            foreach ($min_callbacks as $cb) {
                if ($cb['name'] == $_REQUEST['page'] && !isset($_REQUEST['min-subpage'])) {
                    minima_update_init($cb);
                    break;
                } elseif ($_REQUEST['min-subpage'] == $cb['name']) {
                    minima_update_init($cb);
                }
            }
        }
    }

}

/* Header hook for font styles */
add_action('admin_head', 'minima_admin_head');

/**
 * Checks and loads fonts for fonts editor
 * @package twistItAdmin
 * @return void
 */
if (!function_exists('minima_admin_head')) {

    function minima_admin_head() {
        if (isset($_REQUEST['page'])) {
            if ($_REQUEST['page'] == "sp-fonts") {
                minima_font_head(true);
            }
            minima_font_head(false);
        }
        minima_admin_head_vars();
    }

}
/**
 * Font HTML Description
 *
 * prints all available fonts to be used within </head> tag
 * @package twistItAdmin
 * @param bool $admin if to generate font preview styles
 * @return void
 */
if (!function_exists('minima_font_head')) {

    function minima_font_head($admin) {
        
    }

}

/**
 * prints javascript variables
 *
 * @package twistItAdmin
 * @return void
 */
function minima_admin_head_vars() {
    ?>
    <!--setting up vars -->
    <script type="text/javascript">
        var sp_root = "<?php echo get_template_directory_uri(); ?>";
    </script>
    <?php
}
?>
