<?php
/*
Plugin Name: CF7 Form Auto Class
Description: Add form slug as a CSS class to the Contact Form 7 output.
 * Version: 1.0
 * Author: Robert Went
 * Author URI: https://robertwent.com
 * License: GPL3
*/

add_filter( 'shortcode_atts_wpcf7', 'cf7_form_slug_class', 10, 3 );

function cf7_form_slug_class( $out, $pairs, $atts ) {
	if ( isset( $atts['html_class'] ) ) {
		// If the 'html_class' attribute is already present, don't do anything.
		return $out;
	}

	// Get the form object using the ID.
	$form_id   = isset( $atts['id'] ) ? (int) $atts['id'] : 0;
	$form_slug = get_post_field( 'post_title', $form_id );

	if ( ! $form_slug ) {
		// If the form slug is not found, don't do anything.
		return $out;
	}

	// Add the form slug as a class.
	$out['html_class'] .= ' ' . sanitize_title_with_dashes( $form_slug );

	return $out;
}
