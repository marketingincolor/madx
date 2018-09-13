<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

<section class="page-hero" style="background-image: url(<?php the_post_thumbnail_url( 'full' ); ?>);">

	<?php get_template_part('template-parts/menus/blog-header-menu'); ?>
	<?php $cat = get_the_category(); ?>

	<div class="grid-container">
		<div class="grid-x">
			<div class="large-10 medium-8 cell">
				<h1 class="blue"><?php the_title(); ?></h1>
				<ul class="post-meta absolute">
					<li><i class="fal fa-calendar-alt"></i> &nbsp; <?php the_date(); ?></li>
					<li><i class="fal fa-folder-open"></i> <?php echo $cat[0]->name; ?></li>
					<li>
						<ul class="social">
							<li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
							<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<section class="post-content">
	<div class="grid-container">
		<div class="grid-x grid-margin-x">
			<div class="medium-7 cell">
				
				<?php the_content(); ?>

			</div>
			<div class="medium-4 medium-offset-1 cell">

				<?php get_sidebar(); ?>

			</div>
		</div>
	</div>
</section>

<?php endwhile; ?>


<?php get_footer();
