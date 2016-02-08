


/* Header (1)
================================================== */
.tally_header_1{ background-color:#FFF; box-shadow: 0 2px 3px 0 rgba(31,31,31,.08); position: relative;  }
.tally_header_1 .th_branding{ margin-bottom:10px; margin-top: 10px; }
.tally_header_1 .th_logo{ float: left; }
.tally_header_1 .th_logo h1{ font-size: 20px;  margin-bottom: 0;  line-height: 30px;  text-transform: uppercase;  font-weight: bold; margin-top: 13px; }
.tally_header_1 .th_logo h1 a{ color: inherit; }
.tally_header_1 .th_logo h1 a:hover{ text-decoration: none; }
.tally_header_1 .th_logo span{ color:#9E9E9E; }
.tally_header_1 .th_element{ padding: 0 20px; position: relative; display: inline-block; border-top: none; vertical-align: top; }
.tally_header_1 .th_iconbox{ margin-top:15px; }
.tally_header_1 .th_iconbox .fa { 
	transition: all 150ms ease-out;
	float: left;
	font-size: 30px;
	margin-right: 10px;
	background-color: #e9edf1;
	height: 42px;
	width: 42px;
	text-align: center;
	line-height: 40px;
	border-radius: 5px;
	margin-top: 3px;
}
.tally_header_1 .th_iconbox_text{ float: left; }
.tally_header_1 .th_iconbox_text p{ margin: 5px 0 2px 0;  font-size: 13px;  font-weight: bold;  color: #676b6f; }
.tally_header_1 .th_iconbox_text span{ color: #a6acb3;  font-size: 12px; }
.tally_header_1 .th_social{ margin-top:21px; }
.tally_header_1 .th_social a{   
	margin: 0 2px;
	display: inline-block;
	font-size: 20px;
	background-color: #ebebed;
	color: #9ba7b2;
	text-align: center;
	line-height: 40px;
	border-radius: 5px;
	height: 40px;
	width: 40px;
	padding-top: 2px;
	transition: all 150ms ease-out; 
}
.tally_header_1 .th_social a:hover{ opacity: 0.7; }
.tally_header_1 .th_phone{ margin-top:20px; }
.tally_header_1 .th_phone a{
	display:inline-block;
	font-size: 12px;
	transition: all 150ms ease-out;
	padding: 0 20px;
	border-radius: 5px;
	height: 40px;
	line-height: 40px;
	margin-bottom: 10px;
	text-align: center;
    color: #fff;
	background-color: #fd7062;
	border-color: #fd7062;
    font-weight: bold;
    vertical-align: middle;
    -webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}
.tally_header_1 .th_phone a .fa{ font-size: 20px;  vertical-align: middle;  margin-right: 5px; }
.tally_header_1 .th_phone a:hover{ text-decoration:none; opacity: 0.7; }


/*~~~~~~~~~~~Menu~~~~~~~~~~~*/
.tally_header_1 .main_menu{ border-top:solid 1px rgba(31,31,31,.08); text-align:center; }
.tally_header_1 .main_menu ul{ margin:0; padding:0; list-style-type:none; }
.tally_header_1 .main_menu ul li{ margin:0; padding:0; float:none; display:inline-block; position:relative; }
.tally_header_1 .main_menu ul li a{ display:block; padding:14px 14px; text-decoration:none; font-size:14px; margin-left:10px; color:#676b6f; }
.tally_header_1 .main_menu ul li.menu-item-has-children > a:after{ content:"\f107"; font-family: 'FontAwesome'; margin-left:3px; }
.tally_header_1 .main_menu > ul > li:first-child a{ padding-left:3px; }
		
/*1st level dropdown an all level dropdown style*/
.tally_header_1 .main_menu ul li ul{ position:absolute; left:5px; z-index:99; display:none; width:180px; background-color: #FCFCFC; border:solid 1px #E9EDF1; }
.tally_header_1 .main_menu ul li ul li{ float:none; width:100%; text-align:left; }
.tally_header_1 .main_menu ul li ul li a{ 
	display:block;
	border:none;
	padding:8px 15px;
	text-decoration:none;
	font-size:12px;
	font-weight:400;
	text-transform:capitalize;
	margin-left:0;
	border-radius: 0px;
	border-bottom:solid 1px #E9EDF1;
}
	
.tally_header_1 .main_menu div ul li ul li a:hover{ text-decoration:none; background-color: #E9EDF1; }
.tally_header_1 .main_menu div ul li ul li ul{ position:absolute; left:180px; top:-1px; }
	
.tally_header_1 .main_menu div ul > li:hover > ul{display:block;}


@media only screen and (max-width: 1190px){
	.tally_header_1 .th_logo{ float: none; text-align: center; }
    .tally_header_1 .th_elements{ text-align: center; margin-top:5px; clear:both; }
    .tally_header_1 .th_iconbox { text-align: left; }
}
@media only screen and (max-width: 910px) {
	.tally_header_1 .th_logo{ float: none; text-align: left; }
	a.responsive-menu-hand{ display: block; }
    .responsive-menu{ top:65px; }
    .tally_header_1 .main_menu{ display: none; }
    .tally_header_1 .th_elements{ text-align: center; margin-top:5px; clear:both; }
    .tally_header_1 .th_element{ padding:0; width:100%; border-top:solid 1px #E9EDF1; margin:0; padding-top: 10px; padding-bottom: 10px; }
    .tally_header_1 .th_element.th_social{ padding-top: 15px; padding-bottom: 15px; }
    .tally_header_1 .th_iconbox { text-align: left; display: inline-block; min-width: 220px; max-width: 100%; margin:0; }
}