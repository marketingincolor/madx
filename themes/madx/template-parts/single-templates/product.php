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

<section class="taxonomy-intro" style="padding-bottom:0">
	<div class="grid-container">
		<div class="grid-x">
			<div class="large-8 medium-10 medium-offset-1 large-offset-2 cell text-center">
				<h1 class="blue"><?php the_title(); ?></h1>
				<aside class="yellow-underline center"></aside>
				<!-- <p class="subhead"><?php the_field('case_study_excerpt'); ?></p> -->
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
						<div class="medium-10 medium-offset-1 cell">

							<div class="content">
								<?php the_content(); ?>
							</div>
							<?php if (get_field('pdf_link')) { ?>
								<a href="<?php the_field('pdf_link'); ?>"><i class="far fa-file-pdf"></i>&nbsp;&nbsp;Download Product brochure</a>
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
