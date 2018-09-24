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

		<!-- #app is closed in footer.php -->
		<div id="app">

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>


	<header class="site-header absolute" role="banner">
		<div class="site-title-bar title-bar" <?php foundationpress_title_bar_responsive_toggle(); ?>>
			<div class="title-bar-left">
				<button aria-label="<?php _e( 'Main Menu', 'foundationpress' ); ?>" class="menu-icon" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>"></button>
				<span class="site-mobile-title title-bar-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				</span>
			</div>
		</div>

		<nav class="site-navigation top-bar" role="navigation">
			<div class="top-bar-left">
				<div class="site-desktop-title top-bar-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/logo-white.png" alt="Madico The clear choice"></a>
				</div>
			</div>
			<div class="top-bar-right">
				<?php //foundationpress_top_bar_r(); ?>
				<ul class="dropdown menu" data-dropdown-menu>
		      <li>
		        <a href="#"><i class="fal fa-globe-americas"></i>&nbsp; English&nbsp; <i class="fas fa-chevron-down"></i></a>
		        <ul class="menu vertical">
		          <li><a href="#">Spanish</a></li>
		          <li><a href="#">German</a></li>
		          <li><a href="#">French</a></li>
		        </ul>
		      </li>
		      <li><a href="#"><i class="fas fa-id-badge"></i>&nbsp; Dealer Portal</a></li>
		      <li><a href="#"><i class="fas fa-search"></i>&nbsp; Search</a></li>
		    </ul>

				<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
					<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
				<?php endif; ?>
			</div>
		</nav>

	</header>
