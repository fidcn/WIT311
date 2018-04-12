<?php
	require_once("config.php");
?>
<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<title><?php echo INST_NAME; ?> | Overview</title>
		<script>
			/* You can add more configuration options to webfontloader by previously defining the WebFontConfig with your options */
			if ( typeof WebFontConfig === "undefined" ) {
				WebFontConfig = new Object();
			}
			WebFontConfig['google'] = {families: ['Source+Sans+Pro:400', 'Fira+Sans:400']};
			(function() {
				var wf = document.createElement( 'script' );
				wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.3/webfont.js';
				wf.type = 'text/javascript';
				wf.async = 'true';
				var s = document.getElementsByTagName( 'script' )[0];
				s.parentNode.insertBefore( wf, s );
			})();
		</script>
		<link rel='dns-prefetch' href='//maps.googleapis.com' />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.4\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.4\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/demo.themetrail.com\/realty\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.9.5"}};
			!function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55357,56692,8205,9792,65039],[55357,56692,8203,9792,65039]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
			img.wp-smiley,
			img.emoji {
				display: inline !important;
				border: none !important;
				box-shadow: none !important;
				height: 1em !important;
				width: 1em !important;
				margin: 0 .07em !important;
				vertical-align: -0.1em !important;
				background: none !important;
				padding: 0 !important;
			}
		</style>
		<link rel='stylesheet' id='contact-form-7-css'  href='http://demo.themetrail.com/realty/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.0.1' type='text/css' media='all' />
		<link rel='stylesheet' id='theme-main-min-css'  href='/css/theme-main.min.css' type='text/css' media='all' />
		<link rel='stylesheet' id='theme-css'  href='/css/style.css' type='text/css' media='all' />
		<link rel='stylesheet' id='print-css'  href='http://demo.themetrail.com/realty/wp-content/themes/realty/print.css' type='text/css' media='print' />
		<script type='text/javascript'>
			/* <![CDATA[ */
			var ajax_object = {"ajax_url":"http:\/\/demo.themetrail.com\/realty\/wp-admin\/admin-ajax.php"};
			var map_options = {"map_style":"[{\"featureType\":\"landscape\",\"stylers\":[{\"hue\":\"#FFBB00\"},{\"saturation\":43.4},{\"lightness\":37.6},{\"gamma\":1}]},{\"featureType\":\"road.highway\",\"stylers\":[{\"hue\":\"#FFC200\"},{\"saturation\":-61.8},{\"lightness\":45.6},{\"gamma\":1}]},{\"featureType\":\"road.arterial\",\"stylers\":[{\"hue\":\"#FF0300\"},{\"saturation\":-100},{\"lightness\":51.2},{\"gamma\":1}]},{\"featureType\":\"road.local\",\"stylers\":[{\"hue\":\"#FF0300\"},{\"saturation\":-100},{\"lightness\":52},{\"gamma\":1}]},{\"featureType\":\"water\",\"stylers\":[{\"hue\":\"#0078FF\"},{\"saturation\":-13.2},{\"lightness\":2.4},{\"gamma\":1}]},{\"featureType\":\"poi\",\"stylers\":[{\"hue\":\"#00FF6A\"},{\"saturation\":-1.0989010989},{\"lightness\":11.2},{\"gamma\":1}]}]"};
			/* ]]> */
		</script>
		<script type='text/javascript' src='http://demo.themetrail.com/realty/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
		<script type='text/javascript' src='http://demo.themetrail.com/realty/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
		<script type='text/javascript' src='//maps.googleapis.com/maps/api/js?libraries=places&#038;key=AIzaSyD9b33bPXGFz_EycO5pqthRTS_vPV4p0nM'></script>
		<script type='text/javascript' src='http://demo.themetrail.com/realty/wp-content/themes/realty/lib/js/google-maps/google-maps.min.js'></script>
		<link rel='https://api.w.org/' href='http://demo.themetrail.com/realty/wp-json/' />
		<link rel="alternate" type="application/json+oembed" href="http://demo.themetrail.com/realty/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fdemo.themetrail.com%2Frealty%2Fproperty-map-vertical%2F" />
		<link rel="alternate" type="text/xml+oembed" href="http://demo.themetrail.com/realty/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fdemo.themetrail.com%2Frealty%2Fproperty-map-vertical%2F&#038;format=xml" />
		<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="http://demo.themetrail.com/realty/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen"><![endif]-->
		<style type="text/css" title="dynamic-css" class="options-output">body, .section-title span{background-color:#ffffff;}#header{background-color:#fff;}.top-header, .top-header a, .site-branding, .site-title a, .site-description a, .primary-menu a{color:#787878;}#header{font-family:"Source Sans Pro";opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading #header,{opacity: 0;}.ie.wf-loading #header,{visibility: hidden;}h1, h2, h3, h4, h5, h6{font-family:"Source Sans Pro";font-weight:400;color:#42484b;opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading h1, h2, h3, h4, h5, h6,{opacity: 0;}.ie.wf-loading h1, h2, h3, h4, h5, h6,{visibility: hidden;}body{font-family:"Fira Sans";font-weight:400;color:#787878;opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading body,{opacity: 0;}.ie.wf-loading body,{visibility: hidden;}#footer{background-color:#333;}#footer-bottom{background-color:#2e2e2e;}#footer .widget-title, #footer p{color:#ffffff;}</style>
		<style>
			/* Theme Option: Color Accent */
			.property-image-container,
			.property-image-container
			.property-item,
			.property-image-container
			.loader-container {
				height: 600px;
			}
			.text-primary {
				color: #43becc;
			}
						.btn-primary,
			.btn-primary:focus,
			input[type='submit'],
			.acf-button.blue,
			/*.primary-tooltips .tooltip-inner,*/
			.property-item .property-excerpt::after,
			.property-item.featured .property-title::after,
			#pagination .page-numbers li a:hover,
			#pagination .page-numbers li span:hover,
			#pagination .page-numbers li i:hover,
			#page-banner .banner-title:after,
			.map-wrapper .map-controls .control.active,
			.map-wrapper .map-controls .control:hover,
			.datepicker table tr td.active.active,
			.datepicker table tr td.active:hover.active,
			.noUi-connect {
				background-color: #43becc;
			}
			.page-template-template-property-submit #main-content{ padding: 25px; }
			.single-property #main-content{ padding: 25px; }
			@media(min-width:992px) {
				.sub-menu li.current-menu-item,
				.sub-menu li:hover {
					background-color: #43becc;
				}
			}
			input:focus,
			.form-control:focus,
			input:active,
			.form-control:active,
			ul#sidebar li.widget .wpcf7 textarea:focus,
			#footer li.widget .wpcf7 textarea:focus,
			ul#sidebar li.widget .wpcf7 input:not([type='submit']):focus,
			#footer li.widget .wpcf7 input:not([type='submit']):focus,
			.chosen-container.chosen-container-active .chosen-single, .chosen-container .chosen-drop {
				border-color: #43becc			}
			/*
			.primary-tooltips .tooltip.top .tooltip-arrow,
			.arrow-down,
			.sticky .entry-header {
				border-top-color: #43becc;
			}
			.primary-tooltips .tooltip.right .tooltip-arrow,
			.arrow-left {
				border-right-color: #43becc;
			}
			.primary-tooltips .tooltip.bottom .tooltip-arrow,
			.arrow-up {
				border-bottom-color: #43becc;
			}
			.primary-tooltips .tooltip.left .tooltip-arrow,
			.arrow-right,
			.property-slider .description .arrow-right {
				border-left-color: #43becc;
			}
			*/
			.property-slider .title { background-color: #43becc; }
			.property-slider .description .arrow-right { border-left-color: #43becc; }
			.property-slider .description .arrow-left { border-right-color: #43becc; }
			.input--filled label::before, .form-control:focus + label::before { border-color: #43becc !important }
			.rtl .property-slider .description .arrow-right { border-right-color: #43becc; border-left-color: transparent !important; }
			/* Theme Option: Color Header */
			.top-header,
			.top-header a,
			.site-branding,
			.site-title a,
			.site-description a,
			.primary-menu a {
				color: #787878;
			}
			.map-controls li:nth-child(4){ display:none; }
			span.multiselect-native-select{position:relative}span.multiselect-native-select select{border:0!important;clip:rect(0 0 0 0)!important;height:1px!important;margin:-1px -1px -1px -3px!important;overflow:hidden!important;padding:0!important;position:absolute!important;width:1px!important;left:50%;top:30px}.multiselect-container{position:absolute;list-style-type:none;margin:0;padding:0}.multiselect-container .input-group{margin:5px}.multiselect-container>li{padding:0}.multiselect-container>li>a.multiselect-all label{font-weight:700}.multiselect-container>li.multiselect-group label{margin:0;padding:3px 20px 3px 20px;height:100%;font-weight:700}.multiselect-container>li.multiselect-group-clickable label{cursor:pointer}.multiselect-container>li>a{padding:0}.multiselect-container>li>a>label{margin:0;height:100%;cursor:pointer;font-weight:400;padding:3px 20px 3px 40px}.multiselect-container>li>a>label.radio,.multiselect-container>li>a>label.checkbox{margin:0}.multiselect-container>li>a>label>input[type=checkbox]{margin-bottom:5px}.btn-group>.btn-group:nth-child(2)>.multiselect.btn{border-top-left-radius:4px;border-bottom-left-radius:4px}.form-inline .multiselect-container label.checkbox,.form-inline .multiselect-container label.radio{padding:3px 20px 3px 40px}.form-inline .multiselect-container li a label.checkbox input[type=checkbox],.form-inline .multiselect-container li a label.radio input[type=radio]{margin-left:-20px;margin-right:0}
		</style>
		<noscript><style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript>
<!--[if lt IE 9]>
<script src="http://demo.themetrail.com/realty/wp-content/themes/realty/lib/js/html5.js"></script>
<![endif]-->
	</head>
	<body class="page-template page-template-template-map-vertical page-template-template-map-vertical-php page page-id-301 header-fixed wpb-js-composer js-comp-ver-5.1.1 vc_responsive">
<header id="header">
	<div class="top-header">
		<div class="container">
			<div class="top-header-sidebar">
				<div class="textwidget">[Serving: <?php echo INST_LOC;
?>] · <a href="mailto:info@311.dchr.host">info@311.dchr.host</a></div>
			</div>
			<div class="top-header-links primary-tooltips">
				<a href="http://demo.themetrail.com/realty/property-submit/" data-toggle="modal">Submit Report</a>
				<a href="#login-modal" data-toggle="modal">Login</a>
			</div>
  		</div>
	</div>
  	<div class="container">
		<div class="site-branding">
			<p class="site-title"><a href="https://311.dchr.host" rel="home"><img width="124" height="23" src="./images/logo.png" class="site-logo" alt="" srcset="./images/logo.png 2x" /></a></p>
	    	<a id="toggle-navigation" class="navbar-togglex" href="#"><i></i></a>
			<div class="mobile-menu-overlay hide"></div>
    	</div>
		<nav class="main-navigation" id="navigation">
			<ul id="menu-main-menu" class="primary-menu">
				<li id="menu-item-256" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-256"><a href="#">Home</a>
				<ul class="sub-menu">
					<li id="menu-item-238" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-238"><a href="http://demo.themetrail.com/realty/slideshow-property/">Property Slideshow (Full Width)</a></li>
					<li id="menu-item-295" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-295"><a href="http://demo.themetrail.com/realty/slideshow-search/">Property Slideshow (Search)</a></li>
					<li id="menu-item-1154" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-1154"><a href="http://demo.themetrail.com/realty/">Property Map (Full Width)</a></li>
					<li id="menu-item-863" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-863"><a href="http://demo.themetrail.com/realty/home-single-property/">Single Property Home Page</a></li>
					<li id="menu-item-268" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-268"><a href="#">Intro Pages</a>
						<ul class="sub-menu">
							<li id="menu-item-270" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-270"><a href="http://demo.themetrail.com/realty/intro-fullscreen-image/">Fullscreen Image</a></li>
							<li id="menu-item-269" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-269"><a href="http://demo.themetrail.com/realty/intro-fullscreen-slideshow/">Fullscreen Slideshow</a></li>
							<li id="menu-item-246" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-246"><a href="http://demo.themetrail.com/realty/intro-fullscreen-video/">Fullscreen Video</a></li>
						</ul>
					</li>
				</ul>
				</li>
				<li id="menu-item-258" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor menu-item-has-children menu-item-258"><a href="#">Properties</a>
				<ul class="sub-menu">
					<li id="menu-item-1157" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1157"><a href="#">Single Property</a>
					<ul class="sub-menu">
						<li id="menu-item-1158" class="menu-item menu-item-type-post_type menu-item-object-property menu-item-1158"><a href="http://demo.themetrail.com/realty/property/futuristic-nest/">Single Property (Full-Width)</a></li>
						<li id="menu-item-1159" class="menu-item menu-item-type-post_type menu-item-object-property menu-item-1159"><a href="http://demo.themetrail.com/realty/property/for-the-minimalist/">Single Property (Boxed)</a></li>
					</ul>
				</li>
				<li id="menu-item-1160" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-1160"><a href="#">Property Maps</a>
					<ul class="sub-menu">
						<li id="menu-item-249" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-249"><a href="http://demo.themetrail.com/realty/property-map/">Property Map (Horizontal)</a></li>
						<li id="menu-item-305" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-301 current_page_item menu-item-305"><a href="http://demo.themetrail.com/realty/property-map-vertical/">Property Map (Vertical)</a></li>
					</ul>
				</li>
				<li id="menu-item-1027" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1027"><a href="http://demo.themetrail.com/realty/property-payments/">Property Payments</a></li>
				<li id="menu-item-242" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-242"><a href="http://demo.themetrail.com/realty/compare/">Compare Properties</a></li>
				<li id="menu-item-245" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-245"><a href="http://demo.themetrail.com/realty/favorites/">Favorite Properties</a></li>
				<li id="menu-item-250" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-250"><a href="http://demo.themetrail.com/realty/property-submit/">Submit Property</a></li>
				<li id="menu-item-247" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-247"><a href="http://demo.themetrail.com/realty/my-properties/">My Properties</a></li>
				</ul>
				</li>
				<li id="menu-item-257" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-257"><a href="#">Features</a>
				<ul class="sub-menu">
					<li id="menu-item-252" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-252"><a href="http://demo.themetrail.com/realty/shortcodes/">Shortcodes</a></li>
					<li id="menu-item-248" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-248"><a href="http://demo.themetrail.com/realty/profile/">Profile</a></li>
					<li id="menu-item-240" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-240"><a href="http://demo.themetrail.com/realty/agents/">Agents</a></li>
					<li id="menu-item-239" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-239"><a href="http://demo.themetrail.com/realty/acf/">Advanced Custom Fields Pro</a></li>
					<li id="menu-item-1083" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1083"><a href="http://demo.themetrail.com/realty/doesnt-exist/">404 Error Page</a></li>
				</ul>
				</li>
				<li id="menu-item-241" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-241"><a href="http://demo.themetrail.com/realty/blog/">Blog</a></li>
				<li id="menu-item-243" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-243"><a href="http://demo.themetrail.com/realty/contact/">Contact</a></li>
			</ul>
		</nav>
  	</div>
</header>
<div id="content">
<script>
jQuery(window).load(function() {
	var windowHeight = jQuery(window).height();
	var headerHeight = jQuery('#header').height();
	var verticalMapHeight = windowHeight - headerHeight;
	jQuery('.google-map').height(verticalMapHeight);
});
</script>
<div class="container search-result-container">
	<div class="row">
		<div class="col-sm-6 search-container">
<form class="property-search-form border-box" action="/submit.php" method="POST">
	<h3>Submit New Report</h3>
	<div class="row">
		<div class="col-xs-12 col-sm-6 form-group select">
		<select name="location" id="neigborhood" class="form-control chosen-select">
			<option value="london">Pick a Neighborhood
				<optgroup>
					<option value="mission-hill" class="level2" >Mission Hill</option>
					<option value="longwood" class="level2" >Longwood</option>
					<option value="back-bay" class="level2" >Back Bay</option>
				</optgroup>
			</option>
		</select>
		</div>
		<div class="col-xs-12 col-sm-6 form-group select">
				<select name="type" id="type" class="form-control chosen-select">
					<option value="all">Report Type</option>
					<option value="unplowed-road">Un-plowed Road</option>
					<option value="unsanded-unsalted-road">Un-sanded/salted Road</option>
					<option value="unplowed-walkway">Un-cleared Walkway</option>
					<option value="frost-heaves">Frost Heaves</option>
					<option value="black-ice-icy-roads">Black Ice / Icy Roads</option>
					<option value="damaged-signage">Damanged Signage</option>
					<option value="damaged-traffic-lights">Damaged Traffic Lights</option>
					<option value="downed-telephone-pole">Downed Telephone Pole</option>
					<option value="damaged-elec">Damaged Electrical Equipment</option>
					<option value="street-light-outage">Street Light Outage</option>
					<option value="flooding-stormwater">Flooding / Stormwater</option>
					<option value="vermin-rodents">Vermin / Rodents</option>
					<option value="fallen-tree-branches">Fallen Tree / Branches</option>
					<option value="grafitt">Grafiti</option>
				</select>
		</div>
		<div class="col-xs-12 col-sm-6 form-group">
			<input type="text" name="description" id="description" value="" placeholder="Issue Description" class="form-control" />
		</div>
		<div class="col-xs-12 col-sm-6 form-group">
			<input type="text" name="description" id="location" value="" placeholder="Issue Location" class="form-control" />
		</div>
		<div class="col-xs-12 col-sm-6 form-group">
			<input type="text" name="reportername" id="reportername" value="" placeholder="Your Name" class="form-control" />
		</div>
		<div class="col-xs-12 col-sm-6 form-group">
			<input type="submit" value="Submit Report" class="btn btn-primary btn-block form-control" />
		</div>
	</div>
	<input type="hidden" name="pageid" value="301" />
</form>
<h2 class="page-title">Active Reports (<span>1</span>)</h2>
<div id="property-search-results" data-view="grid-view">
	<div class="property-items show-compare">
		<ul class="row list-unstyled">
			<!-- ITEM --><li class="col-lg-6">
				<div class="property-item border-box  featured" data-sync-id="0">
					<a href="/report/1">
						<figure class="property-thumbnail">
							<img width="600" height="100" src="/images/report/streetlight.jpg" class=" wp-post-image" alt="" />
							<figcaption>
								<div class="property-excerpt">
									<h4 class="address">Mission Hill (Fisher Avenue)</h4>
									<p>The light on the corner of Fisher Ave. and Parker St. hasn't been on for weeks!</p>
								</div>
							</figcaption>
						</figure>
					</a>
					<div class="property-content content">
						<div class="property-title">
							<a href="/report/1"><h3 class="title">Street Light Outage</h3></a>
						</div>
						<div class="property-meta clearfix">
							<div>
								<div class="meta-data" data-toggle="tooltip" title="Size">Reporter:</div>
							</div>
							<div>
								<div class="meta-data" data-toggle="tooltip" title="Rooms">Ian Brown</div>
							</div>
							<div>
								<div class="meta-data" data-toggle="tooltip" title="Size">Age:</div>
							</div>
							<div>
								<div class="meta-data" data-toggle="tooltip" title="Rooms">2 Days</div>
							</div>
						</div>
						<div class="property-price">
							<div class="price-tag">[ Investigating ]</div>
							<div class="property-icons">
								<span style="position: relative">
									<div class="share-unit" style="display: none;">
										<a class="social-facebook" target="_blank" href="http://www.facebook.com/sharer.php?u=http%3A%2F%2Fdemo.themetrail.com%2Frealty%2Fproperty%2Fwestminster-beauty%2F&amp;t=Westminster+Beauty"><i class="icon-facebook"></i></a>
										<a target="_blank" class="social-twitter" href="http://twitter.com/home?status=Westminster+Beauty+http%3A%2F%2Fdemo.themetrail.com%2Frealty%2Fproperty%2Fwestminster-beauty%2F"><i class="icon-twitter"></i></a>
										<a class="social-google" target="_blank" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" href="https://plus.google.com/share?url=http://demo.themetrail.com/realty/property/westminster-beauty/"><i class="icon-google-plus"></i></a>
										<a class="social-pinterest" target="_blank" href="http://pinterest.com/pin/create/button/?url=http://demo.themetrail.com/realty/property/westminster-beauty/&amp;description=http%3A%2F%2Fdemo.themetrail.com%2Frealty%2Fproperty%2Fwestminster-beauty%2F"><i class="icon-pinterest"></i></a>
									</div>
									<i class="icon-share share-property" data-toggle="tooltip" data-original-title="Share" title="Share"></i>
								</span>
							</div><!-- .property-icons -->
							<div class="clearfix">
							</div>
						</div><!-- .property-price -->
					</div><!-- .property-content -->
				</div><!-- .property-item -->
			</li> <!-- END ITEM-->
		</ul>
						<div id="pagination">
							<ul class='page-numbers'>
	<li><span aria-current='page' class='page-numbers current'>1</span></li>
	<li><a class="next page-numbers" href="#2"><i class="icon-arrow-right"></i></a></li>
</ul>
						</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6 map-container">
			<script>
				var map = null, markers = [], newMarkers = [], markerCluster = null, infobox = [], address = null;
		var customIcon = new google.maps.MarkerImage(
			'http://demo.themetrail.com/realty/wp-content/themes/realty/lib/images/map-marker/map-marker-green-fat.png',
			null, // size is determined at runtime
		  null, // origin is 0,0
		  null, // anchor is bottom center of the scaled image
		  new google.maps.Size(50, 69)
		);
		var markerClusterOptions = {
			gridSize: 60, // Default: 60
			maxZoom: 14,
			styles: [{
				width: 50,
				height: 50,
				url: "http://demo.themetrail.com/realty/wp-content/themes/realty/lib/images/map-marker/map-marker-gold-round.png"
			}]
		};
					var customAltIcon = new google.maps.MarkerImage(
				'http://demo.themetrail.com/realty/wp-content/themes/realty/lib/images/map-marker/map-marker-red-fat.png',
			  null, // size is determined at runtime
			  null, // origin is 0,0
			  null, // anchor is bottom center of the scaled image
			  new google.maps.Size(50, 69)
			);
		jQuery('.property-item').on('mouseenter', function(){
			var data_sync_id = jQuery(this).attr('data-sync-id');
			newMarkers[data_sync_id].setIcon(customAltIcon);
		}).on('mouseleave', function(){
			var data_sync_id = jQuery(this).attr('data-sync-id');
			newMarkers[data_sync_id].setIcon(customIcon);
		});
				/**
				 * initMap
				 *
				 */
				function initMap() {
					var	mapOptions = {
						center: new google.maps.LatLng(42.331535, -71.101567),
						zoom: 10,
				    scrollwheel: false,
				    streetViewControl: false,
				    draggable: true,
				    disableDefaultUI: false,
					};
					map = new google.maps.Map(document.getElementById("map"), mapOptions);
											if ( map_options.map_style !== '' ) {
							var styles = JSON.parse(map_options.map_style);
							map.setOptions( { styles: styles } );
						}
										  address = null;
					  //console.log('No address');
					markers = initMarkers(map, [
						{ permalink:'/reports/1', title:'Street Light Outage', price:'Investigating', latLng: new google.maps.LatLng(42.327132, -71.099689), thumbnail: 'images/report/streetlight.jpg' },
					]);
					// Spiderfier
					var oms = new OverlappingMarkerSpiderfier(map, { markersWontMove: true, markersWontHide: true, keepSpiderfied: true, legWeight: 5 });
					function omsMarkers( markers ) {
					  for ( var i = 0; i < markers.length; i++ ) {
							oms.addMarker( markers[i] );
					  }
					}
					omsMarkers(markers);
				}
				google.maps.event.addDomListener(window, 'load', initMap);
				/**
				 * Get latLng from property address and grab it with callback, as geocode calls asynchonous
				 *
				 */
			  function getLatLng(callback) {
				  var geocoder = new google.maps.Geocoder();
				  if ( geocoder && address ) {
					  geocoder.geocode( { 'address': address}, function(results, status ) {
							if (status == google.maps.GeocoderStatus.OK) {
								latLng = results[0].geometry.location;
								callback(latLng);
							} else {
								console.log("Geocoder failed due to: " + status);
							}
					  });
				  }
			  }
				/**
				 * initMarkers
				 *
				 */
				function initMarkers(map, markerData) {
											getLatLng(function(latLng) {
							map.setCenter(latLng);
						});
					var bounds = new google.maps.LatLngBounds();
					for ( var i = 0; i < markerData.length; i++ ) {
						marker = new google.maps.Marker({
						map: map,
						position: markerData[i].latLng,
						icon: customIcon,
						animation: google.maps.Animation.DROP
						}),
						infoboxOptions = {
							content: 	'<div class="map-marker-wrapper">'+
													'<div class="map-marker-container">'+
														'<div class="arrow-down"></div>'+
														'<img src="'+markerData[i].thumbnail+'" />'+
														'<div class="content">'+
															'<a href="'+markerData[i].permalink+'">'+
																'<h5 class="title">'+markerData[i].title+'</h5>'+
															'</a>'+
															markerData[i].price+
														'</div>'+
													'</div>'+
												'</div>',
							disableAutoPan: false,
						  pixelOffset: new google.maps.Size(-33, -90),
						  zIndex: null,
						  isHidden: true,
						  alignBottom: true,
						  closeBoxURL: "http://demo.themetrail.com/realty/wp-content/themes/realty/lib/images/close.png",
						  infoBoxClearance: new google.maps.Size(25, 25)
						};
						newMarkers.push(marker);
						newMarkers[i].infobox = new InfoBox(infoboxOptions);
						google.maps.event.addListener(marker, 'click', (function(marker, i) {
							return function() {
								if ( newMarkers[i].infobox.getVisible() ) {
									newMarkers[i].infobox.hide();
								} else {
									jQuery('.infoBox').hide();
									newMarkers[i].infobox.show();
								}
								newMarkers[i].infobox.open(map, this);
								map.setCenter(marker.getPosition());
								map.panBy(0,-175);
							}
						})( marker, i ) );
						google.maps.event.addListener(map, 'click', function() {
							jQuery('.infoBox').hide();
					  });
						// Extend map bounds for this marker
					  bounds.extend(markerData[i].latLng);
					} // for (each marker)
					// Create new map bounds to have all marker on the map
					// If not on single-property.php, as only required for multiple markers
										map.fitBounds(bounds);
										markerCluster = new MarkerClusterer(map, newMarkers, markerClusterOptions);
					return newMarkers;
				} // initMarkers()
		  </script>
		  		<script>
			function map_controls() {
				// Zoom In
				google.maps.event.addDomListener(document.getElementById('zoom-in-701828159'), 'click', function () {
					var currentZoom = map.getZoom();
					currentZoom++;
					if ( currentZoom > 19 ) {
						currentZoom = 19;
					}
					map.setZoom(currentZoom);
				});
				// Zoom Out
				google.maps.event.addDomListener(document.getElementById('zoom-out-701828159'), 'click', function () {
					var currentZoom = map.getZoom();
					currentZoom--;
					if ( currentZoom > 19 ) {
						currentZoom = 19;
					}
					map.setZoom(currentZoom);
				});
				// Map Type: Roadmap
				google.maps.event.addDomListener(document.getElementById('map-type-roadmap-701828159'), 'click', function () {
					map.setMapTypeId(google.maps.MapTypeId.ROADMAP);
				});
				// Map Type: Satellite
				google.maps.event.addDomListener(document.getElementById('map-type-satellite-701828159'), 'click', function () {
					map.setMapTypeId(google.maps.MapTypeId.SATELLITE);
				});
				// Map Type: Hybrid
				google.maps.event.addDomListener(document.getElementById('map-type-hybrid-701828159'), 'click', function () {
					map.setMapTypeId(google.maps.MapTypeId.HYBRID);
				});
				// Map Type: Terrain
				google.maps.event.addDomListener(document.getElementById('map-type-terrain-701828159'), 'click', function () {
					map.setMapTypeId(google.maps.MapTypeId.TERRAIN);
				});
				jQuery('.map-type li').click(function() {
					jQuery('.map-type li').removeClass('active');
					jQuery(this).addClass('active');
				});
				// Geolocation - Current Location
				jQuery('#current-location-701828159').click(function() {
					// Current Location Marker
					var markerCurrent = new google.maps.Marker({
					  //clickable: false,
					  icon: new google.maps.MarkerImage('//maps.gstatic.com/mapfiles/mobile/mobileimgs2.png',
						  new google.maps.Size(22,22),
						  new google.maps.Point(0,18),
						  new google.maps.Point(11,11)),
					  shadow: null,
					  zIndex: null,
					  map: map					});
					jQuery(this).toggleClass('active');
					if ( !jQuery('#current-location-701828159').hasClass('draw') ) {
						// Create Loading Element
					  var loading = document.createElement('div');
				    loading.setAttribute( 'class', 'loader-container' );
				    loading.innerHTML = '<div class="svg-loader"></div>';
				    document.getElementById('map').appendChild(loading);
					}
					// Current Position
					if (navigator.geolocation) {
						navigator.geolocation.getCurrentPosition(function(current) {
					    //var me = new google.maps.LatLng(current.coords.latitude, current.coords.longitude);
					    var me = new google.maps.LatLng(42.331535, -71.101567);
					    markerCurrent.setPosition(me);
							map.panTo(me);
							// Remove Loader
				    	loading.remove();
							// https://developers.google.com/maps/documentation/javascript/examples/circle-simple
							var currentRadiusCircleOptions = {
					      strokeColor: '#00CFF0',
					      strokeOpacity: 0.6,
					      strokeWeight: 2,
					      fillColor: '#00CFF0',
					      fillOpacity: 0.2,
					      map: map,
					      center: me,
					      visible: true,
					      radius: 1000 // Unit: meter
					    };
					    // When Initializing
							if ( !jQuery('#current-location-701828159').hasClass('draw') ) {
						    // Create Circle
						    currentRadiusCircle = new google.maps.Circle(currentRadiusCircleOptions);
							}
							jQuery('#current-location-701828159').addClass('draw');
							// Toggle Crrent Location Icon & Circle
							if ( jQuery('#current-location-701828159').hasClass('active') ) {
								markerCurrent.setMap(map);
								currentRadiusCircle.setMap(map);
							}
							else {
								markerCurrent.setMap(null);
								currentRadiusCircle.setMap(null);
							}
						});
					} else {
					  console.log("Current Position Not Found");
					}
					// Toggle Current Location Circle Visibility
					google.maps.event.addListener(markerCurrent, 'click', (function() {
						if ( currentRadiusCircle.getVisible() ) {
					  	currentRadiusCircle.set( 'visible', false );
						} else {
					  	currentRadiusCircle.set( 'visible', true );
						}
					}));
				});
			}
			google.maps.event.addDomListener(window, 'load', map_controls);
		</script>
			<div class="map-wrapper" style="width: 100%; height: 400px">
									<!--<ul class="map-controls list-unstyled">
						<li><a href="#" class="control zoom-in" id="zoom-in-701828159"><i class="icon-add"></i></a></li>
						<li><a href="#" class="control zoom-out" id="zoom-out-701828159"><i class="icon-subtract"></i></a></li>
						<li><a href="#" class="control map-type" id="map-type-701828159">
							<i class="icon-image"></i>
							<ul class="list-unstyled">
								<li id="map-type-roadmap-701828159" class="map-type">Roadmap</li>
								<li id="map-type-satellite-701828159" class="map-type">Satellite</li>
								<li id="map-type-hybrid-701828159" class="map-type">Hybrid</li>
								<li id="map-type-terrain-701828159" class="map-type">Terrain</li>
							</ul>
						</a></li>
						<li><a href="#" id="current-location-701828159" class="control"><i class="icon-crosshair"></i> My Location</a></li>
					</ul>-->
				<div id="map" class="google-map" style="height: 400px">
					<div class="loader-container">
						<div class="svg-loader"></div>
					</div>
				</div>
			</div>
				</div>
	</div><!-- .row -->
</div><!-- .container -->
</div><!-- #content -->
<script type='text/javascript'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"http:\/\/demo.themetrail.com\/realty\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"},"recaptcha":{"messages":{"empty":"Please verify that you are not a robot."}}};
/* ]]> */
</script>
<script type='text/javascript' src='http://demo.themetrail.com/realty/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.0.1'></script>
<script type='text/javascript' src='http://demo.themetrail.com/realty/wp-content/themes/realty/assets/js/theme-main.min.js'></script>
<script type='text/javascript' src='http://demo.themetrail.com/realty/wp-includes/js/wp-embed.min.js?ver=4.9.5'></script>
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
  <div class="modal-dialog login-modal-content">
    <div class="modal-content">
      <div class="modal-header">
      	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="screen-reader-text">Close</span></button>
      </div>
      <div class="modal-body">
		<ul class="nav nav-tabs" role="tablist" style="margin-bottom: 1em;">
			<li class="active"><a href="#tab-login" role="tab" data-toggle="tab">Login</a></li>
			  	</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="tab-login">
					        <p id="msg-login-to-add-favorites" class="alert alert-info hide"><small>You have to be logged in to use this feature.</small></p>
				<p class="alert alert-info">Username & password: "demo"</p>
		<form name="loginform" id="loginform" action="http://demo.themetrail.com/realty/wp-login.php" method="post">
			<p class="login-username">
				<label for="user_login"></label>
				<input type="text" name="log" id="user_login" class="input" value="" size="20" />
			</p>
			<p class="login-password">
				<label for="user_pass"></label>
				<input type="password" name="pwd" id="user_pass" class="input" value="" size="20" />
			</p>
			<p class="login-remember"><label><input name="rememberme" type="checkbox" id="rememberme" value="forever" /> Remember Me</label></p>
			<p class="login-submit">
				<input type="submit" name="wp-submit" id="wp-submit-login" class="button button-primary" value="Log In" />
				<input type="hidden" name="redirect_to" value="http://demo.themetrail.com/realty/property-map-vertical/" />
			</p>
			<a href="http://demo.themetrail.com/realty/wp-login.php?action=lostpassword&redirect_to=http%3A%2F%2Fdemo.themetrail.com%2Frealty%2Fproperty-map-vertical%2F">Lost Password?</a>
		</form>
				<script>
				(function($) {
				  "use strict";
					$(document).ready(function() {
						$('#user_login').attr( 'placeholder', 'Username or email' );
						$('#user_pass').attr( 'placeholder', 'Password' );
					});
				})(jQuery);
				</script>
			</div>
		</div>
		      </div>
    </div>
  </div>
</div>	<script>
		jQuery(document).ready(function($) {
			// Social Sharing and video pop up
			video_and_social_share();
			jQuery('.search-results-view i').on('click',function() {
			  jQuery('.search-results-view i').removeClass('active');
			  jQuery(this).toggleClass('active');
			  jQuery('.property-items').fadeTo( 300 , 0, function() {
			  jQuery(this).fadeTo( 300, 1 );
			});
			setTimeout(function() {
				jQuery('.property-items').attr( 'data-view', jQuery('.search-results-view i.active').attr('data-view') );
			}, 300);
			});
		}); // END document.ready
		//jQuery(window).load(function() {
			var heightWindow = jQuery(window).height();
			var windowWidth = jQuery(window).width();
			var heightHeader = jQuery('#header').height();
			var heightFullscreen = heightWindow - heightHeader;
										if ( jQuery('.property-image-container').hasClass('cut') ) {
					jQuery('.property-image-container .property-image, .property-image-container iframe').css( 'height', 600 );
				}
										jQuery('body.single-property .property-image').magnificPopup({
					type: 		'image',
					gallery: 	{
						enabled: 	true,
						tPrev: 		'',
						tNext: 		'',
						tCounter: '%curr% | %total%'
					}
				});
				jQuery('.datepicker').datepicker({
				language: 'en',
				autoclose: true,
				isRTL: 'false',
				format: 'mm/dd/yyyy',
				});
			// AJAX
			function tt_ajax_search_results() {
				"use strict";
				if ( jQuery('.property-search-feature') ) {
					var feature = [];
					jQuery('.property-search-feature:checked').each(function() {
					  feature.push( jQuery(this).val() );
					});
				}
				var ajaxData = jQuery('.property-search-form').first().serialize() + "&action=tt_ajax_search&base=" + window.location.pathname;
				jQuery.ajax({
				  type: 'GET',
				  url: ajax_object.ajax_url,
				  data: ajaxData,
				  success: function (response) {
					  jQuery('.loader-container').fadeOut();
				    jQuery('.property-items').html(response);
						video_and_social_share();
				  },
				  error: function () {
				  	console.log( 'failed' );
				  }
				});
			}
			// Remove Map Markers & Marker Cluster
			function removeMarkers() {
				// http://google-maps-utility-library-v3.googlecode.com/svn/trunk/markerclusterer/examples/speed_test.js
			  if(typeof newMarkers != 'undefined'){
			    for( i = 0; i < newMarkers.length; i++ ) {
				  newMarkers[i].setMap(null);
					// Close Infoboxes
				  //if ( newMarkers[i].infobox.getVisible() ) {
					newMarkers[i].infobox.hide();
				  //}
			    }
			    if ( markerCluster ) {
				  markerCluster.clearMarkers();
			    }
			    markers = [];
			    newMarkers = [];
			    bounds = [];
			  }
			}
			// Fire Search Results Ajax On Search Field Change (Exclude Datepicker)
			jQuery('.property-search-form select, .property-search-form input').not('.datepicker').on('change',function() {
				loader();
				if ( jQuery('.google-map').length > 0 ) {
					removeMarkers();
				}
				tt_ajax_search_results();
			});
			// Fire Search Results Ajax On Search Field "Datepicker" Change
			jQuery('.property-search-form input.datepicker').on('changeDate', function() {
				loader();
				if ( jQuery('.google-map').length > 0 ) {
					removeMarkers();
				}
				tt_ajax_search_results();
			});
			function loader() {
				jQuery('.property-items').addClass('loading');
				jQuery('.property-items').html('<div class="loader-container"><div class="svg-loader"></div></div>');
			}
			// AJAX script for pagination
			jQuery(function($) {
				$('.pagination-ajax a').live('click',function(e){
					e.preventDefault();
					var link_page = $(this).attr('href');
					var page_number =  $(this).text();
					if($(this).hasClass( "next" )){
						var next_from = parseInt($('.pagination-ajax li span').text());
						page_number = next_from + 1;
					}
					if($(this).hasClass( "prev" )){
						var prev_from = parseInt($('.pagination-ajax li span').text());
						page_number = prev_from - 1;
					}
					$('.property-items').fadeOut(500);
					removeMarkers();
					var ajaxData = jQuery('.property-search-form').first().serialize() + "&action=tt_ajax_search&base=" + window.location.pathname + "&pagenumber=" + page_number;
					//console.log(ajaxData);
					$.ajax({
						type: 'GET',
						url: ajax_object.ajax_url,
						data: ajaxData,
						success: function (response) {
							$(".property-items").html(response);
							$(".property-items").fadeIn(500);
							window.history.pushState(".property-items", "Properties",link_page );
						},
						error: function () {
						console.log( 'failed' );
						}
					});
				});
			});
			// END AJAX script for pagination
		//}); // END window.load
					jQuery('.menu-item-has-children, .menu-item-language').click(function() {
			  if ( jQuery('body').hasClass('show-nav') ) {
			    jQuery(this).find('.sub-menu').toggleClass('open');
			  }
			});
		jQuery("#submit-profile-update").attr("disabled", "disabled");
	</script>
		<script>
		jQuery('.container').on("click",'.add-to-favorites',function() {
							jQuery('#msg-login-to-add-favorites').removeClass('hide');
				jQuery('a[href="#tab-login"]').tab('show');
				jQuery('#login-modal').modal();
				jQuery('#login-modal').on('hidden.bs.modal', function () {
					jQuery('#msg-login-to-add-favorites').addClass('hide');
				});
		});
		</script>
		<script>
		jQuery('.container').on("click",'.add-to-follow',function() {
								jQuery('a[href="#tab-login"]').tab('show');
					jQuery('#login-modal').modal();
					jQuery('#msg-login-to-add-follow').removeClass('hide');
					jQuery('#msg-login-to-add-follow').addClass('hide');
			});
		</script>
			<script>
		// Check If item Already In Favorites Array
		function inArray(needle, haystack) {
	    var length = haystack.length;
	    for( var i = 0; i < length; i++ ) {
	      if(haystack[i] == needle) return true;
	    }
	    return false;
		}
		if ( !store.enabled ) {
			throw new Error("Local storage is not supported by your browser. Please disable \&quot;Private Mode\&quot;, or upgrade to a modern browser.");
	  }
		jQuery('.container').on('click', '.compare-property', function() {
			jQuery('#compare-properties-popup').show();
		  // Check If Browser Supports LocalStorage
			if ( !store.enabled ) {
		    throw new Error("Local storage is not supported by your browser. Please disable \"Private Mode\", or upgrade to a modern browser.");
		  }
		  if ( store.get('comparison') ) {
				var getComparisonAll = store.get('comparison');
				var propertyToCompare = jQuery(this).attr('data-compare-id');
				// Add To Comparison, If Its Not Already In It
				if ( !inArray( propertyToCompare, getComparisonAll ) && getComparisonAll.length < 4 ) {
					getComparisonAll.push( propertyToCompare );
				}
				store.set( 'comparison', getComparisonAll );
				comparisonLength = getComparisonAll.length;
			} else {
				var arrayComparison = [];
				arrayComparison.push( jQuery(this).attr('data-compare-id') );
				store.set( 'comparison', arrayComparison );
				var comparisonLength = store.get('comparison').length;
			}
			console.log( store.get('comparison') );
			// Update Comparison Popup Thumbnails
			var properties;
			properties = store.get('comparison');
			jQuery.ajax({
			  type: 'GET',
			  url: ajax_object.ajax_url,
			  data: {
			    'action'          :   'tt_ajax_property_comparison_thumbnails', // WP Function
			    'properties'      :   properties
			  },
			  success: function(response) {
			  	// If Temporary Favorites Found, Show Them
			  	if ( store.get('comparison') != "" ) {
			  		jQuery('#compare-properties-thumbnails').html(response);
			  		// Show Max. Message
			  		if ( comparisonLength == 4 ) {
							jQuery('#compare-properties-popup .alert').toggleClass('hide');
						}
			  	}
			  }
			});
		});
		</script>
</body>
</html>