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
				0:  { color: 'rgba(0,0,0,.05)',percent: '90%' },
				1:  { color: 'rgba(0,0,0,.1)' ,percent: '85%' },
				2:  { color: 'rgba(0,0,0,.15)',percent: '80%' },
				3:  { color: 'rgba(0,0,0,.2)' ,percent: '75%' },
				4:  { color: 'rgba(0,0,0,.25)',percent: '70%' },
				5:  { color: 'rgba(0,0,0,.3)' ,percent: '65%' },
				6:  { color: 'rgba(0,0,0,.35)',percent: '60%' },
				7:  { color: 'rgba(0,0,0,.4)' ,percent: '55%' },
				8:  { color: 'rgba(0,0,0,.45)',percent: '50%' },
				9:  { color: 'rgba(0,0,0,.5)' ,percent: '45%' },
				10: { color: 'rgba(0,0,0,.55)',percent: '40%' },
				11: { color: 'rgba(0,0,0,.6)' ,percent: '35%' },
				12: { color: 'rgba(0,0,0,.65)',percent: '30%' },
				13: { color: 'rgba(0,0,0,.7)' ,percent: '25%' },
				14: { color: 'rgba(0,0,0,.75)',percent: '20%' },
				15: { color: 'rgba(0,0,0,.8)' ,percent: '15%' },
				16: { color: 'rgba(0,0,0,.85)',percent: '10%' },
				17: { color: 'rgba(0,0,0,.9)' ,percent: '5%' }
			},
		}
	},
	template:
	 `<div id="film-container">
		  <div class="grid-x grid-margin-x grid-margin-y">
				<div class="small-12 cell relative warning-parent">
					<i class="fas fa-info-circle absolute"></i>
					<div class="grid-x warning-child">
						<div class="small-12 cell">
							<p>For information on tint laws in the United States and Canada, refer to the International Window Film Association <a href="http://www.iwfa.com/News/StateLawCharts-AutomotiveWindowFilm.aspx" target="_blank">chart here</a>. Consult an authorized Madico window film dealer to find the window film most appropriate to fit your autmotive needs.</p>
						</div>
					</div>
				</div>
				<div class="medium-5 cell no-print">
					<div class="grid-x grid-margin-x relative">
						<div class="number absolute"><span>1</span></div>
						<div class="small-10 small-offset-1 medium-12 medium-offset-0 cell">
							<h5 class="blue">Heat Reduction</h5>
							<p>Comfortable interior, infared rejection.</p>
						</div>
					</div>
				</div>
				<div class="medium-7 cell flex-column no-print">
		      <div class="slider no-print" v-slider data-initial-start="50" data-end="100">
		        <span class="slider-handle"  data-slider-handle role="slider" tabindex="1"></span>
		        <span class="slider-fill" data-slider-fill></span>
		        <input id="heatInput" type="hidden">
		      </div>
	        <ul class="range-labels no-print">
	          <li>Low Importance</li>
	          <li class="text-center">Medium</li>
	          <li class="text-right">High Importance</li>
	        </ul>
				</div>
				<div class="medium-5 cell no-print">
					<div class="grid-x grid-margin-x relative">
						<div class="number absolute"><span>2</span></div>
						<div class="small-10 small-offset-1 medium-12 medium-offset-0 cell">
							<h5 class="blue">Glare Reduction</h5>
							<p>Block the sun’s UV rays and reduce the fading of vehicle’s interior.</p>
						</div>
					</div>
				</div>
				<div class="medium-7 cell flex-column no-print">
		      <div class="slider no-print" v-slider data-initial-start="50" data-end="100">
		        <span class="slider-handle"  data-slider-handle role="slider" tabindex="1"></span>
		        <span class="slider-fill" data-slider-fill></span>
		        <input id="glareInput" type="hidden">
		      </div>
	        <ul class="range-labels no-print">
	          <li>Low Importance</li>
	          <li class="text-center">Medium</li>
	          <li class="text-right">High Importance</li>
	        </ul>
				</div>
				<div class="medium-5 cell no-print">
					<div class="grid-x grid-margin-x relative">
						<div class="number absolute"><span>3</span></div>
						<div class="small-10 small-offset-1 medium-12 medium-offset-0 cell">
							<h5 class="blue">Safety</h5>
							<p>Helps hold shattered glass together in the event of an accident.</p>
						</div>
					</div>
				</div>
				<div class="medium-7 cell flex-column no-print">
		      <div class="slider no-print" v-slider data-initial-start="50" data-end="100">
		        <span class="slider-handle"  data-slider-handle role="slider" tabindex="1"></span>
		        <span class="slider-fill" data-slider-fill></span>
		        <input id="safetyInput" type="hidden">
		      </div>
	        <ul class="range-labels no-print">
	          <li>Low Importance</li>
	          <li class="text-center">Medium</li>
	          <li class="text-right">High Importance</li>
	        </ul>
				</div>
				<div class="medium-12 cell no-print">
					<div class="grid-x grid-margin-x relative">
						<div class="number absolute"><span>4</span></div>
						<div class="small-10 small-offset-1 medium-12 medium-offset-0 cell">
							<h5 class="blue">Appearance</h5>
							<p>Madico window film is offered in a variety of styles and hues, giving you the freedom to design as bold or as subtle as you’d like.</p>
						</div>
					</div>
				</div>
				<div class="medium-12 cell no-print">
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
				<div class="medium-12 cell no-print">
					<div class="grid-x grid-margin-x relative">
						<div class="number absolute"><span>5</span></div>
						<div class="small-10 small-offset-1 medium-12 medium-offset-0 cell">
							<h5 class="blue">Find Recommendations for Your Vehicle</h5>
							<hr>
							<div class="grid-x grid-margin-x">
								<div class="large-7 cell recommendation">
									<p>The following recommendations are meant to show a variety of Madico solutions that may meet your needs. Please consult an authorized Madico automotive film dealer to discuss your individual window film needs and to determine the most appropriate film for your vehicle.</p>
								</div>
								<div class="large-5 cell btn-container">
									<p><a @click="getFilms" class="btn-yellow solid">View Results &nbsp;&nbsp;<i class="fas fa-caret-down"></i></a></p>
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
					<div class="small-12 cell post-container" v-if="postData.length == 0 && premiumPostData.length == 0">
						<p>No Films match your criteria. Please select something else.</p>
					</div>
					<div class="post-container small-12 cell" v-if="postData.length == 1 && premiumPostData.length == 0">
						<div class="grid-x grid-margin-x">
							<div class="medium-12 cell premium-post" v-for="(post,index) in postData">
							  <h4 class="blue best-match">Best Match</h4>
								<i class="fas fa-star yellow"></i>&nbsp;&nbsp;&nbsp;<a href="#!" @click.stop="setModalContent(post.id)" v-html="post.title.rendered"></a>
								<p v-html="$options.filters.limitWords(post.content.rendered,15)"></p>
							</div>
						</div>
					</div>
					<div class="post-container small-12 cell" v-if="postData.length == 0 && premiumPostData.length == 1">
						<div class="grid-x grid-margin-x">
							<div class="medium-12 cell premium-post" v-for="(post,index) in premiumPostData">
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

			<div class="reveal" id="filmSelectorModal" v-reveal>
	      <div class="grid-container">
	        <div class="grid-x grid-margin-x">
	        	<div class="small-9 medium-6 cell" style="margin-bottom:30px">
							<img :src="modalLogo">
	        	</div>
	        	<div class="small-3 medium-6 cell text-right">
							<span @click="closeModal"><i class="fas fa-times"></i></span>
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
			</div>
		</div>`,
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
  		this.heatReduction  = document.getElementById('heatInput').value;
  		this.glareReduction = document.getElementById('glareInput').value; 
  		this.safetySecurity = document.getElementById('safetyInput').value;
  		let heat   = this.$options.filters.importance(this.heatReduction);
  		let glare  = this.$options.filters.importance(this.glareReduction);
  		let safety = this.$options.filters.importance(this.safetySecurity);

  		
  		axios
	      .get(apiRoot + $this.postType + '?per_page=99')
	      .then(function (response) {
	      	$this.postData = [];
	      	$this.premiumPostData = [];

	      	response.data.forEach(function(post) {
	      		if (post.acf.heat_reduction) {
		      	  if (post.acf.heat_reduction.indexOf(heat) > -1 && post.acf.glare_reduction.indexOf(glare) > -1 && post.acf.privacy_security.indexOf(safety) > -1) {
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
      			$this.postData.shift();
      		}
	      }
	    );
  	},
  	setModalContent: function(postID){
  		var $this  = this;
  		axios
	      .get(apiRoot + 'auto/' + postID + '?_embed')
	      .then(function (response) {
	      	$this.modalTitle    = response.data.title.rendered;
	      	$this.modalBody     = response.data.content.rendered;
	      	$this.modalImage    = response.data.acf.film_selector_product_image;
	      	$this.modalLogo     = response.data.acf.film_selector_product_logo;
	      	$this.modalBrochure = response.data.acf.product_brochure;
	      	$('#filmSelectorModal').foundation('open');
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
  	},
  	closeModal: function(){
  		$('#filmSelectorModal').foundation('close');
  	}
	},
};