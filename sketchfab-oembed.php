<?php
/*
Plugin Name: Sketchfab oEmbed
Description: Adds oEmbed support for Sketchfab.com
Version: 1.1
Author: Rami Yushuvaev
Author URI: http://GenerateWP.com/
Text Domain: sketchfab-oembed
Domain Path: /languages
License: GPL2+
*/

function sketchfab_oembed_provider() {

	wp_oembed_add_provider( '#https?://(www.)?sketchfab.com/models/.*#i', 'https://sketchfab.com/oembed/', true );
	wp_oembed_add_provider( 'https://skfb.ly/ArGr', 'https://sketchfab.com/oembed/', false );

}

add_action( 'init', 'sketchfab_oembed_provider' );
