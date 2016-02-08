<?php
/**
 * @package waves
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		$waves = get_theme_mods(); 
	if( ! isset($waves['single_featured_image']) && has_post_thumbnail() ) : ?>
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
				<span class="date-structure">				
					<span class="dd"><?php the_time('j M Y'); ?></span>
				
				</span>
				<?php waves_author(); ?>
				<?php waves_comments_meta(); ?> 
				<?php waves_edit() ?>
			</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages: ', 'waves' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
<?php if ( 'post' == get_post_type() ): ?>
	<footer class="entry-footer">
		<?php waves_entry_footer(); ?>
	</footer><!-- .entry-footer -->
<?php endif;?>

	<?php waves_post_nav(); ?>
</article><!-- #post-## -->
