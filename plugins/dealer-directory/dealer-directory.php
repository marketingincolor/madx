<?php
/*
Plugin Name: Madico Dealer Directory
Description: A CUSTOM Wordpress plugin for Madico's Dealer Directory
Version: 0.1
Author: Marketing In Color
Author URI: http://www.marketingincolor.com
License: GPL2

Copyright 2018 Marketing In Color  (email : developer@marketingincolor.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

if(!class_exists('Dealer_Directory'))
{
	class Dealer_Directory
	{
		/**
		 * Construct the plugin object
		 */
		public function __construct()
		{
			// Initialize Settings
			require_once(sprintf("%s/settings.php", dirname(__FILE__)));
			$Dealer_Directory_Settings = new Dealer_Directory_Settings();

			// Register custom post types
			require_once(sprintf("%s/post-types/dealer.php", dirname(__FILE__)));
			$Post_Type_Template = new Post_Type_Template();

			$plugin = plugin_basename(__FILE__);
			add_filter("plugin_action_links_$plugin", array( $this, 'plugin_settings_link' ));
		} // END public function __construct

		/**
		 * Activate the plugin
		 */
		public static function activate()
		{
            $roles_object = new WP_Roles();
            $roles_object->add_cap('administrator', 'edit_dealers');
            $roles_object->add_cap('administrator', 'create_dealers');
            $roles_object->add_cap('administrator', 'manage_dealers');
            $roles_object->add_cap('administrator', 'delete_dealers');
            $roles_object->add_cap('administrator', 'read_dealers');

		} // END public static function activate

		/**
		 * Deactivate the plugin
		 */
		public static function deactivate()
		{
            $roles_object = new WP_Roles();
            $roles_object->remove_cap('administrator', 'edit_dealers');
            $roles_object->remove_cap('administrator', 'create_dealers');
            $roles_object->remove_cap('administrator', 'manage_dealers');
            $roles_object->remove_cap('administrator', 'delete_dealers');
            $roles_object->remove_cap('administrator', 'read_dealers');
            
		} // END public static function deactivate

		// Add the settings link to the plugins page
		function plugin_settings_link($links)
		{
			$settings_link = '<a href="options-general.php?page=dealer-directory">Settings</a>';
			array_unshift($links, $settings_link);
			return $links;
		}

	} // END class Dealer_Directory
} // END if(!class_exists('Dealer_Directory'))

if(class_exists('Dealer_Directory'))
{
	// Install and uninstall hooks
	register_activation_hook(__FILE__, array('Dealer_Directory', 'activate'));
	register_deactivation_hook(__FILE__, array('Dealer_Directory', 'deactivate'));

	// instantiate the plugin class
	$dealer_directory = new Dealer_Directory();

}

/**
 * Remove Custom Meta box from Admin
 */
function remove_post_custom_fields() {
    remove_meta_box( 'postcustom' , 'dealer' , 'normal' ); 
}
//add_action( 'admin_menu' , 'remove_post_custom_fields' );

/**
 * Add Shortcodes
 */
function dealer_shortcodes_init()
{
    function dealer_alpha_shortcode($atts = [], $content = null)
    {
    	global $post;
    	$content = get_post_meta($post->ID, 'company_name', true);
        // always return
        return $content;
    }
    add_shortcode('dealer-alpha', 'dealer_alpha_shortcode');

    function dealer_beta_shortcode($atts = [], $content = null)
    {
    	$page_id = get_queried_object_id();
    	$args = array( 
			'template' => __( '%s: %l.' ), 
			'term_template' => '<a href="%1$s">%2$s</a>',
		);
    	//$content = get_the_taxonomies( $page_id, $args );

		$content = get_the_term_list( $page_id, 'types', '<ul class="types"><li>', ',</li><li>', '</li></ul>' );

    	//$term_list = wp_get_post_terms($post->ID, 'types', array("fields" => "all"));
        //return $content;
        
    	$datapath = plugin_dir_path( __FILE__ ) .'templates/dealer_data.php';
        include($datapath);
        // always return
        //return $dealer_social;
        return $term_list;
    }
    add_shortcode('dealer-beta', 'dealer_beta_shortcode');

    // Dealer Type Shortcode
    function dealer_type_shortcode($atts = [], $content = null)
    {
    	global $post;
    	$term_obj = get_the_terms( $post->ID, 'types' );
		$term_type = join(', ', wp_list_pluck($term_obj, 'name'));
    	return $term_type;
    }
    add_shortcode('dealer-type', 'dealer_type_shortcode');

    // Dealer Designation Shortcode
    function dealer_des_shortcode($atts = [], $content = null)
    {
    	global $post;
    	$term_obj = get_the_terms( $post->ID, 'designation' );
		$term_type = join(', ', wp_list_pluck($term_obj, 'name'));
    	return $term_type;
    }
    add_shortcode('dealer-des', 'dealer_des_shortcode');


}
add_action('init', 'dealer_shortcodes_init');