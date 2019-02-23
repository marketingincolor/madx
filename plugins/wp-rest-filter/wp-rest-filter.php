<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://sk8.tech
 * @since             1.0.0
 * @package           Wp_Rest_Filter
 *
 * @wordpress-plugin
 * Plugin Name:       WP REST Filter
 * Plugin URI:        https://sk8.tech
<<<<<<< HEAD
 * Description:       This plugin adds the 'Filter' feature to the default WordPress REST APis. It supports CPT, ACF, Taxoomy, and Multiple Meta queries.
 * Version:           1.3.0
=======
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.2.5
>>>>>>> origin/temporary
 * Author:            SK8Tech
 * Author URI:        https://sk8.tech
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-rest-filter
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
<<<<<<< HEAD
define('WP_REST_FILTER_VERSION', '1.3.0');
=======
define('WP_REST_FILTER_VERSION', '1.2.5');
>>>>>>> origin/temporary

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-rest-filter-activator.php
 */
function activate_wp_rest_filter() {
	require_once plugin_dir_path(__FILE__) . 'includes/class-wp-rest-filter-activator.php';
	Wp_Rest_Filter_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-rest-filter-deactivator.php
 */
function deactivate_wp_rest_filter() {
	require_once plugin_dir_path(__FILE__) . 'includes/class-wp-rest-filter-deactivator.php';
	Wp_Rest_Filter_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_wp_rest_filter');
register_deactivation_hook(__FILE__, 'deactivate_wp_rest_filter');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-wp-rest-filter.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_rest_filter() {

	$plugin = new Wp_Rest_Filter();
	$plugin->run();

}
run_wp_rest_filter();
