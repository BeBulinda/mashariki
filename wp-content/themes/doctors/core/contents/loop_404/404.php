<?php
function tally_content_loop_404(){
	$file = tally_file_directory('contents/loop_404/'.tally_config('loop_404').'/html.php');
	
	if( file_exists($file) ){ 
		include($file); 
	}
}