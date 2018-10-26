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
			<ul class="menu">
				<li style="padding:15px 10px"><a class="btn-yellow solid" href="https://madicodealers.com">Become a Dealer</a></li>
				<li>
					<ul id="right-dropdown" class="dropdown menu" v-dropdown>
						<li><a class="language"><i class="fal fa-globe-americas faleft"></i> English <i class="fa fa-chevron-down"></i></a>
							<ul class="menu vertical">
							  <li><a href="#">Spanish</a></li>
							  <li><a href="#">German</a></li>
							  <li><a href="#">French</a></li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
</div>
</header>
