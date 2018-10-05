<?php 
/* Template Name: Madico U */
get_header('madicou'); ?>

<?php if (is_page('madicou')) { ?> 
	<section class="page-hero madicou-hero" style="background-image: url(<?php the_field('madicou_hero_background_image'); ?>);">
		<div class="grid-container">
			<div class="grid-x">
				<div class="medium-10 medium-offset-1 cell text-center">
					<h1 class="blue">Logo</h1>
					<aside class="yellow-underline center"></aside>
					<?php get_template_part('template-parts/search/page-searchform'); ?>
				</div>
			</div>
		</div>
	</section>
<?php } else { ?>
	<section class="madicou-search">
		<div class="grid-container">
			<div class="grid-x">
				<div class="medium-10 medium-offset-1 cell text-center">
					<h1 class="blue">Logo</h1>
					<aside class="yellow-underline center"></aside>
					<?php get_template_part('template-parts/search/page-searchform'); ?>
				</div>
			</div>
		</div>
	</section>
<?php } ?>

<?php get_template_part('template-parts/menus/madico-u'); ?>

<?php if (is_page('madicou')) { ?> 
	<?php get_template_part('template-parts/madicou/virtual-campus') ?>

	<?php get_template_part('template-parts/madicou/business-resources') ?>

	<?php get_template_part('template-parts/madicou/marketing-resources') ?>

	<?php get_template_part('template-parts/madicou/sales-resources') ?>
<?php } else { ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<section>
			<div class="grid-container">
				<div class="grid-x">
					<div class="small-10 small-offset-1 medium-8 large-offset-0 cell">
						<h1 class="blue"><?php the_title(); ?></h1>
						<aside class="yellow-underline left"></aside>
						<p class="subhead"><?php the_content(); ?></p>
					</div>
				</div>
			</div>
		</section>
	<?php endwhile;endif; ?>

<?php } ?>

<?php get_footer('madicou'); //needs custom MadicoU footer