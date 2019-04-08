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

		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-KQ2BB3');</script>
		<!-- End Google Tag Manager -->

		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="google-site-verification" content="8pBJeFk4PjfJf-4iS9dFmhC8hNZ7Lbo4voqFA6lDEuM" />
		<meta name="msvalidate.01" content="F3305F8D58587C99AF8DB1CDDBA3DD2E" />
		<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('stylesheet_directory');?>/dist/assets/images/madico-favicon.png">
		<!-- SS -->
		<script type="text/javascript">
		    var _ss = _ss || [];
		    _ss.push(['_setDomain', 'https://koi-3QNHJKLJ4E.marketingautomation.services/net']);
		    _ss.push(['_setAccount', 'KOI-42O9KA253C']);
		    _ss.push(['_trackPageView']);
		(function() {
		    var ss = document.createElement('script');
		    ss.type = 'text/javascript'; ss.async = true;
		    ss.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'koi-3QNHJKLJ4E.marketingautomation.services/client/ss.js?ver=1.1.1';
		    var scr = document.getElementsByTagName('script')[0];
		    scr.parentNode.insertBefore(ss, scr);
		})();
		</script>
		<!-- SS -->

		<!-- Hide Spanish until translated -->
			<!-- <script>
				document.querySelector('a[href="https://madico.com/es?page_id=11764"]').parentElement.style.display = "none";
			</script> -->
		<!-- /Hide spanish -->
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQ2BB3"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->

		<!-- #app is closed in footer.php -->
	<div id="app">

		<div id="mobile-left-menu" class="mobile-left-menu absolute">
			<div class="menu-container relative">
				<button class="absolute" aria-label="<?php _e( 'Close Menu', 'madx' ); ?>" type="button" @click="mobileLeftMenuClose"><i class="fal fa-long-arrow-left"></i></button>
				<ul id="mobile-lang-menu" style="top:80px;" class="dropdown menu" data-closing-time="0" v-dropdown>
						      <li>
						        <?php icl_post_languages_mobile(); ?>
						      </li>
						    </ul>
				<?php foundationpress_header_nav(); ?>
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
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Madico Home" rel="home"><?php get_template_part('/template-parts/svg/madico-bug'); ?></a>
				</div>
				<ul class="dropdown menu" data-closing-time="0" v-dropdown>
		      <li>
		        <a id="nav-drop"><?php _e( 'Navigate Site', 'madx' ); ?> &nbsp;<i class="fas fa-chevron-down"></i></a>
		        <?php foundationpress_header_nav(); ?>
		      </li>
		    </ul>
			</div>
			<div class="top-bar-right">
				<ul class="dropdown menu" data-closing-time="0" v-dropdown>
		      <li>
		        <?php icl_post_languages(); ?>
		      </li>
		    </ul>
				<ul class="menu">
					<li><a href="/madicou" class="top-nav-menu-madicou"><i class="icon-madico-u-icon"></i>&nbsp; <?php _e( 'Madico U', 'madx' ); ?></a></li>
					<li><a href="/dealers" class="top-nav-menu-dealer-portal"><i class="fas fa-id-badge"></i>&nbsp; <?php _e( 'Dealer Portal', 'madx' ); ?></a></li>
		      <li>
		        <a data-toggle="search-dropdown" class="top-nav-menu-search"><i class="fas fa-search"></i>&nbsp; <?php _e( 'Search', 'madx' ); ?></a>
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
