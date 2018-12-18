<?php
/**
 * The template for displaying search results pages.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

if ($_GET['post_type'] === 'madicou') {
	get_header('madicou');
}else{
  get_header();
}
?>

<section class="main-container">
	<div class="grid-container">
		<main id="search-results" class="grid-x" <?php if ($_GET['post_type'] === 'madicou') {echo 'style="margin-top:40px"';} ?>>
			<div class="small-10 small-offset-1 large-12 large-offset-0 cell">
				<div class="grid-x grid-margin-x grid-margin-y">
					<div class="small-12 cell">
						<header>
							<h1 class="entry-title blue"><?php _e( 'Search Results for:', 'madx' ); ?> "<?php echo get_search_query(); ?>"</h1>
						</header>
					</div>

					<?php
					  if($_GET['post_type'] === 'madicou'){
						  $args = array(
						  	'post_type'      => 'madicou',
						  	'posts_per_page' => 99
						  );
						  $the_query = new WP_Query( $args );
						  // var_dump($the_query->request);
						  if ( $the_query->have_posts() ) :
						  	while ( $the_query->have_posts() ) : $the_query->the_post();
						  		if(stripos(get_the_content(), get_search_query()) !== false || stripos(get_the_title(), get_search_query()) !== false){

						  			$post_link = get_the_permalink();
						  			if (has_post_format('video')) {
						  				$video_url  = get_field('video_url');
						  				$video_meta = get_field('video_meta');
						  				$video_file = get_field('video_attachment');
						  				$post_link  = '#!';
						  			} ?>

									<div class="medium-6 large-4 cell module auto-height">
										<div class="image-link" data-videotitle="<?php the_title(); ?>">
										  <a href="<?php echo $post_link; ?>" <?php if (has_post_format('video')) {echo 'data-open="video-modal"';} ?> class="videolink" data-videourl="<?php echo $video_url; ?>" data-videotitle="<?php the_title() ;?>" data-videometa="<?php echo $video_meta; ?>" data-attach="<?php echo $video_file; ?>" data-videotxt="<?php ?>"><div class="module-bg small" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div></a>
										</div>
										<div class="meta">
											<a href="<?php echo $post_link; ?>" <?php if (has_post_format('video')) {echo 'data-open="video-modal"';} ?> class="videolink" data-videourl="<?php echo $video_url; ?>" data-videotitle="<?php the_title() ;?>" data-videometa="<?php echo $video_meta; ?>" data-attach="<?php echo $video_file; ?>" data-videotxt="<?php ?>"><h4 class="blue"><?php the_title(); ?></h4></a>
											<p style="margin-bottom:20px"><?php echo wp_trim_words(get_the_content(),20,'...'); ?></p>
												<?php if(has_post_format('video')) { ?>
													<p><i class="fal fa-clock"></i> &nbsp;<?php echo $video_meta; ?></p>
												<?php }else{ ?>
												  <a href="<?php echo $post_link; ?>" class="blue read-more"><?php _e( 'Read More', 'madx' ); ?> &nbsp;<i class="fal fa-long-arrow-right"></i></a>
											  <?php } ?>
										</div>
									</div>
						  		
						  	<?php }endwhile;wp_reset_postdata(); ?>

						  <?php else : ?>
						  	<p><?php esc_html_e( 'Sorry, no results matched your search criteria.' ); ?></p>
						  <?php endif; ?>
						  <madu-video-modal></madu-video-modal>
					
					<?php }else{ ?>

						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							
						<div class="medium-6 large-4 cell module auto-height">
							<div class="module-bg" style="background-image: url(<?php the_post_thumbnail_url(); ?>)"></div>
							<div class="meta">
								<a href="<?php the_permalink(); ?>"><h4 class="blue" style="margin-bottom:20px"><?php echo wp_trim_words(get_the_title(),10,'...'); ?></h4></a>
								<p><?php echo wp_trim_words(get_the_content(),30,'...'); ?></p>
							</div>
						</div>
							
						<?php endwhile;endif; ?>

						<?php
						if ( function_exists( 'foundationpress_pagination' ) ) :
							echo '<div class="small-12 cell">';
							  foundationpress_pagination();
							echo '</div>';
						elseif ( is_paged() ) :
						?>
						<div class="small-12 cell">
							<nav id="post-nav">
								<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
								<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
							</nav>
						</div>

						<?php endif; ?>
				  <?php } ?>

				</div>
			</div>
		</main>
	</div>
</section>
<?php get_footer();
