<?php
$block_id = $block_id_prefix.'name';
$block_label = __( 'Name: ', 'doctors' );
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


$block_id = $block_id_prefix.'image';
$block_label = __( 'Image: ', 'doctors' );
$wp_customize->add_setting( $block_id, array('default' => tally_option_default($block_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, $block_id, 
	array(
		'label' => $block_label,
		'section' => $block_section,
		'settings' => $block_id,
		'priority' => 10,
	)) 
);