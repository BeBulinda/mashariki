<?php
/*	Frontend Script
-------------------------------------------*/
function tally_additional_script_loader(){
	
}
add_action('wp_enqueue_scripts', 'tally_additional_script_loader');



/*	Admin Script
-------------------------------------------*/
function tally_additional_admin_script_loader(){
	
}
add_action('admin_enqueue_scripts', 'tally_additional_admin_script_loader');