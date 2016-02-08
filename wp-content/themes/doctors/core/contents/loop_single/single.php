<?php
function tally_content_loop_single(){
	$file = tally_file_directory('contents/loop_single/'.tally_config('loop_single').'/html.php');
	if( file_exists($file) ){ 
		include($file); 
	}
}