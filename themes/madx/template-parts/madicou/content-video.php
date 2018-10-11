<?php 
$post_slug = $post->post_name;
$video_args = array( 
	'post_type' => 'madicou',
	'madicou_taxonomies' => $post_slug,
	'madicou-types' => 'video'
);
$video_query = new WP_Query( $video_args );
if ( $video_query->have_posts() ) : while ( $video_query->have_posts() ) : $video_query->the_post(); 
	$video_url = get_field('video_url'); // Requires ACF Field for 'video_url'
	$video_meta = get_field('video_meta'); // Requires ACF Field for 'video_meta'
	$video_file = get_field('video_attachment'); // Requires ACF Field for 'video_meta'
	?>

	<div class="medium-4 cell module auto-height <?php echo $post_slug; ?>">
		<div class="image-link" data-videotitle="Title of Video">
			<a href="#!" data-open="video-modal" class="videolink" data-videourl="<?php echo $video_url; ?>" data-videotitle="<?php the_title() ;?>" data-videometa="<?php echo $video_meta; ?>" data-attach="<?php echo $video_file; ?>"><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/device-protection-module.png" alt="Device Protection"></a>
		</div>
		<div class="meta">
			<button data-open="video-modal" class="videolink" data-videourl="<?php echo $video_url; ?>" data-videotitle="<?php the_title() ;?>" data-videometa="<?php echo $video_meta; ?>" data-attach="<?php echo $video_file; ?>"><h4 class="blue"><?php the_title() ;?></h4></button>
			<p><?php echo $video_meta; ?></p>
		</div>
	</div>

<?php endwhile; else: ?> 
	<div class="cell">
		<p style="padding:1em;">Sorry, there are no <?php echo $post->post_title; ?> Videos to display</p>
	</div>
<?php endif;
wp_reset_query(); ?>