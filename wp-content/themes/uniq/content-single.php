<?php
/**
 * @package uniq
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		$uniq = get_theme_mods(); 
	if( ! isset($uniq['single_featured_image']) && has_post_thumbnail() ) : ?>
		<div class="post-thumb">
			<?php the_post_thumbnail(); ?>
		</div>
	<?php else : 
			$single_featured_image = get_theme_mod( 'single_featured_image' );
			if( $single_featured_image && has_post_thumbnail() ) : ?>
		<div class="post-thumb">
			<?php the_post_thumbnail(); ?>
		</div>			
		<?php 
			endif;  
		endif; ?>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<span class="date-structure posted-on">				
				<span class="dd"><?php the_time('j '); ?></span><br>
				<span class="mm-yy"><?php the_time('M Y'); ?> </span>
			</span>
			<?php uniq_author(); ?>
			<?php uniq_comments_meta(); ?>
			<?php uniq_edit(); ?> 
		</div><!-- .entry-meta -->	

	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages: ', 'uniq' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php uniq_entry_footer(); ?>
	</footer><!-- .entry-footer -->
	<?php uniq_post_nav(); ?>
</article><!-- #post-## -->
