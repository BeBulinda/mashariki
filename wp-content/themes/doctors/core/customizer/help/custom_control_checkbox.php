<?php
if( class_exists( 'WP_Customize_Control' ) ):
	class tally_Customize_Control_Checkbox extends WP_Customize_Control {
		
		public $description;
		public $type = 'checkbox';
		public $link;
		public $statuses;
		public $css_class;
		
		public function __construct( $manager, $id, $args = array() ) {
			$this->statuses = array( '' => __( 'Default', 'doctors'  ) );
			parent::__construct( $manager, $id, $args );
		}
		
		public function render_content(){
			tally_customize_help_start($this->css_class)
			?>
            <label class="<?php echo esc_attr( $this->css_class ); ?>">
				<input type="checkbox" value="<?php echo esc_attr( $this->value() ); ?>" <?php $this->link(); checked( $this->value() ); ?> <?php tally_customize_help_disabled($this->css_class); ?>/>
				<?php echo esc_html( $this->label ); ?>
				<?php if ( ! empty( $this->description ) ) : ?>
					<span class="description customize-control-description"><?php echo $this->description; ?></span>
				<?php endif; ?>
			</label>
            <?php
			tally_customize_help_end($this->css_class);
		}
	}
endif;