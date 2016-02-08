<?php

/**
 * Adds a box to the main column on the Post and Page edit screens.
 */
if(!function_exists('minima_add_custom_box')){
function minima_add_custom_box() {

    $screens = array( 'page','post' );

    foreach ( $screens as $screen ) {

        add_meta_box(
            'minima_sectionid',
            __( 'Minima Options', 'minima' ),
            'minima_inner_custom_box',
            $screen
        );
    }
}
}
add_action( 'add_meta_boxes', 'minima_add_custom_box' );

/**
 * Prints the box content.
 *
 * @param WP_Post $post The object for the current post/page.
 */
if(!function_exists('minima_inner_custom_box')){
function minima_inner_custom_box( $post ) {

    // Add an nonce field so we can check for it later.
    wp_nonce_field( 'minima_inner_custom_box', 'minima_inner_custom_box_nonce' );

    /*
     * Use get_post_meta() to retrieve an existing value
     * from the database and use the value for the form.
     */
    $value=array();
    if($post->post_type=="page"){
        $value['_hide_page'] = get_post_meta( $post->ID, '_minima_hide_page_title', true );
        $value['_display_featured_boxes'] = get_post_meta( $post->ID, '_minima_display_featured_boxes', true );
    }
    $value['_page_slides'] = get_post_meta( $post->ID, '_minima_page_slides', true );
    if(!empty($value['_page_slides'])){
        foreach($value['_page_slides'] as $key=>$slide){
            $value['_page_slides'][$key]->image=  wp_get_attachment_url($slide->attachment);
        }
    }
    ?>
    <table class="form-table">
        <?php if($post->post_type=='page') { //only show this option for pages?>
            <tr valign="top">
                <th scope="row"><?php
                    echo '<label for="minima_hide_page_title">';
                    _e( "Hide page title", 'minima' );
                    echo '</label> </th>';
                    echo '<td><input type="checkbox" id="minima_hide_page_title" name="minima_hide_page_title"'.(($value['_hide_page'])?'checked="checked" ':'').' size="25" /></td>';
                    ?>
            </tr>
            <tr valign="top">
                <th scope="row"><?php
                    echo '<label for="minima_display_featured_boxes">';
                    _e( "Display featured boxes", 'minima' );
                    echo '</label> </th>';
                    echo '<td><input type="checkbox" id="minima_display_featured_boxes" name="minima_display_featured_boxes"'.(($value['_display_featured_boxes'])?'checked="checked" ':'').' size="25" /></td>';
                    ?>
            </tr>
        <?php } ?>
        <tr valign="">
            <th scope="row"><?php
                echo '<label for="add_new_slide">';
                _e( "Slides", 'minima' );
                echo '</label> </th>';
                echo '<td>
                <button id="add_new_slide" class="button-primary">'.__( "Add a slide","minima").'</button>
                <em>'.__( "Please add minimum two slides.","minima").'</em>
                <div id="min-slider-editor">
                    <div class="no-items">'.__("No slides found","minima").'</div>
                    <input type="hidden" id="min-slider-slides" name="minima_slider_slides" val="">
                </div>
                </td>';
                ?>
        </tr>
    </table>
<script type="text/javascript">
    window.minima_page_slides=<?php echo (!empty($value['_page_slides']))?json_encode((object)$value['_page_slides'], JSON_HEX_QUOT):'{}'; ?>;
</script>
<?php
}
}
/** following function validates slides sent by slider editor
 *  The function checks and filter following fields
 *  attachment - must be a number
 *  url - filter using esc_url
 *  title filter using sanitize_text
 * @param array $slides input array
 * @return array $c_slides filtered list of slides to be stored in post meta
 * */
if(!function_exists('minima_validate_slides')){
    function minima_validate_slides($slides=array()){
        $c_slides=array();
        $i=1;
        foreach($slides as $key=>$slide){
            if(is_numeric($slide->attachment)){
                $c_slides[$i]=(object)array(
                    'attachment'=>$slide->attachment,
                    'title'=>sanitize_text_field($slide->title),
                    'url'=>esc_url_raw($slide->url),
                );
                $i++;
            }
        }
        return $c_slides;
    }
}
/**
 * When the post is saved, saves our custom data.
 *
 * @param int $post_id The ID of the post being saved.
 */
if(!function_exists('minima_save_postdata')){
function minima_save_postdata( $post_id ) {
    /*
     * We need to verify this came from the our screen and with proper authorization,
     * because save_post can be triggered at other times.
     */

    // Check if our nonce is set.
    if ( ! isset( $_POST['minima_inner_custom_box_nonce'] ) )
        return $post_id;

    $nonce = $_POST['minima_inner_custom_box_nonce'];

    // Verify that the nonce is valid.
    if ( ! wp_verify_nonce( $nonce, 'minima_inner_custom_box' ) )
        return $post_id;

    // If this is an autosave, our form has not been submitted, so we don't want to do anything.
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
        return $post_id;

    // Check the user's permissions.
    if ( 'page' == $_POST['post_type'] ||'minima-fb' == $_POST['post_type']) {

        if ( ! current_user_can( 'edit_page', $post_id ) )
            return $post_id;

    } else {

        if ( ! current_user_can( 'edit_post', $post_id ) )
            return $post_id;
    }

    /* OK, its safe for us to save the data now. */

    if('page'==$_POST['post_type']||'post'==$_POST['post_type']){
        minima_save_page_meta($post_id);
    }
    if('minima-fb' == $_POST['post_type']){
        minima_save_featured_meta($post_id);
    }
}
}
if(!function_exists('minima_save_page_meta')){
function minima_save_page_meta($post_id){
    $my_data=array();
    if($_POST['post_type']=='page'){//check and update page title prefrence
        $mydata['_hide_title']=isset( $_POST['minima_hide_page_title'] )?1:0;
        $mydata['_display_featured_boxes']=isset( $_POST['minima_display_featured_boxes'] )?1:0;
        update_post_meta( $post_id, '_minima_hide_page_title', $mydata['_hide_title'] );
        update_post_meta( $post_id, '_minima_display_featured_boxes', $mydata['_display_featured_boxes'] );
    }
    //check if slides are available if yes validate and store
    if(isset($_POST['minima_slider_slides'])){
        //check if data is not empty and call validation function
        $data=  stripslashes($_POST['minima_slider_slides']);
        $slides=  (array)json_decode($data);
        if($_POST['minima_slider_slides']!=''){
            $slides=minima_validate_slides($slides);
            update_post_meta( $post_id, '_minima_page_slides', $slides);
        }
    }
}
}
add_action( 'save_post', 'minima_save_postdata' );
/** add custom post types for featured boxes */
if(!function_exists('minima_featured_init')){
function minima_featured_init() {
    $labels = array(
        'name'               => __('Featured boxes','minima'),
        'singular_name'      => __('Featured box','minima'),
        'add_new'            => __('Add New','minima'),
        'add_new_item'       => __('Add New featured box','minima'),
        'edit_item'          => __('Edit featured box','minima'),
        'new_item'           => __('New featured box','minima'),
        'all_items'          => __('All featured boxes','minima'),
        'view_item'          => __('View featured boxes','minima'),
        'search_items'       => __('Search featured boxes','minima'),
        'not_found'          => __('No featured boxes found','minima'),
        'not_found_in_trash' => __('No featured boxes found in Trash','minima'),
        'parent_item_colon'  => '',
        'menu_name'          => __('Featured boxes','minima')
    );

    $args = array(
        'labels'             => $labels,
        'public'             => false,
        'publicly_queryable' => false,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'book' ),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => null,
        'register_meta_box_cb' => 'minima_featured_metaboxes',
        'supports'           => array( 'title' )
    );

    register_post_type( 'minima-fb', $args );
}
}
add_action( 'init', 'minima_featured_init' );
if(!function_exists('minima_featured_metaboxes')){
function minima_featured_metaboxes(){
    add_meta_box('minima_featured_meta', __('Featured box details','minima'), 'minima_featured_meta_box', 'minima-fb', 'normal', 'default');
}
}
if(!function_exists('minima-featured_meta_box')){
function minima_featured_meta_box($post){

    // Add an nonce field so we can check for it later.
    wp_nonce_field( 'minima_inner_custom_box', 'minima_inner_custom_box_nonce' );

    /*
     * Use get_post_meta() to retrieve an existing value
     * from the database and use the value for the form.
     */
    $value=array();
    $value['minima_fb_image'] = get_post_meta( $post->ID, '_minima_fb_image', true );
    $value['minima_fb_url'] = get_post_meta( $post->ID, '_minima_fb_url', true );
    $value['minima_fb_description'] = get_post_meta( $post->ID, '_minima_fb_description', true );
    ?>
    <table class="form-table">
        <tr valign="top">
            <th scope="row">
                <label for="minima-featured-image-upload">
                    <?php _e('Featured box image','minima'); ?>
                </label> </th>
                <td>
                    <?php
                    if($value['minima_fb_image']){
                    ?>
                        <img class="sp-img-preview" src="<?php echo wp_get_attachment_url($value['minima_fb_image']); ?>"/><br/>
                        <button class="button-secondary remove-image"><?php _e('Remove image','minima'); ?></button>
                    <?php } ?>
                    <button class="button-primary" id="minima-featured-image-upload"><?php _e('Upload image','minima'); ?></button>

                    <input type="hidden" name="minima_fb_image" class="minima-fb-image" value="<?php echo $value['minima_fb_image'];?>"/>
                </td>
        </tr>
        <tr valign="top">
            <th scope="row">
                <label for="minima_fb_url">
                    <?php _e('Featured box URL','minima'); ?>
                </label>
            </th>
                <td><input type="text" id="minima_fb_url" name="minima_fb_url" size="25" value="<?php echo esc_url($value['minima_fb_url']) ?>" /></td>
        </tr>

        <tr valign="top">
            <th scope="row">
                <label for="minima_fb_description">
                    <?php _e('Featured box description','minima'); ?>
                </label>
            </th>
            <td><textarea id="minima_fb_description" name="minima_fb_description"><?php echo sanitize_text_field($value['minima_fb_description']); ?></textarea> </td>
        </tr>
    </table>
<?php
}
}
if(!function_exists('minima_save_featured_meta')){
function minima_save_featured_meta($post_id ) {

    if('minima-fb'==$_POST['post_type']){
        /* OK, its safe for us to save the data now. */

        // Sanitize user input.
        $mydata['minima_fb_image']=  is_numeric($_POST['minima_fb_image'])?$_POST['minima_fb_image']:0;
        $mydata['minima_fb_url']=  esc_url_raw( $_POST['minima_fb_url'] );
        $mydata['minima_fb_description']=  sanitize_text_field( $_POST['minima_fb_description'] );
        // Update the meta field in the database.
        update_post_meta( $post_id, '_minima_fb_image', $mydata['minima_fb_image'] );
        update_post_meta( $post_id, '_minima_fb_url', $mydata['minima_fb_url']);
        update_post_meta( $post_id, '_minima_fb_description', $mydata['minima_fb_description']);
    }
}
}