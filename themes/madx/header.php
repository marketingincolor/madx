<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>


	<header class="site-header" role="banner">
		<nav class="site-navigation top-bar" role="navigation">
			<div class="top-bar-left">
				<li class="site-desktop-title top-bar-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/bug-gray.png" alt="Madico"></a>
				</li>
				<ul class="dropdown menu" data-dropdown-menu>
		      <li class="menu-text">Site Title</li>
		      <li>
		        <a href="#">Navigate Site</a>
		        <ul class="menu vertical">
		          <li><a href="#">One</a></li>
		          <li><a href="#">Two</a></li>
		          <li><a href="#">Three</a></li>
		        </ul>
		      </li>
		      <li><a href="#">Two</a></li>
		      <li><a href="#">Three</a></li>
		    </ul>
			</div>
			<div class="top-bar-right">
				<?php foundationpress_top_bar_r(); ?>

				<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
					<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
				<?php endif; ?>
			</div>
		</nav>

	</header>
