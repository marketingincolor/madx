<?php
get_header();
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="show-for-small-only">
	<?php get_template_part('template-parts/menus/dealers-header-menu'); ?>
</div>

<div class="grid-container">
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
	<div class="grid-container">
		<div class="grid-x">
			<div class="large-8 small-10 small-offset-1 large-offset-2 cell text-center">
				<h1 class="blue"><?php the_field('product_title'); ?></h1>
			</div>
		</div>
	</div>
</section>

<section id="tax-posts" class="taxonomy-products" style="padding-top: 0">
	<div class="grid-container">
		<div class="grid-x">
			<div class="small-10 small-offset-1 large-12 large-offset-0 cell">
				<div class="grid-x grid-margin-x grid-margin-y">
					<?php
						// Get current url and split it up by '/'
						$current_url =  $_SERVER['REQUEST_URI'];
						$url_array   = explode('/', $current_url);
					?>
					<div class="small-12 large-10 large-offset-1 cell">
						<div id="breadcrumbs" class="breadcrumbs">
							<h5 class="breadcrumb-title"><a href="<?php echo '/'. $url_array[3]; ?>"><?php echo $url_array[3]; ?></a> <i class="fas fa-chevron-right"></i> <a href="<?php echo '/'. $url_array[3] .'/'. $url_array[4]; ?>"><span><?php echo $url_array[4]; ?></span></a> <i class="fas fa-chevron-right"></i> <a href="<?php echo '/'. $url_array[3] .'/'. $url_array[4] .'/'. $url_array[5]; ?>"><span><?php echo $url_array[5]; ?></span></a></h5>
						</div>
					</div>
					<div id="single-post" class="small-12 large-10 large-offset-1 cell module auto-height">
						<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" style="margin-bottom:0">

						<?php if(get_field('product_dropdown_information')) { ?>

						<div id="testing" class="testing relative">
							<p class="learn-more white text-center absolute" @click="testingSlideDown"><span class="white"><?php _e('Learn More','madx') ?></span><br><i class="far fa-chevron-down"></i></p>
							<div class="grid-x grid-margin-x grid-margin-y">
								<div class="medium-2 large-1 large-offset-1 cell show-for-large text-right">
									<img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/testing-icon.svg" alt="window film testing regulations">
								</div>
								<div class="medium-12 large-9 cell">
									<h4 class="white"><?php the_field('product_dropdown_title'); ?></h4>
									<div id="testing-content" class="testing-content"> 
										<?php the_field('product_dropdown_information'); ?>
									</div>
								</div>
							</div>
						</div>

						<?php } ?>

						<div class="meta">
							<div class="grid-x grid-margin-x grid-margin-y">
								<div class="medium-12 large-10 large-offset-1 cell">
									<h4><?php the_field('product_content_block_title'); ?></h4>
									<div class="content"><?php the_content(); ?></div>

									<?php if(get_field('product_tabs')) { ?>

										<ul class="tabs" id="safety-tabs" v-tabs>
											<?php
											$tab_title_count = 0;
											if( have_rows('product_tabs') ):
											  while ( have_rows('product_tabs') ) : the_row(); ?>

											    <li class="tabs-title <?php if($tab_title_count == 0){ echo 'is-active';} ?>">
											    	<a href="#<?php echo 'tab'.$tab_title_count; ?>" @click="openDistributionTab"><?php the_sub_field('tab_title'); ?></a>
											    </li>

											<?php $tab_title_count++;endwhile;endif; ?>

										</ul>

										<div id="safety-tabs-content" class="tabs-content" data-tabs-content="safety-tabs">

											<?php
											$tab_panel_count = 0;
											if( have_rows('product_tabs') ):
											  while ( have_rows('product_tabs') ) : the_row(); ?>

												<div class="tabs-panel <?php if($tab_panel_count == 0){ echo 'is-active';} ?>" id="<?php echo 'tab'.$tab_panel_count; ?>">
													<article><?php the_sub_field('tab_content'); ?></article>
												</div>

											<?php $tab_panel_count++;endwhile;endif; ?>
											
										</div>

									<?php } ?>

									<?php if( have_rows('product_downloads') ) : ?>

										<h4>Documents</h4>
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
														<a href="<?php the_sub_field('document_file'); ?>" target="_blank"><?php the_sub_field('document_title'); ?></a>
														<p><?php the_sub_field('document_download_cta'); ?></p>
													</div>
												</div>
											</div>
										
										<?php $dl_count++;endwhile; ?>

										</div>
										<hr>

									<?php endif; ?>

									<a href="">
										<button class="btn-lt-blue border"><i class="fas fa-arrow-alt-left"></i>&nbsp; Back</button>
									</a>
								</div>
							</div>
						</div>
					</div>
                </div>
			</div>
		</div>
	</div>
</section>

<section class="related-posts" style="padding-top:0">
	<div class="grid-container">
		<div class="grid-x">
			<div class="small-10 small-offset-1 large-12 large-offset-0 cell">
				<div class="grid-x grid-margin-x grid-margin-y">
					<div class="small-12 large-10 large-offset-1 cell">
						<h4 style="font-family:'AvenirLTStd-Book'">Related Products</h4>
					</div>
					
				<?php
					$term = get_the_terms($post->ID,'dealers_taxonomies');
					$args = array(
						'post_type'      => 'dealers',
						'posts_per_page' => 3,
						'order'          => 'ASC',
						'orderby'        => 'rand',
						'post__not_in'   => $post->ID,
						'tax_query' => array(
							array(
								'taxonomy' => 'dealers_taxonomies',
								'field'    => 'slug',
								'terms'    => $term[0]->slug,
							),
						),
					);
					$query = new WP_Query( $args );
					while ( $query->have_posts() ) : $query->the_post();
				?>

				<div class="medium-4 cell module auto-height relative">
					<a href="<?php the_permalink(); ?>"><div class="module-bg" style="background-image: url(<?php the_post_thumbnail_url(); ?>)"></div></a>
					<div class="meta">
						<a href="<?php the_permalink(); ?>"><h4 class="blue"><?php the_title(); ?></h4></a>
						<div class="content">
							<?php echo wp_trim_words(get_the_content(),30,'...'); ?>
						</div>
						<a href="<?php the_permalink(); ?>" class="read-more blue">View Product Details &nbsp;<i class="far fa-long-arrow-right"></i></a>
					</div>
				</div>

				<?php endwhile; wp_reset_postdata(); ?>

				</div>
			</div>
		</div>
	</div>	
</section>

<?php 
endwhile;endif;
get_footer();