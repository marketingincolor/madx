import { apiRoot, acfApiRoot } from './config.js';
export default{
	name: 'taxTermPosts',
	data() {
		return{
	    taxonomies: [],
	    taxPosts: [],
	    taxonomy: '',
	    postType: '',
	    taxParentSlug: '',
	    taxChildSlug: '',
	    taxParentId: 0,
	    activeItem: 'All',
	    singlePost: [],
	    singlePostActive: false,
	    benefits: [],
	    pdfLink: '',
	    loading: false,
	    showAllCat: false
		}
	},
	template:`<div id="posts-container">
	            <div class="grid-x grid-margin-x">
								<div class="small-10 small-offset-1 large-12 large-offset-0 cell">
									<ul id="tax-menu" class="tax-cats show-for-large" role="tablist" aria-label="categories">
									  <li v-bind:class="{active: (activeItem == 'All')}" :aria-selected="activeItem == 'All' ? 'true' : 'false'" v-if="showAllCat" aria-controls="All" :tabindex="activeItem == 'All' ? 0 : -1">
									    <a href="#!" @click="getAllPosts">All</a>
									  </li>
								    <li v-for="taxonomy in taxonomies" v-bind:class="{active: (activeItem == taxonomy.name)}" :aria-controls="taxonomy.name" :aria-selected="activeItem == taxonomy.name ? 'true' : 'false'" :tabindex="activeItem == taxonomy.name ? 0 : -1">
								      <a href="#!" @click="getNewTaxPosts" v-html="taxonomy.name"></a>
								    </li>
							    </ul>
							    <div class="hide-for-large text-center">
										<select id="product-list" @change="getNewTaxPostsMobile">
											<option value="all">All</option>
											<option v-for="taxonomy in taxonomies" :value="taxonomy.slug" v-bind:class="{active: (activeItem == taxonomy.name)}">{{ taxonomy.name }}</option>
										</select>
							    </div>
								</div>
								<div id="breadcrumbs" class="small-10 small-offset-1 large-12 large-offset-0 cell breadcrumbs" v-if="!singlePostActive && showAllCat">
									<h5 class="breadcrumb-title">{{ taxParentSlug | changeSlug }} <i class="fas fa-chevron-right"></i> <span v-html="activeItem"></span></h5>
								</div>
								<div class="small-10 small-offset-1 large-12 large-offset-0 cell" id="all-posts" v-if="!singlePostActive">
									<div class="grid-x grid-margin-x grid-margin-y">
									  <div class="small-12 cell text-center" v-if="loading">
									    <img src="/wp-content/themes/madx/dist/assets/images/loader.gif" alt="Loading Products" />
									  </div>
										<div class="medium-6 large-4 cell module auto-height animated fadeIn" v-for="post in taxPosts">
											<a @click="scrollToProducts(true);getSinglePost(post.id)"><div class="module-bg" v-bind:style="{backgroundImage: 'url(' + post._embedded['wp:featuredmedia'][0].source_url + ')'}"></a>
											<div class="meta">
												<a @click="scrollToProducts(true);getSinglePost(post.id)"><h4 class="blue" v-html="post.title.rendered"></h4></a>
												<div class="content" v-html="$options.filters.limitWords(post.content.rendered,25)"></div>
												<a @click="scrollToProducts(true);getSinglePost(post.id)" class="read-more">View Product Details &nbsp;<i class="far fa-long-arrow-right"></i></a>
											</div>
										</div>
									</div>
								</div>
								<div class="small-10 small-offset-1 large-8 large-offset-2 cell" id="single-post" v-if="singlePostActive">
									<div class="grid-x grid-margin-x grid-margin-y">
										<div class="medium-12 cell breadcrumbs">
											<h5 class="breadcrumb-title">{{ taxParentSlug | changeSlug }} <i class="fas fa-chevron-right"></i> <span v-html="activeItem"></span> <i class="fas fa-chevron-right"></i> <span v-html="singlePost.title.rendered"></span></h5>
										</div>
										<div class="medium-12 cell module auto-height animated fadeIn">
											<img :src="singlePost._embedded['wp:featuredmedia'][0].source_url" :alt="singlePost._embedded['wp:featuredmedia'][0].alt_text">
											<div class="meta">
												<div class="medium-12 cell">
													<div class="grid-x grid-margin-x grid-margin-y">
														<div class="medium-10 medium-offset-1 cell">
															<h4 class="blue" v-html="singlePost.title.rendered"></h4>
															<p class="content" v-html="singlePost.content.rendered"></p>
															<div class="grid-x grid-margin-y" v-if="pdfLink">
																<div class="large-1 medium-2 cell text-center">
																	<i class="fal fa-file-pdf"></i>
																</div>
																<div class="medium-10 cell">
																	<a :href="pdfLink" target="_blank">Product Brochure</a>
																	<p>Click to download brochure</p>
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
		this.getPostType(location.href);
		this.loading = true;
	},
	methods:{
		getPostType: function(currentURL){
			if (currentURL.includes('residential')) {
				this.postType = 'residential';
			}else if(currentURL.includes('commercial')){
				this.postType = 'commercial';
			}else if (currentURL.includes('automotive')) {
				this.postType = 'automotive';
			}else if (currentURL.includes('safety-security')) {
				this.postType = 'safety';
			}else if (currentURL.includes('specialty-solutions')) {
				this.postType = 'specialty';
			}
			this.getTaxParent(location.href);
		},
		getTaxParent: function(currentURL){
			switch (this.postType) {
				case 'residential':
					if (currentURL.includes('solar')) {
						this.taxParentSlug = 'solar';
					}else if(currentURL.includes('decorative')){
						this.taxParentSlug = 'decorative';
					}else if (currentURL.includes('safety-security')) {
						this.taxParentSlug = 'safety-security';
					}
					break;

					case 'commercial':
						if (currentURL.includes('solar')) {
							this.taxParentSlug = 'solar';
						}else if(currentURL.includes('decorative')){
							this.taxParentSlug = 'decorative';
						}else if (currentURL.includes('safety-security')) {
							this.taxParentSlug = 'safety-security';
						}
						break;

					case 'automotive':
						if (currentURL.includes('solar')) {
							this.taxParentSlug = 'solar';
						}else if(currentURL.includes('decorative')){
							this.taxParentSlug = 'decorative';
						}else if (currentURL.includes('safety-security')) {
							this.taxParentSlug = 'safety-security';
						}
						break;

					case 'safety':
						this.taxParentSlug = 'products';
						break;

					case 'specialty':
						this.taxParentSlug = 'products';
						break;
			}

			this.getTaxParentId();
		},
		getTaxParentId: function(){
			let $this = this;

			axios
			  .get(apiRoot + $this.postType + '-categories')
			  .then(function (response) {
			  	for (var i = 0; i < response.data.length; i++) {
			  		if (response.data[i].link.includes($this.taxParentSlug)) {
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
			  .get(apiRoot + $this.postType + '-categories?parent=' + $this.taxParentId)
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
			  .get(apiRoot + $this.postType + '?_embed&per_page=99&filter['+ $this.postType +'_taxonomies]=solar')
			  .then(function (response) {
			  	$this.loading = false;
			    $this.taxPosts = response.data;
			    $this.activeItem = "All";
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
			  	$this.loading = false;
			    $this.taxPosts = response.data;
			    $this.activeItem = event.target.innerHTML;
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
	      $this.singlePostActive = true;
	    }));
		},
		scrollToProducts: function(singlePostState){
			let $this = this;
			let element;

			if (window.innerWidth > 640) {
				element = "#tax-menu";
			}else{
				element = "#product-list";
			}
			
	    $('html, body').animate({
        scrollTop: $(element).offset().top - 50
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