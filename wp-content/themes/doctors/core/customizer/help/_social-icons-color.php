<?php
if(tally_config('type') != 'none'){
	/*-~- Icon Color -~-*/
	$uid = $prefix.'social_icon';
	$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
	$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $uid, 
		array(
			'label' => __( 'Social Icon Color', 'doctors' ),
			'section' => $section,
			'settings' => $uid,
			'priority' => 10,
			'css_class' => 'biz',
		)) 
	);
	
	
	/*-~- Icon Color Background -~-*/
	$uid = $prefix.'social_icon_bg';
	$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
	$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $uid, 
		array(
			'label' => __( 'Social Icon Background Color', 'doctors' ),
			'section' => $section,
			'settings' => $uid,
			'priority' => 10,
			'css_class' => 'biz',
		)) 
	);
	
	/*-~- Icon Hover Color -~-*/
	$uid = $prefix.'social_icon_hover';
	$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
	$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $uid, 
		array(
			'label' => __( 'Social Icon Hover Color', 'doctors' ),
			'section' => $section,
			'settings' => $uid,
			'priority' => 10,
			'css_class' => 'biz',
		)) 
	);
	
	
	/*-~- Icon Hover Color Background -~-*/
	$uid = $prefix.'social_icon_hover_bg';
	$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
	$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $uid, 
		array(
			'label' => __( 'Social Icon Hover Background', 'doctors' ),
			'section' => $section,
			'settings' => $uid,
			'priority' => 10,
			'css_class' => 'biz',
		)) 
	);
}