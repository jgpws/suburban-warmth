<?php function childtheme_iefix() { ?>
<!--[if lt IE 8]>
<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('stylesheet_directory') ?>/ie.css" />
<![endif]-->
<?php }
add_action('wp_head', 'childtheme_iefix');
?>
<?php 
function show250left() { 
return '<div id="ad250-floatleft"><img src="' . get_bloginfo('stylesheet_directory') . '/images/ad_placeholder250.png" alt="Adsense 250 placeholder" /></div>';
}
add_shortcode('ad250-floatleft', 'show250left');

function show250right() {
return '<div id="ad250-floatright"><img src="' . get_bloginfo('stylesheet_directory') . '/images/ad_placeholder250.png" alt="Adsense 250 placeholder" /></div>';
}
add_shortcode('ad250-floatright', 'show250right');

function show468() {
return '<div id="ad468-center"><img src="' . get_bloginfo('stylesheet_directory') . '/images/ad_placeholder468.png" alt="Adsense 468 placeholder" /></div>';
}
add_shortcode('ad468-center', 'show468');

function show125button() {
return '<div id="ad125button"><img src="' . get_bloginfo('stylesheet_directory') . '/images/ad_placeholder125.png" alt="adsense 125 pixel button placeholder" /></div>';
}
add_shortcode('ad125button', 'show125button');

//To use the following in the sidebar, everything between the two
//div tags must be placed in a text widget. This can be found in the
//Admin panel under Appearance > Widgets > Text.
//Copy <div id="ad120tower...</div> into the text box and Save
//Also, you must upload the placeholder120.png image
//to your WordPress Media folder. Instructions are found in readme.txt.
//Use the function version for blog posts and pages.
function show120tower() {
return '<div id="ad120tower"><img src="http://apache.localhost/wordpress/wp-content/uploads/2010/01/ad_placeholder120.png"></div>';
}
add_shortcode('ad120tower', 'show120tower');
?>
<?php 
//For Custom Header functionality in Admin panel
define('HEADER_IMAGE', trailingslashit( get_stylesheet_directory_uri() ).'images/suburbanwarmth_header_bg.jpg');
define('HEADER_IMAGE_WIDTH', 960);
define('HEADER_IMAGE_HEIGHT', 140);
define('HEADER_TEXTCOLOR', '990000');

function header_style() {
?>
<style type="text/css">
div#header {
background: url(<?php header_image(); ?>) no-repeat;
height: <?php echo HEADER_IMAGE_HEIGHT; ?>px;
width: <?php echo HEADER_IMAGE_WIDTH; ?>px;
text-align: left;
}
#blog-title a:visited, #blog-title a:link {
color: #<?php header_textcolor(); ?>;
}

#blog-description {
color: #<?php header_textcolor(); ?>;
}
</style>
<?php 
}
function admin_header_style() {
?>
<style type="text/css">
#headimg {
background: url(<?php header_image(); ?>) #E8DAB1 no-repeat;
height: <?php echo HEADER_IMAGE_HEIGHT; ?>px;
width: <?php echo HEADER_IMAGE_WIDTH; ?>px;
text-align: left;
font-family: "Palatino Linotype", Palatino, "Times New Roman", Times, Rekha/*Linux*/, serif;
}

#headimg h1 {
margin: 0 0 0 0.5em;
}

#headimg h1 a:visited, #headimg h1 a:link {
color: #990000;
text-decoration: none;
}

#headimg h1 a:hover, #headimg h1 a:active {
color: #765427;
text-decoration: none;
}

#heading h1 div {
font-size: 0.8em;
font-style: italic;
font-weight: bold;
color: #990000;
margin: -0.2em 0 0.2em 1em;
}
</style>
<?php
}
if ( function_exists('add_custom_image_header') ) {
add_custom_image_header('header_style', 'admin_header_style');
}
?>