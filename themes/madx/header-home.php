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

		<div id="mobile-left-menu" class="mobile-left-menu absolute">
			<div class="menu-container relative">
				<button class="absolute" aria-label="<?php _e( 'Close Menu', 'madx' ); ?>" type="button" @click="mobileLeftMenuClose"><i class="fal fa-long-arrow-left"></i></button>
				<ul class="menu vertical absolute">
				  <li><a href="/auto"><i class="far fa-car"></i>&nbsp; Auto</a></li>
				  <li><a href="/residential"><i class="far fa-home"></i>&nbsp; Residential</a></li>
				  <li><a href="/commercial"><i class="far fa-building"></i>&nbsp; Commercial</a></li>
				  <li><a href="/safety-security"><i class="fal fa-shield"></i>&nbsp; Safety &amp; Security</a></li>
				  <li><a href="/specialty-solutions"><i class="fal fa-flask"></i>&nbsp; Specialty Solutions</a></li>
				  <li><a href="/dealers"><i class="fal fa-id-badge"></i>&nbsp; Dealers</a></li>
				  <li><a href="/madicou"><i class="far fa-building"></i>&nbsp; Madico U</a></li>
				  <li><a href="/about"><i class="far fa-building"></i>&nbsp; Company</a></li>
				</ul>
			</div>
		</div>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<header id="top-header" class="site-header" role="banner">
		<div class="mobile-nav">
			<div class="hamburger-container">
				<button id="hamburger" aria-label="<?php _e( 'Open Menu', 'madx' ); ?>" class="menu-icon" type="button" @click="mobileLeftMenuOpen"></button>
			</div>
			<div class="site-mobile-title title-bar-title">
				<a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/madico-mobile-blue.png" alt="Madico"></a>
			</div>
			<div class="search-container">
				<a id="search-toggle" data-toggle="mobile-search" @click="mobileMenuSearch" aria-open="false"><i class="fal fa-times hide"></i><i class="far fa-search"></i></a>
			</div>
		</div>
    <div class="dropdown-pane right" id="mobile-search" v-drop-click>
			<?php get_template_part('template-parts/search/page-searchform'); ?>
    </div>
		<nav class="site-navigation top-bar" role="navigation">
			<div class="top-bar-left">
				<div class="site-desktop-title top-bar-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/bug-gray.png" alt="Madico"></a>
				</div>
				<ul class="dropdown menu" v-dropdown>
		      <li>
		        <a id="nav-drop">Navigate Site &nbsp;<i class="fas fa-chevron-down"></i></a>
		        <ul class="menu vertical">
		          <li><a href="/auto"><i class="far fa-car"></i>&nbsp; Auto</a></li>
		          <li><a href="/residential"><i class="far fa-home"></i>&nbsp; Residential</a></li>
		          <li><a href="/commercial"><i class="far fa-building"></i>&nbsp; Commercial</a></li>
		          <li><a href="/safety-security"><i class="fal fa-shield"></i>&nbsp; Safety &amp; Security</a></li>
		          <li><a href="/specialty-solutions"><i class="fal fa-flask"></i>&nbsp; Specialty Solutions</a></li>
		          <li><a href="/dealers"><i class="fal fa-id-badge"></i></i>&nbsp; Dealers</a></li>
		          <li><a href="/madicou"><i class="far fa-building"></i>&nbsp; Madico U</a></li>
		          <li><a href="/about"><i class="far fa-building"></i>&nbsp; Company</a></li>
		        </ul>
		      </li>
		    </ul>
			</div>
			<div class="top-bar-right">
				<ul class="menu">
					<ul class="dropdown menu" v-dropdown>
			      <li>
			        <a class="language"><i class="fal fa-globe-americas"></i>&nbsp; English&nbsp; <i class="fas fa-chevron-down"></i></a>
			        <ul class="menu vertical">
			          <li><a href="#">Spanish</a></li>
			          <li><a href="#">German</a></li>
			          <li><a href="#">French</a></li>
			        </ul>
			      </li>
			    </ul>
					<li><a href="https://madicodealers.com"><i class="fas fa-id-badge"></i>&nbsp; Dealer Portal</a></li>
		      <li>
		        <a data-toggle="search-dropdown"><i class="fas fa-search"></i>&nbsp; Search</a>
		        <ul class="menu vertical">
		          <li class="dropdown-pane right" id="search-dropdown" data-position="bottom" v-drop-click>
								<?php get_template_part('template-parts/search/page-searchform'); ?>
		          </li>
		        </ul>
		      </li>
				</ul>
			</div>
		</nav>

	</header>


	<header class="site-header absolute show-for-medium" role="banner">
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
				<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
					<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
				<?php endif; ?>
			</div>
		</nav>

	</header>
