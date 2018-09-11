import $ from 'jquery';
import whatInput from 'what-input';

window.$ = $;

import Foundation from 'foundation-sites';
// If you want to pick and choose which modules to include, comment out the above and uncomment
// the line below
//import './lib/foundation-explicit-pieces';



const apiRoot    = location.origin + '/wp-json/wp/v2/';
const acfApiRoot = location.origin + '/wp-json/acf/v3/';

// GLOBAL FILTERS

// Limit words displayed
Vue.filter('limitWords',function (textToLimit,wordLimit){
	var textArray  = textToLimit.split(' ');
	var totalWords = textArray.length;
	var LimitedTextArray = [];

	if (totalWords < wordLimit) {
		return textToLimit
	}else{
		for(var i = 0;i < wordLimit;i++){
			LimitedTextArray.push(textArray[i]);
		}
		return LimitedTextArray.join(' ') + '...';
	}
});

// CUSTOM DIRECTIVES

// Add foundation dropdown menu functionality to an element
Vue.directive('dropdown', {
  bind: function (el) {
    new Foundation.DropdownMenu($(el));
  }
});

const findDealerForm = Vue.component('find-dealer-form',{
	data(){
		return{
			googleKey: '',
			zipCode: '',
			zipCodesInRadius: []
		}
	},
	template:
	 `<div>
			<form class="zip-search" id="zip-form" v-on:submit.prevent="zipCodeLookup">
				<input v-model="zipCode" type="text" name="zip" id="zip" placeholder="Zip Code" required>
				<button type="submit" id="submit-form" onclick="">
				   <i class="fas fa-map-marker-alt yellow"></i>
				</button>
			</form>
			<div class="use-location">
				<a id="use-location" @click="findLocation" class="yellow"><i class="far fa-location-arrow yellow"></i> &nbsp;Use My Location</a>
			</div>
		</div>`,
	created(){
		this.getGoogleApiKey();
	},
	methods:{
		zipCodeLookup: function(){
		  this.sendZip(this.zipCode);
		},
		findLocation: function() {
	    if (navigator.geolocation) {
	      navigator.geolocation.getCurrentPosition(this.getPosition);
	    }else{
	      alert("Geolocation is not supported by this browser. Please manually type in your zip code and press Enter");
	    }
		},
		getPosition: function(position) {
			let $this = this;
	    let apiURL = 'https://maps.googleapis.com/maps/api/geocode/json?latlng='+ position.coords.latitude +','+ position.coords.longitude +'&key=' + this.googleKey;
	    
  		axios
  		  .get(apiURL)
  		  .then(function (response) {
  	    	$this.zipCode = response.data.results[0].address_components[7].long_name;
  	    	$this.sendZip($this.zipCode);
  		  }
  		)
		},
		getGoogleApiKey: function(){
			let $this = this;

			axios
			  .get('/google-api-key.php')
			  .then(function (response) {
		    	$this.googleKey = response.data;
			  }
			)
		},
		sendZip: function(zip){
			let $this = this;

		    $.ajax({
    			url: '/wp-content/themes/madx/zip-code-search.php',
    			type: 'POST',
    			data: { zip:$this.zipCode },
    			dataType: 'json',
    			success:function(data){
    				if (data.error_code) {
    					alert(data.error_msg + ' Please enter a valid zip code');
    				}else{
    					console.log(data.zip_codes);
    				}
    			}
    		});
		},
	}
});

const TaxTermMenu = Vue.component('tax-term-posts',{
	data() {
		return{
	    taxonomies: [],
	    taxPosts: [],
	    taxonomy: '',
	    postType: '',
	    taxParentSlug: '',
	    taxChildSlug: '',
	    taxParentId: 0,
	    activeItem: '',
	    singlePost: [],
	    singlePostActive: false,
	    benefits: [],
	    pdfLink: ''
		}
	},
	template:`<div id="posts-container">
	            <div class="grid-x grid-margin-x">
								<div class="medium-3 cell">
									<ul id="tax-menu" class="tax-menu vertical menu">
								    <li v-for="taxonomy in taxonomies" v-bind:class="{active: (activeItem == taxonomy.name)}"><a href="#!" @click="activeItem = taxonomy.name;getTaxPosts()">{{ taxonomy.name }}</a></li>
							    </ul>
								</div>
								<div class="medium-9 cell" id="all-posts" v-if="!singlePostActive">
									<div class="grid-x grid-margin-x grid-margin-y">
										<div class="medium-12 cell breadcrumbs">
											<h5 class="breadcrumb-title">{{ taxParentSlug }} > {{ activeItem }}</h5>
											<h3>{{ activeItem }}</h3>
										</div>
										<div class="medium-4 cell module auto-height" v-for="post in taxPosts">
											<a @click="getSinglePost(post.id)"><img :src="post._embedded['wp:featuredmedia'][0].source_url" :alt="post.title.rendered"></a>
											<div class="meta">
												<a @click="getSinglePost(post.id)"><h4 class="blue">{{ post.title.rendered }}</h4></a>
												<div class="content" v-html="$options.filters.limitWords(post.content.rendered,25)"></div>
												<a @click="getSinglePost(post.id)" class="read-more">View Product Details &nbsp;<i class="far fa-long-arrow-right"></i></a>
											</div>
										</div>
									</div>
								</div>
								<div class="medium-9 cell" id="single-post" v-if="singlePostActive">
									<div class="grid-x grid-margin-x grid-margin-y">
										<div class="medium-12 cell breadcrumbs">
											<h5 class="breadcrumb-title">{{ taxParentSlug }} > {{ activeItem }} > {{ singlePost.title.rendered }}</h5>
										</div>
										<div class="medium-12 cell">
											<img :src="singlePost._embedded['wp:featuredmedia'][0].source_url" :alt="singlePost.title.rendered">
										</div>
										<div class="medium-12 cell">
											<div class="grid-x grid-margin-x grid-margin-y">
												<div class="medium-5 medium-offset-1 cell">
													<h4 class="blue">{{ singlePost.title.rendered }}</h4>
													<p class="content" v-html="singlePost.content.rendered">{{ singlePost.content.rendered }}</p>
													<div class="grid-x grid-margin-y subhead" v-if="pdfLink">
														<div class="medium-2 cell text-center">
															<i class="fal fa-file-pdf"></i>
														</div>
														<div class="medium-10 cell">
															<a :href="pdfLink" target="_blank">Product Specs Doc</a>
															<p>Specification Sheet Description</p>
														</div>
													</div>
													<a class="btn-lt-blue border" @click="singlePostActive = false"><i class="fas fa-arrow-alt-left"></i> Back to {{ activeItem }}</a>
												</div>
												<div class="medium-4 medium-offset-1 cell">
													<h6>Product Benefits</h6>
													<ul class="product-benefits">
														<li v-for="benefit in benefits"><i class="fas fa-check"></i> &nbsp;{{ benefit.benefit1 }}</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>`,
	mounted (){
		this.getPostType(location.href);
		this.getTaxParent(location.href)
		this.getTaxParentId();
	},
	methods:{
		getPostType: function(currentURL){
			if (currentURL.includes('residential')) {
				this.postType = 'residential';
			}else if(currentURL.includes('commercial')){
				this.postType = 'commercial';
			}else if (currentURL.includes('auto')) {
				this.postType = 'auto';
			}
		},
		getTaxParent: function(currentURL){
			if (currentURL.includes('solar')) {
				this.taxParentSlug = 'solar';
			}else if(currentURL.includes('decorative')){
				this.taxParentSlug = 'decorative';
			}else if (currentURL.includes('safety-security')) {
				this.taxParentSlug = 'safety-security';
			}
		},
		getTaxParentId: function(){
			let $this = this;

			axios
			  .get(apiRoot + $this.postType + '-categories')
			  .then(function (response) {
			    response.data.forEach(function(item){
			    	if (item.slug == $this.taxParentSlug) {
			    		$this.taxParentId = item.id;
			    		$this.getTaxonomies();
			    	}
			    });
			  }
			)
		},
		getSinglePost: function(postID){
			let $this = this;

		  axios.all([
		      axios.get(apiRoot + $this.postType + '/' + postID + '?_embed'),
		      axios.get(acfApiRoot + $this.postType + '/' + postID)
		    ])
		    .then(axios.spread((postRes, acfRes) => {
		      $this.singlePost       = postRes.data;
		      $this.benefits         = acfRes.data.acf.film_benefits;
		      $this.pdfLink         = acfRes.data.acf.pdf_link;
		      $this.singlePostActive = true;
		      console.log($this.benefits);
		    }));
		},
		getTaxonomies: function(){
			let $this = this;

			axios
			  .get(apiRoot + $this.postType + '-categories?parent=' + $this.taxParentId)
			  .then(function (response) {
			    $this.taxonomies = response.data;
			    $this.activeItem = $this.taxonomies[0].name;
			    $this.getTaxPosts();
			  }
			)
		},
		getTaxPosts: function(){
			let $this = this;
			let taxonomyName = $this.activeItem.toLowerCase().split(' ').join('-');
			
			axios
			  .get(apiRoot + $this.postType + '?_embed&filter['+ $this.postType +'_taxonomies]=' + taxonomyName)
			  .then(function (response) {
			    $this.taxPosts = response.data;
			    $this.singlePostActive = false;
			  }
			)
		}
	},
	computed:{

	}
});

var newVue = new Vue({
  el: '#app',
  data() {
  	return{
      
  	}
  },
  created(){
  	$(document).foundation();
  },
  methods: {

  },
});
