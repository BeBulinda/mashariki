<?php
function tally_content_loop_author(){	
	$file = tally_file_directory('contents/loop_author/'.tally_config('loop_author').'/html.php');
	if( file_exists($file) ){ 
		include($file); 
	}
}