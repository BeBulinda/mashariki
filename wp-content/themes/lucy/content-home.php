<?php 
/**
 * 
 * @package Lucy 
 */
?>
<?php if(get_theme_mod('image_top_box')) { ?> 
<section class="heading-banner" style="background-image: url('<?php echo esc_url(get_theme_mod('image_top_box')); ?>');">
	<div class="wrap-grid">
	    <?php if ( get_theme_mod('title_top_box') ) { ?> <h1 class="heading-banner-title"><?php echo esc_html(get_theme_mod('title_top_box')); ?></h1><?php } ?>
		<?php if ( get_theme_mod('sub_title_top_box') ) { ?> <h3 class="heading-banner-subtitle"><?php echo esc_html(get_theme_mod('sub_title_top_box')); ?></h3><?php } ?>
		<div class="cta-btns">
		     <?php if ( get_theme_mod('top_box_button_1_text') ) { ?> <a href="<?php echo esc_url(get_theme_mod('top_box_button_1_link')); ?>" class="heading-btn mright"><?php echo esc_html(get_theme_mod('top_box_button_1_text')); ?></a><?php } ?>
			 <?php if ( get_theme_mod('top_box_button_2_text') ) { ?> <a href="<?php echo esc_url(get_theme_mod('top_box_button_2_link')); ?>" class="heading-btn mright"><?php echo esc_html(get_theme_mod('top_box_button_2_text')); ?></a><?php } ?>
		</div>
	</div>
</section>
<?php } ?>    
<section class="features-box">
  <div class="wrap-grid">
		<div class="feature-body" >
			<div class="feature-icon">
				<div class="feature-bg"></div>
				<i class="fa fa-<?php echo esc_html(get_theme_mod('icon1')); ?>"></i>
			</div>
			<div class="arrow-bottom"></div>
			<div class="feature-describe">
				<a href="<?php echo esc_url(get_theme_mod('link1')); ?>">
					<h4 class="feature-title"><?php echo esc_html(get_theme_mod('title1')); ?></h4>
				</a>
				<p class="feature-details"><?php echo esc_html(get_theme_mod('content1')); ?></p>
			</div>
		</div>	
		<div class="feature-body" >
			<div class="feature-icon">
				<div class="feature-bg"></div>
				<i class="fa fa-<?php echo esc_html(get_theme_mod('icon2')); ?>"></i>
			</div>
			<div class="arrow-bottom"></div>
			<div class="feature-describe">
				<a href="<?php echo esc_url(get_theme_mod('link2')); ?>">
					<h4 class="feature-title"><?php echo esc_html(get_theme_mod('title2')); ?></h4>
				</a>
				<p class="feature-details"><?php echo esc_html(get_theme_mod('content2')); ?></p>
			</div>
		</div>	
		<div class="feature-body" >
			<div class="feature-icon">
				<div class="feature-bg"></div>
				<i class="fa fa-<?php echo esc_html(get_theme_mod('icon3')); ?>"></i>
			</div>
			<div class="arrow-bottom"></div>
			<div class="feature-describe">
				<a href="<?php echo esc_url(get_theme_mod('link3')); ?>">
					<h4 class="feature-title"><?php echo esc_html(get_theme_mod('title3')); ?></h4>
				</a>
				<p class="feature-details"><?php echo esc_html(get_theme_mod('content3')); ?></p>
			</div>
		</div>	
		<div class="feature-body" >
			<div class="feature-icon">
				<div class="feature-bg"></div>
				<i class="fa fa-<?php echo esc_html(get_theme_mod('icon4')); ?>"></i>
			</div>
			<div class="arrow-bottom"></div>
			<div class="feature-describe">
				<a href="<?php echo esc_url(get_theme_mod('link4')); ?>">
					<h4 class="feature-title"><?php echo esc_html(get_theme_mod('title4')); ?></h4>
				</a>
				<p class="feature-details"><?php echo esc_html(get_theme_mod('content4')); ?></p>
			</div>
		</div>			
  </div>		
</section>
<?php while (have_posts()) : the_post(); ?>
<div class="blog-container wrap-grid">
	<div class="the-blog-item post">		
		<div class="the-blog-item-text">
		   <?php the_content(); ?>				
		</div>
	</div>
</div>
<?php endwhile; ?>
