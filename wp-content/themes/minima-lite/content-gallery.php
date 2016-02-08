<?php
/**
 * Displays a gallery post
 */
global $gallery_count;
?>
        <?php $content= do_shortcode(get_the_content()); ?>
        <?php echo $content; ?>