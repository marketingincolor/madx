<?php get_template_part('template-parts/menus/residential-header-menu'); ?>
<?php $term = get_queried_object(); ?>

<section class="taxonomy-intro">
	<div class="grid-container">
		<div class="grid-x">
			<div class="large-8 medium-10 medium-offset-1 large-offset-2 cell text-center">
				<h1 class="blue"><?php the_field('intro_heading',$term); ?></h1>
				<aside class="yellow-underline center"></aside>
				<p class="subhead"><?php the_field('intro_subhead',$term); ?></p>
			</div>
		</div>
		<div class="grid-x grid-margin-x grid-margin-y">

			<?php get_template_part('template-parts/taxonomy/benefits'); ?>

		</div>
	</div>
</section>

<section class="taxonomy-products">
	<div class="grid-container">
		<div class="grid-x">
			<div class="medium-10 large-8 medium-offset-1 large-offset-2 text-center">
				<h3 class="blue"><?php the_field('products_heading',$term); ?></h3>
				<aside class="yellow-underline center"></aside>
				<p class="subhead"><?php the_field('products_subhead',$term); ?></p>
			</div>
		</div>

		<tax-term-posts></tax-term-posts>

	</div>
</section>

<?php get_template_part('/template-parts/taxonomy/faqs'); ?>

<?php get_template_part('/template-parts/taxonomy/find-film'); ?>

<?php get_template_part('/template-parts/top-level-page/find-dealer'); ?>