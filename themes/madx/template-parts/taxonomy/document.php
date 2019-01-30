<?php $term = get_queried_object(); ?>

<section class="taxonomy-intro">
	<div class="grid-container">
		<div class="grid-x">
			<div class="large-8 medium-10 medium-offset-1 large-offset-2 cell text-center">
				<h1 class="blue"><?php the_field('intro_heading',$term); ?></h1>
				<aside class="yellow-underline center"></aside>
				<p class="subhead"><?php the_field('intro_subhead',$term); ?></p>
			</div>
		</div>
	</div>
	<div class="documents">
		<div class="grid-container">
			<div class="grid-x">
				<div class="small-10 small-offset-1 large-12 large-offset-0 cell">
					<div class="grid-x grid-margin-x grid-margin-y">
						<?php 
						$doc_args = array( 
							'posts_per_page'=>-1,
							'post_type' => 'madicou',
							'madicou-types' => 'document'
						);
						$doc_query = new WP_Query( $doc_args );
						if ( $doc_query->have_posts() ) : while ( $doc_query->have_posts() ) : $doc_query->the_post(); 
							$doc_attachment = get_field('doc_attachment'); // Requires ACF Field for 'doc_attachment'
							?>
							<div class="cell medium-4 module auto-height">
								<div class="meta">
									<h4 class="blue" style="margin-bottom:20px"><?php the_title() ;?></h4>
									<div class="grid-x grid-margin-y" style="margin-bottom:20px">
										<div class="small-2 cell text-center">
											<i class="fal fa-file-pdf blue" style="font-size: 2.375rem"></i>
										</div>
										<div class="small-10 large-9 cell">
											<a href="<?php the_field('document_attachment'); ?>" target="_blank">Accompanying PDF</a>
											<p>Click to download</p>
										</div>
									</div>
								</div>
							</div>
						<?php endwhile; else: ?> 
							<div class="cell">
								<p style="padding:1em;">Sorry, there are no Documents to display</p>
							</div>
						<?php endif;wp_reset_postdata(); ?>
					</div>
				</div>
			</div>
	  </div>
	</div>
</section>