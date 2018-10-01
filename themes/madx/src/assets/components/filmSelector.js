import { apiRoot, acfApiRoot } from './config.js';
import findDealerForm from '../components/findDealerForm.js';
export default{
	name: 'filmSelector',
	components: {
		'find-dealer-form': findDealerForm
	},
	data(){
		return{
			energySavings: 50,
			glareReduction: 50,
			safetySecurity: 50,
			heatReduction: 50,
			postType: '',
			results: [],
			postData: [],
			premiumPostData: [],
			dialog: false,
			modalTitle: '',
			modalBody: '',
			modalImage: '',
			modalLogo: '',
			modalBrochure: '',
			maskColor: '',
			carSize: '',
			autoSwatches: {
				0:  { color: 'rgba(0,0,0,.05)',percent: '5%' },
				1:  { color: 'rgba(0,0,0,.1)' ,percent: '10%' },
				2:  { color: 'rgba(0,0,0,.15)',percent: '15%' },
				3:  { color: 'rgba(0,0,0,.2)' ,percent: '20%' },
				4:  { color: 'rgba(0,0,0,.25)',percent: '25%' },
				5:  { color: 'rgba(0,0,0,.3)' ,percent: '30%' },
				6:  { color: 'rgba(0,0,0,.35)',percent: '35%' },
				7:  { color: 'rgba(0,0,0,.4)' ,percent: '40%' },
				8:  { color: 'rgba(0,0,0,.45)',percent: '45%' },
				9:  { color: 'rgba(0,0,0,.5)' ,percent: '50%' },
				10: { color: 'rgba(0,0,0,.55)',percent: '55%' },
				11: { color: 'rgba(0,0,0,.6)' ,percent: '60%' },
				12: { color: 'rgba(0,0,0,.65)',percent: '65%' },
				13: { color: 'rgba(0,0,0,.7)' ,percent: '70%' },
				14: { color: 'rgba(0,0,0,.75)',percent: '75%' },
				15: { color: 'rgba(0,0,0,.8)' ,percent: '80%' },
				16: { color: 'rgba(0,0,0,.85)',percent: '85%' },
				17: { color: 'rgba(0,0,0,.9)' ,percent: '90%' }
			},
		}
	},
	template:
	 `<v-app id="inspire">
	  <div class="grid-x grid-margin-x grid-margin-y">
			<div class="small-12 cell relative warning-parent">
				<i class="fas fa-info-circle absolute"></i>
				<div class="grid-x warning-child">
					<div class="small-12 cell">
						<p>For information on tint laws in the United States and Canada, refer to the International Window Film Association chart here. Consult an authorized Madico window film dealer to find the window film most appropriate to fit your autmotive needs.</p>
					</div>
				</div>
			</div>
			<div class="medium-5 cell">
				<div class="grid-x grid-margin-x relative">
					<div class="number absolute"><span>1</span></div>
					<div class="small-10 small-offset-1 medium-12 medium-offset-0 cell">
						<h5 class="blue">Heat Reduction</h5>
						<p>Comfortable interior, infared rejection.</p>
					</div>
				</div>
			</div>
			<div class="medium-7 cell flex-column">
				<v-flex xs12>
	        <v-slider
	          v-model="heatReduction"
	        ></v-slider>
					<ul class="range-labels">
					  <li>Low Importance</li>
					  <li class="text-center">Medium</li>
					  <li class="text-right">High Importance</li>
					</ul>
	      </v-flex>
			</div>
			<div class="medium-5 cell">
				<div class="grid-x grid-margin-x relative">
					<div class="number absolute"><span>2</span></div>
					<div class="small-10 small-offset-1 medium-12 medium-offset-0 cell">
						<h5 class="blue">Glare and Fade Reduction</h5>
						<p>Reduce unwanted glare for exterior light sources and help protect furniture from fading.</p>
					</div>
				</div>
			</div>
			<div class="medium-7 cell flex-column">
				<v-flex xs12>
	        <v-slider
	          v-model="glareReduction"
	        ></v-slider>
					<ul class="range-labels">
					  <li>Low Importance</li>
					  <li class="text-center">Medium</li>
					  <li class="text-right">High Importance</li>
					</ul>
	      </v-flex>
			</div>
			<div class="medium-5 cell">
				<div class="grid-x grid-margin-x relative">
					<div class="number absolute"><span>3</span></div>
					<div class="small-10 small-offset-1 medium-12 medium-offset-0 cell">
						<h5 class="blue">Privacy &amp; Security</h5>
						<p>Prevent window breakage, deter break-ins, and holds glass together.</p>
					</div>
				</div>
			</div>
			<div class="medium-7 cell flex-column">
				<v-flex xs12>
	        <v-slider
	          v-model="safetySecurity"
	        ></v-slider>
					<ul class="range-labels">
					  <li>Low Importance</li>
					  <li class="text-center">Medium</li>
					  <li class="text-right">High Importance</li>
					</ul>
	      </v-flex>				
			</div>
			<div class="medium-12 cell">
				<div class="grid-x grid-margin-x relative">
					<div class="number absolute"><span>4</span></div>
					<div class="small-10 small-offset-1 medium-12 medium-offset-0 cell">
						<h5 class="blue">Appearance</h5>
						<p>Madico window film is offered in a variety of styles and hues, giving you the freedom to design as bold or as subtle as you’d like.</p>
					</div>
				</div>
			</div>
			<div class="medium-12 cell">
				<div class="grid-x grid-margin-x grid-margin-y">
					<div class="small-10 small-offset-1 medium-12 medium-offset-0 cell appearance">
						<div class="film-image">
							<img id="car-original" src="/wp-content/themes/madx/dist/assets/images/film-selector-car.png">
							<div id="mask" :style="{backgroundColor: maskColor,height: this.carSize}"></div>
							<img id="car-transparent" src="/wp-content/themes/madx/dist/assets/images/film-selector-car-transparent.png">
						</div>
						<ul class="film-colors">
							<li v-for="(swatch,index) in autoSwatches">
							{{autoSwatches.length}}
								<div class="color-swatch" @click="changeSwatch" :style="{ backgroundColor: swatch.color }"></div>
								<div class="img-wrap" v-bind:class="{ 'active-film':index == 0 }"></div>
							  <p v-bind:class="[index == 0 || index == Object.keys(autoSwatches).length - 1 ? 'outer-percent' : 'middle-percent']">{{ swatch.percent }}</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="medium-12 cell">
				<div class="grid-x grid-margin-x relative">
					<div class="number absolute"><span>5</span></div>
					<div class="small-10 small-offset-1 medium-12 medium-offset-0 cell">
						<h5 class="blue">Find Recommendations for Your Home</h5>
						<hr>
						<div class="grid-x grid-margin-x">
							<div class="medium-7 cell">
								<p>The follwing recommendations are meant to show a variety of solutions that may meet your needs. Please consult an authorized Madio film dealer to discuss your individual window film needs and to determine the most appropriate window film for your residence.</p>
							</div>
							<div class="medium-5 cell btn-container">
								<a @click="getFilms" class="btn-yellow solid">View My Results &nbsp;&nbsp;<i class="fas fa-caret-down"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="medium-12 cell top-results animated fadeIn" v-if="postData.length > 0">
			<hr />
			<div class="grid-x grid-margin-y">
				<div class="medium-7 cell">
					<span class="energy">
						<span><strong>Energy:</strong> {{ heatReduction | importance }}</span>
					</span>
					<span class="glare">
						<span><strong>Glare:</strong> {{ glareReduction | importance }}</span>
					</span>
					<span class="safety">
						<span><strong>Privacy:</strong> {{ safetySecurity | importance }}</span>
					</span>
				</div>
				<div class="medium-5 cell text-right">
					<span><i class="fal fa-print light-blue"></i>&nbsp;&nbsp;Print List</span>&nbsp;&nbsp;
					<span><i class="fal fa-envelope light-blue"></i>&nbsp;&nbsp;Email List</span>
				</div>
			</div>
			<hr />
			<div class="grid-x grid-margin-y">
				<div class="small-12 cell post-container" v-if="postData.length == 0">
					<p>No Films match your criteria. Please select something else.</p>
				</div>
				<div class="post-container small-12 cell" v-if="postData.length == 1 && premiumPostData.length == 0">
					<div class="grid-x grid-margin-x">
						<div class="medium-12 cell premium-post" v-for="(post,index) in postData">
						  <h4 class="blue best-match">Best Match</h4>
							<i class="fas fa-star yellow"></i>&nbsp;&nbsp;&nbsp;<a href="#!" @click.stop="dialog = true;setModalContent(post.id)" v-html="post.title.rendered"></a>
							<p v-html="$options.filters.limitWords(post.content.rendered,15)"></p>
						</div>
					</div>
				</div>
				<div class="post-container small-12 cell" v-if="postData.length >= 1 && premiumPostData.length == 1">
					<div class="grid-x grid-margin-x">
						<div class="medium-12 cell premium-post" v-for="(post,index) in premiumPostData" v-if="premiumPostData.length > 0">
						  <h4 class="blue best-match">Best Match</h4>
							<i class="fas fa-star yellow"></i>&nbsp;&nbsp;&nbsp;<a href="#!" @click.stop="dialog = true;setModalContent(post.id)" v-html="post.title.rendered"></a>
							<p v-html="$options.filters.limitWords(post.content.rendered,15)"></p>
						</div>
						<div class="medium-12 cell">
 							<h4 class="other-headline">Other Products to Consider</h4>
						</div>
						<div class="medium-12 cell other-posts" v-for="(post,index) in postData">
							<i class="fas fa-check"></i>&nbsp;&nbsp;&nbsp;<a href="#!" @click.stop="dialog = true;setModalContent(post.id)" v-html="post.title.rendered"></a>
							<p v-html="$options.filters.limitWords(post.content.rendered,15)"></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<hr>
		
    <v-dialog v-model="dialog" width="90%">
      <v-card>
        <v-card-title class="" primary-title>
          <div class="grid-container">
            <div class="grid-x grid-margin-x">
            	<div class="small-9 medium-6 cell" style="margin-bottom:30px">
								<img :src="modalLogo">
            	</div>
            	<div class="small-3 medium-6 cell text-right">
								<span @click="dialog = false"><i class="fas fa-times"></i></span>
            	</div>
							<div class="medium-6 cell">
								<img :src="modalImage" class="featured-image">
							</div>
							<div class="medium-6 cell">
								<h4 class="blue" v-html="modalTitle"></h4>
								<p v-html="modalBody"></p>
								<div class="grid-x grid-margin-y" v-if="modalBrochure" style="margin-top:0">
									<div class="small-3 medium-2 cell pdf-icon">
										<i class="fal fa-file-pdf"></i>
									</div>
									<div class="small-7 medium-10 cell">
										<a :href="modalBrochure" target="_blank">Download</a>
										<p>Product Brochure</p>
									</div>
								</div>
								<find-dealer-form></find-dealer-form>
							</div>
            </div>
          </div>
        </v-card-title>
      </v-card>
    </v-dialog>
		</v-app>`,
	created(){
		this.getPostType(location.href);
	},
	mounted(){
		window.addEventListener('resize', this.getCarSize);
	},
	beforeUpdate(){
		this.getCarSize();
	},
	methods:{
		getCarSize: function(){
			this.carSize = $('#car-original').height() + 'px';
		},
		getPostType: function(currentURL){
		  if (currentURL.includes('residential')) {
		  	this.postType = 'residential';
		  }else if (currentURL.includes('auto')) {
		  	this.postType = 'auto';
		  }
		},
		changeSwatch: function(event){
			$('.img-wrap').removeClass('active-film');
			$('.middle-percent').css({'display':'none'});
			let $imgWrap = $(event.target).next('div');
			let bgColor  = event.target.style.backgroundColor;
			let $watches = $('.color-swatch');

			$imgWrap.addClass('active-film');
			$imgWrap.next('p').css({'display':'block'});
			this.maskColor = bgColor;
		},
  	getFilms: function(){
  		const $this = this;
  		let heat    = this.$options.filters.importance(this.heatReduction);
  		let glare   = this.$options.filters.importance(this.glareReduction);
  		let safety  = this.$options.filters.importance(this.safetySecurity);
  		
  		axios
	      .get(apiRoot + 'auto')
	      .then(function (response) {
	      	$this.postData = [];
	      	$this.premiumPostData = [];

	      	response.data.forEach(function(post) {
	      		if (post.acf.heat_reduction) {
		      	  if (post.acf.heat_reduction.includes(heat) && post.acf.glare_reduction.includes(glare) && post.acf.privacy_security.includes(safety)) {
		      	  	if (post.acf.premium_film) {
		      	  		$this.premiumPostData.push(post)
		      	  	}else{
		      	  	  $this.postData.push(post);
		      	  	}
		      	  }
	      		}
	      	});
      		if ($this.postData.length > 1 && $this.premiumPostData.length == 0) {
      			$this.premiumPostData.push($this.postData[0])
      			$this.postData.shift()
      			console.log($this.premiumPostData)
      			console.log($this.postData)
      		}
	      }
	    );
  	},
  	setModalContent: function(postID){
  		var $this  = this;
  		axios
	      .get(apiRoot + 'auto/' + postID + '?_embed')
	      .then(function (response) {
	      	console.log(response.data)
	      	$this.modalTitle = response.data.title.rendered;
	      	$this.modalBody  = response.data.content.rendered;
	      	$this.modalImage = response.data.acf.film_selector_product_image;
	      	$this.modalLogo  = response.data.acf.film_selector_product_logo;
	      	$this.modalBrochure  = response.data.acf.product_brochure;
	      	
	      }
	    );
  	}
	},
	watch: {
	  dialog (val) {
	    !val;
	    this.modalTitle = '';
	    this.modalBody  = '';
	    this.modalImage = '';
	  }
	}
};