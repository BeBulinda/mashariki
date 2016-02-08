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

class minimaHelp {

public function minimaHelp()
{

}


public function getAdminPage() {
?>
    <div class="wrap">
        <?php minima_admin_leftmenu(); ?>
        <h4 class="documentation-title">Minima Lite<span> documentaion for </span>version 1.0.14</h4>
        <div class="thank-you">
            Thank you for downloading Minima Lite WordPress theme, In case you have more questions
            regarding this theme please mail us at <a href="mailto:support@minima.in">support@minima.in</a> or use WordPress support forums.
        </div>
        <div class="table-of-contents">
            <h3 id="table-of-contents">Table of contents</h3>
            <ol class="index">
                <li><a href="#article-1">1. Appearance editor</a>
                    <ol class="index">
                        <li><a href="#article-1-a">a) Background</a></li>
                        <li><a href="#article-1-b">b) Font</a></li>
                    </ol>
                </li>
                <li><a href="#article-2">2. Contact us widget</a> </li>
                <li><a href="#article-3">3. Minima iconset</a> </li>
                <li><a href="#article-4">4. Page templates</a> </li>
                <li><a href="#article-5">5. Post meta options</a>
                    <ol class="index">
                        <li><a href="#article-5-a">a) Slides</a></li>
                        <li><a href="#article-5-b">b) Hide page title</a></li>
                        <li><a href="#article-5-c">b) Display carousel</a></li>
                    </ol>
                </li>
                
                <li><a href="#article-6">6. Featured boxes</a> </li>
                <li><a href="#article-7">7. Color options</a> </li>
            </ol>
        </div>
        <div class="help-contents">
            <div class="help-article" id="article-1">
                <h2>1. Appearance Editor</h2>
                <p class="help-text">To start using appearance editor click on <b>'Appearance->Minima Appearance'</b>
                    On the left menu click on the page content you wish to edit. eg. header/content/footer
                    Click on the element to edit its appearance.
                    Once the object is selected for appearance editing you will notice that either you can
                    change font or both font and background, this depends on the behaviour of the element selected.
                    Once you make changes and are happy with the result shown in the preview click save to
                    reflect changes in live site.
                </p>
            </div>
            <div class="help-article" id="article-1-a">
                <div class="column">
                    <h4>a) Background Editor</h4>
                    <p class="help-text">Background editor enables you to set various CSS property of the background without any
                        knowledge of css.<br/>
                        <b>Background Image - </b>Sets the background image of selected object.<br/>
                        <b>Background Color - </b>Sets background color of the selected object.<br/>
                        <b>Background Repeat -</b> Choose background repeat.<br/>
                        <b>Background Position X and Y -</b> Sets background position of the selected object.<br/>
                        <b>Background Unit -</b> Choose background position unit.</p><br/>
                    <a href="#table-of-contents">Table of contents</a>
                </div>
                <div class="column">
                    <img src="<?php echo get_template_directory_uri();?>/admin/images/7.background-editor.png"/>
                </div>
            </div>
            <div class="help-article" id="article-1-b">
                <div class="column">
                    <h4>b) Font Editor</h4>
                    <p class="help-text"><b>Font Family -</b> Select a font family from options displayed.<br/>
                        <b>Font Size -</b> Size of the font for selected object.<br/>
                        <b>Font color -</b> text color of the element.</p><br/>
                    <a href="#table-of-contents">Table of contents</a>
                </div>
                <div class="column">
                    <img src="<?php echo get_template_directory_uri();?>/admin/images/8.font-editor.png"/>
                </div>
            </div>
            <div class="help-article" id="article-2">
                <div class="column">
                    <h2>2. Minima contact us widget</h2>
                    <p class="help-text">
                        Minima provides one widget for contact us information and social URLs.<br/>
                        In order to use this widget simply find widget named "Minima Contact us" and drag the widget onto
                        to a sidebar, input information that you want to show, to hide a link/information simply leave it empty.
                    </p>
                </div>
                <div class="column">
                    <img src="<?php echo get_template_directory_uri();?>/admin/images/9.contact-us-widget.png"/>
                </div>
                <a href="#table-of-contents">Table of contents</a>
            </div>
            <div class="help-article" id="article-3">
                    <h2>3. Minima icon set</h2>
                    <div class="help-text">
                        In order to display crysp icons across all devices minima packs extensive icon set with 66
                        vector icons. Refer the table below to use them.
                        <?php $this->fontDemoTable();?>
                    </div>
                <a href="#table-of-contents">Table of contents</a>
            </div>
            <div class="help-article" id="article-4">
                <div class="column">
                    <h2>4. Page Templates</h2>
                    <p class="help-text">Minima provides one template for full width pages without sidebar.</p>
                </div>
                <div class="column">
                    <img src="<?php echo get_template_directory_uri();?>/admin/images/10.page-templates.png"/>
                </div>
                <a href="#table-of-contents">Table of contents</a>
            </div>
            <div class="help-article" id="article-5">
                <h2>5. Post Meta Options</h2>
                <p class="help-text">Minima provides a metabox to manage slides and featured boxes.</p>
            </div>
            <div class="help-article" id="article-5-a">
                <div class="column">
                    <h4>a) Slides</h4>
                    <p class="help-text">This option creates slides for carousel on posts and pages. To create and
                        manage a slider follow the steps below.<br/>
                        1. Click on add slide button<br/>
                        2. click on upload image option<br/>
                        3. Once you select an image using the media uploader you can enter additional field such as
                        URL and title.</p><br/>
                </div>
                <div class="column">
                    <img src="<?php echo get_template_directory_uri();?>/admin/images/11.slides.png"/>
                </div>
                <a href="#table-of-contents">Table of contents</a>
            </div>
            <div class="help-article" id="article-5-b">
                <div class="column">
                    <h4>b) Hide Page Title</h4>
                    <p class="help-text">This option allows you to display featured boxes on a page.</p><br/>
                </div>
                <div class="column">
                    <img src="<?php echo get_template_directory_uri();?>/admin/images/12.hide-title.png"/>
                </div>
                <a href="#table-of-contents">Table of contents</a>
            </div>
            <div class="help-article" id="article-5-c">
                <div class="column">
                    <h4>c) Display Carousel</h4>
                    <p class="help-text">Using this option you can show and hide a page title.</p><br/>
                </div>
                <div class="column">
                    <img src="<?php echo get_template_directory_uri();?>/admin/images/13.show-carousel.png"/>
                </div>
            </div>
            <div class="help-article" id="article-6">
                <div class="column">
                    <h2>6. Featured Boxes</h2>
                    <p class="help-text">Using these custom posts you can publish featured boxes on home and other pages,
                        a featured box has following property.<br/>
                        <b>1. Post Title -</b> Title of the featured box<br/>
                        <b>2. URL -</b> Link to open when clicked on featured box<br/>
                        <b>3. Description -</b> A small paragraph of text to be shown after the title<br/>
                        <b>4. Image -</b> The image to be shwon in the featured box</p><br/>
                    
                </div>
                <div class="column">
                    <img src="<?php echo get_template_directory_uri();?>/admin/images/14.featured-area.png"/>
                </div>
                <a href="#table-of-contents">Table of contents</a>
            </div>
        </div>
        <div class="help-article" id="article-7">
                <div class="column">
                    <h2>7. Color options</h2>
                    <p class="help-text">To change theme color pattern goto "Appearance" >> "Minima options"
                        Select a color option by clicking on top of colors shown usinde theme color option, once
                        the color pattern is selected, click on save and reload the website.
                        </p>
                    
                </div>
                <div class="column">
                    <img src="<?php echo get_template_directory_uri();?>/admin/images/15.color-options.png"/>
                </div>
                <a href="#table-of-contents">Table of contents</a>
            </div>
        </div>
    </div>
<?php
}

public function updateAdminPage()
{

}
public function fontDemoTable(){
?>
    <table class="icon-demo widefat">
        <thead>
        <tr>
            <td>Icon</td>
            <td>CSS Class</td>
            <td>Character</td>
            <td>Character Unicode</td>
            <td>Icon</td>
            <td>CSS Class</td>
            <td>Character</td>
            <td>Character Unicode</td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><span class="icon-2cols"></span></td>
            <td><code>.icon-2cols</code></td>
            <td>!</td>
            <td>0021</code></td>
            <td><span class="icon-3cols"></span></td>
            <td><code>.icon-3cols</code></td>
            <td>"</td>
            <td>0022</td>
        </tr>
        <tr>
            <td><span class="icon-4cols"></span></td>
            <td><code>.icon-4cols</code></td>
            <td>#</td>
            <td>0022</code></td>
            <td><span class="icon-5cols"></span></td>
            <td><code>.icon-5cols</code></td>
            <td>$</td>
            <td>0023</td>
        </tr>
        <tr>
            <td><span class="icon-icon-box"></span></td>
            <td><code>.icon-icon-box</code></td>
            <td>%</td>
            <td>0024</code></td>
            <td><span class="icon-shortcode"></span></td>
            <td><code>.icon-shortcode</code></td>
            <td>&</td>
            <td>0025</td>
        </tr>
        <tr>
            <td><span class="icon-slider"></span></td>
            <td><code>.icon-slider</code></td>
            <td>'</td>
            <td>0026</code></td>
            <td><span class="icon-tabs"></span></td>
            <td><code>.icon-tabs</code></td>
            <td>(</td>
            <td>0027</td>
        </tr>
        <tr>
            <td><span class="icon-accordion"></span></td>
            <td><code>.icon-accordion</code></td>
            <td>)</td>
            <td>0028</code></td>
            <td><span class="icon-rss"></span></td>
            <td><code>.icon-rss</code></td>
            <td>b</td>
            <td>0062</td>
        </tr>
        <tr>
            <td><span class="icon-button"></span></td>
            <td><code>.icon-button</code></td>
            <td>*</td>
            <td>0029</code></td>
            <td><span class="icon-lens"></span></td>
            <td><code>.icon-lens</code></td>
            <td>+</td>
            <td>002A</td>
        </tr>
        <tr>
            <td><span class="icon-wrench"></span></td>
            <td><code>.icon-wrench</code></td>
            <td>,</td>
            <td>002B</code></td>
            <td><span class="icon-video"></span></td>
            <td><code>.icon-video</code></td>
            <td>-</td>
            <td>002C</td>
        </tr>
        <tr>
            <td><span class="icon-save"></span></td>
            <td><code>.icon-save</code></td>
            <td>.</td>
            <td>002D</code></td>
            <td><span class="icon-presentation"></span></td>
            <td><code>.icon-presentation</code></td>
            <td>/</td>
            <td>002E</td>
        </tr>
        <tr>
            <td><span class="icon-pencil"></span></td>
            <td><code>.icon-icon-pencil</code></td>
            <td>0</td>
            <td>002F</code></td>
            <td><span class="icon-list"></span></td>
            <td><code>.icon-list</code></td>
            <td>1</td>
            <td>0030</td>
        </tr>
        <tr>
            <td><span class="icon-anchor"></span></td>
            <td><code>.icon-anchor</code></td>
            <td>2</td>
            <td>0031</code></td>
            <td><span class="icon-images"></span></td>
            <td><code>.icon-images</code></td>
            <td>3</td>
            <td>0032</td>
        </tr>
        <tr>
            <td><span class="icon-gear"></span></td>
            <td><code>.icon-gear</code></td>
            <td>4</td>
            <td>0033</code></td>
            <td><span class="icon-sidebar"></span></td>
            <td><code>.icon-sidebar</code></td>
            <td>5</td>
            <td>0034</td>
        </tr>
        <tr>
            <td><span class="icon-documentaion"></span></td>
            <td><code>.icon-documentaion</code></td>
            <td>6</td>
            <td>0035</code></td>
            <td><span class="icon-delete"></span></td>
            <td><code>.icon-delete</code></td>
            <td>7</td>
            <td>0036</td>
        </tr>
        <tr>
            <td><span class="icon-options"></span></td>
            <td><code>.icon-options</code></td>
            <td>8</td>
            <td>0037</code></td>
            <td><span class="icon-chat"></span></td>
            <td><code>.icon-chat</code></td>
            <td>9</td>
            <td>0038</td>
        </tr>
        <tr>
            <td><span class="icon-cart"></span></td>
            <td><code>.icon-cart</code></td>
            <td>:</td>
            <td>0039</code></td>
            <td><span class="icon-camera"></span></td>
            <td><code>.icon-camera</code></td>
            <td>;</td>
            <td>003A</td>
        </tr>
        <tr>
            <td><span class="icon-calendar"></span></td>
            <td><code>.icon-icon-calendar</code></td>
            <td><</td>
            <td>003B</code></td>
            <td><span class="icon-bulb"></span></td>
            <td><code>.icon-bulb</code></td>
            <td>=</td>
            <td>003D</td>
        </tr>
        <tr>
            <td><span class="icon-brush"></span></td>
            <td><code>.icon-brush</code></td>
            <td>></td>
            <td>003E</code></td>
            <td><span class="icon-uparrow"></span></td>
            <td><code>.icon-uparrow</code></td>
            <td>?</td>
            <td>003F</td>
        </tr>
        <tr>
            <td><span class="icon-remove-circ"></span></td>
            <td><code>.icon-remover-circ</code></td>
            <td>@</td>
            <td>0040</code></td>
            <td><span class="icon-add-circ"></span></td>
            <td><code>.icon-add-circ</code></td>
            <td>A</td>
            <td>0041</td>
        </tr>
        <tr>
            <td><span class="icon-close-circ"></span></td>
            <td><code>.icon-close-circ</code></td>
            <td>B</td>
            <td>0042</code></td>
            <td><span class="icon-exclaim-circ"></span></td>
            <td><code>.icon-exlcaim-circ</code></td>
            <td>C</td>
            <td>0043</td>
        </tr>

        <tr>
            <td><span class="icon-error-circ"></span></td>
            <td><code>.icon-error-circ</code></td>
            <td>D</td>
            <td>0044</code></td>
            <td><span class="icon-help-circ"></span></td>
            <td><code>.icon-help-circ</code></td>
            <td>E</td>
            <td>0045</td>
        </tr>
        <tr>
            <td><span class="icon-tick-circ"></span></td>
            <td><code>.icon-tick-circ</code></td>
            <td>F</td>
            <td>0046</code></td>
            <td><span class="icon-clock"></span></td>
            <td><code>.icon-clock</code></td>
            <td>G</td>
            <td>0047</td>
        </tr>
        <tr>
            <td><span class="icon-play"></span></td>
            <td><code>.icon-play</code></td>
            <td>H</td>
            <td>0048</code></td>
            <td><span class="icon-pause"></span></td>
            <td><code>.icon-pause</code></td>
            <td>I</td>
            <td>0049</td>
        </tr>
        <tr>
            <td><span class="icon-stop"></span></td>
            <td><code>.icon-stop</code></td>
            <td>J</td>
            <td>004A</code></td>
            <td><span class="icon-next"></span></td>
            <td><code>.icon-next</code></td>
            <td>K</td>
            <td>004B</td>
        </tr>
        <tr>
            <td><span class="icon-prev"></span></td>
            <td><code>.icon-prev</code></td>
            <td>L</td>
            <td>004C</code></td>
            <td><span class="icon-forward"></span></td>
            <td><code>.icon-forward</code></td>
            <td>M</td>
            <td>004D</td>
        </tr>
        <tr>
            <td><span class="icon-backward"></span></td>
            <td><code>.icon-backward</code></td>
            <td>N</td>
            <td>004E</code></td>
            <td><span class="icon-sound-full"></span></td>
            <td><code>.icon-sound-full</code></td>
            <td>O</td>
            <td>004F</td>
        </tr>
        <tr>
            <td><span class="icon-sound-mute"></span></td>
            <td><code>.icon-sound-mute</code></td>
            <td>P</td>
            <td>0050</code></td>
            <td><span class="icon-sound-half"></span></td>
            <td><code>.icon-sound-half</code></td>
            <td>Q</td>
            <td>0051</td>
        </tr>
        <tr>
            <td><span class="icon-twitterbird"></span></td>
            <td><code>.icon-twitterbird</code></td>
            <td>R</td>
            <td>0053</code></td>
            <td><span class="icon-linkedin"></span></td>
            <td><code>.icon-linkedin</code></td>
            <td>S</td>
            <td>0053</td>
        </tr>
        <tr>
            <td><span class="icon-facebook"></span></td>
            <td><code>.icon-facebook</code></td>
            <td>T</td>
            <td>0054</code></td>
            <td><span class="icon-twitter"></span></td>
            <td><code>.icon-twitter</code></td>
            <td>U</td>
            <td>0055</td>
        </tr>
        <tr>
            <td><span class="icon-plus"></span></td>
            <td><code>.icon-plus</code></td>
            <td>V</td>
            <td>0056</code></td>
            <td><span class="icon-minus"></span></td>
            <td><code>.icon-minus</code></td>
            <td>W</td>
            <td>0057</td>
        </tr>
        <tr>
            <td><span class="icon-cross"></span></td>
            <td><code>.icon-cross</code></td>
            <td>X</td>
            <td>0058</code></td>
            <td><span class="icon-tick"></span></td>
            <td><code>.icon-tick</code></td>
            <td>Y</td>
            <td>0059</td>
        </tr>
        <tr>
            <td><span class="icon-phone"></span></td>
            <td><code>.icon-phone</code></td>
            <td>Z</td>
            <td>005A</code></td>
            <td><span class="icon-tab"></span></td>
            <td><code>.icon-tab</code></td>
            <td>[</td>
            <td>005B</td>
        </tr>
        <tr>
            <td><span class="icon-monitor"></span></td>
            <td><code>.icon-monitor</code></td>
            <td>\</td>
            <td>005C</code></td>
            <td><span class="icon-reload"></span></td>
            <td><code>.icon-reload</code></td>
            <td>]</td>
            <td>005D</td>
        </tr>
        <tr>
            <td><span class="icon-sync"></span></td>
            <td><code>.icon-sync</code></td>
            <td>^</td>
            <td>005E</code></td>
            <td><span class="icon-rightarrow"></span></td>
            <td><code>.icon-rightarrow</code></td>
            <td>_</td>
            <td>005F</td>
        </tr>
        <tr>
            <td><span class="icon-leftarrow"></span></td>
            <td><code>.icon-leftarrow</code></td>
            <td>`</td>
            <td>0060</code></td>
            <td><span class="icon-menu"></span></td>
            <td><code>.icon-menu</code></td>
            <td>a</td>
            <td>0061</td>
        </tr>
        <tr>
            <td><span class="icon-sync"></span></td>
            <td><code>.icon-sync</code></td>
            <td>^</td>
            <td>005E</code></td>
            <td><span class="icon-rightarrow"></span></td>
            <td><code>.icon-rightarrow</code></td>
            <td>_</td>
            <td>005F</td>
        </tr>
        <tr>
            <td><span class="icon-arrowleftlong"></span></td>
            <td><code>.icon-arrowleftlong</code></td>
            <td>c</td>
            <td>0063</code></td>
            <td><span class="icon-arrowrightlong"></span></td>
            <td><code>.icon-arrowrightlong</code></td>
            <td>d</td>
            <td>0064</td>
        </tr>
        <tr>
            <td><span class="icon-arrowleftthin"></span></td>
            <td><code>.icon-arrowleftthin</code></td>
            <td>e</td>
            <td>0065</code></td>
            <td><span class="icon-arrowrightthin"></span></td>
            <td><code>.icon-arrowrightthin</code></td>
            <td>f</td>
            <td>0066</td>
        </tr>
        </tbody>
    </table>
<?php
}
}
?>
