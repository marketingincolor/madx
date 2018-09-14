<?php 
/* Template Name: Find Dealer */
get_header(); ?>

<section class="page-hero" style="background-image: url(<?php the_post_thumbnail_url($post->ID); ?>);">

	<?php get_template_part('template-parts/menus/residential-header-menu'); ?>


	<div class="grid-container">
		<div class="grid-x">
			<div class="large-8 medium-10 cell">
				<h1 class="blue"><?php the_field('find_dealer_heading'); ?></h1>
				<aside class="yellow-underline left"></aside>
				<p class="subhead"><?php the_field('find_dealer_subhead'); ?></p>
				<form action="">
					<ul>
						<fieldset class="large-7 cell">
					    <legend>Check these out</legend>
					    <input name="type" value="auto" id="radio1" type="radio"><label for="radio1"><i class="fal fa-car"></i><br>Auto</label>
					    <input name="type" value="residential" id="radio2" type="radio"><label for="radio2"><i class="fal fa-home-heart"></i><br>Residential</label>
					    <input name="type" value="commercial" id="radio3" type="radio"><label for="radio3"><i class="fal fa-building"></i><br>Commercial</label>
					    <input name="type" value="safety" id="radio4" type="radio"><label for="radio4"><i class="fal fa-shield"></i><br>Safety</label>
					  </fieldset>
					</ul>
				</form>
			</div>
		</div>
	</div>
</section>

<?php get_footer();