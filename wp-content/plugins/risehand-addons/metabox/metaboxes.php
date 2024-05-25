<?php
if ( ! function_exists( "risehand_add_metaboxes" ) ) {
	function risehand_add_metaboxes( $metaboxes ) {
		$directories_array = array(
			'page.php',
			'post.php',
			'service.php',
			'portfolio.php',
			'volunteer.php',
			'events.php',
		);
		foreach ( $directories_array as $dir ) {
			$metaboxes[] = require_once( RISEHAND_ADDONS_DIR . '/metabox/' . $dir );
		} 
		return $metaboxes;
	} 
	add_action("redux/metaboxes/risehand_theme_mod/boxes", "risehand_add_metaboxes" );
} 

