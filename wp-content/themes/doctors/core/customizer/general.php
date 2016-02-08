<?php
function tally_customizer_general_register($wp_customize){
	$wp_customize->add_panel( 'tally_general', array(
		'title' => 'General',
		'priority' => 10,
		'description' => 'Navigation / Site Title & Tagline / Static Front Page',
	));
	
	/**
	* Logo/Site Title & Tagline Section
	*/
	$title_tagline_section = $wp_customize->get_section( 'title_tagline' ); // Get Section
	$title_tagline_section->panel = 'tally_general'; // Add panel
	$title_tagline_section->priority = 10; // Adjust Priority

	/**
	 * Static Front Page Section
	*/
	$static_front_page_section = $wp_customize->get_section( 'static_front_page' ); // Get Section
	$static_front_page_section->panel = 'tally_general'; // Add panel
	$static_front_page_section->priority = 20; // Adjust Priority

	
	
	/*	Site Logo
	~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
	$wp_customize->add_section( 'tally_site_logos', 
		array(
			'title' => __( 'Logo', 'doctors' ),
            'description' => '',
			'panel' => 'tally_general',
			'priority' => 10,
		) 
	);
	
	$prefix = 'tally_header_';
	$section = 'tally_site_logos';
	
	/*-~- Upload Logo -~-*/
	$uid = $prefix.'logo';
	$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'esc_url_raw') );
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, $uid, 
		array(
			'label' => __( 'Upload Logo', 'doctors' ),
			'section' => $section,
			'settings' => $uid,
			'priority' => 10,
		)) 
	);
	
	if ( !function_exists( 'has_site_icon' ) ) {
		/*-~- Upload Favicon -~-*/
		$uid = $prefix.'favicon';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'esc_url_raw') );
		$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, $uid, 
			array(
				'label' => __( 'Upload Favicon sss', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
			)) 
		);
	}

	
	/*	Site Logo
	~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
	if(tally_config('type') != 'none'){
		$wp_customize->add_section( 'tally_site_customScript', 
			array(
				'title' => __( 'Customization', 'doctors' ),
				'description' => '',
				'panel' => 'tally_general',
				'priority' => 40,
			) 
		);
		
		$prefix = 'tally_customScript_';
		$section = 'tally_site_customScript';
		
		/*-~- Custom CSS -~-*/
		$uid = $prefix.'css';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Textarea($wp_customize, $uid, 
			array(
				'label' => __( 'Custom CSS', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'css_class' => 'biz',
			)) 
		);
		/*-~- Custom Header JavaScript -~-*/
		$uid = $prefix.'jsHeader';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Textarea($wp_customize, $uid, 
			array(
				'label' => __( 'Custom Header JavaScript', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'css_class' => 'biz',
			)) 
		);
		/*-~- Custom Header JavaScript -~-*/
		$uid = $prefix.'jsFooter';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Textarea($wp_customize, $uid, 
			array(
				'label' => __( 'Custom Footer JavaScript', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'css_class' => 'biz',
			)) 
		);
	}
}
add_action( 'customize_register' , 'tally_customizer_general_register' );