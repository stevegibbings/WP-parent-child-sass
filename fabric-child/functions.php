<?php

/**
 * Enqueue scripts and styles.
 */
function fabric_child_scripts() {
/**
	* The build task in Gulp renames production assets with a hash
	* Read the asset names from assets-manifest.json
	*/
	$assets = array(
		'css'             => '/dist/css/style.css'
	);

	wp_enqueue_style( 'fabric-child-style', get_stylesheet_directory_uri() . $assets['css'], false, null );
	wp_dequeue_style( 'fabric-style' );

}
add_action( 'wp_enqueue_scripts', 'fabric_child_scripts', 20);