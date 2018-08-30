<?php 
/* Template Name: Residential */
get_header(); ?>

<section class="page-hero" style="background-image: url(<?php bloginfo('template_directory'); ?>/dist/assets/images/residential-hero.png);">

	<?php get_template_part('template-parts/menus/residential-header-menu'); ?>

	<div class="grid-container">
		<div class="grid-x">
			<div class="large-8 medium-10 cell">
				<h1 class="blue">Enjoy Beauty, Safety, and Savings with Residential Window Film</h1>
				<aside class="yellow-underline left"></aside>
				<p class="subhead">Live Life in a Better Light</p>
				<a href="#" class="btn-yellow solid">Go To Film Selector</a>&nbsp;&nbsp;&nbsp;<a href="#" class="btn-yellow border">Find A Dealer</a>
			</div>
		</div>
	</div>
</section>

<?php get_template_part('template-parts/film-benefits'); ?>

<?php get_template_part('template-parts/warranty-information'); ?>

<section class="film-tips">
	<div class="grid-container">
		<div class="grid-x">
			<div class="medium-8 large-6 medium-offset-2 large-offset-3 cell text-center">
				<h3 class="blue">Latest Window Film Tips</h3>
				<aside class="yellow-underline center"></aside>
				<p class="subhead">Read all about it here with our informative blogs. You just might learn something new!</p>
			</div>
		</div>
		<div class="grid-x grid-margin-x">
			<div class="medium-4 cell module">
				<a href="#"><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/device-protection-module.png" alt="Device Protection"></a>
				<div class="meta">
					<a href="#"><h4 class="blue">Window Film Fights Skin Cancer</h4></a>
					<a href="#" class="blue read-more">Read More &nbsp;<i class="fal fa-long-arrow-right"></i></a>
				</div>
			</div>
			<div class="medium-4 cell module">
				<a href="#"><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/device-protection-module.png" alt="Device Protection"></a>
				<div class="meta">
					<a href="#"><h4 class="blue">Managing the Sun’s Heath with Window Film</h4></a>
					<a href="#" class="blue read-more">Read More &nbsp;<i class="fal fa-long-arrow-right"></i></a>
				</div>
			</div>
			<div class="medium-4 cell module">
				<a href="#"><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/device-protection-module.png" alt="Device Protection"></a>
				<div class="meta">
					<a href="#"><h4 class="blue">Benefits of Decorative Window Film</h4></a>
					<a href="#" class="blue read-more">Read More &nbsp;<i class="fal fa-long-arrow-right"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_template_part('template-parts/find-dealer'); ?>

<?php get_footer();