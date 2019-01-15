<div class="show-for-small-only">
	<?php get_template_part('template-parts/menus/safety-header-menu'); ?>
</div>

<div class="grid-container">
	<div class="grid-x">
		<div class="small-10 small-offset-1 large-12 large-offset-0 show-for-medium-only">
			<?php get_template_part('template-parts/menus/safety-tablet-menu'); ?>
		</div>
		<div class="small-10 small-offset-1 large-12 large-offset-0 show-for-large">
			<?php get_template_part('template-parts/menus/safety-header-menu'); ?>
		</div>
	</div>
</div>

<?php 

	$term = get_queried_object();

	if ($term->slug == 'case-studies') {
	  include( locate_template( '/template-parts/taxonomy/safety-security/safety-'.$term->slug.'.php', false, false ) );
	  get_template_part('/template-parts/top-level-page/find-dealer');
	}else{
?>

<section class="taxonomy-intro" style="padding-bottom:0">
	<div class="grid-container">
		<div class="grid-x">
			<div class="large-8 small-10 small-offset-1 large-offset-2 cell text-center">
				<h1 class="blue"><?php the_field('intro_heading',$term); ?></h1>
				<aside class="yellow-underline center"></aside>
				<p class="subhead"><?php the_field('intro_subhead',$term); ?></p>
			</div>
		</div>
	</div>
</section>

<section id="tax-posts" class="taxonomy-products" style="padding-top: 0">
	<div class="grid-container">
		<?php if(get_field('products_heading',$term)){ ?>
		<div class="grid-x">
			<div class="small-10 large-8 small-offset-1 large-offset-2 text-center">
				<h2 class="blue"><?php the_field('products_heading',$term); ?></h2>
				<aside class="yellow-underline center"></aside>
				<?php if(get_field('products_subhead',$term)){ ?><p class="subhead"><?php the_field('products_subhead',$term); ?></p><?php } ?>
			</div>
		</div>
	  <?php } ?>

		<div class="grid-x">
			<div class="small-10 small-offset-1 large-12 large-offset-0 cell">
				<div class="grid-x grid-margin-x grid-margin-y">

					<?php
						$args = array(
							'post_type' => 'safety',
							'tax_query' => array(
								array(
									'taxonomy' => 'safety_taxonomies',
									'field'    => 'slug',
									'terms'    => $term->slug
								),
							),
						);
						$query     = new WP_Query( $args );
						$num_posts = $query->found_posts;
						if ($num_posts <= 1) {
							include(locate_template('/template-parts/taxonomy/safety-security/single-post-layout.php'));
						}else{ ?>
							<?php //include(locate_template('/template-parts/taxonomy/safety-security/multi-post-layout.php')); ?>
						<safety-products></safety-products>
					<?php	} ?>

        </div>
			</div>
		</div>
	</div>
</section>

<?php
	if ($term->slug == 'blast-mitigation') {
	  get_template_part('/template-parts/taxonomy/find-dealer-safetyshield');
	}else{
		get_template_part('/template-parts/top-level-page/find-dealer');;
	}
?>

<?php } ?>