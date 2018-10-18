<?php 
	get_header();
	$url = $_SERVER['REQUEST_URI'];

	if (strpos($url, 'residential') !== false) {
	    $post_type = 'residential';
	}else if (strpos($url, 'commercial') !== false) {
	    $post_type = 'commercial';
	}else if (strpos($url, 'auto') !== false) {
	    $post_type = 'auto';
	}else if (strpos($url, 'safety') !== false) {
	    $post_type = 'safety';
	}else if (strpos($url, 'specialty') !== false) {
	    $post_type = 'specialty';
	}

	else if (strpos($url, 'video') !== false) {
	    $post_type = 'video';
	}else if (strpos($url, 'article') !== false) {
	    $post_type = 'article';
	}else if (strpos($url, 'document') !== false) {
	    $post_type = 'document';
	}
	get_template_part('template-parts/taxonomy/'.$post_type);
?>



<?php get_footer();
