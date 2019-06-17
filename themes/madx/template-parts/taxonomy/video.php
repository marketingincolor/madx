<?php $term = get_queried_object(); ?>

<?php get_template_part('template-parts/madicou/page-hero'); ?>

<?php get_template_part('template-parts/madicou/submenu'); ?>

<section class="taxonomy-intro">
	<div class="grid-container">
		<div class="grid-x">
			<div class="large-8 medium-10 medium-offset-1 large-offset-2 cell text-center">
				<h1 class="blue"><?php the_field('intro_heading',$term); ?></h1>
				<aside class="yellow-underline center"></aside>
				<p class="subhead"><?php the_field('intro_subhead',$term); ?></p>
			</div>
		</div>
	</div>
	<div class="videos">
		<div class="grid-container">
			<div class="grid-x">
				<div class="small-10 small-offset-1 large-12 large-offset-0 cell">
					<div class="grid-x grid-margin-x grid-margin-y">
						<?php 
						//$post_slug = $post->post_name;
						$video_args = array( 
							'posts_per_page'=>-1,
							'post_type' => 'madicou',
							//'madicou_taxonomies' => $post_slug,
							'madicou-types' => 'video'
						);
						$video_query = new WP_Query( $video_args );
						if ( $video_query->have_posts() ) : while ( $video_query->have_posts() ) : $video_query->the_post(); 
							$video_url = get_field('video_url'); // Requires ACF Field for 'video_url'
							$video_meta = get_field('video_meta'); // Requires ACF Field for 'video_meta'
							$video_file = get_field('video_attachment'); // Requires ACF Field for 'video_meta'
							?>

            <div class="medium-6 large-4 cell module auto-height">
              <div class="image-link">
                <a href="<?php the_permalink(); ?>" class="videolink" ><div class="module-bg small madicou-modal-image-<?php echo $title_joined; ?>" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div></a>
              </div>
              <div class="meta">
                <a href="<?php the_permalink(); ?>" class="videolink" ><h4 class="blue madicou-modal-heading-<?php echo $title_joined; ?>"><?php the_title(); ?></h4></a>
                <div class="content"><?php echo wp_trim_words(get_the_content(),25,'...'); ?></div>
                <p><i class="fal fa-clock"></i> &nbsp;<?php echo $video_meta; ?></p>
                <p><a href="<?php the_permalink(); ?>" class="blue read-more madicou-modal-read-more-<?php echo $title_joined; ?>">Watch Video &nbsp;<i class="fal fa-long-arrow-right"></i></a></p>
              </div>
            </div>

						<?php endwhile; else: ?> 
							<div class="cell">
								<p style="padding:1em;">Sorry, there are no <?php echo $post->post_title; ?> Videos to display</p>
							</div>
						<?php endif;wp_reset_postdata(); ?>
						<madu-video-modal></madu-video-modal>
					</div>
				</div>
			</div>
	  </div>
	</div>
</section>