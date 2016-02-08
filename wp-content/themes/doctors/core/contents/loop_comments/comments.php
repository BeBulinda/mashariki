<?php
function tally_content_loop_comments(){
	$file = tally_file_directory('contents/loop_comments/'.tally_config('loop_comments').'/html.php');
	if( file_exists($file) ){ 
		include($file); 
	}
}