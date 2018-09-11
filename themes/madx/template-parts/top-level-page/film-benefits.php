<section class="benefits">
	<div class="grid-container">
		<div class="grid-x">
			<div class="medium-8 large-6 medium-offset-2 large-offset-3 cell text-center">
				<h3 class="blue"><?php the_field('page_benefits_heading'); ?></h3>
				<aside class="yellow-underline center"></aside>
				<p class="subhead"><?php the_field('page_benefits_subhead'); ?></p>
			</div>
		</div>
		<div class="grid-x grid-margin-x grid-margin-y">
			
			<?php
			  $slug = get_post_field( 'post_name', get_post() );
				$args = array(
					'post_type' => 'benefits',
					'tax_query' => array(
						array(
							'taxonomy'         => 'benefits_taxonomies',
							'field'            => 'slug',
							'terms'            => $slug,
							'include_children' => false
						),
					),
				);
				$query = new WP_Query( $args );
				while ( $query->have_posts() ) : $query->the_post();
			?>

			<div class="medium-4 cell text-center">
				<?php the_field('benefit_icon'); ?>
				<h5 class="blue"><?php the_title(); ?></h5>
				<?php the_content(); ?>
			</div>

			<?php endwhile; wp_reset_postdata(); ?>

		</div>
	</div>
</section>