<?php
if(tally_config('type') == 'none'){ 
	$block_id = $block_id_prefix.'info';
	$block_label = '';
	$wp_customize->add_setting( $block_id, array('default' => tally_option_default($block_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
	$wp_customize->add_control( new tally_Customize_Control_heading($wp_customize, $block_id, 
		array(
			'label' => $block_label,
			'section' => $block_section,
			'settings' => $block_id,
			'priority' => 10,
			'description' => '<strong>Check out the <a href="'.tally_config('theme_url').'" target="_blank" style="color:red;">PRO version</a> For more than 2 slide. In PRO version you will get 5 slide.</strong>',
		)) 
	);
}

$block_id = $block_id_prefix.'1_heading';
$block_label = __( 'Slide One (#1)', 'doctors' );
$wp_customize->add_setting( $block_id, array('default' => tally_option_default($block_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
$wp_customize->add_control( new tally_Customize_Control_heading($wp_customize, $block_id, 
	array(
		'label' => $block_label,
		'section' => $block_section,
		'settings' => $block_id,
		'priority' => 10,
		'description' => '',
	)) 
);
if(tally_config('type') != 'none'){
	$block_id = $block_id_prefix.'1_enable';
	$block_label = __( '#1: Enable ', 'doctors' );
	$wp_customize->add_setting( $block_id, array('default' => tally_option_default($block_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
	$wp_customize->add_control( new tally_Customize_Control_Checkbox($wp_customize, $block_id, 
		array(
			'label' => $block_label,
			'section' => $block_section,
			'settings' => $block_id,
			'priority' => 10,
			'type' => 'checkbox',
			'css_class' => 'biz',
		)) 
	);
}
$block_id = $block_id_prefix.'1_image';
$block_label = __( '#1: Image', 'doctors' );
$wp_customize->add_setting( $block_id, array('default' => tally_option_default($block_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, $block_id, 
	array(
		'label' => $block_label,
		'section' => $block_section,
		'settings' => $block_id,
		'priority' => 10,
	)) 
);
$block_id = $block_id_prefix.'1_title';
$block_label = __( '#1: Title', 'doctors' );
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
$block_id = $block_id_prefix.'1_des';
$block_label = __( '#1: Description', 'doctors' );
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
$block_id = $block_id_prefix.'1_link';
$block_label = __( '#1: Link', 'doctors' );
$wp_customize->add_setting( $block_id, array('default' => tally_option_default($block_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
$wp_customize->add_control( new WP_Customize_Control($wp_customize, $block_id, 
	array(
		'label' => $block_label,
		'section' => $block_section,
		'settings' => $block_id,
		'priority' => 10,
		'type' => 'text',
	)) 
);
$block_id = $block_id_prefix.'1_more';
$block_label = __( '#1: ReadMore Text: ', 'doctors' );
$wp_customize->add_setting( $block_id, array('default' => tally_option_default($block_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
$wp_customize->add_control( new WP_Customize_Control($wp_customize, $block_id, 
	array(
		'label' => $block_label,
		'section' => $block_section,
		'settings' => $block_id,
		'priority' => 10,
		'type' => 'text',
	)) 
);

/*------------ 2 -------------*/
$block_id = $block_id_prefix.'2_heading';
$block_label = __( 'Slide Two (#2)', 'doctors' );
$wp_customize->add_setting( $block_id, array('default' => tally_option_default($block_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
$wp_customize->add_control( new tally_Customize_Control_heading($wp_customize, $block_id, 
	array(
		'label' => $block_label,
		'section' => $block_section,
		'settings' => $block_id,
		'priority' => 10,
		'description' => '',
	)) 
);
if(tally_config('type') != 'none'){
	$block_id = $block_id_prefix.'2_enable';
	$block_label = __( '#2: Enable ', 'doctors' );
	$wp_customize->add_setting( $block_id, array('default' => tally_option_default($block_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
	$wp_customize->add_control( new tally_Customize_Control_Checkbox($wp_customize, $block_id, 
		array(
			'label' => $block_label,
			'section' => $block_section,
			'settings' => $block_id,
			'priority' => 10,
			'type' => 'checkbox',
			'css_class' => 'biz',
		)) 
	);
}
$block_id = $block_id_prefix.'2_image';
$block_label = __( '#2: Image', 'doctors' );
$wp_customize->add_setting( $block_id, array('default' => tally_option_default($block_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, $block_id, 
	array(
		'label' => $block_label,
		'section' => $block_section,
		'settings' => $block_id,
		'priority' => 10,
	)) 
);
$block_id = $block_id_prefix.'2_title';
$block_label = __( '#2: Title', 'doctors' );
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
$block_id = $block_id_prefix.'2_des';
$block_label = __( '#2: Description', 'doctors' );
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
$block_id = $block_id_prefix.'2_link';
$block_label = __( '#2: Link', 'doctors' );
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
$block_id = $block_id_prefix.'2_more';
$block_label = __( '#2: ReadMore Text: ', 'doctors' );
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



if(tally_config('type') != 'none'):
	/*------------ 3 -------------*/
	$block_id = $block_id_prefix.'3_heading';
	$block_label = __( 'Slide Three (#3)', 'doctors' );
	$wp_customize->add_setting( $block_id, array('default' => tally_option_default($block_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
	$wp_customize->add_control( new tally_Customize_Control_heading($wp_customize, $block_id, 
		array(
			'label' => $block_label,
			'section' => $block_section,
			'settings' => $block_id,
			'priority' => 10,
			'description' => '',
		)) 
	);
	$block_id = $block_id_prefix.'3_enable';
	$block_label = __( '#3: Enable ', 'doctors' );
	$wp_customize->add_setting( $block_id, array('default' => tally_option_default($block_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, $block_id, 
		array(
			'label' => $block_label,
			'section' => $block_section,
			'settings' => $block_id,
			'priority' => 10,
			'type'       => 'checkbox',
		)) 
	);
	$block_id = $block_id_prefix.'3_image';
	$block_label = __( '#3: Image', 'doctors' );
	$wp_customize->add_setting( $block_id, array('default' => tally_option_default($block_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, $block_id, 
		array(
			'label' => $block_label,
			'section' => $block_section,
			'settings' => $block_id,
			'priority' => 10,
		)) 
	);
	$block_id = $block_id_prefix.'3_title';
	$block_label = __( '#3: Title', 'doctors' );
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
	$block_id = $block_id_prefix.'3_des';
	$block_label = __( '#3: Description', 'doctors' );
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
	$block_id = $block_id_prefix.'3_link';
	$block_label = __( '#3: Link', 'doctors' );
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
	$block_id = $block_id_prefix.'3_more';
	$block_label = __( '#3: ReadMore Text: ', 'doctors' );
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
	
	
	
	/*------------ 4 -------------*/
	$block_id = $block_id_prefix.'4_heading';
	$block_label = __( 'Slide Four (#4)', 'doctors' );
	$wp_customize->add_setting( $block_id, array('default' => tally_option_default($block_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
	$wp_customize->add_control( new tally_Customize_Control_heading($wp_customize, $block_id, 
		array(
			'label' => $block_label,
			'section' => $block_section,
			'settings' => $block_id,
			'priority' => 10,
			'description' => '',
		)) 
	);
	$block_id = $block_id_prefix.'4_enable';
	$block_label = __( '#4: Enable ', 'doctors' );
	$wp_customize->add_setting( $block_id, array('default' => tally_option_default($block_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, $block_id, 
		array(
			'label' => $block_label,
			'section' => $block_section,
			'settings' => $block_id,
			'priority' => 10,
			'type'       => 'checkbox',
		)) 
	);
	$block_id = $block_id_prefix.'4_image';
	$block_label = __( '#4: Image', 'doctors' );
	$wp_customize->add_setting( $block_id, array('default' => tally_option_default($block_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, $block_id, 
		array(
			'label' => $block_label,
			'section' => $block_section,
			'settings' => $block_id,
			'priority' => 10,
		)) 
	);
	$block_id = $block_id_prefix.'4_title';
	$block_label = __( '#4: Title', 'doctors' );
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
	$block_id = $block_id_prefix.'4_des';
	$block_label = __( '#4: Description', 'doctors' );
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
	$block_id = $block_id_prefix.'4_link';
	$block_label = __( '#4: Link', 'doctors' );
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
	$block_id = $block_id_prefix.'4_more';
	$block_label = __( '#4: ReadMore Text: ', 'doctors' );
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
	
	
	/*------------ 5 -------------*/
	$block_id = $block_id_prefix.'5_heading';
	$block_label = __( 'Slide Five (#5)', 'doctors' );
	$wp_customize->add_setting( $block_id, array('default' => tally_option_default($block_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
	$wp_customize->add_control( new tally_Customize_Control_heading($wp_customize, $block_id, 
		array(
			'label' => $block_label,
			'section' => $block_section,
			'settings' => $block_id,
			'priority' => 10,
			'description' => '',
		)) 
	);
	$block_id = $block_id_prefix.'5_enable';
	$block_label = __( '#5: Enable ', 'doctors' );
	$wp_customize->add_setting( $block_id, array('default' => tally_option_default($block_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, $block_id, 
		array(
			'label' => $block_label,
			'section' => $block_section,
			'settings' => $block_id,
			'priority' => 10,
			'type'       => 'checkbox',
		)) 
	);
	$block_id = $block_id_prefix.'5_image';
	$block_label = __( '#5: Image', 'doctors' );
	$wp_customize->add_setting( $block_id, array('default' => tally_option_default($block_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, $block_id, 
		array(
			'label' => $block_label,
			'section' => $block_section,
			'settings' => $block_id,
			'priority' => 10,
		)) 
	);
	$block_id = $block_id_prefix.'5_title';
	$block_label = __( '#5: Title', 'doctors' );
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
	$block_id = $block_id_prefix.'5_des';
	$block_label = __( '#5: Description', 'doctors' );
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
	$block_id = $block_id_prefix.'5_link';
	$block_label = __( '#5: Link', 'doctors' );
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
	$block_id = $block_id_prefix.'5_more';
	$block_label = __( '#5: ReadMore Text: ', 'doctors' );
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
else:
	$block_id = $block_id_prefix.'info2';
	$block_label = '';
	$wp_customize->add_setting( $block_id, array('default' => tally_option_default($block_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
	$wp_customize->add_control( new tally_Customize_Control_heading($wp_customize, $block_id, 
		array(
			'label' => $block_label,
			'section' => $block_section,
			'settings' => $block_id,
			'priority' => 10,
			'description' => '<strong>Check out the <a href="'.tally_config('theme_url').'" target="_blank" style="color:red;">PRO version</a> For more than 2 slide. In PRO version you will get 5 slide.</strong>',
		)) 
	);
endif;