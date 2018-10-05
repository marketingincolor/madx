<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>
<div class="main-container">
	<div class="main-grid">
		<main class="main-content">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', '' ); ?>
				<?php the_post_navigation(); ?>
				<?php comments_template(); ?>
			<?php endwhile; ?>


<?php
$terms = get_the_terms($post->ID, 'madicou_taxonomies');
if ($terms[0]->slug == 'videos') {
	//get_template_part('/template-parts/single-templates/case-studies');
	echo 'Videos go here!';
} 
?>

		</main>
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer();
