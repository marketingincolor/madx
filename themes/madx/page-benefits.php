<?php 
/* Template Name: Benefits */
get_header(); ?>

<?php get_template_part('template-parts/menus/commercial-header-menu'); ?>

<section class="benefits-intro">
	<div class="grid-container">
		<div class="grid-x">
			<div class="medium-10 medium-offset-1 large-8 large-offset-2 cell text-center">
				<h1 class="blue"><?php the_field('benefits_intro_heading'); ?></h1>
				<aside class="yellow-underline center"></aside>
				<p><?php the_field('benefits_intro_subhead'); ?></p>
			</div>
		</div>
	</div>
</section>

<section class="benefits-energy" style="background-image: url(<?php the_field('benefits_energy_bg_image'); ?>);">
	<div class="grid-container">
		<div class="grid-x">
			<div class="medium-5 medium-offset-1 large-3 cell">
				<h3 class="blue"><?php the_field('benefits_energy_heading'); ?></h3>
				<aside class="yellow-underline left"></aside>
				<p><?php the_field('benefits_energy_subhead'); ?></p>
			</div>
		</div>
	</div>
</section>

<section class="benefits-environment" style="background-image: url(<?php the_field('benefits_environment_bg_image'); ?>);">
	<div class="grid-container">
		<div class="grid-x">
			<div class="medium-6 medium-offset-1 cell">
				<h3 class="white"><?php the_field('benefits_environment_heading'); ?></h3>
				<aside class="yellow-underline left"></aside>
				<p class="white"><?php the_field('benefits_environment_subhead'); ?></p>
			</div>
		</div>
	</div>
</section>

<section class="benefits-fade" style="background-image: url(<?php the_field('benefits_fade_bg_image'); ?>);">
	<div class="grid-container">
		<div class="grid-x">
			<div class="medium-7 medium-offset-4 large-6 large-offset-5 cell text-right">
				<h3 class="white"><?php the_field('benefits_fade_heading'); ?></h3>
				<aside class="yellow-underline right"></aside>
				<p class="white"><?php the_field('benefits_fade_subhead'); ?></p>
			</div>
		</div>
	</div>
</section>

<section class="benefits-safety" style="background-image: url(<?php the_field('benefits_safety_bg_image'); ?>);">
	<div class="grid-container">
		<div class="grid-x">
			<div class="medium-5 medium-offset-1 large-4 cell">
				<h3 class="blue"><?php the_field('benefits_safety_heading'); ?></h3>
				<aside class="yellow-underline left"></aside>
				<p><?php the_field('benefits_safety_subhead'); ?></p>
			</div>
		</div>
	</div>
</section>

<section class="benefits-appearance" style="background-image: url(<?php the_field('benefits_appearance_bg_image'); ?>);">
	<div class="grid-container">
		<div class="grid-x">
			<div class="medium-7 medium-offset-4 large-6 large-offset-5 cell text-right">
				<h3 class="white"><?php the_field('benefits_appearance_heading'); ?></h3>
				<aside class="yellow-underline right"></aside>
				<p class="white"><?php the_field('benefits_appearance_subhead'); ?></p>
			</div>
		</div>
	</div>
</section>

<section class="benefits-testimonials">
	<div class="grid-container">
		<div class="grid-x">
			<div class="medium-10 medium-offset-1 large-8 large-offset-2 cell text-center">
				<h3 class="blue"><?php the_field('benefits_testimonials_heading'); ?></h3>
				<aside class="yellow-underline center"></aside>
			</div>
		</div>
	</div>
</section>

<?php get_template_part('template-parts/top-level-page/find-dealer'); ?>

<?php get_footer();