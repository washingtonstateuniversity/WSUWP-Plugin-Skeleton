<?php
/*
Plugin Name: [Plugin Name]
Version: 0.0.1
Description: [Plugin Description]
Author: washingtonstateuniversity, [Other Plugin Authors]
Author URI: https://web.wsu.edu/
Plugin URI: [Plugin URL]
Text Domain: [Plugin Text Domain]
Domain Path: /languages
*/

class WSU_Plugin_Name {
	/**
	 * @var WSU_Plugin_Name
	 */
	private static $instance;

	/**
	 * Maintain and return the one instance. Initiate hooks when
	 * called the first time.
	 *
	 * @since 0.0.1
	 *
	 * @return \WSU_Plugin_Name
	 */
	public static function get_instance() {
		if ( ! isset( self::$instance ) ) {
			self::$instance = new WSU_Plugin_Name();
			self::$instance->setup_hooks();
		}
		return self::$instance;
	}

	/**
	 * Setup hooks to include.
	 *
	 * @since 0.0.1
	 */
	public function setup_hooks() {}

}

add_action( 'after_setup_theme', 'WSU_Plugin_Name' );
/**
 * Start things up.
 *
 * @return \WSU_Plugin_Name
 */
function WSU_Plugin_Name() {
	return WSU_Plugin_Name::get_instance();
}