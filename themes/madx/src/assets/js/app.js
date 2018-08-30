import $ from 'jquery';
import whatInput from 'what-input';

window.$ = $;

import Foundation from 'foundation-sites';
// If you want to pick and choose which modules to include, comment out the above and uncomment
// the line below
//import './lib/foundation-explicit-pieces';

$(document).foundation();

var apiRoot = location.origin + '/wp-json/wp/v2/';

const TaxPostList = Vue.component('tax-post-list',{
	props: ['postType','taxonomy'],
	template: ``,
	created(){

	},
	methods:{
		
	}
});

const TaxTermMenu = Vue.component('tax-term-menu',{
	props: ['postType','taxonomy'],
	data(){
		return{
			
		}
	},
	template: ``,
	created(){

	},
	methods:{
		
	}
});

// Get post type and parent name from url, ie residential - DONE
// apiRoot + postType + '-categories
// loop through and find term with name=parent_name ie solar
// and get the parent.id

// get all taxonomy terms for taxonomy parent
// apiRoot + 'residential-categories?parent=parent.id'
// loop through and list as side menu items

// Set first item as active

// Be able to toggle active class on click of menu element

// Get all the posts in that active term and display in post container

var newVue = new Vue({
  el: '#app',
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
  created (){
  	let $this = this;
  	this.getPostType(location.href);
  	this.getTaxParent(location.href)
  	this.getTaxParentId();
  	
  },
  methods: {
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
});
