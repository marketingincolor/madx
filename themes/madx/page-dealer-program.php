<?php 
/* Template Name: Dealer Program */
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
				<h1 class="blue"><?php the_field('intro_heading'); ?></h1>
				<aside class="yellow-underline center"></aside>
				<p><?php the_field('intro_subhead'); ?></p>
			</div>
		</div>
	</div>
</section>

<section class="program-hero" style="background:url(<?php the_field('program_hero_image'); ?>) center center / cover no-repeat">
	<div class="grid-container">
		<div class="grid-x grid-margin-y">
			<div class="small-10 small-offset-1 cell">
				<div class="grid-x grid-margin-x">
					<div class="medium-8 medium-offset-1 large-6 cell">
						<img src="<?php the_field('hero_program_logo'); ?>" alt="<?php the_field('logo_alt_text'); ?>">
						<p class="white"><?php the_field('hero_program_copy'); ?></p>
						<a href="<?php the_field('hero_program_button_link'); ?>"><button class="btn-yellow solid"><?php the_field('hero_program_button_text'); ?></button></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="about-types">
	<div class="grid-container">
	  <div class="grid-x grid-margin-x grid-margin-y">
			<div class="small-10 small-offset-1 medium-8 medium-offset-2 text-center">
				<h2 class="blue"><?php the_field('benefits_heading'); ?></h2>
				<aside class="yellow-underline center"></aside>
				<p class="subhead"><?php the_field('benefits_subhead'); ?></p></a>
			</div>
			<div class="small-10 small-offset-1 cell">
				<div class="grid-x grid-margin-x grid-margin-y">
					
					<?php

					// check if the repeater field has rows of data
					if( have_rows('program_benefits') ):
					  while ( have_rows('program_benefits') ) : the_row(); ?>
							
						<div class="medium-6 cell">
							<?php the_sub_field('icon'); ?>
							<h5 class="blue"><?php the_sub_field('heading'); ?></h5>
							<p><?php the_sub_field('subhead'); ?></p>
						</div>

					<?php endwhile;endif; ?>
					
				</div>
			</div>
		</div>
	</div>
</section>

<section class="cta-section" style="background-color: <?php the_field('cta_background'); ?>">
	<div class="grid-container">
		<div class="grid-x">
			<div class="large-8 small-10 small-offset-1 large-offset-2 cell text-center">
				<h2 class="white"><?php the_field('cta_heading'); ?></h2>
				<aside class="yellow-underline center"></aside>
				<p class="white"><?php the_field('cta_subhead'); ?></p>
			</div>
		</div>
	</div>
</section>

<section class="contact" id="contact">
	<div class="grid-container">
		<div class="grid-x">
			<div class="small-10 small-offset-1 cell content-block">
				<div class="meta">
					<h4 class="blue"><?php the_field('contact_form_heading'); ?></h4>
					<p class="subhead"><?php the_field('contact_form_subhead'); ?></p>
				</div>
				<div><?php the_field('contact_form_shortcode'); ?></div>
			</div>
		</div>
	</div>
</section>

<?php 
endwhile;endif;
get_footer();