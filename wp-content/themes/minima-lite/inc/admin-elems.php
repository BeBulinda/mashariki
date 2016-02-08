<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Background selector
 * 
 * prints a background selector
 * <code>
 * sp_admin_background(array('slug' => 'slug-of-element', 'name' => 'Name of Element')) ;
 * </code>
 * @package minima
 * @param array $data data for form element
 * @return void
 */
if (!function_exists('minima_admin_background')) {

    function minima_admin_background($data) {
        ?>
        <div class="sp-admin-bg <?php echo (isset($data['class']) ? $data['class'] : ''); ?>">
            <h3><?php _e('Background','minima'); ?></h3>
            <p class="sp-form-row">
                <label><?php _e('Background Image','minima'); ?></label>
                <!-- Check if Img has to be displayed -->
                <input class="sp-bg-img" type="hidden"/>
                <button class="sp-bg-upload button-secondary"><?php _e('Upload Image','minima'); ?></button>
            </p>
            <p class="sp-form-row">
                <label><?php _e('Background Color','minima'); ?></label>
                <input class="sp-bg-color sp-bg-color-elem"  type="text"/>
                <span class="sp-bg-picker"></span>
            </p>
            <p class="sp-form-row">
                <label><?php _e('Background Repeat','minima'); ?></label>
                <select class="sp-bg-repeat">
                    <option value="repeat"><?php _e('Repeat Both','minima'); ?></option>
                    <option value="repeat-y"><?php _e('Repeat Vertical','minima'); ?></option>
                    <option value="repeat-x"><?php _e('Repeat Horizontal','minima'); ?></option>
                    <option value="no-repeat"><?php _e('No Repeat','minima'); ?></option>
                </select>
            </p>
            <div class="sp-bg-pos">
                <h4><?php _e('Background Position','minima'); ?></h4>
                <p class="sp-form-row">
                    <label><?php _e('Background Position X axis','minima'); ?></label>
                    <input class="sp-bg-pos-x sp-range"  type="text" value="65"/>
                    <input type="hidden" class="sp-range-val" value='<?php echo json_encode(array("max" => 100, "min" => 0)); ?>'/>
                </p>
                <p class="sp-form-row">
                    <label><?php _e('Background Position Y axis','minima'); ?></label>
                    <input class="sp-bg-pos-y sp-range"  type="text" value="35"/>
                    <input type="hidden" class="sp-range-val" value='<?php echo json_encode(array("max" => 100, "min" => 0)); ?>'/>
                </p>
                <p class="sp-form-row">
                    <label><?php _e('Background Position Unit','minima'); ?></label>
                    <select class="sp-bg-unit">
                        <option value="px"><?php _e('Pxs','minima'); ?> Px</option>
                        <option value="em"><?php _e('Ems','minima'); ?> Em</option>
                        <option value="%"><?php _e('Percent','minima'); ?> %</option>
                    </select>
                </p>
            </div>
            <input type="hidden" name="sp-<?php echo md5($data['slug']); ?>" class="sp-bg-value" value='<?php echo stripslashes(json_encode((object) get_option("sp-" . md5($data['slug']), array()))); ?>'/>
        </div>
        <?php
    }

}
/**
 * Input Text
 * 
 * prints a input text.
 * <code>
 * sp_admin_text(array('slug' => 'slug-of-element', 'name' => 'Name of Element')) ;
 * </code>
 * @package minima
 * @param array $data data for form element
 * @return void
 */
if (!function_exists("minima_admin_text")) {

    function minima_admin_text($data) {
        ?>
        <p class="sp-form-row">
            <label for="sp-<?php echo $data['slug']; ?>"><?php echo $data['name']; ?></label>
            <input type="text" class="sp-input" id="sp-<?php echo $data['slug']; ?>" name="sp-<?php echo md5($data['slug']); ?>" value="<?php echo((isset($data['value'])) ? $data['value'] : get_option('sp-' . md5($data['slug']), '')); ?>"/>
            <span class="desc-icon"><i title="<?php echo $data['msg']; ?>">E</i></span><span class="sp-clear"></span></p>
        <?php
    }

}
/**
 * Input Text
 * 
 * prints a input text.
 * <code>
 * sp_admin_text(array('slug' => 'slug-of-element', 'name' => 'Name of Element')) ;
 * </code>
 * @package minima
 * @param array $data data for form element
 * @return void
 */
if (!function_exists("minima_admin_colorOption")) {

    function minima_admin_colorOption($data) {
        ?>
        <p class="sp-form-row min-color-option-row">
            <label for="sp-<?php echo $data['slug']; ?>"><?php echo $data['name']; ?></label>
            <input type="hidden" class="sp-input" id="sp-<?php echo $data['slug']; ?>" name="sp-<?php echo md5($data['slug']); ?>" value="<?php echo((isset($data['value'])) ? $data['value'] : get_option('sp-' . md5($data['slug']), '')); ?>"/>
            <?php
                for($i=0; $i<4; $i++){
                    ?>
                    <img class="color-option <?php echo (($i+1)==get_option('sp-' . md5($data['slug']), ''))?"active":'' ?>"
                     src="<?php echo get_template_directory_uri(); ?>/admin/images/color-<?php echo ($i+1); ?>.png"
                     data-min-color="<?php echo $i+1; ?>" />
                    <?php
                }
            ?>
            <span class="desc-icon"><i title="<?php echo $data['msg']; ?>">E</i></span><span class="sp-clear"></span></p>
        <?php
    }

}

/**
 * Textarea
 *
 * prints a html textarea.
 * <code>
 * sp_admin_textarea(array('slug' => 'slug-of-element', 'name' => 'Name of Element')) ;
 * </code>
 * @package minima
 * @param array $data data for form element
 * @return void
 */
if (!function_exists('minima_admin_html')) {

    function minima_admin_html($data) {
        ?>
        <p class="sp-form-row">
            <label for="sp-<?php echo $data['slug']; ?>"><?php echo $data['name']; ?></label>
            <textarea class="html-editor" id="sp-<?php echo $data['slug']; ?>" name="sp-<?php echo md5($data['slug']); ?>" rows="10" cols="80"><?php echo((isset($data['value'])) ? esc_attr($data['value']) : esc_attr(get_option('sp-' . md5($data['slug'])), '')); ?></textarea>
            <span class="desc-icon float-icon"><i title="<?php echo $data['msg']; ?>">E</i></span><span class="sp-clear"></span></p>
    <?php
    }

}

/**
 * Textarea
 * 
 * prints a textarea.
 * <code>
 * sp_admin_textarea(array('slug' => 'slug-of-element', 'name' => 'Name of Element')) ;
 * </code>
 * @package minima
 * @param array $data data for form element
 * @return void
 */
if (!function_exists('minima_admin_textarea')) {

    function minima_admin_textarea($data) {
        ?>
        <p class="sp-form-row">
            <label for="sp-<?php echo $data['slug']; ?>"><?php echo $data['name']; ?></label>
            <textarea class="sp-input" id="sp-<?php echo $data['slug']; ?>" name="sp-<?php echo md5($data['slug']); ?>"><?php echo((isset($data['value'])) ? esc_attr($data['value']) : esc_attr(get_option('sp-' . md5($data['slug']), ''))); ?></textarea>
            <span class="desc-icon"><i title="<?php echo $data['msg']; ?>">E</i></span><span class="sp-clear"></span></p>
        <?php
    }

}
/**
 * Input Checkbox
 * 
 * prints a input checkbox.
 * <code>
 * sp_admin_checkbox(array('slug' => 'slug-of-element', 'name' => 'Name of Element')) ;
 * </code>
 * @package minima
 * @param array $data data for form element
 * @return void
 */
if (!function_exists('minima_admin_checkbox')) {

    function minima_admin_checkbox($data) {
        ?>
        <p class="sp-form-row">
            <label for="sp-<?php echo $data['slug']; ?>"><?php echo $data['name']; ?></label>
            <input type="checkbox" class="sp-input" id="sp-<?php echo $data['slug']; ?>" name="sp-<?php echo md5($data['slug']); ?>" <?php echo((get_option('sp-' . md5($data['slug']), '')) ? 'checked="true"' : ''); ?>/>
            <span class="desc-icon"><i title="<?php echo $data['msg']; ?>">E</i></span><span class="sp-clear"></span></p>
        <?php
    }

}
/**
 * Input Radio
 * 
 * prints a input radio.
 * <code>
 * sp_admin_radio(array('slug' => 'slug-of-element', 'name' => 'Name of Element')) ;
 * </code>
 * @package minima
 * @param array $data data for form element
 * @return void
 */
if (!function_exists('minima_admin_radio')) {

    function minima_admin_radio($data) {
        ?>
        <p class = "sp-form-row">
            <label><?php echo $data['name']; ?></label>
            <?php foreach ($data['options'] as $option) { ?>
                <span class = "radio-box"><input type = "radio" name="sp-<?php echo md5($data['slug']); ?>" value = "<?php echo $option['value']; ?>" class = "curr-font-type sp-<?php echo $option['value']; ?>-type"/><span><?php echo $option['name']; ?></span></span>
            <?php } ?>
            <span class = "sp-clear"></span>
        </p>
        <?php
    }

}
/**
 * Image Selector
 * 
 * Image selector using WordPress's media upload
 * <code>
 * sp_admin_imgfield(array('slug' => 'slug-of-element', 'name' => 'Name of Element')) ;
 * </code>
 * @package minima
 * @param array $data data for form element
 * @return void
 */
if (!function_exists('minima_admin_imgfield')) {

    function minima_admin_imgfield($data) {
        ?>
        <p class="sp-form-row">
            <label><?php echo $data['name'],'minima'; ?></label>
            <!-- Check if Img has to be displayed -->
            <span class="bg-area">
                <?php if (get_option('sp-' . md5($data['slug']), '')) { ?>
                    <input class = "sp-img-id" type = "hidden" name = "sp-<?php echo md5($data['slug']); ?>" value="<?php echo get_option('sp-' . md5($data['slug']), ''); ?>"/>
                    <img class="sp-img-preview" src="<?php echo wp_get_attachment_url(get_option('sp-' . md5($data['slug']), '')); ?>" alt="preview">
                    <br/><button class="button-primary remove-image"><?php _e('Remove image','minima'); ?></button>
                <?php } else {
                    ?>
                    <input class="sp-img-id" type="hidden" name="sp-<?php echo md5($data['slug']); ?>"/>
                <?php } ?>
                <button class="sp-img-upload button-secondary"><?php _e('Upload image','minima'); ?></button>
            </span>
            <span class="sp-clear"></span>
        </p>
        <?php
    }

}
/**
 * layerslider
 * 
 * prints a dropdown of layersliders
 * <code>
 * sp_admin_layerslider(array('slug' => 'slug-of-element', 'name' => 'Name of Element')) ;
 * </code>
 * @package minima
 * @param array $data data for form element
 * @return void
 */
if (!function_exists('minima_admin_slider')) {

    function minima_admin_slider($data) {
        ?>
        <p class="sp-form-row">
            <label for="min-home-slider"><?php echo $data['name']; ?></label>
            <input type="checkbox" id="min-home-slider" name="sp-<?php echo md5($data['slug']); ?>" <?php echo (get_option('sp-' . md5($data['slug']), '')?'checked="checked"':''); ?> />
            <span class="sp-clear"></span>
        </p>
        <?php
    }

}

/**
 * Font editor
 * 
 * prints a font editor.
 * <code>
 * sp_admin_font(array('slug' => 'slug-of-element', 'name' => 'Name of Element')) ;
 * </code>
 * @package minima
 * @param array $data data for form element
 * @return void
 */
if (!function_exists('minima_admin_font')) {

    function minima_admin_font($data, $val = array()) {
        ?>
        <div class="sp-admin-font <?php echo (isset($data['class']) ? $data['class'] : ''); ?>">
            <h3><?php _e('Font','minima'); ?></h3>
            <p class="sp-form-row">
                <label><?php _e('Font Family','minima'); ?></label>
                <!-- Check if Img has to be displayed -->
                <input class="sp-font-ff" type="hidden" />
                <a class="sp-font-choose button-secondary thickbox" href="#TB_inline?width=600&height=350&inlineId=fm-unavailable"><?php _e('Select a Font','minima'); ?></a>
            </p>
            <p class="sp-form-row">
                <label><?php _e('Font Size(px)','minima'); ?></label>
                <input class="sp-font-size sp-range"  type="text" value="18"/>
                <input type="hidden" class="sp-range-val" value='<?php echo json_encode(array("max" => 200, "min" => 0)); ?>'/>
            </p>
            <p class="sp-form-row">
                <label><?php _e('Font Color','minima'); ?></label>
                <input class="sp-font-color"  type="text"/>
                <span class="sp-font-picker"></span>

            </p>
            <input type="hidden" name="sp-<?php echo md5($data['slug']); ?>" value='<?php echo stripslashes(json_encode((object) get_option("sp-" . md5($data['slug']), array()), JSON_HEX_QUOT)); ?>' class="sp-font-val"/>
        </div>
        <?php
    }

}
/**
 * Font editor
 * 
 * prints a font editor.
 * <code>
 * sp_admin_font(array('slug' => 'slug-of-element', 'name' => 'Name of Element')) ;
 * </code>
 * @package minima
 * @param array $data data for form element
 * @return void
 */
if (!function_exists('minima_admin_fontcolor')) {

    function minima_admin_fontcolor($data, $val = array()) {
        ?>
        <div class="sp-admin-font <?php echo (isset($data['class']) ? $data['class'] : ''); ?>">
            <h3><span class="ti-icon ti-icon-float">r</span><?php _e('Font','minima'); ?></h3>
            <p class="sp-form-row">
                <label><?php _e('Font Color','minima'); ?></label>
                <input class="sp-font-color"  type="text"/>
                <span class="sp-font-picker"></span>

            </p>
            <input type="hidden" name="sp-<?php echo md5($data['slug']); ?>" value='<?php echo stripslashes(json_encode((object) get_option("sp-" . md5($data['slug']), array()), JSON_HEX_QUOT)); ?>' class="sp-font-val"/>
        </div>
        <?php
    }

}

/**
 * Title
 * 
 * prints a title.
 * @package minima
 * @param mixed $data data for title in SimpleXMLElement format
 * @return void
 */
if (!function_exists('minima_admin_title')) {

    function minima_admin_title($title) {
        ?>
        <h<?php echo $title['size']; ?>><?php echo $title[0]; ?></h<?php echo $title['size']; ?>>
        <?php
    }

}
if(!function_exists('minima_upgrade_nag')){
function minima_upgrade_nag($msg=''){
    ?>
    <div class="sp-admin-area">
        <div class="upgrade-nag">
            <span class="ti-icon">C</span>
            <div class="nag-inner">
                <p><?php echo $msg; ?></p>
                <a rel="option-panel-link" target="_blank" href="<?php echo esc_url( __( 'http://minima.in/pro', 'minima' ) ); ?>" class="button button-secondary" target="_blank">Demo</a>
                <a rel="option-panel-link" target="_blank" href="admin.php?page=minima-settings&min-subpage=minima-upgrade" class="button button-primary">Why upgrade?</a>
                <a rel="option-panel-link" target="_blank" href="<?php echo esc_url( __( 'http://minima.in/pro/support/payment', 'minima' ) ); ?>" class="button button-primary" target="_blank">Buy now for $49 only!</a>
            </div>
        </div>
    </div>
<?php
}
}
?>