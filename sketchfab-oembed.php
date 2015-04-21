<?php
/*
Plugin Name: Sketchfab oEmbed
Plugin URI:  https://wordpress.org/plugins/sketchfab-oembed/
Description: Embed 3D models from sketchfab.com into your WordPress site
Version:     1.3
Author:      Rami Yushuvaev
Author URI:  http://GenerateWP.com/
Text Domain: sketchfab-oembed
Domain Path: /languages
*/



/*
 * Prevent direct access to the file
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}



/*
 * Sketchfab oEmbed
 */
function sketchfab_oembed_provider() {

	wp_oembed_add_provider( '#https?://(www.)?sketchfab.com/models/.*#i', 'https://sketchfab.com/oembed/', true );
	//wp_oembed_add_provider( '#https?://(www.)?skfb.ly/.*#i', 'https://sketchfab.com/oembed/', true );

}
add_action( 'init', 'sketchfab_oembed_provider' );
