<div id="ti-subfooter-sidebar" class="row">
    <?php if (!dynamic_sidebar('sidebar-3')) {
        ?>
        <div class="span3"><?php the_widget('WP_Widget_Recent_Comments', array('title' => __('Recent comments', 'minima'))); ?></div><?php
        ?>
        <div class="span3"><?php the_widget('WP_Widget_Meta', array('title' => __('Meta', 'minima'))); ?></div><?php
        ?>
        <div class="span3"><?php the_widget( 'WP_Widget_Text', array("title"=> __('About minima','minima'),
            'text'=>'Minima Lite is a flat and minimalist theme. Minima is built using 12 columns responsive grid system.
<br/>This theme packs a powerful admin panel to manage appearance and typography of your blog elements
and this theme is translation ready.') ); ?> </div><?php
        ?>
        <div class="span3"><?php the_widget('WP_Widget_Recent_Posts', array('title' => __('Latest posts', 'minima'),'number'=>10)); ?></div><?php
    } ?>
</div>