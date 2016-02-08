<div class="tally_homeBlock_testimonial thbt_skin1 thbt_<?php echo $tally_home_column_block['id']; ?>">
	<div class="thbt_inner">
    	
        <div class="thbt_info">
        	<?php if(tally_option($block_id.'image') != ''): ?>
        		<img src="<?php echo tally_image( tally_option($block_id.'image'), 120, 120, true); ?>" alt="<?php echo tally_option($block_id.'name'); ?>" />
            <?php endif; ?>
            <?php if(tally_option($block_id.'name') != ''): ?>
            	<p>
                	<?php if(tally_option($block_id.'link') != ''): ?>
                        <a href="<?php echo tally_option($block_id.'link'); ?>"><?php echo tally_option($block_id.'name'); ?></a>
                    <?php else: ?>
                    	<?php echo tally_option($block_id.'name'); ?>
                    <?php endif; ?>
                </p>
            <?php endif; ?>
            <?php if(tally_option($block_id.'title') != ''): ?>
            	<span><?php echo tally_option($block_id.'title'); ?></span>
            <?php endif; ?>
            <i class="fa fa-quote-right"></i>
        </div>
        <div class="thbt_content">
        	<?php echo tally_option($block_id.'des'); ?>
        </div>
        <div class="clear"></div>
    </div>
</div>