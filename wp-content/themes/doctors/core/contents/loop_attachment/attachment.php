<?php
function tally_content_loop_attachment(){
	$file = tally_file_directory('contents/loop_attachment/'.tally_config('loop_attachment').'/html.php');
	if( file_exists($file) ){ 
		include($file); 
	}
}