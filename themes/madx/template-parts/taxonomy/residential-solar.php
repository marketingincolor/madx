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
			<div class="medium-4 cell text-center">
				<i class="far fa-sun yellow"></i>
				<h5 class="blue">Improve Safety</h5>
				<p>Increase your family's safety with solar control film, which blocks 99% of the sun's harmful UV rays</p>
			</div>
			<div class="medium-4 cell text-center">
				<i class="far fa-sun yellow"></i>
				<h5 class="blue">Save Money</h5>
				<p>Solar control film cuts down heat in the summer and reflects it back into your home in the winter, reducing your energy bills</p>
			</div>
			<div class="medium-4 cell text-center">
				<i class="far fa-sun yellow"></i>
				<h5 class="blue">Control Glare</h5>
				<p>Reduce annoying glare that penetrates through windows, and improve visibility on TV and devices with solar control film</p>
			</div>
			<div class="medium-4 cell text-center">
				<i class="far fa-sun yellow"></i>
				<h5 class="blue">Prevent Fading</h5>
				<p>Constant exposure to the sun can speed up the fading of your floors, upholstery, and home furnishings &mdash; solar control film deters it</p>
			</div>
			<div class="medium-4 cell text-center">
				<i class="far fa-sun yellow"></i>
				<h5 class="blue">Accent Looks</h5>
				<p>Solar control film is available in many shades and hues, so you can enhance your home's look with your personal style</p>
			</div>
			<div class="medium-4 cell text-center">
				<i class="far fa-sun yellow"></i>
				<h5 class="blue">Improve Privacy</h5>
				<p>In addition to offering protection, solar control film can improve privacy during the day, preventing outsiders from looking in</p>
			</div>
		</div>
	</div>
</section>

<section class="taxonomy-products">
	<div class="grid-container">
		<div class="grid-x grid-margin-x">
			<div class="medium-10 large-8 medium-offset-1 large-offset-2 text-center">
				<h3 class="blue">Our Solar Control Films</h3>
				<aside class="yellow-underline center"></aside>
				<p class="subhead">Our films were developed to add safety, savings, and privacy, as well as beautify the appearance of your home.</p>
			</div>
		</div>
		<div class="grid-x grid-margin-x">
			<div class="medium-3 cell">

				<?php
					$current_term      = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
					$current_term_name = $current_term->name;
					$term_children     = get_terms(
				    array(
				    	'taxonomy'   => get_post_type().'_taxonomies',
				    	'parent'     => get_queried_object_id(),
				    	'hide_empty' => false
				    )
					);
				 ?>

				<ul id="tax-menu" class="tax-menu vertical menu">
						
					<li v-for="taxonomy in taxonomies" v-bind:class="{active: (activeItem == taxonomy.name)}"><a href="#!" @click="activeItem = taxonomy.name;getTaxPosts()">{{ taxonomy.name }}</a></li>

				</ul>
			</div>
			<div class="medium-9 cell">
				<div class="grid-x">
					<div class="medium-12 cell breadcrumbs">
						<a href="#">{{ taxParentSlug }}</a> > <a href="#" id="bread-child">{{ activeItem }}</a>
						<h3>Neutral</h3>
					</div>
					<div class="medium-4 cell" v-for="post in taxPosts">
						<img :src="post._embedded['wp:featuredmedia'][0].source_url" :alt="post.title.rendered">
						<h4>{{ post.title.rendered }}</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>