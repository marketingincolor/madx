<?php 
if ( $article_query->have_posts() ) : while ( $article_query->have_posts() ) : $article_query->the_post(); 
	?>
	<div class="cell medium-12 module auto-height">
		<?php if (get_the_post_thumbnail()) { ?>
		  <a href="<?php echo get_permalink(); ?>"><div class="module-bg" style="background-image:url(<?php the_post_thumbnail_url(); ?>)"></div></a>
	  <?php } ?>
		<div class="meta">
			<a href="<?php echo get_permalink(); ?>"><h4 class="blue"><?php the_title() ;?></h4></a>
			<?php echo wp_trim_words(get_the_excerpt(),10,'...'); ?>
		</div>
	</div>
<?php endwhile; else: ?> 
	<div class="cell">
		<p style="padding:1em;">There are no <?php echo $post->post_title; ?> Articles to display</p>
	</div>
<?php endif;wp_reset_postdata(); ?>