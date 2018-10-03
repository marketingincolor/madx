<?php 
/* Template Name: Specialty Solutions */
get_header(); ?>

<section class="page-hero" style="background-image: url(<?php the_field('commercial_hero_background_image'); ?>);">

	<div id="header-grid" class="grid-container">
		<div class="small-10 small-offset-1 large-12 large-offset-0">
		  <?php get_template_part('template-parts/menus/specialty-header-menu'); ?>
		</div>
	</div>

	<div class="grid-container">
		<div class="grid-x">
			<div class="small-10 small-offset-1 cell text-center">
				<h1 class="blue"><?php the_field('commercial_hero_heading'); ?></h1>
				<aside class="yellow-underline center"></aside>
				<p class="subhead"><?php the_field('commercial_hero_subhead'); ?></p>
				<a href="<?php the_field('commercial_hero_button_link'); ?>" class="btn-yellow solid"><?php the_field('commercial_hero_button_text'); ?></a>
			</div>
		</div>
	</div>
</section>

<section class="capabilities">
	<div class="grid-container">
		<div class="grid-x grid-margin-x">
			<div class="small-10 small-offset-1 cell text-center">
				<h2 class="blue">Our Capabilities</h2>
				<aside class="yellow-underline center"></aside>
				<p class="subhead">Madico’s Specialty Solutions division offers OEM’s custom solutions in a wide variety of formats and can be achieved through our range of manufacturing capabilities. Coat, laminate, and vacuum deposit all on one substrate.</p>
			</div>
			<div class="medium-4 cell module auto-height">
				<img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/coating-and-laminating.png" alt="Coating & Laminating">
				<div class="meta">
					<a href="" class="blue">Coating & Laminating</a>
					<p>With more than 40 years of precision coating and laminating, Madico is a world leader in coating, laminating, and converting of films in wide width, roll-to-roll format. Our products are complex, multi-layered, and engineered to our cusotmers' precise specifications — and complete satisfaction.</p>
				</div>
			</div>
			<div class="medium-4 cell module auto-height">
				<img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/metalizing.png" alt="Metalizing">
				<div class="meta">
					<a href="" class="blue">Metalizing</a>
					<p>Vacuum Depositing Inc. (VDI), a subsidiary of Madico's parent company, Lintec Corp.,  offers a full range of highly specialized, cutting-edge film products and services. Founded in 1971, it is the leading custom roll-to-roll metallizer of evaporative, sputtered, and electron beam coatings.</p>
				</div>
			</div>
			<div class="medium-4 cell module auto-height">
				<img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/contract-coating.png" alt="Contract Coating">
				<div class="meta">
					<a href="" class="blue">Contract Coating</a>
					<p>Our experience in coating and laminating spans more than four decades, and gives us the expertise to offer outstanding Toll/Contracting Manufacturing services. We achieve it with quality, adopting a near fanatical commitment to systems, processes, and execution to bring our customers' products or prototypes to reality.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="featured-products">
	<div class="grid-container">
		<div class="grid-x">
			<div class="small-10 small-offset-1 cell text-center">
				<h2 class="blue">Featured Products</h2>
				<aside class="yellow-underline center"></aside>
				<p class="subhead">All our speciality solutions are manufactured to meet or exceed the highest quality standards.</p>
			</div>
			<div class="small-10 small-offset-1 cell">
				<div class="taxonomy-products">

					<specialty-products-home></specialty-products-home>
					
				</div>
			</div>
		</div>
	</div>
	
</section>

<?php get_template_part('template-parts/taxonomy/specialty-solutions/contact'); ?>

<?php get_footer();