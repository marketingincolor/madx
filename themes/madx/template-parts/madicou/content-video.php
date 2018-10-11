<?php 
$post_slug = $post->post_name;
$video_args = array( 
	'post_type' => 'madicou',
	'madicou_taxonomies' => $post_slug,
	'madicou-types' => 'video'
);
$video_query = new WP_Query( $video_args );
if ( $video_query->have_posts() ) : while ( $video_query->have_posts() ) : $video_query->the_post(); 
	//$video_url = the_field('video-url'); // Requires ACF Field for 'video-url'
	//$video_meta = the_field('video-meta'); // Requires ACF Field for 'video-meta'
	?>

	<div class="medium-4 cell module auto-height <?php echo $post_slug; ?>">
		<div class="image-link" data-videotitle="Title of Video">
			<a href="#!" data-open="video-modal" class="videolink" data-videourl="https://www.youtube.com/embed/M7lc1UVf-VE" data-videotitle="<?php the_title() ;?>"><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/device-protection-module.png" alt="Device Protection"></a>
		</div>
		<div class="meta">
			<button data-open="video-modal" class="videolink" data-videourl="https://www.youtube.com/embed/M7lc1UVf-VE" data-videotitle="<?php the_title() ;?>"><h4 class="blue"><?php the_title() ;?></h4></button>
			<p>Video Runtime / Description</p>
		</div>
	</div>

<?php endwhile; else: ?> 
	<div class="cell">
		<p>Sorry, there are no Videos to display</p>
	</div>
<?php endif;
wp_reset_query(); ?>