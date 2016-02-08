<?php
function tally_content_loop_tag(){
	$file = tally_file_directory('contents/loop_tag/'.tally_config('loop_tag').'/html.php');
	if( file_exists($file) ){ 
		include($file); 
	}
}