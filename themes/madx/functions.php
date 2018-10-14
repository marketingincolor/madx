<?php
/**
 * Author: Ole Fredrik Lie
 * URL: http://olefredrik.com
 *
 * FoundationPress functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

function list_distributors($country_array){
	$count = 0;
  foreach ($country_array as $country) {
  	$count++;
		$dist_company  = get_post_meta($country->ID,'company_name',true);
		$dist_street   = get_post_meta($country->ID,'street',true);
		$dist_zip      = get_post_meta($country->ID,'zip',true);
		$dist_city     = get_post_meta($country->ID,'city',true);
		$dist_state    = get_post_meta($country->ID,'state',true);
		$dist_phone    = get_post_meta($country->ID,'phone_number',true);
		$dist_altphone = get_post_meta($country->ID,'alt_phone_number',true);
		$dist_fax      = get_post_meta($country->ID,'fax',true);
		$dist_email    = get_post_meta($country->ID,'email',true);
		$dist_website  = get_post_meta($country->ID,'website',true);
		$dist_markets  = get_post_meta($country->ID,'markets',true);
		$dist_name     = $country->post_title;
		$comp_name     = get_post_meta($country->ID,'compnay_name',true);
		$website_nohttp = preg_replace('/(http:\/\/|https:\/\/|www.)/', '', $dist_website);

		echo "<div class='medium-6 large-3 cell module auto-height'>";
  	echo "<h5 class='blue'>{$dist_name}</h5>";
  	echo "<ul class='dealer-meta'>";
  	echo "<li><address><i class='fas fa-map-marker-alt'></i> &nbsp;";
  	if($dist_company) {
  		echo "{$dist_company}<br>";
  	}
  	if($dist_street) {
  	  echo "{$dist_street}<br> {$dist_city}, {$dist_state} {$dist_zip}</address></li>";
    }
  	if($dist_phone) {
  		echo "<li><address><i class='fas fa-phone'></i> &nbsp;{$dist_phone}";
	  	if($dist_altphone) {
	  		echo "<br>{$dist_altphone}";
	  	}
  		echo "</address></li>";
  	}
  	if($dist_fax) {
  		echo "<li><address><i class='fas fa-fax'></i> &nbsp;{$dist_fax}</address></li>";
  	}
		if($dist_email) {
		  echo "<li class='email'><address><i class='fas fa-envelope'></i> &nbsp;{$dist_email}</address></li>";
		}
		if($dist_website) {
		  echo "<li class='email website'><address><i class='fas fa-globe'></i> &nbsp;<a href='{$dist_website}' target='_blank'>{$website_nohttp}</a></address></li>";
		}
  	echo "</ul>";
		if($dist_markets) {
		  echo "<a href='#!' class='info-icon' v-tooltip tabindex='{$count}' title='{$dist_markets}'><i class='fal fa-info-circle'></i></a>";
	  }
	  echo "</div>";
	}
}

/** Various URL rewrite functions to add taxonomies to url */
require_once( 'library/url-rewrites.php' );

/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Required for Foundation to work properly */
require_once( 'library/foundation.php' );

/** Format comments */
require_once( 'library/class-foundationpress-comments.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add menu walkers for top-bar and off-canvas */
require_once( 'library/class-foundationpress-top-bar-walker.php' );
require_once( 'library/class-foundationpress-mobile-walker.php' );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Add Nav Options to Customer */
require_once( 'library/custom-nav.php' );

/** Change WP's sticky post class */
require_once( 'library/sticky-posts.php' );

/** Configure responsive image sizes */
require_once( 'library/responsive-images.php' );

/** Add custom shortcodes */
require_once( 'library/shortcodes.php' );

/** If your site requires protocol relative url's for theme assets, uncomment the line below */
// require_once( 'library/class-foundationpress-protocol-relative-theme-assets.php' );
