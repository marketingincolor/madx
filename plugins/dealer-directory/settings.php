<?php
/*
Settings Class for Dealer Directory
Creates and displays Admin settings menu for Dealer Directory Plugin, allowing specific parameters to be set for the plugin to use, such as the slug to be used for the custom content type.
*/

if(!class_exists('Dealer_Directory_Settings'))
{
	class Dealer_Directory_Settings
	{
		/**
		 * Construct the plugin object
		 */
		public function __construct()
		{
			// register actions
            add_action('admin_init', array(&$this, 'admin_init'));
        	add_action('admin_menu', array(&$this, 'add_menu'));
		} // END public function __construct
		
        /**
         * hook into WP's admin_init action hook
         */
        public function admin_init()
        {
        	// register your plugin's settings
        	register_setting('dealer-directory-group', 'dd_settings_a');
        	register_setting('dealer-directory-group', 'dd_settings_b');
            register_setting('dealer-directory-group', 'dd_settings_c');

        	// add your settings section
        	add_settings_section(
        	    'dealer-directory-section',
        	    'Dealer Directory Settings', 
        	    array(&$this, 'settings_section_dealer-directory'), 
        	    'dealer-directory'
        	);
        	
        	// add your setting's fields
            add_settings_field(
                'dealer-directory-setting_a',
                'Include Post Type Slug?',
                array(&$this, 'settings_field_input_text'), 
                'dealer-directory',
                'dealer-directory-section',
                array(
                    'field' => 'dd_settings_a'
                )
            );
            add_settings_field(
                'dealer-directory-setting_b',
                'Primary Analytics ID',
                array(&$this, 'settings_field_input_text'), 
                'dealer-directory',
                'dealer-directory-section',
                array(
                    'field' => 'dd_settings_b'
                )
            );
            add_settings_field(
                'dealer-directory-setting_c',
                'Secondary Analytics ID',
                array(&$this, 'settings_field_input_text'),
                'dealer-directory',
                'dealer-directory-section',
                array(
                    'field' => 'dd_settings_c'
                )
            );
            // Possibly do additional admin_init tasks
        } // END public static function activate
        
        public function settings_section_dealer_directory()
        {
            // Think of this as help text for the section.
            echo 'These following features can be set for the Dealer Directory.';
        }
        
        /**
         * This function provides text inputs for settings fields
         */
        public function settings_field_input_text($args)
        {
            // Get the field name from the $args array
            $field = $args['field'];
            // Get the value of this setting
            $value = get_option($field);
            // echo a proper input type="text"
            echo sprintf('<input type="text" name="%s" id="%s" value="%s" />', $field, $field, $value);
        } // END public function settings_field_input_text($args)
        
        /**
         * add a menu
         */		
        public function add_menu()
        {
            // Add a page to manage this plugin's settings
        	add_options_page(
        	    'Dealer Directory Settings', 
        	    'Dealer Directory', 
        	    'manage_options', 
        	    'dealer-directory',
        	    array(&$this, 'plugin_settings_page')
        	);
        } // END public function add_menu()
    
        /**
         * Menu Callback
         */		
        public function plugin_settings_page()
        {
        	if(!current_user_can('manage_options'))
        	{
        		wp_die(__('You do not have sufficient permissions to access this page.'));
        	}
	
        	// Render the settings template
        	include(sprintf("%s/templates/settings.php", dirname(__FILE__)));
        } // END public function plugin_settings_page()
    } // END class Dealer_Directory_Settings
} // END if(!class_exists('Dealer_Directory_Settings'))



