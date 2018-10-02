<?php 
	$current_post = get_post();

	if ($current_post->post_parent == 0) {

		if (is_tax() || is_single()) {
			if (get_post_type() == 'specialty') {
				$post_type = 'specialty-solutions';
			}else{
				$post_type = get_post_type();
			}
			$current_page = get_page_by_path($post_type);
			$page_id = $current_page->ID;
		}else if(is_page()){
			$page_id = $current_post->ID;
		}

	}else{
		$page_id = $current_post->post_parent;
	}
	
 ?>

<section class="find-dealer" style="background-image: url(<?php the_field('specialty_contact_background_image',$page_id); ?>);">
	<div class="grid-container">
		<div class="grid-x">
			<div class="small-10 small-offset-1 medium-7 large-6 large-offset-0 cell">
				<h2 class="white"><?php the_field('specialty_contact_heading',$page_id); ?></h2>
				<aside class="yellow-underline left"></aside>
				<p class="white"><?php the_field('specialty_contact_subhead',$page_id); ?></p>
				<a href="<?php the_field('specialty_contact_button_link',$page_id); ?>" class="btn-yellow solid"><?php the_field('specialty_contact_button_text',$page_id); ?></a>
			</div>
		</div>
	</div>
</section>
