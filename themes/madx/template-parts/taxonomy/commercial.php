<?php 
$term = get_queried_object();
if ($term->slug == 'case-studies' || $term->slug == 'safety-security') {
	include( locate_template( '/template-parts/taxonomy/commercial/commercial-'.$term->slug.'.php', false, false ) );
}else{ ?>

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

	<section id="tax-posts" class="taxonomy-products">
		<div class="grid-container">

			<?php if($term->slug == 'solar') { ?>
			  <tax-term-posts></tax-term-posts>
			<?php }else if($term->slug == 'decorative') { ?>
				<div class="grid-x grid-margin-y">
					<div class="small-10 small-offset-1 large-12 large-offset-0 cell text-center">
						<h2 class="blue"><?php the_field('products_heading',$term); ?></h2>
						<aside class="yellow-underline center"></aside>
						<p class="subhead"></p>
					</div>
				</div>
				<decorative-posts></decorative-posts>
			<?php } ?>

		</div>
	</section>

<?php get_template_part('/template-parts/top-level-page/find-dealer'); ?>

<?php } ?>