<?php
/**
 * The template for displaying tag
 *
 *
 * @package Lucy
 */
get_header(); ?>
	<div class="heading-name bg-source" >
		<div class="wrap-grid">
			<h3><?php printf( __( 'Tag Archives: %s', 'lucy' ), '<span>' . single_tag_title( '', false ) . '</span>' ); ?></h3>
		</div>
	</div>
	<?php get_template_part( 'content', 'posts' ); ?>	
<?php get_footer(); ?>