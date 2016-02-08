<?php
if(tally_config('type') != 'none'){
	$uid = $prefix.'enable';
	$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
	$wp_customize->add_control( new tally_Customize_Control_Select($wp_customize, $uid, 
		array(
			'label' => __( 'Enable Social Icons', 'doctors' ),
			'section' => $section,
			'settings' => $uid,
			'priority' => 10,
			'description' => __('Select Yes, if you want to display the Social Icons in the header.', 'doctors'),
			'type' => 'select',
			'css_class' => 'biz',
			'choices'    => array(
				'yes'	=> __('Yes', 'doctors'),
				'no'	=> __('No', 'doctors'),
			),
		)) 
	);
}

$uid = $prefix.'facebook';
$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
$wp_customize->add_control( new WP_Customize_Control($wp_customize, $uid, 
	array(
		'label' => __( 'Facebook', 'doctors' ),
		'section' => $section,
		'settings' => $uid,
		'priority' => 10,
		'description' =>'',
		'type' => 'text',
	)) 
);
$uid = $prefix.'twitter';
$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
$wp_customize->add_control( new WP_Customize_Control($wp_customize, $uid, 
	array(
		'label' => __( 'Twitter', 'doctors' ),
		'section' => $section,
		'settings' => $uid,
		'priority' => 10,
		'description' =>'',
		'type' => 'text',
	)) 
);
$uid = $prefix.'youtube';
$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
$wp_customize->add_control( new WP_Customize_Control($wp_customize, $uid, 
	array(
		'label' => __( 'Youtube', 'doctors' ),
		'section' => $section,
		'settings' => $uid,
		'priority' => 10,
		'description' =>'',
		'type' => 'text',
	)) 
);
$uid = $prefix.'instagram';
$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
$wp_customize->add_control( new WP_Customize_Control($wp_customize, $uid, 
	array(
		'label' => __( 'Instagram', 'doctors' ),
		'section' => $section,
		'settings' => $uid,
		'priority' => 10,
		'description' =>'',
		'type' => 'text',
	)) 
);
$uid = $prefix.'linkedin';
$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
$wp_customize->add_control( new WP_Customize_Control($wp_customize, $uid, 
	array(
		'label' => __( 'Linkedin', 'doctors' ),
		'section' => $section,
		'settings' => $uid,
		'priority' => 10,
		'description' =>'',
		'type' => 'text',
	)) 
);