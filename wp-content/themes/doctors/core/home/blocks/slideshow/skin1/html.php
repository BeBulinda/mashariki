<div class="tally_homeBlock_slideshow thbs_<?php echo $tally_home_column_block['id']; ?>">
	<div class="thbs_flexslider">
    	<ul class="slides">
        	<?php if(tally_option($block_id.'1_enable')): ?>
            	<li>
                	<?php if((tally_option($block_id.'1_title') != '') || (tally_option($block_id.'1_des') != '') ): ?>
                        <div class="thbs_caption">
                        	<div class="thbs_caption_inner">
                            	<span></span>
                                <div class="thbs_caption_content">
									<?php if(tally_option($block_id.'1_title') != ''): ?>
                                        <h4 class="thbs_title"><?php echo tally_option($block_id.'1_title'); ?></h4>
                                    <?php endif; ?>
                                    <?php if(tally_option($block_id.'1_des') != ''): ?>
                                        <p class="thbs_des"><?php echo tally_option($block_id.'1_des'); ?></p>
                                    <?php endif; ?>
                                    <?php if(tally_option($block_id.'1_link') != ''): ?>
                                        <a href="<?php echo tally_option($block_id.'1_link'); ?>" class="thbs_more"><?php echo tally_option($block_id.'1_more'); ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                	<img src="<?php echo tally_image(tally_option($block_id.'1_image'), 1400, 520, true); ?>" alt="<?php echo tally_option($block_id.'1_title'); ?>" />
                </li>
            <?php endif; ?>
            <?php if(tally_option($block_id.'2_enable')): ?>
            	<li>
                	<?php if((tally_option($block_id.'2_title') != '') || (tally_option($block_id.'2_des') != '') ): ?>
                        <div class="thbs_caption">
                        	<div class="thbs_caption_inner">
                            	<span></span>
                                <div class="thbs_caption_content">
									<?php if(tally_option($block_id.'2_title') != ''): ?>
                                        <h4 class="thbs_title"><?php echo tally_option($block_id.'2_title'); ?></h4>
                                    <?php endif; ?>
                                    <?php if(tally_option($block_id.'2_des') != ''): ?>
                                        <p class="thbs_des"><?php echo tally_option($block_id.'2_des'); ?></p>
                                    <?php endif; ?>
                                    <?php if(tally_option($block_id.'2_link') != ''): ?>
                                        <a href="<?php echo tally_option($block_id.'2_link'); ?>" class="thbs_more"><?php echo tally_option($block_id.'2_more'); ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                	<img src="<?php echo tally_image(tally_option($block_id.'2_image'), 1400, 520, true); ?>" alt="<?php echo tally_option($block_id.'2_title'); ?>" />
                </li>
            <?php endif; ?>
            <?php if(tally_option($block_id.'3_enable')): ?>
            	<li>
                	<?php if((tally_option($block_id.'3_title') != '') || (tally_option($block_id.'3_des') != '') ): ?>
                        <div class="thbs_caption">
                        	<div class="thbs_caption_inner">
                            	<span></span>
                                <div class="thbs_caption_content">
									<?php if(tally_option($block_id.'3_title') != ''): ?>
                                        <h4 class="thbs_title"><?php echo tally_option($block_id.'3_title'); ?></h4>
                                    <?php endif; ?>
                                    <?php if(tally_option($block_id.'3_des') != ''): ?>
                                        <p class="thbs_des"><?php echo tally_option($block_id.'3_des'); ?></p>
                                    <?php endif; ?>
                                    <?php if(tally_option($block_id.'3_link') != ''): ?>
                                        <a href="<?php echo tally_option($block_id.'3_link'); ?>" class="thbs_more"><?php echo tally_option($block_id.'3_more'); ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                	<img src="<?php echo tally_image(tally_option($block_id.'3_image'), 1400, 520, true); ?>" alt="<?php echo tally_option($block_id.'3_title'); ?>" />
                </li>
            <?php endif; ?>
            <?php if(tally_option($block_id.'4_enable')): ?>
            	<li>
                	<?php if((tally_option($block_id.'4_title') != '') || (tally_option($block_id.'4_des') != '') ): ?>
                        <div class="thbs_caption">
                        	<div class="thbs_caption_inner">
                            	<span></span>
                                <div class="thbs_caption_content">
									<?php if(tally_option($block_id.'4_title') != ''): ?>
                                        <h4 class="thbs_title"><?php echo tally_option($block_id.'4_title'); ?></h4>
                                    <?php endif; ?>
                                    <?php if(tally_option($block_id.'4_des') != ''): ?>
                                        <p class="thbs_des"><?php echo tally_option($block_id.'4_des'); ?></p>
                                    <?php endif; ?>
                                    <?php if(tally_option($block_id.'4_link') != ''): ?>
                                        <a href="<?php echo tally_option($block_id.'4_link'); ?>" class="thbs_more"><?php echo tally_option($block_id.'4_more'); ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                	<img src="<?php echo tally_image(tally_option($block_id.'4_image'), 1400, 520, true); ?>" alt="<?php echo tally_option($block_id.'4_title'); ?>" />
                </li>
            <?php endif; ?>
            <?php if(tally_option($block_id.'5_enable')): ?>
            	<li>
                	<?php if((tally_option($block_id.'5_title') != '') || (tally_option($block_id.'5_des') != '') ): ?>
                        <div class="thbs_caption">
                        	<div class="thbs_caption_inner">
                            	<span></span>
                                <div class="thbs_caption_content">
									<?php if(tally_option($block_id.'5_title') != ''): ?>
                                        <h4 class="thbs_title"><?php echo tally_option($block_id.'5_title'); ?></h4>
                                    <?php endif; ?>
                                    <?php if(tally_option($block_id.'5_des') != ''): ?>
                                        <p class="thbs_des"><?php echo tally_option($block_id.'5_des'); ?></p>
                                    <?php endif; ?>
                                    <?php if(tally_option($block_id.'5_link') != ''): ?>
                                        <a href="<?php echo tally_option($block_id.'5_link'); ?>" class="thbs_more"><?php echo tally_option($block_id.'5_more'); ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                	<img src="<?php echo tally_image(tally_option($block_id.'5_image'), 1400, 520, true); ?>" alt="<?php echo tally_option($block_id.'5_title'); ?>" />
                </li>
            <?php endif; ?>
        </ul>
    </div>
	<script type="text/javascript">
		jQuery(window).load(function(){
			jQuery('.thbs_flexslider').flexslider({
				animation: "slide",
				namespace: "tfs-",
			});
		});
	</script>
</div>