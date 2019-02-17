<?php
/* Template Name: Recognized Dealers */
get_header(); ?>

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

	<div class="grid-container" style="padding-bottom:0">
		<div class="grid-x">
			<div class="small-10 small-offset-1 medium-8 medium-offset-2 cell text-center">
				<h1 class="blue"><?php the_title(); ?></h1>
				<aside class="yellow-underline center"></aside>
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</section>

<section class="dealer-list">
	<div class="grid-container">
		<div class="grid-x">
			<div class="small-10 small-offset-1 large-12 large-offset-0 cell">
				<div class="grid-x grid-margin-x grid-margin-y">

					<?php if( have_rows('dealer_list') ):
					    while ( have_rows('dealer_list') ) : the_row(); ?>

						<div class="small-12 cell" style="margin-bottom:0">
							<h2 class="year"><?php the_sub_field('year'); ?></h2>
						</div>

						<?php if( have_rows('dealers') ):
						    while ( have_rows('dealers') ) : the_row(); ?>

							<div class="medium-6 large-4 cell module auto-height">
								<div class="module-bg small" style="background-image: url(<?php the_sub_field('dealer_image'); ?>)"></div>
								<div class="meta">
									<h6 class="award"><?php the_sub_field('award_name'); ?></h6>
									<h4 class="blue"><?php the_sub_field('dealer_name'); ?></h4>
									<p><?php the_sub_field('dealer_bio'); ?></p>
								</div>
							</div>

						<?php endwhile;endif; ?>

					<?php endwhile;endif; ?>

				</div>
			</div>
		</div>
	</div>
</section>



<?php 
get_footer();