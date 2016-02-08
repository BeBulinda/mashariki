<div id="ti-sidebar" class="span3">
    <?php
    if(!dynamic_sidebar('sidebar-2')){
        the_widget('WP_Widget_Meta',array('title'=>'Meta'));
        the_widget('WP_Widget_Recent_Posts',array('title'=>'Latest Posts'));
        the_widget('WP_Widget_Recent_Comments',array('title'=>'Latest Comments')); 
        the_widget('WP_Widget_Categories',array('title'=>'Categories'));
    }
    ?>
</div>