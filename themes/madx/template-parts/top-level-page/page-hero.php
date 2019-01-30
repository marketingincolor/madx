<?php $slug = get_post_field( 'post_name', get_post() ); ?>


<section class="page-hero" style="background-image: url(<?php the_field('page_hero_background_image'); ?>);">

	<div class="show-for-small-only">
		<?php get_template_part('template-parts/menus/'. $slug .'-header-menu'); ?>
	</div>

	<div id="header-grid" class="grid-container">
		<div class="grid-x">
			<div class="small-10 small-offset-1 large-12 large-offset-0 show-for-medium-only">
				<?php get_template_part('template-parts/menus/'. $slug .'-tablet-menu'); ?>
			</div>
			<div class="small-10 small-offset-1 large-12 large-offset-0 show-for-large">
				<?php get_template_part('template-parts/menus/'. $slug .'-header-menu'); ?>
			</div>
		</div>
	</div>

	<div class="grid-container">
		<div class="grid-x">
			<div class="medium-8 medium-offset-1 small-10 small-offset-1 large-offset-0 cell">
				<h1 class="blue"><?php the_field('page_hero_title'); ?></h1>
				<aside class="yellow-underline left"></aside>
			</div>
			<div class="medium-7 medium-offset-1 small-10 small-offset-1 large-offset-0 cell">
				<p class="subhead"><?php the_field('page_hero_subhead'); ?></p>
			</div>
			<div class="medium-8 medium-offset-1 small-10 small-offset-1 large-offset-0 cell">
				<a href="<?php the_field('page_hero_left_button_link'); ?>" class="btn-yellow solid film-selector-<?php echo $slug; ?>"><?php the_field('page_hero_left_button_text'); ?></a>&nbsp;&nbsp;&nbsp;
				<?php $url = $_SERVER['REQUEST_URI']; ?>
				<?php if (strpos($url, 'residential') !== false) { ?>
					<br class="hide-for-large"><br class="hide-for-large"><br class="hide-for-large">
				<?php }else{ ?>
				  <br class="show-for-small-only"><br class="show-for-small-only"><br class="show-for-small-only">
				<?php } ?>
				<a href="<?php the_field('page_hero_right_button_link'); ?>" class="btn-yellow border"><?php the_field('page_hero_right_button_text'); ?></a>
			</div>
		</div>
	</div>
</section>