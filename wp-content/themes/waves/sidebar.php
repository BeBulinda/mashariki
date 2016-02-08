<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package waves
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<div class="five columns secondary-wrapper">
<div id="secondary" class="widget-area" role="complementary">
	<div class="left-sidebar">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div>
</div><!-- #secondary -->
</div>
