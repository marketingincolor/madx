import $ from 'jquery';
import whatInput from 'what-input';

window.$ = $;

import Foundation from 'foundation-sites';
// If you want to pick and choose which modules to include, comment out the above and uncomment
// the line below
//import './lib/foundation-explicit-pieces';

$(document).foundation();

const apiRoot = location.origin + '/wp-json/wp/v2/';

// const TaxPostList = Vue.component('tax-post-list',{
// 	props: ['postType','taxonomy'],
// 	template: ``,
// 	created(){

// 	},
// 	methods:{
		
// 	}
// });

// GLOBAL FILTERS
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

const findDealerForm = Vue.component('find-dealer-form',{
	data(){
		return{
			googleKey: '',
			zipCode: 0,
			zipCodesInRadius: []
		}
	},
	template:
	 `<div>
			<form class="zip-search" id="zip-form" v-on:submit.prevent="zipCodeLookup">
				<input v-bind:model="zipCode" type="text" name="zip" id="zip" placeholder="Zip Code" required>
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
			  .get(apiRoot + $this.postType + '-categories')
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
	    activeItem: ''
		}
	},
	template:`<div class="grid-x grid-margin-x">
							<div class="medium-3 cell">
								<ul id="tax-menu" class="tax-menu vertical menu">
							    <li v-for="taxonomy in taxonomies" v-bind:class="{active: (activeItem == taxonomy.name)}"><a href="#!" @click="activeItem = taxonomy.name;getTaxPosts()">{{ taxonomy.name }}</a></li>
						    </ul>
							</div>
							<div class="medium-9 cell">
								<div class="grid-x grid-margin-x grid-margin-y">
									<div class="medium-12 cell breadcrumbs">
										<h5 class="breadcrumb-title">{{ taxParentSlug }} > {{ activeItem }}</h5>
										<h3>{{ activeItem }}</h3>
									</div>
									<div class="medium-4 cell module auto-height" v-for="post in taxPosts">
										<a :href="post.link"><img :src="post._embedded['wp:featuredmedia'][0].source_url" :alt="post.title.rendered"></a>
										<div class="meta">
											<a :href="post.link"><h4 class="blue">{{ post.title.rendered }}</h4></a>
											<div class="content" v-html="$options.filters.limitWords(post.content.rendered,25)"></div>
											<a :href="post.link" class="read-more">View Product Details &nbsp;<i class="far fa-long-arrow-right"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>`,
	created (){
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
			
			axios
			  .get(apiRoot + $this.postType + '?_embed&filter['+ $this.postType +'_taxonomies]=' + $this.activeItem.toLowerCase().split(' ').join('-'))
			  .then(function (response) {
			    $this.taxPosts = response.data;
			    console.log(response.data)
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
  	
  },
  methods: {

  },
});
