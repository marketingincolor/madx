<?php 
/* Template Name: Capabilities */
get_header();
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="page-hero">
	<div id="header-grid" class="grid-container">
		<div class="grid-x">
			<div class="small-10 small-offset-1 large-12 large-offset-0">
				<?php get_template_part('template-parts/menus/residential-header-menu'); ?>
			</div>
		</div>
	</div>

	<div class="grid-container">
		<div class="grid-x">
			<div class="small-10 small-offset-1 medium-8 large-offset-0 cell">
				<h1 class="blue"><?php the_title(); ?></h1>
				<aside class="yellow-underline left"></aside>
				<div class="subhead"><?php the_content(); ?></div>
			</div>
		</div>
	</div>
</section>

<section class="about-content">
	<div class="grid-container">
		<div class="grid-x">
			<div class="small-12 cell content-block">
				<div class="grid-x">
					<div class="small-10 small-offset-1 medium-8 medium-offset-2">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="home-modules">
	<div class="grid-container">
		<div class="grid-x">
			<div class="small-10 small-offset-1 medium-8 medium-offset-2 cell text-center">
				<h1 class="blue"><?php the_field('about_film_heading'); ?></h1>
				<aside class="yellow-underline center"></aside>
				<p class="subhead"><?php the_field('about_film_subhead'); ?></p></a>
			</div>
		</div>
	</div>
	<div class="grid-container">
		<div class="grid-x grid-margin-x grid-margin-y">
			<div class="small-10 small-offset-1 large-12 large-offset-0">
				<div class="grid-x grid-margin-x grid-margin-y">
					<div class="medium-6 large-4 cell module auto-height">
						<img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/black-pearl-car.png" alt="Auto">
						<div class="meta">
							<h4 class="blue"><i class="fal fa-car"></i>&nbsp; Automotive Window Film</h4>
							<p class="subhead">Window film is one of the easiest—and smartest—ways to protect you and your passengers from the sun.</p>
							<a href="/auto" class="read-more">View Product Details &nbsp;<i class="far fa-long-arrow-right"></i></a>
						</div>
					</div>
					<div class="medium-6 large-4 cell module auto-height">
						<img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/black-pearl-car.png" alt="Auto">
						<div class="meta">
							<h4 class="blue"><i class="fal fa-car"></i>&nbsp; Architectural Window Film</h4>
							<p class="subhead">Our residential window films are available in a variety of styles and hues, so you can be as bold or as subtle as you'd like.</p>
							<a href="/residential" class="read-more">View Residential &nbsp;<i class="far fa-long-arrow-right"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="/commercial" class="read-more">View Commercial &nbsp;<i class="far fa-long-arrow-right"></i></a>
						</div>
					</div>
					<div class="medium-6 large-4 cell module auto-height">
						<img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/black-pearl-car.png" alt="Auto">
						<div class="meta">
							<h4 class="blue"><i class="fal fa-car"></i>&nbsp; Safety &amp; Security</h4>
							<p class="subhead">Our Safety & Security Solutions help reduce the risk of crime, personal injury, and property damage and loss caused by natural disasters. </p>
							<a href="/safety-security" class="read-more">View Product Details &nbsp;<i class="far fa-long-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="about-next" style="background-image: url(<?php the_field('about_next_background_image') ?>);">
	<div class="grid-container">
		<div class="grid-x">
			<div class="small-10 small-offset-1 medium-8 large-6 large-offset-0">
				<h2 class="white"><?php the_field('about_next_heading') ?></h2>
				<aside class="yellow-underline left"></aside>
				<p class="white"><?php the_field('about_next_subhead') ?></p>
			</div>
		</div>
	</div>
</section>

<section class="about-ppro" style="background-image: url(<?php the_field('about_ppro_background_image') ?>);">
	<div class="grid-container">
		<div class="grid-x">
			<div class="medium-6 medium-offset-5 large-offset-6 small-10 small-offset-1 cell text-right">
				<h2 class="white"><?php the_field('about_ppro_heading'); ?></h2>
				<aside class="yellow-underline right"></aside>
				<p class="white"><?php the_field('about_ppro_subhead'); ?></p>
			</div>
		</div>
	</div>
</section>

<?php 
endwhile;endif;
get_footer();