<?php
/* This file defines structure for the admin panel */
global $min_admin;
$min_admin=array(
    'capability'=>'edit_theme_options',
    'menu'=>array(
            'slug'=>'minima-settings',
            'name'=>'Options',
            'callback'=>'min-settings',
            'ticon'=>'4',
            'icon'=>'images/admin.png',
            'capability'=>'edit_theme_options',
            'children'=>array(
                            array(
                                'slug'=>'minima-sidebars',
                                'name'=>'Sidebars',
                                'callback'=>'min-sidebars',
                                'ticon'=>'5'
                            ),
                            array(
                                'slug'=>'minima-appear',
                                'name'=>'Appearance',
                                'callback'=>'min-appear',
                                'ticon'=>'>'
                            ),
                            array(
                                'slug'=>'minima-help',
                                'name'=>'Help',
                                'callback'=>'min-help',
                                'ticon'=>'E'
                            ),
                            array(
                                'slug'=>'minima-upgrade',
                                'name'=>'Upgrade',
                                'callback'=>'min-upgrade',
                                'ticon'=>'?'
                            )
            )
    ),
    'callbacks'=>array(
        array(
            'name'=>'minima-settings',
            'panel'=>array(
                'title'=>"Settings",
                'icon'=>"4",
                'options'=>array(
                    array(
                        'name'=>"Theme Color Option",
                        'type'=>"colorOption",
                        'msg'=>"Select a color option to quicky change theme style!",
                        'slug'=>"min-color-theme"
                    ),
                    array(
                        'name'=>"Footer copyright text",
                        'type'=>"text",
                        'msg'=>"Copyright text on footer( <b>Note:</b> Footer text cannot be changed in minima lite!)",
                        'slug'=>"min-copy-text"
                    ),
                    array(
                        'name'=>"Site logo",
                        'type'=>"imgfield",
                        'msg'=>"Logo of website",
                        'slug'=>"min-site-logo"
                    ),
                    array(
                        'name'=>"Show homepage carousel",
                        'type'=>"checkbox",
                        'msg'=>"If to show carousel on homepage.",
                        'slug'=>"min-homepage-carousel"
                    ),
                    array(
                        'name'=>"Number of featured boxes",
                        'type'=>"text",
                        'msg'=>"Enter the number of boxes to show on homepage, enter 0 to hide them.",
                        'slug'=>"min-fb-count"
                    )
                )
            )
        ),
        array(
            'name'=>'minima-appear',
            'panel'=>array(
                'title'=>"Appearance",
                'icon'=>">",
                'interface'=>"inc/minima-appear.php",
                'interface-class'=>"minimaAppear"
            )
        ),
        array(
            'name'=>'minima-sidebars',
            'panel'=>array(
                'title'=>"Sidebars",
                'icon'=>"5",
                'options'=>array(
                    array(
                        'name'=>"Right sidebar",
                        'type'=>"checkbox",
                        'msg'=>"If to show right sidebar",
                        'slug'=>"min-r-sb"
                    ),
                    array(
                        'name'=>"Left sidebar",
                        'type'=>"checkbox",
                        'msg'=>"If to show left sidebar",
                        'slug'=>"min-l-sb"
                    ),
                    array(
                        'name'=>"Post content sidebar",
                        'type'=>"checkbox",
                        'msg'=>"If to show sidebar after page content",
                        'slug'=>"min-ac-sb"
                    ),
                    array(
                        'name'=>"Subfooter sidebar",
                        'type'=>"checkbox",
                        'msg'=>"If to show subfooter sidebar",
                        'slug'=>"min-sf-sb"
                    )
                )
            )
        ),
        array(
            'name'=>'minima-help',
            'panel'=>array(
                'title'=>"Minima help",
                'icon'=>"E",
                'interface'=>"inc/minima-help.php",
                'interface-class'=>"minimaHelp"
            )
        ),
        array(
            'name'=>'minima-upgrade',
            'panel'=>array(
                'title'=>"Upgrade to Pro",
                'icon'=>"?",
                'interface'=>"inc/minima-upgrade.php",
                'interface-class'=>"minimaUpgrade"
            )
        )
    ),
    'resources'=>array(
        array('type'=>'css','slug'=>'min-admin','src'=>'css/admin.css'),
        array('type'=>'css','slug'=>'min-admin-symbols','src'=>'css/symbols/stylesheet.css'),
        array('type'=>'css','slug'=>'min-admin-icon-demo','src'=>'css/demo-icons.css'),
        array('type'=>'css','slug'=>'min-ui-lightness','src'=>'css/jquery-ui-1.8.21.custom.css'),
        array('type'=>'css','slug'=>'min-jquery-tip-tip','src'=>'css/tiptip.css'),
        array('type'=>'css','slug'=>'thickbox'),
        array('type'=>'css','slug'=>'wp-color-picker'),
        array('type'=>'js','slug'=>'jquery'),
        array('type'=>'js','slug'=>'jquery-tiptip','src'=>'js/jquery.tipTip.minified.js'),
        array('type'=>'js','slug'=>'JSON','src'=>'js/json.js'),
        array('type'=>'js','slug'=>'jquery-ui','src'=>'js/jquery-ui-1.10.3.custom.min.js'),
        array('type'=>'js','slug'=>'media-upload'),
        array('type'=>'js','slug'=>'thickbox'),
        array('type'=>'js','slug'=>'iris'),
        array('type'=>'js','slug'=>'wp-color-picker'),
        array('type'=>'js','slug'=>'min-admin','src'=>'js/admin.js'),
    )
);