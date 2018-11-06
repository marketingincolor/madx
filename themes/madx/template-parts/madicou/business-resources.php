<section class="business-resources">
	<div class="grid-container">
		<div class="grid-x">
			<div class="small-10 small-offset-1 large-12 large-offset-0 cell">
			<h3 class="section-h3">Employee Resources <a href="/madicou/business/employee" class="see-more">See More &nbsp;<i class="fal fa-long-arrow-right"></i></a></h3>
			</div>
			<div class="small-10 small-offset-1 large-12 large-offset-0 cell">
				<div class="grid-x grid-margin-x grid-margin-y">

					<?php
						$args = array(
							'post_type' => 'madicou',
							'posts_per_page' => 3,
							'tax_query' => array(
								array(
									'taxonomy' => 'madicou_taxonomies',
									'field'    => 'slug',
									'terms'    => 'employee',
								),
							),
						);
						$query = new WP_Query( $args );
						if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
					?>

					<div class="medium-6 large-4 cell module auto-height">
						<a href="#"><div class="module-bg small" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div></a>
						<div class="meta">
							<a href="#"><h4 class="blue"><?php the_title(); ?></h4></a>
							<?php the_content() ?>
							<a href="#" class="blue read-more">Read More &nbsp;<i class="fal fa-long-arrow-right"></i></a>
						</div>
					</div>

					<?php endwhile;endif;wp_reset_postdata(); ?>

				</div>
			</div>
		</div>
	</div>
</section>