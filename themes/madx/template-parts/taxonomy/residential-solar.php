<?php get_template_part('template-parts/menus/residential-header-menu'); ?>

<section class="taxonomy-intro">
	<div class="grid-container">
		<div class="grid-x">
			<div class="large-8 medium-10 medium-offset-1 large-offset-2 cell text-center">
				<h1 class="blue">Protect Your Family and Your Furnishings With Solar Control Film</h1>
				<aside class="yellow-underline center"></aside>
				<p class="subhead">We all know that repeated exposure to ultraviolet rays (UV) outdoors can lead to premature aging of the skin and skin cancer. But did you know that UV rays also travel through windows, causing you to be further exposed inside your home? Now you can get immediate protection with solar control film.</p>
			</div>
		</div>
		<div class="grid-x grid-margin-x grid-margin-y">

			<?php get_template_part('template-parts/taxonomy-benefits'); ?>

		</div>
	</div>
</section>

<section class="taxonomy-products">
	<div class="grid-container">
		<div class="grid-x">
			<div class="medium-10 large-8 medium-offset-1 large-offset-2 text-center">
				<h3 class="blue">Our Solar Control Films</h3>
				<aside class="yellow-underline center"></aside>
				<p class="subhead">Our films were developed to add safety, savings, and privacy, as well as beautify the appearance of your home.</p>
			</div>
		</div>

		<tax-term-posts></tax-term-posts>

	</div>
</section>

<?php get_template_part('/template-parts/taxonomy-faqs'); ?>

<section class="film-selector">
	<div class="grid-container">
		<div class="grid-x grid-margin-x">
			<div class="medium-2 medium-offset-1 cell">
				<i class="fal fa-clipboard-check"></i>
			</div>
			<div class="medium-8 cell">
				<h3 class="white">Find the film that's right for you!</h3>
				<p class="white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci modi ut quam ipsa quo, esse, autem debitis tempore aperiam tenetur odio!</p>
				<a href="#" class="btn-blue solid">View Film Selector &nbsp;<i class="fas fa-arrow-alt-right"></i></a>
			</div>
		</div>
	</div>
</section>

<?php get_template_part('/template-parts/find-dealer'); ?>