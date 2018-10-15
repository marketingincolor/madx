<?php 
	$current_post = get_queried_object();
	if ($current_post->ID) {
		$page_id = $current_post->ID;
	}else{
		$array    = (explode("_",$current_post->taxonomy));
		$the_page = get_page_by_path($array[0]);
		$page_id  = $the_page->ID;
	}
	
 ?>

<section class="find-dealer" style="background-image: url(<?php the_field('find_dealer_background_image',$page_id); ?>);">
	<div class="grid-container">
		<div class="grid-x">
			<div class="small-10 small-offset-1 medium-9 large-7 large-offset-0 cell">
				<h2 class="white"><?php the_field('find_dealer_heading',$page_id); ?></h2>
				<aside class="yellow-underline left"></aside>
				<p class="white"><?php the_field('find_dealer_subhead',$page_id); ?></p>
					
				<find-dealer-form></find-dealer-form>
					
			</div>
		</div>
	</div>
</section>
