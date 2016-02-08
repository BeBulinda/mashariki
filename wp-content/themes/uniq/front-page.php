<?php
	if ( 'posts' == get_option( 'show_on_front' ) ) { 
	    include( get_home_template() );
	} else {
/**
 * The front page template file.
 *
 *
 * @package uniq
 */
get_header(); 

		$slider_cat = get_theme_mod( 'slider_cat', '' );
		$slider_count = get_theme_mod( 'slider_count', 5 );
		$slider_posts = array(
			'cat' => $slider_cat,
			'posts_per_page' => $slider_count
		);

		$query = new WP_Query($slider_posts);
		if( $query->have_posts()) : ?>
			<div class="flexslider">
				<ul class="slides">
		<?php while($query->have_posts()) :
				$query->the_post();
				if( has_post_thumbnail() ) : ?>
				    <li>
				    	<div class="flex-image">
				    		<?php the_post_thumbnail('full'); ?>
				    	</div>
				    	<?php if ( $post->post_content != ""):?>
				    	<div class="flex-caption">
				    		<?php the_content(); ?>
				    	</div>
				    <?php endif;?>
				    </li>
				<?php endif; ?>
		<?php endwhile; ?>
				</ul>
			</div>

		<?php endif; ?>

	<?php  
		$query = null;
		wp_reset_postdata();
	?>
	<div id="content" class="site-content">
		<div class="">		
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
			$service_page1 = get_theme_mod('service_1');
			$service_page2 = get_theme_mod('service_2');
			$service_page3 = get_theme_mod('service_3');

			if( $service_page1 && $service_page2 && $service_page3 ) {
				$service_pages = array($service_page1,$service_page2,$service_page3);
				$args = array(
					'post_type' => 'page',
					'post__in' => $service_pages,
					'posts_per_page' => -1 
				);
			} 	else {
			$args = array(
				'post_type' => 'page',
				'posts_per_page' => 3
			);
		} 			
		 
		$query = new WP_Query($args);
		if( $query->have_posts()) : ?>
			
		<?php while($query->have_posts()) :
				$query->the_post(); ?>
				<div class="services-wrapper">
					<div class="container">
					    <div class="eight columns tcenter">
					    	<?php if( has_post_thumbnail() ) : ?>
					    		<?php the_post_thumbnail('full'); ?>
					    	<?php endif; ?>
					    </div>
					    <div class="eight columns">
					    	<?php the_title( '<h3>', '</h3>' ); ?>
							<?php the_content(); ?>				    	
					    </div>
					</div>
					<div class="hr-divider">
						<svg style="width: 100%;">
					    	<line x1="5" y1="5" x2="5600" y2="500" stroke="#3DAD66" stroke-width="8"/>
						</svg>
					</div>
			    </div>
			<?php endwhile; ?>
		<?php endif; ?>
		<?php  
			$query = null;
			wp_reset_postdata();
		?>
		<div class="container">
			<div class="sixteen columns">   
				<?php uniq_recent_posts(); ?>
			</div>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php 

get_footer(); 
}
?>
