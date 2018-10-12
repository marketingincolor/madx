<?php 
$post_slug = $post->post_name;
$doc_args = array( 
	'post_type' => 'madicou',
	'madicou_taxonomies' => $post_slug,
	'madicou-types' => 'article'
);
$doc_query = new WP_Query( $doc_args );
if ( $doc_query->have_posts() ) : while ( $doc_query->have_posts() ) : $doc_query->the_post(); 
	?>
	<div class="cell module auto-height">
		<a href="<?php echo get_permalink(); ?>"><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/device-protection-module.png"></a>
		<div class="meta">
			<a href="<?php echo get_permalink(); ?>"><h4 class="blue"><?php the_title() ;?></h4></a>
			<?php the_excerpt() ;?>
		</div>
	</div>
<?php endwhile; else: ?> 
	<div class="cell">
		<p style="padding:1em;">Sorry, there are no <?php echo $post->post_title; ?> Articles to display</p>
	</div>
<?php endif;
wp_reset_query(); ?>