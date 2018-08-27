<?php
if(!class_exists('Post_Type_Template'))
{
    /**
     * A PostTypeTemplate class that provides additional meta fields
     */
    class Post_Type_Template
    {
        const POST_TYPE	= "dealer";
        private $_meta	= array(
            'meta_did', // --- dealer_id 
            'meta_logo', // --- logo (uploaded)
            'meta_name', // --- company name
            'meta_address', // --- street address
            'meta_city', // --- city
            'meta_state', // --- state/province
            'meta_zip', // --- zip
            'meta_country', // --- country
            'meta_phone', // --- phone
            'meta_email', // --- email 
            'meta_website', // --- website
            'meta_fb', // --- facebook
            'meta_fbs', // --- facebook_status
            'meta_tw', // --- twitter 
            'meta_tws', // --- twiter_status
            'meta_li', // --- linkedin
            'meta_lis', // --- linkedin_status
            '_enable_dealer' // --- enable_dealer

            /*'dealer_id',
            'logo',
            'company_name',
            'street',
            'city',
            'state',
            'zip',
            'country',
            'phone_number',
            'email',
            'website',
            'facebook',
            'facebook_status',
            'twitter',
            'twiter_status',
            'linkedin',
            'linkedin_status',
            '_enable_dealer' // --- enable_dealer*/

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
                    'menu_icon' => 'dashicons-groups',
                    'supports' => array(
                        'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'revisions', 'page-attributes'
                    ),
                    'taxonomies' => array('type','program'),
                    'has_archive' => true,
                    'rewrite' => array('slug' => 'dealers'),
                    'hierarchical' => false,
                    'capability_type' => 'dealer',
                    'map_meta_cap' => true,
                    'capabilities' => array(
                        // meta caps (don't assign these to roles)
                        'edit_post' => 'edit_dealer',
                        'read_post' => 'read_dealer',
                        'delete_post' => 'delete_dealer',
                        // primitive/meta caps
                        'create_posts' => 'create_dealers',
                        // primitive caps used outside of map_meta_cap()
                        'edit_posts' => 'edit_dealers',
                        'edit_others_posts' => 'manage_dealers',
                        'publish_posts' => 'manage_dealers',
                        'read_private_posts' => 'read',
                        // primitive caps used inside of map_meta_cap()
                        'read' => 'read',
                        'delete_posts' => 'manage_dealers',
                        'delete_private_posts' => 'manage_dealers',
                        'delete_published_posts' => 'manage_dealers',
                        'delete_others_posts' => 'manage_dealers',
                        'edit_private_posts' => 'edit_dealers',
                        'edit_published_posts' => 'edit_dealers'
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

    } // END class Post_Type_Template
} // END if(!class_exists('Post_Type_Template'))

/**
* Create the DEALER custom taxonomy for Madico Dealers 
*/
add_action( 'init', 'create_dealer_nh_taxonomy', 0 );
function create_dealer_nh_taxonomy() {
    // Labels part for the GUI
    $labels = array(
        'name' => _x( 'Dealer Taxonomies', 'taxonomy general name' ),
        'singular_name' => _x( 'Taxonomy', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Taxonomies' ),
        'popular_items' => __( 'Popular Taxonomies' ),
        'all_items' => __( 'All Taxonomies' ),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __( 'Edit Taxonomy' ), 
        'update_item' => __( 'Update Taxonomy' ),
        'add_new_item' => __( 'Add New Taxonomy' ),
        'new_item_name' => __( 'New Taxonomy Name' ),
        'separate_items_with_commas' => __( 'Separate taxonomies with commas' ),
        'add_or_remove_items' => __( 'Add or remove taxonomies' ),
        'choose_from_most_used' => __( 'Choose from the most used taxonomies' ),
        'menu_name' => __( 'Taxonomy' ),
    ); 
    // Now register the hierarchical taxonomy like category
    register_taxonomy('dealer_taxonomies','dealer',array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'dealer-taxonomy' ),
    ));
}