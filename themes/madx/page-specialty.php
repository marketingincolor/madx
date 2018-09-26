<?php 
/* Template Name: Specialty Solutions */
get_header(); ?>

<section class="page-hero" style="background-image: url(<?php the_field('commercial_hero_background_image'); ?>);">

	<?php get_template_part('template-parts/menus/specialty-header-menu'); ?>

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



<?php get_footer();