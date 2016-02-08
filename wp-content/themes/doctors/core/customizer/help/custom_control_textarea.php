<?php
if( class_exists( 'WP_Customize_Control' ) ):
	class tally_Customize_Control_Textarea extends WP_Customize_Control {
		
		public $description;
		public $type = 'textarea';
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
				<?php if ( ! empty( $this->label ) ) : ?>
					<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
				<?php endif;
				if ( ! empty( $this->description ) ) : ?>
					<span class="description customize-control-description"><?php echo $this->description; ?></span>
				<?php endif; ?>
				<textarea rows="5" <?php $this->link(); ?> <?php tally_customize_help_disabled($this->css_class); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
			</label>
            <?php
			tally_customize_help_end($this->css_class);
		}
	}
endif;