<?php

/**
 * Custom Images Names
 * Adds custom images sizes ready to use on administrator
 *
 * @return array
 * @since  1.0
 */
function dl_image_sizes( $sizes ) {

	$add_sizes = array(
		'principal'		=> __( 'Tamaño de la imagen principal' ),
		'cuadrado'		=> __( 'Tamaño de la imagen principal' )
	);

	return array_merge( $sizes, $add_sizes );

}


/**
 * Custom Images Sizes
 * Adds custom images sizes on posts
 *
 * @return void
 * @since  1.0
 * @see    https://developer.wordpress.org/reference/functions/add_image_size/
 * @see    https://codex.wordpress.org/Plugin_API/Filter_Reference/image_size_names_choose
 */
if ( function_exists( 'add_theme_support' ) ) {

	add_image_size( 'principal', 800, 400, true );
	add_image_size( 'cuadrado', 400, 400, true );

	add_filter( 'image_size_names_choose', 'dl_image_sizes' );

}
