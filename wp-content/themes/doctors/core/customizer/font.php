<?php
function tally_customizer_font_register($wp_customize){
	$wp_customize->add_panel( 'tally_font', array(
		'title' => 'Typography',
		'description' => 'Manage font and typography.',
	));
	
	$wp_customize->add_section( 'tally_font_size', 
		array(
			'title' => __( 'Font Size', 'doctors' ),
            'description' => '',
			'panel' => 'tally_font',
		) 
	);
	$wp_customize->add_section( 'tally_font_source', 
		array(
			'title' => __( 'Font Source', 'doctors' ),
            'description' => __( 'Select a font family source/', 'doctors' ),
			'panel' => 'tally_font',
		) 
	);
	$wp_customize->add_section( 'tally_google_font', 
		array(
			'title' => __( 'Google Font', 'doctors' ),
            'description' => __('Load Google font in the theme.', 'doctors'),
			'panel' => 'tally_font',
		) 
	);
	$wp_customize->add_section( 'tally_web_font', 
		array(
			'title' => __( 'Web Font', 'doctors' ),
            'description' => __('You can upload your own web font.', 'doctors'),
			'panel' => 'tally_font',
		) 
	);
	
	
	
	
	/*	Font Size
	~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
	$prefix = 'tally_font_size_';
	$section = 'tally_font_size';
	
	/*-~- Info -~-*/
	if(tally_config('type') == 'none'){ 
		$uid = $prefix.'info1';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_TextBlock($wp_customize, $uid, 
			array(
				'label' => '',
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'description' => 'Check out the <a href="'.tally_config('theme_url').'" target="_blank" style="color:red;">PRO version</a> <br>for full control over Typography.',
			)) 
		);
	}
	
	/*-~- H1 Font size -~-*/
	$uid = $prefix.'h1';
	$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, $uid, 
		array(
			'label' => __( 'H1 Font size', 'doctors' ),
			'section' => $section,
			'settings' => $uid,
			'priority' => 10,
			'type' => 'text',
		)) 
	);
	
	/*-~- H2 Font size -~-*/
	$uid = $prefix.'h2';
	$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, $uid, 
		array(
			'label' => __( 'H2 Font size', 'doctors' ),
			'section' => $section,
			'settings' => $uid,
			'priority' => 10,
			'type' => 'text',
		)) 
	);
	
	/*-~- H3 Font size -~-*/
	$uid = $prefix.'h3';
	$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, $uid, 
		array(
			'label' => __( 'H3 Font size', 'doctors' ),
			'section' => $section,
			'settings' => $uid,
			'priority' => 10,
			'type' => 'text',
		)) 
	);
	
	/*-~- H4 Font size -~-*/
	if(tally_config('type') != 'none'){
		$uid = $prefix.'h4';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, $uid, 
			array(
				'label' => __( 'H4 Font size', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'type' => 'text',
			)) 
		);
	}
	
	/*-~- H5 Font size -~-*/
	if(tally_config('type') != 'none'){
		$uid = $prefix.'h5';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, $uid, 
			array(
				'label' => __( 'H5 Font size', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'type' => 'text',
			)) 
		);
	}
	
	/*-~- H6 Font size -~-*/
	if(tally_config('type') != 'none'){
		$uid = $prefix.'h6';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, $uid, 
			array(
				'label' => __( 'H6 Font size', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'type' => 'text',
			)) 
		);
	}
	
	/*-~- Body Font size -~-*/
		$uid = $prefix.'body';
		$wp_customize->add_setting( $uid, array('default' =>tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, $uid, 
			array(
				'label' => __( 'Body Font size', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'type' => 'text',
			)) 
		);
	
	
	/*	Font source
	~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
	$prefix = 'tally_font_source_';
	$section = 'tally_font_source';
	
	/*-~- Select A Font source -~-*/
	if(tally_config('type') != 'none'){
		$uid = $prefix.'list';
		$wp_customize->add_setting( $uid, array('default' =>tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, $uid, 
			array(
				'label' => __( 'Select a Font Source', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'type' => 'select',
				'transport'         => 'postMessage',
				'choices'    => array(
					'none'     => __('None', 'doctors'),
					'google'     => __('Google font', 'doctors'),
				),
				'description' => __('select a fornt type.', 'doctors').'<i class="tally-showhide-select"></i>',
			)) 
		);
	}
	
	
	
	/*	Google Font
	~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
	$prefix = 'tally_font_googleFont_';
	$section = 'tally_google_font';
	
	/*-~- Select A Font source -~-*/
	if(tally_config('type') != 'none'){
		$uid = $prefix.'heading';
		$wp_customize->add_setting( $uid, array('default' =>tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Textarea($wp_customize, $uid, 
			array(
				'label' => __( 'Font Link of the heading ', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'type' => 'textarea',
				'description' => __('Copy the Google Font Family from <a href="http://www.google.com/fonts" target="_blank">http://www.google.com/fonts</a> like: <strong>Open+Sans:400,700,600</strong>', 'doctors'),
			)) 
		);
		$uid = $prefix.'text';
		$wp_customize->add_setting( $uid, array('default' =>tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Textarea($wp_customize, $uid, 
			array(
				'label' => __( 'Body Text Font ', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'type' => 'textarea',
				'description' => __('Copy the Google Font Family from <a href="http://www.google.com/fonts" target="_blank">http://www.google.com/fonts</a> like: <strong>Open+Sans:400,700,600</strong>', 'doctors'),
			)) 
		);	
	}
	
		
}
add_action( 'customize_register' , 'tally_customizer_font_register' );
