<?php
function tally_content_part_footerWidgets(){
	$file = tally_file_directory('contents/part_footerWidgets/'.tally_config('part_footerWidgets').'/html.php');
	if( file_exists($file) ){ 
		include($file); 
	}
}