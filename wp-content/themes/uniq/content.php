<?php
/**
 * @package uniq
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php 
		$uniq = get_theme_mods(); 
		if( ! isset($uniq['featured_image']) && has_post_thumbnail() ) : ?>
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
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<span class="date-structure posted-on">				
				<span class="dd"><?php the_time('j '); ?></span><br>
				<span class="mm-yy"><?php the_time('M Y'); ?> </span>
			</span>
			<?php uniq_author(); ?>
			<?php uniq_comments_meta(); ?>
			<?php uniq_edit(); ?> 
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'uniq' ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

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
</article><!-- #post-## -->