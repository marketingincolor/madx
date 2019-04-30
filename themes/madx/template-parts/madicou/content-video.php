<?php 
$post_slug = $post->post_name;
$video_args = array( 
	'posts_per_page'=> 6,
	'post_type' => 'madicou',
	'madicou_taxonomies' => $post_slug,
	'madicou-types' => 'video'
);
$video_query = new WP_Query( $video_args );
if ( $video_query->have_posts() ) : while ( $video_query->have_posts() ) : $video_query->the_post(); 
	$video_url = get_field('video_url'); // Requires ACF Field for 'video_url'
	$video_meta = get_field('video_meta'); // Requires ACF Field for 'video_meta'
	$video_file = get_field('video_attachment'); // Requires ACF Field for 'video_meta'
	$title_lower  = strtolower(get_the_title());
	$title_split  = explode(' ', $title_lower);
	$title_joined = implode('-', $title_split);
	?>

	<div class="medium-4 cell module auto-height <?php echo $post_slug; ?>">
		<div class="image-link">
			<a href="<?php the_permalink(); ?>"><div class="module-bg madicou-modal-image-<?php echo $title_joined; ?>" style="background-image: url(<?php the_post_thumbnail_url(); ?>)"></div></a>
		</div>
		<div class="meta">
			<a href="<?php the_permalink(); ?>"><h4 class="blue madicou-modal-heading-<?php echo $title_joined; ?>"><?php the_title() ;?></h4></a>
			<p><i class="fal fa-clock"></i> &nbsp;<?php echo $video_meta; ?></p>
		</div>
	</div>

<?php endwhile; else: ?> 
	<div class="cell">
		<p style="padding:1em;">There are no <?php echo $post->post_title; ?> videos to display</p>
	</div>
<?php endif;wp_reset_postdata(); ?>