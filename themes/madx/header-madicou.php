<?php
/**
 * The template for displaying the header for MadicoU
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="google-site-verification" content="8pBJeFk4PjfJf-4iS9dFmhC8hNZ7Lbo4voqFA6lDEuM" /> 
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

	<!-- #app is closed in footer.php -->
	<div id="app">

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<div id="mobile-left-menu" class="mobile-left-menu absolute">
		<div class="menu-container relative">
			<button class="absolute" aria-label="<?php _e( 'Close Menu', 'madx' ); ?>" type="button" @click="mobileLeftMenuClose"><i class="fal fa-long-arrow-left"></i></button>
			<?php foundationpress_header_nav(); ?>
		</div>
	</div>

	<header id="top-header" class="site-header" role="banner">
		<div class="mobile-nav">
			<div class="hamburger-container">
				<button id="hamburger" aria-label="<?php _e( 'Open Menu', 'madx' ); ?>" class="menu-icon" type="button" @click="mobileLeftMenuOpen"></button>
			</div>
			<div class="site-mobile-title title-bar-title">
				<a href="<?php echo esc_url(home_url('madicou','relative')); ?>" rel="home"><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/madicou-logo.png" alt="Madico U"></a>
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
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php get_template_part('/template-parts/svg/madico-bug'); ?></a>
				</div>
				<ul class="dropdown menu" v-dropdown>
		      <li>
		        <a id="nav-drop"><?php _e( 'Navigate Site', 'madx' ); ?> &nbsp;<i class="fas fa-chevron-down"></i></a>
		        <?php foundationpress_header_nav(); ?>
		      </li>
		    </ul>
			</div>
			<div class="top-bar-right">
				<ul class="menu">
					<li><a href="/madicou"><i class="icon-madico-u-icon"></i>&nbsp; <?php _e( 'Madico U', 'madx' ); ?></a></li>
					<li><a href="/dealer-portal"><i class="fas fa-id-badge"></i>&nbsp; <?php _e( 'Dealer Portal', 'madx' ); ?></a></li>
		      <li>
		        <a data-toggle="search-dropdown"><i class="fas fa-search"></i>&nbsp; <?php _e( 'Search', 'madx' ); ?></a>
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
