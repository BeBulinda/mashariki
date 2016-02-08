<?php

function lucy_customizer_config() {
	
    $url  = get_stylesheet_directory_uri() . '/lib/kirki/';

    /**
     * If you need to include Kirki in your theme,
     * then you may want to consider adding the translations here
     * using your textdomain.
     * 
     * If you're using Kirki as a plugin then you can remove these.
     */

    $strings = array(
        'background-color' => __( 'Background Color', 'lucy' ),
        'background-image' => __( 'Background Image', 'lucy' ),
        'no-repeat' => __( 'No Repeat', 'lucy' ),
        'repeat-all' => __( 'Repeat All', 'lucy' ),
        'repeat-x' => __( 'Repeat Horizontally', 'lucy' ),
        'repeat-y' => __( 'Repeat Vertically', 'lucy' ),
        'inherit' => __( 'Inherit', 'lucy' ),
        'background-repeat' => __( 'Background Repeat', 'lucy' ),
        'cover' => __( 'Cover', 'lucy' ),
        'contain' => __( 'Contain', 'lucy' ),
        'background-size' => __( 'Background Size', 'lucy' ),
        'fixed' => __( 'Fixed', 'lucy' ),
        'scroll' => __( 'Scroll', 'lucy' ),
        'background-attachment' => __( 'Background Attachment', 'lucy' ),
        'left-top' => __( 'Left Top', 'lucy' ),
        'left-center' => __( 'Left Center', 'lucy' ),
        'left-bottom' => __( 'Left Bottom', 'lucy' ),
        'right-top' => __( 'Right Top', 'lucy' ),
        'right-center' => __( 'Right Center', 'lucy' ),
        'right-bottom' => __( 'Right Bottom', 'lucy' ),
        'center-top' => __( 'Center Top', 'lucy' ),
        'center-center' => __( 'Center Center', 'lucy' ),
        'center-bottom' => __( 'Center Bottom', 'lucy' ),
        'background-position' => __( 'Background Position', 'lucy' ),
        'background-opacity' => __( 'Background Opacity', 'lucy' ),
        'ON' => __( 'ON', 'lucy' ),
        'OFF' => __( 'OFF', 'lucy' ),
        'all' => __( 'All', 'lucy' ),
        'cyrillic' => __( 'Cyrillic', 'lucy' ),
        'cyrillic-ext' => __( 'Cyrillic Extended', 'lucy' ),
        'devanagari' => __( 'Devanagari', 'lucy' ),
        'greek' => __( 'Greek', 'lucy' ),
        'greek-ext' => __( 'Greek Extended', 'lucy' ),
        'khmer' => __( 'Khmer', 'lucy' ),
        'latin' => __( 'Latin', 'lucy' ),
        'latin-ext' => __( 'Latin Extended', 'lucy' ),
        'vietnamese' => __( 'Vietnamese', 'lucy' ),
        'serif' => _x( 'Serif', 'font style', 'lucy' ),
        'sans-serif' => _x( 'Sans Serif', 'font style', 'lucy' ),
        'monospace' => _x( 'Monospace', 'font style', 'lucy' ),
    );	

	$args = array(
  
        // Change the logo image. (URL) Point this to the path of the logo file in your theme directory
        // The developer recommends an image size of about 250 x 250
        
		'logo_image'   => get_template_directory_uri() . '/assets/images/logo.png',
  
        // The color of active menu items, help bullets etc.
        'color_active' => '#95c837',
		
		// Color used on slider controls and image selects
		'color_accent' => '#e7e7e7',
	
        // Color used for secondary elements and desable/inactive controls
        'color_light'  => '#e7e7e7',
  
        // Color used for button-set controls and other elements
        'color_select' => '#34495e',
		 
        // For the parameter here, use the handle of your stylesheet you use in wp_enqueue
        'stylesheet_id' => 'customize-styles', 
		
        // Only use this if you are bundling the plugin with your theme (see above)
        'url_path'     => get_template_directory_uri() . '/lib/kirki/',

        'textdomain'   => 'lucy',
		
        'i18n'         => $strings,		
	);
	return $args;
}
add_filter( 'kirki/config', 'lucy_customizer_config' );


/**
 * Create the customizer panels and sections
 */
add_action( 'customize_register', 'lucy_add_panels_and_sections' ); 
function lucy_add_panels_and_sections( $wp_customize ) {
	
    // Add Sections
	
    $wp_customize->add_section('general',   array('title' => __('General Settings', 'lucy'),            'description' => '',    'priority' => 130,));
    $wp_customize->add_section('homebox',   array('title' => __('Home Box', 'lucy'),                    'description' => '',    'priority' => 130,));	
	$wp_customize->add_section('promo',     array('title' => __('About Lucy Theme', 'lucy'),          'description' => '',    'priority' => 170,));
}


function lucy_custom_setting( $controls ) {

     $copyrights = __('Copyright &copy; 2015 '.get_bloginfo('name'). ' All Rights Reserved.', 'lucy');  

     // General Settings	 
	 
	  $controls[] = array('label' => __('Upload logo', "lucy"),                     'setting' => 'pp_logo_upload',           'type' => 'upload',          'description' => '',                               'default' => '',                                                        'section'     => 'general');	 
	  $controls[] = array('label' => __('Text Logo 1', "lucy"),                     'setting' => 'text_logo_1',              'type' => 'text',            'description' => __( 'Add text color for logo', "lucy"),        'default' => __( 'Lucy', "lucy"),                                       'section'     => 'general');
	  $controls[] = array('label' => __('Text Logo 2', "lucy"),                     'setting' => 'text_logo_2',              'type' => 'text',            'description' => __( 'Add text black for logo', "lucy"),        'default' => __( 'Themes', "lucy"),                                     'section'     => 'general');	
	  $controls[] = array('label' => __('Copyrights text', "lucy"),                 'setting' => 'pp_copyrights',            'type' => 'text',            'description' => __( 'Text in footer left', "lucy"),            'default' => $copyrights,                                               'section'     => 'general');  
	  $controls[] = array('label' => __('Image Top Box', "lucy"),                   'setting' => 'image_top_box',            'type' => 'upload',          'description' => '',                                            'default' => '',                                                        'section'     => 'general');		   
	  $controls[] = array('label' => __('Title Top Box', "lucy"),                   'setting' => 'title_top_box',            'type' => 'text',            'description' => '',                                            'default' => __( 'Create literally any type of website', "lucy"),       'section'     => 'general');	
	  $controls[] = array('label' => __('Sub Title Top Box', "lucy"),               'setting' => 'sub_title_top_box',        'type' => 'text',            'description' => '',                                            'default' => __( 'The only limit is your imagination!', "lucy"),        'section'     => 'general');			 
	  $controls[] = array('label' => __('Top Box Button 1 text', "lucy"),           'setting' => 'top_box_button_1_text',    'type' => 'text',            'description' => '',                                            'default' => __( 'View more', "lucy"),                                  'section'     => 'general');	
	  $controls[] = array('label' => __('Top Box Button 1 link', "lucy"),           'setting' => 'top_box_button_1_link',    'type' => 'text',            'description' => '',                                            'default' => '',                                                        'section'     => 'general');			 
	  $controls[] = array('label' => __('Top Box Button 2 text', "lucy"),           'setting' => 'top_box_button_2_text',    'type' => 'text',            'description' => '',                                            'default' => __( 'Find out mores', "lucy"),                             'section'     => 'general');	
	  $controls[] = array('label' => __('Top Box Button 2 link', "lucy"),           'setting' => 'top_box_button_2_link',    'type' => 'text',            'description' => '',                                            'default' => '',                                                        'section'     => 'general');	 
	  $controls[] = array('label' => __('Content of Box', "lucy"),                  'setting' => 'blog_title',               'type' => 'text',            'description' => '',                                            'default' => __( 'Last News', "lucy"),                             'section'     => 'general');	 
	  $controls[] = array('label' => __('Blog page title', "lucy"),                 'setting' => 'pp_blog_page',             'type' => 'text',            'description' => '',                                            'default' => __( 'Blog', "lucy"),                                   'section'     => 'general');
	 
     // Home Box 
	 
 	  $controls[] = array('label' => __( 'Enter the code for Icon Box 1', "lucy"),  'setting' => 'icon1',                    'type' => 'text',             'default' => 'mobile',                'section'     => 'homebox',          'description' => __( 'Select a icons in this list http://fortawesome.github.io/Font-Awesome/icons/ and enter the code', "lucy"));			
 	  $controls[] = array('label' => __( 'Title Box 1', "lucy"),                    'setting' => 'title1',                   'type' => 'text',             'default' => 'Cras dignissim',       'section'     => 'homebox',          'description' => '');			
 	  $controls[] = array('label' => __( 'Content Box 1', "lucy"),                  'setting' => 'content1',                 'type' => 'textarea',         'default' => '',                      'section'     => 'homebox',          'description' => '');			
      $controls[] = array('label' => __( 'Link box 1', "lucy"),                     'setting' => 'link1',                    'type' => 'text',             'default' => '',                      'section'     => 'homebox',          'description' => '');	 

 	  $controls[] = array('label' => __( 'Enter the code for Icon Box 2', "lucy"),  'setting' => 'icon2',                    'type' => 'text',             'default' => 'shirtsinbulk',                'section'     => 'homebox',          'description' => __( 'Select a icons in this list http://fortawesome.github.io/Font-Awesome/icons/ and enter the code', "lucy"));			
 	  $controls[] = array('label' => __( 'Title Box 2', "lucy"),                    'setting' => 'title2',                   'type' => 'text',             'default' => 'Cras dignissim',        'section'     => 'homebox',          'description' => '');			
 	  $controls[] = array('label' => __( 'Content Box 2', "lucy"),                  'setting' => 'content2',                 'type' => 'textarea',         'default' => '',                      'section'     => 'homebox',          'description' => '');			
      $controls[] = array('label' => __( 'Link box 2', "lucy"),                     'setting' => 'link2',                    'type' => 'text',             'default' => '',                      'section'     => 'homebox',          'description' => '');
	 
 	  $controls[] = array('label' => __( 'Enter the code for Icon Box 3', "lucy"),  'setting' => 'icon3',                    'type' => 'text',             'default' => 'diamond',                'section'     => 'homebox',          'description' => __( 'Select a icons in this list http://fortawesome.github.io/Font-Awesome/icons/ and enter the code', "lucy"));			
 	  $controls[] = array('label' => __( 'Title Box 3', "lucy"),                    'setting' => 'title3',                   'type' => 'text',             'default' => 'Cras dignissim',        'section'     => 'homebox',          'description' => '');
 	  $controls[] = array('label' => __( 'Content Box 3', "lucy"),                  'setting' => 'content3',                 'type' => 'textarea',         'default' => '',                      'section'     => 'homebox',          'description' => '');
      $controls[] = array('label' => __( 'Link box 3', "lucy"),                     'setting' => 'link3',                    'type' => 'text',             'default' => '',                      'section'     => 'homebox',          'description' => '');
	 
 	  $controls[] = array('label' => __( 'Enter the code for Icon Box 4', "lucy"),  'setting' => 'icon4',                    'type' => 'text',             'default' => 'bookmark-o',                'section'     => 'homebox',          'description' => __( 'Select a icons in this list http://fortawesome.github.io/Font-Awesome/icons/ and enter the code', "lucy"));			
 	  $controls[] = array('label' => __( 'Title Box 4', "lucy"),                    'setting' => 'title4',                   'type' => 'text',             'default' => 'Cras dignissim',        'section'     => 'homebox',          'description' => '');		
 	  $controls[] = array('label' => __( 'Content Box 4', "lucy"),                  'setting' => 'content4',                 'type' => 'textarea',         'default' => '',                      'section'     => 'homebox',          'description' => '');
      $controls[] = array('label' => __( 'Link box 4', "lucy"),                     'setting' => 'link4',                    'type' => 'text',             'default' => '',                      'section'     => 'homebox',          'description' => '');
	 
     // Promo
	 $controls[] = array('label' => __( 'Lucy Promo', 'lucy' ),                   'setting' => 'custompromo',              'type' => 'promo',                                                                         'section' => 'promo',              'priority' => 10);
	 	
     return $controls;
}
add_filter( 'kirki/controls', 'lucy_custom_setting' );

