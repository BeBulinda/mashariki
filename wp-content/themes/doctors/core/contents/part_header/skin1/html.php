<div class="tally_header tally_header_1">
	<div class="th_branding site_content_width">
    	<div class="th_logo">
        	<?php if(tally_option('tally_header_logo') != ''): ?>
        		<a href="<?php echo home_url(); ?>"><img src="<?php echo tally_option('tally_header_logo'); ?>" alt="<?php bloginfo('name'); ?>" /></a>
            <?php else: ?>
            	<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
				<span><?php bloginfo( 'description' ); ?></span>
            <?php endif; ?>
        </div>
        <div class="th_elements">
        	<?php if(tally_option('tally_header_address_enable') == 'yes'): ?>
                <div class="th_element">
                	<div class="th_iconbox">
                        <i class="fa <?php echo tally_option('tally_header_address_icon', 'fa-home'); ?> fa-3x"></i>
                        <div class="th_iconbox_text">
                            <p><?php echo tally_option('tally_header_address_1'); ?></p>
                            <span><?php echo tally_option('tally_header_address_2'); ?></span>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(tally_option('tally_header_openTime_enable') == 'yes'): ?>
                <div class="th_element">
                	<div class="th_iconbox">
                        <i class="fa <?php echo tally_option('tally_header_openTime_icon', 'fa-clock-o'); ?> fa-3x "></i>
                        <div class="th_iconbox_text">
                            <p><?php echo tally_option('tally_header_openTime_1'); ?></p>
                            <span><?php echo tally_option('tally_header_openTime_2'); ?></span>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(tally_option('tally_header_socialIcon_enable') == 'yes'): ?>
                <div class="th_social th_element">
                    <?php if(tally_option('tally_header_socialIcon_facebook', 'url') != ''): ?>
                    	<a href="<?php echo tally_option('tally_header_socialIcon_facebook', 'url'); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
					<?php endif; ?>
                    <?php if(tally_option('tally_header_socialIcon_twitter', 'url') != ''): ?>
                    	<a href="<?php echo tally_option('tally_header_socialIcon_twitter', 'url'); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                    <?php endif; ?>  
                    <?php if(tally_option('tally_header_socialIcon_youtube', 'url') != ''): ?>                 
                    	<a href="<?php echo tally_option('tally_header_socialIcon_youtube', 'url'); ?>" target="_blank"><i class="fa fa-youtube"></i></a>
                    <?php endif; ?>
                    <?php if(tally_option('tally_header_socialIcon_instagram', 'url') != ''): ?>                 
                    	<a href="<?php echo tally_option('tally_header_socialIcon_instagram', 'url'); ?>" target="_blank"><i class="fa fa-instagram"></i></a>
                    <?php endif; ?>
                    <?php if(tally_option('tally_header_socialIcon_linkedin', 'url') != ''): ?>                 
                    	<a href="<?php echo tally_option('tally_header_socialIcon_linkedin', 'url'); ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <?php if(tally_option('tally_header_phone') != ''): ?>
                <div class="th_phone th_element">
                    <a href="tel:<?php echo tally_option('tally_header_phone'); ?>">
                        <i class="fa fa-phone"></i><span><?php echo tally_option('tally_header_phone'); ?></span>
                    </a>
                </div>
            <?php endif; ?>
        </div>
        <div class="clear"></div>
    </div>
    <nav class="main_menu" role="navigation">
    	<div class="site_content_width">
        	<?php wp_nav_menu( array('theme_location'=>'main_menu') ); ?>
            <div class="clear"></div>
        </div>
    </nav>
    <nav class="responsive-menu" role="navigation">
    	
    </nav>
    <a href="#" class="responsive-menu-hand"><i class="fa fa-tasks"></i></a>
</div>