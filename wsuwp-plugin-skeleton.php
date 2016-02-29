<?php
/*
Plugin Name: WSUWP Plugin Skeleton
Version: 0.0.1
Description: A skeleton project to use when starting a new WSU WordPress plugin. Replace this description.
Author: washingtonstateuniversity, [Other Plugin Authors]
Author URI: https://web.wsu.edu/
Plugin URI: https://github.com/washingtonstateuniversity/WSUWP-Plugin-Skeleton
Text Domain: [Plugin Text Domain]
Domain Path: /languages
*/



add_action( 'after_setup_theme', 'WSUWP_Plugin_Skeleton' );
/**
 * Start things up.
 *
 * @return \WSUWP_Plugin_Skeleton
 */
function WSUWP_Plugin_Skeleton() {
	return WSUWP_Plugin_Skeleton::get_instance();
}
