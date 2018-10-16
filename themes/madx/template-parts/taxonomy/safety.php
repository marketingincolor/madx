<?php 

	get_template_part('template-parts/menus/safety-header-menu');
	$term = get_queried_object();

	if ($term->slug == 'case-studies') {
	  include( locate_template( '/template-parts/taxonomy/safety-security/safety-'.$term->slug.'.php', false, false ) );
	  get_template_part('/template-parts/top-level-page/find-dealer');
	}else{
?>

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

<section id="tax-posts" class="taxonomy-products" style="padding-top: 0">
	<div class="grid-container">
		<div class="grid-x">
			<div class="small-10 large-8 small-offset-1 large-offset-2 text-center">
				<h3 class="blue"><?php the_field('products_heading',$term); ?></h3>
				<aside class="yellow-underline center"></aside>
				<p class="subhead"><?php the_field('products_subhead',$term); ?></p>
			</div>
		</div>

			<safety-posts></safety-posts>

	</div>
</section>

<?php get_template_part('/template-parts/taxonomy/find-dealer-safetyshield'); ?>

<?php } ?>