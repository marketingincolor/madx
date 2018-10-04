<?php 
/* Template Name: Find Dealer */
get_header(); ?>

<section class="page-hero" style="background-image: url(<?php the_post_thumbnail_url($post->ID); ?>);">

	<div id="header-grid" class="grid-container">
		<div class="small-10 small-offset-1 large-12 large-offset-0">
		  <?php get_template_part('template-parts/menus/residential-header-menu'); ?>
		</div>
	</div>

	<div class="grid-container">
		<div class="grid-x">
			<div class="large-8 medium-10 small-offset-1 small-10 large-offset-0 cell">
				<h1 class="blue"><?php the_field('find_dealer_heading'); ?></h1>
				<aside class="yellow-underline left"></aside>
				<p class="subhead"><?php the_field('find_dealer_subhead'); ?></p>
			</div>
			<div class="small-10 small-offset-1 large-12 large-offset-0 cell">
				<div class="grid-x">
					
					<find-dealer-page></find-dealer-page>

				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer();