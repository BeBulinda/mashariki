<?php
function tally_home_customiser_builder($wp_customize){
	
	if(tally_file_directory('includes/trunk/'. tally_config('slug').'/'.tally_config('slug').'_home-data.php')){
		include(tally_file_directory('includes/trunk/'.tally_config('slug').'/'.tally_config('slug').'_home-data.php'));
	}else{
		include(tally_file_directory('home/home-data.php'));
	}
	
	foreach($tally_home_data as $tally_home){
		
		
		/*
			Building the panel
		--------------------------------------------------------------------------*/
		$wp_customize->add_panel( $tally_home['id'], array(
			'title' => $tally_home['label'],
		));
		
		
		/*
			Building  Enabel section
		--------------------------------------------------------------------------*/
		
		$s_section = $tally_home['id'].'_settings';
		$wp_customize->add_section( $s_section, 
			array(
				'title' => __( 'Settings', 'doctors' ),
				'panel' => $tally_home['id'],
				
			) 
		);
		$s_id = $s_section.'_enable';
		$s_label = __( 'Enabel This Home Page Section', 'doctors' );
		$wp_customize->add_setting( $s_id, array('default' => tally_option_default($s_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, $s_id, 
			array(
				'label' => $s_label,
				'section' => $s_section,
				'settings' => $s_id,
				'priority' => 10,
				'type'       => 'checkbox',
			)) 
		);

		if($tally_home['background'] == true):
			$s_id = $s_section.'_bgImage';
			$s_label = __( 'Background Image', 'doctors' );
			$wp_customize->add_setting( $s_id, array('default' => tally_option_default($s_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
			$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, $s_id, 
				array(
					'label' => $s_label,
					'section' => $s_section,
					'settings' => $s_id,
					'priority' => 10,
				)) 
			);
			
			/*-~- Info -~-*/
			if(tally_config('type') == 'none'){ 
				$s_id = $s_section.'_info1';
				$wp_customize->add_setting( $s_id, array('default' => tally_option_default($s_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
				$wp_customize->add_control( new tally_Customize_Control_TextBlock($wp_customize, $s_id, 
					array(
						'label' => '',
						'section' => $s_section,
						'settings' => $s_id,
						'priority' => 10,
						'description' => 'Check out the <a href="'.tally_config('theme_url').'" target="_blank" style="color:red;">PRO version</a> <br>for full control over the Background of this section.',
					)) 
				);
			}
			if(tally_config('type') != 'none'){
			$s_id = $s_section.'_bgColor';
			$s_label = __( 'Background Color', 'doctors' );
			$wp_customize->add_setting( $s_id, array('default' => tally_option_default($s_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
			$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $s_id, 
				array(
					'label' => $s_label,
					'section' => $s_section,
					'settings' => $s_id,
					'priority' => 10,
					'css_class' => 'biz',
				)) 
			);
			$s_id = $s_section.'_bgAltColor';
			$s_label = __( 'Background Alt Color', 'doctors' );
			$wp_customize->add_setting( $s_id, array('default' => tally_option_default($s_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
			$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $s_id, 
				array(
					'label' => $s_label,
					'section' => $s_section,
					'settings' => $s_id,
					'priority' => 10,
					'css_class' => 'biz',
				)) 
			);
			$s_id = $s_section.'_bgRepeat';
			$s_label = __( 'Background Repeat', 'doctors' );
			$wp_customize->add_setting( $s_id, array('default' => tally_option_default($s_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
			$wp_customize->add_control( new tally_Customize_Control_Select($wp_customize, $s_id, 
				array(
					'label' => $s_label,
					'section' => $s_section,
					'settings' => $s_id,
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
			$s_id = $s_section.'_bgPosition';
			$s_label = __( 'Background Position', 'doctors' );
			$wp_customize->add_setting( $s_id, array('default' => tally_option_default($s_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
			$wp_customize->add_control( new tally_Customize_Control_Select($wp_customize, $s_id, 
				array(
					'label' => $s_label,
					'section' => $s_section,
					'settings' => $s_id,
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
			$s_id = $s_section.'_bgAttachment';
			$s_label = __( 'Background Attachment', 'doctors' );
			$wp_customize->add_setting( $s_id, array('default' => tally_option_default($s_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
			$wp_customize->add_control( new tally_Customize_Control_Select($wp_customize, $s_id, 
				array(
					'label' => $s_label,
					'section' => $s_section,
					'settings' => $s_id,
					'priority' => 10,
					'type'       => 'select',
					'css_class' => 'biz',
					'choices'    => array(
						'scroll'     => __('Scroll', 'doctors'),
						'fixed'      => __('Fixed', 'doctors'),
					),
				)) 
			);
			$s_id = $s_section.'_bgSize';
			$s_label = __( 'Background Size', 'doctors' );
			$wp_customize->add_setting( $s_id, array('default' => tally_option_default($s_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
			$wp_customize->add_control( new tally_Customize_Control_Text($wp_customize, $s_id, 
				array(
					'label' => $s_label,
					'section' => $s_section,
					'settings' => $s_id,
					'priority' => 10,
					'type'       => 'text',
					'css_class' => 'biz',
				)) 
			);
			}
		
		endif;
			
			
			
		if($tally_home['settings'] == true):
			/*-~- Info -~-*/
			if(tally_config('type') == 'none'){ 
				$s_id = $s_section.'_info2';
				$wp_customize->add_setting( $s_id, array('default' => tally_option_default($s_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
				$wp_customize->add_control( new tally_Customize_Control_TextBlock($wp_customize, $s_id, 
					array(
						'label' => '',
						'section' => $s_section,
						'settings' => $s_id,
						'priority' => 10,
						'description' => 'Check out the <a href="'.tally_config('theme_url').'" target="_blank" style="color:red;">PRO version</a> <br>for full control over the Stiings.',
					)) 
				);
			}
			if(tally_config('type') != 'none'){
			$s_id = $s_section.'_contentWidth';
			$s_label = __( 'Content Width', 'doctors' );
			$wp_customize->add_setting( $s_id, array('default' => tally_option_default($s_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
			$wp_customize->add_control( new tally_Customize_Control_Text($wp_customize, $s_id, 
				array(
					'label' => $s_label,
					'section' => $s_section,
					'settings' => $s_id,
					'priority' => 10,
					'type'       => 'text',
					'css_class' => 'biz',
				)) 
			);
			$s_id = $s_section.'_topPadding';
			$s_label = __( 'Top Padding', 'doctors' );
			$wp_customize->add_setting( $s_id, array('default' => tally_option_default($s_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
			$wp_customize->add_control( new tally_Customize_Control_Text($wp_customize, $s_id, 
				array(
					'label' => $s_label,
					'section' => $s_section,
					'settings' => $s_id,
					'priority' => 10,
					'css_class' => 'biz',
				)) 
			);
			$s_id = $s_section.'_bottomPadding';
			$s_label = __( 'Bottom Padding', 'doctors' );
			$wp_customize->add_setting( $s_id, array('default' => tally_option_default($s_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
			$wp_customize->add_control( new tally_Customize_Control_Text($wp_customize, $s_id, 
				array(
					'label' => $s_label,
					'section' => $s_section,
					'settings' => $s_id,
					'priority' => 10,
					'css_class' => 'biz',
				)) 
			);
			$s_id = $s_section.'_class';
			$s_label = __( 'Class', 'doctors' );
			$wp_customize->add_setting( $s_id, array('default' => tally_option_default($s_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
			$wp_customize->add_control( new tally_Customize_Control_Text($wp_customize, $s_id, 
				array(
					'label' => $s_label,
					'section' => $s_section,
					'settings' => $s_id,
					'priority' => 10,
					'css_class' => 'biz',
				)) 
			);
			$s_id = $s_section.'_divID';
			$s_label = __( 'CSS ID', 'doctors' );
			$wp_customize->add_setting( $s_id, array('default' => tally_option_default($s_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
			$wp_customize->add_control( new tally_Customize_Control_Text($wp_customize, $s_id, 
				array(
					'label' => $s_label,
					'section' => $s_section,
					'settings' => $s_id,
					'priority' => 10,
					'css_class' => 'biz',
				)) 
			);
			}
		endif;
		
		/*
			Building  heading section
		--------------------------------------------------------------------------*/
		if($tally_home['heading'] == true):
			$s_section = $tally_home['id'].'_heading';
			$wp_customize->add_section( $s_section, 
				array(
					'title' => __( 'Heading', 'doctors' ),
					'panel' => $tally_home['id'],
				) 
			);
			/*-~- Info -~-*/
			if(tally_config('type') == 'none'){ 
				$s_id = $s_section.'_info3';
				$wp_customize->add_setting( $s_id, array('default' => tally_option_default($s_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
				$wp_customize->add_control( new tally_Customize_Control_TextBlock($wp_customize, $s_id, 
					array(
						'label' => '',
						'section' => $s_section,
						'settings' => $s_id,
						'priority' => 10,
						'description' => 'Check out the <a href="'.tally_config('theme_url').'" target="_blank" style="color:red;">PRO version</a> <br>for full control over the Heading.',
					)) 
				);
			}
			if(tally_config('type') != 'none'){
			$s_id = $s_section.'_enable';
			$s_label = __( 'Enabel Heading of this section', 'doctors' );
			$wp_customize->add_setting( $s_id, array('default' => tally_option_default($s_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
			$wp_customize->add_control( new tally_Customize_Control_Checkbox($wp_customize, $s_id, 
				array(
					'label' => $s_label,
					'section' => $s_section,
					'settings' => $s_id,
					'priority' => 10,
					'type' => 'checkbox',
					'css_class' => 'biz',
				)) 
			);
			}
			$s_id = $s_section.'_title';
			$s_label = __( 'Title', 'doctors' );
			$wp_customize->add_setting( $s_id, array('default' => tally_option_default($s_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
			$wp_customize->add_control( new tally_Customize_Control_Text($wp_customize, $s_id, 
				array(
					'label' => $s_label,
					'section' => $s_section,
					'settings' => $s_id,
					'priority' => 10,
					'css_class' => '',
				)) 
			);
			$s_id = $s_section.'_des';
			$s_label = __( 'Description', 'doctors' );
			$wp_customize->add_setting( $s_id, array('default' => tally_option_default($s_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
			$wp_customize->add_control( new tally_Customize_Control_Textarea($wp_customize, $s_id, 
				array(
					'label' => $s_label,
					'section' => $s_section,
					'settings' => $s_id,
					'priority' => 10,
					'type' => 'textarea',
					'css_class' => '',
				)) 
			);
			
			if(tally_config('type') != 'none'){
			$s_id = $s_section.'_type';
			$s_label = __( 'Type', 'doctors' );
			$wp_customize->add_setting( $s_id, array('default' => tally_option_default($s_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
			$wp_customize->add_control( new tally_Customize_Control_Select($wp_customize, $s_id, 
				array(
					'label' => $s_label,
					'section' => $s_section,
					'settings' => $s_id,
					'priority' => 10,
					'type'       => 'select',
					'css_class' => 'biz',
					'choices'    => array(
						'-'     => __('None', 'doctors'),
						'one'     => __('Style 1', 'doctors'),
					),
				)) 
			);
			$s_id = $s_section.'_align';
			$s_label = __( 'Alignment', 'doctors' );
			$wp_customize->add_setting( $s_id, array('default' => tally_option_default($s_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
			$wp_customize->add_control( new tally_Customize_Control_Select($wp_customize, $s_id, 
				array(
					'label' => $s_label,
					'section' => $s_section,
					'settings' => $s_id,
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
		endif;
		
		
		/*
			Building the blocks
		--------------------------------------------------------------------------*/
		if(is_array($tally_home['col_order'])){
			foreach($tally_home['col_order'] as $tally_home_col_order){
				if(is_array($tally_home['columns'])){
					foreach($tally_home['columns'] as $tally_home_column){
						if(is_array($tally_home_column['blocks'])){
							foreach($tally_home_column['blocks'] as $tally_home_column_block){
								if($tally_home_column_block['id'] == $tally_home_col_order){
									if(file_exists(tally_file_directory('home/blocks/'.$tally_home_column_block['name'].'/'.$tally_home_column_block['skin'].'/customizer.php'))){
										
										$block_section = $tally_home['id'].'_'.$tally_home_column_block['id'];
										$wp_customize->add_section( $block_section, 
											array(
												'title' => $tally_home_column_block['label'],
												'panel' => $tally_home['id'],
											) 
										);
										$block_id = $block_section.'_enable';
										$block_label = __( 'Enabel This: ', 'doctors' ).$tally_home_column_block['label'];
										$wp_customize->add_setting( 
											$block_id, 
											array('default' => tally_option_default($block_id),
											'type' => 'theme_mod',
											'sanitize_callback' => 'sanitize_text_field')
										);
										if(tally_config('type') != 'none'){
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
										$block_id_prefix = $block_section.'_';
									  
										include(tally_file_directory('home/blocks/'.$tally_home_column_block['name'].'/'.$tally_home_column_block['skin'].'/customizer.php'));
									}
								}
							}
						}
					}
				}
			}
		}
		
		/*
			Building Seting sectionS
		--------------------------------------------------------------------------*/
		if($tally_home['colors'] == true):
			$s_section = $tally_home['id'].'_colors';
			$wp_customize->add_section( $s_section, 
				array(
					'title' => __( 'Colors', 'doctors' ),
					'panel' => $tally_home['id'],
				) 
			);
			
			/*-~- Info -~-*/
			if(tally_config('type') == 'none'){ 
				$s_id = $s_section.'_info4';
				$wp_customize->add_setting( $s_id, array('default' => tally_option_default($s_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
				$wp_customize->add_control( new tally_Customize_Control_TextBlock($wp_customize, $s_id, 
					array(
						'label' => '',
						'section' => $s_section,
						'settings' => $s_id,
						'priority' => 10,
						'description' => 'Check out the <a href="'.tally_config('theme_url').'" target="_blank" style="color:red;">PRO version</a> <br>for full control over the Colors of this section.',
					)) 
				);
			}
			
			if(tally_config('type') != 'none'){
			$s_id = $s_section.'_headingColor';
			$s_label = __( 'Heading Color', 'doctors' );
			$wp_customize->add_setting( $s_id, array('default' => tally_option_default($s_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
			$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $s_id, 
				array(
					'label' => $s_label,
					'section' => $s_section,
					'settings' => $s_id,
					'priority' => 10,
					'css_class' => 'biz',
				)) 
			);
			$s_id = $s_section.'_headingAltColor';
			$s_label = __( 'Heading Alt Color', 'doctors' );
			$wp_customize->add_setting( $s_id, array('default' => tally_option_default($s_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
			$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $s_id, 
				array(
					'label' => $s_label,
					'section' => $s_section,
					'settings' => $s_id,
					'priority' => 10,
					'css_class' => 'biz',
				)) 
			);
			$s_id = $s_section.'_textColor';
			$s_label = __( 'Text Color', 'doctors' );
			$wp_customize->add_setting( $s_id, array('default' => tally_option_default($s_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
			$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $s_id, 
				array(
					'label' => $s_label,
					'section' => $s_section,
					'settings' => $s_id,
					'priority' => 10,
					'css_class' => 'biz',
				)) 
			);
			$s_id = $s_section.'_textMetaColor';
			$s_label = __( 'Text Meta Color', 'doctors' );
			$wp_customize->add_setting( $s_id, array('default' => tally_option_default($s_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
			$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $s_id, 
				array(
					'label' => $s_label,
					'section' => $s_section,
					'settings' => $s_id,
					'priority' => 10,
					'css_class' => 'biz',
				)) 
			);
			$s_id = $s_section.'_textAltColor';
			$s_label = __( 'Text Alt Color', 'doctors' );
			$wp_customize->add_setting( $s_id, array('default' => tally_option_default($s_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
			$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $s_id, 
				array(
					'label' => $s_label,
					'section' => $s_section,
					'settings' => $s_id,
					'priority' => 10,
					'css_class' => 'biz',
				)) 
			);
			$s_id = $s_section.'_borderColor';
			$s_label = __( 'Border Color', 'doctors' );
			$wp_customize->add_setting( $s_id, array('default' => tally_option_default($s_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
			$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $s_id, 
				array(
					'label' => $s_label,
					'section' => $s_section,
					'settings' => $s_id,
					'priority' => 10,
					'css_class' => 'biz',
				)) 
			);
			$s_id = $s_section.'_borderAltColor';
			$s_label = __( 'Border Alt Color', 'doctors' );
			$wp_customize->add_setting( $s_id, array('default' => tally_option_default($s_id), 'type' => 'theme_mod', 'sanitize_callback' => 'sanitize_text_field') );
			$wp_customize->add_control( new tally_Customize_Control_Color($wp_customize, $s_id, 
				array(
					'label' => $s_label,
					'section' => $s_section,
					'settings' => $s_id,
					'priority' => 10,
					'css_class' => 'biz',
				)) 
			);
			}
		endif;
	}
}
add_action( 'customize_register' , 'tally_home_customiser_builder' );
?>