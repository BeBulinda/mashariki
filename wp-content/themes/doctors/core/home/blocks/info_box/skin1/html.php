<div class="tally_homeBlock_infoBox thBi_skin1 thBi_<?php echo $tally_home_column_block['id']; ?>">
	<div class="thbib_inner">
    	<h4 class="thbib_title">
        	<?php if(tally_option($block_id.'fontIcon') != ''): ?>
            	<i class="fa <?php echo tally_option($block_id.'fontIcon'); ?>"></i>
            <?php elseif(tally_option($block_id.'imageIcon') != ''): ?>
            	<img src="<?php echo tally_option($block_id.'imageIcon'); ?>" alt="<?php echo tally_option($block_id.'title'); ?>" />
			<?php endif; ?>
            
            <?php if(tally_option($block_id.'link') != ''): ?>
            	<a href="<?php echo tally_option($block_id.'link'); ?>">
					<?php echo tally_option($block_id.'title'); ?>
                </a>
            <?php else: ?>
            	<?php echo tally_option($block_id.'title'); ?>
            <?php endif; ?>
        	
        </h4>
        <div class="thbib_text"><?php echo tally_option($block_id.'des'); ?></div>
        <?php if((tally_option($block_id.'link') != '') && (tally_option($block_id.'more') != '')): ?>
        	<a class="thbib_more" href="<?php echo tally_option($block_id.'link'); ?>"><?php echo tally_option($block_id.'more'); ?></a>
        <?php endif; ?>
    </div>
</div>