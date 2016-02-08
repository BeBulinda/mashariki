<?php

/*	Address Section
************************************************************* */
$wp_customize->add_section( 'tally_site_header_address', 
	array(
		'title' => __( 'Header Address', 'doctors' ),
		'description' => '',
		'panel' => 'tally_headerFooter',
	) 
);

$prefix = 'tally_header_address_';
$section = 'tally_site_header_address';

if(tally_config('type') != 'none'){
	$uid = $prefix.'enable';
	$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field',) );
	$wp_customize->add_control( new tally_Customize_Control_Select($wp_customize, $uid, 
		array(
			'label' => __( 'Enable Address', 'doctors' ),
			'section' => $section,
			'settings' => $uid,
			'priority' => 10,
			'description' => __('Select Yes, if you want to display the address section in the header.', 'doctors'),
			'type' => 'select',
			'css_class' => 'biz',
			'choices'    => array(
				'yes'	=> __('Yes', 'doctors'),
				'no'	=> __('No', 'doctors'),
			),
		)) 
	);
}
$uid = $prefix.'1';
$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
$wp_customize->add_control( new WP_Customize_Control($wp_customize, $uid, 
	array(
		'label' => __( 'Address Line 1', 'doctors' ),
		'section' => $section,
		'settings' => $uid,
		'priority' => 10,
		'description' => '',
		'type' => 'text',
	)) 
);
$uid = $prefix.'2';
$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
$wp_customize->add_control( new WP_Customize_Control($wp_customize, $uid, 
	array(
		'label' => __( 'Address Line 2', 'doctors' ),
		'section' => $section,
		'settings' => $uid,
		'priority' => 10,
		'description' => '',
		'type' => 'text',
	)) 
);
if(tally_config('type') != 'none'){
	$uid = $prefix.'icon';
	$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
	$wp_customize->add_control( new tally_Customize_Control_Text($wp_customize, $uid, 
		array(
			'label' => __( 'Address Icon', 'doctors' ),
			'section' => $section,
			'settings' => $uid,
			'priority' => 10,
			'description' => '',
			'type' => 'text',
			'css_class' => 'biz',
		)) 
	);
}

/*	OpenTime Section
************************************************************* */
$wp_customize->add_section( 'tally_site_header_opentime', 
	array(
		'title' => __( 'Header OpenTime', 'doctors' ),
		'description' => '',
		'panel' => 'tally_headerFooter',
	) 
);

$prefix = 'tally_header_openTime_';
$section = 'tally_site_header_opentime';

if(tally_config('type') != 'none'){
	$uid = $prefix.'enable';
	$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
	$wp_customize->add_control( new tally_Customize_Control_Select($wp_customize, $uid, 
		array(
			'label' => __( 'Enable OpenTime', 'doctors' ),
			'section' => $section,
			'settings' => $uid,
			'priority' => 10,
			'description' => __('Select Yes, if you want to display the OpenTime section in the header.', 'doctors'),
			'type' => 'select',
			'css_class' => 'biz',
			'choices'    => array(
				'yes'	=> __('Yes', 'doctors'),
				'no'	=> __('No', 'doctors'),
			),
		)) 
	);
}
$uid = $prefix.'1';
$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
$wp_customize->add_control( new WP_Customize_Control($wp_customize, $uid, 
	array(
		'label' => __( 'OpenTime Line 1', 'doctors' ),
		'section' => $section,
		'settings' => $uid,
		'priority' => 10,
		'description' => '',
		'type' => 'text',
	)) 
);
$uid = $prefix.'2';
$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
$wp_customize->add_control( new WP_Customize_Control($wp_customize, $uid, 
	array(
		'label' => __( 'OpenTime Line 2', 'doctors' ),
		'section' => $section,
		'settings' => $uid,
		'priority' => 10,
		'description' => '',
		'type' => 'text',
	)) 
);
if(tally_config('type') != 'none'){
	$uid = $prefix.'icon';
	$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
	$wp_customize->add_control( new tally_Customize_Control_Text($wp_customize, $uid, 
		array(
			'label' => __( 'OpenTime Icon', 'doctors' ),
			'section' => $section,
			'settings' => $uid,
			'priority' => 10,
			'description' => '',
			'type' => 'text',
			'css_class' => 'biz',
		)) 
	);
}


/*	Phone Section
************************************************************* */
$wp_customize->add_section( 'tally_site_header_phone', 
	array(
		'title' => __( 'Header Phone Number', 'doctors' ),
		'description' => '',
		'panel' => 'tally_headerFooter',
	) 
);
$prefix = 'tally_header_';
$section = 'tally_site_header_phone';

$uid = $prefix.'phone';
$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
$wp_customize->add_control( new WP_Customize_Control($wp_customize, $uid, 
	array(
		'label' => __( 'Phone Number', 'doctors' ),
		'section' => $section,
		'settings' => $uid,
		'priority' => 10,
		'description' =>'',
		'type' => 'text',
	)) 
);


/*	Social Icons
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
$wp_customize->add_section( 'tally_site_header_socialIcons', 
	array(
		'title' => __( 'Header Social Icons', 'doctors' ),
		'description' => '',
		'panel' => 'tally_headerFooter',
	) 
);
$prefix = 'tally_header_socialIcon_';
$section = 'tally_site_header_socialIcons';
include(TALLY_CUSTOMIZE_DRI.'/help/_social-icons.php');


if(tally_config('type') != 'none'){
	/*	Header Color
	~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
	$wp_customize->add_section( 'tally_header_color', 
		array(
			'title' => __( 'Header Color', 'doctors' ),
			'description' => __('Customize the header color of the theme.', 'doctors'),
			'panel' => 'tally_color',
		) 
	);
	
	$prefix = 'tally_color_header_';
	$section = 'tally_header_color';
		include(TALLY_CUSTOMIZE_DRI.'/help/_text_color.php');
		include(TALLY_CUSTOMIZE_DRI.'/help/_text_color_meta.php');
		include(TALLY_CUSTOMIZE_DRI.'/help/_border_color.php');
		
		$uid = $prefix.'icon';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $uid, 
			array(
				'label' => __( 'Icon Color', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'css_class' => 'biz',
			)) 
		);
		$uid = $prefix.'iconBg';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $uid, 
			array(
				'label' => __( 'Icon Background Color', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'css_class' => 'biz',
			)) 
		);
		
		include(TALLY_CUSTOMIZE_DRI.'/help/_social-icons-color.php');
		include(TALLY_CUSTOMIZE_DRI.'/help/_background_color.php');
		include(TALLY_CUSTOMIZE_DRI.'/help/_background_image.php');
}