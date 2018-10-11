<?php 
/* Template Name: Madico U */
global $post;
$post_slug = $post->post_name;
get_header('madicou'); ?>

<?php if (is_page('madicou')) { ?> 
	<section class="page-hero madicou-hero" style="background-image: url(<?php bloginfo('template_directory'); ?>/dist/assets/images/madicou-hero.jpg);">
		<div class="grid-container">
			<div class="grid-x">
				<div class="medium-10 medium-offset-1 cell">
					<a href="<?php echo esc_url( home_url( '/madicou' ) ); ?>" rel="home"><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/madicou-logo.png" alt="Madico U"></a>
					<?php get_template_part('template-parts/search/madicou-searchform'); ?>
				</div>
			</div>
		</div>
	</section>
<?php } else { ?>
	<section class="madicou-search">
		<div class="grid-container">
			<div class="grid-x">
				<div class="medium-10 medium-offset-1 cell">
					<a href="<?php echo esc_url( home_url( '/madicou' ) ); ?>" rel="home"><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/madicou-logo.png" alt="Madico U"></a>
					<?php get_template_part('template-parts/search/madicou-searchform'); ?>
				</div>
			</div>
		</div>
	</section>
<?php } ?>

<?php get_template_part('template-parts/madicou/submenu'); ?>

<?php if (is_page('madicou')) { ?> 
	<?php get_template_part('template-parts/madicou/virtual-campus') ?>

	<?php get_template_part('template-parts/madicou/business-resources') ?>

	<?php get_template_part('template-parts/madicou/sales-resources') ?>

	<?php get_template_part('template-parts/madicou/marketing-resources') ?>
<?php } elseif (is_page('ask-a-question') || is_page('glossary')) { ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<section>
		<div class="grid-container">
			<div class="grid-x">
				<div class="small-10 small-offset-1 cell">
					<h1 class="blue"><?php the_title(); ?></h1>
					<aside class="yellow-underline left"></aside>
					<p class="subhead"><?php the_content(); ?></p>		
				</div>
			</div>
		</div>
	</section>
	<?php endwhile;endif; ?>

<?php } else { ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<section>
		<div class="grid-container">
			<div class="grid-x">
				<div class="small-10 small-offset-1 large-offset-0 cell">
					<h1 class="blue"><?php the_title(); ?></h1>
					<aside class="yellow-underline left"></aside>
					<p class="subhead"><?php the_content(); ?></p>		
				</div>
			</div>
		</div>
	</section>
	<?php endwhile;endif; ?>

<madu-video-modal></madu-video-modal>

<section class="page-content">
	<div class="grid-container">
		<div class="grid-x grid-margin-x grid-margin-y">
			<div class="cell small-10 small-offset-1 medium-9 medium-offset-0">
				<div class="grid-x grid-margin-x grid-margin-y">
					<div class="cell">
						<h3>Videos <a href="<?php echo site_url('/mu-types/video/'); ?>" class="blue see-more">Watch More Videos &nbsp;<i class="fal fa-long-arrow-right"></i></a></h3>
					</div>

					<!-- ////////// BEGIN Body Cells for VIDEOS ////////// -->
					<div class="cell page-videos">
						<div class="grid-x grid-margin-x grid-margin-y">

						<!-- ENTIRE CONSTRUCT BELOW CAN BE MOVED TO ITS OWN TEMPLATE PART IN MADICOU DIRECTORY -->
						<?php //get_template_part('template-parts/madicou/content-video') ?>
						<!-- ENABLE ABOVE LINE OF CODE TO INCLUDE VIDEO CONTENT -->
						<?php $video_args = array( 
							'post_type' => 'madicou',
							'madicou_taxonomies' => $post_slug,
							'madicou-types' => 'video'
						);
						$video_query = new WP_Query( $video_args );
						if ( $video_query->have_posts() ) : while ( $video_query->have_posts() ) : $video_query->the_post(); 
							//$video_url = the_field('video-url'); // Requires ACF Field for 'video-url'
							//$video_meta = the_field('video-meta'); // Requires ACF Field for 'video-meta'
							?>
							<div class="each-book" style="display:none;">
								<h1 class="the-title"><?php the_title() ;?></h1>
								<div class="isbn-number"><?php the_field('isbn_number')?></div>
								<div class="big-intro"><?php the_field('book-introduction')?></div>
								<div class="main-summary"><?php the_content() ?></div>
							</div>

							<div class="medium-4 cell module auto-height <?php echo $post_slug; ?>">
								<div class="image-link" data-videotitle="Title of Video">
									<a href="#!" data-open="video-modal" class="videolink" data-videourl="https://www.youtube.com/embed/M7lc1UVf-VE"><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/device-protection-module.png" alt="Device Protection"></a>
								</div>
								<div class="meta">
									<button data-open="video-modal" class="videolink" data-videourl="https://www.youtube.com/embed/M7lc1UVf-VE"><h4 class="blue"><?php the_title() ;?></h4></button>
									<p>Video Runtime / Description</p>
								</div>
							</div>

						<?php endwhile; else: ?> 
							<div class="cell">
								<p>Sorry, there are no Videos to display</p>
							</div>
						<?php endif; ?>
						<?php wp_reset_query(); ?>







							<!-- BEGIN LOOP for VIDEOS by SECTION/SLUG -->
							<!--<div class="medium-4 cell module auto-height">
								<div class="image-link" data-videotitle="Title of Video">
									<a href="#!" data-open="video-modal" class="videolink" data-videourl="https://www.youtube.com/embed/M7lc1UVf-VE"><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/device-protection-module.png" alt="Device Protection"></a>
								</div>
								<div class="meta">
									<button data-open="video-modal" class="videolink" data-videourl="https://www.youtube.com/embed/M7lc1UVf-VE"><h4 class="blue">Video Title</h4></button>
									<p>Video Runtime / Description</p>
								</div>
							</div>
							<div class="medium-4 cell module auto-height">
								<a href="#!" data-open="video-modal"><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/device-protection-module.png" alt="Device Protection"></a>
								<div class="meta">
									<button data-open="video-modal"><h4 class="blue">Video Title</h4></button>
									<p>Video Runtime / Description</p>
								</div>
							</div>
							<div class="medium-4 cell module auto-height">
								<a href="#!" data-open="video-modal"><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/device-protection-module.png" alt="Device Protection"></a>
								<div class="meta">
									<button data-open="video-modal"><h4 class="blue">Video Title</h4></button>
									<p>Video Runtime / Description</p>
								</div>
							</div>-->
							<!-- END LOOP for VIDEOS by SECTION/SLUG -->


						</div>
					</div>

					<!-- ////////// BEGIN Body Cells for FAQs ////////// -->
					<div class="cell">
						<h3>Frequently Asked Questions <a href="" class="blue see-more">More &nbsp;<i class="fal fa-long-arrow-right"></i></a></h3>
					</div>
					<div class="cell module page-faqs">
						<div class="grid-y grid-margin-x grid-margin-y">
							<div class="cell">
								<div class="meta">
									<h4 class="blue">Title of the Question?</h4>
									<p>The answer to the question goes here, as this is the answer to the question.</p>
								</div>
							</div>
							<div class="cell">
								<div class="meta">
									<h4 class="blue">Title of the Question?</h4>
									<p>The answer to the question goes here, as this is the answer to the question.</p>
								</div>
							</div>
							<div class="cell">
								<div class="meta">
									<h4 class="blue">Title of the Question?</h4>
									<p>The answer to the question goes here, as this is the answer to the question.</p>
								</div>
							</div>
							<div class="cell">
								<div class="meta">
									<h4 class="blue">Title of the Question?</h4>
									<p>The answer to the question goes here, as this is the answer to the question.</p>
								</div>
							</div>
							<div class="cell">
								<div class="meta">
									<h4 class="blue">Title of the Question?</h4>
									<p>The answer to the question goes here, as this is the answer to the question.</p>
								</div>
							</div>
							<div class="cell">
								<div class="meta">
									<h4 class="blue">Title of the Question?</h4>
									<p>The answer to the question goes here, as this is the answer to the question.</p>
								</div>
							</div>
							<div class="cell">
								<div class="meta">
									<h4 class="blue">Title of the Question?</h4>
									<p>The answer to the question goes here, as this is the answer to the question.</p>
								</div>
							</div>
						</div>
					</div>


				</div>
			</div>
			<div class="cell small-10 small-offset-1 medium-3 medium-offset-0">
				<div class="grid-x grid-margin-x grid-margin-y">
					<!-- ////////// BEGIN Sidebar Cells for ARTICLES ////////// -->
					<div class="cell">
						<h3>Articles <a href="" class="blue see-more">More &nbsp;<i class="fal fa-long-arrow-right"></i></a></h3>
					</div>
					<div class="cell side-articles">
						<div class="grid-y grid-margin-x grid-margin-y">
							<div class="cell module auto-height">
								<a href="#"><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/device-protection-module.png" alt="Device Protection"></a>
								<div class="meta">
									<button data-open="videoModal1"><h4 class="blue">Article Title nec Lorem Ipsum sit Dolor</h4></button>
									<p>Article Description donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
								</div>
							</div>
							<div class="cell module auto-height">
								<a href="#"><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/device-protection-module.png" alt="Device Protection"></a>
								<div class="meta">
									<button data-open="videoModal1"><h4 class="blue">Article Title nec Lorem Ipsum sit Dolor</h4></button>
									<p>Article Description donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
								</div>
							</div>
						</div>
					</div>





					<!-- ////////// BEGIN Sidebar Cells for DOCUMENTS ////////// -->
					<div class="cell">
						<h3>Documents <a href="<?php echo site_url('/mu-types/document/'); ?>" class="blue see-more">More &nbsp;<i class="fal fa-long-arrow-right"></i></a></h3>
					</div>
					<div class="cell module side-documents">
						<div class="grid-y grid-margin-x grid-margin-y">





						<!-- ENTIRE CONSTRUCT BELOW CAN BE MOVED TO ITS OWN TEMPLATE PART IN MADICOU DIRECTORY -->
						<?php //get_template_part('template-parts/madicou/content-document') ?>
						<!-- ENABLE ABOVE LINE OF CODE TO INCLUDE DOCUMENT CONTENT -->
						<?php $doc_args = array( 
							'post_type' => 'madicou',
							'madicou_taxonomies' => $post_slug,
							'madicou-types' => 'document'
						);
						$doc_query = new WP_Query( $doc_args );
						if ( $doc_query->have_posts() ) : while ( $doc_query->have_posts() ) : $doc_query->the_post(); 
							// TODO: Add PDF ATTACHMENT
							?>
							<div class="cell">
								<div class="meta">
									<a href="#" class="doc-link"><i class="fal fa-file-pdf"></i></a>
									<h4 class="blue"><?php the_title() ;?></h4>
									<?php the_excerpt() ;?>
								</div>
							</div>
						<?php endwhile; else: ?> 
							<div class="cell">
								<p>Sorry, there are no Documents to display</p>
							</div>
						<?php endif; ?>
						<?php wp_reset_query(); ?>

							<!--<div class="cell">
								<div class="meta">
									<a href="#" class="doc-link"><i class="fal fa-file-pdf"></i></a>
									<h4 class="blue">Document Title</h4>
									<p>Description of the Resource would go here</p>
								</div>
							</div>
							<div class="cell">
								<div class="meta">
									<a href="#" class="doc-link"><i class="fal fa-file-pdf"></i></a>
									<h4 class="blue">Document Title</h4>
									<p>Description of the Resource would go here</p>
								</div>
							</div>
							<div class="cell">
								<div class="meta">
									<a href="#" class="doc-link"><i class="fal fa-file-pdf"></i></a>
									<h4 class="blue">Document Title</h4>
									<p>Description of the Resource would go here</p>
								</div>
							</div>-->


						</div>
					</div>




				</div>
			</div>
		</div>
	</div>
</section>

<?php } ?>



<?php get_footer('madicou'); //needs custom MadicoU footer