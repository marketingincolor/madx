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
			postType: 'residential',
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
				0:  { color: '#e6e5e1',percent: 'Clear' },
				1:  { color: '#7a5923',percent: 'Bronze' },
				2:  { color: '#525252',percent: 'Gray' },
				3:  { color: '#989c9e',percent: 'Silver' },
				4:  { color: '#d7dcdf',percent: 'Reflective' },
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
						<p>All Madico window film reduces fading of furniture, flooring, and fabrics due to visible light, blocking 99% of damaging ultraviolet rays. Madico architectural window film provides added comfort, privacy, and safety for your home.</p>
					</div>
				</div>
			</div>
			<div class="medium-5 cell no-print">
				<div class="grid-x grid-margin-x relative">
					<div class="number absolute"><span>1</span></div>
					<div class="small-10 small-offset-1 medium-12 medium-offset-0 cell">
						<h5 class="blue">Energy Savings</h5>
						<p>Enjoy year-round comfort from excessive heat or cold. </p>
					</div>
				</div>
			</div>
			<div class="medium-7 cell flex-column no-print">
				<v-flex xs12>
	        <v-slider
	          v-model="energySavings"
	        ></v-slider>
					<ul class="range-labels no-print">
					  <li>Low Importance</li>
					  <li class="text-center">Medium</li>
					  <li class="text-right">High Importance</li>
					</ul>
	      </v-flex>
			</div>
			<div class="medium-5 cell no-print">
				<div class="grid-x grid-margin-x relative">
					<div class="number absolute"><span>2</span></div>
					<div class="small-10 small-offset-1 medium-12 medium-offset-0 cell">
						<h5 class="blue">Glare Reduction</h5>
						<p>Reduce unwanted glare for exterior light sources</p>
					</div>
				</div>
			</div>
			<div class="medium-7 cell flex-column no-print">
				<v-flex xs12>
	        <v-slider
	          v-model="glareReduction"
	        ></v-slider>
					<ul class="range-labels no-print">
					  <li>Low Importance</li>
					  <li class="text-center">Medium</li>
					  <li class="text-right">High Importance</li>
					</ul>
	      </v-flex>
			</div>
			<div class="medium-5 cell no-print">
				<div class="grid-x grid-margin-x relative">
					<div class="number absolute"><span>3</span></div>
					<div class="small-10 small-offset-1 medium-12 medium-offset-0 cell">
						<h5 class="blue">Privacy &amp; Security</h5>
						<p>Prevent window breakage, deter break-ins, and holds glass together.</p>
					</div>
				</div>
			</div>
			<div class="medium-7 cell flex-column no-print">
				<v-flex xs12>
	        <v-slider
	          v-model="safetySecurity"
	        ></v-slider>
					<ul class="range-labels no-print">
					  <li>Low Importance</li>
					  <li class="text-center">Medium</li>
					  <li class="text-right">High Importance</li>
					</ul>
	      </v-flex>				
			</div>
			<div class="medium-12 cell no-print">
				<div class="grid-x grid-margin-x relative">
					<div class="number absolute"><span>4</span></div>
					<div class="small-10 small-offset-1 medium-12 medium-offset-0 cell">
						<h5 class="blue">Appearance</h5>
						<p>Color, visible light</p>
					</div>
				</div>
			</div>
			<div class="medium-12 cell no-print">
				<div class="grid-x grid-margin-x grid-margin-y">
					<div class="small-10 small-offset-1 medium-12 medium-offset-0 cell appearance">
						<div class="film-image">
							<img id="car-original" src="/wp-content/themes/madx/dist/assets/images/window-original.png">
							<div id="mask" :style="{backgroundColor: maskColor,height: this.carSize}"></div>
							<img id="car-transparent" src="/wp-content/themes/madx/dist/assets/images/window-transparent.png">
						</div>
						<ul class="film-colors">
							<li v-for="(swatch,index) in autoSwatches">
							{{autoSwatches.length}}
								<div class="color-swatch" @click="changeSwatch" :style="{ backgroundColor: swatch.color }"></div>
								<div class="img-wrap" v-bind:class="{ 'active-film':index == 0 }"></div>
							  <p class="outer-percent">{{ swatch.percent }}</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="medium-12 cell no-print">
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
					<span @click="print" class="no-print"><i class="fal fa-print light-blue"></i>&nbsp;&nbsp;Print List</span>&nbsp;&nbsp;
					<span @click="sendEmail" class="no-print"><i class="fal fa-envelope light-blue"></i>&nbsp;&nbsp;Email List</span>
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
  		let energy = this.$options.filters.importance(this.energySavings);
  		let glare  = this.$options.filters.importance(this.glareReduction);
  		let safety = this.$options.filters.importance(this.safetySecurity);
  		
  		axios
	      .get(apiRoot + $this.postType)
	      .then(function (response) {
	      	$this.postData = [];
	      	$this.premiumPostData = [];

	      	response.data.forEach(function(post) {
	      		if (post.acf.energy_savings) {
		      	  if (post.acf.energy_savings.includes(energy) && post.acf.glare_reduction.includes(glare) && post.acf.privacy_security.includes(safety)) {
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
  	},
  	sendEmail: function(){
  		let link = "mailto:?subject=Madico%Film%20Selector%20Results"
  		             + "&body=" + document.getElementsByClassName("post-container")[0].innerText;

  		window.location.href = link;
  	},
  	print: function(){
  		print();
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