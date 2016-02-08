<?php
function tally_content_loop_search(){
	$file = tally_file_directory('contents/loop_search/'.tally_config('loop_search').'/html.php');
	if( file_exists($file) ){ 
		include($file); 
	}
}