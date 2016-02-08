<div class="tally_subHeader tally_subHeader_1">
	<div class="tsh_inner site_content_width">
    	<div class="tsh_title_area">
            <h1 class="tsh_title">
				<?php
					if(is_category()){
						_e('Post Category: ', 'doctors');
						single_cat_title( '', true );
					}elseif(is_404()){
						_e('Page not Found', 'doctors');
					}elseif(is_author()){
						_e('Author Profile: ', 'doctors');
						echo get_the_author();
					}elseif(is_search()){
						_e('Search Result of: ', 'doctors');
						echo $_GET['s'];
					}elseif(is_tag()){
						_e('Post Tag: ', 'doctors');
						single_tag_title();
					}elseif(is_date()){
						_e('Archive: ', 'doctors');
						single_month_title(' ');
					}elseif(in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) )){
						if(is_page(wc_get_page_id( 'shop' )) || is_archive('product')){
							woocommerce_page_title();
						}else{
							the_title();
						}
					}else{
						the_title();
					}
				?>
            </h1>
            
            <?php if(tally_option('tally_subheader_showSubtitle') == true): ?>
            <p class="tsh_subtitle">
            	<?php
					if(is_category()){
						 echo category_description();
					}elseif(is_tag()){
						echo tag_description();
					}elseif(is_single() && is_page()){
						echo get_post_meta(get_the_ID(), 'tally_subtitle', true);
					}
				?>
           		
            </p>
            <?php endif; ?>
        </div>
        <?php if(tally_option('tally_subheader_showBreadcrumb') == true): ?>
        <div class="tsh_breadcrumbs">
        	<div class="tsh_breadcrumbs_inner">
				<?php tally_breadcrumb(); ?>
            </div>
		</div>
        <?php endif; ?>
    </div>
</div>