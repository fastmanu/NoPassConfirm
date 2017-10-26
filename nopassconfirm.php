<?php

/**
 * The NoPassConfirm plugin
 *
 * This plugin allows you to remove the password confirmation field on your buddypress registration page, 
 * in order to make it a little bit shorter.
 *
 * @link              https://topi.io
 * @since             1.0.0
 * @package           NoPassConfirm
 *
 * @wordpress-plugin
 * Plugin Name:       NoPassConfirm 
 * Plugin URI:        https://topi.io/nopassconfirm/
 * Description:       This plugin allows you to remove the password confirmation field on your buddypress registration page, in order to make it a little bit shorter.
 * Version:           1.0.1
 * Author:            topi
 * Author URI:        https://topi.io/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       nopassconfirm
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'NOPASSCONFIRM_VERSION', '1.0.1' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-nopassconfirm-activator.php
 */
function activate_plugin_name() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-nopassconfirm-activator.php';
	NoPassConfirm_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-nopassconfirm-deactivator.php
 */
function deactivate_plugin_name() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-nopassconfirm-deactivator.php';
	NoPassConfirm_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_plugin_name' );
register_deactivation_hook( __FILE__, 'deactivate_plugin_name' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-nopassconfirm.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_nopassconfirm() {

	$plugin = new NoPassConfirm();
	$plugin->run();

}
run_nopassconfirm();
