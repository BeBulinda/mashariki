<?php
/**
 * @package waves
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php 
		$waves = get_theme_mods(); 
		if( ! isset($waves['featured_image']) && has_post_thumbnail() ) : ?>
			<div class="post-thumb">
				<?php the_post_thumbnail(); ?>
			</div>

		<?php else : 
				$featured_image = get_theme_mod( 'featured_image' );     
			if( $featured_image && has_post_thumbnail() ) : ?>
		<div class="post-thumb">
			<?php the_post_thumbnail(); ?>
		</div>			
		<?php 
		endif; 
	endif; ?>
 
		<header class="entry-header">  
		
		<div class="title-meta">
			<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
			<?php if ( 'post' == get_post_type() ) : ?>
			<div class="entry-meta">
				<span class="date-structure">				
					<span class="dd"><i class="fa fa-calendar"></i><?php the_time('j M Y'); ?></span>			
				</span>
				<?php waves_author(); ?>
				<?php waves_comments_meta(); ?> 
				<?php waves_edit() ?>
			</div><!-- .entry-meta -->
			<?php endif; ?>
		</div>
		<br class="clear">
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'waves' ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

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


</article><!-- #post-## -->