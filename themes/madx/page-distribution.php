<?php 
	/* Template Name: Distribution */
	get_header(); ?>

<section class="hero relative" style="background-image: url(<?php the_post_thumbnail_url($post->ID); ?>);">
	<div class="grid-container">
		<div class="grid-x">
			<div class="small-10 small-offset-1 medium-8 large-offset-0 cell">
				<h1 class="blue"><?php the_title(); ?></h1>
				<aside class="yellow-underline left"></aside>
				<p class="blue subhead">Madico distributors can be found across the globe&mdash;and we're still growing.</p>
				<ul class="tabs" id="region-tabs" v-tabs>
				  <li class="tabs-title is-active"><a @click="openDistributionTab" href="#north-america"><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/north-america.png"><br>North <br>America</a></li>
				  <li class="tabs-title"><a @click="openDistributionTab" href="#latin-america"><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/latin-america.png"><br>Latin <br>America</a></li>
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
	'post_type' => 'distributor',
	'tax_query' => array(
		array(
			'taxonomy' => 'regions',
			'field'    => 'slug',
			'terms'    => 'north-america'
		)
	)
);
$north_america = new WP_Query( $north_america_args );
$posts = $north_america->posts;

foreach($posts as $post) {
	$terms = wp_get_post_terms($post->ID,'country');
	foreach ($terms as $term) {
		if ($term->name == 'Canada') {
			array_push($canada, $post);
		}else if ($term->name == 'United States') {
			array_push($usa, $post);
		}
	}
}

// ===========================
// == LATIN AMERICA
// ===========================
$barbados           = array();
$brazil             = array();
$chile              = array();
$costa_rica         = array();
$dominican_republic = array();
$ecuador            = array();
$peru               = array();
$latin_america_args = array(
	'post_type' => 'distributor',
	'tax_query' => array(
		array(
			'taxonomy' => 'regions',
			'field'    => 'slug',
			'terms'    => 'latin-america'
		)
	)
);
$latin_america = new WP_Query( $latin_america_args );
$posts = $latin_america->posts;

foreach($posts as $post) {
	$terms = wp_get_post_terms($post->ID,'country');
	foreach ($terms as $term) {
		if ($term->name == 'Barbados') {
			array_push($barbados, $post);
		}else if ($term->name == 'Brazil') {
			array_push($brazil, $post);
		}else if ($term->name == 'Chile') {
			array_push($chile, $post);
		}else if ($term->name == 'Costa Rica') {
			array_push($costa_rica, $post);
		}else if ($term->name == 'Dominican Republic') {
			array_push($dominican_republic, $post);
		}else if ($term->name == 'Ecuador') {
			array_push($ecuador, $post);
		}else if ($term->name == 'Peru') {
			array_push($peru, $post);
		}
	}
}

// =======================
// == ASIA
// =======================
$china     = array();
$japan     = array();
$korea     = array();
$malaysia  = array();
$thailand  = array();
$taiwan    = array();
$asia_args = array(
	'post_type' => 'distributor',
	'tax_query' => array(
		array(
			'taxonomy' => 'regions',
			'field'    => 'slug',
			'terms'    => 'asia'
		)
	)
);
$asia  = new WP_Query( $asia_args );
$posts = $asia->posts;

foreach($posts as $post) {
	$terms = wp_get_post_terms($post->ID,'country');
	foreach ($terms as $term) {
		if ($term->name == 'China') {
			array_push($china, $post);
		}else if ($term->name == 'Japan') {
			array_push($japan, $post);
		}else if ($term->name == 'Korea') {
			array_push($korea, $post);
		}else if ($term->name == 'Malaysia') {
			array_push($malaysia, $post);
		}else if ($term->name == 'Thailand') {
			array_push($thailand, $post);
		}else if ($term->name == 'Taiwan') {
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
	'post_type' => 'distributor',
	'tax_query' => array(
		array(
			'taxonomy' => 'regions',
			'field'    => 'slug',
			'terms'    => 'africa'
		)
	)
);
$africa = new WP_Query( $africa_args );
$posts = $africa->posts;

foreach($posts as $post) {
	$terms = wp_get_post_terms($post->ID,'country');
	foreach ($terms as $term) {
		if ($term->name == 'Cameroon') {
			array_push($cameroon, $post);
		}else if ($term->name == 'Egypt') {
			array_push($egypt, $post);
		}else if ($term->name == 'Libya') {
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
	'post_type' => 'distributor',
	'tax_query' => array(
		array(
			'taxonomy' => 'regions',
			'field'    => 'slug',
			'terms'    => 'europe'
		)
	)
);
$europe  = new WP_Query( $europe_args );
$posts = $europe->posts;

foreach($posts as $post) {
	$terms = wp_get_post_terms($post->ID,'country');
	foreach ($terms as $term) {
		if ($term->name == 'austria') {
			array_push($austria, $post);
		}else if ($term->name == 'Belgium') {
			array_push($belgium, $post);
		}else if ($term->name == 'Netherlands') {
			array_push($netherlands, $post);
		}else if ($term->name == 'Luxembourg') {
			array_push($luxembourg, $post);
		}else if ($term->name == 'Finland') {
			array_push($finland, $post);
		}else if ($term->name == 'France') {
			array_push($france, $post);
		}else if ($term->name == 'Germany') {
			array_push($germany, $post);
		}else if ($term->name == 'Greece') {
			array_push($greece, $post);
		}else if ($term->name == 'Iceland') {
			array_push($iceland, $post);
		}else if ($term->name == 'Italy') {
			array_push($italy, $post);
		}else if ($term->name == 'Estonia') {
			array_push($estonia, $post);
		}else if ($term->name == 'Lithuania') {
			array_push($lithuania, $post);
		}else if ($term->name == 'Latvia') {
			array_push($latvia, $post);
		}else if ($term->name == 'Norway') {
			array_push($norway, $post);
		}else if ($term->name == 'Poland') {
			array_push($poland, $post);
		}else if ($term->name == 'Romania') {
			array_push($romania, $post);
		}else if ($term->name == 'Russia') {
			array_push($russia, $post);
		}else if ($term->name == 'Spain') {
			array_push($spain, $post);
		}else if ($term->name == 'United Kingdom') {
			array_push($uk, $post);
		}
	}
}

// =============================
// == AUSTRALIA
// =============================
$australia = array();
$australia_args = array(
	'post_type' => 'distributor',
	'tax_query' => array(
		array(
			'taxonomy' => 'regions',
			'field'    => 'slug',
			'terms'    => 'australia'
		)
	)
);
$australia = new WP_Query( $australia_args );
$posts = $australia->posts;

foreach($posts as $post) {
	$terms = wp_get_post_terms($post->ID,'country');
	foreach ($terms as $term) {
		if ($term->name == 'Australia') {
			array_push($australia, $post);
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
	'post_type' => 'distributor',
	'tax_query' => array(
		array(
			'taxonomy' => 'regions',
			'field'    => 'slug',
			'terms'    => 'middle-east'
		)
	)
);
$middle_east = new WP_Query( $middle_east_args );
$posts = $middle_east->posts;

foreach($posts as $post) {
	$terms = wp_get_post_terms($post->ID,'country');
	foreach ($terms as $term) {
		if ($term->name == 'Iraq') {
			array_push($iraq, $post);
		}else if ($term->name == 'Israel') {
			array_push($israel, $post);
		}else if ($term->name == 'Jordan') {
			array_push($jordan, $post);
		}else if ($term->name == 'Lebanon') {
			array_push($lebanon, $post);
		}else if ($term->name == 'Qatar') {
			array_push($qatar, $post);
		}else if ($term->name == 'Turkey') {
			array_push($turkey, $post);
		}else if ($term->name == 'Saudi Arabia') {
			array_push($saudi, $post);
		}else if ($term->name == 'United Arab Emirates') {
			array_push($uae, $post);
		}else if ($term->name == 'Oman') {
			array_push($oman, $post);
		}else if ($term->name == 'Bahrain') {
			array_push($bahrain, $post);
		}else if ($term->name == 'Kuwait') {
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
				  <div class="tabs-panel is-active" id="north-america">
						<div class="grid-x grid-margin-x grid-margin-y">
							<div class="small-12 cell">
								<h2 class="blue">North America</h2>
							</div>
							<div class="small-12 cell">
								<h4 class="blue">United States</h4>
							</div>
							<div class='medium-6 large-3 cell module auto-height'>
								<?php list_distributors($usa); ?>
							</div>
							<div class="small-12 cell">
								<h4 class="blue">Canada</h4>
							</div>
							<div class='medium-6 large-3 cell module auto-height'>
								<?php list_distributors($canada); ?>
							</div>
						</div>
				  </div>
				  <div class="tabs-panel" id="latin-america">
				    <div class="grid-x grid-margin-x grid-margin-y">
				    	<div class="small-12 cell">
				    		<h2 class="blue">Latin America</h2>
				    	</div>
				    	<div class="small-12 cell">
				    		<h4 class="blue">Barbados</h4>
				    	</div>
				    	<div class='medium-6 large-3 cell module auto-height'>
				    		<?php list_distributors($barbados); ?>
				    	</div>
				    	<div class="small-12 cell">
				    		<h4 class="blue">Brazil</h4>
				    	</div>
				    	<div class='medium-6 large-3 cell module auto-height'>
				    		<?php list_distributors($brazil); ?>
				    	</div>
				    	<div class="small-12 cell">
				    		<h4 class="blue">Chile</h4>
				    	</div>
				    	<div class='medium-6 large-3 cell module auto-height'>
				    		<?php list_distributors($chile); ?>
				    	</div>
				    	<div class="small-12 cell">
				    		<h4 class="blue">Costa Rica</h4>
				    	</div>
				    	<div class='medium-6 large-3 cell module auto-height'>
				    		<?php list_distributors($costa_rica); ?>
				    	</div>
				    	<div class="small-12 cell">
				    		<h4 class="blue">Dominican Republic</h4>
				    	</div>
				    	<div class='medium-6 large-3 cell module auto-height'>
				    		<?php list_distributors($dominican_republic); ?>
				    	</div>
				    	<div class="small-12 cell">
				    		<h4 class="blue">Ecuador</h4>
				    	</div>
				    	<div class='medium-6 large-3 cell module auto-height'>
				    		<?php list_distributors($ecuador); ?>
				    	</div>
				    	<div class="small-12 cell">
				    		<h4 class="blue">Peru</h4>
				    	</div>
				    	<div class='medium-6 large-3 cell module auto-height'>
				    		<?php list_distributors($peru); ?>
				    	</div>
				    </div>
				  </div>
				  <div class="tabs-panel" id="africa">
				    <div class="grid-x grid-margin-x grid-margin-y">
				    	<div class="small-12 cell">
				    		<h2 class="blue">Africa</h2>
				    	</div>
				    	<div class="small-12 cell">
				    		<h4 class="blue">Cameroon</h4>
				    	</div>
				    	<div class='medium-6 large-3 cell module auto-height'>
				    		<?php list_distributors($cameroon); ?>
				    	</div>
				    	<div class="small-12 cell">
				    		<h4 class="blue">Egypt</h4>
				    	</div>
				    	<div class='medium-6 large-3 cell module auto-height'>
				    		<?php list_distributors($egypt); ?>
				    	</div>
				    	<div class="small-12 cell">
				    		<h4 class="blue">Libya</h4>
				    	</div>
				    	<div class='medium-6 large-3 cell module auto-height'>
				    		<?php list_distributors($libya); ?>
				    	</div>
				    </div>
				  </div>
				  <div class="tabs-panel" id="asia">
				    <div class="grid-x grid-margin-x grid-margin-y">
				    	<div class="small-12 cell">
				    		<h2 class="blue">Asia</h2>
				    	</div>
				    	<div class="small-12 cell">
				    		<h4 class="blue">China</h4>
				    	</div>
				    	<div class='medium-6 large-3 cell module auto-height'>
				    		<?php list_distributors($china); ?>
				    	</div>
				    	<div class="small-12 cell">
				    		<h4 class="blue">Japan</h4>
				    	</div>
				    	<div class='medium-6 large-3 cell module auto-height'>
				    		<?php list_distributors($japan); ?>
				    	</div>
				    	<div class="small-12 cell">
				    		<h4 class="blue">Korea</h4>
				    	</div>
				    	<div class='medium-6 large-3 cell module auto-height'>
				    		<?php list_distributors($korea); ?>
				    	</div>
				    	<div class="small-12 cell">
				    		<h4 class="blue">Malaysia</h4>
				    	</div>
				    	<div class='medium-6 large-3 cell module auto-height'>
				    		<?php list_distributors($malaysia); ?>
				    	</div>
				    	<div class="small-12 cell">
				    		<h4 class="blue">Thailand</h4>
				    	</div>
				    	<div class='medium-6 large-3 cell module auto-height'>
				    		<?php list_distributors($thailand); ?>
				    	</div>
				    	<div class="small-12 cell">
				    		<h4 class="blue">Taiwan</h4>
				    	</div>
				    	<div class='medium-6 large-3 cell module auto-height'>
				    		<?php list_distributors($taiwan); ?>
				    	</div>
				    </div>
				  </div>
				  <div class="tabs-panel" id="australia">
				  	<div class="grid-x grid-margin-x grid-margin-y">
					  	<div class="small-12 cell">
					  		<h2 class="blue">Australia</h2>
					  	</div>
					    <div class='medium-6 large-3 cell module auto-height'>
					    	<?php list_distributors($australia); ?>
					    </div>
					  </div>
				  </div>
				  <div class="tabs-panel" id="europe">
				    <div class="grid-x grid-margin-x grid-margin-y">
					  	<div class="small-12 cell">
					  		<h2 class="blue">Europe</h2>
					  	</div>
					  	<div class="small-12 cell">
				    		<h4 class="blue">Austria</h4>
				    	</div>
					    <div class='medium-6 large-3 cell module auto-height'>
					    	<?php list_distributors($austria); ?>
					    </div>
					    <div class="small-12 cell">
				    		<h4 class="blue">Belgium</h4>
				    	</div>
					    <div class='medium-6 large-3 cell module auto-height'>
					    	<?php list_distributors($belgium); ?>
					    </div>
					    <div class="small-12 cell">
				    		<h4 class="blue">Estonia</h4>
				    	</div>
					    <div class='medium-6 large-3 cell module auto-height'>
					    	<?php list_distributors($estonia); ?>
					    </div>
					    <div class="small-12 cell">
				    		<h4 class="blue">Finland</h4>
				    	</div>
					    <div class='medium-6 large-3 cell module auto-height'>
					    	<?php list_distributors($finland); ?>
					    </div>
					    <div class="small-12 cell">
				    		<h4 class="blue">France</h4>
				    	</div>
					    <div class='medium-6 large-3 cell module auto-height'>
					    	<?php list_distributors($france); ?>
					    </div>
					    <div class="small-12 cell">
				    		<h4 class="blue">Germany</h4>
				    	</div>
					    <div class='medium-6 large-3 cell module auto-height'>
					    	<?php list_distributors($germany); ?>
					    </div>
					    <div class="small-12 cell">
				    		<h4 class="blue">Greece</h4>
				    	</div>
					    <div class='medium-6 large-3 cell module auto-height'>
					    	<?php list_distributors($greece); ?>
					    </div>
					    <div class="small-12 cell">
				    		<h4 class="blue">Iceland</h4>
				    	</div>
					    <div class='medium-6 large-3 cell module auto-height'>
					    	<?php list_distributors($iceland); ?>
					    </div>
					    <div class="small-12 cell">
				    		<h4 class="blue">Latvia</h4>
				    	</div>
					    <div class='medium-6 large-3 cell module auto-height'>
					    	<?php list_distributors($latvia); ?>
					    </div>
					    <div class="small-12 cell">
				    		<h4 class="blue">Lithuania</h4>
				    	</div>
					    <div class='medium-6 large-3 cell module auto-height'>
					    	<?php list_distributors($lithuania); ?>
					    </div>
					    <div class="small-12 cell">
				    		<h4 class="blue">Luxembourg</h4>
				    	</div>
					    <div class='medium-6 large-3 cell module auto-height'>
					    	<?php list_distributors($luxembourg); ?>
					    </div>
					    <div class="small-12 cell">
				    		<h4 class="blue">Netherlands</h4>
				    	</div>
					    <div class='medium-6 large-3 cell module auto-height'>
					    	<?php list_distributors($netherlands); ?>
					    </div>
					    <div class="small-12 cell">
				    		<h4 class="blue">Norway</h4>
				    	</div>
					    <div class='medium-6 large-3 cell module auto-height'>
					    	<?php list_distributors($norway); ?>
					    </div>
					    <div class="small-12 cell">
				    		<h4 class="blue">Poland</h4>
				    	</div>
					    <div class='medium-6 large-3 cell module auto-height'>
					    	<?php list_distributors($poland); ?>
					    </div>
					    <div class="small-12 cell">
				    		<h4 class="blue">Romania</h4>
				    	</div>
					    <div class='medium-6 large-3 cell module auto-height'>
					    	<?php list_distributors($romania); ?>
					    </div>
					    <div class="small-12 cell">
				    		<h4 class="blue">Russia</h4>
				    	</div>
					    <div class='medium-6 large-3 cell module auto-height'>
					    	<?php list_distributors($russia); ?>
					    </div>
					    <div class="small-12 cell">
				    		<h4 class="blue">Spain</h4>
				    	</div>
					    <div class='medium-6 large-3 cell module auto-height'>
					    	<?php list_distributors($spain); ?>
					    </div>
					    <div class="small-12 cell">
				    		<h4 class="blue">United Kingdom</h4>
				    	</div>
					    <div class='medium-6 large-3 cell module auto-height'>
					    	<?php list_distributors($uk); ?>
					    </div>
					  </div>
				  </div>
				  <div class="tabs-panel" id="middle-east">
				    <div class="grid-x grid-margin-x grid-margin-y">
					  	<div class="small-12 cell">
					  		<h2 class="blue">Middle East</h2>
					  	</div>
					  	<div class="small-12 cell">
				    		<h4 class="blue">Bahrain</h4>
				    	</div>
					    <div class='medium-6 large-3 cell module auto-height'>
					    	<?php list_distributors($bahrain); ?>
					    </div>
					  	<div class="small-12 cell">
				    		<h4 class="blue">Iraq</h4>
				    	</div>
					    <div class='medium-6 large-3 cell module auto-height'>
					    	<?php list_distributors($iraq); ?>
					    </div>
					    <div class="small-12 cell">
				    		<h4 class="blue">Israel</h4>
				    	</div>
					    <div class='medium-6 large-3 cell module auto-height'>
					    	<?php list_distributors($israel); ?>
					    </div>
					    <div class="small-12 cell">
				    		<h4 class="blue">Jordan</h4>
				    	</div>
					    <div class='medium-6 large-3 cell module auto-height'>
					    	<?php list_distributors($jordan); ?>
					    </div>
					    <div class="small-12 cell">
				    		<h4 class="blue">Kuwait</h4>
				    	</div>
					    <div class='medium-6 large-3 cell module auto-height'>
					    	<?php list_distributors($kuwait); ?>
					    </div>
					    <div class="small-12 cell">
				    		<h4 class="blue">Lebanon</h4>
				    	</div>
					    <div class='medium-6 large-3 cell module auto-height'>
					    	<?php list_distributors($lebanon); ?>
					    </div>
					    <div class="small-12 cell">
				    		<h4 class="blue">Oman</h4>
				    	</div>
					    <div class='medium-6 large-3 cell module auto-height'>
					    	<?php list_distributors($oman); ?>
					    </div>
					    <div class="small-12 cell">
				    		<h4 class="blue">Qatar</h4>
				    	</div>
					    <div class='medium-6 large-3 cell module auto-height'>
					    	<?php list_distributors($qatar); ?>
					    </div>
					    <div class="small-12 cell">
				    		<h4 class="blue">Saudi Arabia</h4>
				    	</div>
					    <div class='medium-6 large-3 cell module auto-height'>
					    	<?php list_distributors($saudi); ?>
					    </div>
					    <div class="small-12 cell">
				    		<h4 class="blue">Turkey</h4>
				    	</div>
					    <div class='medium-6 large-3 cell module auto-height'>
					    	<?php list_distributors($turkey); ?>
					    </div>
					    <div class="small-12 cell">
				    		<h4 class="blue">United Arab Emirates</h4>
				    	</div>
					    <div class='medium-6 large-3 cell module auto-height'>
					    	<?php list_distributors($uae); ?>
					    </div>
					  </div>
				  </div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer();