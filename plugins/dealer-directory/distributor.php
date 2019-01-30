<?php
if(!class_exists('Dist_Post_Type_Template'))
{
    /**
     * A PostTypeTemplate class that provides additional meta fields
     */
    class Dist_Post_Type_Template
    {
        const POST_TYPE	= "distributor";
        private $_meta	= array(
            'dist_name',
            'company_name',
            'street',
            'city',
            'state',
            'zip',
            'country',
            'phone_number',
            'alt_phone_number',
            'fax',
            'email',
            'website',
            'markets',
            '_enable_dealer'
        );

        /**
         * The Constructor
         */
        public function __construct()
        {
            // register actions
            add_action('init', array(&$this, 'init'));
            add_action('admin_init', array(&$this, 'admin_init'));
        } // END public function __construct()

        /**
         * hook into WP's init action hook
         */
        public function init()
        {
            // Initialize Post Type
            $this->create_post_type();
            add_action('save_post', array(&$this, 'save_post'));
        } // END public function init()

        /**
         * Create the post type
         */
        public function create_post_type()
        {
            register_post_type(self::POST_TYPE,
                array(
                    'labels' => array(
                        'name' => __(sprintf('%ss', ucwords(str_replace("_", " ", self::POST_TYPE)))),
                        'singular_name' => __(ucwords(str_replace("_", " ", self::POST_TYPE)))
                    ),
                    'public' => true,
                    'exclude_from_search' => true,
                    'menu_icon' => 'dashicons-building',
                    'supports' => array(
                        'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'revisions', 'page-attributes'
                    ),
                    'taxonomies' => array('region','country'),
                    'has_archive' => true,
                    'rewrite' => array('slug' => 'distributors','with_front' => false),
                    'hierarchical' => false,
                    'capability_type' => 'distributor',
                    'map_meta_cap' => true,
                    'capabilities' => array(
                        // meta caps (don't assign these to roles)
                        'edit_post' => 'edit_distributor',
                        'read_post' => 'read_distributor',
                        'delete_post' => 'delete_distributor',
                        // primitive/meta caps
                        'create_posts' => 'create_distributors',
                        // primitive caps used outside of map_meta_cap()
                        'edit_posts' => 'edit_distributors',
                        'edit_others_posts' => 'manage_distributors',
                        'publish_posts' => 'manage_distributors',
                        'read_private_posts' => 'read',
                        // primitive caps used inside of map_meta_cap()
                        'read' => 'read',
                        'delete_posts' => 'manage_distributors',
                        'delete_private_posts' => 'manage_distributors',
                        'delete_published_posts' => 'manage_distributors',
                        'delete_others_posts' => 'manage_distributors',
                        'edit_private_posts' => 'edit_distributors',
                        'edit_published_posts' => 'edit_distributors'
                    ),
                )
            );
            flush_rewrite_rules();
        }

        /**
         * Save the metaboxes for this custom post type
         */
        public function save_post($post_id)
        {
            // verify if this is an auto save routine. If it is we bypass the update.
            if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
            {
                return;
            }

            if(isset($_POST['post_type']) /*&& $_POST['post_type'] == self::POST_TYPE*/ && current_user_can('edit_post', $post_id))
            {
                foreach($this->_meta as $field_name)
                {
                    // Update the post's meta field
                    update_post_meta($post_id, $field_name, $_POST[$field_name]);
                }
            }
            else
            {
                return;
            } // if($_POST['post_type'] == self::POST_TYPE && current_user_can('edit_post', $post_id))
        } // END public function save_post($post_id)

        /**
         * hook into WP's admin_init action hook
         */
        public function admin_init()
        {
            // Add metaboxes
            add_action('add_meta_boxes', array(&$this, 'add_meta_boxes'));
        } // END public function admin_init()

        /**
         * hook into WP's add_meta_boxes action hook
         */
        public function add_meta_boxes()
        {
            // Add this metabox to every selected post
            add_meta_box(
                sprintf('dealer_directory_%s_section', self::POST_TYPE),
                sprintf('%s Information', ucwords(str_replace("_", " ", self::POST_TYPE))),
                array(&$this, 'add_inner_meta_boxes'),
                self::POST_TYPE
            );
        } // END public function add_meta_boxes()

        /**
         * called off of the add meta box
         */
        public function add_inner_meta_boxes($post)
        {
            // Render the job order metabox
            include(sprintf("%s/../templates/%s_metabox.php", dirname(__FILE__), self::POST_TYPE));
        } // END public function add_inner_meta_boxes($post)

    } // END class Dist_Post_Type_Template
} // END if(!class_exists('Dist_Post_Type_Template'))

/**
* Create the DISTRIBUTOR REGION custom taxonomy
*/
add_action( 'init', 'create_distributor_regions', 0 );
function create_distributor_regions() {
    // Labels part for the GUI
    $labels = array(
        'name' => _x( 'Regions', 'taxonomy general name' ),
        'singular_name' => _x( 'Region', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Regions' ),
        'popular_items' => __( 'Popular Regions' ),
        'all_items' => __( 'All Regions' ),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __( 'Edit Region' ), 
        'update_item' => __( 'Update Region' ),
        'add_new_item' => __( 'Add New Region' ),
        'new_item_name' => __( 'New Region Name' ),
        'separate_items_with_commas' => __( 'Separate regions with commas' ),
        'add_or_remove_items' => __( 'Add or remove regions' ),
        'choose_from_most_used' => __( 'Choose from the most used regions' ),
        'menu_name' => __( 'Regions' ),
    ); 
    // Now register the hierarchical taxonomy like category
    register_taxonomy('regions','distributor',array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'region' ),
    ));
}

/**
* Create the DISTRIBUTOR COUNTRY custom taxonomy
*/
add_action( 'init', 'create_distributor_country', 0 );
function create_distributor_country() {
    // Labels part for the GUI
    $labels = array(
        'name' => _x( 'Countries', 'taxonomy general name' ),
        'singular_name' => _x( 'Country', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Countries' ),
        'popular_items' => __( 'Popular Countries' ),
        'all_items' => __( 'All Countries' ),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __( 'Edit Country' ), 
        'update_item' => __( 'Update Country' ),
        'add_new_item' => __( 'Add New Country' ),
        'new_item_name' => __( 'New Country Name' ),
        'separate_items_with_commas' => __( 'Separate countries with commas' ),
        'add_or_remove_items' => __( 'Add or remove countries' ),
        'choose_from_most_used' => __( 'Choose from the most used countries' ),
        'menu_name' => __( 'Countries' ),
    ); 
    // Now register the hierarchical taxonomy like category
    register_taxonomy('country','distributor',array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'country' ),
    ));
}
