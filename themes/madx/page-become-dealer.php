<?php 
/* Template Name: Become Dealer */
get_header(); ?>

<div class="show-for-small-only" style="margin-bottom:40px">
	<?php get_template_part('template-parts/menus/dealers-header-menu'); ?>
</div>

<div class="grid-container" style="margin-bottom:40px">
	<div class="grid-x">
		<div class="small-10 small-offset-1 large-12 large-offset-0 show-for-medium-only">
			<?php get_template_part('template-parts/menus/dealers-tablet-menu'); ?>
		</div>
		<div class="small-10 small-offset-1 large-12 large-offset-0 show-for-large">
			<?php get_template_part('template-parts/menus/dealers-header-menu'); ?>
		</div>
	</div>
</div>

<section class="taxonomy-intro">
	<div class="grid-container" style="margin-bottom:40px">
		<div class="grid-x">
			<div class="small-10 small-offset-1 large-8 large-offset-2 text-center">
				<h1 class="blue"><?php the_field('intro_heading'); ?></h1>
				<aside class="yellow-underline center"></aside>
				<p><?php the_field('intro_subhead'); ?></p>
			</div>
		</div>
	</div>
</section>

<section class="dealer-intro">
	<div class="grid-container">
		<div class="grid-x">
			<div class="small-10 small-offset-1 large-12 large-offset-0 cell">
				<div class="grid-x grid-margin-x grid-margin-y align-middle">
					<div class="medium-6 cell">
						<?php $image = get_field('dealer_intro_image'); ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
					</div>
					<div class="medium-6 cell">
						<h4><?php the_field('dealer_intro_heading'); ?></h4>
						<p class="white"><?php the_field('dealer_intro_subhead'); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="about-types">
	<div class="grid-container">
	  <div class="grid-x grid-margin-x grid-margin-y">
			<div class="small-10 small-offset-1 medium-8 medium-offset-2 text-center">
				<h2 class="blue"><?php the_field('benefits_heading'); ?></h2>
				<aside class="yellow-underline center"></aside>
				<p class="subhead"><?php the_field('benefits_subhead'); ?></p></a>
			</div>
			<div class="small-10 small-offset-1 cell">
				<div class="grid-x grid-margin-x grid-margin-y">
					
					<?php

					// check if the repeater field has rows of data
					if( have_rows('program_benefits') ):
					  while ( have_rows('program_benefits') ) : the_row(); ?>
							
						<div class="medium-6 cell">
							<?php the_sub_field('icon'); ?>
							<h5 class="blue"><?php the_sub_field('heading'); ?></h5>
							<p><?php the_sub_field('subhead'); ?></p>
						</div>

					<?php endwhile;endif; ?>
					
				</div>
			</div>
		</div>
	</div>
</section>

<section class="dealer-testimonials" style="background:url(<?php the_field('testimonial_background_image'); ?>) center center / cover no-repeat">
	<div class="grid-container">
		<div class="grid-x">
			<div class="small-10 small-offset-1 large-12 large-offset-0 cell">
				<h2 class="white"><?php the_field('testimonial_heading'); ?></h2>
				<aside class="yellow-underline left"></aside>
				<!-- testimonial loop starts here -->
				<?php
				$args = array(
					'post_type'      => 'testimonials',
					'posts_per_page' => 1,
					'order'          => 'ASC',
					'orderby'        => 'rand',
					'tax_query'      => array(
						array(
							'taxonomy' => 'testimonials_taxonomies',
							'field'    => 'slug',
							'terms'    => 'dealers',
						),
					),
				);
				$query = new WP_Query( $args );
				while ( $query->have_posts() ) : $query->the_post();
				?>

				<div class="content"><?php the_content(); ?></div>
				<address class="name white">
					<strong><?php the_field('testimonial_name'); ?></strong>
				</address>
				<address class="location white">
					<?php the_field('testimonial_location'); ?>
			    </address>

			    <?php endwhile;wp_reset_postdata(); ?>

			</div>
		</div>
	</div>
</section>

<section class="distribution-network">
	<div class="grid-container">
		<div class="grid-x">
			<div class="large-10 large-offset-1 cell">
				<?php $image = get_field('distribution_image'); ?>
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
			</div>
			<div class="small-10 small-offset-1 large-8 large-offset-2 cell text-center">
				<h2 class="blue"><?php the_field('distribution_heading'); ?></h2>
				<aside class="yellow-underline center"></aside>
				<p><?php the_field('distribution_subhead'); ?></p>
			</div>
		</div>
	</div>
</section>

<section class="cta-section" style="background-color: <?php the_field('cta_background'); ?>">
	<div class="grid-container">
		<div class="grid-x">
			<div class="large-8 small-10 small-offset-1 large-offset-2 cell text-center">
				<h2 class="white"><?php the_field('cta_heading'); ?></h2>
				<aside class="yellow-underline center"></aside>
				<p class="white"><?php the_field('cta_subhead'); ?></p>
			</div>
		</div>
	</div>
</section>

<section class="contact" id="contact">
	<div class="grid-container">
		<div class="grid-x">
			<div class="small-10 small-offset-1 cell content-block">
				<div class="meta">
					<h4 class="blue"><?php the_field('contact_form_heading'); ?></h4>
					<p class="subhead"><?php the_field('contact_form_subhead'); ?></p>
				</div>
				<div><?php the_field('contact_form_shortcode'); ?></div>
			</div>
		</div>
	</div>
</section>

<?php get_footer();