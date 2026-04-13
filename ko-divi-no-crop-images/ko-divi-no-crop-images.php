<?php
/**
 * Plugin Name: KO – Divi No Crop Images
 * Description: Prevent Divi's Blog Module from cropping featured images by forcing an effectively-unlimited image width/height.
 * Version: 1.0.0
 * Author: KO
 * License: GPLv2 or later
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

/**
 * Divi Blog Module: disable featured image cropping
 *
 * Divi uses these filters to determine the target image dimensions for the Blog Module.
 * Returning a very large number prevents Divi from generating a cropped size.
 */
function ko_divi_blog_image_width( $width ) {
	return '9999';
}

function ko_divi_blog_image_height( $height ) {
	return '9999';
}

add_filter( 'et_pb_blog_image_width', 'ko_divi_blog_image_width' );
add_filter( 'et_pb_blog_image_height', 'ko_divi_blog_image_height' );
