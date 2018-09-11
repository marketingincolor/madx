<header id="page-header" class="site-header" role="banner">
	<div class="site-title-bar title-bar" <?php foundationpress_title_bar_responsive_toggle(); ?>>
		<div class="title-bar-left">
			<button aria-label="<?php _e( 'Main Menu', 'foundationpress' ); ?>" class="menu-icon" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>"></button>
			<span class="site-mobile-title title-bar-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'template_directory' ); ?></a>
			</span>
		</div>
	</div>

	<nav class="site-navigation top-bar" role="navigation">
		<div class="top-bar-left">
			<div class="site-desktop-title top-bar-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php bloginfo( 'template_directory' ); ?>/dist/assets/images/madico-page-logo.png" alt="Madico The Clear Choice"></a>
			</div>
		</div>
		<div class="top-bar-right">
			<?php //foundationpress_top_bar_r(); ?>
			<ul class="dropdown menu" data-dropdown-menu>
	      <li><a href="#">Solar Control</a></li>
	      <li><a href="#">Windshield Protection</a></li>
	      <li><a href="#">Paint Protection</a></li>
	      <li><a href="#">Blog</a></li>
	      <li><a href="#">Find A Dealer</a></li>
	    </ul>

			<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
				<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
			<?php endif; ?>
		</div>
	</nav>

</header>