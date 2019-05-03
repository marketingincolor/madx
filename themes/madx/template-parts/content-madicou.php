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
		<div class="flex-video" style="padding-bottom:50% !important;">
			<iframe allowfullscreen="allowfullscreen" frameborder="0" height="315" src="<?php echo get_field('video_url').'?rel=0'; ?>" width="560"></iframe>
		</div>
	<?php } elseif(has_post_thumbnail()) { ?>
		<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" style="width:100%;margin-bottom:30px">
	<?php } ?>
	<div class="meta">
		<h1 class="blue"><?php the_title(); ?></h1>
		<?php the_content(); ?>
	</div>
	<?php if (get_field('document_attachment')) { ?>
		<div class="meta flex-document">
			<p><a href="<?php echo get_field('document_attachment'); ?>" target="_blank">Download</a> this document</p>
		</div>
	<?php } ?>
	<?php if (get_field('video_attachment')) { ?>
		<div class="meta flex-document">
			<p><a href="<?php echo get_field('video_attachment'); ?>" target="_blank">Download</a> this document</p>
		</div>
	<?php } ?>
</article>
