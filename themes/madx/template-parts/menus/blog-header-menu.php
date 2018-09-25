<?php
 	$cat  = get_the_category();
 	$slug = $cat[0]->slug;
?>
<header id="page-header" class="site-header" role="banner">
	<div class="site-title-bar title-bar" <?php foundationpress_title_bar_responsive_toggle(); ?>>
		<div class="title-bar-left">
			<button aria-label="<?php _e( 'Main Menu', 'foundationpress' ); ?>" class="menu-icon" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>"></button>
			<span class="site-mobile-title title-bar-title">
				<a href="<?php echo '/blog/'.$slug; ?>" rel="home"><img src="<?php bloginfo( 'template_directory' ); ?>/dist/assets/images/blog-header-madico.png" alt="Madico The Clear Choice"></a>
			</span>
		</div>
	</div>

	<nav class="site-navigation top-bar" role="navigation">
		<div class="top-bar-left">
			<div class="site-desktop-title top-bar-title">
				<a href="<?php echo '/blog/'.$slug; ?>" rel="home"><img src="<?php bloginfo( 'template_directory' ); ?>/dist/assets/images/blog-header-madico.png" alt="Madico The Clear Choice"><span class="blog-name"><?php if($slug) {echo $cat[0]->cat_name;}else{echo 'Blog Home';}?></span></a>
			</div>
		</div>
		<div class="top-bar-right">
			
			<?php get_template_part('template-parts/search/searchform'); ?>

		</div>
	</nav>

</header>
