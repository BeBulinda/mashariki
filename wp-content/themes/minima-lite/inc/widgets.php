<?php
/**
 * Defines widgets available in Twist It Theme
 * @package minima
 */



/**
 * Adds Contact us widget.
 * @package minima
 */
class Minima_Contact_US_Widget extends WP_Widget
{

    /**
     * Register widget with WordPress.
     */
    public function __construct()
    {
        parent::__construct(
            'Minima_Contact_US_Widget', // Base ID
            'Minima Contact us', // Name
            array('description' => __('Theme inbuilt contact us widget.', 'minima'),) // Args
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget($args, $instance)
    {
        extract($args);
        $title = apply_filters('widget_title', $instance['title']);
        $address = nl2br(isset($instance['address'])?$instance['address']:'');
        echo $before_widget;
        if (!empty($title))
            echo $before_title . $title . $after_title;
        ?>
        <address class="subfooter-address">
            <?php echo $address; ?>
        </address>
        <p class="address-social-links">
            <span class="label"><?php _e("Follow us",'minima'); ?></span>

            <?php if (isset($instance['facebook'])&&!empty($instance['facebook'])) { ?>
                <a href="<?php echo $instance['facebook']; ?>" class="subfooter-social-icon"><span class="icon-facebook"></span> </a>
            <?php } ?>
            <?php if (isset($instance['twitter'])&&!empty($instance['twitter'])) { ?>
                <a href="<?php echo $instance['twitter']; ?>" class="subfooter-social-icon"><span class="icon-twitterbird"></span> </a>
            <?php } ?>
            <a href="<?php bloginfo('rss_url'); ?>" class="subfooter-social-icon"><span class="icon-rss"></span> </a>
            <?php if (isset($instance['linkedin'])&&!empty($instance['linkedin'])) { ?>
                <a href="<?php echo $instance['linkedin']; ?>" class="subfooter-social-icon"><span class="icon-linkedin"></span> </a>
            <?php } ?>
        </p>

        <?php
        echo $after_widget;
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] = sanitize_text_field($new_instance['title']);
        $instance['facebook'] = esc_url($new_instance['facebook']);
        $instance['twitter'] = esc_url($new_instance['twitter']);
        $instance['linkedin'] = esc_url($new_instance['linkedin']);
        $instance['address'] = esc_textarea($new_instance['address']);
        return $instance;
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form($instance)
    {
        if (isset($instance['title'])) {
            $title = $instance['title'];
        } else {
            $title = __('New title', 'minima');
        }
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title', 'minima'); ?>:</label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>"
                   name="<?php echo $this->get_field_name('title'); ?>" type="text"
                   value="<?php echo esc_attr($title); ?>"/>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('address'); ?>"><?php _e('Address', 'minima'); ?>:</label>
            <textarea id="<?php echo $this->get_field_id('address'); ?>"
                      name="<?php echo $this->get_field_name('address'); ?>"><?php echo esc_attr(isset($instance['address'])?$instance['address']:''); ?></textarea>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('facebook'); ?>"><?php _e('Facebook page URL', 'minima'); ?>
                :</label>
            <input class="widefat" id="<?php echo $this->get_field_id('facebook'); ?>"
                   name="<?php echo $this->get_field_name('facebook'); ?>" type="text"
                   value="<?php echo esc_attr(isset($instance['facebook'])?$instance['facebook']:''); ?>"/>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('twitter'); ?>"><?php _e('Twitter page URL', 'minima'); ?>
                :</label>
            <input class="widefat" id="<?php echo $this->get_field_id('twitter'); ?>"
                   name="<?php echo $this->get_field_name('twitter'); ?>" type="text"
                   value="<?php echo esc_attr(isset($instance['twitter'])?$instance['twitter']:''); ?>"/>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('linkedin'); ?>"><?php _e('Linkedin page URL', 'minima'); ?>
                :</label>
            <input class="widefat" id="<?php echo $this->get_field_id('linkedin'); ?>"
                   name="<?php echo $this->get_field_name('linkedin'); ?>" type="text"
                   value="<?php echo esc_attr(isset($instance['linkedin'])?$instance['linkedin']:''); ?>"/>
        </p>

    <?php
    }

}

// class Foo_Widget
add_action('widgets_init', create_function('', 'register_widget( "Minima_Contact_US_Widget" );'));
?>
