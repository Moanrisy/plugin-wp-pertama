<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://terlampau.top
 * @since      1.0.0
 *
 * @package    Plugin_Wp_Pertama
 * @subpackage Plugin_Wp_Pertama/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Plugin_Wp_Pertama
 * @subpackage Plugin_Wp_Pertama/includes
 * @author     moanrisy <moanrisy@gmail.com>
 */
class Plugin_Wp_Pertama_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'plugin-wp-pertama',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
