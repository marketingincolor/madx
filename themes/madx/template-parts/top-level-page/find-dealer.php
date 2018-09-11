<?php 
	$current_page = get_page_by_path(get_post_type());
	$page_id = $current_page->ID;
 ?>

<section class="find-dealer" style="background-image: url(<?php the_field('find_dealer_background_image',$page_id); ?>);">
	<div class="grid-container">
		<div class="grid-x">
			<div class="medium-8 large-7 cell">
				<h2 class="white"><?php the_field('find_dealer_heading',$page_id); ?></h2>
				<aside class="yellow-underline left"></aside>
				<p class="white"><?php the_field('find_dealer_subhead',$page_id); ?></p>
				
				<find-dealer-form></find-dealer-form>

			</div>
		</div>
	</div>
</section>
