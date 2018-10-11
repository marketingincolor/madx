<?php 
/* Template Name: Madico U */
global $post;
get_header('madicou'); ?>

<?php if (is_page('madicou')) { ?> 
	<?php get_template_part('template-parts/madicou/page-hero'); ?>
<?php } else { ?>
	<?php get_template_part('template-parts/madicou/page-search'); ?>
<?php } ?>

<?php get_template_part('template-parts/madicou/submenu'); ?>

<?php if (is_page('madicou')) { ?> 
	<?php get_template_part('template-parts/madicou/virtual-campus') ?>
	<?php get_template_part('template-parts/madicou/business-resources') ?>
	<?php get_template_part('template-parts/madicou/sales-resources') ?>
	<?php get_template_part('template-parts/madicou/marketing-resources') ?>
<?php } elseif (is_page('ask-a-question') || is_page('glossary')) { ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part('template-parts/madicou/page-titleblock') ?>
	<?php endwhile;endif; ?>
<?php } else { ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part('template-parts/madicou/page-titleblock') ?>
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
							<!-- BEGIN LOOP for VIDEOS by SECTION/SLUG -->
							<?php get_template_part('template-parts/madicou/content-video') ?>
							<!-- END LOOP for VIDEOS by SECTION/SLUG -->
						</div>
					</div>

					<!-- ////////// BEGIN Body Cells for FAQs ////////// -->
					<div class="cell">
						<h3>Frequently Asked Questions <a href="<?php echo site_url('/faqs/'); ?>" class="blue see-more">More &nbsp;<i class="fal fa-long-arrow-right"></i></a></h3>
					</div>
					<div class="cell module page-faqs">
						<div class="grid-y grid-margin-x grid-margin-y">
							<!-- BEGIN LOOP for FAQS by SECTION/SLUG -->
							<?php get_template_part('template-parts/madicou/content-faq') ?>
							<!-- END LOOP for FAQS by SECTION/SLUG -->
						</div>
					</div>

				</div>
			</div>
			<div class="cell small-10 small-offset-1 medium-3 medium-offset-0">
				<div class="grid-x grid-margin-x grid-margin-y">

					<!-- ////////// BEGIN Sidebar Cells for ARTICLES ////////// -->
					<div class="cell">
						<h3>Articles <a href="<?php echo site_url('/mu-types/article/'); ?>" class="blue see-more">More &nbsp;<i class="fal fa-long-arrow-right"></i></a></h3>
					</div>
					<div class="cell side-articles">
						<div class="grid-y grid-margin-x grid-margin-y">
						<!-- BEGIN LOOP for ARTICLES by SECTION/SLUG -->
						<?php get_template_part('template-parts/madicou/content-article') ?>
						<!-- END LOOP for ARTICLES by SECTION/SLUG -->
						</div>
					</div>

					<!-- ////////// BEGIN Sidebar Cells for DOCUMENTS ////////// -->
					<div class="cell">
						<h3>Documents <a href="<?php echo site_url('/mu-types/document/'); ?>" class="blue see-more">More &nbsp;<i class="fal fa-long-arrow-right"></i></a></h3>
					</div>
					<div class="cell module side-documents">
						<div class="grid-y grid-margin-x grid-margin-y">
						<!-- BEGIN LOOP for DOCUMENTS by SECTION/SLUG -->
						<?php get_template_part('template-parts/madicou/content-document') ?>
						<!-- END LOOP for DOCUMENTS by SECTION/SLUG -->
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>
<?php } ?>

<?php get_footer('madicou'); //needs custom MadicoU footer