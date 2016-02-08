<?php
/**
 * The template for displaying category
 *
 *
 * @package Lucy
 */
get_header(); ?>
	<div class="heading-name bg-source" >
		<div class="wrap-grid">
			<h3><?php printf( __( 'Category Archives: %s', 'lucy' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h3>
		</div>
	</div>
	<?php get_template_part( 'content', 'posts' ); ?>	
<?php get_footer(); ?>