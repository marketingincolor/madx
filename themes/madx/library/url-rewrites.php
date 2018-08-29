<?php
	// Change post url of custom post types to add custom taxonomies to url
	function custom_post_link( $post_link, $id = 0 ){
	  $current_post      = get_post();
	  $current_post_type = $current_post->post_type;
	  $terms             = wp_get_object_terms( get_the_ID(), $current_post_type.'_taxonomies');
	  $term_array        = array();

	  if (!array_key_exists('errors', $terms)) {
	  foreach ($terms as $term) {
	  	if ($term->parent == 0) {
	  		array_unshift($term_array, strtolower($term->slug));
	  	}else{
	  		array_push($term_array, strtolower($term->slug));
	  	}
	  }
	  }

	  $tax_url = join('/',$term_array);

	  if( count($term_array) > 0 ){
	    return str_replace( '%'.$current_post_type.'_taxonomies%' , $tax_url , $post_link );
	  }
	  return $post_link;  
	}
	add_filter( 'post_type_link', 'custom_post_link', 1, 3 );

	// rewrite url structure to add taxonomies to url
	add_filter('rewrite_rules_array', 'mmp_rewrite_rules');
	function mmp_rewrite_rules($rules) {
	    $newRules  = array();
	    $newRules['commercial/(.+)/(.+)/(.+)/?$'] = 'index.php?commercial=$matches[3]';
	    $newRules['commercial/(.+)/(.+)/?$'] = 'index.php?commercial_taxonomies=$matches[2]';

	    $newRules['residential/(.+)/(.+)/(.+)/?$'] = 'index.php?residential=$matches[3]';
	    $newRules['residential/(.+)/(.+)/?$'] = 'index.php?residential_taxonomies=$matches[2]';

	    $newRules['auto/(.+)/(.+)/?$'] = 'index.php?auto=$matches[2]';
	    $newRules['auto/(.+)/?$'] = 'index.php?auto_taxonomies=$matches[1]'; 

	    return array_merge($newRules, $rules);
	}

	// Filter request to allow for 1 or 2 taxonomies in residential
	// custom post url
	function wpd_residential_request_filter( $request ){
	    if( array_key_exists( 'residential_taxonomies' , $request )
	        && ! get_term_by( 'slug', $request['residential_taxonomies'], 'residential_taxonomies' ) ){
	            $request['residential'] = $request['residential_taxonomies'];
	            $request['name'] = $request['residential_taxonomies'];
	            $request['post_type'] = 'residential';
	            unset( $request['residential_taxonomies'] );
	    }
	    return $request;
	}
	add_filter( 'request', 'wpd_residential_request_filter' );

	// Uncomment to see full request on page for debugging purposes

	// function filter_parse_request( $array ) {
	//     var_dump($array); 
	// }; 
	// add_filter( 'parse_request', 'filter_parse_request', 10, 1 );
?>