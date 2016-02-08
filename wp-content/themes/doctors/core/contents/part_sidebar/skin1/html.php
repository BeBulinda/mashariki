
    	<?php
		if ( ! dynamic_sidebar( 'sidebar' ) && current_user_can( 'edit_theme_options' )  ) {
			echo '<div class="widget widget_text">';
				echo '<div class="widget-wrap">';
				
					printf( '<h4 class="widgettitle">%s</h4>', esc_html( __( 'Primary Sidebar Widget Area', 'doctors' ) ) );
					echo '<div class="textwidget"><p>';
					
						printf( __( 'This is the %s. You can add content to this area by visiting your <a href="%s">Widgets Panel</a> and adding new widgets to this area.', 'doctors' ), "Primary Sidebar", admin_url( 'widgets.php' ) );
					
					echo '</p></div>';
				
				echo '</div>';
			echo '</div>';
		}
		?>
