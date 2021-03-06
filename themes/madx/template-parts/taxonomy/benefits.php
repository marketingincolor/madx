<?php
  if(!is_single()){
    $small = 'small-10 small-offset-1 ';
  }else{
    $small = 'small-12 ';
  }
?>
<div class="<?php echo $small; ?>large-12 large-offset-0 cell">
	<div class="grid-x grid-margin-x grid-margin-y">
    <?php
      if(is_single()){
        $terms = wp_get_post_terms( $post->ID, get_post_type() . '_taxonomies' );
        $array = (explode("_",$terms[0]->taxonomy));
        // var_dump($array);
        
        foreach ($terms as $term) {
          if ($term->parent === 0) {
            $name = $term->name;
            // var_dump('Name = '.$name);
          }else{
            $type = $term->slug;
            // var_dump('Type = '.$type);
          }
          
        }
      }else{
        $term = get_queried_object();
        $array = (explode("_",$term->taxonomy));
        $name = $term->name;
      }

      if ($array[0] === 'safety') {
        $array[0] = 'safety-security';
      }

      if(get_post_type() === 'dealers'){
        $array[0] = strtolower($name) . '-dealers';
      }

      $parent_term = get_term_by( 'slug', $array[0], 'benefits_taxonomies', 'OBJECT', 'raw' );
      // var_dump($parent_term);
	  	$args = array(
	  		'parent' => $parent_term->term_id,
	  		'orderby' => 'slug',
	  		'hide_empty' => false
	  	);
      $child_terms = get_terms( 'benefits_taxonomies', $args );
      // var_dump($child_terms);

      if(get_post_type() === 'dealers') {
        foreach ($child_terms as $child) {
          if ($child->slug == $type . '-dealers') {
            $child_cat_id = $child->term_id;
          }
        }
      }else{
        foreach ($child_terms as $child) {
          if ($child->name == $name) {
            $child_cat_id = $child->term_id;
          }
        }
      }

      if(get_post_type() === 'dealers' && $terms[0]->slug === 'decorative'){
        $child_cat_id = 731;
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
      if(is_single()){
        $color = 'white';
      }else{
        $color = 'blue';
      }
			while ( $query->have_posts() ) : $query->the_post();
		?>

		<div class="medium-4 cell text-center">
			<?php the_field('benefit_icon'); ?>
			<h5 class="<?php echo $color; ?>"><?php the_title(); ?></h5>
			<article class="copy"><?php the_content(); ?></article>
		</div>

		<?php endwhile; wp_reset_postdata(); ?>
	</div>
</div>