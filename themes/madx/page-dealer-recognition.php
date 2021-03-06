<?php
/* Template Name: Dealer Recognition */
get_header('dealers');
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="show-for-small-only" style="margin-bottom:40px">
	<?php get_template_part('template-parts/menus/dealers-header-menu'); ?>
</div>

<div class="grid-container" style="margin-bottom:40px">
	<div class="grid-x">
		<div class="small-10 small-offset-1 large-12 large-offset-0 show-for-medium-only">
			<?php get_template_part('template-parts/menus/dealers-tablet-menu'); ?>
		</div>
		<div class="small-10 small-offset-1 large-12 large-offset-0 show-for-large">
			<?php get_template_part('template-parts/menus/dealers-header-menu'); ?>
		</div>
	</div>
</div>

<section class="dealer-carousel" style="background-color: <?php the_field('carousel_background'); ?>">
	<div class="grid-container">
		<div class="grid-x">
			<div class="small-10 small-offset-1 cell">
				<!-- Foundation 6 Carousel/Orbit -->
				<div class="orbit" role="region" aria-label="Dealer Awards" v-f-orbit>
				  <div class="orbit-wrapper">
            <!-- Only show controls if there is more than one slide -->
            <?php if(count(get_field('carousel')) > 1): ?>
  				    <div class="orbit-controls">
  				      <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span><i class="fas fa-chevron-left"></i></button>
  				      <button class="orbit-next"><span class="show-for-sr">Next Slide</span><i class="fas fa-chevron-right"></i></button>
  				    </div>
            <?php endif; ?>
				    <ul class="orbit-container">
		    		
		    		<?php
		    		    $count = 0;
		    		    if( have_rows('carousel') ):
		    		    while ( have_rows('carousel') ) : the_row();
		    		?>
		    		
				    <li class="<?php if($count === 0){echo 'is-active ';} ?>orbit-slide">
				        <div class="grid-x grid-margin-x grid-margin-y align-middle">
							<div class="medium-5 cell text-center">
								<img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('award_type'); ?>">
							</div>
							<div class="medium-7 cell">
								<h6 class="award"><?php the_sub_field('award_type'); ?></h6>
								<p class="white"><?php the_sub_field('dealer_bio'); ?></p>
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

<section class="page-intro">
	<div class="grid-container">
		<div class="grid-x">
			<div class="large-8 large-offset-2 small-10 small-offset-1 cell text-center">
				<h1 class="blue"><?php the_field('intro_title'); ?></h1>
				<aside class="yellow-underline center"></aside>
				<p><?php the_field('intro_copy') ?></p>
				<?php if(get_field('intro_button_link')){ ?>
					<p style="margin-bottom:25px"></p>
					<a href="<?php the_field('intro_button_link'); ?>"><button class="btn-blue border"><?php the_field('intro_button_text'); ?></button></a>
				<?php } ?>
			</div>
		</div>
	</div>
</section>

<section class="dealer-quarter" style="background: url(<?php the_field('dealer_quarter_background_image'); ?>) center top / cover no-repeat">
  <!-- Mobile Image -->
	<div class="hide-for-medium">
		<img src="<?php the_field('dealer_quarter_background_image'); ?>" alt="<?php the_field('third_benefit_heading'); ?>" class="mobile-image">
	</div>
  <div class="grid-container">
    <div class="grid-x">
      <div class="small-10 small-offset-1 large-5 large-offset-7 medium-6 medium-offset-6 cell">
        <h2 class="blue"><?php the_field('dealer_quarter_headline'); ?></h2>
        <aside class="yellow-underline left"></aside>
        <p style="margin-bottom:30px;"><?php the_field('dealer_quarter_body'); ?></p>
        <a data-target="#cta" @click="smoothScroll" class="btn-blue border"><span><?php the_field('dealer_quarter_button_text') ?></span></a>
      </div>
    </div>
  </div>
</section>

<section class="benefit3" style="background: url(<?php the_field('first_benefit_background_image'); ?>) center center / cover no-repeat">
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
			<div class="small-10 small-offset-1 cell text-right">
				<h2 class="white"><?php the_field('second_benefit_heading'); ?></h2>
				<aside class="yellow-underline right"></aside>
				<?php
					if(get_field('second_benefit_cta')){
						$style = 'style="margin-bottom:20px"';
						$cta   = '<a data-target="#cta" @click="smoothScroll" class="white"><span>' . get_field("second_benefit_cta") . '</span> &nbsp;<i class="far fa-long-arrow-right"></i></a>';
					}
				?>
				<div class="content" <?php echo $style; ?>><?php the_field('second_benefit_subhead'); ?></div>
				<?php echo $cta; ?>
			</div>
		</div>
	</div>
</section>

<section class="benefit3 last" style="background: url(<?php the_field('third_benefit_background_image'); ?>) top center / cover no-repeat">
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

<section id="cta" class="cta-section" style="background-color: <?php the_field('cta_background'); ?>">
	<div class="grid-container">
		<div class="grid-x">
			<div class="large-8 small-10 small-offset-1 large-offset-2 cell text-center">
				<h2 class="white"><?php the_field('cta_heading'); ?></h2>
				<aside class="yellow-underline center"></aside>
				<p class="white"><?php the_field('cta_subhead'); ?></p>
			</div>
		</div>
	</div>
</section>

</div><!-- Close div#app from header.php -->
<div id="not-app">
<section class="contact">
	<div class="grid-container">
		<div class="grid-x">
			<div class="large-8 small-10 small-offset-1 large-offset-2 cell content-block">
				<div class="meta">
					<h4 class="blue"><?php the_field('contact_heading'); ?></h4>
					<p class="subhead"><?php the_field('contact_subhead'); ?></p>
				</div>
				<div><?php the_field('contact_form_shortcode'); ?></div>
			</div>
		</div>
	</div>
</section>

<?php 
endwhile;endif;
get_footer();