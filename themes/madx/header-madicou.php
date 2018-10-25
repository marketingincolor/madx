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
		
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

	<!-- #app is closed in footer.php -->
	<div id="app">

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

<header id="top-header" class="site-header madicou-header" role="banner">
<div class="grid-container" style="height:100%;">
	<nav class="site-navigation top-bar" role="navigation" style="height:100%;">
		<div class="top-bar-left">
			<div class="site-desktop-title top-bar-title">
				<a href="https://madicodealers.com"><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/madico-dealer-portal-logo.png"></a>
			</div>
			<div class="main-menu">
				<ul class="menu">
					<li><a href="https://madicodealers.com">Products <i class="fa fa-chevron-down"></i></a></li>
					<li><a href="https://madicodealers.com">Madico U <i class="fa fa-chevron-down"></i></a></li>
					<li><a href="https://madicodealers.com">Dealer Programs</a></li>
					<li><a href="https://madicodealers.com">News</a></li>
				</ul>
			</div>
		</div>
		<div class="top-bar-right">
			<div class="header-btns" style="float:right;">
				<a class="btn-yellow solid" href="https://madicodealers.com">Become a Dealer</a>
			</div>
			<div class="main-menu" style="float:right;">
				<ul class="menu">
					<li><a href="https://madicodealers.com"><i class="fal fa-globe-americas faleft"></i> English <i class="fa fa-chevron-down"></i></a></li>
					<li><a href="http://madicodealers.com/customer/account/login"><i class="fal fa-lock-alt faleft"></i> Sign In</a></li>
				</ul>
			</div>
		</div>
		<div class="clear"></div>
	</nav>
</div>
</header>
