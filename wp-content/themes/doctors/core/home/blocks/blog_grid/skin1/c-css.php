.tally_homeBlock_blogGrid.thbbg_skin1 .thbbg_item_inner{
	background-color:<?php echo tally_home_style_option($tally_home['id'].'_settings_', 'bg'); ?>;
}
#site-main .tally_homeBlock_blogGrid.thbbg_skin1 .thbbg_item_inner{
	border-color:<?php echo tally_home_style_option($tally_home['id'].'_settings_', 'bgAlt'); ?> !important;
}
.tally_homeBlock_blogGrid.thbbg_skin1 .thbbg_item h4 a:hover{ 
	color:<?php echo tally_option('tally_color_accent_primary'); ?> !important; 
}
.tally_homeBlock_blogGrid.thbbg_skin1 .thbbg_item_more{ 
	background-color: <?php echo tally_home_style_option($tally_home['id'].'_settings_', 'bgAlt'); ?>;
}
.tally_homeBlock_blogGrid.thbbg_skin1 .thbbg_item_more:hover{
	background-color:<?php echo tally_option('tally_color_accent_primary'); ?>;
}
.tally_homeBlock_blogGrid.thbbg_skin1 .thbbg_moreBlog span{
	background-color:<?php echo tally_option('tally_color_accent_primary'); ?>;
}
.tally_homeBlock_blogGrid.thbbg_skin1 .thbbg_moreBlog span:hover{
	background-color: <?php echo tally_option('tally_color_accent_info'); ?>;
}