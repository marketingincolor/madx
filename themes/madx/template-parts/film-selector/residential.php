<main class="page-container">
	
	<?php get_template_part('template-parts/menus/residential-header-menu'); ?>

	<section class="top">
		<div class="grid-container">
			<div class="grid-x grid-margin-y">
				<div class="large-8 medium-10 large-offset-2 medium-offset-1 cell text-center">
					<h1 class="blue"><?php the_field('page_heading'); ?></h1>
					<aside class="yellow-underline center"></aside>
					<p><?php the_field('page_subheading'); ?></p>
				</div>
			</div>
		</div>
	</section>

	<section class="select-film">
		<div class="grid-container">
			<div class="grid-x">
				<div class="medium-10 medium-offset-1 cell">
					<div class="grid-x grid-margin-x grid-margin-y">
						<div class="small-2 medium-1 cell text-right icon-container">
							<i class="fal fa-info-circle"></i>
						</div>
						<div class="small-10 medium-11 cell">
							<p><?php the_field('film_warning'); ?></p>
						</div>
						<div class="small-12 cell"><hr></div>
						<div class="small-12 cell text-center"><p>Select Importance</p></div>
						<div class="medium-5 cell">
							<div class="grid-x grid-margin-x">
								<div class="small-3 medium-2 cell text-center">
									<div class="number"><span>1</span></div>
								</div>
								<div class="small-9 medium-8 cell">
									<h5 class="blue">Energy Savings</h5>
									<p>Enjoy year-round comfort from excessive heat or cold</p>
								</div>
							</div>
						</div>
						<div class="medium-7 cell flex-column">
							<input type="range" min="0" max="10" value="5" class="film-slider">
							<ul class="range-labels">
							  <li>Low Importance</li>
							  <li class="text-center">Medium</li>
							  <li class="text-right">High Importance</li>
							</ul>
						</div>
						<div class="medium-5 cell">
							<div class="grid-x grid-margin-x">
								<div class="small-3 medium-2 cell text-center">
									<div class="number"><span>2</span></div>
								</div>
								<div class="small-9 medium-8 cell">
									<h5 class="blue">Glare and Fade Reduction</h5>
									<p>Reduce unwanted glare for exterior light sources and help protect furniture from fading.</p>
								</div>
							</div>
						</div>
						<div class="medium-7 cell flex-column">
							<input type="range" min="0" max="10" value="5" class="film-slider">
							<ul class="range-labels">
							  <li>Low Importance</li>
							  <li class="text-center">Medium</li>
							  <li class="text-right">High Importance</li>
							</ul>
						</div>
						<div class="medium-5 cell">
							<div class="grid-x grid-margin-x">
								<div class="small-3 medium-2 cell text-center">
									<div class="number"><span>3</span></div>
								</div>
								<div class="small-9 medium-8 cell">
									<h5 class="blue">Privacy &amp; Security</h5>
									<p>Prevent window breakage, deter break-ins, and holds glass together.</p>
								</div>
							</div>
						</div>
						<div class="medium-7 cell flex-column">
							<input type="range" min="0" max="10" value="5" class="film-slider">
							<ul class="range-labels">
							  <li>Low Importance</li>
							  <li class="text-center">Medium</li>
							  <li class="text-right">High Importance</li>
							</ul>
						</div>
						<div class="medium-12 cell">
							<div class="grid-x grid-margin-x">
								<div class="small-3 medium-1 cell text-center">
									<div class="number"><span>4</span></div>
								</div>
								<div class="small-9 medium-10 cell appearance">
									<h5 class="blue">Appearance</h5>
									<p>Madico window film is offered in a variety of styles and hues, giving you the freedom to design as bold or as subtle as you’d like.</p>
								</div>
							</div>
						</div>
						<div class="medium-12 cell">
							<div class="grid-x grid-margin-x grid-margin-y">
								<div class="small-3 medium-1 cell text-center"></div>
								<div class="small-9 medium-11 cell appearance">
									<img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/house.png" alt="House" style="width:100%">
									<ul class="film-colors">
										<li>
											<img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/neutral.png" alt="">
											<div class="img-wrap active-film"></div>
										  <p>Neutral</p>
										</li>
										<li>
											<img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/bronze.png" alt="">
											<div class="img-wrap"></div>
											<p>Bronze</p></li>
										<li>
											<img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/grey.png" alt="">
											<div class="img-wrap"></div>
											<p>Grey</p></li>
										<li>
											<img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/silver.png" alt="">
											<div class="img-wrap"></div>
											<p>Silver</p></li>
										<li>
											<img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/dual-reflective.png" alt="">
											<div class="img-wrap"></div>
											<p>Dual Reflective</p>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="medium-12 cell">
							<div class="grid-x grid-margin-x">
								<div class="small-3 medium-1 cell text-center">
									<div class="number"><span>5</span></div>
								</div>
								<div class="small-9 medium-11 cell appearance">
									<h5 class="blue">Find Recommendations for Your Home</h5>
									<hr>
									<div class="grid-x grid-margin-x">
										<div class="medium-7 cell">
											<p>The follwing recommendations are meant to show a variety of solutions that may meet your needs. Please consult an authorized Madio film dealer to discuss your individual window film needs and to determine the most appropriate window film for your residence.</p>
										</div>
										<div class="medium-5 cell btn-container">
											<a href="#!" class="btn-yellow solid">View My Results</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Results -->
					<hr>
					<div class="medium-12 cell top-results">
						<div class="left">
							<span class="energy">
								<span><strong>Energy:</strong> {{ energySavings | importance }}</span>
							</span>
							<span class="glare">
								<span><strong>Glare:</strong> {{ glareReduction | importance }}</span>
							</span>
							<span class="safety">
								<span><strong>Safety:</strong> {{ safetySecurity | importance }}</span>
							</span>
						</div>
						<div class="right text-right">
							<span><i class="fal fa-print"></i>&nbsp;&nbsp;Print List</span>
							<span><i class="fal fa-envelope"></i>&nbsp;&nbsp;Email List</span>
						</div>
					</div>
					<hr>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part('template-parts/find-dealer'); ?>
</main>