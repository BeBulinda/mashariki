<?php
if( class_exists( 'WP_Customize_Control' ) ):
	class tally_Customize_Control_heading extends WP_Customize_Control {
		
		public $label;
		public $description;
		
		public function render_content(){
			?>
            <div class="tally_Customize_Control_heading" style="padding:9px 15px; border:1px solid #f0f0f0; background-color:#f1f1f1; margin-left:-20px; margin-right:-20px; border-left: 0; border-right: 0; margin-bottom: 10px; margin-top: 20px;">
              	<?php
					if($this->label){ echo '<h4 style=" margin-bottom: 0; margin-top: 0;">'.$this->label.'</h4>'; }
					if($this->description){ echo '<p>'.$this->description.'</p>'; }
				?>
            </div>
            <?php
		}
	}
endif;