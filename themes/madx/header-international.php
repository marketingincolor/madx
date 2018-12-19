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
		<meta name="google-site-verification" content="8pBJeFk4PjfJf-4iS9dFmhC8hNZ7Lbo4voqFA6lDEuM" />

		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-KQ2BB3');</script>
		<!-- End Google Tag Manager -->

		<!-- SS -->
		<script type="text/javascript">
		    var _ss = _ss || [];
		    _ss.push(['_setDomain', 'https://koi-3QN6SVTYI8.marketingautomation.services/net']);
		    _ss.push(['_setAccount', 'KOI-42GDPGWMYW']);
		    _ss.push(['_trackPageView']);
		(function() {
		    var ss = document.createElement('script');
		    ss.type = 'text/javascript'; ss.async = true;
		    ss.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'koi-3QN6SVTYI8.marketingautomation.services/client/ss.js?ver=1.1.1';
		    var scr = document.getElementsByTagName('script')[0];
		    scr.parentNode.insertBefore(ss, scr);
		})();
		</script>
		<!-- SS -->
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQ2BB3"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->

		<!-- #app is closed in footer.php -->
		<div id="app">

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<header class="site-header absolute" role="banner">
		<div id="international-mobile-menu" class="hide-for-medium">
			<div class="grid-container">
				<div class="grid-x">
					<div class="small-10 small-offset-1 cell">
						<div class="grid-x">
							<div class="small-6 cell">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/madico-white.svg" alt="Madico The clear choice" style="max-width:120px"></a>
							</div>
							<div class="small-6 cell text-right">
								<ul class="dropdown menu" v-dropdown data-alignment="left">
									<li>
										<a data-alignment="left" data-toggle="submenu-dropdown" style="color: #FFF"><?php _e('Menu','madx') ?> &nbsp;<i class="fa fa-chevron-down"></i></a>
										<ul class="menu">
											<li><a href="#!"><i class="fal fa-phone"></i>&nbsp; +1 (800) 123-4567</a></li>
											<li>
												<?php icl_post_languages_mobile() ?>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<nav class="site-navigation top-bar show-for-medium" role="navigation">
			<div class="top-bar-left">
				<div class="site-desktop-title top-bar-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/madico-white.svg" alt="Madico The clear choice" style="max-width:120px"></a>
				</div>
			</div>
			<div class="top-bar-right">
				<ul class="dropdown menu" v-dropdown>
		      <li>
		        <?php icl_post_languages(); ?>
		      </li>
		      <li><a href="#!"><i class="fal fa-phone"></i>&nbsp; +1 (800) 123-4567</a></li>
		    </ul>

				<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
					<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
				<?php endif; ?>
			</div>
		</nav>

	</header>
