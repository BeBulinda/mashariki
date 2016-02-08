<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 * sliders
 * option - ti-sliders
 *           array(
 *                  id=>array(
 *              'name','tile_duration','animation_speed','animation_dir','animation','tile_height','tile_width','thumb_width',
 *              'thumb_height','slider_height','slider_width','interval','slides'=>array()),
 *          );
 * option - ti-slides
 *          array(
 *                  id=>array(
 *                  name, desc, type, img_url 
 *              );
 *          );
 * 
 * 
 */

class minimaUpgrade {

public function minimaUpgrade()
{

}


public function getAdminPage() {
?>
<div class="wrap">
    <?php minima_admin_leftmenu(); ?>
    <div class="sp-admin-area upgrade-page">
        <p class="upgrade-message">
            You are using lite version of minima for more features and 24x7 support,
            consider puchasing minima pro.
        </p>
        <div class="feature-area">
            <h1>Minima Pro Features</h1>
            <div class="feature-item">
                <img src="<?php echo get_template_directory_uri();?>/admin/images/1.fonts.png"/>
                <h3>Font Manager</h3>
                <span class="subtext">Easy to use font manager! Unlimited Google Fonts and cufon fonts.</span>
            </div>
            <div class="feature-item">
                <img src="<?php echo get_template_directory_uri();?>/admin/images/2.more-control.png"/>
                <h3>Detailed Admin Panel</h3>
                <span class="subtext">Extended admin panel to manage host of new features such as Tile Slider, jLayer Parallax Slider, etc.</span>
            </div>
            <div class="feature-item">
                <img src="<?php echo get_template_directory_uri();?>/admin/images/3.jlayer.png"/>
                <h3>jQuery Prallax Slider Editor</h3>
                <span class="subtext">jQuery parallax slider along with drag and drop parallax slider editor makes it easy for everyone to use parallax sliders.</span>
            </div>
            <div class="feature-item">
                <img src="<?php echo get_template_directory_uri();?>/admin/images/4.shortcode-editor.png"/>
                <h3>Shortcode Editor</h3>
                <span class="subtext">Add shortcodes to post pages using just a few clicks. Shortcodes are avalilable for buttons, tabs, accordions, youtube and vimeo channels and more..</span>
            </div>
            <div class="feature-item">
                <img src="<?php echo get_template_directory_uri();?>/admin/images/5.tickets.png"/>
                <h3>24*7 Support</h3>
                <span class="subtext">Support system with tickets, theme updates and knowledge-base, find answers to all your queries quickly.</span>
            </div>
            <div class="feature-item">
                <img src="<?php echo get_template_directory_uri();?>/admin/images/6.tile-slider.png"/>
                <h3>Tile Slider Editor</h3>
                <span class="subtext">Drag and drop slider editor, to manage great slides quickly.</span>
            </div>
        </div>
        <div class="buy-action">
            <hr/>
            <a class="minima-demo" target="_blank" href="http://minima.in/pro/">Live Demo</a>
            <a class="minima-upgrade" target="_blank" href="http://minima.in/purchase">Buy now for $49 only </a>
        </div>
    </div>
    <?php
}

public function updateAdminPage()
{

}
}
?>
