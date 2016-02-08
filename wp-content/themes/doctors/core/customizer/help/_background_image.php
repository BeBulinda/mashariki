<?php
	/*-~- Background Image -~-*/
	$uid = $prefix.'bgImage';
	$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, $uid, 
		array(
			'label' => __( 'Background Image', 'doctors' ),
			'section' => $section,
			'settings' => $uid,
			'priority' => 10,
		)) 
	);
	
	/*-~- Background Image Repeat -~-*/
	$uid = $prefix.'bgImage_repeat';
	$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
	$wp_customize->add_control( new tally_Customize_Control_Select($wp_customize, $uid, 
		array(

			'label' => __( 'Background Image Repeat', 'doctors' ),
			'section' => $section,
			'settings' => $uid,
			'priority' => 10,
			'type'       => 'select',
			'css_class' => 'biz',
            'choices'    => array(
                'no-repeat'  => __('No Repeat', 'doctors'),
                'repeat'     => __('Tile', 'doctors'),
                'repeat-x'   => __('Tile Horizontally', 'doctors'),
                'repeat-y'   => __('Tile Vertically', 'doctors'),
            ),
		)) 
	);
	
	/*-~- Background Image Position -~-*/
	$uid = $prefix.'bgImage_position';
	$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
	$wp_customize->add_control( new tally_Customize_Control_Select($wp_customize, $uid, 
		array(
			'label' => __( 'Background Image Position', 'doctors' ),
			'section' => $section,
			'settings' => $uid,
			'priority' => 10,
			'type'       => 'select',
			'css_class' => 'biz',
            'choices'    => array(
                'top left'  => __('Top Left', 'doctors'),
                'top right'     => __('Top Right', 'doctors'),
                'top center'   => __('Top Center', 'doctors'),
                'center center'   => __('Center Center', 'doctors'),
				'bottom left'  => __('Top Left', 'doctors'),
                'bottom right'     => __('Top Right', 'doctors'),
                'bottom center'   => __('Top Center', 'doctors'),
            ),
		)) 
	);
	
	/*-~- Background Image Attachment -~-*/
	$uid = $prefix.'bgImage_attachment';
	$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
	$wp_customize->add_control( new tally_Customize_Control_Select($wp_customize, $uid, 
		array(
			'label' => __( 'Background Image Attachment', 'doctors' ),
			'section' => $section,
			'settings' => $uid,
			'priority' => 10,
			'type'       => 'select',
			'css_class' => 'biz',
            'choices'    => array(
				'scroll'     => __('Scroll', 'doctors'),
                'fixed'      => __('Fixed', 'doctors'),
            ),
		)) 
	);
	
	/*-~- Background Image Size -~-*/
	$uid = $prefix.'bgImage_size';
	$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
	$wp_customize->add_control( new tally_Customize_Control_Text($wp_customize, $uid, 
		array(
			'label' => __( 'Background Image Size', 'doctors' ),
			'section' => $section,
			'settings' => $uid,
			'priority' => 10,
			'type'       => 'text',
			'css_class' => 'biz',
		)) 
	);