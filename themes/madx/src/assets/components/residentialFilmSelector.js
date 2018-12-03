import { apiRoot, acfApiRoot } from './config.js';
import findDealerForm from '../components/findDealerForm.js';
export default{
	name: 'filmSelector',
	components: {
		'find-dealer-form': findDealerForm
	},
	data(){
		return{
			energySavings: 10,
			glareReduction: 10,
			safetySecurity: 10,
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
			houseImage: '/wp-content/themes/madx/dist/assets/images/residential-film-selector_Clear.jpg',
			carSize: '',
			autoSwatches: {
				0:  { color: '#e6e5e1',percent: 'Clear', image: '/wp-content/themes/madx/dist/assets/images/residential-film-selector_Clear.jpg' },
				1:  { color: '#7a5923',percent: 'Bronze', image: '/wp-content/themes/madx/dist/assets/images/residential-film-selector_Bronze.jpg' },
				2:  { color: '#525252',percent: 'Gray', image: '/wp-content/themes/madx/dist/assets/images/residential-film-selector_Gray.jpg' },
				3:  { color: '#989c9e',percent: 'Silver', image: '/wp-content/themes/madx/dist/assets/images/residential-film-selector_Silver.jpg' },
				4:  { color: '#d7dcdf',percent: 'Reflective', image: '/wp-content/themes/madx/dist/assets/images/residential-film-selector_Reflective.jpg' },
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
				<div class="slider no-print" v-slider data-initial-start="10" data-end="100">
		        <span class="slider-handle"  data-slider-handle role="slider" tabindex="1"></span>
		        <span class="slider-fill" data-slider-fill></span>
		        <input type="hidden" id="energyInput">
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
						<p>Reduce unwanted glare for exterior light sources</p>
					</div>
				</div>
			</div>
			<div class="medium-7 cell flex-column no-print">
				<div class="slider no-print" v-slider data-initial-start="10" data-end="100">
	        <span class="slider-handle"  data-slider-handle role="slider" tabindex="1"></span>
	        <span class="slider-fill" data-slider-fill></span>
	        <input type="hidden" id="glareInput">
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
						<h5 class="blue">Safety &amp; Security</h5>
						<p>Prevent window breakage, deter break-ins, and holds glass together.</p>
					</div>
				</div>
			</div>
			<div class="medium-7 cell flex-column no-print">
	      <div class="slider no-print" v-slider data-initial-start="10" data-end="100">
	        <span class="slider-handle"  data-slider-handle role="slider" tabindex="1"></span>
	        <span class="slider-fill" data-slider-fill></span>
	        <input type="hidden" id="safetyInput">
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
							<img id="car-original" :src="houseImage">
						</div>
						<ul class="film-colors residential">
							<li v-for="(swatch,index) in autoSwatches">
							{{autoSwatches.length}}
								<div class="color-swatch" :data-image="swatch.image" @click="changeSwatch" :style="{ backgroundColor: swatch.color }"></div>
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
							<div class="large-7 cell recommendation">
								<p>The following recommendations are meant to show a variety of solutions that may meet your needs. Please consult an authorized Madio film dealer to discuss your individual window film needs and to determine the most appropriate window film for your residence.</p>
							</div>
							<div class="large-5 cell btn-container">
								<p><a @click="getFilms" class="btn-yellow solid">View Results &nbsp;&nbsp;<i class="fas fa-caret-down"></i></a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="medium-12 cell top-results animated fadeIn" v-if="postData.length > 0 || premiumPostData.length > 0">
			<hr />
			<div class="grid-x grid-margin-y">
				<div class="medium-7 cell">
					<span class="energy">
						<span><strong>Energy:</strong> {{ energySavings | userImportance }}</span>
					</span>
					<span class="glare">
						<span><strong>Glare:</strong> {{ glareReduction | userImportance }}</span>
					</span>
					<span class="safety">
						<span><strong>Security:</strong> {{ safetySecurity | userImportance }}</span>
					</span>
				</div>
				<div class="medium-5 cell text-right">
					<span @click="print" class="no-print print-results"><i class="fal fa-print light-blue"></i>&nbsp;&nbsp;Print List</span>
				</div>
			</div>
			<hr />
			<div class="grid-x grid-margin-y">
				<div class="small-12 cell post-container" v-if="postData.length == 0 && premiumPostData.length == 0">
					<p>No Films match your criteria. Please select something else.</p>
				</div>
				<div class="post-container small-12 cell">
					<div class="grid-x grid-margin-x">
						<div class="medium-12 cell premium-post" v-for="post in premiumPostData" v-if="premiumPostData.length > 0">
						  <h4 class="blue best-match">Best Match</h4>
							<i class="fas fa-star yellow"></i>&nbsp;&nbsp;&nbsp;<a href="#!" @click.stop="dialog = true;setModalContent(post.id)" v-html="post.title.rendered"></a>
							<p v-html="post.film_description"></p>
						</div>
						<div class="medium-12 cell" v-if="postData.length > 0">
 							<h4 class="other-headline">Other Products to Consider</h4>
						</div>
						<div class="medium-12 cell other-posts" v-for="(post,index) in postData" v-if="postData.length > 0">
							<i class="fas fa-check"></i>&nbsp;&nbsp;&nbsp;<a href="#!" @click.stop="dialog = true;setModalContent(post.id)" v-html="post.title.rendered"></a>
							<p v-html="post.film_description"></p>
						</div>
						<div class="medium-12 cell text-center no-print" style="margin-top:30px;margin-bottom:30px">
							<a href="/find-dealer" style="border-bottom:0"><button class="btn-yellow solid">Find Dealer</button></a>
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
							<span @click="closeModal" style="cursor:pointer"><i class="fas fa-times"></i></span>
	        	</div>
						<div class="medium-6 cell">
							<img :src="modalImage" class="featured-image" style="width:100%">
							<h5 class="blue show-for-medium-only" style="margin-top:20px">Find Dealer</h5>
							<find-dealer-form class="show-for-medium-only"></find-dealer-form>
						</div>
						<div class="medium-6 cell">
							<h4 class="blue" v-html="modalTitle"></h4>
							<p v-html="modalBody"></p>
							<div class="grid-x grid-margin-y" style="margin-top:0">
								<div class="small-3 medium-2 large-1 cell pdf-icon" v-if="modalBrochure">
									<i class="fal fa-file-pdf"></i>
								</div>
								<div class="small-7 medium-10 cell download" v-if="modalBrochure">
									<a :href="modalBrochure" target="_blank">Download</a>
									<p>Product Brochure</p>
								</div>
								<div class="small-12 cell hide-for-medium-only">
									<h5 class="blue">Find Dealer</h5>
								</div>
							</div>
							<find-dealer-form class="hide-for-medium-only"></find-dealer-form>
						</div>
	        </div>
	      </div>
			</div>
		</div>`,
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
			let newImage = event.target.dataset.image;
			let bgColor  = event.target.style.backgroundColor;
			let $watches = $('.color-swatch');

			$imgWrap.addClass('active-film');
			$imgWrap.next('p').css({'display':'block'});
			this.houseImage = newImage;
		},
  	getFilms: function(){
  		const $this = this;

  		this.energySavings  = document.getElementById('energyInput').value;
  		this.glareReduction = document.getElementById('glareInput').value; 
  		this.safetySecurity = document.getElementById('safetyInput').value;
  		console.log(this.energySavings)
  		console.log(this.glareReduction)
  		console.log(this.safetySecurity)
  		let energy = this.$options.filters.importance(this.energySavings);
  		let glare  = this.$options.filters.importance(this.glareReduction);
  		let safety = this.$options.filters.safetyImportance(this.safetySecurity);
  		
  		axios
	      .get(apiRoot + $this.postType + '?per_page=99')
	      .then(function (response) {
	      	$this.postData = [];
	      	$this.premiumPostData = [];

	      	response.data.forEach(function(post) {
	      		if (post.acf.combinations) {
	      			post.acf.combinations.forEach(function(combination){
	      				if (combination.energy_savings.indexOf(energy) > -1 && combination.glare_reduction.indexOf(glare) > -1 && combination.safety_security.indexOf(safety) > -1) {
	      					post.film_description = combination.description;
	      					if (combination.best_match.length > 0) {
	      						$this.premiumPostData.push(post);
	      					}else{
	      					  $this.postData.push(post);
	      					}
	      				}
	      			});
	      		}
	      	});
	      }
	    );
  	},
  	setModalContent: function(postID){
  		var $this  = this;
  		axios
	      .get(apiRoot + 'residential/' + postID + '?_embed')
	      .then(function (response) {
	      	$this.modalTitle    = response.data.title.rendered;
	      	$this.modalBody     = response.data.content.rendered;
	      	$this.modalImage    = response.data.acf.film_selector_product_image;
	      	$this.modalLogo     = response.data.acf.film_selector_product_logo;
	      	$this.modalBrochure = response.data.acf.pdf_link;
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