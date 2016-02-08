<?php
global $post, $wp_query;
if ( ! empty( $_SERVER['SCRIPT_FILENAME'] ) && 'comments.php' === basename( $_SERVER['SCRIPT_FILENAME'] ) )
	die ( 'Please do not load this page directly. Thanks!' );

if ( post_password_required() ) {
	printf( '<p class="alert">%s</p>', __( 'This post is password protected. Enter the password to view comments.', 'doctors' ) );
	return;
}


if ( have_comments() ) {

	echo '<div id="comments">';
		echo apply_filters( 'tally_title_comments', __( '<h3>Comments</h3>', 'doctors' ) );
		echo '<ol class="comment-list">';
			$defaults = array(
				'type'        => 'all',
				'avatar_size' => 48,
				'format'      => 'html5', //* Not necessary, but a good example
			);
			$args = apply_filters( 'tally_comment_list_args', $defaults );
			wp_list_comments( $args );
		echo '</ol>';
		
		
		//* Comment Navigation
		$prev_link = get_previous_comments_link( apply_filters( 'tally_prev_comments_link_text', '' ) );
		$next_link = get_next_comments_link( apply_filters( 'tally_next_comments_link_text', '' ) );
	
		if ( $prev_link || $next_link ) {
	
			echo '<div class="navigation">';
				
			printf( '<div class="pagination-previous alignleft">%s</div>', $prev_link );
			printf( '<div class="pagination-next alignright">%s</div>', $next_link );
				
			echo '</div>';
		}
	echo '</div>';

}	

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && !is_page() ) :
	?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'doctors' ); ?></p>
	<?php endif; 
	
	
comment_form( array( 'format' => 'html5' ) );