<?php 
/* Template Name: SunScape */
get_header(); ?>

<section class="hero-logo relative" style="padding:5% 0;">
	<div class="grid-container">
		<div class="grid-x grid-margin-x grid-margin-y">
			<div class="small-10 small-offset-1 medium-6 medium-offset-3">
				<?php //get_template_part('template-parts/menus/protectionpro-header-menu'); ?>
				<a href="/sunscape" rel="top"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/sunscape-logo-color.svg" alt="SunScape by Madico" class="menu-section-home-image"></a>
			</div>
		</div>
	</div>
</section>

<section class="taxonomy-intro">
	<div class="grid-container">
		<div class="grid-x">
			<div class="large-8 small-10 small-offset-1 large-offset-2 cell text-center">
				<h1 class="blue"><?php the_field('sunscape_heading'); ?></h1> 
				<aside class="yellow-underline center"></aside> 
				<p class="subhead" style="margin-bottom:10%"><?php the_field('sunscape_subhead'); ?></p>
			</div>
		</div> 
		<div class="grid-x"><!-- sunscape_benefit_icon, sunscape_benefit_title, sunscape_benefit_text -->
			<div class="small-10 small-offset-1 large-12 large-offset-0 cell">
				<div class="grid-x grid-margin-x grid-margin-y">
					<?php
					// check if the flexible content field has rows of data
					if( have_rows('sunscape_benefits') ):
					     // loop through the rows of data
					    while ( have_rows('sunscape_benefits') ) : the_row();
					        if( get_row_layout() == 'benefit' ):
					?>
					<div class="medium-4 cell text-center">
						<?php the_sub_field('sunscape_benefit_icon'); ?> <h5 class="blue"><?php the_sub_field('sunscape_benefit_title'); ?></h5> 
						<article class="copy">
							<p><?php the_sub_field('sunscape_benefit_text'); ?></p>
						</article>
					</div>
					<?php endif; endwhile; else :
					    // no layouts found
					endif;
					?>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="tax-posts" class="taxonomy-products" style="padding-top:6%;">
	<div class="grid-container">
		<div class="grid-x">
			<div class="small-10 large-8 small-offset-1 large-offset-2 text-center">
				<h2 class="blue"><?php the_field('sunscape_products_heading'); ?></h2> 
				<aside class="yellow-underline center"></aside> 
				<p><?php the_field('sunscape_products_subhead'); ?></p>
			</div>
		</div>

		<section id="posts-container" class="taxonomy-products" style="margin-bottom:0px;">
			<div class="grid-x">
				<div class="small-10 small-offset-1 large-12 large-offset-0 cell">
					<div class="grid-x grid-margin-x">
						<div id="tabs-content" class="tabs-content">
				            <div class="offtabs-panel" id="premium">
								<div class="grid-x grid-margin-x grid-margin-y">
								  
									<?php
									// check if the flexible content field has rows of data
									if( have_rows('sunscape_products') ):
									     // loop through the rows of data
									    while ( have_rows('sunscape_products') ) : the_row();
									        if( get_row_layout() == 'product_list' ):
									?>
									<div class="medium-6 large-4 cell module auto-height relative">
										<a href="<?php echo site_url(); ?><?php the_sub_field('sunscape_product_link'); ?>"><div class="module-bg" style="background-image: url(<?php the_sub_field('sunscape_product_image'); ?>)"></div></a>
										<div class="meta">
											<h4 class="blue"><?php the_sub_field('sunscape_product_title'); ?></h4>
											<div class="content"><?php the_sub_field('sunscape_product_text'); ?></div>
											<a href="<?php echo site_url(); ?><?php the_sub_field('sunscape_product_link'); ?>" class="read-more blue">View Product Details &nbsp;<i class="far fa-long-arrow-right"></i></a>
										</div>
									</div>
									<?php endif; endwhile; else :
									    // no layouts found
									endif;
									?>

								</div>
				            </div>
			            </div>
		        	</div>
		        </div>
		    </div>
		</section>

	</div>
</section>

<?php get_template_part('/template-parts/taxonomy/testimonials'); ?>

<?php get_template_part('/template-parts/taxonomy/find-film'); ?>

<?php get_template_part('template-parts/top-level-page/find-dealer'); ?>

<?php get_footer();