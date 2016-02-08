<!-- Small Thumbs -->
<div class="small-thumbs">

		<div class="entry clearfix">

			<!-- Entry Title -->
			<div class="entry-title">
				<h2><?php the_title(); ?></h2>
			</div><!-- .entry-title end -->
			
			<?php if( get_theme_mod('agama_blog_post_meta', true) ): ?>
			<!-- Entry Meta -->
			<ul class="entry-meta clearfix">
				<li><i class="fa fa-calendar"></i> <?php the_time('m, Y'); ?></li>
				<li><a href="<?php the_author_link(); ?>"><i class="fa fa-user"></i> <?php the_author(); ?></a></li>
				<li><i class="fa fa-folder-open"></i> <?php echo get_the_category_list(', '); ?></li>
				<li><a href="<?php the_permalink(); ?>#comments"><i class="fa fa-comments"></i> <?php echo Agama::comments_count(); ?></a></li>
				<li><a href="<?php the_permalink(); ?>"><?php echo Agama::post_format(); ?></a></li>
			</ul><!--.entry-meta-->
			<?php endif; ?>

			<!-- Entry Content -->
			<div class="entry-content notopmargin">

				<?php the_content(); ?>

				<!-- Tag Cloud -->
				<div class="tagcloud clearfix bottommargin">
					<?php the_tags(false, false, false); ?>
				</div>

				<div class="clear"></div>

			</div>
			
			<!-- Content Footer -->
			<footer class="entry-meta">
				
				<?php edit_post_link( __( '<i class="fa fa-edit"></i> Edit', 'agama' ), '<span class="edit-link">', '</span>' ); ?>
				
				<?php Agama::about_author(); ?>
				
			</footer><!-- .entry-meta -->
			
		</div><!--.entry-->
		
</div><!--.small-thumbs-->