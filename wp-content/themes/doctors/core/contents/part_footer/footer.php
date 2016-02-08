<?php
function tally_content_part_footer(){
	$file = tally_file_directory('contents/part_footer/'.tally_config('part_footer').'/html.php');
	if( file_exists($file) ){ 
		include($file); 
	}
}