<?php $term = get_queried_object(); ?>

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
					<h1 class="blue"><?php the_field('intro_heading',$term); ?></h1>
					<aside class="yellow-underline center"></aside>
					<p><?php the_field('intro_subhead',$term); ?></p>
				</div>
			</div>
		</div>
	</section>

	<section id="tax-posts" class="taxonomy-products" style="padding-top:0">
		<div class="grid-container">
			<div class="grid-x">
				<div class="small-10 small-offset-1 large-12 large-offset-0 cell">
					<ul id="products-tabs" class="tabs tax-cats show-for-large" v-tabs>
					  <li class="tabs-title is-active"><a href="#all" @click="openDistributionTab"><?php _e( 'All', 'madx' ); ?></a></li>
						
						<?php
						  // Get child terms of products in specialty taxonomies
							$args = array(
								'parent' => $term->term_id,
								'orderby' => 'slug',
								'hide_empty' => true
							 );
							$child_terms = get_terms( 'dealers_taxonomies', $args );
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
										$child_terms = get_terms( 'dealers_taxonomies', $args );
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
									'post_type'      => 'dealers',
									'posts_per_page' => -1,
									'orderby'        => 'title',
									'order'          => 'ASC',
									'tax_query'      => array(
										array(
											'taxonomy' => 'dealers_taxonomies',
											'field'    => 'slug',
											'terms'    => $term->slug
										),
									),
								);
								$query = new WP_Query( $args );
								while ( $query->have_posts() ) : $query->the_post();
							?>

								<div class="medium-6 large-4 cell module auto-height relative">
									<a href="<?php the_permalink(); ?>"><div class="module-bg" style="background-image: url(<?php the_post_thumbnail_url() ?>)"></div></a>
									<div class="meta">
										<a href="<?php the_permalink(); ?>"><h4 class="blue"><?php the_title(); ?></h4></a>
										<div class="content">
											<?php the_field('product_short_description'); ?>
										</div>
										<a href="<?php the_permalink(); ?>" class="read-more blue">View Product Details &nbsp;<i class="far fa-long-arrow-right"></i></a>
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
										'post_type'      => 'dealers',
										'posts_per_page' => -1,
										'orderby'        => 'menu_order',
										'order'          => 'ASC',
										'tax_query'      => array(
											array(
												'taxonomy' => 'dealers_taxonomies',
												'field'    => 'slug',
												'terms'    => $child_term->slug,
											),
										),
									);
									$query = new WP_Query( $args );
									while ( $query->have_posts() ) : $query->the_post();
								?>

								<div class="medium-6 large-4 cell module auto-height relative">
									<a href="<?php the_permalink(); ?>"><div class="module-bg" style="background-image: url(<?php the_post_thumbnail_url() ?>)"></div></a>
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

					<?php } ?>

				</div>
			</div>
		</div>
	</section>
