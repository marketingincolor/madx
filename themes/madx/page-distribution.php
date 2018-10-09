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
				  <li class="tabs-title is-active"><a href="#north-america" aria-selected="true">North <br>America</a></li>
				  <li class="tabs-title"><a @click="openDistributionTab" href="#latin-america">Latin <br>America</a></li>
				  <li class="tabs-title"><a @click="openDistributionTab" href="#africa">Africa</a></li>
				  <li class="tabs-title"><a @click="openDistributionTab" href="#asia">Asia</a></li>
				  <li class="tabs-title"><a @click="openDistributionTab" href="#australia">Australia</a></li>
				  <li class="tabs-title"><a @click="openDistributionTab" href="#europe">Europe</a></li>
				  <li class="tabs-title"><a @click="openDistributionTab" href="#middle-east">Middle <br>East</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>

<section class="dealer-results">
	<div class="grid-container">
		<div class="grid-x grid-margin-x grid-margin-y">
			<div class="small-10 small-offset-1 large-12 large-offset-0 cell">
				<div id="tabs-content" class="tabs-content" data-tabs-content="region-tabs">
				  <div class="tabs-panel is-active" id="north-america">
				    <div class="medium-6 large-3 cell module auto-height">
				    	<div class="dealer-tag"><?php echo $icons_joined; ?></div>
				    	<h5 class="blue" data-dealerName="<?php echo $dealer_name; ?>"><a href="#!" <?php if($dealer_email) { ?>data-open="dealer-modal"<?php } ?>><?php echo $dealer_name; ?></a></h5>
				    	<ul class="dealer-meta">
				    		<li><address><i class="fas fa-map-marker-alt"></i> &nbsp;<?php echo $dealer_street; ?><br> <?php echo $dealer_city; ?>, <?php echo $dealer_state; ?> <?php echo $dealer_zip; ?></address></li>
				    		<li><address><i class="fas fa-phone"></i> &nbsp;<?php echo $dealer_phone; ?></address></li>
				    		<?php if($dealer_email) { ?>
				    		  <li class="email" data-dealerEmail="<?php echo $dealer_email; ?>"><address><i class="fas fa-envelope"></i> &nbsp;<?php echo $dealer_email; ?></address></li>
				    		<?php } ?>
				    	</ul>
				    </div>
				  </div>
				  <div class="tabs-panel" id="latin-america">
				    
				  </div>
				  <div class="tabs-panel" id="africa">
				    
				  </div>
				  <div class="tabs-panel" id="asia">
				    
				  </div>
				  <div class="tabs-panel" id="australia">
				    
				  </div>
				  <div class="tabs-panel" id="europe">
				    
				  </div>
				  <div class="tabs-panel" id="middle-east">
				    
				  </div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer();