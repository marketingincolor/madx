<?php 
$post_slug = $post->post_name;
$doc_args = array( 
	'post_type' => 'madicou',
	'madicou_taxonomies' => $post_slug,
	'madicou-types' => 'document'
);
$doc_query = new WP_Query( $doc_args );
if ( $doc_query->have_posts() ) : while ( $doc_query->have_posts() ) : $doc_query->the_post(); 
	// TODO: Add PDF ATTACHMENT
	?>
	<div class="cell">
		<div class="meta">
			<a href="#" class="doc-link"><i class="fal fa-file-pdf"></i></a>
			<h4 class="blue"><?php the_title() ;?></h4>
			<?php the_excerpt() ;?>
		</div>
	</div>
<?php endwhile; else: ?> 
	<div class="cell">
		<p style="padding:1em;">Sorry, there are no <?php echo $post->post_title; ?> Documents to display</p>
	</div>
<?php endif;
wp_reset_query(); ?>