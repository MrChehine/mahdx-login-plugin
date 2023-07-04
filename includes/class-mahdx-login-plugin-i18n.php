<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.facebook.com/chehine.ammari/
 * @since      1.0.0
 *
 * @package    Mahdx_Login_Plugin
 * @subpackage Mahdx_Login_Plugin/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Mahdx_Login_Plugin
 * @subpackage Mahdx_Login_Plugin/includes
 * @author     Chehine Ammari <chehine.ammari@gmail.com>
 */
class Mahdx_Login_Plugin_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'mahdx-login-plugin',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
