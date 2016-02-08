<?php
$block_id = $block_id_prefix.'title';
$block_label = __( 'Title: ', 'doctors' );
$wp_customize->add_setting( $block_id, array('default' => tally_option_default($block_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
$wp_customize->add_control( new WP_Customize_Control($wp_customize, $block_id, 
	array(
		'label' => $block_label,
		'section' => $block_section,
		'settings' => $block_id,
		'priority' => 10,
		'type'       => 'text',
	)) 
);

$block_id = $block_id_prefix.'des';
$block_label = __( 'Description: ', 'doctors' );
$wp_customize->add_setting( $block_id, array('default' => tally_option_default($block_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
$wp_customize->add_control( new WP_Customize_Control($wp_customize, $block_id, 
	array(
		'label' => $block_label,
		'section' => $block_section,
		'settings' => $block_id,
		'priority' => 10,
		'type'       => 'textarea',
	)) 
);

$block_id = $block_id_prefix.'link';
$block_label = __( 'Link: ', 'doctors' );
$wp_customize->add_setting( $block_id, array('default' => tally_option_default($block_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
$wp_customize->add_control( new WP_Customize_Control($wp_customize, $block_id, 
	array(
		'label' => $block_label,
		'section' => $block_section,
		'settings' => $block_id,
		'priority' => 10,
		'type'       => 'text',
	)) 
);

$block_id = $block_id_prefix.'more';
$block_label = __( 'ReadMore Text: ', 'doctors' );
$wp_customize->add_setting( $block_id, array('default' => tally_option_default($block_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
$wp_customize->add_control( new WP_Customize_Control($wp_customize, $block_id, 
	array(
		'label' => $block_label,
		'section' => $block_section,
		'settings' => $block_id,
		'priority' => 10,
		'type'       => 'text',
	)) 
);

$block_id = $block_id_prefix.'fontIcon';
$block_label = __( 'Font Icon: ', 'doctors' );
$wp_customize->add_setting( $block_id, array('default' => tally_option_default($block_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
$wp_customize->add_control( new WP_Customize_Control($wp_customize, $block_id, 
	array(
		'label' => $block_label,
		'section' => $block_section,
		'settings' => $block_id,
		'priority' => 10,
		'type'       => 'text',
	)) 
);

$block_id = $block_id_prefix.'imageIcon';
$block_label = __( 'Image Icon: ', 'doctors' );
$wp_customize->add_setting( $block_id, array('default' => tally_option_default($block_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, $block_id, 
	array(
		'label' => $block_label,
		'section' => $block_section,
		'settings' => $block_id,
		'priority' => 10,
	)) 
);
if(tally_config('type') != 'none'){
	$block_id = $block_id_prefix.'bgColor';
	$block_label = __( 'Background Color: ', 'doctors' );
	$wp_customize->add_setting( $block_id, array('default' => tally_option_default($block_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
	$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $block_id, 
		array(
			'label' => $block_label,
			'section' => $block_section,
			'settings' => $block_id,
			'priority' => 10,
			'css_class' => 'biz',
		)) 
	);
	$block_id = $block_id_prefix.'headingColor';
	$block_label = __( 'Heading Color: ', 'doctors' );
	$wp_customize->add_setting( $block_id, array('default' => tally_option_default($block_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
	$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $block_id, 
		array(
			'label' => $block_label,
			'section' => $block_section,
			'settings' => $block_id,
			'priority' => 10,
			'css_class' => 'biz',
		)) 
	);
	$block_id = $block_id_prefix.'textColor';
	$block_label = __( 'Text Color: ', 'doctors' );
	$wp_customize->add_setting( $block_id, array('default' => tally_option_default($block_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
	$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $block_id, 
		array(
			'label' => $block_label,
			'section' => $block_section,
			'settings' => $block_id,
			'priority' => 10,
			'css_class' => 'biz',
		)) 
	);
	$block_id = $block_id_prefix.'borderColor';
	$block_label = __( 'Border Color: ', 'doctors' );
	$wp_customize->add_setting( $block_id, array('default' => tally_option_default($block_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
	$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $block_id, 
		array(
			'label' => $block_label,
			'section' => $block_section,
			'settings' => $block_id,
			'priority' => 10,
			'css_class' => 'biz',
		)) 
	);
	
	$block_id = $block_id_prefix.'bgColor_hover';
	$block_label = __( 'Background Hover Color: ', 'doctors' );
	$wp_customize->add_setting( $block_id, array('default' => tally_option_default($block_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
	$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $block_id, 
		array(
			'label' => $block_label,
			'section' => $block_section,
			'settings' => $block_id,
			'priority' => 10,
			'css_class' => 'biz',
		)) 
	);
	$block_id = $block_id_prefix.'headingColor_hover';
	$block_label = __( 'Heading Hover Color: ', 'doctors' );
	$wp_customize->add_setting( $block_id, array('default' => tally_option_default($block_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
	$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $block_id, 
		array(
			'label' => $block_label,
			'section' => $block_section,
			'settings' => $block_id,
			'priority' => 10,
			'css_class' => 'biz',
		)) 
	);
	$block_id = $block_id_prefix.'textColor_hover';
	$block_label = __( 'Text Hover Color: ', 'doctors' );
	$wp_customize->add_setting( $block_id, array('default' => tally_option_default($block_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
	$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $block_id, 
		array(
			'label' => $block_label,
			'section' => $block_section,
			'settings' => $block_id,
			'priority' => 10,
			'css_class' => 'biz',
		)) 
	);
	$block_id = $block_id_prefix.'borderColor_hover';
	$block_label = __( 'Border Hover Color: ', 'doctors' );
	$wp_customize->add_setting( $block_id, array('default' => tally_option_default($block_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
	$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $block_id, 
		array(
			'label' => $block_label,
			'section' => $block_section,
			'settings' => $block_id,
			'priority' => 10,
			'css_class' => 'biz',
		)) 
	);
}