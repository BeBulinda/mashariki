/* Reset
-----------------------*/
.thbs_flexslider .tfs-container a:hover,
.thbs_flexslider .tfs-slider a:hover,
.thbs_flexslider .tfs-container a:focus,
.thbs_flexslider .tfs-slider a:focus { outline: none; }
.thbs_flexslider .slides,
.thbs_flexslider .slides > li,
.thbs_flexslider .tfs-control-nav,
.thbs_flexslider .tfs-direction-nav { margin: 0; padding: 0; list-style: none;}
.thbs_flexslider .tfs-pauseplay span { text-transform: capitalize; }



/* Slider style
-----------------------*/
.thbs_flexslider { background: #ffffff; position: relative; zoom: 1; overflow: hidden; }
.thbs_flexslider .slides { zoom: 1; }
.thbs_flexslider .slides img { height: auto; }
.thbs_flexslider .slides li{ position: relative; }
.thbs_flexslider .tfs-viewport {
	max-height: 2000px;
	-webkit-transition: all 1s ease;
	-moz-transition: all 1s ease;
	-ms-transition: all 1s ease;
	-o-transition: all 1s ease;
	transition: all 1s ease;
}
.thbs_flexslider .loading .tfs-viewport { max-height: 300px; }
.thbs_flexslider .tfs-direction-nav { *height: 0; }
.thbs_flexslider .tfs-direction-nav a {
	text-decoration: none;
	display: block;
	width: 40px;
	height: 40px;
    line-height: 40px;
	margin: -20px 0 0;
	position: absolute;
	top: 50%;
	z-index: 10;
	overflow: hidden;
	opacity: 0;
	cursor: pointer;
	color: #fff;
	background-color:rgba(0,0,0,0.9);
	border-radius: 100%;
	font-size: 0;
    text-align: center;
	text-shadow: 1px 1px 0 rgba(255, 255, 255, 0.3);
	-webkit-transition: all 0.3s ease-in-out;
	-moz-transition: all 0.3s ease-in-out;
	-ms-transition: all 0.3s ease-in-out;
	-o-transition: all 0.3s ease-in-out;
	transition: all 0.3s ease-in-out;
}
.thbs_flexslider .tfs-direction-nav a:before {
	font-family: "FontAwesome";
	font-size: 20px;
	display: inline-block;
	content: '\f104';
	color: #fff;
	text-shadow: 1px 1px 0 rgba(255, 255, 255, 0.3);
}
.thbs_flexslider .tfs-direction-nav a.tfs-next:before { content: '\f105'; }
.thbs_flexslider .tfs-direction-nav .tfs-prev { left: -50px; }
.thbs_flexslider .tfs-direction-nav .tfs-next { right: -50px; }
.thbs_flexslider:hover .tfs-direction-nav .tfs-prev { opacity: 0.7; left: 10px; }
.thbs_flexslider:hover .tfs-direction-nav .tfs-prev:hover { opacity: 1; }
.thbs_flexslider:hover .tfs-direction-nav .tfs-next { opacity: 0.7; right: 10px; }
.thbs_flexslider:hover .tfs-direction-nav .tfs-next:hover { opacity: 1; }
.thbs_flexslider .tfs-direction-nav .tfs-disabled { opacity: 0!important; filter: alpha(opacity=0); cursor: default; }
.thbs_flexslider .tfs-control-nav { width: 100%; position: absolute; bottom: 20px; text-align: center; opacity: 0; }
.thbs_flexslider:hover .tfs-control-nav { opacity: 1;  }
.thbs_flexslider .tfs-control-nav li { margin: 0 6px; display: inline-block; zoom: 1; *display: inline; }
.thbs_flexslider .tfs-control-paging li a {
	width: 14px;
	height: 14px;
	display: block;
	background: #666;
	background: rgba(0, 0, 0, 0.3);
	cursor: pointer;
	text-indent: -9999px;
	-webkit-box-shadow: inset 0 0 3px rgba(0, 0, 0, 0.3);
	-moz-box-shadow: inset 0 0 3px rgba(0, 0, 0, 0.3);
	-o-box-shadow: inset 0 0 3px rgba(0, 0, 0, 0.3);
	box-shadow: inset 0 0 3px rgba(0, 0, 0, 0.3);
	-webkit-border-radius: 20px;
	-moz-border-radius: 20px;
	border-radius: 20px;
	border: solid 2px #fff;
}
.thbs_flexslider .tfs-control-paging li a:hover { background: #333; background: rgba(0, 0, 0, 0.7); }
.thbs_flexslider .tfs-control-paging li a.tfs-active {background: #000; background: rgba(0, 0, 0, 0.9); cursor: default;}



/* Caption Style
-----------------------*/
.thbs_flexslider .thbs_caption{
	position: absolute;
	z-index: 999;
	margin: auto;
	top: 0; 
    left:0%;
    height: 100%;
    width: 100%;
}
.thbs_flexslider .thbs_caption_inner{
	 text-align: center;
     height: 100%;
}
.thbs_flexslider .thbs_caption_inner span {
    height: 100%;
    vertical-align: middle;
    display: inline-block;
}
.thbs_flexslider .thbs_caption_content{
	margin: 0;        
    vertical-align: middle;
    display: inline-block; 
	position: relative;
    width: 70%;
}

.thbs_flexslider .thbs_caption .thbs_title{
	font-size: 40px;
	text-transform: uppercase;
	font-weight: bold;
	color: #fff !important;
	text-shadow: 1px 1px 2px rgba(0,0,0,0.6);
	margin-bottom: 20px;
}
.thbs_flexslider .thbs_caption .thbs_des{
	font-size: 20px;
	color: #fff;
	line-height: 1.5;
	text-shadow: 1px 1px 2px rgba(0,0,0,0.6);
    margin-bottom: 0;
}
.thbs_flexslider .thbs_caption .thbs_more{
	border: solid 2px #fff !important;
	padding: 10px 30px;
	border-radius: 5px;
	color: #fff !important;
	margin-top: 20px;
	display: inline-block;
}
.thbs_flexslider .thbs_caption .thbs_more:hover{ text-decoration:none; }



/* Caption Animation
-----------------------*/
.thbs_flexslider .thbs_caption .thbs_title{
    transition-property: margin-top;
	transition-duration: 1.1s;
	transition-timing-function: linear;
	margin-top: -1000px;
}
.thbs_flexslider .tfs-active-slide .thbs_caption .thbs_title{
	margin-top: 0;
}

.thbs_flexslider .thbs_caption .thbs_des{
    transition-property: margin-left;
	transition-duration: 1.3s;
	transition-timing-function: linear;
	margin-left: -1000px;
}
.thbs_flexslider .tfs-active-slide .thbs_caption .thbs_des{
	margin-left: 0;
}

.thbs_flexslider .thbs_caption .thbs_more{
    transition-property: margin-right;
	transition-duration: 1.5s;
	transition-timing-function: linear;
	margin-right: -1000px;
}
.thbs_flexslider .tfs-active-slide .thbs_caption .thbs_more{
	margin-right: 0;
}



/* Base Style
-----------------------*/
.thbs_flexslider { margin: 0; padding: 0; }
.thbs_flexslider .slides > li { display: none; -webkit-backface-visibility: hidden; }
.thbs_flexslider .slides img { width: 100%; display: block; }
.thbs_flexslider .slides:after {content: "\0020";display: block;clear: both;visibility: hidden;line-height: 0;height: 0;}
html[xmlns] .thbs_flexslider .slides {display: block;}
* html .thbs_flexslider .slides {height: 1%;}
.no-js .thbs_flexslider .slides > li:first-child {display: block;}



/* Responsive
-----------------------*/
@media screen and (max-width: 900px) {  
    .thbs_flexslider .thbs_caption .thbs_title{ font-size: 30px; }
    .thbs_flexslider .thbs_caption .thbs_des{ font-size: 15px; }
}
@media screen and (max-width: 670px) {  
    .thbs_flexslider .thbs_caption .thbs_title{ font-size: 20px; }
    .thbs_flexslider .thbs_caption .thbs_des{ font-size: 12px; }
}
@media screen and (max-width: 550px) {  
    .thbs_flexslider .thbs_caption .thbs_title{ font-size: 15px; }
    .thbs_flexslider .thbs_caption .thbs_des{ display: none; }
    .thbs_flexslider .thbs_caption .thbs_more{ display: none; }
}

