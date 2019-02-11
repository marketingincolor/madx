<?php 
/* Template Name: Dealers */
get_header(); ?>

	<section class="page-hero">

		<div class="show-for-small-only">
			<?php get_template_part('template-parts/menus/dealers-header-menu'); ?>
		</div>

		<div id="header-grid" class="grid-container">
			<div class="grid-x">
				<div class="small-10 small-offset-1 large-12 large-offset-0 show-for-medium-only">
					<?php get_template_part('template-parts/menus/dealers-tablet-menu'); ?>
				</div>
				<div class="small-10 small-offset-1 large-12 large-offset-0 show-for-large">
					<?php get_template_part('template-parts/menus/dealers-header-menu'); ?>
				</div>
			</div>
		</div>
	</section>

	<section class="featured-products">
		<div class="grid-container">
			<!-- Foundation 6 Carousel/Orbit -->
			<div class="orbit" role="region" aria-label="Featured Products" v-f-orbit>
			  <div class="orbit-wrapper">
			    <div class="orbit-controls">
			      <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span><i class="fas fa-chevron-left"></i></button>
			      <button class="orbit-next"><span class="show-for-sr">Next Slide</span><i class="fas fa-chevron-right"></i></button>
			    </div>
			    <ul class="orbit-container">
			    		<?php
				    		$args = array(
				    			'post_type'      => 'dealers',
				    			'posts_per_page' => 1,
				    			'meta_query'     => array(
	    			        array(
    			            'key'     => 'featured_product',
    			            'value'   => '"Featured Product"',
    			            'compare' => 'LIKE'
	    			        )
		    			    )
				    		);
				    		$query = new WP_Query( $args );
			    			while ( $query->have_posts() ) : $query->the_post();
			    		?>
			    		
					      <li class="is-active orbit-slide">
					        <div class="grid-x">
										<div class="small-12 cell">
											<div class="grid-x module auto-height side-module">
												<div class="medium-5 cell">
													<h6 class="blue"><?php the_field('featured_product_title'); ?></h6>
													<h3><?php the_field('featured_product_copy'); ?></h3>
													<a href="<?php the_permalink(); ?>"><button class="btn-yellow solid"><?php the_field('featured_product_cta_text'); ?></button></a>
												</div>
												<div class="medium-7 cell" style="background: url(<?php the_post_thumbnail_url(); ?>) center center / cover no-repeat;">
													
												</div>
											</div>
										</div>
					        </div>
					      </li>

			    		
			    		<?php endwhile; wp_reset_postdata(); ?>

  		    		<?php
  		    			$args = array(
				    			'post_type'      => 'dealers',
				    			'posts_per_page' => 99,
				    			'offset'         => 1,
				    			'meta_query'     => array(
	    			        array(
    			            'key'     => 'featured_product',
    			            'value'   => '"Featured Product"',
    			            'compare' => 'LIKE'
	    			        )
		    			    )
				    		);
  		    			$query = new WP_Query( $args );
  		    			while ( $query->have_posts() ) : $query->the_post();
  		    		?>
  		    		
  				      <li class="orbit-slide">
  				        <div class="grid-x">
										<div class="small-12 cell">
											<div class="grid-x module auto-height side-module">
												<div class="medium-5 cell">
													<h6 class="blue"><?php the_field('featured_product_title'); ?></h6>
													<h3><?php the_field('featured_product_copy'); ?></h3>
													<a href="<?php the_permalink(); ?>"><button class="btn-yellow solid"><?php the_field('featured_product_cta_text'); ?></button></a>
												</div>
												<div class="medium-7 cell" style="background: url(<?php the_post_thumbnail_url(); ?>) center center / cover no-repeat;">
													
												</div>
											</div>
										</div>
					        </div>
  				      </li>
  		    		
  		    		<?php endwhile; wp_reset_postdata(); ?>
			      
			    </ul>
			  </div>
			</div>
		</div>
	</section>

	<section class="dealer-cta">
		<div class="grid-container">
			<div class="grid-x">
				<div class="small-12 cell" style="background: url(<?php the_field('dealer_cta_background_image'); ?>) center center / cover no-repeat;">
					<div class="grid-x grid-margin-x grid-margin-y align-middle">
						<div class="medium-8 cell">
							<h3 class="white"><?php the_field('dealer_cta_title'); ?></h3>
							<p class="white"><?php the_field('dealer_cta_copy'); ?></p>
						</div>
						<div class="medium-4 cell text-center">
							<a href="<?php the_field('dealer_cta_button_link'); ?>"><button class="btn-yellow border" style="color:#FFF"><?php the_field('dealer_cta_button_text'); ?></button></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="categories">
		<div class="grid-container">
			<div class="grid-x grid-margin-x grid-margin-y">
				<div class="small-10 small-offset-1 large-12 large-offset-0">
					<div class="grid-x grid-margin-x grid-margin-y">
						<div class="small-12 cell">
							<h3><?php the_field('dealer_router_heading'); ?></h3>
						</div>

						<?php if( have_rows('dealer_modules_small') ):
						    while ( have_rows('dealer_modules_small') ) : the_row(); ?>

						  <?php $url_text = substr(get_sub_field('link_url'), 1) ?>

						  <div class="medium-6 large-3 cell module auto-height">
						  	<a href="<?php the_sub_field('link_url'); ?>">
						  		<div class="module-bg small relative dealerRouter_image_<?php echo $url_text; ?>" style="background-image: url(<?php the_sub_field('image'); ?>);">
						  	  </div>
						  	</a>
						  	<div class="meta">
						  		<a href="<?php the_sub_field('link_url'); ?>"><h4 class="blue dealerRouter_Heading_<?php echo $url_text; ?>"><?php the_sub_field('heading'); ?></h4></a>
						  		<p style="margin-bottom: 30px"><?php the_sub_field('body'); ?></p>
						  		<a class="read-more dealerRouter_readMore_<?php echo $url_text; ?>" href="<?php the_sub_field('link_url'); ?>"><?php the_sub_field('link_text'); ?> &nbsp;<i class="far fa-long-arrow-right"></i></a>
						  	</div>
						  </div>

						<?php endwhile;endif; ?>

						<?php if( have_rows('dealer_modules_large') ):
						    while ( have_rows('dealer_modules_large') ) : the_row(); ?>
								
							<?php $url_text = substr(get_sub_field('link_url'), 1) ?>

						  <div class="medium-6 cell module auto-height">
						  	<a href="<?php the_sub_field('link_url'); ?>">
						  		<div class="module-bg large relative dealerRouter_image_<?php echo $url_text; ?>" style="background-image: url(<?php the_sub_field('image'); ?>);">
						  		</div>
						  	</a>
						  	<div class="meta">
						  		<a href="<?php the_sub_field('link_url'); ?>"><h4 class="blue dealerRouter_heading_<?php echo $url_text; ?>"><?php the_sub_field('heading'); ?></h4></a>
						  		<p style="margin-bottom: 30px"><?php the_sub_field('body'); ?></p>
						  		<a class="read-more dealerRouter_readMore_<?php echo $url_text; ?>" href="<?php the_sub_field('link_url'); ?>"><?php the_sub_field('link_text'); ?> &nbsp;<i class="far fa-long-arrow-right"></i></a>
						  	</div>
						  </div>

						<?php endwhile;endif; ?>

					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="film-tips">
		<div class="grid-container">
			<div class="grid-x">
				<div class="small-10 small-offset-1 medium-6 large-6 medium-offset-3 large-offset-3 cell text-center">
					<h2 class="blue"><?php the_field('dealer_blog_title'); ?></h2>
					<aside class="yellow-underline center"></aside>
					<p class="subhead"><?php the_field('dealer_blog_subhead'); ?></p>
				</div>
			</div>

			<div class="grid-x">
				<div class="small-10 small-offset-1 large-12 large-offset-0 cell">
					<div class="grid-x grid-margin-x grid-margin-y">

							<?php
								$args = array(
									'post_type'      => 'post',
									'posts_per_page' => 3,
									'category_name'  => 'dealers,dealer-support',
								);
								$query = new WP_Query( $args );
								while ( $query->have_posts() ) : $query->the_post();
							?>

						<div class="medium-4 cell module auto-height">
							<a href="<?php the_permalink(); ?>"><div class="module-bg small" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div></a>
							<div class="meta">
								<a href="<?php the_permalink(); ?>" style="margin-bottom: 25px;"><h4 class="blue"><?php echo wp_trim_words(get_the_title(),8,'...'); ?></h4></a>
								<p><?php echo wp_trim_words(get_the_content(),35,'...'); ?></p>
								<a href="<?php the_permalink(); ?>" class="blue read-more"><?php _e('Read More','madx'); ?> &nbsp;<i class="fal fa-long-arrow-right"></i></a>
							</div>
						</div>

					<?php endwhile;wp_reset_postdata(); ?>
						
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="dealer-brandhub">
		<div class="grid-container">
			<div class="grid-x">
				<div class="small-12 cell" style="background: url(<?php the_field('brand_hub_background_image'); ?>) center center / cover no-repeat;">
					<div class="grid-x grid-margin-x grid-margin-y align-middle">
						<div class="large-4 cell text-center outer-col">
							<img src="<?php the_field('brand_hub_logo'); ?>" alt="Madico Brand Hub">
						</div>
						<div class="large-4 cell middle-col">
							<p><?php the_field('brand_hub_copy'); ?></p>
						</div>
						<div class="large-4 cell text-center outer-col">
							<a href="<?php the_field('brand_hub_button_link'); ?>"><button class="btn-blue solid"><?php the_field('brand_hub_button_text'); ?></button></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php
get_footer();