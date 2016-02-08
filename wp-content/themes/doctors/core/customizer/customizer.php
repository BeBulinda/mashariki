<?php
include('general.php');
include('header-footer.php');
include('color.php');
include('font.php');

include('help/help_function.php');
include('help/custom_control_heading.php');
include('help/custom_control_image.php');
include('help/custom_control_text.php');
include('help/custom_control_textarea.php');
include('help/custom_control_checkbox.php');
include('help/custom_control_select.php');
include('help/custom_control_color.php');


function tally_customizer_button_set(){
	
	if(tally_config('type') == 'none'){ 
		wp_register_script( 'tally_customizer_buttons', TALLY_CUSTOMIZE_URL . '/customizer-controls.js', array("jquery"), '20120206', true  );
		wp_enqueue_script( 'tally_customizer_buttons' );
		wp_localize_script( 'tally_customizer_buttons', 'objectL10n', array(
			'doc' => __( 'Documentation', 'doctors' ),
			'pro' => __('View PRO version','doctors'),
			'doc_url' => tally_config('doc_url'),
			'pro_url' => tally_config('theme_url'),
			
		) );
	}

}
add_action( 'customize_controls_enqueue_scripts', 'tally_customizer_button_set' );