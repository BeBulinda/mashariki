<?php
function tally_home_js_builder(){
	
	if(tally_file_directory('includes/trunk/'. tally_config('slug').'/'.tally_config('slug').'_home-data.php')){
		include(tally_file_directory('includes/trunk/'.tally_config('slug').'/'.tally_config('slug').'_home-data.php'));
	}else{
		include(tally_file_directory('home/home-data.php'));
	}
	
	$check_js = array();
	foreach($tally_home_data as $tally_home){
		$settings = $tally_home['id'].'_settings';
		if(tally_option($settings.'_enable') == 1){
			if(is_array($tally_home['columns'])){
				foreach($tally_home['columns'] as $tally_home_column){
					if(is_array($tally_home_column['blocks'])){
						foreach($tally_home_column['blocks'] as $tally_home_column_block){
							
							if(in_array($tally_home_column_block['name'].'__'.$tally_home_column_block['skin'], $check_js) == false){
								$block_id = $tally_home['id'].'_'.$tally_home_column_block['id'].'_';
								$js_file = tally_file_directory('home/blocks/'.$tally_home_column_block['name'].'/'.$tally_home_column_block['skin'].'/js.php');
								if(tally_option($block_id.'enable') == 1){
									if(file_exists($js_file)){
										include($js_file);
									}
								}
								$check_js[] = $tally_home_column_block['name'].'__'.$tally_home_column_block['skin'];
							}
							
						}
					}
				}
			}
		}
	}
}