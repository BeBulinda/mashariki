<?php
function tally_content_part_sidebar(){
	$file = tally_file_directory('contents/part_sidebar/'.tally_config('part_sidebar').'/html.php');
	if( file_exists($file) ){ 
		include($file); 
	}
}