<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="tally_loop_attachment">
        <div class="tla_image"><?php echo wp_get_attachment_image( get_the_ID(), 'large' ); ?></div>
        <h4 class="tla_title"><?php the_title(); ?></h4>
        <p class="tla_meta"><?php _e('by','doctors'); ?> <?php the_author_posts_link(); ?> &middot; <?php the_time(get_option('date_format')); ?></p>
        <div class="tla_des"><?php the_content(); ?></div>
        <div class="tla-download">
            <?php
                _e('Downloads: ','doctors');
                $images = array();
                $image_sizes = get_intermediate_image_sizes();
                array_unshift( $image_sizes, 'full' );
                foreach( $image_sizes as $image_size ) {
                    $image = wp_get_attachment_image_src( get_the_ID(), $image_size );
                    $name = $image_size . ' (' . $image[1] . 'x' . $image[2] . ')';
                    $images[] = '<a href="' . $image[0] . '">' . $name . '</a>';
                }
                echo implode( ' | ', $images );
            ?>
        </div>
    </div>
<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.', 'doctors'); ?></p>
<?php endif; ?>