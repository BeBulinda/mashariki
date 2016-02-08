<?php
function tally_content_loop_category(){
	$file = tally_file_directory('contents/loop_category/'.tally_config('loop_category').'/html.php');
	if( file_exists($file) ){ 
		include($file); 
	}
}