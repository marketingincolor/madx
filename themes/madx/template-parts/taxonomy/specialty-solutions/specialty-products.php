<div class="show-for-small-only">
	<?php get_template_part('template-parts/menus/specialty-header-menu'); ?>
</div>

<div class="grid-container">
	<div class="grid-x">
		<div class="small-10 small-offset-1 large-12 large-offset-0 show-for-medium-only">
			<?php get_template_part('template-parts/menus/specialty-tablet-menu'); ?>
		</div>
		<div class="small-10 small-offset-1 large-12 large-offset-0 show-for-large">
			<?php get_template_part('template-parts/menus/specialty-header-menu'); ?>
		</div>
	</div>
</div>

<section class="taxonomy-intro">
	<div class="grid-container">
		<div class="grid-x">
			<div class="large-8 medium-10 medium-offset-1 large-offset-2 cell text-center">
				<h1 class="blue"><?php the_field('intro_heading',$term); ?></h1>
				<aside class="yellow-underline center"></aside>
			</div>
		</div>
		<section id="posts-container" class="taxonomy-products" style="margin-bottom:0">

      <div class="grid-x">
				<div class="small-10 small-offset-1 large-12 large-offset-0 cell">
					<ul id="products-tabs" class="tabs tax-cats show-for-large" v-tabs>
					  <li class="tabs-title is-active"><a href="#all" @click="openDistributionTab"><?php _e( 'All', 'madx' ); ?></a></li>
						
						<?php
						  // Get child terms of products in specialty taxonomies
							$args = array(
								'parent' => 86,
								'orderby' => 'slug',
								'hide_empty' => true
							 );
							$child_terms = get_terms( 'specialty_taxonomies', $args );
							foreach ($child_terms as $child_term) {
						?>

						  <li class="tabs-title"><a href="<?php echo "#{$child_term->slug}"; ?>" @click="openDistributionTab"><?php echo $child_term->name; ?></a></li>
								
						<?php	} ?>

					</ul>
					<div class="grid-x grid-margin-x">
						<div class="small-12 cell">
							<ul class="hide-for-large" v-tabs>
								<select id="product-list" @change="openProductTab">
									<option value="#all"><?php _e( 'All', 'madx' ); ?></option>
									<?php
										$child_terms = get_terms( 'specialty_taxonomies', $args );
										foreach ($child_terms as $child_term) {
									?>
									<option value="<?php echo "#{$child_term->slug}"; ?>"><?php echo $child_term->name; ?></option>
								  <?php } ?>
								</select>
							</ul>
						</div>
					</div>
					<div id="tabs-content" class="tabs-content" data-tabs-content="products-tabs">
						<div class="tabs-panel is-active" id="all">
							<div class="grid-x grid-margin-x grid-margin-y">

							<?php
								$args = array(
									'post_type'      => 'specialty',
									'posts_per_page' => -1,
									'orderby'        => 'title',
									'order'          => 'ASC',
									'tax_query'      => array(
										array(
											'taxonomy' => 'specialty_taxonomies',
											'field'    => 'slug',
											'terms'    => 'products'
										),
									),
								);
								$query = new WP_Query( $args );
								while ( $query->have_posts() ) : $query->the_post();
							?>

								<div class="medium-6 large-4 cell module auto-height relative">
									<div class="module-bg" style="background-image: url(<?php the_post_thumbnail_url() ?>)"></div>
									<div class="meta">
										<h4 class="blue"><?php the_title(); ?></h4>
										<div class="content">
											<?php the_field('short_description'); ?>
										</div>
										<?php if(get_field('data_sheet')) { ?>

										  <a href="#!" class="btn-yellow border absolute data-sheet" data-pdf="<?php the_field('data_sheet'); ?>"><?php _e( 'Data Sheet', 'madx' ); ?></a>

									  <?php }else{ ?>

									  	<a href="/specialty-solutions/contact" class="btn-yellow border absolute"><?php _e( 'Start A Project', 'madx' ); ?></a>

									  <?php } ?>
									</div>
								</div>

							<?php endwhile; wp_reset_postdata(); ?>

							</div>
						</div>

						<?php foreach ($child_terms as $child_term) { ?>

					  <div class="tabs-panel" id="<?php echo $child_term->slug; ?>">
							<div class="grid-x grid-margin-x grid-margin-y">
									
								<?php
									$args = array(
										'post_type'      => 'specialty',
										'posts_per_page' => -1,
										'orderby'        => 'menu_order',
										'order'          => 'ASC',
										'tax_query'      => array(
											array(
												'taxonomy' => 'specialty_taxonomies',
												'field'    => 'slug',
												'terms'    => $child_term->slug,
											),
										),
									);
									$query = new WP_Query( $args );
									while ( $query->have_posts() ) : $query->the_post();
								?>

								<div class="medium-6 large-4 cell module auto-height relative">
									<div class="module-bg" style="background-image: url(<?php the_post_thumbnail_url() ?>)"></div>
									<div class="meta">
										<h4 class="blue"><?php the_title(); ?></h4>
										<div class="content">
											<?php the_field('short_description'); ?>
										</div>
										<?php if(get_field('data_sheet')) { ?>

										  <a href="#!" class="btn-yellow border absolute data-sheet" data-pdf="<?php the_field('data_sheet'); ?>"><?php _e( 'Data Sheet', 'madx' ); ?></a>

									  <?php }else{ ?>

									  	<a href="/specialty-solutions/contact" class="btn-yellow border absolute"><?php _e( 'Start Your Project', 'madx' ); ?></a>

									  <?php } ?>
									</div>
								</div>

								<?php endwhile; wp_reset_postdata(); ?>

							</div>
					  </div>

					  <?php } ?>

					</div>
			  </div>
			</div>
		</section>
	</div>
</section>

<!-- Form Modal -->
	<div class="reveal" id="specialty-form-modal" v-reveal>
		<h3 class="blue">Please fill out the form to access the product's data sheet</h3>
	  <?php the_field('specialty_short_description',$term); ?>
	  <button class="close-button" data-close aria-label="Close modal" type="button">
	    <span aria-hidden="true">&times;</span>
	  </button>
	</div>
<!-- /Form Modal -->

<!-- PDF Modal -->
	<div class="reveal" id="specialty-pdf-modal" v-reveal>
		<iframe src="" style="border:0;height:100%;width:100%"></iframe>
	  <button class="close-button" data-close aria-label="Close modal" type="button">
	    <span aria-hidden="true">&times;</span>
	  </button>
	</div>
<!-- /PDF Modal -->