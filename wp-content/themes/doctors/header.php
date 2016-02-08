<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />	
<?php if ( !function_exists( 'has_site_icon' ) ):?>
	<link rel='shortcut icon' type='image/x-icon' href='<?php echo tally_option('tally_header_favicon', 'url'); ?>' />
<?php endif; ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
