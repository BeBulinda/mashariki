<?php
/*
 * Font Rendering module
 * @package minima
 */
add_action("wp_head", "minima_font_render");

/**
 * Renders fonts and custom css
 * 
 * Prints fonts and custom styles.
 * @package minima
 * @return void
 */
if(!function_exists('minima_font_render')){
function minima_font_render() {
    minima_font_head(false);
    if (get_option('ti_generate_css')) {
        $app_list = get_option('min_appear_elems');
        $css = "/*Dynamic CSS*/\n";
        $js = "/*Dynamic JS*/\n";
        $dr = "/* Document.ready in jQuery */\n";
        $str="";
        foreach ($app_list['sections'] as $section) {
            foreach ($section['elements'] as $element) {
                $slug = 'sp-bg-' . $element['selector'];
                $data = get_option('sp-' . md5($slug), array());
                if (!empty($data)) {
                    $str.=$element['selector'] . "{\n";
                    $str.=((isset($data->bg_img_url)) ? 'background-image:url(' . $data->bg_img_url . ');' . "\n" : '');
                    $str.=((isset($data->bg_repeat)) ? 'background-repeat:' . $data->bg_repeat . ';' . "\n" : '');
                    $str.=((isset($data->bg_color)) ? 'background-color:' . $data->bg_color . ';' . "\n" : '');
                    $str.=((isset($data->posX) && isset($data->posY) && isset($data->bgUnit)) ? 'background-position:' . $data->posX . $data->bgUnit . ' ' . $data->posY . $data->bgUnit . ';' . "\n" : '');
                    $str.="}\n";
                    $css .= $str;
                }
                $slug = 'sp-font-' . $element['selector'];
                $data = get_option('sp-' . md5($slug), array());
                if (!empty($data)) {
                    if (array_key_exists('type',$data->font_desc)&&$data->font_desc['type'] == "cufon") {
                        $str = "Cufon.replace('" . $element['selector'] . "',{
                'fontFamily':'" . $data->font_desc['family'] . "'
            });\n";
                        $dr.="jQuery('" . $element['selector'] . "').each(function(){
                                jQuery(this).find('.ti-icon').each(function(){
                                jQuery(this).remove();
                                });
                            });\n";
                        $js .= $str;
                        $str = $element['selector'] . "{\n";
                        $str.='color:' . $data->color . ";\n";
                        $str.='font-size:' . $data->size . "px;\n";
                        $str.="}\n";
                        $css .= $str;
                    } elseif(array_key_exists('type',$data->font_desc)) {
                        //goes to css
                        $str = $element['selector'] . "{\n";
                        $str.=($data->color)?'color:' . $data->color . ";\n":'';
                        $str.=($data->font_desc['family'])?'font-family:' . stripslashes($data->font_desc['family']) . ";\n":'';
                        $str.=($data->size)?'font-size:' . $data->size . "px;\n":'';
                        $lh = $data->size * (1.5);
                        if ($lh) {
                            $str.='line-height:' . (int) ($lh) . "px;\n";
                        }
                        $str.="}\n";
                        $css .= $str;
                    }
                }
            }
        }

        update_option("ti_generate_css", 0);
        update_option("ti_dynamic_css", $css);
        update_option("ti_dynamic_js", $js);
        update_option("ti_dynamic_dr", $dr);
    }
    $css = get_option("ti_dynamic_css");
    $js = get_option("ti_dynamic_js");
    $dr = get_option("ti_dynamic_dr");
    ?>
    <style type="text/css">
    <?php echo $css; ?>
    </style>
    <script type="text/javascript">
    <?php echo $js; ?>
        jQuery(document).ready(function($){
    <?php echo $dr; ?>
                })
    </script>
    <?php
}
}
?>