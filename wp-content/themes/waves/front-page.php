<?php
if ( 'posts' == get_option( 'show_on_front' ) ) { 
	    include( get_home_template() );
	} else {
/**
 * The front page template file.
 *
 *
 * @package waves
 */
	
get_header('blank');	
?>
<div class="home-header">       
<?php
		$slider_cat = get_theme_mod( 'slider_cat');
		$slider_count = get_theme_mod( 'slider_count', 5 );   
		$slider_posts = array(
			'cat' => $slider_cat,
			'posts_per_page' => $slider_count                   
		);
		if ($slider_cat) {
		 $query = new WP_Query($slider_posts);        
		if( $query->have_posts()) : ?>
			<div class="flexslider">  
				<ul class="slides">
					<?php while($query->have_posts()) :
							$query->the_post();
							if( has_post_thumbnail() ) : ?>
							    <li>
							    	<?php  $header_class ='flex-header';?>
							    	<div class="flex-image">
							    		<?php the_post_thumbnail('full'); ?>
							    	</div>
							    	<div class="flex-caption">
							    		<?php the_content(); ?>
							    	</div>
							    </li>
							<?php else: ?>
									<?php $header_class ='default-header';?>
							<?php endif; ?>
					<?php endwhile;?>
				</ul>
			</div>
	  	  
		<?php endif; ?>
	<?php  
		$query = null;
		wp_reset_postdata();
		 } else{?>
			 <div class="flexslider">  
				<ul class="slides">	          
					<li>
						<?php  $header_class = 'flex-header';?>     	
						<div class="flex-image">
							<?php echo '<img src="' . get_stylesheet_directory_uri() . '/images/slider.jpg" alt="" >';?>	
						</div>
						<?php	$slide_description = sprintf( __('<h1> Slider Setting </h1><p>You haven\'t created any slider post yet. Create Post, set featured image (Recommended image size 1200*400 ) and publish it in a category. (eg. "Slider"). Go to Customizer and click Waves Options => Home and select post category and no.of sliders to show.<p><a href="%1$s"target="_blank"> Customizer </a></p>', 'waves'),  admin_url('customize.php') );?>
						<div class="flex-caption"> <?php echo $slide_description;?></div>
					</li>
				</ul>
			</div><!-- flex-slider end -->	
<?php		
	}
	?>
	
	<header id="masthead" class="site-header <?php echo $header_class; ?>" role="banner">
	<div class="header-wrapper">
	<?php if( is_active_sidebar( 'top-left' )  || is_active_sidebar( 'top-left' ) ): ?>
	<div class="top-nav">
			<div class="container">		
			<?php if( is_active_sidebar( 'top-left' ) ) : ?>
				<div class="ten columns">
					<div class="cart">
						<?php dynamic_sidebar('top-left' ); ?>
					</div>
				</div>
			<?php endif; ?>
			<?php if( is_active_sidebar('top-right' ) ) : ?>
				<div class="columns six">
					<div class="social">
						<?php dynamic_sidebar('top-right' ); ?>  
					</div>
				</div>
			<?php endif; ?>
			</div>
		</div> <!-- .top-nav -->
	<?php endif;?>
		
		
		<div class="branding">
			<div class="container">
			<div class="five columns">
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
				</div><!-- .site-branding -->
			</div>
				<div class="eleven columns">
					<nav id="site-navigation" class="main-navigation clearfix" role="navigation">
						<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Primary Menu', 'waves' ); ?></button>
						<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
					</nav><!-- #site-navigation -->
				</div>
			</div>
		</div><!-- .branding -->  
   </div>
	</header><!-- #masthead -->
	</div>

	<div id="content" class="site-content">
		
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="home-top">
			<div class="container">	
		<?php 
			$service_top_page = get_theme_mod('service_top_page');
				// WP_Query arguments
			
			if ($service_top_page) {
				$args = array(
						'post_type' => 'page',
						'page_id' => $service_top_page,		
				);
				
			if( isset($args) ) :
			// The Query
			$query = new WP_Query( $args );
			if( $query->have_posts()) : ?>
				<div class="services-top-wrapper row">
					<?php while($query->have_posts()) :
						$query->the_post(); ?>
						   	<h2 class="wave-title"> <span><?php the_title();?></span></h2>
						    <?php the_content(); ?> 	
					<?php endwhile; ?>
				</div>
				
			<?php endif; ?>
			<?php  
				$query = null;
				$args = null;
				wp_reset_postdata();
				endif;
			}else{?>
			<div class="services-top-wrapper row">
				   <h2 class="wave-title"><span><?php _e('Service Top Wrapper','waves');?></span></h2>
				   <p><?php _e('You haven\'t created any service page yet. Create Page. Go to Customizer and click Waves Options => Home and select page from  dropdown page list.','waves');?></p>
				</div>

		<?php }
			$service_page1 = get_theme_mod('service_1');
			$service_page2 = get_theme_mod('service_2');
			$service_page3 = get_theme_mod('service_3');
			$service_page4 = get_theme_mod('service_4');

			if( $service_page1 && $service_page2 && $service_page3 && $service_page4 ) {
				$service_pages = array($service_page1,$service_page2,$service_page3,$service_page4);
				$args = array(
					'post_type' => 'page',
					'post__in' => $service_pages,
					'posts_per_page' => -1 
				);
			} 	else {?>
			<div class="services-wrapper row">
				 <div class="one-fourth service column">
				 	<span class="demo-thumb"><i class="fa fa-flag fa-5x"></i></span>
				 	<h4><?php _e('Service Section #1','waves');?></h4>
				 	<p><?php _e('You haven\'t created any service page yet. Create Page. Go to Customizer and click Waves Options => Home and select page from  dropdown page list.','waves');?></p>
				 </div>
				 <div class="one-fourth service column">
				 	<span class="demo-thumb">
				 		<i class="fa fa-random fa-5x"></i>	
				 	</span>
				 	<h4><?php _e('Service Section #2','waves');?></h4>
				 	<p><?php _e('You haven\'t created any service page yet. Create Page. Go to Customizer and click Waves Options => Home and select page from  dropdown page list.','waves');?></p>
				 </div>
				 <div class="one-fourth service column">
				 	<span class="demo-thumb">
				 		<i class="fa fa-mobile fa-5x"></i>	
				 	</span>
				 	<h4><?php _e('Service Section #3','waves');?></h4>
				 	<p><?php _e('You haven\'t created any service page yet. Create Page. Go to Customizer and click Waves Options => Home and select page from  dropdown page list.','waves');?></p>
				 </div>
				 <div class="one-fourth service column">
				 	<span class="demo-thumb">
				 		<i class="fa fa-thumb-tack fa-5x"></i>	
				 	</span>
				 	<h4><?php _e('Service Section #4','waves');?></h4>
				 	<p><?php _e('You haven\'t created any service page yet. Create Page. Go to Customizer and click Waves Options => Home and select page from  dropdown page list.','waves');?></p>
				 </div>
			</div>

		<?php	}

		if( isset($args) ) :
		$query = new WP_Query($args);
		if( $query->have_posts()) : ?>
			<div class="services-wrapper row">
		<?php while($query->have_posts()) :
				$query->the_post(); ?>
				    <div class="one-fourth service column">
				    	<?php if( has_post_thumbnail() ) : ?>
				    		<span>
				    		<?php the_post_thumbnail('waves_recent_page_img'); ?>
				    		</span>
				    	<?php endif; ?>
				    	<h4><?php the_title(); ?></h4>   
				    	<?php the_content(); ?>
				    </div>
		<?php endwhile; ?>
			</div>
			</div>
			</div>
	      	
		<?php endif; ?>   
		<?php  
			$query = null;
			$args = null;
			wp_reset_postdata();
			endif;
		?>
	
		<?php waves_recent_posts(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	</div>

<?php 
get_footer(); 
}
?>
