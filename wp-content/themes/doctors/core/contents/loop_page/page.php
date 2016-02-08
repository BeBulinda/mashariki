<?php
function tally_content_loop_page(){
	$file = tally_file_directory('contents/loop_page/'.tally_config('loop_page').'/html.php');
	if( file_exists($file) ){ 
		include($file); 
	}
}