<?php
/**
 * The template for displaying search
 *
 * @package Lucy
 */
 get_header(); ?>
 	<div class="heading-name bg-source" >
		<div class="wrap-grid">
			<h3><?php printf( __( 'Search Results for: %s', 'lucy' ), '<span>' . get_search_query() . '</span>' ); ?></h3>
		</div>
	</div>
	<?php get_template_part( 'content', 'posts' ); ?>	
<?php get_footer(); ?>