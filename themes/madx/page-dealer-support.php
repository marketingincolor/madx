<?php 
/* Template Name: Dealer Support */
get_header();
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<section class="page-hero">

		<div class="show-for-small-only">
			<?php get_template_part('template-parts/menus/dealers-header-menu'); ?>
		</div>

		<div id="header-grid" class="grid-container">
			<div class="grid-x">
				<div class="small-10 small-offset-1 large-12 large-offset-0 show-for-medium-only">
					<?php get_template_part('template-parts/menus/dealers-tablet-menu'); ?>
				</div>
				<div class="small-10 small-offset-1 large-12 large-offset-0 show-for-large">
					<?php get_template_part('template-parts/menus/dealers-header-menu'); ?>
				</div>
			</div>
		</div>

		<div class="grid-container">
			<div class="grid-x">
				<div class="small-10 small-offset-1 medium-8 medium-offset-2 cell text-center">
					<h1 class="blue"><?php the_title(); ?></h1>
					<aside class="yellow-underline center"></aside>
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</section>

	<section class="support-programs" style="padding-top:0">
		<div class="grid-container">
			<div class="grid-x grid-margin-y">

			<?php if( have_rows('programs') ):
			    while ( have_rows('programs') ) : the_row(); ?>

				<div class="small-10 small-offset-1 medium-12 medium-offset-0 cell program" style="background: url(<?php the_sub_field('background_image'); ?>) center center / cover no-repeat">
					<div class="grid-x grid-margin-x">
						<div class="medium-8 medium-offset-1 large-6 cell">
							<img src="<?php the_sub_field('logo'); ?>" alt="<?php the_sub_field('logo_alt_text'); ?>">
							<p class="white"><?php the_sub_field('copy'); ?></p>
							<a href="<?php the_sub_field('button_link'); ?>"><button class="btn-yellow solid"><?php the_sub_field('button_text'); ?></button></a>
						</div>
					</div>
				</div>

			<?php endwhile;endif; ?>

			</div>
		</div>
	</section>

<?php 
endwhile;endif;
get_footer();