<?php $slug = get_post_field( 'post_name', get_post() ); ?>

<section class="page-hero" style="background-image: url(<?php bloginfo('template_directory'); ?>/dist/assets/images/<?php echo $slug; ?>-hero.png);">

	<?php get_template_part('template-parts/menus/'. $slug .'-header-menu'); ?>

	<div class="grid-container">
		<div class="grid-x">
			<div class="large-8 medium-10 cell">
				<h1 class="blue"><?php the_field('page_hero_title'); ?></h1>
				<aside class="yellow-underline left"></aside>
				<p class="subhead"><?php the_field('page_hero_subhead'); ?></p>
				<a href="<?php the_field('page_hero_left_button_link'); ?>" class="btn-yellow solid"><?php the_field('page_hero_left_button_text'); ?></a>&nbsp;&nbsp;&nbsp;<a href="<?php the_field('page_hero_right_button_link'); ?>" class="btn-yellow border"><?php the_field('page_hero_right_button_text'); ?></a>
			</div>
		</div>
	</div>
</section>