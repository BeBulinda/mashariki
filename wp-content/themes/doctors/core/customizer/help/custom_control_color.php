<?php
if( class_exists( 'WP_Customize_Control' ) ):
	class tally_Customize_Control_Color extends WP_Customize_Control {
		
		public $description;
		public $type = 'color';
		public $link;
		public $statuses;
		public $css_class;
		
		public function __construct( $manager, $id, $args = array() ) {
			$this->statuses = array( '' => __( 'Default', 'doctors'  ) );
			

			parent::__construct( $manager, $id, $args );
			if( 
				((tally_config('type') == 'none') && ($this->css_class == 'biz')) || 
				((tally_config('type') == 'away') && ($this->css_class == 'hbiz'))  || 
				((tally_config('type') == 'none') && ($this->css_class == 'hbiz')) 
			){
				$this->type = 's';
			}
		}

		public function enqueue() {
			wp_enqueue_script( 'wp-color-picker' );
			wp_enqueue_style( 'wp-color-picker' );
		}
		
		public function to_json() {
			parent::to_json();
			$this->json['statuses'] = $this->statuses;
			$this->json['defaultValue'] = $this->setting->default;
		}
		
		public function render_content(){
			if( 
				((tally_config('type') == 'none') && ($this->css_class == 'biz')) || 
				((tally_config('type') == 'away') && ($this->css_class == 'hbiz'))  || 
				((tally_config('type') == 'none') && ($this->css_class == 'hbiz')) 
			){ 
				tally_customize_help_start($this->css_class);
				?>
                <script>
				jQuery(document).ready(function($){
					$('.my-color-field').wpColorPicker();
				});
				</script>
                
                <label class="<?php echo esc_attr( $this->css_class ); ?>">
					<?php if ( ! empty( $this->label ) ) : ?>
                        <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
                    <?php endif;
                    if ( ! empty( $this->description ) ) : ?>
                        <span class="description customize-control-description"><?php echo $this->description; ?></span>
                    <?php endif; ?>
                    <input type="text" value="<?php echo esc_attr( $this->value() ); ?>" class="my-color-field" data-default-color="<?php echo esc_attr( $this->value() ); ?>" />
                </label>
                <?php
				tally_customize_help_end($this->css_class);
			}
		}
		
		public function content_template() {
			?>
			<# var defaultValue = '';
			if ( data.defaultValue ) {
				if ( '#' !== data.defaultValue.substring( 0, 1 ) ) {
					defaultValue = '#' + data.defaultValue;
				} else {
					defaultValue = data.defaultValue;
				}
				defaultValue = ' data-default-color=' + defaultValue; // Quotes added automatically.
			} #>
			<label>
				<# if ( data.label ) { #>
					<span class="customize-control-title">{{{ data.label }}}</span>
				<# } #>
				<# if ( data.description ) { #>
					<span class="description customize-control-description">{{{ data.description }}}</span>
				<# } #>
				<div class="customize-control-content">
					<input class="color-picker-hex" type="text" maxlength="7" placeholder="<?php esc_attr_e( 'Hex Value', 'doctors' ); ?>" {{ defaultValue }} />
				</div>
			</label>
			<?php
		}
		
	}
endif;