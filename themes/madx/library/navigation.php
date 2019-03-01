<?php
/**
 * Register Menus
 *
 * @link http://codex.wordpress.org/Function_Reference/register_nav_menus#Examples
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

register_nav_menus(
	array(
		'top-bar-r'  => esc_html__( 'Right Top Bar', 'foundationpress' ),
		'mobile-nav' => esc_html__( 'Mobile', 'foundationpress' ),
		'commercial-top-nav' => esc_html__( 'Commercial Top Nav', 'foundationpress' ),
		'residential-top-nav' => esc_html__( 'Residential Top Nav', 'foundationpress' ),
		'auto-top-nav' => esc_html__( 'Auto Top Nav', 'foundationpress' ),
		'safety-top-nav' => esc_html__( 'Safety Top Nav', 'foundationpress' ),
		'about-top-nav' => esc_html__( 'About Top Nav', 'foundationpress' ),
		'specialty-top-nav' => esc_html__( 'Specialty Top Nav', 'foundationpress' ),
		'protectionpro-top-nav' => esc_html__( 'ProtectionPro Top Nav', 'foundationpress' ),
		'header-top-nav' => esc_html__( 'Header Top Nav', 'foundationpress' ),
		'blog-top-nav' => esc_html__( 'Blog Top Nav', 'foundationpress' ),
		'dealers-top-nav' => esc_html__( 'Dealers Top Nav', 'foundationpress' ),
		'footer-company' => esc_html__( 'Footer Company', 'foundationpress' ),
		'footer-films' => esc_html__( 'Footer Films', 'foundationpress' ),
		'footer-specialty' => esc_html__( 'Footer Specialty', 'foundationpress' ),
		'footer-dealers' => esc_html__( 'Footer Dealers', 'foundationpress' ),
		'footer-connect' => esc_html__( 'Footer Connect', 'foundationpress' ),
	)
);


/**
 * Desktop navigation - right top bar
 *
 * @link http://codex.wordpress.org/Function_Reference/wp_nav_menu
 */
// Add classes to each menu item <a> tag
function add_specific_menu_location_atts( $atts, $item, $args ) {
	// get the relative slug
	$url = $item->url;
	// get the title
	$title = $item->title;
	// lowercase title and join with hyphen
	$title_lowercase = strtolower($title);
	$title_split = explode(' ', $title_lowercase);
	$title_joined = implode('-', $title_split);
	// remove the '/' from the beginning
	$menu_class = substr($url, 1);
  // check if the item is in the header-top-nav
  if( $args->theme_location == 'header-top-nav' ) {
    // add the desired class to the <a> tag:
    $atts['class'] = 'header-menu-'.$menu_class;
  }else{
  	$atts['class'] = 'sub-menu-'.$title_joined;
  }
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_specific_menu_location_atts', 10, 3 );

if ( ! function_exists( 'foundationpress_top_bar_r' ) ) {
	function foundationpress_top_bar_r() {
		wp_nav_menu(
			array(
				'container'       => false,
				'menu_class'      => 'dropdown menu',
				'items_wrap'      => '<ul id="%1$s" class="%2$s desktop-menu" data-dropdown-menu>%3$s</ul>',
				'theme_location'  => 'top-bar-r',
				'depth'           => 3,
				'fallback_cb'     => false,
				'walker'          => new Foundationpress_Top_Bar_Walker(),
			)
		);
	}
}


/**
 * Mobile navigation - topbar (default) or offcanvas
 */
if ( ! function_exists( 'foundationpress_mobile_nav' ) ) {
	function foundationpress_mobile_nav() {
		wp_nav_menu(
			array(
				'container'      => false,   // Remove nav container
				'menu'           => __( 'mobile-nav', 'foundationpress' ),
				'menu_class'     => 'vertical menu',
				'theme_location' => 'mobile-nav',
				'items_wrap'     => '<ul id="%1$s" class="%2$s" data-accordion-menu data-submenu-toggle="true">%3$s</ul>',
				'fallback_cb'    => false,
				'walker'         => new Foundationpress_Mobile_Walker(),
			)
		);
	}
}

/**
 * Commercial navigation - top nav
 */
if ( ! function_exists( 'foundationpress_commercial_nav' ) ) {
	function foundationpress_commercial_nav() {
		wp_nav_menu(
			array(
				'container'      => false, // Remove nav container
				'menu'           => __( 'commercial-top-nav', 'foundationpress' ),
				'menu_class'     => 'menu',
				'theme_location' => 'commercial-top-nav',
				'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'fallback_cb'    => false,
			)
		);
	}
}

/**
 * Residential navigation - top nav
 */
if ( ! function_exists( 'foundationpress_residential_nav' ) ) {
	function foundationpress_residential_nav() {
		wp_nav_menu(
			array(
				'container'      => false,  // Remove nav container
				'menu'           => __( 'residential-top-nav', 'foundationpress' ),
				'menu_class'     => 'menu',
				'theme_location' => 'residential-top-nav',
				'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'fallback_cb'    => false,
			)
		);
	}
}
/**
 * Auto navigation - top nav
 */
if ( ! function_exists( 'foundationpress_auto_nav' ) ) {
	function foundationpress_auto_nav() {
		wp_nav_menu(
			array(
				'container'      => false,   // Remove nav container
				'menu'           => __( 'auto-top-nav', 'foundationpress' ),
				'menu_class'     => 'menu',
				'theme_location' => 'auto-top-nav',
				'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'fallback_cb'    => false,
			)
		);
	}
}

/**
 * Safety navigation - top nav
 */
if ( ! function_exists( 'foundationpress_safety_nav' ) ) {
	function foundationpress_safety_nav() {
		wp_nav_menu(
			array(
				'container'      => false,   // Remove nav container
				'menu'           => __( 'safety-top-nav', 'foundationpress' ),
				'menu_class'     => 'menu',
				'theme_location' => 'safety-top-nav',
				'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'fallback_cb'    => false,
			)
		);
	}
}

/**
 * ProtectionPro navigation - top nav
 */
if ( ! function_exists( 'foundationpress_protectionpro_nav' ) ) {
	function foundationpress_protectionpro_nav() {
		wp_nav_menu(
			array(
				'container'      => false,   // Remove nav container
				'menu'           => __( 'protectionpro-top-nav', 'foundationpress' ),
				'menu_class'     => 'menu',
				'theme_location' => 'protectionpro-top-nav',
				'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'fallback_cb'    => false,
			)
		);
	}
}

/**
 * About navigation - top nav
 */
if ( ! function_exists( 'foundationpress_about_nav' ) ) {
	function foundationpress_about_nav() {
		wp_nav_menu(
			array(
				'container'      => false,   // Remove nav container
				'menu'           => __( 'about-top-nav', 'foundationpress' ),
				'menu_class'     => 'menu',
				'theme_location' => 'about-top-nav',
				'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'fallback_cb'    => false,
			)
		);
	}
}

/**
 * Specialty navigation - top nav
 */
if ( ! function_exists( 'foundationpress_specialty_nav' ) ) {
	function foundationpress_specialty_nav() {
		wp_nav_menu(
			array(
				'container'      => false,   // Remove nav container
				'menu'           => __( 'specialty-top-nav', 'foundationpress' ),
				'menu_class'     => 'menu',
				'theme_location' => 'specialty-top-nav',
				'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'fallback_cb'    => false,
			)
		);
	}
}

/**
 * Header Top Navigation - top nav
 */
if ( ! function_exists( 'foundationpress_header_nav' ) ) {
	function foundationpress_header_nav() {
		wp_nav_menu(
			array(
				'container'      => false,   // Remove nav container
				'menu'           => __( 'header-top-nav', 'foundationpress' ),
				'menu_class'     => 'menu',
				'theme_location' => 'header-top-nav',
				'items_wrap'     => '<ul id="%1$s" class="%2$s vertical">%3$s</ul>',
				'fallback_cb'    => false,
			)
		);
	}
}

/**
 * Blog Top Navigation - top nav
 */
if ( ! function_exists( 'foundationpress_blog_nav' ) ) {
	function foundationpress_blog_nav() {
		wp_nav_menu(
			array(
				'container'      => false,   // Remove nav container
				'menu'           => __( 'blog-top-nav', 'foundationpress' ),
				'menu_class'     => 'menu',
				'theme_location' => 'blog-top-nav',
				'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'fallback_cb'    => false,
			)
		);
	}
}

/**
 * Dealers Top Navigation - top nav
 */
if ( ! function_exists( 'foundationpress_dealers_nav' ) ) {
	function foundationpress_dealers_nav() {
		wp_nav_menu(
			array(
				'container'      => false,   // Remove nav container
				'menu'           => __( 'dealers-top-nav', 'foundationpress' ),
				'menu_class'     => 'menu',
				'theme_location' => 'dealers-top-nav',
				'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'fallback_cb'    => false,
			)
		);
	}
}

// Append item to the end of the dealers top nav menu
// add_filter('wp_nav_menu_items', 'add_consumer_link', 10, 2);
// function add_consumer_link($items, $args){
//     if( $args->theme_location == 'dealers-top-nav' ){
//         $items .= '<li class="menu-item show-for-large">|</li><li class="menu-item"><a class="consumer" title="Back to Consumer Area" href="'. esc_url( home_url( '/' ) ) .'">' . __( 'Consumers Only','madx' ) . '</a></li>';
//     }
//     return $items;
// }


/**
 * Footer Navigation - Company Menu
 */
if ( ! function_exists( 'foundationpress_footer_company' ) ) {
	function foundationpress_footer_company() {
		wp_nav_menu(
			array(
				'container'      => false,   // Remove nav container
				'menu'           => __( 'footer-company', 'foundationpress' ),
				'menu_class'     => '',
				'theme_location' => 'footer-company',
				'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'fallback_cb'    => false,
			)
		);
	}
}

/**
 * Footer Navigation - Films Menu
 */
if ( ! function_exists( 'foundationpress_footer_films' ) ) {
	function foundationpress_footer_films() {
		wp_nav_menu(
			array(
				'container'      => false,   // Remove nav container
				'menu'           => __( 'footer-films', 'foundationpress' ),
				'menu_class'     => '',
				'theme_location' => 'footer-films',
				'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'fallback_cb'    => false,
			)
		);
	}
}

/**
 * Footer Navigation - Specialty Menu
 */
if ( ! function_exists( 'foundationpress_footer_specialty' ) ) {
	function foundationpress_footer_specialty() {
		wp_nav_menu(
			array(
				'container'      => false,   // Remove nav container
				'menu'           => __( 'footer-specialty', 'foundationpress' ),
				'menu_class'     => '',
				'theme_location' => 'footer-specialty',
				'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'fallback_cb'    => false,
			)
		);
	}
}

/**
 * Footer Navigation - Dealers Menu
 */
if ( ! function_exists( 'foundationpress_footer_dealers' ) ) {
	function foundationpress_footer_dealers() {
		wp_nav_menu(
			array(
				'container'      => false,   // Remove nav container
				'menu'           => __( 'footer-dealers', 'foundationpress' ),
				'menu_class'     => '',
				'theme_location' => 'footer-dealers',
				'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'fallback_cb'    => false,
			)
		);
	}
}

/**
 * Footer Navigation - Connect Menu
 */
if ( ! function_exists( 'foundationpress_footer_connect' ) ) {
	function foundationpress_footer_connect() {
		wp_nav_menu(
			array(
				'container'      => false,   // Remove nav container
				'menu'           => __( 'footer-connect', 'foundationpress' ),
				'menu_class'     => '',
				'theme_location' => 'footer-connect',
				'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'fallback_cb'    => false,
			)
		);
	}
}


/**
 * Add support for buttons in the top-bar menu:
 * 1) In WordPress admin, go to Apperance -> Menus.
 * 2) Click 'Screen Options' from the top panel and enable 'CSS CLasses' and 'Link Relationship (XFN)'
 * 3) On your menu item, type 'has-form' in the CSS-classes field. Type 'button' in the XFN field
 * 4) Save Menu. Your menu item will now appear as a button in your top-menu
*/
if ( ! function_exists( 'foundationpress_add_menuclass' ) ) {
	function foundationpress_add_menuclass( $ulclass ) {
		$find    = array( '/<a rel="button"/', '/<a title=".*?" rel="button"/' );
		$replace = array( '<a rel="button" class="button"', '<a rel="button" class="button"' );

		return preg_replace( $find, $replace, $ulclass, 1 );
	}
	add_filter( 'wp_nav_menu', 'foundationpress_add_menuclass' );
}
