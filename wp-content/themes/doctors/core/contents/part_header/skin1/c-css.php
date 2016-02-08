<?php
$color_prefix = 'tally_color_header_';
$option_prefix = 'tally_header_';
?>


/* Header (1)
================================================== */
.tally_header_1{
	background-color:<?php echo tally_option($color_prefix.'bg'); ?>;
    color:<?php echo tally_option($color_prefix.'text'); ?>;
    background-image:url(<?php echo tally_option($color_prefix.'bgImage'); ?>);
	background-repeat:<?php echo tally_option($color_prefix.'bgImage_repeat'); ?>;
	background-position:<?php echo tally_option($color_prefix.'bgImage_position'); ?>;
    background-attachmen:<?php echo tally_option($color_prefix.'bgImage_attachment'); ?>;
    background-size:<?php echo tally_option($color_prefix.'bgImage_size'); ?>;
}
.tally_header_1 .th_logo span{ color:<?php echo tally_option($color_prefix.'textMeta', '#a6acb3'); ?>; }
.tally_header_1 .th_iconbox .fa {
	color: <?php echo tally_option($color_prefix.'icon', '#fff'); ?>;
	background-color: <?php echo tally_option($color_prefix.'iconBg', '#e9edf1'); ?>;
}
.tally_header_1 .th_iconbox_text p{ color: <?php echo tally_option($color_prefix.'text', '#676b6f'); ?>; }
.tally_header_1 .th_iconbox_text span{ color: <?php echo tally_option($color_prefix.'textMeta', '#a6acb3'); ?>; }
.tally_header_1 .th_social a{ 
	background-color: <?php echo tally_option($color_prefix.'social_icon_bg', '#e9edf1'); ?>;
    color: <?php echo tally_option($color_prefix.'social_icon', '#676b6f'); ?>; 
}
.tally_header_1 .th_social a:hover{ 
	background-color: <?php echo tally_option($color_prefix.'social_icon_hover_bg', '#e9edf1'); ?>;
    color: <?php echo tally_option($color_prefix.'social_icon_hover', '#676b6f'); ?>; 
}
.tally_header_1 .th_phone a{ 
	background-color: <?php echo tally_option('tally_color_accent_primary'); ?>;
    border-color: <?php echo tally_option('tally_color_accent_primary'); ?>;
}


<?php
$option_prefix = 'tally_color_menu_';
?>
/*~~~~~~~~~~~Menu~~~~~~~~~~~*/
.tally_header_1 .main_menu{
	border-color: <?php echo tally_option($color_prefix.'border', '#a6acb3'); ?>;
}
.tally_header_1 .main_menu ul li a{
	color:<?php echo tally_option($option_prefix.'text', '#676b6f'); ?>;
    border-color:<?php echo tally_option($option_prefix.'border', '#676b6f'); ?>;
    background-color:<?php echo tally_option($option_prefix.'bg', '#676b6f'); ?>;
}
.tally_header_1 .main_menu ul li a:hover{
	color:<?php echo tally_option($option_prefix.'textHover', '#676b6f'); ?>;
    border-color:<?php echo tally_option($option_prefix.'borderHover', '#676b6f'); ?>;
    background-color:<?php echo tally_option($option_prefix.'bgHover', '#676b6f'); ?>;
}
		
/**** 1st level dropdown an all level dropdown style ****/
.tally_header_1 .main_menu ul li ul{
	background-color: <?php echo tally_option($option_prefix.'bg', '#FCFCFC'); ?>;
    border-color:<?php echo tally_option($option_prefix.'borderSub', '#E9EDF1'); ?>;
}
.tally_header_1 .main_menu ul li ul li a{
	border-color:<?php echo tally_option($option_prefix.'borderSub', '#E9EDF1'); ?>;
    color:<?php echo tally_option($option_prefix.'textSub', '#676b6f'); ?>;
    background-color:<?php echo tally_option($option_prefix.'bgSub', '#676b6f'); ?>;
}	
.tally_header_1 .main_menu div ul li ul li a:hover{
	border-color:<?php echo tally_option($option_prefix.'borderHoverSub', '#E9EDF1'); ?>;
    color:<?php echo tally_option($option_prefix.'textHoverSub', '#676b6f'); ?> !important;
    background-color:<?php echo tally_option($option_prefix.'bgHoverSub', '#676b6f'); ?>;
}