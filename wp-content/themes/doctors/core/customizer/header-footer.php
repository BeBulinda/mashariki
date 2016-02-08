<?php
function tally_customizer_headerFooter_register($wp_customize){
	$wp_customize->add_panel( 'tally_headerFooter', array(
		'title' => 'Header & Footer',
		'description' => 'Manage Header and footer of the theme.',
	));
	$wp_customize->add_section( 'tally_site_header', 
		array(
			'title' => __( 'Site Header', 'doctors' ),
            'description' => __('Customize the Site Header of the theme.', 'doctors'),
			'panel' => 'tally_headerFooter',
		) 
	);
	$wp_customize->add_section( 'tally_site_subheader', 
		array(
			'title' => __( 'Site Sub-Header', 'doctors' ),
            'description' => __('Customize the Site Sub-Header of the theme.', 'doctors'),
			'panel' => 'tally_headerFooter',
		) 
	);
	$wp_customize->add_section( 'tally_site_fwidget', 
		array(
			'title' => __( 'Site Footer Widget', 'doctors' ),
            'description' => __('Customize the Site Footer Widget of the theme.', 'doctors'),
			'panel' => 'tally_headerFooter',
		) 
	);
	$wp_customize->add_section( 'tally_site_footer', 
		array(
			'title' => __( 'Site Footer', 'doctors' ),
            'description' => __('Customize the Site Footer of the theme.', 'doctors'),
			'panel' => 'tally_headerFooter',
		) 
	);
	$wp_customize->add_section( 'tally_social_icons', 
		array(
			'title' => __( 'Social Icons', 'doctors' ),
            'description' => __('Customize the Site Footer of the theme.', 'doctors'),
			'panel' => 'tally_headerFooter',
		) 
	);
	
	
	
	/*	Site Sub-Header
	~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
	$prefix = 'tally_subheader_';
	$section = 'tally_site_subheader';
	
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
				'description' => 'Check out the <a href="'.tally_config('theme_url').'" target="_blank" style="color:red;">PRO version</a> <br>for full control over SubHeader',
			)) 
		);
	}
	
	/*-~- Show Subtitle -~-*/
	if(tally_config('type') != 'none'){
		$uid = $prefix.'showSubtitle';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Checkbox($wp_customize, $uid, 
			array(
				'label' => __( 'Show Subtitle', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'description' => __('Checked this box to show Subtitle.', 'doctors'),
				'type' => 'checkbox',
				'css_class' => 'biz',
			)) 
		);
	}
		
	/*-~- Show Breadcrumb -~-*/
	if(tally_config('type') != 'none'){
		$uid = $prefix.'showBreadcrumb';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Checkbox($wp_customize, $uid, 
			array(
				'label' => __( 'Show Breadcrumb', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'description' => __('Checked this box to show Breadcrumb.', 'doctors'),
				'type' => 'checkbox',
				'css_class' => 'biz',
			)) 
		);
	}
	
	
	
	/*	Site Footer Widgets
	~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
	$prefix = 'tally_footer_';
	$section = 'tally_site_footer';
	
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
				'description' => 'Check out the <a href="'.tally_config('theme_url').'" target="_blank" style="color:red;">PRO version</a> <br>for full control over Footer',
			)) 
		);
	}
	

	/*-~- Show Footer Widgets -~-*/
	if(tally_config('type') != 'none'){
		$uid = $prefix.'showWidget';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Select($wp_customize, $uid, 
			array(
				'label' => __( 'Show Footer Widgets', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'description' => __('Select yes if you want to show footer widgets', 'doctors'),
				'type'       => 'select',
				'css_class' => 'biz',
				'choices'    => array(
					'yes'     => __('Yes', 'doctors'),
					'no'     => __('No', 'doctors'),
				),
			)) 
		);
	}
		
	/*-~- Widget Layout -~-*/
	if(tally_config('type') != 'none'){
		$uid = $prefix.'widgetLayout';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Select($wp_customize, $uid, 
			array(
				'label' => __( 'Widget Layout', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'description' => __('Select a widget column layout', 'doctors'),
				'type'       => 'select',
				'css_class' => 'biz',
				'choices'    => array(
					'3/3/3/3'     => __('4 Columns (3/3/3/3)', 'doctors'),
					'4/4/4'     => __('3 Columns (4/4/4)', 'doctors'),
					'6/6'     => __('2 Columns (6/6)', 'doctors'),
					'12'     => __('1 Columns (12)', 'doctors'),
					'6/3/3'     => __('3 Columns (6/3/3)', 'doctors'),
					'3/3/6'     => __('3 Columns (3/3/6)', 'doctors'),
					'3/6/3'     => __('3 Columns (3/6/3)', 'doctors'),
				),
			)) 
		);
	}
		
	/*-~- Copyright Text -~-*/
	$uid = $prefix.'copyright';
	$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
	$wp_customize->add_control( new tally_Customize_Control_Textarea($wp_customize, $uid, 
		array(
			'label' => __( 'Copyright Text', 'doctors' ),
			'section' => $section,
			'settings' => $uid,
			'priority' => 10,
			'description' => __('Theme Footer Copyright Text', 'doctors'),
			'type'       => 'textarea',
			'css_class'       => '',
		)) 
	);
		
	/*-~- Credit Text -~-*/
	if(tally_config('type') == 'full'){
		$uid = $prefix.'credit';
		$wp_customize->add_setting( $uid, array('default' => tally_option_default($uid), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new tally_Customize_Control_Textarea($wp_customize, $uid, 
			array(
				'label' => __( 'Credit Text', 'doctors' ),
				'section' => $section,
				'settings' => $uid,
				'priority' => 10,
				'description' => __('Theme Footer Credit Text', 'doctors'),
				'type'       => 'textarea',
				'css_class'  => 'hbiz',
			)) 
		);
	}

}
add_action( 'customize_register' , 'tally_customizer_headerFooter_register' );