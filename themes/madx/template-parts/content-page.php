<?php
/**
 * The default template for displaying page content
 *
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('small-10 small-offset-1 large-8 large-offset-2'); ?>>
	<div class="grid-x">
		<div class="small-12 cell text-center">
			<h1 class="blue"><?php the_title(); ?></h1>
			<aside class="yellow-underline center"></aside>
			<?php if(get_field('page_subhead')) { ?><div class="subhead"><?php the_field('page_subhead'); ?></div><?php } ?>
		</div>
	</div>
	<div class="entry-content">

		<?php if( have_rows('gallery_content') ): ?>

			<!-- Foundation 6 Carousel/Orbit -->
			<div class="orbit" id="careers-orbit" role="region" aria-label="Madico Careers Images" v-f-orbit>
			  <div class="orbit-wrapper">
			    <div class="orbit-controls">
			      <button class="orbit-previous" style="background-color: rgba(0,0,0,0.4);"><span class="show-for-sr">Previous Slide</span><i class="fas fa-chevron-left"></i></button>
			      <button class="orbit-next" style="background-color: rgba(0,0,0,0.4);"><span class="show-for-sr">Next Slide</span><i class="fas fa-chevron-right"></i></button>
			    </div>
			    <div class="grid-x">
			    	<div class="small-12 cell">
					    <ul class="orbit-container">

				    	  <?php
				    	  $count = 0;
				    	    while ( have_rows('gallery_content') ) : the_row(); ?>

				    	    	<?php $img = get_sub_field('gallery_image'); ?>

				    	      <li class="orbit-slide <?php if($count == 0){echo 'is-active';} ?>">
				    	        <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
				    	      </li>
				    	            
								<?php endwhile; ?>
					      
					    </ul>
			    	</div>
			    </div>
			  </div>
			</div>

	  <?php endif; ?>

		<?php the_content(); ?>
		<?php if(is_page('product-warranties')) { ?>
			<jot-form form-id="82824355186160"></jot-form>
		<?php }else if(is_page('warranty')) { ?>
			<jot-form form-id="82824093286160"></jot-form>
		<?php } ?>
	</div>
	<footer>
		<?php
			wp_link_pages(
				array(
					'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ),
					'after'  => '</p></nav>',
				)
			);
		?>
		<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
	</footer>
</article>
