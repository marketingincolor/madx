<?php 
/* Template Name: Madico U */
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
	
	<?php //get_template_part('template-parts/madicou/time-management') ?>

	<?php //get_template_part('template-parts/madicou/employee-relations') ?>

	<?php get_template_part('template-parts/madicou/marketing-resources') ?>

	<?php //get_template_part('template-parts/madicou/windowfilm-benefits') ?>
<?php } else { ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<section>
			<div class="grid-container">
				<div class="grid-x">
					<div class="small-10 small-offset-1 medium-8 large-offset-0 cell">
						<h1 class="blue"><?php the_title(); ?></h1>
						<aside class="yellow-underline left"></aside>
						<p class="subhead"><?php the_content(); ?></p>		
					</div>
				</div>
			</div>
		</section>
	<?php endwhile;endif; ?>


<div class="small reveal" id="videoModal1" v-reveal>
	<div class="grid-container">
		<div class="grid-x">
			<div id="modal-content" class="small-10 small-offset-1 cell">
				<div class="flex-video">
				    <iframe allowfullscreen="" frameborder="0" height="315" src="//www.youtube.com/embed/M7lc1UVf-VE" width="420"></iframe>
				</div>
				<h2>Video Title</h2>
				<p>Video Info - https://youtu.be/M7lc1UVf-VE</p>
				<button class="close-button" data-close aria-label="Close modal" type="button">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
		</div>
	</div>
</div>


<section class="page-content">
	<div class="grid-container">
		<div class="grid-x grid-margin-x grid-margin-y">
			<div class="cell small-10 small-offset-1 medium-9 medium-offset-0">
				<div class="grid-x grid-margin-x grid-margin-y">
					<div class="cell">
						<h3>Videos <a href="" class="blue see-more">Watch More Videos &nbsp;<i class="fal fa-long-arrow-right"></i></a></h3>
					</div>
					<div class="cell page-videos">
						<div class="grid-x grid-margin-x grid-margin-y">
							<div class="medium-4 cell module auto-height">
								<a href="#"><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/device-protection-module.png" alt="Device Protection"></a>
								<div class="meta">
									<button data-open="videoModal1"><h4 class="blue">Video Title</h4></button>
									<p>Video Runtime / Description</p>
								</div>
							</div>
							<div class="medium-4 cell module auto-height">
								<a href="#"><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/device-protection-module.png" alt="Device Protection"></a>
								<div class="meta">
									<button data-open="videoModal1"><h4 class="blue">Video Title</h4></button>
									<p>Video Runtime / Description</p>
								</div>
							</div>
							<div class="medium-4 cell module auto-height">
								<a href="#"><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/device-protection-module.png" alt="Device Protection"></a>
								<div class="meta">
									<button data-open="videoModal1"><h4 class="blue">Video Title</h4></button>
									<p>Video Runtime / Description</p>
								</div>
							</div>
							<div class="medium-4 cell module auto-height">
								<a href="#"><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/device-protection-module.png" alt="Device Protection"></a>
								<div class="meta">
									<button data-open="videoModal1"><h4 class="blue">Video Title</h4></button>
									<p>Video Runtime / Description</p>
								</div>
							</div>
							<div class="medium-4 cell module auto-height">
								<a href="#"><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/device-protection-module.png" alt="Device Protection"></a>
								<div class="meta">
									<button data-open="videoModal1"><h4 class="blue">Video Title</h4></button>
									<p>Video Runtime / Description</p>
								</div>
							</div>
							<div class="medium-4 cell module auto-height">
								<a href="#"><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/device-protection-module.png" alt="Device Protection"></a>
								<div class="meta">
									<button data-open="videoModal1"><h4 class="blue">Video Title</h4></button>
									<p>Video Runtime / Description</p>
								</div>
							</div>
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
						<h3>Documents <a href="" class="blue see-more">More &nbsp;<i class="fal fa-long-arrow-right"></i></a></h3>
					</div>
					<div class="cell module side-documents">
						<div class="grid-y grid-margin-x grid-margin-y">
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
							</div>
							<div class="cell">
								<div class="meta">
									<a href="#" class="doc-link"><i class="fal fa-file-pdf"></i></a>
									<h4 class="blue">Document Title</h4>
									<p>Description of the Resource would go here</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php } ?>



<?php get_footer('madicou'); //needs custom MadicoU footer