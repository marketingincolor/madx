<?php 
	/* Template Name: Dealer Results */
	get_header();

	// https://api.zip-codes.com/ZipCodesAPI.svc/1.0/FindZipCodesInRadius?zipcode=A0A 1E0&minimumradius=0&maximumradius=50&key=39QTNVA8MOX7X6A1DHZ8
	$new_api_root = 'https://api.zip-codes.com/ZipCodesAPI.svc/1.0/FindZipCodesInRadius?';
	$new_api_key = '39QTNVA8MOX7X6A1DHZ8';
	$new_zip_radius = isset($_POST['radius']) ? $_POST['radius'] : 25;
	$new_zip_code   = $_POST['zip'];

	//$new_api_url    = $new_api_root.'zipcode='.$new_zip_code.'&minimumradius=0&maximumradius='.$new_zip_radius.'&key='.$new_api_key;
	//$string_trim = 19; //Lenth to trim from FRONT of string for REMOTE (zip-codes.com) NEW API URL
	$new_api_url = 'https://dev.marketingincolor.com/datalist.json';
	$string_trim = 17; // Length to trim from FRONT of string for LOCAL (testing) NEW API URL
	
$new_data = file_get_contents($new_api_url); // put the contents of the file into a variable - string
$this_new_data = substr($new_data, $string_trim); // remove unnecessary characters at start of string for better JSON decoding
$this_new_data = rtrim($this_new_data, "}"); // remove unnecessary characters at end of string for better JSON decoding

// Building the SPECIFIC ZIP CODE array from the dataset
$brand_new_zip_array = array();
$result = json_decode($this_new_data);
foreach ($result as $postal) {
	array_push($brand_new_zip_array, intval($postal->Code));
}
//var_dump($brand_new_zip_array);

	// This takes in a zip code and returns all zip codes in a specific radius
	// using the zip code api: https://www.zipcodeapi.com/API#radius
	//$api_root   = 'https://www.zipcodeapi.com/rest';
	//$api_key    = $ZIP_CODE_API_KEY;
	$zip_radius = isset($_POST['radius']) ? $_POST['radius'] : 25;
	$zip_code   = $_POST['zip'];
	$type       = isset($_POST['type']) ? $_POST['type'] : array('architectural','automotive','safety-security');
	
	//$api_url    = $api_root.'/'.$api_key.'/radius.json/'.$zip_code.'/'.$zip_radius.'/miles?minimal';

	/*$curl = curl_init($api_url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$curl_response = curl_exec($curl);
	if ($curl_response === false) {
    $info = curl_getinfo($curl);
    curl_close($curl);
    die('error occured during curl exec. Additional info: ' . var_export($info));
	}*/
	//var_dump($curl_response);
	// Because all zip codes come back as strings, we set up an array to push 
	// the new zip code integers into
	$zip_array = array();

	// Decode response for easy looping
	//$curl_response = json_decode($curl_response);

	// var_dump($curl_response);

	// Change zip code strings to integers and push into zip_array
	/*foreach ($curl_response as $zipcode) {
		foreach ($zipcode as $the_zip) {
			array_push($zip_array, intval($the_zip));
		}
	}*/

	$onezip_query_args = array(
		'post_type'      => 'dealer',
		'posts_per_page' => -1,
		'meta_key'       => 'zip',
		'orderby'        => 'meta_value_num',
		'order'          => 'ASC',
		'meta_query'     => array(
			array(
				'key'     => 'zip',
				'value'   => intval($zip_code),
				'compare' => 'IN',
				'type'    => 'NUMERIC'
			)
		),
		'tax_query' => array(
			array(
				'taxonomy' => 'types',
				'field'    => 'slug',
				'terms'    => $type
			)
		)
	);
	$onezip_query = new WP_Query( $onezip_query_args );

	//$zip_array = array_merge(array((int)$zip_code) + $zip_array);
	//$new_zip_array = array_shift($zip_array);
	$filtered_zip_array = array_diff( $brand_new_zip_array, array(intval($zip_code))); //var_dump($filtered_zip_array);
	// var_dump($zip_array);
  
	$meta_query_args = array(
		'post_type'      => 'dealer',
		'posts_per_page' => -1,
		'meta_key'       => 'zip',
		'orderby'        => 'meta_value_num',
		'order'          => 'ASC',
		'meta_query'     => array(
			array(
				'key'     => 'zip',
				'value'   => $filtered_zip_array,
				'compare' => 'IN',
				'type'    => 'NUMERIC'
			)
		),
		'tax_query' => array(
			array(
				'taxonomy' => 'types',
				'field'    => 'slug',
				'terms'    => $type
			)
		)
	);
	$meta_query = new WP_Query( $meta_query_args );

	?>

	<section class="results-header" style="background-image: url(<?php the_post_thumbnail_url($post->ID); ?>);">
		<div class="grid-container">
			<div class="small-10 small-offset-1 large-12 large-offset-0 cell">
				<div class="grid-x">
					
					<find-dealer-page></find-dealer-page>

				</div>
			</div>
		</div>
	</section>

	<?php 
		if($type == 'safety-security'){
			$type = 'safety & security';
		}else if(is_array($type)){
			$type = '';
	  }else{
	  	$type = $type;
	  }
	?>


<section class="dealer-results">
	<div class="grid-container">
		<div class="grid-x grid-margin-x grid-margin-y">
			<div class="small-10 small-offset-1 large-12 large-offset-0 cell">
				<h1 class="blue">Dealer Directory Results</h1>
				<p class="subhead">Here is a list of <span class="underline"><?php echo $type; ?></span> dealers within <span class="underline"><?php echo $zip_radius; ?></span> miles of <span class="underline"><?php echo $zip_code; ?></span></p>
			</div>
			
			<?php
				$other_dealers        = array(); 
				$zip_dealers          = array(); 

      	if ($onezip_query->have_posts()) : while ( $onezip_query->have_posts() ) : $onezip_query->the_post();
      		array_push($zip_dealers, $post);
      	endwhile;endif; wp_reset_postdata();
      	
      	if ($meta_query->have_posts()) : while ( $meta_query->have_posts() ) : $meta_query->the_post();
      		array_push($other_dealers, $post);
      	endwhile;else : ?>

      		<div class="small-10 small-offset-1 large-12 large-offset-0 cell">
      			<h4>Sorry, no dealers found in that area. Please try a different zip code or a wider radius.</h4>
      		</div>

      	<?php endif; wp_reset_postdata(); ?>

      	<?php
      		$sorted_dealers = array_merge($zip_dealers, $other_dealers);
      		// Loop through new sorted dealers array to display them
      		foreach ($sorted_dealers as $dealer) { 
      			// var_dump($dealer);
      			$dealer_icons  = array();
      			$dealer_street = get_post_meta($dealer->ID,'street',true);
      			$dealer_zip    = get_post_meta($dealer->ID,'zip',true);
      			$dealer_city   = get_post_meta($dealer->ID,'city',true);
      			$dealer_state  = get_post_meta($dealer->ID,'state',true);
      			$dealer_phone  = get_post_meta($dealer->ID,'phone_number',true);
      			$dealer_email  = get_post_meta($dealer->ID,'email',true);
      			$dealer_name   = get_post_meta($dealer->ID,'company_name',true);
      			$dealer_page   = get_the_permalink();
      			// Get each dealer type and assign it an icon
      			$terms = wp_get_post_terms( $dealer->ID, 'types');
      			foreach ($terms as $term) {
      				if ($term->slug == 'architectural') {
      					array_push($dealer_icons, '<i class="fal fa-building"></i>');
      				}
      				if ($term->slug == 'automotive') {
      					array_push($dealer_icons, '<i class="fal fa-car"></i>');
      				}
      				if ($term->slug == 'safety-security') {
      					array_push($dealer_icons, '<i class="fal fa-shield"></i>');
      				}
      			}
      			$icons_joined = implode(" ", $dealer_icons);
      	?>
      		   

      	<div class="medium-6 large-3 cell module auto-height">
      		<div class="dealer-tag"><?php echo $icons_joined; ?></div>
      		<h5 class="blue" data-dealerName="<?php echo $dealer_name; ?>"><a href="#!" class="dealer-directory-modal-form" <?php if($dealer_email) { ?>data-open="dealer-modal"<?php } ?>><?php echo $dealer_name; ?></a></h5>
      		<ul class="dealer-meta">
      			<li><address><i class="fas fa-map-marker-alt"></i> &nbsp;<?php echo $dealer_street; ?><br> <?php echo $dealer_city; ?>, <?php echo $dealer_state; ?> <?php echo $dealer_zip; ?></address></li>
      			<li><address><i class="fas fa-phone"></i> &nbsp;<?php echo $dealer_phone; ?></address></li>
      			<?php if($dealer_email) { ?>
      			  <li class="email" data-dealerEmail="<?php echo $dealer_email; ?>"><address><i class="fas fa-envelope"></i> &nbsp;<?php echo $dealer_email; ?></address></li>
      			<?php } ?>
      		
      		<?php if(has_term('sunscape','designation',$dealer->ID) || has_term('safety-shield','designation',$dealer->ID)){ ?>
						
						<hr>

						<?php if (has_term('sunscape','designation',$dealer->ID)) { ?>
							<li style="text-indent: -1.375rem;"><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/sunscape-icon.png" alt="Madico Sunscape Dealer" style="width:auto;height:auto">&nbsp; <span style="font-size:14px">Sunscape Dealer</span></li>
						<?php } ?>

						<?php if (has_term('safety-shield','designation',$dealer->ID)) { ?>
							<li style="text-indent: -1.375rem;"><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/safety-shield-icon.png" alt="Madico SafetyShield Dealer" style="width:auto;height:auto">&nbsp; <span style="font-size:14px">SafetyShield Premier Partner</span></li>
						<?php } ?>
      		</ul>

      		<?php } ?>
      	</div>

      	<?php	} ?>
			
		</div>
	</div>
</section>

<!-- Dealer Form Modal -->
<find-dealer-modal></find-dealer-modal>

<?php get_footer();