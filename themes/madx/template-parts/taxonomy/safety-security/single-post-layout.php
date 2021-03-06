	<?php while ( $query->have_posts() ) : $query->the_post(); ?>
	
		<div id="single-post" class="small-12 medium-10 medium-offset-1 cell module auto-height">
			<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" style="margin-bottom:0">

			<?php if(get_field('testing_content',$term)) { ?>

			<div id="testing" class="testing relative">
				<p class="learn-more white text-center absolute" @click="testingSlideDown"><span class="white">Learn More</span><br><i class="far fa-chevron-down"></i></p>
				<div class="grid-x grid-margin-x grid-margin-y">
					<div class="medium-2 large-1 large-offset-1 cell show-for-large text-right">
						<img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/testing-icon.svg" alt="window film testing regulations">
					</div>
					<div class="medium-12 large-9 cell">
						<h4 class="white"><?php the_field('testing_title',$term); ?></h4>
						<div id="testing-content" class="testing-content"><?php the_field('testing_content',$term); ?></div>
					</div>
				</div>
			</div>

			<?php } ?>

			<div class="meta">
				<div class="grid-x grid-margin-x grid-margin-y">
					<div class="medium-12 large-10 large-offset-1 cell">
						<h4 class="blue"><?php the_title(); ?></h4>
						<div class="content"><?php the_content(); ?></div>

						<?php if(get_field('anchoring_systems',$term)) { ?>

							<ul class="tabs" id="safety-tabs" v-tabs>
								<?php
								$tab_title_count = 0;
								if( have_rows('anchoring_systems',$term) ):
								  while ( have_rows('anchoring_systems',$term) ) : the_row(); ?>

								    <li class="tabs-title <?php if($tab_title_count == 0){ echo 'is-active';} ?>">
								    	<a href="#<?php echo 'tab'.$tab_title_count; ?>" @click="openDistributionTab"><?php the_sub_field('anchor_title'); ?></a>
								    </li>

								<?php $tab_title_count++;endwhile;endif; ?>

							</ul>

							<div id="safety-tabs-content" class="tabs-content" data-tabs-content="safety-tabs">

								<?php
								$tab_panel_count = 0;
								if( have_rows('anchoring_systems',$term) ):
								  while ( have_rows('anchoring_systems',$term) ) : the_row(); ?>

									<div class="tabs-panel <?php if($tab_panel_count == 0){ echo 'is-active';} ?>" id="<?php echo 'tab'.$tab_panel_count; ?>">
										<article><?php the_sub_field('anchor_content'); ?></article>
									</div>

								<?php $tab_panel_count++;endwhile;endif; ?>
								
							</div>

						<?php } ?>

						  <?php if( have_rows('product_downloads') ) : ?>

                <h4 style="color:#636466;font-family:'AvenirLTStd-Medium';"><?php _e('Safety Resources','madx') ?></h4>
                <hr>
                <div class="grid-x grid-margin-y grid-margin-x file-downloads">

                <?php
                  $dl_count = 1;
                  while ( have_rows('product_downloads') ) : the_row(); ?>

                  <div class="medium-6 large-5<?php if($dl_count % 2 !== 0){echo ' medium-offset-0 large-offset-1';} ?> cell">
                    <div class="grid-x grid-margin-x grid-margin-y">
                      <div class="medium-2 cell text-center">
                        <i class="fal fa-file-pdf"></i>
                      </div>
                      <div class="medium-10 cell">
                        <a href="<?php the_sub_field('document_file'); ?>" class="data-sheet" target="_blank"><?php the_sub_field('document_title'); ?></a>
                        <p><?php the_sub_field('document_download_cta'); ?></p>
                      </div>
                    </div>
                  </div>
                
                <?php $dl_count++;endwhile; ?>

              </div>
              <hr style="margin-bottom:40px">

            <?php endif; ?>

					</div>
				</div>
			</div>
		</div>

  <?php endwhile; wp_reset_postdata(); ?>