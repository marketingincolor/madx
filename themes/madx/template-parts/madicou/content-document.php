<?php 
if ( $doc_query->have_posts() ) : while ( $doc_query->have_posts() ) : $doc_query->the_post();
	?>
	<div class="cell medium-4 module auto-height">
		<div class="meta">
			<h4 class="blue" style="margin-bottom:20px"><?php the_title() ;?></h4>
			<div class="grid-x grid-margin-y" style="margin-bottom:20px">
				<div class="small-2 cell text-center">
					<i class="fal fa-file-pdf blue" style="font-size: 2.375rem"></i>
				</div>
				<div class="small-10 large-offset-1 large-9 cell">
					<a href="<?php the_field('document_attachment'); ?>" target="_blank">Accompanying PDF</a>
					<p>Click to download</p>
				</div>
			</div>
		</div>
	</div>
<?php endwhile; else: ?> 
	<div class="cell">
		<p style="padding:1em;">There are no <?php echo $post->post_title; ?> Documents to display</p>
	</div>
<?php endif;wp_reset_postdata(); ?>