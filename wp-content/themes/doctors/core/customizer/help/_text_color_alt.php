<?php
	/*-~- Text Alt Color -~-*/
	$uid = $prefix.'textAlt';
	$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
	$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $uid, 
		array(
			'label' => __( 'Text Alt Color', 'doctors' ),
			'section' => $section,
			'settings' => $uid,
			'priority' => 10,
			'css_class' => 'biz',
		)) 
	);