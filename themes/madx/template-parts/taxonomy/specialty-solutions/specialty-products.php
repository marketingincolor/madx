<?php get_template_part('template-parts/menus/specialty-header-menu'); ?>

<section class="taxonomy-intro">
	<div class="grid-container">
		<div class="grid-x">
			<div class="large-8 medium-10 medium-offset-1 large-offset-2 cell text-center">
				<h1 class="blue"><?php the_field('intro_heading',$term); ?></h1>
				<aside class="yellow-underline center"></aside>
			</div>
		</div>
		<section class="taxonomy-products">
			
			<specialty-products></specialty-products>

		</section>
	</div>
</section>