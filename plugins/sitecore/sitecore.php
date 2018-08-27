<?php
/**
 * @package Sitecore
 * @version 0.1 (Alpha)
 */
/*
Plugin Name: Sitecore
Description: A simple CORE plugin, that meets SPECIFIC requirements for the Madico website - it must be installed and activated for the site to function properly.
Version: 0.1 (Alpha)
Author: Marketing In Color
License: GPLv2 or later

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright 2018  Marketing In Color  (email : developer@marketingincolor.com)
*/

if(!class_exists('Sitecore_Plugin'))
{
	class Sitecore_Plugin
	{
		/**
		 * Construct the plugin object
		 */
		public function __construct()
		{
			// Initialize Settings
			require_once(sprintf("%s/settings.php", dirname(__FILE__)));
			$Sitecore_Plugin_Settings = new Sitecore_Plugin_Settings();

			// Register custom post types
			//require_once(sprintf("%s/post-types/post_type_template.php", dirname(__FILE__)));
			//$Post_Type_Template = new Post_Type_Template();

			$plugin = plugin_basename(__FILE__);
			add_filter("plugin_action_links_$plugin", array( $this, 'plugin_settings_link' ));
		} // END public function __construct

		/**
		 * Activate the plugin
		 */
		public static function activate()
		{
			// Do nothing
		} // END public static function activate

		/**
		 * Deactivate the plugin
		 */
		public static function deactivate()
		{
			// Do nothing
		} // END public static function deactivate

		// Add the settings link to the plugins page
		function plugin_settings_link($links)
		{
			$settings_link = '<a href="options-general.php?page=sitecore">Settings</a>';
			array_unshift($links, $settings_link);
			return $links;
		}


	} // END class Sitecore_Plugin
} // END if(!class_exists('Sitecore_Plugin'))

if(class_exists('Sitecore_Plugin'))
{
	// Installation and uninstallation hooks
	register_activation_hook(__FILE__, array('Sitecore_Plugin', 'activate'));
	register_deactivation_hook(__FILE__, array('Sitecore_Plugin', 'deactivate'));

	// instantiate the plugin class
	$sitecore_plugin = new Sitecore_Plugin();

}

/**
 * Add Shortcodes
 */
function sitecore_shortcodes_init()
{
    function sitecore_alpha_shortcode($atts = [], $content = null)
    {
        // do something to $content
        $content = 'This is the ALPHA shortcode';
        // always return
        return $content;
    }
    add_shortcode('sc-alpha', 'sitecore_alpha_shortcode');

    function sitecore_trade_shortcode($atts = [], $content = null)
    {
        $sc_trade = '<sup>&trade;</sup>';
        return $sc_trade;
    }
    add_shortcode('trade', 'sitecore_trade_shortcode');

    function sitecore_reg_shortcode($atts = [], $content = null)
    {
        $sc_reg = '<sup>&reg;</sup>';
        return $sc_reg;
    }
    add_shortcode('reg', 'sitecore_reg_shortcode');

    function sitecore_copy_shortcode($atts = [], $content = null)
    {
        $sc_copy = '<sup>&copy;</sup>';
        return $sc_copy;
    }
    add_shortcode('copy', 'sitecore_copy_shortcode');

}
add_filter( 'the_title', 'do_shortcode' );
add_filter( 'single_post_title', 'do_shortcode' );
add_action('init', 'sitecore_shortcodes_init');