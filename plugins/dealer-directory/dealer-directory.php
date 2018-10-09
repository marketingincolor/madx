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

			require_once(sprintf("%s/post-types/distributor.php", dirname(__FILE__)));
			$Dist_Post_Type_Template = new Dist_Post_Type_Template();
			
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

            $roles_object->add_cap('administrator', 'edit_distributors');
            $roles_object->add_cap('administrator', 'create_distributors');
            $roles_object->add_cap('administrator', 'manage_distributors');
            $roles_object->add_cap('administrator', 'delete_distributors');
            $roles_object->add_cap('administrator', 'read_distributors');

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
            
            $roles_object->remove_cap('administrator', 'edit_distributors');
            $roles_object->remove_cap('administrator', 'create_distributors');
            $roles_object->remove_cap('administrator', 'manage_distributors');
            $roles_object->remove_cap('administrator', 'delete_distributors');
            $roles_object->remove_cap('administrator', 'read_distributors');

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
    // Dealer Alpha Shortcode
    function dealer_alpha_shortcode($atts, $content = null)
    {
    	global $post;
    	$content = get_post_meta($post->ID, 'company_name', true);
        // always return
        return $content;
    }
    add_shortcode('dealer-alpha', 'dealer_alpha_shortcode');

	// Dealer Beta Shortcode
    function dealer_beta_shortcode($atts, $content = null)
    {
    	$page_id = get_queried_object_id();
		$content = get_the_term_list( $page_id, 'types', '<ul class="types"><li>', ',</li><li>', '</li></ul>' );
        return $content;

    }
    add_shortcode('dealer-beta', 'dealer_beta_shortcode');

	// Dealer Social Shortcode
    function dealer_social_shortcode($atts, $content = null)
    {
    	global $post;
    	$dealer_fb = get_post_meta($post->ID, 'facebook', true);
		$dealer_fbs = get_post_meta($post->ID, 'facebook_status', true);
		$dealer_tw = get_post_meta($post->ID, 'twitter', true);
		$dealer_tws = get_post_meta($post->ID, 'twitter_status', true);
		$dealer_li = get_post_meta($post->ID, 'linkedin', true);
		$dealer_lis = get_post_meta($post->ID, 'linkedin_status', true);
		$dealer_social = '<div class="'.$type.'"> ';
		$dealer_social .= ($dealer_fbs == 1 && ($dealer_fb) ? '<a target="_blank" href="' . $dealer_fb . '"><i class="fa fa-facebook-official" aria-hidden="true"></i>%</a> ' : '' );
		$dealer_social .= ($dealer_tws == 1 && ($dealer_tw) ? '<a target="_blank" href="' . $dealer_tw . '"><i class="fa fa-twitter" aria-hidden="true"></i>%</a> ' : '' );
		$dealer_social .= ($dealer_lis == 1 && ($dealer_li) ? '<a target="_blank" href="' . $dealer_li . '"><i class="fa fa-linkedin-square" aria-hidden="true"></i>%</a> ' : '' );
		$dealer_social .= '</div>';
		return $dealer_social;
    }
    add_shortcode('dealer-social', 'dealer_social_shortcode');

    // Dealer Type Shortcode
    function dealer_type_shortcode($atts, $content = null)
    {
    	global $post;
    	$term_obj = get_the_terms( $post->ID, 'types' );
		$term_type = join(', ', wp_list_pluck($term_obj, 'name'));
    	return $term_type;
    }
    add_shortcode('dealer-type', 'dealer_type_shortcode');

    // Dealer Designation Shortcode
    function dealer_des_shortcode($atts, $content = null)
    {
    	global $post;
    	$term_obj = get_the_terms( $post->ID, 'designation' );
		$term_type = join(', ', wp_list_pluck($term_obj, 'name'));
    	return $term_type;
    }
    add_shortcode('dealer-des', 'dealer_des_shortcode');


}
add_action('init', 'dealer_shortcodes_init');