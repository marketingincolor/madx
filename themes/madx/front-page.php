
<?php 
/* Template Name: Home */
get_header('home'); ?>

<section class="hero relative" style="background-image: url(<?php bloginfo('template_directory'); ?>/dist/assets/images/home-hero.png);">
	<div class="grid-container">
		<div class="grid-x">
			<div class="small-10 small-offset-1 medium-8 large-offset-0 cell">
				<h1 class="white"><?php the_field('home_hero_heading'); ?></h1>
				<aside class="yellow-underline left"></aside>
				<p class="white" style="margin-bottom:30px"><?php the_field('home_hero_subhead'); ?></p>
				<a href="#!" class="btn-yellow solid"><?php the_field('home_hero_play_button_text'); ?>&nbsp;&nbsp;<i class="fas fa-play-circle"></i></a>&nbsp;<br class="show-for-small-only">
				<a href="/about" class="btn-yellow border"><?php the_field('home_hero_about_button_text'); ?></a>
			</div>
		</div>
	</div>
</section>

<section class="dealer-callout">
	<div class="grid-container">
		<div class="grid-x">
			<div class="small-10 small-offset-1 medium-6 cell text">
				<h2 class="blue"><i class="fal fa-id-badge"></i>&nbsp; <?php the_field('dealer_callout_heading'); ?></h2>
				<p><?php the_field('dealer_callout_subhead'); ?></p>
			</div>
			<div class="small-10 small-offset-1 medium-4 medium-offset-0 cell text-right">
				<a href="<?php the_field('dealer_callout_button_link'); ?>" class="btn-yellow solid"><?php the_field('dealer_callout_heading'); ?> <i class="far fa-long-arrow-alt-right"></i></a>
			</div>
		</div>
	</div>
</section>

<section class="home-modules">
	<div class="grid-container">
		<div class="grid-x grid-margin-x grid-margin-y">
			<div class="small-10 small-offset-1 large-12 large-offset-0">
				<div class="grid-x grid-margin-x grid-margin-y">
					<div class="medium-6 large-3 cell module">
						<a href="/auto"><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/black-pearl-car.png" alt="Auto"></a>
						<div class="meta">
							<a href="/auto"><h4 class="blue"><i class="fal fa-car"></i>&nbsp; Auto</h4></a>
							<p>Window film is one of the easiest—and smartest—ways to protect you and your passengers from the sun.</p>
						</div>
					</div>
					<div class="medium-6 large-3 cell module">
						<a href="/residential"><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/black-pearl-car.png" alt="Auto"></a>
						<div class="meta">
							<a href="/residential"><h4 class="blue"><i class="fal fa-home"></i>&nbsp; Residential</h4></a>
							<p>Enjoy life in a better light with window film that saves energy, controls glare, improves safety, and enhances the appearance of your home.</p>
						</div>
					</div>
					<div class="medium-6 large-3 cell module">
						<a href="/commercial"><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/black-pearl-car.png" alt="Auto"></a>
						<div class="meta">
							<a href="/commercial"><h4 class="blue"><i class="fal fa-building"></i>&nbsp; Commercial</h4></a>
							<p>Installing window film is a savvy way to lower energy costs, reduce CO2 emissions, increase building safety, and improve your tenants' comfort.</p>
						</div>
					</div>
					<div class="medium-6 large-3 cell module">
						<a href="/safety-security"><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/black-pearl-car.png" alt="Auto"></a>
						<div class="meta">
							<a href="/safety-security"><h4 class="blue"><i class="fal fa-shield"></i>&nbsp; Safety &amp; Security</h4></a>
							<p>Our Safety & Security solutions help reduce the risk of crime, personal injury, and property damage and loss caused by natural disasters.</p>
						</div>
					</div>
					<div class="medium-6 cell module">
						<a href="/specialty-solutions"><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/specialty-module.png" alt="Specialty Solutions"></a>
						<div class="meta">
							<a href="/specialty-solutions"><h4 class="blue"><i class="fal fa-plane-departure"></i></i>&nbsp; Specialty Solutions</h4></a>
							<p>If you are an engineer or manufacturer in aerospace, healthcare, transportation, information display, or building materials, our Specialty Solutions have the expertise and experience to help develop highly customized, proprietary products to your specifications.</p>
						</div>
					</div>
					<div class="medium-6 cell module">
						<a href="/protectionpro"><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/device-protection-module.png" alt="Device Protection"></a>
						<div class="meta">
							<a href="/protectionpro"><h4 class="blue"><i class="fal fa-tablet-android-alt"></i></i>&nbsp; Device Protection</h4></a>
							<p>ProtectionPro<sup>™</sup> by Madico<sup>®</sup> is an on-demand, high-performance screen and body protection system for all types of devices—from legacy to the newest release.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer();