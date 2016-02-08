<?php
function tally_content_part_header(){
	$file = tally_file_directory('contents/part_header/'.tally_config('part_header').'/html.php');
	if( file_exists($file) ){ 
		include($file); 
	}	
}