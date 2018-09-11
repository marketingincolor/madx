<?php 
/* Template Name: Commercial */
get_header(); ?>

<section class="page-hero" style="background-image: url(<?php the_field('commercial_hero_background_image'); ?>);">

	<?php get_template_part('template-parts/menus/commercial-header-menu'); ?>

	<div class="grid-container">
		<div class="grid-x">
			<div class="medium-10 medium-offset-1 cell text-center">
				<h1 class="blue"><?php the_field('commercial_hero_heading'); ?></h1>
				<aside class="yellow-underline center"></aside>
				<p class="subhead"><?php the_field('commercial_hero_subhead'); ?></p>
				<a href="<?php the_field('commercial_hero_button_link'); ?>" class="btn-yellow solid"><?php the_field('commercial_hero_button_text'); ?></a>
			</div>
		</div>
	</div>
</section>

<?php get_template_part('template-parts/top-level-page/film-benefits') ?>

<section class="film-type">
	<div class="grid-container">
		<div class="grid-x">
			<div class="medium-8 large-6 medium-offset-2 large-offset-3 cell text-center">
				<h3 class="blue"><?php the_field('film_type_heading'); ?></h3>
				<aside class="yellow-underline center"></aside>
				<p class="subhead"><?php the_field('film_type_subhead'); ?></p>
			</div>
		</div>
	</div>
	<div class="grid-container">
		<div class="grid-x">

			<?php if( have_rows('commercial_film_types') ): ?>
				<?php while( have_rows('commercial_film_types') ): the_row(); 

					$title   = get_sub_field('film_title');
					$subhead = get_sub_field('film_subhead');
					$icon    = get_sub_field('film_icon');
					$link    = get_sub_field('film_button_link');
					$text    = get_sub_field('film_button_text');

					?>

					<div class="medium-4 cell text-center">
						<?php echo $icon; ?>
						<h5 class="blue"><?php echo $title; ?></h5>
						<p class="subhead"><?php echo $subhead; ?></p>
						<a href="<?php echo $link; ?>" class="btn-yellow border"><?php echo $text; ?></a>
					</div>

				<?php endwhile; ?>
			<?php endif; ?>

		</div>
	</div>
</section>

<?php get_template_part('template-parts/top-level-page/warranty-information'); ?>

<?php get_template_part('template-parts/top-level-page/film-tips'); ?>

<?php get_template_part('template-parts/top-level-page/find-dealer'); ?>

<?php get_footer();