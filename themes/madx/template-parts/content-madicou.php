<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" class="small-12 cell module auto-height">
	<?php if (get_field('video_url')) { ?>
		<div class="flex-video">
			<iframe allowfullscreen="allowfullscreen" frameborder="0" height="315" src="<?php echo get_field('video_url').'?rel=0'; ?>" width="420"></iframe>
		</div>
	<?php }if(has_post_thumbnail()) { ?>
		<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" style="width:100%;margin-bottom:30px">
	<?php } ?>
	<div class="meta">
		<h1 class="blue"><?php the_title(); ?></h1>
		<?php the_content(); ?>
	</div>
</article>
