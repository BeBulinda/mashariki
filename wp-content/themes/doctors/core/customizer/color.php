<?php
function tally_customizer_color_register($wp_customize){
	$wp_customize->add_panel( 'tally_color', array(
		'title' => 'Color & Background',
		'description' => 'Manage color and background of the theme.',
	));
	
	$wp_customize->add_section( 'tally_accent_color', 
		array(
			'title' => __( 'Accent Color', 'doctors' ),
            'description' => __('Customize the Accent color of the theme.', 'doctors'),
			'panel' => 'tally_color',
		) 
	);
	
	$wp_customize->add_section( 'tally_menu_color', 
		array(
			'title' => __( 'Menu Color', 'doctors' ),
            'description' => __('Customize the Menu color of the theme.', 'doctors'),
			'panel' => 'tally_color',
		) 
	);
	$wp_customize->add_section( 'tally_subheader_color', 
		array(
			'title' => __( 'Sub-Header Color', 'doctors' ),
            'description' => __('Customize the sub-header color of the theme.', 'doctors'),
			'panel' => 'tally_color',
		) 
	);
	$wp_customize->add_section( 'tally_main_color', 
		array(
			'title' => __( 'Main Color', 'doctors' ),
            'description' => __('Customize the Main color of the theme.', 'doctors'),
			'panel' => 'tally_color',
		) 
	);
	$wp_customize->add_section( 'tally_fwidget_color', 
		array(
			'title' => __( 'Footer Widget area Color', 'doctors' ),
            'description' => __('Customize the Footer Widget area color of the theme.', 'doctors'),
			'panel' => 'tally_color',
		) 
	);
	$wp_customize->add_section( 'tally_footer_color', 
		array(
			'title' => __( 'Footer Color', 'doctors' ),
            'description' => __('Customize the Footer color of the theme.', 'doctors'),
			'panel' => 'tally_color',
		) 
	);
	
	
	/*	Accent Color
	~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
	$prefix = 'tally_color_accent_';
	$section = 'tally_accent_color';
	
	/*-~- Info -~-*/
	if(tally_config('type') == 'none'){ 
		$uid = $prefix.'info1';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_TextBlock($wp_customize, $uid, 
			array(
				'label' => '',
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'description' => 'Check out the <a href="'.tally_config('theme_url').'" target="_blank" style="color:red;">PRO version</a> <br>for full control over Accent Color',
			)) 
		);
	}
		
	/*-~- Primary Color -~-*/
	if(tally_config('type') != 'none'){
		$uid = $prefix.'primary';
		$wp_customize->add_setting( $prefix.'primary', array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $uid, 
			array(
				'label' => __( 'Primary Color', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'css_class' => 'biz',
			)) 
		);
	}
		
	/*-~- Success Color -~-*/
	if(tally_config('type') != 'none'){
		$uid = $prefix.'success';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $uid, 
			array(
				'label' => __( 'Success Color', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'css_class' => 'biz',
			)) 
		);
	}
		
	/*-~- Info Color -~-*/
	if(tally_config('type') != 'none'){
		$uid = $prefix.'info';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $uid, 
			array(
				'label' => __( 'Info Color', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'css_class' => 'biz',
			)) 
		);
	}
		
	/*-~- Warning Color -~-*/
	if(tally_config('type') != 'none'){
		$uid = $prefix.'warning';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $uid, 
			array(
				'label' => __( 'Warning Color', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'css_class' => 'biz',
			)) 
		);
	}
		
	/*-~- Danger Color -~-*/
	if(tally_config('type') != 'none'){
		$uid = $prefix.'danger';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $uid, 
			array(
				'label' => __( 'Danger Color', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'css_class' => 'biz',
			)) 
		);
	}

	
	/*	Menu Color
	~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
	$prefix = 'tally_color_menu_';
	$section = 'tally_menu_color';
	
	/*-~- Info -~-*/
	if(tally_config('type') == 'none'){ 
		$uid = $prefix.'info1';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_TextBlock($wp_customize, $uid, 
			array(
				'label' => '',
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'description' => 'Check out the <a href="'.tally_config('theme_url').'" target="_blank" style="color:red;">PRO version</a> <br>for full control over Menu Color',
			)) 
		);
	}
	

	/*-~- Text Color -~-*/
	if(tally_config('type') != 'none'){
		$uid = $prefix.'text';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $uid, 
			array(
				'label' => __( 'Text Color', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'css_class' => 'biz',
			)) 
		);
	}
		
	/*-~- Text Hover Color -~-*/
	if(tally_config('type') != 'none'){
		$uid = $prefix.'textHover';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $uid, 
			array(
				'label' => __( 'Text Hover Color', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'css_class' => 'biz',
			)) 
		);
	}
		
	/*-~- Border Color -~-*/
	if(tally_config('type') != 'none'){
		$uid = $prefix.'border';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $uid, 
			array(
				'label' => __( 'Border Color', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'css_class' => 'biz',
			)) 
		);
	}
		
	/*-~- Border Hover Color -~-*/
	if(tally_config('type') != 'none'){
		$uid = $prefix.'borderHover';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $uid, 
			array(
				'label' => __( 'Border Hover Color', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'css_class' => 'biz',
			)) 
		);
	}
		
	/*-~- Background Color -~-*/
	if(tally_config('type') != 'none'){
		$uid = $prefix.'bg';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $uid, 
			array(
				'label' => __( 'Background Color', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'css_class' => 'biz',
			)) 
		);
	}
		
	/*-~- Background Hover Color -~-*/
	if(tally_config('type') != 'none'){
		$uid = $prefix.'bgHover';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $uid, 
			array(
				'label' => __( 'Background Hover Color', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'css_class' => 'biz',
			)) 
		);
	}
		
	/*-~- SubNav Text Color -~-*/
	if(tally_config('type') != 'none'){
		$uid = $prefix.'textSub';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $uid, 
			array(
				'label' => __( 'SubNav Text Color', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'css_class' => 'biz',
			)) 
		);
	}
		
	/*-~- SubNav Text Hover Color -~-*/
	if(tally_config('type') != 'none'){
		$uid = $prefix.'textHoverSub';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $uid, 
			array(
				'label' => __( 'SubNav Text Hover Color', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'css_class' => 'biz',
			)) 
		);
	}
		
	/*-~- SubNav Border Color -~-*/
	if(tally_config('type') != 'none'){
		$uid = $prefix.'borderSub';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $uid, 
			array(
				'label' => __( 'SubNav Border Color', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'css_class' => 'biz',
			)) 
		);
	}
		
	/*-~- SubNav Border Hover Color -~-*/
	if(tally_config('type') != 'none'){
		$uid = $prefix.'borderHoverSub';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $uid, 
			array(
				'label' => __( 'SubNav Border Hover Color', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'css_class' => 'biz',
			)) 
		);
	}
		
	/*-~- SubNav Background Color -~-*/
	if(tally_config('type') != 'none'){
		$uid = $prefix.'bgSub';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $uid, 
			array(
				'label' => __( 'SubNav Background Color', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'css_class' => 'biz',
			)) 
		);
	}
		
	/*-~- SubNav Background Hover Color -~-*/
	if(tally_config('type') != 'none'){
		$uid = $prefix.'bgHoverSub';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $uid, 
			array(
				'label' => __( 'SubNav Background Hover Color', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'css_class' => 'biz',
			)) 
		);
	}
		
		
	/*-~- Nav Area Background Color -~-*/
	if(tally_config('type') != 'none'){
		$uid = $prefix.'navBG';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $uid, 
			array(
				'label' => __( 'Nav Area Background Color', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'css_class' => 'biz',
			)) 
		);
	}

	
	
	
	
	
	
	/*	Sub-Header Color
	~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
	$prefix = 'tally_color_subheader_';
	$section = 'tally_subheader_color';
	
	/*-~- Info -~-*/
	if(tally_config('type') == 'none'){ 
		$uid = $prefix.'info1';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_TextBlock($wp_customize, $uid, 
			array(
				'label' => '',
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'description' => 'Check out the <a href="'.tally_config('theme_url').'" target="_blank" style="color:red;">PRO version</a> <br>for full control over SubHeader Color',
			)) 
		);
	}
	

	/*-~- Heading Color -~-*/
	if(tally_config('type') != 'none'){
		$uid = $prefix.'heading';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $uid, 
			array(
				'label' => __( 'Heading Color', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'css_class' => 'biz',
			)) 
		);
	}
		
	/*-~- Sub-Heading Color -~-*/
	if(tally_config('type') != 'none'){
		$uid = $prefix.'subheading';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $uid, 
			array(
				'label' => __( 'Sub-Heading Color', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'css_class' => 'biz',
			)) 
		);
	}
		
	/*-~- Text Color -~-*/
	if(tally_config('type') != 'none'){
		$uid = $prefix.'text';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $uid, 
			array(
				'label' => __( 'Text Color', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'css_class' => 'biz',
			)) 
		);
	}
		
	/*-~- Background Color -~-*/
	if(tally_config('type') != 'none'){
		$uid = $prefix.'bg';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $uid, 
			array(
				'label' => __( 'Background Color', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'css_class' => 'biz',
			)) 
		);
	}
		
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
	if(tally_config('type') != 'none'){
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
	}
		
		/*-~- Background Image Position -~-*/
	if(tally_config('type') != 'none'){
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
	}
		
		/*-~- Background Image Attachment -~-*/
	if(tally_config('type') != 'none'){
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
	}
		
		/*-~- Background Image Size -~-*/
	if(tally_config('type') != 'none'){
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
	}

	
	
	
	
	
	/*	Main Color
	~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
	$prefix = 'tally_color_main_';
	$section = 'tally_main_color';
	
	/*-~- Info -~-*/
	if(tally_config('type') == 'none'){ 
		$uid = $prefix.'info1';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_TextBlock($wp_customize, $uid, 
			array(
				'label' => '',
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'description' => 'Check out the <a href="'.tally_config('theme_url').'" target="_blank" style="color:red;">PRO version</a> <br>for full control over Main Content Color',
			)) 
		);
	}
	
	
		/*-~- Heading Color -~-*/
	if(tally_config('type') != 'none'){
		$uid = $prefix.'heading';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $uid, 
			array(
				'label' => __( 'Heading Color', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'css_class' => 'biz',
			)) 
		);
	}
		
		/*-~- Heading Alt Color -~-*/
	if(tally_config('type') != 'none'){
		$uid = $prefix.'headingAlt';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $uid, 
			array(
				'label' => __( 'Heading Alt Color', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'css_class' => 'biz',
			)) 
		);
	}
		
		/*-~- Text Color -~-*/
	if(tally_config('type') != 'none'){
		$uid = $prefix.'text';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $uid, 
			array(
				'label' => __( 'Text Color', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'css_class' => 'biz',
			)) 
		);
	}
		
		/*-~- Text Meta Color -~-*/
	if(tally_config('type') != 'none'){
		$uid = $prefix.'textMeta';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $uid, 
			array(
				'label' => __( 'Text Meta Color', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'css_class' => 'biz',
			)) 
		);
	}
		
		/*-~- Text Alt Color -~-*/
	if(tally_config('type') != 'none'){
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
	}
		
		/*-~- Border Color -~-*/
	if(tally_config('type') != 'none'){
		$uid = $prefix.'border';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $uid, 
			array(
				'label' => __( 'Border Color', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'css_class' => 'biz',
			)) 
		);
	}
		
		/*-~- Border Alt Color -~-*/
	if(tally_config('type') != 'none'){
		$uid = $prefix.'borderAlt';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $uid, 
			array(
				'label' => __( 'Border Alt Color', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'css_class' => 'biz',
			)) 
		);
	}
		
		/*-~- Background Color -~-*/
	if(tally_config('type') != 'none'){
		$uid = $prefix.'bg';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $uid, 
			array(
				'label' => __( 'Background Color', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'css_class' => 'biz',
			)) 
		);
	}
		
		/*-~- Background Alt Color -~-*/
	if(tally_config('type') != 'none'){
		$uid = $prefix.'bgAlt';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $uid, 
			array(
				'label' => __( 'Background Alt Color', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'css_class' => 'biz',
			)) 
		);
	}
		
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
	if(tally_config('type') != 'none'){
		$uid = $prefix.'bgImage_repeat';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Select($wp_customize, $uid, 
			array(
				'label' => __( 'Background Image Repeat', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'type' => 'select',
				'css_class' => 'biz',
				'choices'    => array(
					'no-repeat'  => __('No Repeat', 'doctors'),
					'repeat'     => __('Tile', 'doctors'),
					'repeat-x'   => __('Tile Horizontally', 'doctors'),
					'repeat-y'   => __('Tile Vertically', 'doctors'),
				),
			)) 
		);
	}
		
		/*-~- Background Image Position -~-*/
	if(tally_config('type') != 'none'){
		$uid = $prefix.'bgImage_position';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Select($wp_customize, $uid, 
			array(
				'label' => __( 'Background Image Position', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'type' => 'select',
				'css_class' => 'biz',
				'choices' => array(
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
	}
		
		/*-~- Background Image Attachment -~-*/
	if(tally_config('type') != 'none'){
		$uid = $prefix.'bgImage_attachment';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Select($wp_customize, $uid, 
			array(
				'label' => __( 'Background Image Attachment', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'type' => 'select',
				'css_class' => 'biz',
				'choices' => array(
					'scroll' => __('Scroll', 'doctors'),
					'fixed' => __('Fixed', 'doctors'),
				),
			)) 
		);
	}
		
		/*-~- Background Image Size -~-*/
	if(tally_config('type') != 'none'){
		$uid = $prefix.'bgImage_size';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Text($wp_customize, $uid, 
			array(
				'label' => __( 'Background Image Size', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'type' => 'text',
				'css_class' => 'biz',
				
			)) 
		);
	}

	
	
	
	
	
	/*	Footer Widgets Color
	~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
	$prefix = 'tally_color_fwidget_';
	$section = 'tally_fwidget_color';
	
	/*-~- Info -~-*/
	if(tally_config('type') == 'none'){ 
		$uid = $prefix.'info1';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_TextBlock($wp_customize, $uid, 
			array(
				'label' => '',
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'description' => 'Check out the <a href="'.tally_config('theme_url').'" target="_blank" style="color:red;">PRO version</a> <br>for full control over Footer Widget Area Color',
			)) 
		);
	}
	
	
		/*-~- Heading Color -~-*/
	if(tally_config('type') != 'none'){
		$uid = $prefix.'heading';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $uid, 
			array(
				'label' => __( 'Heading Color', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'css_class' => 'biz',
			)) 
		);
	}
		
		/*-~- Text Color -~-*/
	if(tally_config('type') != 'none'){
		$uid = $prefix.'text';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $uid, 
			array(
				'label' => __( 'Text Color', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'css_class' => 'biz',
			)) 
		);
	}
		
		/*-~- Text Meta Color -~-*/
	if(tally_config('type') != 'none'){
		$uid = $prefix.'textMeta';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $uid, 
			array(
				'label' => __( 'Text Meta Color', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'css_class' => 'biz',
			)) 
		);
	}
		
		
		/*-~- Border Color -~-*/
	if(tally_config('type') != 'none'){
		$uid = $prefix.'border';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $uid, 
			array(
				'label' => __( 'Border Color', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'css_class' => 'biz',
			)) 
		);
	}
		
		/*-~- Border Alt Color -~-*/
	if(tally_config('type') != 'none'){
		$uid = $prefix.'borderAlt';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $uid, 
			array(
				'label' => __( 'Border Alt Color', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'css_class' => 'biz',
			)) 
		);
	}
		
		/*-~- Background Color -~-*/
	if(tally_config('type') != 'none'){
		$uid = $prefix.'bg';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $uid, 
			array(
				'label' => __( 'Background Color', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'css_class' => 'biz',
			)) 
		);
	}
		
		/*-~- Background Alt Color -~-*/
	if(tally_config('type') != 'none'){
		$uid = $prefix.'bgAlt';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $uid, 
			array(
				'label' => __( 'Background Alt Color', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'css_class' => 'biz',
			)) 
		);
	}
		
		/*-~- Link Color -~-*/
	if(tally_config('type') != 'none'){
		$uid = $prefix.'link';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $uid, 
			array(
				'label' => __( 'Link Color', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'css_class' => 'biz',
			)) 
		);
	}
		
		/*-~- Link Hover Color -~-*/
	if(tally_config('type') != 'none'){
		$uid = $prefix.'linkHover';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $uid, 
			array(
				'label' => __( 'Link Hover Color', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'css_class' => 'biz',
			)) 
		);
	}
		
		/*-~- Background Image -~-*/
		$uid = $prefix.'bgImage';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, $uid, 
			array(
				'label' => __( 'Background Image', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'css_class' => 'biz',
			)) 
		);
		
		/*-~- Background Image Repeat -~-*/
	if(tally_config('type') != 'none'){
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
	}
		
		/*-~- Background Image Position -~-*/
	if(tally_config('type') != 'none'){
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
	}
		
		/*-~- Background Image Attachment -~-*/
	if(tally_config('type') != 'none'){
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
	}
		
		/*-~- Background Image Size -~-*/
	if(tally_config('type') != 'none'){
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
	}
	
	
	
	/*	Footer Color
	~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
	$prefix = 'tally_color_footer_';
	$section = 'tally_footer_color';
	
	/*-~- Info -~-*/
	if(tally_config('type') == 'none'){ 
		$uid = $prefix.'info1';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_TextBlock($wp_customize, $uid, 
			array(
				'label' => '',
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'description' => 'Check out the <a href="'.tally_config('theme_url').'" target="_blank" style="color:red;">PRO version</a> <br>for full control over Footer area Color',
			)) 
		);
	}
	
	
		/*-~- Text Color -~-*/
	if(tally_config('type') != 'none'){
		$uid = $prefix.'text';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $uid, 
			array(
				'label' => __( 'Text Color', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'css_class' => 'biz',
			)) 
		);
	}
		
		/*-~- Border Color -~-*/
	if(tally_config('type') != 'none'){
		$uid = $prefix.'border';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $uid, 
			array(
				'label' => __( 'Border Color', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'css_class' => 'biz',
			)) 
		);
	}
		
		/*-~- Border Alt Color -~-*/
	if(tally_config('type') != 'none'){
		$uid = $prefix.'borderAlt';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $uid, 
			array(
				'label' => __( 'Border Alt Color', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'css_class' => 'biz',
			)) 
		);
	}
		
		/*-~- Background Color -~-*/
	if(tally_config('type') != 'none'){
		$uid = $prefix.'bg';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $uid, 
			array(
				'label' => __( 'Background Color', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'css_class' => 'biz',
			)) 
		);
	}
		
		/*-~- Link Color -~-*/
	if(tally_config('type') != 'none'){
		$uid = $prefix.'link';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $uid, 
			array(
				'label' => __( 'Link Color', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'css_class' => 'biz',
			)) 
		);
	}
		
		/*-~- Link Hover Color -~-*/
	if(tally_config('type') != 'none'){
		$uid = $prefix.'linkHover';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $uid, 
			array(
				'label' => __( 'Link Hover Color', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'css_class' => 'biz',
			)) 
		);
	}
		
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
	if(tally_config('type') != 'none'){
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
	}
		
		/*-~- Background Image Position -~-*/
	if(tally_config('type') != 'none'){
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
	}
		
		/*-~- Background Image Attachment -~-*/
	if(tally_config('type') != 'none'){
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
	}
		
		/*-~- Background Image Size -~-*/
	if(tally_config('type') != 'none'){
		$uid = $prefix.'bgImage_size';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Text($wp_customize, $uid, 
			array(
				'label' => __( 'Background Image Size', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'type' => 'text',
				'css_class' => 'biz',
			)) 
		);
	}
	
}
add_action( 'customize_register' , 'tally_customizer_color_register' );