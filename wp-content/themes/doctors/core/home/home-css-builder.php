<?php
function tally_home_css_builder($type = 'css'){
	
	if(tally_file_directory('includes/trunk/'. tally_config('slug').'/'.tally_config('slug').'_home-data.php')){
		include(tally_file_directory('includes/trunk/'.tally_config('slug').'/'.tally_config('slug').'_home-data.php'));
	}else{
		include(tally_file_directory('home/home-data.php'));
	}
	
	if($type == 'css'){
		tally_home_css_builder_heading_css();
	}
	$check_css = array();
	foreach($tally_home_data as $tally_home){
		$settings = $tally_home['id'].'_settings';
		if(tally_option($settings.'_enable') == 1){
			if($type == 'c-css'){
				tally_home_css_builder_settings_css($tally_home['id']);
				tally_home_css_builder_color_css($tally_home['id']);
			}
			if(is_array($tally_home['columns'])){
				foreach($tally_home['columns'] as $tally_home_column){
					if(is_array($tally_home_column['blocks'])){
						foreach($tally_home_column['blocks'] as $tally_home_column_block){
							
							$block_id = $tally_home['id'].'_'.$tally_home_column_block['id'].'_';
							$css_file = tally_file_directory('home/blocks/'.$tally_home_column_block['name'].'/'.$tally_home_column_block['skin'].'/css.php');
							$c_css_file = tally_file_directory('home/blocks/'.$tally_home_column_block['name'].'/'.$tally_home_column_block['skin'].'/c-css.php');
							
							
							if(tally_option($block_id.'enable') == 1){
								if(($type == 'c-css') && file_exists($c_css_file)){
									include($c_css_file);
								}elseif(($type == 'css') && file_exists($css_file)){
									if(in_array($tally_home_column_block['name'].'__'.$tally_home_column_block['skin'], $check_css) == false){
										include($css_file);
										$check_css[] = $tally_home_column_block['name'].'__'.$tally_home_column_block['skin'];
									}
								}	
							}
						}
					}
				}
			}
		}
	}
}


function tally_home_css_builder_settings_css($section_id){
	$prefix = $section_id.'_settings_';
	?>
    .THS_<?php echo $section_id; ?>{
    	background-color:<?php echo tally_option($prefix.'bgColor'); ?>;
        background-image:url(<?php echo tally_option($prefix.'bgImage'); ?>);
        background-repeat:<?php echo tally_option($prefix.'bgRepeat'); ?>;
        background-position:<?php echo tally_option($prefix.'bgPosition'); ?>;
        background-attachment:<?php echo tally_option($prefix.'bgAttachment'); ?>;
        background-size:<?php echo tally_option($prefix.'bgSize'); ?>;
        padding-top:<?php echo tally_option($prefix.'topPadding'); ?>;
        padding-bottom:<?php echo tally_option($prefix.'bottomPadding'); ?>;
    }
    
    <?php if(tally_option($prefix.'contentWidth') != ''): ?>
    .THS_<?php echo $section_id; ?> .tally_home_section_inner{
    	  max-width: <?php echo tally_option($prefix.'contentWidth'); ?>;
    }
    <?php
	endif;
	
}



function tally_home_css_builder_color_css($section_id){
	$prefix = $section_id.'_colors_';
	?>
    #site-main .THS_<?php echo $section_id; ?>{
    	color:<?php echo tally_option($prefix.'textColor'); ?>;
    }
    #site-main .THS_<?php echo $section_id; ?> .ths_textMeta{
    	color:<?php echo tally_option($prefix.'textMetaColor'); ?>;
    }
    #site-main .THS_<?php echo $section_id; ?> .ths_textAlt{
    	color:<?php echo tally_option($prefix.'textAltColor'); ?>;
    }
    #site-main .THS_<?php echo $section_id; ?> h1,
    #site-main .THS_<?php echo $section_id; ?> h2,
    #site-main .THS_<?php echo $section_id; ?> h3,
    #site-main .THS_<?php echo $section_id; ?> h4,
    #site-main .THS_<?php echo $section_id; ?> h5,
    #site-main .THS_<?php echo $section_id; ?> h6{
    	color:<?php echo tally_option($prefix.'headingColor'); ?>;
    }
    #site-main .THS_<?php echo $section_id; ?> .ths_headingAl{
    	color:<?php echo tally_option($prefix.'headingAltColor'); ?>;
    }
    #site-main .THS_<?php echo $section_id; ?> *{
    	border-color:<?php echo tally_option($prefix.'borderColor'); ?> !important;
    }
    #site-main .THS_<?php echo $section_id; ?> .ths_borderAlt{
    	border-color:<?php echo tally_option($prefix.'borderAltColor'); ?>;
    }
    <?php
}



function tally_home_css_builder_heading_css(){
	?>
    .tally_home_section_heading.thsh_type_one{ margin: 0 auto; width: 80%; margin-bottom: 60px; }
    .tally_home_section_heading.thsh_type_one:after{ content:" "; width: 50px; border-bottom: 3px solid; display: inline-block; margin-top: 20px; }
    .tally_home_section_heading.thsh_type_one.thsh_align_left{ text-align:left; }
    .tally_home_section_heading.thsh_type_one.thsh_align_right{ text-align:right; }
    .tally_home_section_heading.thsh_type_one.thsh_align_center{ text-align:center; }
    .tally_home_section_heading.thsh_type_one .thsh_inner{  }
    .tally_home_section_heading.thsh_type_one h2{ text-transform: uppercase; font-weight: bold; }
    .tally_home_section_heading.thsh_type_one p{ font-size: 17px; }
    <?php
}