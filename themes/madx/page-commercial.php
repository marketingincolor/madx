<?php 
/* Template Name: Commercial */
get_header(); ?>

<section class="page-hero" style="background-image: url(<?php bloginfo('template_directory'); ?>/dist/assets/images/commercial-hero.png);">

	<?php get_template_part('template-parts/menus/commercial-header-menu'); ?>

	<div class="grid-container">
		<div class="grid-x">
			<div class="medium-10 medium-offset-1 cell text-center">
				<h1 class="blue">Protect Your Bottom Line with Energy Savings, a Healthier Work Environment, and Increased Productivity</h1>
				<aside class="yellow-underline center"></aside>
				<p class="subhead">Our Window Films Make Business Sense</p>
				<a href="#" class="btn-yellow solid">Find A Dealer</a>
			</div>
		</div>
	</div>
</section>

<?php get_template_part('template-parts/film-benefits') ?>

<section class="film-type">
	<div class="grid-container">
		<div class="grid-x">
			<div class="medium-8 large-6 medium-offset-2 large-offset-3 cell text-center">
				<h3 class="blue">What type of film do you need?</h3>
				<aside class="yellow-underline center"></aside>
				<p class="subhead">Whether it’s controlling harsh sunlight, providing safe space for a building’s property and occupants, or elevating an environmental experience, Madico has a solution for you.</p>
			</div>
		</div>
	</div>
	<div class="grid-container">
		<div class="grid-x">
			<div class="medium-4 cell text-center">
				<i class="far fa-star-exclamation"></i>
				<h5 class="blue">Solar Protection</h5>
				<p class="subhead">Looking for comfort? Energy savings? Healthy features? With our solar protection options, we say “yes” to all three.</p>
				<a href="#" class="btn-yellow solid">Select Solar</a>
			</div>
			<div class="medium-4 cell text-center">
				<i class="far fa-star-exclamation"></i>
				<h5 class="blue">Safety & Security</h5>
				<p class="subhead">Reduce the risk of injury, property damage, or lost assets due to natural disasters, graffiti, criminal activity, and explosions.</p>
				<a href="#" class="btn-yellow solid">Select Security</a>
			</div>
			<div class="medium-4 cell text-center">
				<i class="far fa-star-exclamation"></i>
				<h5 class="blue">Decorative</h5>
				<p class="subhead">Apply any of an array of classic patterns and textured surfaces to create interior glass surfaces of unique sophistication.</p>
				<a href="#" class="btn-yellow solid">Select Decorative</a>
			</div>
		</div>
	</div>
</section>

<?php get_template_part('template-parts/warranty-information'); ?>

<section class="education">
	<div class="grid-container">
		<div class="grid-x">
			<div class="medium-8 large-6 medium-offset-2 large-offset-3 cell text-center">
				<h3 class="blue">Continuing Education from Madico</h3>
				<aside class="yellow-underline center"></aside>
				<p class="subhead">Never stop learning. Here’s interesting information to help you delve deeper into ways window films from Madico better people's lives.</p>
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