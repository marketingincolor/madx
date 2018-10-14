<section class="film-tips">
	<div class="grid-container">
		<div class="grid-x">
			<div class="small-10 small-offset-1 medium-6 large-6 medium-offset-3 large-offset-3 cell text-center">
				<h2 class="blue"><?php the_field('film_tips_heading'); ?></h2>
				<aside class="yellow-underline center"></aside>
				<p class="subhead"><?php the_field('film_tips_subhead'); ?></p>
			</div>
		</div>

		<?php
		  $current_url = $_SERVER[REQUEST_URI];
		  if (strpos($current_url, 'auto') !== false) {
		      $category = 'auto';
		  }if (strpos($current_url, 'commercial') !== false) {
		      $category = 'commercial';
		  }if (strpos($current_url, 'residential') !== false) {
		      $category = 'residential';
		  }
		?>

		<div class="grid-x">
			<div class="small-10 small-offset-1 large-12 large-offset-0">
				<div class="grid-x grid-margin-x grid-margin-y">

						<?php
							$args = array(
								'post_type'      => 'post',
								'posts_per_page' => 3,
								'category_name'  => $category,
							);
							$query = new WP_Query( $args );
							while ( $query->have_posts() ) : $query->the_post();
						?>

					<div class="medium-4 cell module auto-height">
						<a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"></a>
						<div class="meta">
							<a href="<?php the_permalink(); ?>"><h4 class="blue"><?php the_title(); ?></h4></a>
							<a href="<?php the_permalink(); ?>" class="blue read-more">Read More &nbsp;<i class="fal fa-long-arrow-right"></i></a>
						</div>
					</div>

				<?php endwhile;wp_reset_postdata(); ?>
					
				</div>
			</div>
		</div>
	</div>
</section>