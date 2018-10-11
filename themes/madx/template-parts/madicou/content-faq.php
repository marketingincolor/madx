<?php 
$post_slug = $post->post_name;
$doc_args = array( 
	'post_type' => 'faq',
	'faq_taxonomies' => $post_slug
);
$doc_query = new WP_Query( $doc_args );
if ( $doc_query->have_posts() ) : while ( $doc_query->have_posts() ) : $doc_query->the_post(); 
	?>

	<div class="cell">
		<div class="meta">
			<h4 class="blue"><?php the_title() ;?></h4>
			<?php the_content() ;?>
		</div>
	</div>

<?php endwhile; else: ?> 
	<div class="cell">
		<p style="padding:1em;">Sorry, there are no <?php echo $post->post_title; ?> FAQs to display</p>
	</div>
<?php endif;
wp_reset_query(); ?>