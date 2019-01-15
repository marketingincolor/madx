<?php 
if ( $doc_query->have_posts() ) : while ( $doc_query->have_posts() ) : $doc_query->the_post(); 
	$doc_attachment = get_field('document_attachment'); // Requires ACF Field for 'document_attachment'
	?>
	<div class="cell medium-4 module auto-height">
		<div class="meta">
			<h4 class="blue" style="margin-bottom:20px"><?php the_title() ;?></h4>
			<a href="<?php the_field('document_attachment'); ?>" target="_blank"><i class="far fa-file-pdf"></i>&nbsp; Download</a>
		</div>
	</div>
<?php endwhile; else: ?> 
	<div class="cell">
		<p style="padding:1em;">There are no <?php echo $post->post_title; ?> Documents to display</p>
	</div>
<?php endif;wp_reset_postdata(); ?>