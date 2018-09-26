<section class="page-hero" style="background-image: url(<?php the_field('into_background_image',$term); ?>);">

	<?php get_template_part('template-parts/menus/residential-header-menu'); ?>

	<div class="grid-container">
		<div class="grid-x">
			<div class="small-10 small-offset-1 cell text-center">
				<h1 class="blue"><?php the_field('intro_heading',$term); ?></h1>
				<aside class="yellow-underline center"></aside>
				<p class="subhead"><?php the_field('intro_subhead',$term); ?></p>
				<a href="<?php the_field('intro_button_link',$term); ?>" class="btn-yellow solid"><?php the_field('intro_button_text',$term); ?></a>
			</div>
		</div>
	</div>
</section>

<section class="taxonomy-benefits">
	<div class="grid-container">
		<div class="grid-x">
			<div class="large-8 small-10 small-offset-1 large-offset-2 cell text-center">
				<h2 class="blue"><?php the_field('taxonomy_benefits_intro',$term); ?></h2>
				<aside class="yellow-underline center"></aside>
				<p class="subhead"><?php the_field('taxonomy_benefits_subhead',$term); ?></p>
			</div>

			<?php get_template_part('template-parts/taxonomy/residential/safety-security-benefits'); ?>

		</div>
	</div>
</section>

<section class="film-type">
	<div class="grid-container">
		<div class="grid-x">
			<div class="medium-8 large-6 medium-offset-2 large-offset-3 cell text-center">
				<h3 class="blue"><?php the_field('safety_film_heading',$term); ?></h3>
				<aside class="yellow-underline center"></aside>
				<p class="subhead"><?php the_field('safety_film_subhead',$term); ?></p>
			</div>
		</div>
	</div>
	<div class="grid-container">
		
		<safety-film-types></safety-film-types>
		
	</div>
</section>

<section class="warranty" style="background-image: url(<?php the_field('warranty_background_image',47); ?>)">
	<div class="grid-container">
		<div class="grid-x">
			<div class="medium-6 medium-offset-6 small-10 small-offset-1 cell text-right">
				<h2 class="white"><?php the_field('warranty_heading',47); ?></h2>
				<aside class="yellow-underline right"></aside>
				<p class="white"><?php the_field('warranty_subhead',47); ?></p>
			</div>
		</div>
	</div>
</section>