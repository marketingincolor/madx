<?php 
	/* Template Name: Partner */
	get_header();
  $post_type   = 'partner';
  $region_tax  = 'partner_region';
  $country_tax = 'partner_country';
?>

<section class="hero relative" style="background-image: url(<?php the_post_thumbnail_url($post->ID); ?>);">
	<div class="grid-container">
		<div class="grid-x">
			<div class="small-10 small-offset-1 large-offset-0 cell">
				<h1 class="blue"><?php the_title(); ?></h1>
				<aside class="yellow-underline left"></aside>
				<p class="blue subhead">Madico distributors can be found across the globe&mdash;and we're still growing.</p>
				<ul class="tabs" id="region-tabs" v-tabs>
				  <!-- <li class="tabs-title"><a @click="openDistributionTab" href="#north-america"><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/north-america.png"><br>North <br>America</a></li> -->
				  <li class="tabs-title is-active"><a @click="openDistributionTab" href="#latin-america"><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/latin-america.png"><br>Latin <br>America</a></li>
				  <li class="tabs-title"><a @click="openDistributionTab" href="#africa"><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/africa.png"><br>Africa</a></li>
				  <li class="tabs-title"><a @click="openDistributionTab" href="#asia"><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/asia.png"><br>Asia</a></li>
				  <li class="tabs-title"><a @click="openDistributionTab" href="#australia"><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/australia.png"><br>Australia</a></li>
				  <li class="tabs-title"><a @click="openDistributionTab" href="#europe"><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/europe.png"><br>Europe</a></li>
				  <li class="tabs-title"><a @click="openDistributionTab" href="#middle-east"><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/middle-east.png"><br>Middle <br>East</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>

<?php
// ===========================
// == NORTH AMERICA
// ===========================
$usa    = array();
$canada = array();
$north_america_args = array(
	'post_type' => $post_type,
	'posts_per_page' => -1,
	'tax_query' => array(
		array(
			'taxonomy' => $region_tax,
			'field'    => 'slug',
			'terms'    => 'north-america'
		)
	)
);
$north_america = new WP_Query( $north_america_args );
$posts = $north_america->posts;

foreach($posts as $post) {
	$terms = wp_get_post_terms($post->ID, $country_tax);
	foreach ($terms as $term) {
		if ($term->name == 'Canada') {
			array_push($canada, $post);
		}if ($term->name == 'United States') {
			array_push($usa, $post);
		}
	}
}

// ===========================
// == LATIN AMERICA
// ===========================
$barbados           = array();
$colombia           = array();
$brazil             = array();
$chile              = array();
$costa_rica         = array();
$dominican_republic = array();
$ecuador            = array();
$peru               = array();
$latin_america_args = array(
	'post_type' => $post_type,
	'posts_per_page' => -1,
	'tax_query' => array(
		array(
			'taxonomy' => $region_tax,
			'field'    => 'slug',
			'terms'    => 'latin-america'
		)
	)
);
$latin_america = new WP_Query( $latin_america_args );
$posts = $latin_america->posts;

foreach($posts as $post) {
	$terms = wp_get_post_terms($post->ID, $country_tax);
	foreach ($terms as $term) {
		if ($term->name == 'Barbados') {
			array_push($barbados, $post);
		}if ($term->name == 'Colombia') {
			array_push($colombia, $post);
		}if ($term->name == 'Brazil') {
			array_push($brazil, $post);
		}if ($term->name == 'Chile') {
			array_push($chile, $post);
		}if ($term->name == 'Costa Rica') {
			array_push($costa_rica, $post);
		}if ($term->name == 'Dominican Republic') {
			array_push($dominican_republic, $post);
		}if ($term->name == 'Ecuador') {
			array_push($ecuador, $post);
		}if ($term->name == 'Peru') {
			array_push($peru, $post);
		}
	}
}

// =======================
// == ASIA
// =======================
$china       = array();
$singapore   = array();
$phillipines = array();
$indonesia   = array();
$hong_kong   = array();
$japan       = array();
$korea       = array();
$malaysia    = array();
$thailand    = array();
$taiwan      = array();
$asia_args   = array(
	'post_type' => $post_type,
	'posts_per_page' => -1,
	'tax_query' => array(
		array(
			'taxonomy' => $region_tax,
			'field'    => 'slug',
			'terms'    => 'asia'
		)
	)
);
$asia  = new WP_Query( $asia_args );
$posts = $asia->posts;

foreach($posts as $post) {
	$terms = wp_get_post_terms($post->ID, $country_tax);
	foreach ($terms as $term) {
		if ($term->name == 'China') {
			array_push($china, $post);
		}if ($term->name == 'Japan') {
			array_push($japan, $post);
		}if ($term->name == 'Singapore') {
			array_push($singapore, $post);
		}if ($term->name == 'Phillippines') {
			array_push($phillipines, $post);
		}if ($term->name == 'Indonesia') {
			array_push($indonesia, $post);
		}if ($term->name == 'Hong Kong') {
			array_push($hong_kong, $post);
		}if ($term->name == 'Korea') {
			array_push($korea, $post);
		}if ($term->name == 'Malaysia') {
			array_push($malaysia, $post);
		}if ($term->name == 'Thailand') {
			array_push($thailand, $post);
		}if ($term->name == 'Taiwan') {
			array_push($taiwan, $post);
		}
	}
}
// ============================
// == AFRICA
// ============================
$cameroon = array();
$egypt    = array();
$libya    = array();
$africa_args = array(
	'post_type' => $post_type,
	'posts_per_page' => -1,
	'tax_query' => array(
		array(
			'taxonomy' => $region_tax,
			'field'    => 'slug',
			'terms'    => 'africa'
		)
	)
);
$africa = new WP_Query( $africa_args );
$posts = $africa->posts;

foreach($posts as $post) {
	$terms = wp_get_post_terms($post->ID, $country_tax);
	foreach ($terms as $term) {
		if ($term->name == 'Cameroon') {
			array_push($cameroon, $post);
		}if ($term->name == 'Egypt') {
			array_push($egypt, $post);
		}if ($term->name == 'Libya') {
			array_push($libya, $post);
		}
	}
}
// =============================
// == EUROPE
// =============================
$austria     = array();
$belgium     = array();
$netherlands = array();
$luxembourg  = array();
$finland     = array();
$france      = array();
$germany     = array();
$greece      = array();
$iceland     = array();
$italy       = array();
$estonia     = array();
$lithuania   = array();
$latvia      = array();
$norway      = array();
$poland      = array();
$romania     = array();
$russia      = array();
$spain       = array();
$uk          = array();
$europe_args = array(
	'post_type' => $post_type,
	'posts_per_page' => -1,
	'tax_query' => array(
		array(
			'taxonomy' => $region_tax,
			'field'    => 'slug',
			'terms'    => 'europe'
		)
	)
);
$europe  = new WP_Query( $europe_args );
$posts = $europe->posts;

foreach($posts as $post) {
	$terms = wp_get_post_terms($post->ID, $country_tax);
	foreach ($terms as $term) {
		if ($term->name == 'Austria') {
			array_push($austria, $post);
		}if ($term->name == 'Belgium') {
			array_push($belgium, $post);
		}if ($term->name == 'Netherlands') {
			array_push($netherlands, $post);
		}if ($term->name == 'Luxembourg') {
			array_push($luxembourg, $post);
		}if ($term->name == 'Finland') {
			array_push($finland, $post);
		}if ($term->name == 'France') {
			array_push($france, $post);
		}if ($term->name == 'Germany') {
			array_push($germany, $post);
		}if ($term->name == 'Greece') {
			array_push($greece, $post);
		}if ($term->name == 'Iceland') {
			array_push($iceland, $post);
		}if ($term->name == 'Italy') {
			array_push($italy, $post);
		}if ($term->name == 'Estonia') {
			array_push($estonia, $post);
		}if ($term->name == 'Lithuania') {
			array_push($lithuania, $post);
		}if ($term->name == 'Latvia') {
			array_push($latvia, $post);
		}if ($term->name == 'Norway') {
			array_push($norway, $post);
		}if ($term->name == 'Poland') {
			array_push($poland, $post);
		}if ($term->name == 'Romania') {
			array_push($romania, $post);
		}if ($term->name == 'Russia') {
			array_push($russia, $post);
		}if ($term->name == 'Spain') {
			array_push($spain, $post);
		}if ($term->name == 'United Kingdom') {
			array_push($uk, $post);
		}
	}
}

// =============================
// == AUSTRALIA
// =============================
$australia_country = array();
$australia_args = array(
	'post_type' => $post_type,
	'posts_per_page' => -1,
	'tax_query' => array(
		array(
			'taxonomy' => $region_tax,
			'field'    => 'slug',
			'terms'    => 'australia'
		)
	)
);
$australia_continent = new WP_Query( $australia_args );
$posts = $australia_continent->posts;

foreach($posts as $post) {
	$terms = wp_get_post_terms($post->ID, $country_tax);
	foreach ($terms as $term) {
		if ($term->name == 'Australia') {
			array_push($australia_country, $post);
		}
	}
}

// ===========================
// == MIDDLE EAST
// ===========================
$iraq = array();
$israel    = array();
$jordan    = array();
$lebanon    = array();
$qatar    = array();
$turkey    = array();
$saudi    = array();
$uae    = array();
$oman    = array();
$bahrain    = array();
$kuwait    = array();
$middle_east_args = array(
	'post_type' => $post_type,
	'posts_per_page' => -1,
	'tax_query' => array(
		array(
			'taxonomy' => $region_tax,
			'field'    => 'slug',
			'terms'    => 'middle-east'
		)
	)
);
$middle_east = new WP_Query( $middle_east_args );
$posts = $middle_east->posts;

foreach($posts as $post) {
	$terms = wp_get_post_terms($post->ID, $country_tax);
	foreach ($terms as $term) {
		if ($term->name == 'Iraq') {
			array_push($iraq, $post);
		}if ($term->name == 'Israel') {
			array_push($israel, $post);
		}if ($term->name == 'Jordan') {
			array_push($jordan, $post);
		}if ($term->name == 'Lebanon') {
			array_push($lebanon, $post);
		}if ($term->name == 'Qatar') {
			array_push($qatar, $post);
		}if ($term->name == 'Turkey') {
			array_push($turkey, $post);
		}if ($term->name == 'Saudi Arabia') {
			array_push($saudi, $post);
		}if ($term->name == 'United Arab Emirates') {
			array_push($uae, $post);
		}if ($term->name == 'Oman') {
			array_push($oman, $post);
		}if ($term->name == 'Bahrain') {
			array_push($bahrain, $post);
		}if ($term->name == 'Kuwait') {
			array_push($kuwait, $post);
		}
	}
}
?>

<section class="dealer-results">
	<div class="grid-container">
		<div class="grid-x">
			<div class="small-10 small-offset-1 large-12 large-offset-0 cell">
				<div id="tabs-content" class="tabs-content" data-tabs-content="region-tabs">
				  <!-- <div class="tabs-panel" id="north-america">
						<div class="grid-x grid-margin-x grid-margin-y">
							<div class="small-12 cell">
								<h2 class="blue">North America</h2>
							</div>
							<div class="small-12 cell">
								<h4 class="blue">United States</h4>
							</div>
								<?php list_distributors($usa); ?>
							<div class="small-12 cell">
								<h4 class="blue">Canada</h4>
							</div>
								<?php list_distributors($canada); ?>
						</div>
				  </div> -->
				  <div class="tabs-panel is-active" id="latin-america">
				    <div class="grid-x grid-margin-x grid-margin-y">
				    	<div class="small-12 cell">
				    		<h2 class="blue">Latin America</h2>
				    	</div>

							<?php if($barbados) { ?>
					    	<div class="small-12 cell">
					    		<h4 class="blue">Barbados</h4>
					    	</div>
					    	<?php list_distributors($barbados); ?>
				    	<?php } ?>

							<?php if($brazil) { ?>
					    	<div class="small-12 cell">
					    		<h4 class="blue">Brazil</h4>
					    	</div>
					    	<?php list_distributors($brazil); ?>
							<?php } ?>

				    	<?php if($chile) { ?>
					    	<div class="small-12 cell">
					    		<h4 class="blue">Chile</h4>
					    	</div>
					    	<?php list_distributors($chile); ?>
				    	<?php } ?>

				    	<?php if($colombia) { ?>
					    	<div class="small-12 cell">
					    		<h4 class="blue">Colombia</h4>
					    	</div>
					    	<?php list_distributors($colombia); ?>
				    	<?php } ?>

				    	<?php if($costa_rica) { ?>
					    	<div class="small-12 cell">
					    		<h4 class="blue">Costa Rica</h4>
					    	</div>
					    	<?php list_distributors($costa_rica); ?>
				    	<?php } ?>

							<?php if($dominican_republic) { ?>
					    	<div class="small-12 cell">
					    		<h4 class="blue">Dominican Republic</h4>
					    	</div>
					    	<?php list_distributors($dominican_republic); ?>
					    <?php } ?>

					    <?php if($ecuador) { ?>
					    	<div class="small-12 cell">
					    		<h4 class="blue">Ecuador</h4>
					    	</div>
					    	<?php list_distributors($ecuador); ?>
				    	<?php } ?>

					    <?php if($peru) { ?>
					    	<div class="small-12 cell">
					    		<h4 class="blue">Peru</h4>
					    	</div>
					    	<?php list_distributors($peru); ?>
					    <?php } ?>

				    </div>
				  </div>
				  <div class="tabs-panel" id="africa">
				    <div class="grid-x grid-margin-x grid-margin-y">
				    	<div class="small-12 cell">
				    		<h2 class="blue">Africa</h2>
				    	</div>

					    <?php if($cameroon) { ?>
					    	<div class="small-12 cell">
					    		<h4 class="blue">Cameroon</h4>
					    	</div>
					    	<?php list_distributors($cameroon); ?>
					    <?php } ?>

					    <?php if($egypt) { ?>
					    	<div class="small-12 cell">
					    		<h4 class="blue">Egypt</h4>
					    	</div>
					    	<?php list_distributors($egypt); ?>
					    <?php } ?>

					    <?php if($libya) { ?>
					    	<div class="small-12 cell">
					    		<h4 class="blue">Libya</h4>
					    	</div>
					    	<?php list_distributors($libya); ?>
					    <?php } ?>

				    </div>
				  </div>
				  <div class="tabs-panel" id="asia">
				    <div class="grid-x grid-margin-x grid-margin-y">
				    	<div class="small-12 cell">
				    		<h2 class="blue">Asia</h2>
				    	</div>

					    <?php if($china) { ?>
					    	<div class="small-12 cell">
					    		<h4 class="blue">China</h4>
					    	</div>
					    	<?php list_distributors($china); ?>
					    <?php } ?>

					    <?php if($hong_kong) { ?>
					    	<div class="small-12 cell">
					    		<h4 class="blue">Hong Kong</h4>
					    	</div>
					    	<?php list_distributors($hong_kong); ?>
					    <?php } ?>

					    <?php if($indonesia) { ?>
					    	<div class="small-12 cell">
					    		<h4 class="blue">Indonesia</h4>
					    	</div>
					    	<?php list_distributors($indonesia); ?>
					    <?php } ?>

					    <?php if($japan) { ?>
					    	<div class="small-12 cell">
					    		<h4 class="blue">Japan</h4>
					    	</div>
					    	<?php list_distributors($japan); ?>
					    <?php } ?>

					    <?php if($korea) { ?>
					    	<div class="small-12 cell">
					    		<h4 class="blue">Korea</h4>
					    	</div>
					    	<?php list_distributors($korea); ?>
					    <?php } ?>

					    <?php if($malaysia) { ?>
					    	<div class="small-12 cell">
					    		<h4 class="blue">Malaysia</h4>
					    	</div>
					    	<?php list_distributors($malaysia); ?>
					    <?php } ?>

					    <?php if($phillipines) { ?>
					    	<div class="small-12 cell">
					    		<h4 class="blue">Phillippines</h4>
					    	</div>
					    	<?php list_distributors($phillipines); ?>
					    <?php } ?>

					    <?php if($singapore) { ?>
					    	<div class="small-12 cell">
					    		<h4 class="blue">Singapore</h4>
					    	</div>
					    	<?php list_distributors($singapore); ?>
					    <?php } ?>

					    <?php if($taiwan) { ?>
					    	<div class="small-12 cell">
					    		<h4 class="blue">Taiwan</h4>
					    	</div>
					    	<?php list_distributors($taiwan); ?>
					    <?php } ?>

					    <?php if($thailand) { ?>
					    	<div class="small-12 cell">
					    		<h4 class="blue">Thailand</h4>
					    	</div>
					    	<?php list_distributors($thailand); ?>
					    <?php } ?>

				    </div>
				  </div>
				  <div class="tabs-panel" id="australia">
				  	<div class="grid-x grid-margin-x grid-margin-y">
					  	<div class="small-12 cell">
					  		<h2 class="blue">Australia</h2>
					  	</div>
					    	<?php list_distributors($australia_country); ?>
					  </div>
				  </div>
				  <div class="tabs-panel" id="europe">
				    <div class="grid-x grid-margin-x grid-margin-y">
					  	<div class="small-12 cell">
					  		<h2 class="blue">Europe</h2>
					  	</div>

					  	<?php if($austria) { ?>
						  	<div class="small-12 cell">
					    		<h4 class="blue">Austria</h4>
					    	</div>
						    <?php list_distributors($austria); ?>
						  <?php } ?>

							<?php if($belgium) { ?>
						    <div class="small-12 cell">
					    		<h4 class="blue">Belgium</h4>
					    	</div>
						    <?php list_distributors($belgium); ?>
						  <?php } ?>

						  <?php if($estonia) { ?>
						    <div class="small-12 cell">
					    		<h4 class="blue">Estonia</h4>
					    	</div>
						    <?php list_distributors($estonia); ?>
						  <?php } ?>

						  <?php if($finland) { ?>
						    <div class="small-12 cell">
					    		<h4 class="blue">Finland</h4>
					    	</div>
						    <?php list_distributors($finland); ?>
						  <?php } ?>

						  <?php if($france) { ?>
						    <div class="small-12 cell">
					    		<h4 class="blue">France</h4>
					    	</div>
						    <?php list_distributors($france); ?>
						  <?php } ?>

						  <?php if($germany) { ?>
						    <div class="small-12 cell">
					    		<h4 class="blue">Germany</h4>
					    	</div>
						    <?php list_distributors($germany); ?>
						  <?php } ?>

						  <?php if($greece) { ?>
						    <div class="small-12 cell">
					    		<h4 class="blue">Greece</h4>
					    	</div>
						    <?php list_distributors($greece); ?>
						  <?php } ?>

						  <?php if($iceland) { ?>
						    <div class="small-12 cell">
					    		<h4 class="blue">Iceland</h4>
					    	</div>
						    <?php list_distributors($iceland); ?>
						  <?php } ?>

						  <?php if($latvia) { ?>
						    <div class="small-12 cell">
					    		<h4 class="blue">Latvia</h4>
					    	</div>
						    <?php list_distributors($latvia); ?>
						  <?php } ?>

						  <?php if($lithuania) { ?>
						    <div class="small-12 cell">
					    		<h4 class="blue">Lithuania</h4>
					    	</div>
						    <?php list_distributors($lithuania); ?>
						  <?php } ?>

						  <?php if($luxembourg) { ?>
						    <div class="small-12 cell">
					    		<h4 class="blue">Luxembourg</h4>
					    	</div>
						    <?php list_distributors($luxembourg); ?>
						  <?php } ?>

						  <?php if($netherlands) { ?>
						    <div class="small-12 cell">
					    		<h4 class="blue">Netherlands</h4>
					    	</div>
						    <?php list_distributors($netherlands); ?>
						  <?php } ?>

						  <?php if($norway) { ?>
						    <div class="small-12 cell">
					    		<h4 class="blue">Norway</h4>
					    	</div>
						    <?php list_distributors($norway); ?>
						  <?php } ?>

						  <?php if($poland) { ?>
						    <div class="small-12 cell">
					    		<h4 class="blue">Poland</h4>
					    	</div>
						    <?php list_distributors($poland); ?>
						  <?php } ?>

						  <?php if($romania) { ?>
						    <div class="small-12 cell">
					    		<h4 class="blue">Romania</h4>
					    	</div>
						    <?php list_distributors($romania); ?>
						  <?php } ?>

						  <?php if($russia) { ?>
						    <div class="small-12 cell">
					    		<h4 class="blue">Russia</h4>
					    	</div>
						    <?php list_distributors($russia); ?>
						  <?php } ?>

						  <?php if($spain) { ?>
						    <div class="small-12 cell">
					    		<h4 class="blue">Spain</h4>
					    	</div>
						    <?php list_distributors($spain); ?>
						  <?php } ?>

						  <?php if($uk) { ?>
						    <div class="small-12 cell">
					    		<h4 class="blue">United Kingdom</h4>
					    	</div>
						    <?php list_distributors($uk); ?>
						  <?php } ?>

					  </div>
				  </div>
				  <div class="tabs-panel" id="middle-east">
				    <div class="grid-x grid-margin-x grid-margin-y">
					  	<div class="small-12 cell">
					  		<h2 class="blue">Middle East</h2>
					  	</div>

					  	<?php if($bahrain) { ?>
						  	<div class="small-12 cell">
					    		<h4 class="blue">Bahrain</h4>
					    	</div>
						    <?php list_distributors($bahrain); ?>
						  <?php } ?>

						  <?php if($iraq) { ?>
						  	<div class="small-12 cell">
					    		<h4 class="blue">Iraq</h4>
					    	</div>
						    <?php list_distributors($iraq); ?>
						  <?php } ?>

						  <?php if($israel) { ?>
						    <div class="small-12 cell">
					    		<h4 class="blue">Israel</h4>
					    	</div>
                <?php list_distributors($israel); ?>
              <?php } ?>

              <?php if($jordan) { ?>
						    <div class="small-12 cell">
					    		<h4 class="blue">Jordan</h4>
					    	</div>
						    <?php list_distributors($jordan); ?>
						  <?php } ?>

						  <?php if($kuwait) { ?>
						    <div class="small-12 cell">
					    		<h4 class="blue">Kuwait</h4>
					    	</div>
						    <?php list_distributors($kuwait); ?>
						  <?php } ?>

						  <?php if($lebanon) { ?>
						    <div class="small-12 cell">
					    		<h4 class="blue">Lebanon</h4>
					    	</div>
						    <?php list_distributors($lebanon); ?>
						  <?php } ?>

						  <?php if($oman) { ?>
						    <div class="small-12 cell">
					    		<h4 class="blue">Oman</h4>
					    	</div>
						    <?php list_distributors($oman); ?>
						  <?php } ?>

						  <?php if($qatar) { ?>
						    <div class="small-12 cell">
					    		<h4 class="blue">Qatar</h4>
					    	</div>
						    <?php list_distributors($qatar); ?>
						  <?php } ?>

						  <?php if($saudi) { ?>
						    <div class="small-12 cell">
					    		<h4 class="blue">Saudi Arabia</h4>
					    	</div>
						    <?php list_distributors($saudi); ?>
						  <?php } ?>

						  <?php if($turkey) { ?>
						    <div class="small-12 cell">
					    		<h4 class="blue">Turkey</h4>
					    	</div>
						    <?php list_distributors($turkey); ?>
						  <?php } ?>

						  <?php if($uae) { ?>
						    <div class="small-12 cell">
					    		<h4 class="blue">United Arab Emirates</h4>
					    	</div>
						    <?php list_distributors($uae); ?>
						  <?php } ?>

					  </div>
				  </div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer();