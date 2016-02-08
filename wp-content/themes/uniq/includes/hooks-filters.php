<?php

	function uniq_footer_credits() {
		printf( __('<p>Powered by <a href="%1$s">%2$s</a>', 'uniq' ),
		esc_url( __( 'http://wordpress.org/', 'uniq' ) ), __( 'WordPress','uniq')  );
		printf( '<span class="sep"> .</span>' );
		printf( __( 'Theme: %1$s by <a href="%2$s" refl="%3$s">%4$s</a></p>', 'uniq' ), 'Uniq', esc_url( 'http://www.webulousthemes.com/' ), 'designer', 'Webulous Themes' );
	}
	
	add_action('uniq_credits','uniq_footer_credits');