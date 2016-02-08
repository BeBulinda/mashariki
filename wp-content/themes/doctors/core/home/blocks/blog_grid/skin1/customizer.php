<?php
if(tally_config('type') != 'none'){
	$block_id = $block_id_prefix.'cat';
	$block_label = __( 'Category: ', 'doctors' );
	$wp_customize->add_setting( $block_id, array('default' => tally_option_default($block_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
	$wp_customize->add_control( new tally_Customize_Control_Text($wp_customize, $block_id, 
		array(
			'label' => $block_label,
			'section' => $block_section,
			'settings' => $block_id,
			'priority' => 10,
			'type' => 'text',
			'css_class' => 'biz',
		)) 
	);
	
	$block_id = $block_id_prefix.'tag';
	$block_label = __( 'Tag: ', 'doctors' );
	$wp_customize->add_setting( $block_id, array('default' => tally_option_default($block_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
	$wp_customize->add_control( new tally_Customize_Control_Text($wp_customize, $block_id, 
		array(
			'label' => $block_label,
			'section' => $block_section,
			'settings' => $block_id,
			'priority' => 10,
			'type' => 'text',
			'css_class' => 'biz',
		)) 
	);
	
	$block_id = $block_id_prefix.'limit';
	$block_label = __( 'Post Limit: ', 'doctors' );
	$wp_customize->add_setting( $block_id, array('default' => tally_option_default($block_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
	$wp_customize->add_control( new tally_Customize_Control_Text($wp_customize, $block_id, 
		array(
			'label' => $block_label,
			'section' => $block_section,
			'settings' => $block_id,
			'priority' => 10,
			'type' => 'text',
			'css_class' => 'biz',
		)) 
	);
	
	$block_id = $block_id_prefix.'column';
	$block_label = __( 'Column: ', 'doctors' );
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
				'3'     => __('3 Column', 'doctors'),
				'4'     => __('4 Column', 'doctors'),
				'1'     => __('1 Column', 'doctors'),
				'2'     => __('2 Column', 'doctors'),
				'5'     => __('5 Column', 'doctors'),
			), 
		)) 
	);
}

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
$block_label = __( 'View Blog Text: ', 'doctors' );
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