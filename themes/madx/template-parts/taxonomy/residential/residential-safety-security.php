<?php get_template_part('template-parts/menus/residential-header-menu'); ?>

<section class="taxonomy-intro">
	<div class="grid-container">
		<div class="grid-x">
			<div class="large-8 small-10 small-offset-1 large-offset-2 cell text-center">
				<h1 class="blue"><?php the_field('intro_heading',$term); ?></h1>
				<aside class="yellow-underline center"></aside>
				<p class="subhead"><?php the_field('intro_subhead',$term); ?></p>
			</div>
		</div>
		<div class="grid-x">
					
			<?php get_template_part('template-parts/taxonomy/benefits'); ?>

		</div>
	</div>
</section>

<section class="film-type">
	<div class="grid-container">
		<div class="grid-x">
			<div class="medium-8 large-6 medium-offset-2 large-offset-3 cell text-center">
				<h2 class="blue"><?php the_field('safety_film_heading',$term); ?></h2>
				<aside class="yellow-underline center"></aside>
				<p class="subhead"><?php the_field('safety_film_subhead',$term); ?></p>
			</div>
		</div>
	</div>
	<div class="grid-container">
		<div class="grid-x">
			<div class="small-10 small-offset-1 large-8 large-offset-2">
				<div class="grid-x grid-margin-x grid-margin-y">

					<?php
					if( have_rows('safety_film_types',$term) ):
					  while ( have_rows('safety_film_types',$term) ) : the_row(); ?>

					<div class="medium-6 cell module auto-height text-center">
						<a href="<?php the_sub_field('safety_film_link',$term); ?>"><div class="module-bg" style="background-image: url(<?php the_sub_field('safety_film_image',$term); ?>)"></div></a>
						<div class="meta">
							<a href="<?php the_sub_field('safety_film_link',$term); ?>"><h4 class="blue"><?php the_sub_field('safety_film_title',$term); ?></h4></a>
							<p class="content"><?php the_sub_field('safety_film_content',$term); ?></p>
							<a href="<?php the_sub_field('safety_film_link',$term); ?>"><button class="btn-yellow border"><?php the_sub_field('safety_film_button_text',$term); ?></button></a>
						</div>
					</div>

					<?php endwhile;endif; ?>

				</div>
			</div>
		</div>
	</div>
</section>

<?php get_template_part('/template-parts/taxonomy/faqs'); ?>
