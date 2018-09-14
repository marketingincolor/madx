<?php $term = get_queried_object(); ?>

<section class="film-selector">
	<div class="grid-container">
		<div class="grid-x grid-margin-x">
			<div class="medium-2 medium-offset-1 cell">
				<i class="fal fa-clipboard-check"></i>
			</div>
			<div class="medium-8 cell">
				<h3 class="white"><?php the_field('taxonomy_film_heading',$term); ?></h3>
				<p class="white"><?php the_field('taxonomy_film_subhead',$term); ?></p>
				<a href="/<?php echo get_post_type($post->ID); ?>/film-selector" class="btn-blue solid"><?php the_field('taxonomy_film_button_text',$term); ?> &nbsp;<i class="fas fa-arrow-alt-right"></i></a>
			</div>
		</div>
	</div>
</section>