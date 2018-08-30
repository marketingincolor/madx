<?php 
	get_header();
	$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
	$slug = $term->slug;
	$post_type = get_post_type();
	get_template_part('template-parts/taxonomy/'.$post_type.'-'.$slug);
?>



<?php get_footer();
