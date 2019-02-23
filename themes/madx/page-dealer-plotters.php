<?php
/* Template Name: Dealer Plotters */
get_header('dealers');
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<section class="page-hero">

		<div class="show-for-small-only">
			<?php get_template_part('template-parts/menus/dealers-header-menu'); ?>
		</div>

		<div id="header-grid" class="grid-container">
			<div class="grid-x">
				<div class="small-10 small-offset-1 large-12 large-offset-0 show-for-medium-only">
					<?php get_template_part('template-parts/menus/dealers-tablet-menu'); ?>
				</div>
				<div class="small-10 small-offset-1 large-12 large-offset-0 show-for-large">
					<?php get_template_part('template-parts/menus/dealers-header-menu'); ?>
				</div>
			</div>
		</div>

		<div class="grid-container">
			<div class="grid-x">
				<div class="small-10 small-offset-1 medium-8 medium-offset-2 cell text-center">
					<h1 class="blue"><?php the_field('intro_title'); ?></h1>
					<aside class="yellow-underline center"></aside>
					<p><?php the_field('intro_copy') ?></p>
				</div>
			</div>
		</div>
	</section>

<section class="dealer-carousel" style="background-color: <?php the_field('carousel_background'); ?>">
	<div class="grid-container">
		<div class="grid-x">
			<div class="small-10 small-offset-1 cell">
				<!-- Foundation 6 Carousel/Orbit -->
				<div class="orbit" role="region" aria-label="Dealer Awards" v-f-orbit>
				  <div class="orbit-wrapper">
				    <div class="orbit-controls">
				      <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span><i class="fas fa-chevron-left"></i></button>
				      <button class="orbit-next"><span class="show-for-sr">Next Slide</span><i class="fas fa-chevron-right"></i></button>
				    </div>
				    <ul class="orbit-container">
		    		
		    		<?php
		    		    $count = 0;
		    		    if( have_rows('carousel') ):
		    		    while ( have_rows('carousel') ) : the_row();
		    		?>
		    		
				    <li class="<?php if($count === 0){echo 'is-active ';} ?>orbit-slide">
				        <div class="grid-x grid-margin-x grid-margin-y align-middle">
							<div class="medium-7 cell">
								<img src="<?php the_sub_field('image'); ?>" alt="">
							</div>
							<div class="medium-5 cell">
								<h2 class="blue"><?php the_sub_field('award_type'); ?></h6>
								<aside class="yellow-underline left"></aside>
								<p><?php the_sub_field('dealer_bio'); ?></p>
							</div>
				        </div>
				    </li>
		  		    		
		  		    <?php $count++;endwhile;endif; ?>
				      
				    </ul>
				  </div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="benefit3 first" style="background: url(<?php the_field('first_benefit_background_image'); ?>) center center / cover no-repeat">
	<!-- Mobile Image -->
	<div class="hide-for-medium">
		<img src="<?php the_field('first_benefit_mobile_image'); ?>" alt="<?php the_field('third_benefit_heading'); ?>" class="mobile-image">
	</div>
	<div class="grid-container">
		<div class="grid-x grid-margin-y">
			<div class="large-4 medium-5 small-10 small-offset-1 cell">
				<h2 class="blue"><?php the_field('first_benefit_heading'); ?></h2>
				<aside class="yellow-underline left"></aside>
				<div class="content"><?php the_field('first_benefit_subhead'); ?></div>
			</div>
		</div>
	</div>
</section>

<section class="benefit2" style="background: url(<?php the_field('second_benefit_background_image'); ?>) center center / cover no-repeat">
	<div class="grid-container">
		<div class="grid-x">
			<div class="small-10 small-offset-1 cell">
				<h2 class="white"><?php the_field('second_benefit_heading'); ?></h2>
				<aside class="yellow-underline left"></aside>
				<div class="content"><?php the_field('second_benefit_subhead'); ?></div>
			</div>
		</div>
	</div>
</section>

<section class="benefit3 last" style="background: url(<?php the_field('third_benefit_background_image'); ?>) center center / cover no-repeat">
	<div class="grid-container">
		<div class="grid-x grid-margin-y">
			<div class="large-4 medium-5 small-10 small-offset-1 cell">
				<h2 class="blue"><?php the_field('third_benefit_heading'); ?></h2>
				<aside class="yellow-underline left"></aside>
				<p><?php the_field('third_benefit_subhead'); ?></p>
			</div>
		</div>
	</div>
	<!-- Mobile Image -->
	<div class="hide-for-medium">
		<img src="<?php the_field('third_benefit_mobile_image'); ?>" alt="<?php the_field('third_benefit_heading'); ?>" class="mobile-image">
	</div>
</section>

<section class="contact">
	<div class="grid-container">
		<div class="grid-x">
			<div class="large-8 small-10 small-offset-1 large-offset-2 cell content-block">
				<div class="meta">
					<h4 class="blue"><?php the_field('contact_heading'); ?></h4>
					<?php if(get_field('contact_subhead')){ ?>
					  <p class="subhead"><?php the_field('contact_subhead'); ?></p>
					<?php } ?>
				</div>
				<div><?php the_field('contact_form_shortcode'); ?></div>
			</div>
		</div>
	</div>
</section>

<?php 
endwhile;endif;
get_footer();