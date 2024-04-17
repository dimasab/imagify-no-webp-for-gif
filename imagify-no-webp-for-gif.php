<?php
/**
 * Plugin Name: Imagify - No WEBP for GIF
 * Description: Excludes GIF files from being converted into WEBP
 * Author:      Dimas Adika Bimawan
 */

namespace Imagify\my_custom_plugin;

// Standard plugin security, keep this line in place.
defined( 'ABSPATH' ) || die();

/**
 * Stop gifs from being converted into webp
 */

function no_webp_for_gif( $response, $process, $file, $thumb_size, $optimization_level, $webp, $is_disabled ) {
	if ( ! $webp || $is_disabled || is_wp_error( $response ) ) {
		return $response;
	}

	if ( 'image/gif' !== $file->get_mime_type() ) {
		return $response;
	}

	return new \WP_Error( 'no_webp_for_gif', __( 'Webp version of gif is disabled by filter.' ) );
}

add_filter( 'imagify_before_optimize_size', __NAMESPACE__ . '\no_webp_for_gif' , 9, 7 );
