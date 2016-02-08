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

$block_id = $block_id_prefix.'subtitle';
$block_label = __( 'Sub-Title: ', 'doctors' );
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
if(tally_config('type') != 'none'){
	$block_id = $block_id_prefix.'align';
	$block_label = __( 'Text Align: ', 'doctors' );
	$wp_customize->add_setting( $block_id, array('default' => tally_option_default($block_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
	$wp_customize->add_control( new tally_Customize_Control_Select($wp_customize, $block_id, 
		array(
			'label' => $block_label,
			'section' => $block_section,
			'settings' => $block_id,
			'priority' => 10,
			'type'       => 'select',
			'css_class' => 'biz',
			'choices'    => array(
				'left'     => __('Left', 'doctors'),
				'right'     => __('Right', 'doctors'),
				'center'     => __('Center', 'doctors'),
				'none'     => __('None', 'doctors'),
			),
		)) 
	);
}