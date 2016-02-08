/*	CSS Reset
---------------------------------------------------*/
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
	display: block;
}
body {
	line-height: 1;
}
ol, ul {
	list-style: none;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}



/*	Typhography
---------------------------------------------------*/
<?php
	$tally_googleFont_heading = 'Arial, Helvetica, sans-serif';
	$tally_googleFont_text = 'Arial, Helvetica, sans-serif';
	
	if(tally_option('tally_font_source_list') == 'google'){
		if(tally_option('tally_font_googleFont_heading') != ''){
			
			$pre_tally_googleFont_heading = str_replace("+", " ", strstr(tally_option('tally_font_googleFont_heading'), ':', true));
			
			if($pre_tally_googleFont_heading == ''){  
				$tally_googleFont_heading = "'".str_replace("+", " ", tally_option('tally_font_googleFont_heading'))."'";
			}else{
				$tally_googleFont_heading = "'".str_replace("+", " ", strstr(tally_option('tally_font_googleFont_heading'), ':', true))."'";
			}
		}
		if(tally_option('tally_font_googleFont_text') != ''){
			
			$pre_tally_googleFont_text = str_replace("+", " ", strstr(tally_option('tally_font_googleFont_text'), ':', true));
			
			if($pre_tally_googleFont_text == ''){  
				$tally_googleFont_text = "'".str_replace("+", " ", tally_option('tally_font_googleFont_text'))."'";
			}else{
				$tally_googleFont_text = "'".str_replace("+", " ", strstr(tally_option('tally_font_googleFont_text'), ':', true))."'";
			}
		}
	}
?>
	body{ font-size:14px; line-height:1.5; font-family:<?php echo $tally_googleFont_text; ?>; color:#666; margin:0; padding:0; }
	
	h1, h2, h3, h4, h5, h6{ letter-spacing: 0.02em; line-height: 1.4; font-weight:normal; font-family:<?php echo $tally_googleFont_heading; ?>; }
		 
	h1 { font-size: 48px; line-height: 54px; margin-bottom:20px; font-weight: normal; }
	h2 { font-size: 34px; line-height: 40px; margin-bottom: 20px; }
	h3 { font-size: 24px; line-height: 30px; margin-bottom: 10px; font-weight:bold; }
	h4 { font-size: 18px; line-height: 22px; font-weight:bold; margin-bottom:15px; }
	h5 { font-size: 16px; line-height: 22px; }
	h6 { font-size: 15px; line-height: 24px; }

    h1 small, h2 small, h3 small, h4 small, h5 small, h6 small{ font-size: 60%; line-height: 0; }

    .title{ margin-bottom: 8px; line-height: 18px; }

    .post-title{ text-transform: uppercase; }

    p{ margin-bottom: 20px;}
    * p:last-child{ margin-bottom: 0 !important; }

    strong{ font-weight: 600; font-weight: 700;}
    em{ font-style: italic; }
    small{ font-size: 80%; }
	
	pre{
		height: auto;
		font-family: Consolas, monospace;
		border: 1px solid #e2e2e2;
		background: #f7f7f7;
		padding: 10px 20px;
		-moz-border-radius: 3px;
		-webkit-border-radius: 3px;
		border-radius: 3px;
		margin: 0 0 20px 0;
		overflow-x: auto;
	}
	
	blockquote{
		border-left: 3px solid;
		padding: 25px 25px;
		margin-bottom:20px;
	}


/* Links
================================================== */   
    a{ text-decoration:none; }
	a:hover{ text-decoration:underline; }
    a img{ border: none; }
    a > img{ vertical-align: bottom; }
    p a, p a:visited{ line-height: inherit; }
    
    
/* FORM
================================================== */
    input, select, textarea{
        border:0; 
		padding:12px; 
		font-size:1em; 
		font-family:Arial, sans-serif; 
		border:solid 1px; 
		max-width: 100%;
		width: 100%;
		
		-webkit-border-radius: 3px; 
		   -moz-border-radius: 3px; 
			    border-radius: 3px;

        -webkit-box-sizing: border-box; 
           -moz-box-sizing: border-box; 
                box-sizing: border-box; 
    }
	
	input[type="submit"],
	button[type="submit"],
	input[type="button"]{
		border:none;
		padding:8px 14px; 
		margin:0 0 20px; 
		font-size:1em;
		width:auto;
		cursor:pointer;
		
		-webkit-border-radius: 3px; 
		   -moz-border-radius: 3px; 
			    border-radius: 3px;
	}

	input[type="checkbox"],
	input[type="radio"]{
		width:auto; display:inline-block;
	}
    
    
    
/* IMAGES
================================================== */
    img{ max-width: 100%; height: auto; margin-bottom: -6px; }
    img.no-scale{ max-width: none; }

    img.alignleft{ margin-right: 25px; }
    img.alignright{ margin-left: 25px; }
    img.aligncenter{ margin-bottom: 25px; }
    
   
    
/* LISTS
================================================== */

    ul, ol, dl{ margin-bottom: 20px; list-style-position: outside; }

    ul ul, ul ol{ margin-left: 20px; margin-bottom: 0; }
    ul.square, ul.circle, ul.disc, ul.numeric{ margin-left: 17px; }
    ul.square{ list-style-type: square; }
    ul.square ul{ list-style: inherit; }
    ul.circle{ list-style-type: circle; }
    ul.circle ul{ list-style: inherit; }
    ul.disc{ list-style-type: disc; }
    ul.disc ul{ list-style: inherit; }
    ul.numeric{ list-style-type: decimal; }
    ul.numeric ul{ list-style: inherit; }
    ul.large li{ line-height: 25px; }
    ol{ margin-left: 20px; }
    ol li ul, ol li ol{ margin-left: 20px; margin-bottom: 0; }

    .onordered li{ margin-bottom: 5px; }

    .unstyled > li{ margin-bottom: 7px; }
    
      
/* Media
================================================== */  
iframe{ width: 100%; }
.tally-embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } 
.tally-embed-container iframe, 
.tally-embed-container object, 
.tally-embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }
    
    
/* Columns
================================================== */
	.col-holder{ width:100%; margin-bottom:40px; *zoom: 1; }
	.col-holder:before,
	.col-holder:after { display: table; content: ""; line-height: 0; }
	.col-holder:after { clear: both; }
	.col-holder.nomargin { margin-bottom:0 !important; }
	.col-holder .col{  
		display: block;
		width: 100%;
		min-height: 30px;
		-webkit-box-sizing: border-box;
		   -moz-box-sizing: border-box;
		box-sizing: border-box;
		float: left;
		margin-left: 2.857142857142857%;
  		*margin-left: 2.8095238095238098%; 
	}
	.col-holder .col:first-child{ margin-left:0; }
	.col-holder .col_1{  width: 5.714285714285714%; *width: 5.666666666666667%; }
	.col-holder .col_2{  width: 14.285714285714286%; *width: 14.238095238095239%; }
	.col-holder .col_3{  width: 22.857142857142858%; *width: 22.80952380952381%; }
	.col-holder .col_4{  width: 31.42857142857143%; *width: 31.380952380952383%; }
	.col-holder .col_5{  width: 40%; *width: 39.95238095238095%; }
	.col-holder .col_6{  width: 48.57142857142857%; *width: 48.52380952380952%; }
	.col-holder .col_7{  width: 57.14285714285714%; *width: 57.09523809523809%; }
	.col-holder .col_8{  width: 65.71428571428572%; *width: 65.66666666666667%; }
	.col-holder .col_9{  width: 74.28571428571429%; *width: 74.23809523809524%; }
	.col-holder .col_10{ width: 82.85714285714286%; *width: 82.80952380952381%; }
	.col-holder .col_11{ width: 91.42857142857143%; *width: 91.38095238095238%; }
	.col-holder .col_12{ width: 100%;  *width: 99.95238095238095%; }
	.col-holder .col_one_5{ width: 17.14%; }
	
	
	.cl_holder{ margin-left:-3%; }
	.cl{ margin-left:3%; float:left; margin-bottom:3%; }
	.cl_1{ width:97%; }
	.cl_2{ width:47%; }
	.cl_3{ width:30.33333%; }
	.cl_4{ width:22%; }
	.cl_5{ width:17%; }
	.cl_6{ width:13.66666%; }
	
	
	.cl24-holder{ width:100%; margin-bottom:40px; *zoom: 1; }
	.cl24-holder:before,
	.cl24-holder:after { display: table; content: ""; line-height: 0; }
	.cl24-holder:after { clear: both; }
	.cl24-holder.nomargin { margin-bottom:0 !important; }
	.cl24-holder .col{  
		display: block;
		width: 100%;
		min-height: 30px;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
		float: left;
		margin-left: 2%;
	}
	.cl24-holder .col:first-child{ margin-left:0; }
	.cl24-holder .col_1 { width: 2.25%; }
    .cl24-holder .col_2 { width: 6.5%; }
    .cl24-holder .col_3 { width: 10.75%; }
    .cl24-holder .col_4 { width: 15.0%; }
    .cl24-holder .col_5 { width: 19.25%; }
	.cl24-holder .col_one_5 { width: 18.4%; }
    .cl24-holder .col_6 { width: 23.5%; }
    .cl24-holder .col_7 { width: 27.75%; }
    .cl24-holder .col_8 { width: 32.0%; }
    .cl24-holder .col_9 { width: 36.25%; }
    .cl24-holder .col_10 { width: 40.5%; }
    .cl24-holder .col_11 { width: 44.75%; }
    .cl24-holder .col_12 { width: 49.0%; }
    .cl24-holder .col_13 { width: 53.25%; }
    .cl24-holder .col_14 { width: 57.5%; }
    .cl24-holder .col_15 { width: 61.75%; }
    .cl24-holder .col_16 { width: 66.0%; }
    .cl24-holder .col_17 { width: 70.25%; }
    .cl24-holder .col_18 { width: 74.5%; }
    .cl24-holder .col_19 { width: 78.75%; }
    .cl24-holder .col_20 { width: 83.0%; }
    .cl24-holder .col_21 { width: 87.25%; }
    .cl24-holder .col_22 { width: 91.5%; }
    .cl24-holder .col_23 { width: 95.75%; }
    .cl24-holder .col_24 { width: 100%; }
    
    
    @media only screen and (max-width: 768px) {	
        .col-holder .col{ margin-left:0; }
        .col-holder .col_1,
        .col-holder .col_2,
        .col-holder .col_3,
        .col-holder .col_4,
        .col-holder .col_5,
        .col-holder .col_6,
        .col-holder .col_7,
        .col-holder .col_8,
        .col-holder .col_9,
        .col-holder .col_10,
        .col-holder .col_11,
        .col-holder .col_12{ width: 100%; *width: 99.94680851063829%; margin-bottom:30px; }
        
        .cl_holder{ margin-left:0; }
        .cl{ margin-left:0; float:left; margin-bottom:30px; }
        .cl_1,
        .cl_2,
        .cl_3,
        .cl_4,
        .cl_5,
        .cl_6{ width: 100%; *width: 99.94680851063829%; }
	}
    
    
    
/* wordpress require
================================================== */
	.alignleft {display: inline; float: left; margin-right: 1.625em; margin-bottom:1em;}
	.alignright {display: inline;float: right;margin-left: 1.625em;  margin-bottom:1em;}
	.aligncenter {clear: both;display: block;margin-left: auto;margin-right: auto;}
		
	.wp-caption {margin-top: 0.4em;}
	.wp-caption {margin-bottom: 1.625em;max-width: 96%;padding: 9px;}
	.wp-caption img {display: block;margin: 0 auto;max-width: 98%;}
	.wp-caption .wp-caption-text, .gallery-caption { font-family: Georgia, serif;font-size: 12px;}
	.wp-caption .wp-caption-text {margin-bottom: 0.6em;padding: 10px 0 5px 40px;position: relative;}
	.wp-caption .wp-caption-text:before {color: #666;content: '\2014';font-size: 14px;font-style: normal;font-weight: bold;margin-right: 5px;position: absolute;left: 10px; top: 7px; }
	.sticky{ background:#f1f1f1; padding:25px;  -webkit-border-radius:4px; -moz-border-radius:4px; border-radius:4px;}	
    
    
/* OTHER
================================================== */
	.clear{ height:0px; width:100%; margin:0; padding:0; clear:both; }
	
	.responsive-table{
		height: auto;
		overflow-x: auto;
	}
	
	#lean_overlay {
		position: fixed;
		z-index:100;
		top: 0px;
		left: 0px;
		height:100%;
		width:100%;
		background: #000;
		display: none;
	}
	
	.align-left{ display:inline-block; float:left; }
	.align-right{ display:inline-block; float:right; }
	.align-center{ display:inline-block; text-align:center; }
	.text-align-center{ text-align:center; }
	.text-align-left{ text-align:left; }
	.text-align-right{ text-align:right; }
    
    *:before, *:after {
      box-sizing: border-box;
    }
    * {
  box-sizing: border-box;
}
    
    
    
/* Layout
================================================== */
	.site_content_width{ width:92%; margin:0 auto; max-width:1100px; }
	
	#site-header{  }
	#site-header-inner {  }
		#topbar{  }
			#topbar #topbar-inner{  }
		#header{  }
			#header #header-inner{  }
		#subheader{  }
			#subheader #subheader-inner{  }
	
	#site-main{ padding-top:50px; padding-bottom:50px; }
	#site-main-inner{  }
		#page-content{  }
			#page-content-inner{  }
		#sidebar{  }
			#sidebar-inner{  }
			
	
	/* Sidebar layout
	--------------------*/
	.sidebar-left #page-content{ width:70%; float:right; }
	.sidebar-left #sidebar{ width:27%; float:left; }
	
	.sidebar-right #page-content{ width:70%; float:left; }
	.sidebar-right #sidebar{ width:27%; float:right; }
    
    
    
    
/*~~~~~~~~~~~ Responsive Menu ~~~~~~~~~~~*/
.responsive-menu{ position: absolute; width: 100%; top: 50px; left: 0; }
a.responsive-menu-hand{ 
	color: inherit;
	/* border: solid 3px #676b6f; */
	/* padding: 2px 5px 0px 5px; */
	font-size: 40px;
	height: 40px;
	width: 40px;
	line-height: 40px;
	display: inline-block;
	border-radius: 5px;
	position: absolute;
	top: 20px;
	right: 20px;
	text-align: center;
    display: none;
}
.responsive-menu ul.menu{ margin:0; padding:0; list-style-type:none; width:90%; border:solid 1px #E9EDF1; border-bottom:0; margin-left:5%; display:none; }
.responsive-menu ul.menu li{ margin:0; padding:0; list-style-type:none; position:relative; }
.responsive-menu ul.menu li a{ color:inherit; line-height: 40px; height: 40px; padding-left:10px; border-bottom:solid 1px #E9EDF1; background-color: #FCFCFC; display:block; }
.responsive-menu ul.menu li a:hover{ text-decoration:none; background-color: #E9EDF1; }
.responsive-menu ul.menu li i{
	height: 40px;
	width: 40px;
	display: inline-block;
	position: absolute;
	right: 0px;
	top: 0px;
	text-align: center;
	line-height: 40px;
	cursor: pointer;
	font-size: 30px;
    border-left:solid 1px #E9EDF1;
}
.responsive-menu ul.menu li ul{ margin:0; }

.responsive-menu ul.menu li ul li a{ font-size:90%; padding-left:20px; border-bottom:solid 1px #DADADA; background-color: #F0F0F0; }
.responsive-menu ul.menu li ul li ul li a{ font-size:80%; padding-left:30px; border-bottom:solid 1px #BABABA; background-color: #E4E4E4 ; }





/* wordpress Widgets
================================================== */
	.widget_meta ul,
	.widget_pages ul,
	.widget_nav_menu ul,
	.widget_recent_entries ul,
	.widget_archive ul,
	.widget_categories ul,
	.widget_recent_comments ul{ margin-left:0px !important; list-style-type:none; }
	
	.widget_meta ul ul.children,
	.widget_pages ul ul.children,
	.widget_nav_menu ul ul.children,
	.widget_recent_entries ul ul.children,
	.widget_archive ul ul.children,
	.widget_categories ul ul.children,
	.widget_recent_comments ul ul.children{ margin-left:20px !important; }
	
	.widget_meta ul ul.children li:last-child,
	.widget_pages ul ul.children li:last-child,
	.widget_nav_menu ul ul.children li:last-child,
	.widget_recent_entries ul ul.children li:last-child,
	.widget_archive ul ul.children li:last-child,
	.widget_categories ul ul.children li:last-child,
	.widget_recent_comments ul ul.children li:last-child{ border-bottom:0; }
	
	.widget_recent_comments ul#recentcomments{ margin-left:0px !important;}
	
	.widget_meta ul li,
	.widget_pages ul li,
	.widget_nav_menu ul li,
	.widget_recent_entries ul li,
	.widget_archive ul li,
	.widget_categories ul li,
	.widget_recent_comments ul li{ margin:0; padding:0; border-bottom:solid 1px; padding-bottom:7px; padding-top:7px; display:block; }
	
	.widget_meta ul li:before,
	.widget_pages ul li:before,
	.widget_nav_menu ul li:before,
	.widget_recent_entries ul li:before,
	.widget_archive ul li:before,
	.widget_categories ul li:before,
	.widget_recent_comments ul li:before{ 
		display: inline-block; 
		font-family: FontAwesome; 
		font-size:120%; 
		margin-right:7px; 
		content: "\f105"; 
		font-style: normal;
		font-weight: normal;
		line-height: 1;
		-webkit-font-smoothing: antialiased;
		-moz-osx-font-smoothing: grayscale; 
	}
	
	.widget_meta ul li a,
	.widget_pages ul li a,
	.widget_nav_menu ul li a,
	.widget_recent_entries ul li a,
	.widget_archive ul li a,
	.widget_categories ul li a,
	.widget_recent_comments ul li a{ text-decoration:none; }
	
	.widget_meta ul li a:hover,
	.widget_pages ul li a:hover,
	.widget_nav_menu ul li a:hover,
	.widget_recent_entries ul li a:hover,
	.widget_archive ul li a:hover,
	.widget_categories ul li a:hover,
	.widget_recent_comments ul li a:hover{  }
	
	.widget_nav_menu ul li ul.sub-menu li:before{
		display: inline-block;
		font-family: FontAwesome;
		font-size: 70%;
		margin-right: 7px;
		margin-left:10px;
		content: "\f10c";
		font-style: normal;
		font-weight: normal;
		line-height: 1;
		-webkit-font-smoothing: antialiased;
		-moz-osx-font-smoothing: grayscale;
	}
	.widget_nav_menu ul li ul.sub-menu li:last-child{ border-bottom: solid 0px; margin-bottom: 0px; padding-bottom: 0px; }
	
	/*--- Archives ---*/
	.widget_archive ul li:before { content: "\f073"; }
	
	/*--- Post List ---*/
	.widget_recent_entries ul li:before { content: "\f016"; }
	
	/*--- Rss ---*/
	.widget_rss ul li:before { content: "\f09e"; }
	
	/*--- Categories ---*/
	.widget_categories ul li:before { content: "\f07b"; }
	
	/*-- -recent Comments ---*/
	.widget_recent_comments ul li:before { content: "\f086"; }
	
	
	/*-- -buddypress members widge ---*/
	.buddypress.widget ul.item-list{
		margin-left:0px !important;
	}


	/*--Tags ----*/
	.tagcloud a {
		padding:2px 9px 2px 9px; 
		font-weight:400; 
		margin: 0px -2px 2px 0px; 
		display:inline-block;  
		-moz-transition:.8s linear; 
		-webkit-transition:.8s ease-out; 
		transition:.8s linear; 
		font-size:12px !important;
	}
	.tagcloud a:hover {
		-moz-transition:.01s linear; 
		-webkit-transition:.01s ease-out; 
		transition:.01s linear;
	}
	
	
	/*--calendar ----*/
	.widget_calendar table#wp-calendar { width:100%;}
	.widget_calendar table td {border:none}
	.widget_calendar table#wp-calendar>tbody>tr>td>a {}
	.widget_calendar table#wp-calendar>tbody>tr>td>a:hover {background:none;}
	.widget_calendar table#wp-calendar caption {font-size:14px; text-align:left;}
	.widget_calendar thead>tr>th {width:14.2857%; padding:5px 0px 6px 0px; text-align:center; border:1px solid; font-weight:bold; color:inherit;}
	.widget_calendar tbody>tr>td {width:14.2857%; padding:5px 0px 6px 0px; text-align:center; border:1px solid; }
	.widget_calendar tfoot>tr>td>a, tfoot>tr>td>a:link, tfoot>tr>td>a:visited, tfoot>tr>td>a:hover, tfoot>tr>td>a:active {height:20px;}
	.widget_calendar tfoot>tr>td#prev {width:58px; height:20px; text-align:left; border:none; background:none;}
	.widget_calendar tfoot>tr>td#next {width:58px; height:20px;	text-align:right; border:none; background:none;}
	.widget_calendar tfoot>tr>td#prev a:hover, tfoot>tr>td#next a:hover {background:none;}
	
	
	/*--Search Form -----*/
	.widget_search{ clear:both; }
	.widget_search input[type="text"]{ 
		-moz-border-radius:    4px 0px 0px 4px; 
		-webkit-border-radius: 4px 0px 0px 4px; 
		border-radius:         4px 0px 0px 4px;
		float:left;
		padding: 0;
		outline: none;
		margin: 0;
		width: 65% !important;
		display: block;
		margin-bottom: 0px;
		height: 30px;
		border-right:0;
	}
	.widget_search label{ display:none; }
	.widget_search input[type="submit"]{
		-moz-border-radius:    0px 4px 4px 0px; 
		-webkit-border-radius: 0px 4px 4px 0px; 
		border-radius:         0px 4px 4px 0px; 
		float:left;
		border:none;
		width:30%;
		margin:0;
		padding:0;
		padding: 0;
		cursor:pointer;
        height: 30px;
	}
	.widget_search input[type="submit"]:hover {
		opacity:0.7;
		-moz-transition:.8s linear; 
		-webkit-transition:.8s ease-out; 
		transition:.8s linear; 
	}
    
    
    
.tally_home_section{
	clear: both;
	width: 100%;
}
.tally_home_section_inner{
	width: 92%;
	margin: 0 auto;
	max-width: 1100px;
}

.gallery-caption{ padding-top: 10px; }