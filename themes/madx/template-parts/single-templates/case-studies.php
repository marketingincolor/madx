<?php while ( have_posts() ) : the_post(); ?>

	<div class="show-for-small-only">
		<?php get_template_part('template-parts/menus/'.get_post_type().'-header-menu'); ?>
	</div>

	<div id="header-grid" class="grid-container">
		<div class="grid-x">
			<div class="small-10 small-offset-1 large-12 large-offset-0 show-for-medium-only">
				<?php get_template_part('template-parts/menus/'.get_post_type().'-tablet-menu'); ?>
			</div>
			<div class="small-10 small-offset-1 large-12 large-offset-0 show-for-large">
				<?php get_template_part('template-parts/menus/'.get_post_type().'-header-menu'); ?>
			</div>
		</div>
	</div>

<section class="taxonomy-intro">
	<div class="grid-container">
		<div class="grid-x">
			<div class="large-8 medium-10 medium-offset-1 large-offset-2 cell text-center">
				<h1 class="blue"><?php the_title(); ?></h1>
				<aside class="yellow-underline center"></aside>
				<p class="subhead"><?php the_field('case_study_excerpt'); ?></p>
			</div>
		</div>
	</div>
</section>

<section class="case-study-container">
	<div class="grid-container">
		<div class="grid-x">
			<div class="small-10 small-offset-1 cell module auto-height">
				<?php
				  // Get featured image and alt attribute
					$thumbnail_id = get_post_thumbnail_id( $post->ID );
					$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);   
					the_post_thumbnail( 'full', array( 'alt' => $alt ) );
				?>
				<div class="meta">
					<div class="grid-x">
						<div class="medium-3 medium-offset-1 cell">
							<p class="industry"><?php _e( 'Project', 'madx' ); ?></p>
							<p class="subhead"><?php the_field('case_study_project'); ?></p>
							<p class="industry"><?php _e( 'Location', 'madx' ); ?></p>
							<p class="subhead"><?php the_field('case_study_location'); ?></p>
							<p class="industry"><?php _e( 'Product', 'madx' ); ?></p>
							<p class="subhead"><?php the_field('case_study_product'); ?></p>
						</div>
						<div class="medium-7 cell">
							<div class="content"><?php the_content(); ?></div>
							<?php if(get_field('case_study_pdf')) { ?>

								<div class="grid-x grid-margin-y subhead">
									<div class="large-1 medium-2 cell text-center">
										<i class="fal fa-file-pdf" style="font-size:2.875rem;color:#4d7da6"></i>
									</div>
									<div class="medium-10 cell">
										<a href="<?php the_field('case_study_pdf'); ?>" target="_blank"><?php _e( 'Case Study PDF', 'madx' ); ?></a>
										<p><?php _e( 'Click to download case study', 'madx' ); ?></p>
									</div>
								</div>

							<?php } ?>
						</div>
					</div>
				</div>
		  </div>
		</div>
	</div>
</section>

<?php get_template_part('/template-parts/top-level-page/find-dealer'); ?>

<?php endwhile; ?>
