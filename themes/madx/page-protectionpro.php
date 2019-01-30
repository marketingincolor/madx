<?php 
/* Template Name: ProtectionPro */
get_header(); ?>

<section class="hero relative" style="background-image: url(<?php the_field('about_hero_background_image'); ?>);">
	
	<div class="show-for-small-only">
		<?php get_template_part('template-parts/menus/protectionpro-header-menu'); ?>
	</div>

	<div id="header-grid" class="grid-container">
		<div class="grid-x relative">
			<div class="small-10 small-offset-1 large-12 large-offset-0 cell show-for-medium-only">
				<?php get_template_part('template-parts/menus/protectionpro-tablet-menu'); ?>
			</div>
			<div class="small-10 small-offset-1 large-12 large-offset-0 cell show-for-large">
				<?php get_template_part('template-parts/menus/protectionpro-header-menu'); ?>
			</div>
			<div class="small-10 small-offset-1 medium-6 large-offset-0 cell">
				<h1 class="white"><?php the_field('about_hero_heading'); ?></h1>
				<aside class="yellow-underline left"></aside>
				<p class="white"><?php the_field('about_hero_subhead'); ?></p>
			</div>
		</div>
	</div>
</section>

<section id="touchscreen-protection" class="touchscreen-pro">
	<div class="grid-container">
		<div class="grid-x">
			<div class="small-10 small-offset-1 cell">
				<div class="grid-x grid-margin-x grid-margin-y">
					<div class="medium-6 cell text-center">
						<img src="<?php the_field('touchscreen_image'); ?>" alt="<?php the_field('touchscreen_heading'); ?>">
					</div>
					<div class="medium-6 cell">
						<h2 class="blue"><?php the_field('touchscreen_heading'); ?></h2>
						<aside class="yellow-underline left"></aside>
						<p><?php the_field('touchscreen_subhead'); ?></p>
						<ul class="checklist">

							<?php
							if( have_rows('touchscreen_checklist') ):
							  while ( have_rows('touchscreen_checklist') ) : the_row(); ?>

							    <li><?php the_sub_field('list_item_icon'); ?>&nbsp;&nbsp;<?php the_sub_field('list_item_text'); ?></li>

							<?php endwhile;endif; ?>

						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="infinity-series" class="infinity-series" style="padding:0;background-color:#FFF">
	<div class="grid-container">
		<div class="grid-x grid-margin-x grid-margin-y">
			<div class="small-10 small-offset-1 large-8 large-offset-2 cell text-center">
				<h2 class="blue"><?php the_field('infinity_heading'); ?></h2>
				<aside class="yellow-underline center"></aside>
				<p class="subhead"><?php the_field('infinity_subhead'); ?></p>
			</div>
		</div>
	</div>
	<!-- Infinity Tabs -->
	<ul class="tabs" v-tabs id="infinity-tabs">

		<?php
		$tab_count = 1;
		if( have_rows('infinity_tabs') ):
		  while ( have_rows('infinity_tabs') ) : the_row(); ?>

		    <li class="tabs-title<?php if($tab_count == 1){echo ' is-active';} ?>" style="background-image:url(<?php the_sub_field('tab_background'); ?>);"><a @click="openDistributionTab" href="<?php echo "#panel{$tab_count}"; ?>" aria-selected="true"><?php the_sub_field('tab_title'); ?></a></li>

		<?php $tab_count++;endwhile;endif; ?>
	  
	</ul>
	<!-- Infinity Tabs Content -->
	<div class="tabs-content" data-tabs-content="infinity-tabs">

		<?php
		$tab_count  = 1;
		if( have_rows('infinity_tab_content') ):
		  while ( have_rows('infinity_tab_content') ) : the_row();
		  	$total_rows = count(get_sub_field('tab_color_swatches')); ?>

		    <div class="tabs-panel<?php if($tab_count == 1){echo ' is-active';} ?>" id="<?php echo "panel{$tab_count}"; ?>" style="background-image:url(<?php the_sub_field('tab_background_image'); ?>);">
		      <div class="grid-container">
		      	<div class="grid-x grid-margin-x grid-margin-y">
		      		<div class="small-10 small-offset-1 medium-5 text-column" style="align-self:center">
		      			<h3 class="blue"><?php the_sub_field('tab_title'); ?></h3>
		      			<aside class="yellow-underline left"></aside>
		      			<p style="margin-bottom:30px"><?php the_sub_field('tab_copy'); ?></p>
		      			<div class="grid-x grid-margin-x grid-margin-y small-up-2 <?php if($total_rows > 10 || $total_rows % 6 === 0){echo 'medium-up-6 ';}else if($total_rows <= 10){echo 'medium-up-5 ';} ?>">

	      			  	<?php
	      			  	if( have_rows('tab_color_swatches') ):
	      			  	  while ( have_rows('tab_color_swatches') ) : the_row(); ?>
										
										<div class="cell text-center">
	      			  	  	<img src="<?php the_sub_field('swatch_image') ?>" alt="<?php the_sub_field('swatch_title'); ?>">
										  <?php if(get_sub_field('swatch_title')){ ?>
										    <h5><?php the_sub_field('swatch_title'); ?></h5>
										  <?php } ?>
										</div>

									<?php endwhile;endif; ?>

		      			</div>	
		      		</div>
		      		<div class="small-10 small-offset-1 text-center hide-for-medium">
		      			<img src="<?php the_sub_field('tab_image') ?>" alt="protectionpro <?php the_sub_field('tab_title'); ?>">
		      		</div>
		      		
		      	</div>
		      </div>
		    </div>

		<?php $tab_count++;endwhile;endif; ?>
	  
	</div>
</section>

<?php get_template_part('/template-parts/taxonomy/testimonials'); ?>

<section id="contact" class="about-content">
	<div class="grid-container">
		<div class="grid-x">
			<div class="small-12 cell content-block">
				<div class="grid-x">
					<div class="small-10 small-offset-1 medium-8 medium-offset-2 cell">
						<h4><?php the_field('protectionpro_contact_header'); ?></h4>
						<p class="subhead"><?php the_field('protectionpro_contact_subhead'); ?></p>
						<div><?php the_field('protectionpro_contact_form'); ?></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="find-dealer" class="find-dealer" style="background-image: url(<?php the_field('find_retailer_background_image'); ?>);">
	<div class="grid-container">
		<div class="grid-x">
			<div class="small-10 small-offset-1 medium-7 large-5 large-offset-0 cell">
				<h2 class="white"><?php the_field('find_retailer_heading'); ?></h2>
				<aside class="yellow-underline left"></aside>
				<p class="white subhead"><?php the_field('find_retailer_subhead'); ?></p>
				<a href="<?php the_field('find_retailer_button_link'); ?>" class="btn-yellow solid protectionpro-footer-cta" target="_blank"><?php the_field('find_retailer_button_text'); ?></a>
			</div>
		</div>
	</div>
</section>

<?php get_footer();