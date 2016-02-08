<form role="search" method="get" id="searchform" class="form-search <?php if (is_404() || !have_posts()) { ?> well <?php } ?>" action="<?php echo home_url('/'); ?>">
  <label class="hide" for="s"><?php _e('Search for','minima'); ?></label>
  <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" class="search-query" placeholder="<?php _e('Search', 'minima'); ?> <?php bloginfo('name'); ?>">
  <input type="submit" id="searchsubmit" value="<?php _e('Search','minima'); ?>" class="btn">
</form>