	<?php while ( $query->have_posts() ) : $query->the_post(); ?>
	
		<div class="small-12 medium-6 medium-offset-0 large-4 cell module auto-height">
			<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
			<div class="meta">
				<div class="grid-x grid-margin-x grid-margin-y">
					<div class="medium-10 medium-offset-1 cell">
						<h4 class="blue"><?php the_title(); ?></h4>
						<div class="content"><?php the_content(); ?></div>

						<?php if (get_field('pdf_link')) { ?>

							<div class="grid-x grid-margin-y grid-margin-x" style="margin-bottom: 20px">
								<div class="small-2 cell text-center">
									<i class="fal fa-file-pdf blue" style="font-size: 2.5rem"></i>
								</div>
								<div class="small-10 cell">
									<a href="<?php the_field('pdf_link'); ?>" target="_blank"><?php _e( 'Product Brochure', 'madx' ); ?></a>
									<p><?php _e( 'Click to download', 'madx' ); ?></p>
								</div>
							</div>

						<?php }if (get_field('spec_sheet')) { ?>

							<div class="grid-x grid-margin-y grid-margin-x" style="margin-bottom: 20px">
								<div class="small-2 cell text-center">
									<i class="fal fa-file-pdf blue" style="font-size: 2.5rem"></i>
								</div>
								<div class="small-10 cell">
									<a href="<?php the_field('spec_sheet'); ?>" target="_blank"><?php _e( 'Solar Performance Specifications', 'madx' ); ?></a>
									<p><?php _e( 'Click to download', 'madx' ); ?></p>
								</div>
							</div>

							<?php } ?>

					</div>
				</div>
			</div>
		</div>

  <?php endwhile; wp_reset_postdata(); ?>