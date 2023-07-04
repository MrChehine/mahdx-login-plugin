<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.facebook.com/chehine.ammari/
 * @since             1.0.0
 * @package           Mahdx_Login_Plugin
 *
 * @wordpress-plugin
 * Plugin Name:       Mahdx Login Plugin
 * Plugin URI:        https://www.facebook.com/chehine.ammari/
 * Description:       Mahdx Login Plugin gives you the ability to integrate registration/login system in your wordpress site. It comes with a well designed register/login pages with the ability to customize them using wordpress customizer.
 * Version:           1.0.0
 * Author:            Chehine Ammari
 * Author URI:        https://www.facebook.com/chehine.ammari/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       mahdx-login-plugin
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'MAHDX_LOGIN_PLUGIN_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-mahdx-login-plugin-activator.php
 */
function activate_mahdx_login_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-mahdx-login-plugin-activator.php';
	Mahdx_Login_Plugin_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-mahdx-login-plugin-deactivator.php
 */
function deactivate_mahdx_login_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-mahdx-login-plugin-deactivator.php';
	Mahdx_Login_Plugin_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_mahdx_login_plugin' );
register_deactivation_hook( __FILE__, 'deactivate_mahdx_login_plugin' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-mahdx-login-plugin.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_mahdx_login_plugin() {

	$plugin = new Mahdx_Login_Plugin();
	$plugin->run();

}
run_mahdx_login_plugin();
