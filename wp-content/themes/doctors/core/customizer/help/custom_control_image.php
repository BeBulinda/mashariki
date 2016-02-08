<?php
if( class_exists( 'WP_Customize_Control' ) ):
	class tally_Customize_Control_TextBlock extends WP_Customize_Control {
		
		public $description;
		public $src;
		public $link;
		
		public function render_content(){	
			if($this->description){ echo '<p>'.$this->description.'</p>'; }
			if($this->src){ 
				if($this->link){ echo '<a href="'.$this->link.'" target="_blank">'; }
					echo '<img src="'.$this->src.'" />';
				if($this->link){ echo '</a>'; }
			}
		}
	}
endif;