<?php
function tally_customize_help_start($class){
	if( 
		((tally_config('type') == 'none') && ($class == 'biz')) || 
		((tally_config('type') == 'away') && ($class == 'hbiz'))  || 
		((tally_config('type') == 'none') && ($class == 'hbiz')) 
	){ 
				echo '<div class="tally_customiz_biz" style="position: relative; border: solid 2px #36B200; padding: 5px; margin-bottom:10px; margin-top:5px;">';
					echo '<a href="'.tally_config('theme_url').'" target="_blank" style="color:#fff; position:absolute; height:100%; width: 100%; background-color: rgba(255,255,255,0.3); top: 0; left: 0; z-index: 1;"><span style="position: absolute; top: 0; right: 0; background-color: #36B200; padding: 0 5px;" >PRO Only</span></a>';
			}
}

function tally_customize_help_end($class){
	if( 
		((tally_config('type') == 'none') && ($class == 'biz')) || 
		((tally_config('type') == 'away') && ($class == 'hbiz'))  || 
		((tally_config('type') == 'none') && ($class == 'hbiz')) 
	){ echo '</div>'; }
}


function tally_customize_help_disabled($class){
	if( 
		((tally_config('type') == 'none') && ($class == 'biz')) || 
		((tally_config('type') == 'away') && ($class == 'hbiz'))  || 
		((tally_config('type') == 'none') && ($class == 'hbiz')) 
	){  echo ' disabled="disabled" '; }
}
