<?php 
$term = get_queried_object();
if ($term->slug == 'case-studies' || $term->slug == 'products') {
	include( locate_template( '/template-parts/taxonomy/specialty-solutions/specialty-'.$term->slug.'.php', false, false ) );
}else{ ?>
	
<div class="show-for-small-only">
	<?php get_template_part('template-parts/menus/specialty-header-menu'); ?>
</div>

<div class="grid-container">
	<div class="grid-x">
		<div class="small-10 small-offset-1 large-12 large-offset-0 show-for-medium-only">
			<?php get_template_part('template-parts/menus/specialty-tablet-menu'); ?>
		</div>
		<div class="small-10 small-offset-1 large-12 large-offset-0 show-for-large">
			<?php get_template_part('template-parts/menus/specialty-header-menu'); ?>
		</div>
	</div>
</div>

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

			<specialty-industries></specialty-industries>

		</div>
	</div>
</section>

<?php } ?>
<?php get_template_part('template-parts/taxonomy/specialty-solutions/contact'); ?>
