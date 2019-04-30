<section class="sales-resources">
	<div class="grid-container">
		<div class="grid-x">
			<!-- Need to update this stuff to not be hardcoded -->
			<div class="small-10 small-offset-1 large-12 large-offset-0 cell">
			<h3 class="section-h3">Sales Resources <a href="/madicou/business/sales" class="see-more">See More &nbsp;<i class="fal fa-long-arrow-right"></i></a></h3>
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
									'terms'    => 'sales',
								),
							),
						);
						$query = new WP_Query( $args );
						if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
							$post_link = get_the_permalink();
							if (has_post_format('video')) {
								$video_url = get_field('video_url'); // Requires ACF Field for 'video_url'
								$video_meta = get_field('video_meta'); // Requires ACF Field for 'video_meta'
								$video_file = get_field('video_attachment'); // Requires ACF Field for 'video_meta'
								$post_link = '#!'; // Change post_link if it's a video
							}
							$title_lower  = strtolower(get_the_title());
							$title_split  = explode(' ', $title_lower);
							$title_joined = implode('-', $title_split);
					?>

					<div class="medium-6 large-4 cell module auto-height">
						<div class="image-link">
						  <a href="<?php the_permalink(); ?>" class="videolink" ><div class="module-bg small madicou-modal-image-<?php echo $title_joined; ?>" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div></a>
						</div>
						<div class="meta">
							<a href="<?php the_permalink(); ?>" class="videolink" ><h4 class="blue madicou-modal-heading-<?php echo $title_joined; ?>"><?php the_title(); ?></h4></a>
							<div class="content"><?php echo wp_trim_words(get_the_content(),25,'...'); ?></div>
							<?php if(has_post_format('video')) { ?>
								<p><i class="fal fa-clock"></i> &nbsp;<?php echo $video_meta; ?></p>
                <p><a href="<?php the_permalink(); ?>" class="blue read-more madicou-modal-read-more-<?php echo $title_joined; ?>">Watch Video &nbsp;<i class="fal fa-long-arrow-right"></i></a></p>
							<?php }else{ ?>
							  <p><a href="<?php the_permalink(); ?>" class="blue read-more madicou-modal-read-more-<?php echo $title_joined; ?>">Learn More &nbsp;<i class="fal fa-long-arrow-right"></i></a></p>
						  <?php } ?>
						</div>
					</div>

					<?php endwhile;endif;wp_reset_postdata(); ?>

				</div>
			</div>
		</div>
	</div>
</section>