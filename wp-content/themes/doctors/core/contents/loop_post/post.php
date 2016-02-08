<?php
function tally_content_loop_post(){
	$file = tally_file_directory('contents/loop_post/'.tally_config('loop_post').'/html.php');
	if( file_exists($file) ){ 
		include($file); 
	}	
}