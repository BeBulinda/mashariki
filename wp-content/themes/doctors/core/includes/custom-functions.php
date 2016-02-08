<?php

/* File Directory
-------------------------------------------------*/
function tally_file_directory($file){
	$stylesheet = get_stylesheet_directory().'/app/'.$file;
	$app = get_template_directory().'/app/'.$file;
	$theme = get_template_directory().'/core/'.$file;
	
	$dri = '';
	
	if(file_exists($stylesheet)){
		$dri = $stylesheet;
	}elseif(file_exists($app)){
		$dri = $app;
	}elseif(file_exists($theme)){
		$dri = $theme;
	}
	
	return $dri;
}




/* File Directory URL
-------------------------------------------------*/
function tally_file_directory_uri($file){
	
	$stylesheet = get_stylesheet_directory().'/app/'.$file;
	$app = get_template_directory().'/app/'.$file;
	$theme = get_template_directory().'/core/'.$file;
	
	$stylesheet_url = get_stylesheet_directory_uri().'/app/'.$file;
	$app_url = get_template_directory_uri().'/app/'.$file;
	$theme_url = get_template_directory_uri().'/core/'.$file;
	
	$url = '';
	
	if(file_exists($stylesheet)){
		$url = $stylesheet_url;
	}elseif(file_exists($app)){
		$url = $app_url;
	}elseif(file_exists($theme)){
		$url = $theme_url;
	}
	
	return $url;
}




/* Output Content Nav
-------------------------------------------------*/
function tally_paginate($query = ''){
	
	$output = null;
	
	if ($query->max_num_pages > 1) {
		$output .= '<div class="pagenav">';
			$big = 999999999; // need an unlikely integer		
			$output .= paginate_links( array(
				'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format' => '?paged=%#%',
				'current' => max( 1, get_query_var('paged') ),
				'total' => $query->max_num_pages
			));
		$output .= '</div>';
	}
	
	return $output;
}




/* Output Content Nav
-------------------------------------------------*/
function tally_paginate2(){
	global $wp_query; 
	$query = $wp_query;
	$output = null;
	
	if ($query->max_num_pages > 1) {
		$output .= '<div class="pagenav">';
			$big = 999999999; // need an unlikely integer		
			$output .= paginate_links( array(
				'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format' => '?paged=%#%',
				'current' => max( 1, get_query_var('paged') ),
				'total' => $query->max_num_pages
			));
		$output .= '</div>';
	}
	
	return $output;
}




/* Register Widgets
-------------------------------------------------*/
function tally_register_sidebar(){
	register_sidebar( array(
		'name' => __('Primary Sidebar', 'doctors'),
		'id' => 'sidebar',
		'description' => __('Primary Sidebar Widgets', 'doctors'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => "</div><div class='clear' style='height:30px;'></div>",
		'before_title' => '<h4 class="heading">',
		'after_title' => '</h4>',
	));
	register_sidebar( array(
		'name' => __('Footer Widget #1', 'doctors'),
		'id' => 'footer_widget_1',
		'description' => __('Footer Widget #1', 'doctors'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => "</div>",
		'before_title' => '<h4 class="heading">',
		'after_title' => '</h4>',
	));
			
	register_sidebar( array(
		'name' => __('Footer Widget #2', 'doctors'),
		'id' => 'footer_widget_2',
		'description' => __('Footer Widget #2', 'doctors'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => "</div>",
		'before_title' => '<h4 class="heading">',
		'after_title' => '</h4>',
	));
		
	register_sidebar( array(
		'name' => __('Footer Widget #3', 'doctors'),
		'id' => 'footer_widget_3',
		'description' => __('Footer Widget #3', 'doctors'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => "</div>",
		'before_title' => '<h4 class="heading">',
		'after_title' => '</h4>',
	));
		
	register_sidebar( array(
		'name' => __('Footer Widget #4', 'doctors'),
		'id' => 'footer_widget_4',
		'description' => __('Footer Widget #4', 'doctors'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => "</div>",
		'before_title' => '<h4 class="heading">',
		'after_title' => '</h4>',
	));
		
}
add_action('widgets_init', 'tally_register_sidebar');




/* Default Theme Option
-------------------------------------------------*/
function tally_option_default($option_name){

	if(file_exists( tally_file_directory('includes/trunk/'.tally_config('slug').'/'.tally_config('slug').'_mods.php') )){
		include( tally_file_directory('includes/trunk/'.tally_config('slug').'/'.tally_config('slug').'_mods.php') );
	}else{
		include( tally_file_directory('includes/default_mods.php') );
	}
	
	if(isset($tally_mood[$option_name])){ return $tally_mood[$option_name]; }
}





/* Theme Option
-------------------------------------------------*/
function tally_option($option, $escaped = 'wp_kses_post' ){
	
	if($escaped == 'html'){
		return esc_html(get_theme_mod($option, tally_option_default($option)));
	}elseif($escaped == 'url'){
		return esc_url(get_theme_mod($option, tally_option_default($option)));
	}elseif($escaped == 'js'){
		return esc_js(get_theme_mod($option, tally_option_default($option)));
	}elseif($escaped == 'attr'){
		return esc_attr(get_theme_mod($option, tally_option_default($option)));
	}elseif($escaped == 'wp_kses_post'){
		return wp_kses_post(get_theme_mod($option, tally_option_default($option)));
	}else{
		return get_theme_mod($option, tally_option_default($option));		
	}
	
}





/* Content Resource Loader
-------------------------------------------------*/
function tally_content_resource_loader($file_name, $name, $current_post_id){

	$file = tally_file_directory('contents/'.$name.'/'.tally_config($name).'/'.$file_name.'.php');
	if(file_exists($file)){ include($file); }
}





/* Config
-------------------------------------------------*/
function tally_config($slug){
	
	$default = array();	
	$default['dev_mood'] = false;


	if(file_exists(tally_file_directory('includes/getver.php'))){
		include(tally_file_directory('includes/getver.php'));
	}
	
	$config = array_merge($default, $tally_getver);
	
	if( $slug != '' ){
		if(isset($config[$slug])){
			return $config[$slug];
		}
	}
}





/* Breadcrumb
-------------------------------------------------*/
function tally_breadcrumb($separator = " &raquo; ") {
    global $post;
	
    echo '<div class="breadcrumb">';
	if (!is_front_page()) {
		echo '<a href="';
		echo home_url();
		echo '">';
		_e( 'Home', 'doctors' );
		echo "</a> ".$separator;
		if ( is_category() || is_single() ) {
			$category = get_the_category(); 
			if($category[0]){ echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>'; }
			if ( is_single() ) {
				echo $separator;
				the_title();
			}
		} elseif ( is_page() && $post->post_parent ) {
			$home = get_page(get_option('page_on_front'));
			for ($i = count($post->ancestors)-1; $i >= 0; $i--) {
				if (($home->ID) != ($post->ancestors[$i])) {
					echo '<a href="';
					echo get_permalink($post->ancestors[$i]); 
					echo '">';
					echo get_the_title($post->ancestors[$i]);
					echo "</a>".$separator;
				}
			}
			echo the_title();
		} elseif (is_page()) {
			echo the_title();
		} elseif (is_404()) {
			echo "404";
		}elseif(is_author()){
			_e('Author Profile: ', 'doctors');
			echo get_the_author();
		}elseif(is_date()){
			single_month_title(' ');
		}
	} else {
		_e( 'Home', 'doctors' );
	}
	echo '</div>';
}





/* Show Save Data
-------------------------------------------------*/
function tally_get_saved_data(){
	$theme_mood = get_theme_mods();
	echo '<textarea style="height:400px; width: 100%;">'.tally_create_array_from_option($theme_mood).'</textarea>';
}
function tally_get_saved_data_all(){
	$theme_mood = get_theme_mods();
	
	if(file_exists( tally_file_directory('includes/default_mods.php') )){
		include( tally_file_directory('includes/default_mods.php') );
	}else{
		include( tally_file_directory('includes/default_mods_s.php') );
	}
	
	$data = array_merge($tally_mood, $theme_mood);
	
	echo '<textarea style="height:400px; width: 100%;">'.tally_create_array_from_option($data).'</textarea>';
}





/* Create Config Array
-------------------------------------------------*/
function tally_create_array_from_option($options){
	$output = '';
	if(is_array($options )){
	$output .= '<?php'."\n" . '$tally_mood = array('. "\n";
		foreach($options as $key => $option){
			if(is_array($option)){
				$output .= "'".$key."' => array(" . "\n";
					foreach($option as $key_1 => $option_1){
						if(is_array($option_1)){
							$output .= "\t" . "array(" . "\n";
								foreach($option_1 as $key_2 => $option_2){
									
									if(is_array($option_2)){
										$output .= "\t" . "\t" . "array(" . "\n";
											foreach($option_2 as $key_3 => $option_3){
												$output .= "\t" . "\t" . "\t" . "'".$key_3."' => '".str_replace("'","\'",$option_3)."'," . "\n";
											}
										$output .= "\t" . "\t" . ")," . "\n";
									}else{
										$output .= "\t" . "\t" . "'".$key_2."' => '".str_replace("'","\'",$option_2)."'," . "\n";
									}
										
								}
							$output .= "\t" . ")," . "\n";
						}else{
							$output .= "\t" . "'".$key_1."' => '".str_replace("'","\'",$option_1)."'," . "\n";
						}
					}
				$output .= ")," . "\n";
			}else{
				$output .= "'".$key."' => '".str_replace("'","\'",$option)."'," . "\n";
			}
		}
	$output .= ');';
	}
	
	return $output;
}




/* Home Style Option
-------------------------------------------------*/
function tally_home_style_option($section_id,  $name){
	$section_option = $section_id.$name.'Color';
	$main_option = 'tally_color_main_'.$name;
	
	if(tally_option($section_option) != ''){
		return tally_option($section_option);
	}else{
		return tally_option($main_option);
	}
}




/* tally_max_charlength
-------------------------------------------------*/
function tally_max_charlength($charlength, $text = null) {

	if ($text){
		$excerpt = $text;
	}else{
		$excerpt = get_the_excerpt();
	}

	$charlength++;
	if (strlen($excerpt)>$charlength) {
		$subex   = substr($excerpt,0,$charlength-5);
		$exwords = explode(" ",$subex);
		$excut   = -(strlen($exwords[count($exwords)-1]));
		if ($excut<0) {
			return substr($subex,0,$excut);
		}else{
			return $subex;
		}
		return '...';
	} else {
        return $excerpt;
	}
}




/* Resize image
-------------------------------------------------*/
if(!function_exists('tally_image')):
function tally_image($url, $width = '', $height = '', $crop = true, $placeholder = true, $align = '', $retina = TALLY_IMAGE_RETINA_SUPPORT){
	global $wpdb, $blog_id;
	
    $query = "SELECT ID FROM {$wpdb->posts} WHERE guid='$url'";
    $id = $wpdb->get_var($query);
	
	$the_image_name = basename($url);
	
	if(($id == true) && function_exists('mr_image_resize') && ($url != NULL)){
		return mr_image_resize($url, $width, $height, $crop, $align, $retina);
	}
	elseif((file_exists(get_stylesheet_directory().'/images/demo/'.$the_image_name)) && function_exists('mr_image_resize') && ($url != NULL)){
		
		list($or_width, $or_height) = getimagesize(get_template_directory().'/images/demo/'.$the_image_name);
		if( ($or_width == $width) && ($or_height == $height) ){
			return get_template_directory_uri().'/images/demo/'.$the_image_name;
		}else{
			return mr_image_resize(get_template_directory_uri().'/images/demo/'.$the_image_name, $width, $height, $crop, $align, $retina);
		}
	}
	elseif((file_exists(get_template_directory().'/images/demo/'.$the_image_name)) && function_exists('mr_image_resize') && ($url != NULL)){
		
		list($or_width, $or_height) = getimagesize(get_template_directory().'/images/demo/'.$the_image_name);
		if( ($or_width == $width) && ($or_height == $height) ){
			return get_template_directory_uri().'/images/demo/'.$the_image_name;
		}else{
			return mr_image_resize(get_template_directory_uri().'/images/demo/'.$the_image_name, $width, $height, $crop, $align, $retina);
		}

	}
	else{
		return 'http://placehold.it/'.$width.'x'.$height;
	}
}
endif;




/* Get First Media
-------------------------------------------------*/
function tally_get_first_embed_media($post_id, $type = 'video', $image = NULL) {

    $post = get_post($post_id);
    $content = do_shortcode( apply_filters( 'the_content', $post->post_content ) );
    $embeds = get_media_embedded_in_content( $content );

    if( !empty($embeds) ) {
		
		if($type == 'video'){
			foreach( $embeds as $embed ) {
				if( strpos( $embed, 'video' ) || strpos( $embed, 'youtube' ) || strpos( $embed, 'vimeo' ) || strpos( $embed, 'iframe' ) ) {
					return '<div class="tally-embed-container">'.$embed.'</div>';
				}
			}
		}elseif($type == 'audio'){
			foreach( $embeds as $embed ) {
				if( strpos( $embed, 'audio' ) && strpos( $embed, 'wp-audio-shortcode' ) ) {
					if($image != NULL){ $image = '<img src="'.$image.'" alt="'.$post->title.'">'; }
					return '<div class="">'.$image.$embed.'</div>';
				}else{
					return '<div class="tally-embed-container">'.$embed.'</div>';
				}
			}
		}
        

    } else {
        //No video embedded found
        return false;
    }

}




/* Warp embed media
-------------------------------------------------*/
function add_video_embed_note($html, $url, $attr) {

    if( strpos( $html, 'video' ) || strpos( $html, 'youtube' ) || strpos( $html, 'vimeo' ) || strpos( $html, 'iframe' ) ) {
		  return '<div class="tally-embed-container"">'.$html.'</div>';
     } else {
          return $html;
     }

}
add_filter('embed_oembed_html', 'add_video_embed_note', 10, 3);