<?php 
/* Template Name: Safety Security */
get_header(); ?>

<section class="page-hero" style="background-image: url(<?php the_field('commercial_hero_background_image'); ?>);">

	<div class="show-for-small-only">
		<?php get_template_part('template-parts/menus/safety-header-menu'); ?>
	</div>

	<div id="header-grid" class="grid-container">
		<div class="grid-x">
			<div class="small-10 small-offset-1 large-12 large-offset-0 show-for-medium-only">
				<?php get_template_part('template-parts/menus/safety-tablet-menu'); ?>
			</div>
			<div class="small-10 small-offset-1 large-12 large-offset-0 show-for-large">
				<?php get_template_part('template-parts/menus/safety-header-menu'); ?>
			</div>
		</div>
	</div>

	<div class="grid-container">
		<div class="grid-x">
			<div class="small-10 small-offset-1 cell text-center">
				<h1 class="blue"><?php the_field('commercial_hero_heading'); ?></h1>
				<aside class="yellow-underline center"></aside>
				<p class="subhead"><?php the_field('commercial_hero_subhead'); ?></p>
				<a href="<?php the_field('commercial_hero_button_link'); ?>" class="btn-yellow solid safety-security-hero-cta"><?php the_field('commercial_hero_button_text'); ?></a>
			</div>
		</div>
	</div>
</section>

<?php get_template_part('template-parts/top-level-page/film-benefits') ?>

<section class="film-type">
	<div class="grid-container">
		<div class="grid-x">
			<div class="small-10 small-offset-1 medium-8 medium-offset-2 large-6 large-offset-3 cell text-center">
				<h3 class="blue"><?php the_field('safety_film_heading'); ?></h3>
				<aside class="yellow-underline center"></aside>
				<p class="subhead"><?php the_field('safety_film_subhead'); ?></p>
			</div>
		</div>
	</div>
	<div class="grid-container">
		<div class="grid-x">
			<div class="small-10 small-offset-1 large-12 large-offset-0">
				<div class="grid-x grid-margin-x grid-margin-y">

					<?php
					if( have_rows('safety_film_types') ):
					  while ( have_rows('safety_film_types') ) : the_row(); ?>

					  <?php $link = substr(get_sub_field('safety_film_link'), 17); ?>

					<div class="medium-6 large-3 cell module auto-height text-center">
						<a href="<?php the_sub_field('safety_film_link'); ?>"><div class="module-bg" style="background-image: url(<?php the_sub_field('safety_film_image'); ?>)"></div></a>
						<div class="meta">
							<a href="<?php the_sub_field('safety_film_link'); ?>"><h4 class="blue"><?php the_sub_field('safety_film_title'); ?></h4></a>
							<p class="content"><?php the_sub_field('safety_film_content'); ?></p>
							<a href="<?php the_sub_field('safety_film_link'); ?>"><button class="btn-yellow border safety-film-type-<?php echo $link; ?>"><?php the_sub_field('safety_film_button_text'); ?></button></a>
						</div>
					</div>

					<?php endwhile;endif; ?>

				</div>
			</div>
		</div>
	</div>
</section>

<?php get_template_part('template-parts/top-level-page/film-tips'); ?>

<?php get_template_part('template-parts/top-level-page/find-dealer'); ?>

<?php get_footer();