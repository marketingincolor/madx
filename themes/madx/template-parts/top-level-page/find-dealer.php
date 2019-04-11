<?php 
	$current_post = get_queried_object();
	
	if ($current_post->ID && $current_post->post_parent == 0) {
		$page_id = $current_post->ID;
		if (is_single()) {
			switch (get_post_type()) {
				case 'residential':
				  $page = get_page_by_title('Residential');
					$page_id = $page->ID;
					break;
				case 'commercial':
				  $page = get_page_by_title('Commercial');
					$page_id = $page->ID;
					break;
				case 'automotive':
				  $page = get_page_by_title('Automotive');
					$page_id = $page->ID;
					break;
				case 'safety':
				  $page = get_page_by_title('Safety and Security');
					$page_id = $page->ID;
					break;
				case 'specialty':
				  $page = get_page_by_title('Specialty Solutions');
					$page_id = $page->ID;
					break;
			}
		}
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
		$the_page = get_page_by_path($path_path);
		$page_id  = $the_page->ID;
	}

	$current_url = $_SERVER['REQUEST_URI'];
	if (stripos($current_url, 'commercial/safety-security') || stripos($current_url, 'residential/safety-security')) {
	  $page = get_page_by_title('Safety and Security');
		$page_id = $page->ID;
	}
	
 ?>

<section id="find-dealer" class="find-dealer" style="background-image: url(<?php the_field('find_dealer_background_image',$page_id); ?>);">
	<div class="grid-container">
		<div class="grid-x">
		<?php if ( $post->post_name == 'safety-security') { ?>
			<div class="small-10 small-offset-1 large-8 large-offset-2 cell text-center">
				<h2 class="white"><?php the_field('find_dealer_heading',$page_id); ?></h2>
				<aside class="yellow-underline center"></aside>
				<p class="white"><?php the_field('find_dealer_subhead',$page_id); ?></p>
		<?php } else { ?>
			<div class="small-10 small-offset-1 medium-9 large-7 large-offset-0 cell">
				<h2 class="white"><?php the_field('find_dealer_heading',$page_id); ?></h2>
				<aside class="yellow-underline left"></aside>
				<p class="white"><?php the_field('find_dealer_subhead',$page_id); ?></p>
		<?php } ?>
					
			<?php if ( $post->post_name == 'safety-security') { ?>
				<div class="">
				    <a href="/find-dealer" class=""><button class="btn-yellow border" style="color: rgb(255, 255, 255);">U.S. Dealers &amp; Partners</button></a><br class="hide-for-medium"><br class="hide-for-medium"><span class="white">&nbsp;&nbsp;&nbsp;OR&nbsp;&nbsp;&nbsp;</span><br class="hide-for-medium"><br class="hide-for-medium"> <a href="/international-safetyshield-partners" class=""><button class="btn-yellow border" style="color: rgb(255, 255, 255);">International Partners</button></a>
				</div>
			<?php } else { ?>
				<find-dealer-form></find-dealer-form>
			<?php } ?>

			</div>
		</div>
	</div>
</section>
