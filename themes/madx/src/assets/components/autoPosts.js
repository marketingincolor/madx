import { apiRoot, acfApiRoot } from './config.js';
export default{
	name: 'autoPosts',
	template:`<div class="grid-container" id="posts-container">
	            <div class="grid-x grid-margin-x">
								<div class="medium-3 cell">
									<ul id="tax-menu" class="tax-menu vertical menu">
								    <li v-for="post in autoPosts" v-bind:class="{active: (activeItem == post.title.rendered)}"><a href="#!" @click="getAutoPostSingle(post.title.rendered)">{{ post.title.rendered }}</a></li>
							    </ul>
								</div>
								<div class="medium-9 cell" id="single-post">
									<div class="grid-x grid-margin-x grid-margin-y">
										<div class="medium-12 cell breadcrumbs">
											<h5 class="breadcrumb-title">{{ taxParentSlug | changeSlug }} > {{ activeItem }}</h5>
										</div>
										<div class="medium-12 cell module auto-height animated fadeIn">
											<img :src="autoSinglePost._embedded['wp:featuredmedia'][0].source_url" :alt="autoSinglePost.title.rendered">
											<div class="meta">
												<div class="medium-12 cell">
													<div class="grid-x grid-margin-x grid-margin-y">
														<div class="medium-5 medium-offset-1 cell">
															<h4 class="blue">{{ autoSinglePost.title.rendered }}</h4>
															<p class="content" v-html="autoSinglePost.content.rendered">{{ autoSinglePost.content.rendered }}</p>
															<div class="grid-x grid-margin-y subhead" v-if="autoSinglePost.acf.pdf_link">
																<div class="medium-2 cell text-center">
																	<i class="fal fa-file-pdf"></i>
																</div>
																<div class="medium-10 cell">
																	<a :href="autoSinglePost.acf.pdf_link" target="_blank">Product Specs Doc</a>
																	<p>Specification Sheet Description</p>
																</div>
															</div>
														</div>
														<div class="medium-4 medium-offset-1 cell">
															<h6>Product Benefits</h6>
															<ul class="product-benefits">
																<li v-for="benefit in autoSinglePost.acf.film_benefits"><i class="fas fa-check"></i> &nbsp;{{ benefit.benefit1 }}</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>`,
	data() {
		return{
	    activeItem: '',
	    autoPosts: [],
	    autoPostID: 0,
	    autoSinglePost: [],
	    taxParentSlug: 'solar',
	    postType: 'auto',
		}
	},
	created(){
		this.getTaxonomyParentSlug(location.href);
	},
	methods:{
		getTaxonomyParentSlug: function(currentURL){
			if (currentURL.includes('solar')) {
				this.taxParentSlug = 'solar';
			}else if(currentURL.includes('paint-protection')){
				this.taxParentSlug = 'paint-protection';
			}else if (currentURL.includes('windshield-protection')) {
				this.taxParentSlug = 'windshield-protection';
			}
			this.getAutoPosts();
		},
		getAutoPosts: function(){
			let $this = this;

			axios
			  .get(apiRoot + $this.postType)
			  .then(function (response) {
			    for (var i = 0; i < response.data.length; i++) {
			    	if (response.data[i].link.includes($this.taxParentSlug)) {
			    		$this.autoPosts.push(response.data[i]);
			    	}
			    }
			    // Sort the array by title alphabetically
			    function compare(a, b) {
			      const titleA = a.title.rendered.toUpperCase();
			      const titleB = b.title.rendered.toUpperCase();

			      let comparison = 0;
			      if (titleA > titleB) {
			        comparison = 1;
			      } else if (titleA < titleB) {
			        comparison = -1;
			      }
			      return comparison;
			    }

			    $this.autoPosts.sort(compare)
			    $this.activeItem = $this.autoPosts[0].title.rendered;
			    $this.getAutoPostSingle($this.activeItem);
			  }
			)
		},
		getAutoPostSingle: function(postTitle){
			let $this = this;
			let postSlug = postTitle.toLowerCase().split(" ").join("-");

			axios
			  .get(apiRoot + $this.postType + '?_embed&slug=' + postSlug)
			  .then(function (response) {
			    $this.autoSinglePost = response.data[0];
			    console.log($this.singlePost)
			    $this.activeItem = $this.autoSinglePost.title.rendered;
			  }
			)
		}
	}
};