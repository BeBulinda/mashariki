<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <?php if (is_singular()) wp_enqueue_script('comment-reply');
       ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head(); ?>

    </head>
    <body <?php body_class(); ?>>
        <div id="wrapper">
        <!-- include Logo and Menu --> 
        <div id="ti-header-container" class="appear-edit">
            <div id="ti-header" class="navigation row">


                                <a href="<?php echo esc_url(home_url('/'));?>" id="ti-logo-link" class="logo">
                                    <?php
                                    if (get_option("sp-" . md5('min-site-logo'), '')) {
                                        ?>
                                        <img class="ti-logo" src="<?php echo esc_url(wp_get_attachment_url(get_option("sp-" . md5('min-site-logo'), ''))); ?>" alt="">
                                    <?php } else {
                                        ?>
                                        <span class="ti-site-logo"><?php bloginfo('name'); ?></span>
                                        <?php
                                    }
                                    ?>
                                </a>


                                    <?php  wp_nav_menu(array('theme_location' => 'primary_navigation','container_class'=>'menu', 'menu_class' => 'menu'));
                                    ?>
                            <div class="dropdown"><span class="icon-menu"></span>
                                <ul class="dropdown-menu">
                                </ul>
                            </div>
                            <div class="search-toggle">
                                <a href="#search-container"><span class="icon-lens"></span></a>
                            </div>
                            <div id="search-container" class="search-box-wrapper hide">
                                <div class="search-box">
                                    <?php get_search_form(); ?>
                                </div>
                            </div>
                            </div>
            <!-- subheader sidebar -->
        </div>