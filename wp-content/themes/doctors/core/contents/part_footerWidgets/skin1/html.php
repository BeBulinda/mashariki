<?php 
if(tally_option('tally_footer_showWidget') == 'yes'): 
$tally_widgetLayout = tally_option('tally_footer_widgetLayout');
?>
<div class="tally-footerWidgets tally-footerWidgets-1">
	<div id="fwidget-inner" class="site_content_width">
    	<div class="col-holder nomargin">
        	<?php if($tally_widgetLayout == '3/3/3/3'): ?>
                <div class="col col_3"><?php dynamic_sidebar('footer_widget_1'); ?></div>
                <div class="col col_3"><?php dynamic_sidebar('footer_widget_2'); ?></div>
                <div class="col col_3"><?php dynamic_sidebar('footer_widget_3'); ?></div>
                <div class="col col_3"><?php dynamic_sidebar('footer_widget_4'); ?></div>
            <?php elseif($tally_widgetLayout == '4/4/4'): ?>
                <div class="col col_4"><?php dynamic_sidebar('footer_widget_1'); ?></div>
                <div class="col col_4"><?php dynamic_sidebar('footer_widget_2'); ?></div>
                <div class="col col_4"><?php dynamic_sidebar('footer_widget_3'); ?></div>
            <?php elseif($tally_widgetLayout == '6/6'): ?>
                <div class="col col_6"><?php dynamic_sidebar('footer_widget_1'); ?></div>
                <div class="col col_6"><?php dynamic_sidebar('footer_widget_2'); ?></div>
            <?php elseif($tally_widgetLayout == '12'): ?>
                <div class="col col_12"><?php dynamic_sidebar('footer_widget_1'); ?></div>
            <?php elseif($tally_widgetLayout == '6/3/3'): ?>
                <div class="col col_6"><?php dynamic_sidebar('footer_widget_1'); ?></div>
                <div class="col col_3"><?php dynamic_sidebar('footer_widget_2'); ?></div>
                <div class="col col_3"><?php dynamic_sidebar('footer_widget_3'); ?></div>
            <?php elseif($tally_widgetLayout == '3/3/6'): ?>
                <div class="col col_3"><?php dynamic_sidebar('footer_widget_1'); ?></div>
                <div class="col col_3"><?php dynamic_sidebar('footer_widget_2'); ?></div>
                <div class="col col_6"><?php dynamic_sidebar('footer_widget_3'); ?></div>
            <?php elseif($tally_widgetLayout == '3/6/3'): ?>
                <div class="col col_3"><?php dynamic_sidebar('footer_widget_1'); ?></div>
                <div class="col col_6"><?php dynamic_sidebar('footer_widget_2'); ?></div>
                <div class="col col_3"><?php dynamic_sidebar('footer_widget_3'); ?></div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php endif; ?>