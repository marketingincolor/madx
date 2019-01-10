<?php 
	/* Template Name: Distribution */
	get_header();
	$post_type = 'distributor';
?>

<section class="hero relative" style="background-image: url(<?php the_post_thumbnail_url($post->ID); ?>);">
	<div class="grid-container">
		<div class="grid-x">
			<div class="small-10 small-offset-1 large-offset-0 cell">
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
$na_term_names  = array();
$na_posts_by_country = array();
// Get term parent id
$na_parent    = get_term_by('slug','north-america','regions');
$na_parent_id = $na_parent->term_id;

// Get each child term under term parent
$na_terms = get_terms(array( 
  'taxonomy' => 'regions',
  'parent'   => $na_parent_id,
));

// add each child term name into an array
foreach ($na_terms as $term) {
	array_push($na_term_names, $term->name);
}

// Loop over each term name and query its posts, then assign the
// posts to that name in an associative array
for ($i=0; $i < count($na_term_names); $i++) { 
	$args = array(
	'post_type'      => 'distributor',
	'posts_per_page' => -1,
	'tax_query' => array(
	    array(
	    'taxonomy' => 'regions',
	    'field'    => 'name',
	    'terms'    => $na_term_names[$i]
	    )
	  )
	);
	$query = get_posts( $args );
	$na_posts_by_country[$na_term_names[$i]] = $query;
}
// ===========================
// == LATIN AMERICA
// ===========================
$la_term_names  = array();
$la_posts_by_country = array();
// Get term parent id
$la_parent    = get_term_by('slug','latin-america','regions');
$la_parent_id = $la_parent->term_id;

// Get each child term under term parent
$la_terms = get_terms(array( 
  'taxonomy' => 'regions',
  'parent'   => $la_parent_id,
));

// add each child term name into an array
foreach ($la_terms as $term) {
	array_push($la_term_names, $term->name);
}

// Loop over each term name and query its posts, then assign the
// posts to that name in an associative array
for ($i=0; $i < count($la_term_names); $i++) { 
	$args = array(
	'post_type'      => 'distributor',
	'posts_per_page' => -1,
	'tax_query' => array(
	    array(
	    'taxonomy' => 'regions',
	    'field'    => 'name',
	    'terms'    => $la_term_names[$i]
	    )
	  )
	);
	$query = get_posts( $args );
	$la_posts_by_country[$la_term_names[$i]] = $query;
}

// =======================
// == ASIA
// =======================
$asia_term_names  = array();
$asia_posts_by_country = array();
// Get term parent id
$asia_parent    = get_term_by('slug','asia','regions');
$asia_parent_id = $asia_parent->term_id;

// Get each child term under term parent
$asia_terms = get_terms(array( 
  'taxonomy' => 'regions',
  'parent'   => $asia_parent_id,
));

// add each child term name into an array
foreach ($asia_terms as $term) {
	array_push($asia_term_names, $term->name);
}

// Loop over each term name and query its posts, then assign the
// posts to that name in an associative array
for ($i=0; $i < count($asia_term_names); $i++) { 
	$args = array(
	'post_type'      => 'distributor',
	'posts_per_page' => -1,
	'tax_query' => array(
	    array(
	    'taxonomy' => 'regions',
	    'field'    => 'name',
	    'terms'    => $asia_term_names[$i]
	    )
	  )
	);
	$query = get_posts( $args );
	$asia_posts_by_country[$asia_term_names[$i]] = $query;
}
// ============================
// == AFRICA
// ============================
$africa_term_names  = array();
$africa_posts_by_country = array();
// Get term parent id
$africa_parent    = get_term_by('slug','africa','regions');
$africa_parent_id = $africa_parent->term_id;

// Get each child term under term parent
$africa_terms = get_terms(array( 
  'taxonomy' => 'regions',
  'parent'   => $africa_parent_id,
));

// add each child term name into an array
foreach ($africa_terms as $term) {
	array_push($africa_term_names, $term->name);
}

// Loop over each term name and query its posts, then assign the
// posts to that name in an associative array
for ($i=0; $i < count($africa_term_names); $i++) { 
	$args = array(
	'post_type'      => 'distributor',
	'posts_per_page' => -1,
	'tax_query' => array(
	    array(
	    'taxonomy' => 'regions',
	    'field'    => 'name',
	    'terms'    => $africa_term_names[$i]
	    )
	  )
	);
	$query = get_posts( $args );
	$africa_posts_by_country[$africa_term_names[$i]] = $query;
}
// =============================
// == EUROPE
// =============================
$europe_term_names  = array();
$europe_posts_by_country = array();
// Get term parent id
$europe_parent    = get_term_by('slug','europe','regions');
$europe_parent_id = $europe_parent->term_id;

// Get each child term under term parent
$europe_terms = get_terms(array( 
  'taxonomy' => 'regions',
  'parent'   => $europe_parent_id,
));

// add each child term name into an array
foreach ($europe_terms as $term) {
	array_push($europe_term_names, $term->name);
}

// Loop over each term name and query its posts, then assign the
// posts to that name in an associative array
for ($i=0; $i < count($europe_term_names); $i++) { 
	$args = array(
	'post_type'      => 'distributor',
	'posts_per_page' => -1,
	'tax_query' => array(
	    array(
	    'taxonomy' => 'regions',
	    'field'    => 'name',
	    'terms'    => $europe_term_names[$i]
	    )
	  )
	);
	$query = get_posts( $args );
	$europe_posts_by_country[$europe_term_names[$i]] = $query;
}

// =============================
// == AUSTRALIA
// =============================
$australia_term_names  = array();
$australia_posts_by_country = array();
// Get term parent id
$australia_parent    = get_term_by('slug','australia','regions');
$australia_parent_id = $australia_parent->term_id;

// Get each child term under term parent
$australia_terms = get_terms(array( 
  'taxonomy' => 'regions',
  'parent'   => $australia_parent_id,
));

// add each child term name into an array
foreach ($australia_terms as $term) {
	array_push($australia_term_names, $term->name);
}

// Loop over each term name and query its posts, then assign the
// posts to that name in an associative array
for ($i=0; $i < count($australia_term_names); $i++) { 
	$args = array(
	'post_type'      => 'distributor',
	'posts_per_page' => -1,
	'tax_query' => array(
	    array(
	    'taxonomy' => 'regions',
	    'field'    => 'name',
	    'terms'    => $australia_term_names[$i]
	    )
	  )
	);
	$query = get_posts( $args );
	$australia_posts_by_country[$australia_term_names[$i]] = $query;
}

// ===========================
// == MIDDLE EAST
// ===========================
$mideast_term_names  = array();
$mideast_posts_by_country = array();
// Get term parent id
$mideast_parent    = get_term_by('slug','middle-east','regions');
$mideast_parent_id = $mideast_parent->term_id;

// Get each child term under term parent
$mideast_terms = get_terms(array( 
  'taxonomy' => 'regions',
  'parent'   => $mideast_parent_id,
));

// add each child term name into an array
foreach ($mideast_terms as $term) {
	array_push($mideast_term_names, $term->name);
}

// Loop over each term name and query its posts, then assign the
// posts to that name in an associative array
for ($i=0; $i < count($mideast_term_names); $i++) { 
	$args = array(
	'post_type'      => 'distributor',
	'posts_per_page' => -1,
	'tax_query' => array(
	    array(
	    'taxonomy' => 'regions',
	    'field'    => 'name',
	    'terms'    => $mideast_term_names[$i]
	    )
	  )
	);
	$query = get_posts( $args );
	$mideast_posts_by_country[$mideast_term_names[$i]] = $query;
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
							<?php list_distributors($na_posts_by_country); ?>
						</div>
				  </div>
				  <div class="tabs-panel" id="latin-america">
				    <div class="grid-x grid-margin-x grid-margin-y">
				    	<div class="small-12 cell">
				    		<h2 class="blue">Latin America</h2>
				    	</div>
							<?php list_distributors($la_posts_by_country); ?>
				    </div>
				  </div>
				  <div class="tabs-panel" id="africa">
				    <div class="grid-x grid-margin-x grid-margin-y">
				    	<div class="small-12 cell">
				    		<h2 class="blue">Africa</h2>
				    	</div>
				    	<?php list_distributors($africa_posts_by_country); ?>
				    </div>
				  </div>
				  <div class="tabs-panel" id="asia">
				    <div class="grid-x grid-margin-x grid-margin-y">
				    	<div class="small-12 cell">
				    		<h2 class="blue">Asia</h2>
				    	</div>
				    	<?php list_distributors($asia_posts_by_country); ?>
				    </div>
				  </div>
				  <div class="tabs-panel" id="australia">
				  	<div class="grid-x grid-margin-x grid-margin-y">
					  	<div class="small-12 cell">
					  		<h2 class="blue">Australia</h2>
					  	</div>
					    	<?php list_distributors($australia_posts_by_country); ?>
					  </div>
				  </div>
				  <div class="tabs-panel" id="europe">
				    <div class="grid-x grid-margin-x grid-margin-y">
					  	<div class="small-12 cell">
					  		<h2 class="blue">Europe</h2>
					  	</div>
					  	<?php list_distributors($europe_posts_by_country); ?>
					  </div>
				  </div>
				  <div class="tabs-panel" id="middle-east">
				    <div class="grid-x grid-margin-x grid-margin-y">
					  	<div class="small-12 cell">
					  		<h2 class="blue">Middle East</h2>
					  	</div>
					  	<?php list_distributors($mideast_posts_by_country); ?>
					  </div>
				  </div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer();