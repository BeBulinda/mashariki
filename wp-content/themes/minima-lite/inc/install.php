<?php
$minima=wp_get_theme();
$theme_install_flag="minima-lite-".$minima->get('Version')."-installed";
if(!get_option($theme_install_flag)){
//Apearance editor elements
$appear_elems=array(
    'sections'=>array(
        array(
            'name'=>'Header',
            'selector'=>'#ti-header-container',
            'elements'=>array(
                array(
                    'name'=>'Header background',
                    'selector'=>'#ti-header-container',
                    'editor'=>'both'
                ),
                array(
                    'name'=>'Site logo',
                    'selector'=>'.ti-site-logo',
                    'editor'=>'both'
                ),
                array(
                    'name'=>'Top menu items',
                    'selector'=>'#menu-top-menu,#ti-header-container .navbar .nav > li > a,#ti-header-container .navbar .nav > li > a:hover',
                    'editor'=>'font'
                )
            )
        ),
        array(
            'name'=>'Content',
            'selector'=>'#ti-content-container',
            'elements'=>array(
                array(
                    'name'=>'Homepage slideshow box',
                    'selector'=>'#ti-slideshow-container',
                    'editor'=>'both'
                ),
                array(
                    'name'=>'Containt area box',
                    'selector'=>'#ti-content-container',
                    'editor'=>'both'
                ),
                array(
                    'name'=>'Site default',
                    'selector'=>'body',
                    'editor'=>'both'
                ),
                array(
                    'name'=>'Paragraphs',
                    'selector'=>'p,div',
                    'editor'=>'both'
                ),
                array(
                    'name'=>'H1 header font',
                    'selector'=>'h1',
                    'editor'=>'font'
                ),
                array(
                    'name'=>'H2 header font',
                    'selector'=>'h2',
                    'editor'=>'font'
                ),
                array(
                    'name'=>'H3 header font',
                    'selector'=>'h3',
                    'editor'=>'font'
                ),
                array(
                    'name'=>'H4 header font',
                    'selector'=>'h4',
                    'editor'=>'font'
                ),
                array(
                    'name'=>'H5 header font',
                    'selector'=>'h5',
                    'editor'=>'font'
                ),
                array(
                    'name'=>'H6 header font',
                    'selector'=>'h6',
                    'editor'=>'font'
                ),
                array(
                    'name'=>'Link(a) font',
                    'selector'=>'a',
                    'editor'=>'font'
                ),
                array(
                    'name'=>'Visited link color',
                    'selector'=>'a:visited',
                    'editor'=>'fontcolor'
                ),
                array(
                    'name'=>'Link mouseover color',
                    'selector'=>'a:hover',
                    'editor'=>'fontcolor'
                ),
                array(
                    'name'=>'Link active color',
                    'selector'=>'a:active',
                    'editor'=>'fontcolor'
                )
            )
        ),
        array(
            'name'=>'Pages',
            'selector'=>'.minima',
            'elements'=>array(
                array(
                    'name'=>'Page title box',
                    'selector'=>'#ti-title-container',
                    'editor'=>'both'
                ),
                array(
                    'name'=>'Page title font',
                    'selector'=>'.ti-title h1',
                    'editor'=>'font'
                ),
                array(
                    'name'=>'Page/Post meta fonts',
                    'selector'=>'.breadcrum-menu .span4,.breadcrum-menu .span5,#ti-title-container a',
                    'editor'=>'font'
                )
            )
        ),
        array(
            'name'=>'Subfooter',
            'selector'=>'#ti-subfooter-container',
            'elements'=>array(
                array(
                    'name'=>'Subfooter box',
                    'selector'=>'#ti-subfooter-container',
                    'editor'=>'both'
                )
            )
        ),
        array(
            'name'=>'Footer',
            'selector'=>'#ti-footer-container',
            'elements'=>array(
                array(
                    'name'=>'Footer box',
                    'selector'=>'#ti-footer-container',
                    'editor'=>'both'
                ),
                array(
                    'name'=>'Footer fonts',
                    'selector'=>'#ti-footer-container .span4',
                    'editor'=>'font'
                ),
                array(
                    'name'=>'Footer menu',
                    'selector'=>'#menu-footer-menu-container,#ti-footer-container .navbar .nav > li > a,#ti-footer-container .navbar .nav > li > a:hover',
                    'editor'=>'font'
                )
            )
        ),
        array(
            'name'=>'Right sidebar',
            'selector'=>'#ti-sidebar',
            'elements'=>array(
                array(
                    'name'=>'Sidebar',
                    'selector'=>'#ti-sidebar',
                    'editor'=>'both'
                ),
                array(
                    'name'=>'Widget',
                    'selector'=>'#ti-sidebar .widget',
                    'editor'=>'both'
                ),
                array(
                    'name'=>'Widget title',
                    'selector'=>'#ti-sidebar .widget h3',
                    'editor'=>'font'
                )
            )
        ),
        array(
            'name'=>'Left sidebar',
            'selector'=>'#ti-left-sidebar',
            'elements'=>array(
                array(
                    'name'=>'Sidebar',
                    'selector'=>'#ti-left-sidebar',
                    'editor'=>'both'
                ),
                array(
                    'name'=>'Widget',
                    'selector'=>'#ti-left-sidebar .widget',
                    'editor'=>'both'
                ),
                array(
                    'name'=>'Widget title',
                    'selector'=>'#ti-left-sidebar .widget h3',
                    'editor'=>'font'
                )
            )
        ),
        array(
            'name'=>'Subfooter sidebar',
            'selector'=>'#ti-subfooter-sidebar',
            'elements'=>array(
                array(
                    'name'=>'Sidebar',
                    'selector'=>'#ti-subfooter-sidebar',
                    'editor'=>'both'
                ),
                array(
                    'name'=>'Widget',
                    'selector'=>'#ti-subfooter-sidebar .widget',
                    'editor'=>'both'
                ),
                array(
                    'name'=>'Widget title',
                    'selector'=>'#ti-subfooter-sidebar .widget h3',
                    'editor'=>'font'
                )
            )
        ),
        array(
            'name'=>'Post content sidebar',
            'selector'=>'#ti-postcontent-sidebar',
            'elements'=>array(
                array(
                    'name'=>'Sidebar',
                    'selector'=>'#ti-postcontent-sidebar',
                    'editor'=>'both'
                ),
                array(
                    'name'=>'Widget',
                    'selector'=>'#ti-postcontent-sidebar .widget',
                    'editor'=>'both'
                ),
                array(
                    'name'=>'Widget title',
                    'selector'=>'#ti-postcontent-sidebar .widget h3',
                    'editor'=>'font'
                )
            )
        )
    )
);
update_option('min_appear_elems',$appear_elems);
update_option('sp-'.md5('min-fb-count'),6);
update_option('sp-'.md5('min-r-sb'),'1');
update_option('sp-'.md5('min-color-theme'),'1');
update_option($theme_install_flag, 1);
}
?>
