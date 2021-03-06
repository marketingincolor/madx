<div class="show-for-small-only">
	<?php get_template_part('template-parts/menus/automotive-header-menu'); ?>
</div>

<div class="grid-container">
	<div class="grid-x">
		<div class="small-10 small-offset-1 large-12 large-offset-0 show-for-medium-only">
			<?php get_template_part('template-parts/menus/automotive-tablet-menu'); ?>
		</div>
		<div class="small-10 small-offset-1 large-12 large-offset-0 show-for-large">
			<?php get_template_part('template-parts/menus/automotive-header-menu'); ?>
		</div>
	</div>
</div>

<?php $term = get_queried_object(); ?>

<section class="taxonomy-intro">
	<div class="grid-container">
		<div class="grid-x">
			<div class="large-8 small-10 small-offset-1 large-offset-2 cell text-center">
				<h1 class="blue"><?php the_field('intro_heading',$term); ?></h1>
				<aside class="yellow-underline center"></aside>
				<p class="subhead"><?php the_field('intro_subhead',$term); ?></p>
			</div>
		</div>
		<div class="grid-x">

			<?php get_template_part('template-parts/taxonomy/benefits'); ?>

		</div>
	</div>
</section>

<section id="tax-posts" class="taxonomy-products" style="padding-top: 0;">
	<div class="grid-container">

		<?php if(get_field('products_heading',$term)) { ?>

		<div class="grid-x">
			<div class="small-10 large-8 small-offset-1 large-offset-2 text-center">
				<h2 class="blue"><?php the_field('products_heading',$term); ?></h2>
				<aside class="yellow-underline center"></aside>
				<?php if(get_field('products_subhead',$term)) { ?><p class="subhead"><?php the_field('products_subhead',$term); ?></p><?php } ?>
			</div>
		</div>

	  <?php } ?>

		<?php if ($term->slug != 'windshield-protection' && $term->slug != 'paint-protection') { ?>
		  
		  <?php include(locate_template('template-parts/taxonomy/decorative-posts.php')); ?>
			
		<?php }else{ ?>

			<?php
				$args = array(
					'post_type' => 'automotive',
					'tax_query' => array(
						array(
							'taxonomy' => 'automotive_taxonomies',
							'field'    => 'slug',
							'terms'    => $term->slug
						),
					),
				);
				$query = new WP_Query( $args );
				while ( $query->have_posts() ) : $query->the_post();
			?>

				<div class="grid-x">
					<div id="single-post" class="small-10 small-offset-1 cell module auto-height">
						<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
						<div class="meta">
							<div class="medium-12 cell">
								<div class="grid-x grid-margin-x grid-margin-y">
									<div class="medium-10 medium-offset-1 cell">
										<h4 class="blue"><?php the_title(); ?></h4>
										<div class="content"><?php the_content(); ?></div>

                    <?php if(get_field('product_secondary_data_title')): ?>
                      <h4><?php the_field('product_secondary_data_title'); ?></h4>
                    <?php endif; ?>
                    
                    <?php if(get_field('product_secondary_data_content')): ?>
                      <div class="content"><?php the_field('product_secondary_data_content'); ?></div>
                    <?php endif; ?>
										
                    <?php if( have_rows('product_downloads') ) : ?>

                      <h4><?php _e('Automotive Resources','madx') ?></h4>
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
					</div>
				</div>

			<?php endwhile; wp_reset_postdata(); ?>

		<?php } ?>

	</div>
</section>

<?php get_template_part('/template-parts/taxonomy/testimonials'); ?>

<?php get_template_part('/template-parts/taxonomy/faqs'); ?>

<?php 
if ($term->slug != 'windshield-protection' && $term->slug != 'paint-protection') { get_template_part('/template-parts/taxonomy/find-film'); } 
?>

<?php get_template_part('/template-parts/top-level-page/find-dealer'); ?>