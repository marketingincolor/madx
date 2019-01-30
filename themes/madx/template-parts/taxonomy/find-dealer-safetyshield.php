<?php 
	$current_post = get_queried_object();
	
	if ($current_post->ID && $current_post->post_parent == 0) {
		$page_id = $current_post->ID;
	}else if($current_post->ID && $current_post->post_parent != 0){
		$page_id = $current_post->post_parent;
	}else{
		$array    = (explode("_",$current_post->taxonomy));
		if ($array[0] == 'specialty') {
			$path_path = 'specialty-solutions';
		}else if ($array[0] == 'safety') {
			$path_path = 'safety-security';
		}else{
			$path_path = $array[0];
		}
		echo $page_path;
		$the_page = get_page_by_path($path_path);
		$page_id  = $the_page->ID;
	}
	
 ?>
 
<section class="find-dealer" style="background-image: url(<?php the_field('find_dealer_background_image',$page_id); ?>);">
	<div class="grid-container">
		<div class="grid-x">
			<div class="small-10 small-offset-1 large-8 large-offset-2 cell text-center">
				<h2 class="white">Find a SafetyShield by Madico Premier Partner</h2>
				<aside class="yellow-underline center"></aside>
				<p class="white">Madico SafetyShield Premier Partners (MSPP) have the expertise to help reduce your risk of personal injury, property damage, and loss. To find the nearest MSPP, enter your information below. </p>
				<div class="grid-x grid-margin-x grid-margin-y">
					<div class="medium-12 cell">
						<a href="/find-dealer"><button class="btn-yellow border" style="color:#FFF">U.S. Partners</button></a><br class="hide-for-medium"><br class="hide-for-medium"><span class="white">&nbsp;&nbsp;&nbsp;OR&nbsp;&nbsp;&nbsp;</span><br class="hide-for-medium"><br class="hide-for-medium">
						<a href="/international-safetyshield-partners"><button class="btn-yellow border" style="color:#FFF">International Partners</button></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>