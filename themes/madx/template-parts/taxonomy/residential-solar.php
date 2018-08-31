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

<section class="taxonomy-faqs">
	<div class="grid-container">
		<div class="grid-x">
			<div class="medium-10 large-8 medium-offset-1 large-offset-2 text-center">
				<h3 class="blue">FAQs</h3>
				<aside class="yellow-underline center"></aside>
				<p class="subhead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia neque, pariatur quam recusandae assumenda laudantium nostrum voluptate. Animi alias perspiciatis eum accusantium soluta</p>
			</div>
		</div>
		<div class="grid-x">
			<div class="medium-10 medium-offset-1 cell">
			  <div class="grid-x grid-margin-x grid-margin-y">

			  <!-- Query custom post type 'faq' filtered by taxonomy faq_taxonomies -->
				<?php
					$args = array(
						'post_type' => 'faq',
						'tax_query' => array(
							array(
								'taxonomy' => 'faq_taxonomies',
								'field'    => 'slug',
								'terms'    => 'residential',
							),
						),
					);
					$query = new WP_Query( $args );
					while ( $query->have_posts() ) : $query->the_post();
				?>
				
				<div class="medium-6 cell">
					<h5><?php the_title(); ?></h5>
					<?php the_content(); ?>
				</div>
				
				<?php endwhile; wp_reset_postdata(); ?>
					
				</div>
			</div>
		</div>
	</div>
</section>

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