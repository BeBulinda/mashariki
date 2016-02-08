<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package uniq
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'uniq' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
			<div class="container branding">
				<div class="six columns">
					<div class="site-branding">
						<?php 
							$logo_title = get_theme_mod( 'logo_title' );
							$logo = get_theme_mod( 'logo', '' );
							$tagline = get_theme_mod( 'tagline');
							if( $logo_title && $logo != '' ) : ?>
								<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo esc_url($logo) ?>"></a></h1>
						<?php else : ?>
								<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php endif; ?>
						<?php if( $tagline ) : ?>
								<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
						<?php endif; ?>
					</div>
				</div><!-- .site-branding -->
				<div class="ten columns nav-wrap">
					<div class="top-nav">
						<div class="row">
							<?php if( is_active_sidebar( 'top-left' ) ) : ?>
								<div class="cart eight columns">
									<?php dynamic_sidebar('top-left' ); ?>
								</div>
							<?php endif; ?>
							<?php if( is_active_sidebar('top-right' ) ) : ?>
								<div class="eight columns social">
									<?php dynamic_sidebar('top-right' ); ?>
								</div>
							<?php endif; ?>
						</div>
					</div> <!-- .top-nav -->
					<div class="search-wrap">
						<?php get_search_form(); ?>
					</div>
					<nav id="site-navigation" class="main-navigation clearfix" role="navigation">
						<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Primary Menu', 'uniq' ); ?></button>
						<?php 
							wp_nav_menu( array(
							 'theme_location' => 'primary',
							 'link_before' => '<span>',
							 'link_after' => '</span>'
						 	)
						 );						
						?>						
					</nav><!-- #site-navigation -->
				</div>
		</div><!-- .branding -->

	</header><!-- #masthead -->
	
<?php if( ! is_front_page() ) : ?>
	<div id="content" class="site-content">
		<div class="breadcrumb-wrap row">
			<div class="container">
				<div class="sixteen columns breadcrumb">
					<?php
					$breadcrumb = get_theme_mod( 'breadcrumb' );
						if( $breadcrumb ) : ?>
						<?php uniq_breadcrumbs(); ?>
					<?php endif; ?>
				</div>				
			</div>
		</div>		
		<div class="container">
<?php endif; ?>