<?php
function tally_content_loop_frontPage(){
	$file = tally_file_directory('contents/loop_frontPage/'.tally_config('loop_frontPage').'/html.php');
	if( file_exists($file) ){ 
		include($file); 
	}
}