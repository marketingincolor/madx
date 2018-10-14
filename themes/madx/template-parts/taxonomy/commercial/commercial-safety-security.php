<?php get_template_part('template-parts/menus/commercial-header-menu'); ?>

<section class="taxonomy-intro">
	<div class="grid-container">
		<div class="grid-x">
			<div class="large-8 small-10 small-offset-1 large-offset-2 cell text-center">
				<h1 class="blue"><?php the_field('intro_heading',$term); ?></h1>
				<aside class="yellow-underline center"></aside>
				<p class="subhead"><?php the_field('intro_subhead',$term); ?></p>
			</div>
		</div>
	</div>
</section>

<section class="film-type" style="padding-top: 5%">
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

<?php get_template_part('template-parts/top-level-page/find-dealer'); ?>
