import { apiRoot, acfApiRoot } from './config.js';
export default{
	name: 'safetyProducts',
	data() {
		return{
	    taxonomies: [],
	    taxPosts: [],
	    taxonomy: '',
	    postType: 'safety',
	    taxParentSlug: '',
	    taxChildSlug: '',
	    taxParentId: 0,
	    activeItem: '',
	    singlePost: [],
	    singlePostActive: false,
	    benefits: [],
	    pdfLink: '',
	    specSheet: '',
	    loading: false,
	    showAllCat: false
		}
	},
	template:`<div class="small-12 cell" id="posts-container">
	            <div class="grid-x grid-margin-x">
								<div class="small-12 cell" id="all-posts" v-if="!singlePostActive">
									<div class="grid-x grid-margin-x grid-margin-y">
									  <div class="small-12 cell text-center" v-if="loading">
									    <img src="/wp-content/themes/madx/dist/assets/images/loader.gif" alt="Loading Products" />
									  </div>
										<div class="medium-6 large-4 cell module auto-height animated fadeIn" v-for="post in taxPosts">
											<a @click="scrollToProducts(true);getSinglePost(post.id)"><div class="module-bg" :class="post.slug + '-product-image'" v-bind:style="{backgroundImage: 'url(' + post._embedded['wp:featuredmedia'][0].source_url + ')'}"></a>
											<div class="meta">
												<a @click="scrollToProducts(true);getSinglePost(post.id)"><h4 class="blue" :class="post.slug + '-product-heading'" v-html="post.title.rendered"></h4></a>
												<div class="content" v-html="$options.filters.limitWords(post.content.rendered,25)"></div>
												<a @click="scrollToProducts(true);getSinglePost(post.id)" class="read-more" :class="post.slug + '-product-read-more'">View Product Details &nbsp;<i class="far fa-long-arrow-right"></i></a>
											</div>
										</div>
									</div>
								</div>
								<div class="small-12 large-8 large-offset-2 cell" id="single-post" v-if="singlePostActive">
									<div class="grid-x grid-margin-x grid-margin-y">
										<div class="medium-12 cell module auto-height animated fadeIn">
											<img :src="singlePost._embedded['wp:featuredmedia'][0].source_url" :alt="singlePost._embedded['wp:featuredmedia'][0].alt_text">
											<div class="meta">
												<div class="medium-12 cell">
													<div class="grid-x grid-margin-x grid-margin-y">
														<div class="medium-10 medium-offset-1 cell">
															<h4 class="blue" v-html="singlePost.title.rendered"></h4>
															<p class="content" v-html="singlePost.content.rendered"></p>
															<div class="grid-x grid-margin-y" v-if="pdfLink">
																<div class="large-1 small-2 cell text-center">
																	<i class="fal fa-file-pdf"></i>
																</div>
																<div class="small-10 cell">
																	<a :href="pdfLink" target="_blank">Product Brochure</a>
																	<p>Click to download</p>
																</div>
															</div>
															<div class="grid-x grid-margin-y" v-if="specSheet">
																<div class="large-1 small-2 cell text-center">
																	<i class="fal fa-file-pdf"></i>
																</div>
																<div class="small-10 cell">
																	<a :href="specSheet" target="_blank">Solar Performance Specifications</a>
																	<p>Click to download</p>
																</div>
															</div>
														</div>
														<div class="medium-10 medium-offset-1 cell">
															<a class="btn-lt-blue border" @click="scrollToProducts(false)"><i class="fas fa-arrow-alt-left"></i>&nbsp; Back</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>`,
	mounted (){
		this.getTaxParentSlug(location.href);
		this.loading = true;
	},
	methods:{
		getTaxParentSlug: function(currentURL){
			if (currentURL.indexOf('anti-intrusion') > -1) {
				this.taxParentSlug = 'anti-intrusion';
			}else if (currentURL.indexOf('natural-disaster') > -1) {
				this.taxParentSlug = 'natural-disaster-mitigation';
			}
			this.getTaxParentId();
		},
		getTaxParentId: function(){
			let $this = this;

			axios
			  .get(apiRoot + $this.postType + '-categories')
			  .then(function (response) {
			  	for (var i = 0; i < response.data.length; i++) {
			  		if (response.data[i].link.indexOf($this.taxParentSlug) > -1) {
			  			$this.taxParentId = response.data[i].parent;
			  			break;
			  		}
			  	}
			    $this.getTaxonomies();
			  }
			)
		},
		getTaxonomies: function(){
			let $this = this;

			axios
			  .get(apiRoot + $this.postType + '-categories?parent=' + $this.taxParentId + '&hide_empty=true')
			  .then(function (response) {
			    $this.taxonomies = response.data;
			    $this.showAllCat = true;
			    $this.getAllPosts();
			  }
			)
		},
		getAllPosts: function(){
			let $this = this;

			axios
			  .get(apiRoot + $this.postType + '?_embed&per_page=99&filter['+ $this.postType +'_taxonomies]=' + $this.taxParentSlug)
			  .then(function (response) {
			  	$this.loading          = false;
			    $this.taxPosts         = response.data;
			    $this.activeItem       = "All";
			    $this.singlePostActive = false;
			  }
			)
		},
		getNewTaxPosts: function(event){
			let $this = this;
			let taxonomyName = event.target.innerHTML.toLowerCase().split(' ').join('-');
			
			axios
			  .get(apiRoot + $this.postType + '?_embed&filter['+ $this.postType +'_taxonomies]=' + taxonomyName)
			  .then(function (response) {
			  	$this.loading          = false;
			    $this.taxPosts         = response.data;
			    $this.activeItem       = event.target.innerHTML;
			    $this.singlePostActive = false;
			  }
			)
		},
		getNewTaxPostsMobile: function(event){
			let $this = this;
			let slug  = event.target.value;
			
			if (slug === 'all') {
				this.getAllPosts();
			}else{
				axios
				  .get(apiRoot + $this.postType + '?_embed&filter['+ $this.postType +'_taxonomies]=' + slug)
				  .then(function (response) {
				  	$this.loading = false;
				    $this.taxPosts = response.data;
				    $this.activeItem = slug.charAt(0).toUpperCase() + slug.slice(1);
				    $this.singlePostActive = false;
				  }
				)
			}
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
	      $this.pdfLink          = acfRes.data.acf.pdf_link;
	      $this.specSheet        = acfRes.data.acf.spec_sheet;
	      $this.singlePostActive = true;
	    }));
		},
		scrollToProducts: function(singlePostState){
			let $this = this;
			
	    $('html, body').animate({
        scrollTop: $('#posts-container').offset().top - 50
      }, 500, function() {
      	if (singlePostState === false) {
          $this.singlePostActive = false;
      	}else{
      		$this.singlePostActive = true;
      	}
      });
		}
	}
};