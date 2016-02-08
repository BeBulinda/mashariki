<?php

/**
 * Displays a normal post
 */
?>
<?php if (is_archive() || is_search()||  is_category()||  is_home()||  is_front_page()) { ?>
    <?php the_excerpt(); ?>
<?php } else { ?>
    <?php the_content(); ?>
<?php } ?>