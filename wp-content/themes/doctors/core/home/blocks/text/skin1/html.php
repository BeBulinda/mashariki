<div class="tally_homeBlock_text thbt_skin1 thbt_<?php echo $tally_home_column_block['id']; ?> thbt_align_<?php echo tally_option($block_id.'align'); ?>">
	<div class="thbt_inner">
    	<?php if(tally_option($block_id.'title') != ''): 
			$css_style ='';
			if(tally_option($block_id.'subtitle') != ''){ $css_style = 'style="margin-bottom:0;"'; }
		?>
            <h4 class="thbt_title" <?php echo $css_style; ?>>
                <?php echo tally_option($block_id.'title'); ?>
            </h4>
        <?php endif; ?>
        <?php if(tally_option($block_id.'subtitle') != ''): ?>
            <span class="thbt_subtitle">
                <?php echo tally_option($block_id.'subtitle'); ?>
            </span>
        <?php endif; ?>
        <?php if(tally_option($block_id.'des') != ''): ?>
            <div class="thbt_des">
                <?php echo do_shortcode(tally_option($block_id.'des')); ?>
            </div>
        <?php endif; ?>
        <?php if((tally_option($block_id.'link') != '') && (tally_option($block_id.'more') != '')): ?>
        	<a class="thbt_more" href="<?php echo tally_option($block_id.'link'); ?>">
				<?php echo tally_option($block_id.'more'); ?>
            </a>
        <?php endif; ?>
    </div>
</div>