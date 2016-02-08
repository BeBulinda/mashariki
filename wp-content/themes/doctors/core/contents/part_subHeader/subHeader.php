<?php
function tally_content_part_subHeader(){	
	$file = tally_file_directory('contents/part_subHeader/'.tally_config('part_subHeader').'/html.php');
	if( file_exists($file) ){ 
		include($file); 
	}
}