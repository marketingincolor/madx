<?php 
	$current_post = get_post();

	if ($current_post->post_parent == 0) {

		if (is_tax() || is_single()) {
			if (get_post_type() == 'safety') {
				$post_type = 'safety-security';
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
 
<section class="find-dealer" style="background-image: url(<?php the_field('find_dealer_background_image',$page_id); ?>);">
	<div class="grid-container">
		<div class="grid-x">
			<div class="small-10 small-offset-1 medium-9 large-7 large-offset-0 cell">
				<h2 class="white">Find a SafetyShield by Madico Premier Partner</h2>
				<aside class="yellow-underline left"></aside>
				<p class="white">Madico SafetyShield Premier Partners (MSPP) have the expertise to help reduce your risk of personal injury, property damage, and loss. To find the nearest MSPP, enter your information below. </p>
					
				<find-dealer-form></find-dealer-form>
					
			</div>
		</div>
	</div>
</section>