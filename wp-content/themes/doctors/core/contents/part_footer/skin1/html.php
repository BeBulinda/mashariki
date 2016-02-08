<div class="tally_footer">
	<div class="tally_footer_inner site_content_width">
    	<div class="col-holder nomargin">
        	<div class="col col_6">
            	<div class="copy_text">
            		<?php echo tally_option('tally_footer_copyright'); if(tally_option('tally_footer_credit') != ''){ echo " | "; echo tally_option('tally_footer_credit'); } ?>
                </div> 
            </div>
            <div class="col col_6">
            	<div class="footer_menu">
            		<?php wp_nav_menu( array('theme_location'=>'footer_menu') ); ?>
                </div>
            </div>
        </div>
    </div>
</div>