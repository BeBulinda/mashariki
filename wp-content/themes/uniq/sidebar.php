<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package uniq
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area four columns" role="complementary">
	<div class="left-sidebar">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div>
</div><!-- #secondary -->
