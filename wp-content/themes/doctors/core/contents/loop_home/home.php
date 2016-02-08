<?php
function tally_content_loop_home(){
	$file = tally_file_directory('contents/loop_home/'.tally_config('loop_home').'/html.php');
	if( file_exists($file) ){ 
		include($file); 
	}	
}