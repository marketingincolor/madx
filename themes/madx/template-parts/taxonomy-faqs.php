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
								'terms'    => get_post_type($post->ID),
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