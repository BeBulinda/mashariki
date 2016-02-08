<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Lucy
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header class="top">
		<div class="wrap-grid height-auto">
		     <h1 class="logo">
				<?php if ( get_theme_mod('pp_logo_upload') ) { ?>
				   <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url(get_theme_mod('pp_logo_upload')); ?>" /></a>
				<?php } else if (get_theme_mod('text_logo_1')){  ?>
					<a href="<?php echo esc_url(home_url('/')); ?>"><span class="green merinda"><?php echo esc_html(get_theme_mod('text_logo_1')); ?></span><span class="gray"><?php echo esc_html(get_theme_mod('text_logo_2')); ?></span></a>
				<?php } else {  ?>
					<a href="<?php echo esc_url(home_url('/')); ?>"><span class="green merinda"><?php bloginfo('name'); ?></span></a>
				<?php } ?>		
			</h1>
			<div class="menu-three-lines close"><span></span></div>
			<div class="menu-mobile hide-menu">
				<?php if ( has_nav_menu( 'main-menu' ) ) { ?>
				   <?php wp_nav_menu( array('container'=> '', 'theme_location' => 'main-menu', 'items_wrap'  => '<ul class="menu-top mobile">%3$s</ul>'  ) ); ?>
				<?php } else { ?>
					<?php wp_nav_menu(  array('container'=> '', 'items_wrap'  => '<ul class="menu-top mobile">%3$s</ul>' ) ); ?>	
				<?php } ?>
			</div>
			<?php if ( has_nav_menu( 'main-menu' ) ) { ?>
			   <?php wp_nav_menu( array('container'=> '', 'theme_location' => 'main-menu', 'items_wrap'  => '<ul class="menu-top desktop">%3$s</ul>'  ) ); ?>
			<?php } else { ?>
				<?php wp_nav_menu(  array('container'=> '', 'items_wrap'  => '<ul class="menu-top desktop">%3$s</ul>' ) ); ?>	
			<?php } ?>			
		</div>    
	</header>