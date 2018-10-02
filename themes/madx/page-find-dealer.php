<?php 
/* Template Name: Find Dealer */
get_header(); ?>

<section class="page-hero" style="background-image: url(<?php the_post_thumbnail_url($post->ID); ?>);">

	<div id="header-grid" class="grid-container">
		<div class="small-10 small-offset-1 large-12 large-offset-0">
		  <?php get_template_part('template-parts/menus/residential-header-menu'); ?>
		</div>
	</div>

	<div class="grid-container">
		<div class="grid-x">
			<div class="large-8 medium-10 small-offset-1 small-10 large-offset-0 cell">
				<h1 class="blue"><?php the_field('find_dealer_heading'); ?></h1>
				<aside class="yellow-underline left"></aside>
				<p class="subhead"><?php the_field('find_dealer_subhead'); ?></p>
			</div>
			<div class="small-10 small-offset-1 large-12 large-offset-0 cell">
				<div class="grid-x">
					<form action="" name="find-dealer-form">
						<fieldset>
					    <input name="type" value="auto" id="radio1" type="radio"><label for="radio1"><i class="fal fa-car"></i><br>Auto</label>
					    <input name="type" value="residential" id="radio2" type="radio"><label for="radio2"><i class="fal fa-home-heart"></i><br>Residential</label>
					    <input name="type" value="commercial" id="radio3" type="radio"><label for="radio3"><i class="fal fa-building"></i><br>Commercial</label>
					    <input name="type" value="safety" id="radio4" type="radio"><label for="radio4"><i class="fal fa-shield"></i><br>Safety</label>
					  </fieldset>
					  <br class="hide-for-large">
					  <fieldset class="radius-zip">
					  	<select name="radius">
				  	    <option value="25">Within 25 miles</option>
				  	    <option value="50">Within 50 miles</option>
				  	    <option value="75">Within 75 miles</option>
				  	    <option value="100">Within 100 miles</option>
				  	  </select>
				  	  <div class="zip">
				  	  	<input type="text" placeholder="Zip Code" name="zip">
				  	  	<button type="submit" class="btn-yellow solid"><i class="fas fa-caret-right"></i></button>
				  	  </div>
					  </fieldset>
					  <br class="hide-for-large">
					  <fieldset class="my-location">
					  	<a id="use-location" @click="findLocation" class="yellow"><i class="far fa-location-arrow yellow"></i> &nbsp;Use My Location</a>
					  </fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer();