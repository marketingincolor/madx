<div class="small-10 small-offset-1 large-12 large-offset-0 cell">
	<div class="grid-x grid-margin-x grid-margin-y">
    <?php
      if(is_single()){
        $terms = wp_get_post_terms( $post->ID, get_post_type() . '_taxonomies' );
        $array = (explode("_",$term[0]->taxonomy));
        foreach ($terms as $term) {
          if ($term->parent !== 0) {
            $name = $term->name;
          }else{
            $type = $term->slug;
          }
        }
        $parent_term = get_term_by( 'slug', $type, 'benefits_taxonomies', 'OBJECT', 'raw' );
      }else{
        $term = get_queried_object();
        $array = (explode("_",$term->taxonomy));
        $name = $term->name;
        $parent_term = get_term_by( 'slug', $array[0], 'benefits_taxonomies', 'OBJECT', 'raw' );
      }
      
	  	$args = array(
	  		'parent' => $parent_term->term_id,
	  		'orderby' => 'slug',
	  		'hide_empty' => false
	  	);
      $child_terms = get_terms( 'benefits_taxonomies', $args );
      
	  	foreach ($child_terms as $child) {
	  		if ($child->name == $name) {
	  			$child_cat_id = $child->term_id;
	  		}
      }
		  
			$args = array(
				'post_type' => 'benefits',
				'tax_query' => array(
					array(
						'taxonomy' => 'benefits_taxonomies',
						'field'    => 'term_id',
						'terms'    => $child_cat_id,
					),
				),
				'orderby'   => 'menu_order',
				'order'     => 'ASC'
			);
			$query = new WP_Query( $args );
			while ( $query->have_posts() ) : $query->the_post();
		?>

		<div class="medium-4 cell text-center">
			<?php the_field('benefit_icon'); ?>
			<h5 class="blue"><?php the_title(); ?></h5>
			<?php the_content(); ?>
		</div>

		<?php endwhile; wp_reset_postdata(); ?>
	</div>
</div>