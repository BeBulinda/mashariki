<?php
/**
 * Visual Editor
 * @package minima
 */

/**
 * Class to handle visual editor
 * @package minima
 * @author minima Team
 */
class minimaAppear {

    /**
     * List of elements editable
     * @var SimpleXMLElement 
     */
    public $app_list;

    /**
     * Constructor, loads element list and convert it to SimpleXMLElement object.
     * @return void
     * @package minima
     */
    function minimaAppear() {
        $this->app_list = get_option('min_appear_elems');
    }

    /**
     * Admin page for visual editor
     * @return void
     * @package minima
     */
    function getAdminPage() {
        ?>
        <div class="wrap ti-appear-wrap">
            <?php minima_admin_leftmenu(); ?>
            <div class="ti-admin-icon">></div>
            <h2 class="sp-admin-title">Appearance Editor</h2>
            
            <div class="ti-appear-menu">
                <?php
                $i = 0;
                $j = 0;
                foreach ($this->app_list['sections'] as $section) {
                    ?>
                    <span><a href="#elem-list-<?php echo $i; ?>" class="ti-appear-section"><span class="ti-icon">V</span><?php echo $section['name']; ?></a></span>
                    <ul class="ti-appear-list sp-hide" id="elem-list-<?php echo $i; ?>">
                        <?php
                        foreach ($section['elements'] as $element) {
                            ?>
                        <li><a href="#sp-appear-<?php echo $j; ?>" class="ti-appear-item"><?php echo $element['name']; ?></a></li>
                            <?php
                            $j++;
                        }
                        ?>
                    </ul>
                    <?php
                    $i++;
                }
                ?>
            </div>
            <div class="sp-admin-area">
                <form class="sp-appear-form">
                <?php minima_upgrade_nag('You are running lite version of minima, for more editable elements please upgrade to pro!');?>
                </form>
                <div id="fm-unavailable" style="display: none;">
                    <?php minima_upgrade_nag('Font manager is only available in pro version of minima, for font manager and more features please upgrade to pro!');?>
                </div>
                <div class="sp-hide sp-appear-forms">
                    <?php
                    $i = 0;
                    foreach ($this->app_list['sections'] as $section) {
                        ?>
                        <?php
                        foreach ($section['elements'] as $element) {
                            ?><div id="sp-appear-<?php echo $i; ?>" class="sp-appearance">
                                <form method="post" class="sp-appear-form sp-hide">
                                    <?php
                                    switch ($element['editor']) {
                                        case 'background':
                                            minima_admin_background(array('slug' => 'sp-bg-' . $element['selector'], 'name' => $element['name']));
                                            break;
                                        case 'font':
                                            minima_admin_font(array('slug' => 'sp-font-' . $element['selector'], 'name' => $element['name']));
                                            break;
                                        case 'both':
                                            minima_admin_font(array('slug' => 'sp-font-' . $element['selector'], 'class' => 'appearance-common ti-font-2c', 'name' => $element['name']));
                                            minima_admin_background(array('slug' => 'sp-bg-' . $element['selector'], 'class' => 'appearance-common ti-bg-2c', 'name' => $element['name']));
                                            break;
                                        case 'fontcolor':
                                            minima_admin_fontcolor(array('slug' => 'sp-font-' . $element['selector'],  'name' => $element['name']));
                                            break;
                                    }
                                    ?>
                                    <div class="sp-form-row"><label>&nbsp;</label><button class="button blue button-primary appearance-save"><i>.</i>Save</button></div>

                                </form>
                            </div>
                            <?php
                            $i++;
                        }
                    }
                    ?>
                </div>
            </div>
            <span class="sp-clear"></span>
        </div>
        <?php
    }

    /**
     * Triggered at init by the framework
     * @return void
     * @package minima
     */
    function updateAdminPage() {
        if (isset($_REQUEST['ti_update_appearance'])) {
            $this->ajaxUpdate();
            update_option("ti_generate_css", 1);
            die();
        }
        if (isset($_REQUEST['get_font_iframe'])) {
            $this->getFontIframe();
            die();
        }
    }

    /**
     * Includes font iframe file
     * @return void
     */
    function getFontIframe() {
    }

    /**
     * Updates appearance settings
     * 
     * This is a common function to update background and fonts of a defined element.
     * Handles : $_REQUEST['bg_elem'],$_REQUEST['bg'],$_REQUEST['font_elem'] and $_REQUEST['font']
     * @return void
     * @package minima
     */
    function ajaxUpdate() {
        if (isset($_POST['bg_elem'])) {
            $bg = json_decode(stripcslashes($_POST['bg']));
            if (isset($bg->bg_img)) {
                $bg->bg_img_url = esc_url(wp_get_attachment_url($bg->bg_img));
            }
            update_option($_POST['bg_elem'], $bg);
        }
        if (isset($_POST['font_elem'])) {
            $ti_fonts = get_option("sp-fonts", array());
            $font = json_decode(stripcslashes($_POST['font']));
            $ff = $ti_fonts[$font->font];
            $ff['family'] = isset($ff['family'])?stripslashes($ff['family']):'';
            $ff['family'] = str_replace("'", '"', $ff['family']);
            $font->font_desc = $ff;
            update_option($_POST['font_elem'], $font);
        }
        print_r(get_option($_POST['bg_elem']));
        print_r(get_option($_POST['font_elem']));
        echo "ok";
    }

}
?>
