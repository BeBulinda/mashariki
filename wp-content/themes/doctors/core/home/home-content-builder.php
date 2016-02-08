<?php
function tally_home_content_builder(){
	
	if(tally_file_directory('includes/trunk/'. tally_config('slug').'/'.tally_config('slug').'_home-data.php')){
		include(tally_file_directory('includes/trunk/'.tally_config('slug').'/'.tally_config('slug').'_home-data.php'));
	}else{
		include(tally_file_directory('home/home-data.php'));
	}
	
	foreach($tally_home_data as $tally_home){
		$settings = $tally_home['id'].'_settings';
		if(tally_option($settings.'_enable') == 1){
			$div_id = (tally_option($settings.'_divID') == '' ? '' : 'id="'.tally_option($settings.'_divID').'"');
			echo '<div class="tally_home_section THS_'.$tally_home['id'].' '.tally_option($settings.'_class').' '.$tally_home['class'].'" '.$div_id .'>';
				if($tally_home['inner_div'] == true){ echo '<div class="tally_home_section_inner">'; }
					tally_home_content_builder_heading($tally_home['id'], $tally_home['id'].'_heading_');
					if(is_array($tally_home['columns'])){
						if($tally_home['enable_column'] == true){echo '<div class="col-holder nomargin">';}
							foreach($tally_home['columns'] as $tally_home_column){
								if(tally_home_content_builder_blockCunter($tally_home['id'], $tally_home_column['blocks']) > 0){
									$div_column = $tally_home_column['column'];
									if(tally_home_content_builder_columnCunter($tally_home['id'], $tally_home['columns']) != $tally_home['total_column']){
										$div_column = 12/tally_home_content_builder_columnCunter($tally_home['id'], $tally_home['columns']);
									}
									if($tally_home['enable_column'] == true){ echo '<div class="col col_'.$div_column.'">'; }
										if(is_array($tally_home_column['blocks'])){
											foreach($tally_home_column['blocks'] as $tally_home_column_block){
												$block_id = $tally_home['id'].'_'.$tally_home_column_block['id'].'_';
												$html_file = tally_file_directory('home/blocks/'.$tally_home_column_block['name'].'/'.$tally_home_column_block['skin'].'/html.php');
												if(tally_option($block_id.'enable') == 1){
													if(file_exists($html_file)){
														include($html_file);
													}
												}
											}
										}
									if($tally_home['enable_column'] == true){ echo '</div>'; }
								}
							}
						if($tally_home['enable_column'] == true){ echo '</div>'; }
					}
				if($tally_home['inner_div'] == true){ echo '</div>'; }
			echo '</div>';
		}
	}
}


function tally_home_content_builder_blockCunter($section_id, $blocks){
	$i = 0;
	if(is_array($blocks)){
		foreach($blocks as $block){
			$block_id = $section_id.'_'.$block['id'].'_enable';
			if(tally_option($block_id) == 1){ $i++; }
		}
	}
	return $i;
}
function tally_home_content_builder_columnCunter($section_id, $columns){
	$i = 0;
	if(is_array($columns)){
		foreach($columns as $column){
			if(tally_home_content_builder_blockCunter($section_id, $column['blocks']) > 0){
				$i++;
			}
		}
	}
	return $i;
}



function tally_home_content_builder_heading($section_id, $prefix){
	if(tally_option($prefix.'enable') == 1){
		echo '<div class="tally_home_section_heading thsh_align_'.tally_option($prefix.'align').' thsh_type_'.tally_option($prefix.'type').'">';
			echo '<div class="thsh_inner">';
				echo '<h2>'.tally_option($prefix.'title').'</h2>';
				echo '<p>'.tally_option($prefix.'des').'</p>';
			echo '</div>';
		echo '</div>';
	}
}