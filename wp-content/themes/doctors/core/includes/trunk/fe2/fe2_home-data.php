<?php
$tally_home_data = array();


/*
	Home: Slideshow
------------------------------------------*/
$columns = array();
$columns[] = array(
	'class'		=> '',
	'column'	=> '12',
	'blocks'	=> array(
		array(
			'id'		=> 'slideshow',
			'label'		=> 'Slideshow',
			'class'		=> '',
			'name'		=> 'text',
			'skin'		=> 'skin1',
			'biz'		=> false,
		),
	)
);
$tally_home_data[] = array(
	'id'			=> 'tally_home_slideshow',
	'label'			=> 'Home: Slideshow',
	'settings'		=> false, 
	'col_order'		=> array('slideshow'),
	'heading'		=> false,
	'colors'		=> false,
	'enable_column'	=> false,
	'inner_div'		=> false,
	'background'	=> false,
	'class'			=> 'tally_home_slideshow',
	'total_column'	=> '1',
	'columns'		=> $columns,
);



/*
	Home: Text Columns
------------------------------------------*/
$columns = array();

$columns[] = array(
	'class'		=> '',
	'column'	=> '12',
	'blocks'	=> array(
		array(
			'id'		=> 'callout',
			'label'		=> 'CallOut',
			'class'		=> '',
			'name'		=> 'text',
			'skin'		=> 'skin1',
			'biz'		=> false,
		),
	)
);
$tally_home_data[] = array(
	'id'			=> 'tally_home_callout',
	'label'			=> 'Home: Callout',
	'settings'		=> true, 
	'col_order'		=> array('callout'),
	'heading'		=> false,
	'colors'		=> true,
	'enable_column'	=> true,
	'inner_div'		=> true,
	'background'	=> true,
	'class'			=> 'tally_home_callout',
	'total_column'	=> '1',
	'columns'		=> $columns,
);


/*
	Home: InfoBox
------------------------------------------*/
$columns = array();
$columns[] = array(
	'class'		=> '',
	'column'	=> '6',
	'blocks'	=> array(
		array(
			'id'		=> 'products',
			'label'		=> 'Products',
			'class'		=> '',
			'name'		=> 'text',
			'skin'		=> 'skin1',
			'biz'		=> false,
		),
	)
);
$tally_home_data[] = array(
	'id'			=> 'tally_home_products',
	'label'			=> 'Home: Products',
	'settings'		=> true, 
	'col_order'		=> array('products'),
	'heading'		=> false,
	'colors'		=> true,
	'enable_column'	=> true,
	'inner_div'		=> true,
	'background'	=> true,
	'class'			=> 'tally_home_products',
	'total_column'	=> '2',
	'columns'		=> $columns,
);



/*
	Home: Testimonials
------------------------------------------*/
$columns = array();
$columns[] = array(
	'class'		=> '',
	'column'	=> '6',
	'blocks'	=> array(
		array(
			'id'		=> 'video_1',
			'label'		=> '#1: Video',
			'class'		=> '',
			'name'		=> 'text',
			'skin'		=> 'skin1',
			'biz'		=> false,
		),
	)
);
$columns[] = array(
	'class'		=> '',
	'column'	=> '6',
	'blocks'	=> array(
		array(
			'id'		=> 'video_2',
			'label'		=> '#2: Video',
			'class'		=> '',
			'name'		=> 'text',
			'skin'		=> 'skin1',
			'biz'		=> false,
		),
	)
);
$tally_home_data[] = array(
	'id'			=> 'tally_home_video',
	'label'			=> 'Home: Video',
	'settings'		=> true, 
	'col_order'		=> array('video_1', 'video_2'),
	'heading'		=> true,
	'colors'		=> true,
	'enable_column'	=> true,
	'inner_div'		=> true,
	'background'	=> true,
	'class'			=> 'tally_home_video',
	'total_column'	=> '2',
	'columns'		=> $columns,
);