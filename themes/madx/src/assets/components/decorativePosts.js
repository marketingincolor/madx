import { apiRoot, acfApiRoot } from './config.js';
export default{
	data() {
		return{
	    activeItem: '',
	    decorativePosts: [],
	    decorativePostID: 0,
	    decorativeSinglePost: [],
	    taxParentSlug: 'decorative',
	    postType: '',
	    loading: false,
		}
	},
	name: 'decorativePosts',
	template:`<div id="posts-container" class="grid-x grid-margin-x">
							<div class="small-12 cell text-center" v-if="loading">
							  <img src="/wp-content/themes/madx/dist/assets/images/loader.gif" alt="Loading Products" />
							</div>
							<div class="small-10 small-offset-1 large-12 large-offset-0 cell animated fadeIn" v-if="decorativeSinglePost.length == 0">
						    <div class="grid-x grid-margin-x grid-margin-y">
									<div class="medium-6 large-4 cell module auto-height" v-for="post in decorativePosts">
										<a @click="scrollToProducts(true);getDecorativePostSingle(post.slug)"><div class="module-bg" v-bind:style="{backgroundImage: 'url(' + post._embedded['wp:featuredmedia'][0].source_url + ')'}"></div></a>
										<div class="meta">
											<a @click="scrollToProducts(true);getDecorativePostSingle(post.slug)"><h4 class="blue" v-html="post.title.rendered"></h4></a>
											<div class="content" v-html="$options.filters.limitWords(post.content.rendered,25)"></div>
											<a @click="scrollToProducts(true);getDecorativePostSingle(post.slug)" class="read-more">View Product Details &nbsp;<i class="far fa-long-arrow-right"></i></a>
										</div>
									</div>
						    </div>
							</div>
							<div class="small-10 small-offset-1 large-8 large-offset-2 cell" v-if="decorativeSinglePost.length > 0">
						    <div class="grid-x grid-margin-x grid-margin-y animated fadeIn">
						    	<div class="medium-12 cell breadcrumbs">
						    		<h5 class="breadcrumb-title"><a @click="scrollToProducts(false);getDecorativePosts">{{ taxParentSlug | changeSlug }}</a> <i class="fas fa-chevron-right"></i> <span v-html="activeItem"></span></h5>
						    	</div>
						    	<div class="medium-12 cell module auto-height">
						    		<img :src="decorativeSinglePost[0]._embedded['wp:featuredmedia'][0].source_url" :alt="decorativeSinglePost[0]._embedded['wp:featuredmedia'][0].alt_text">
						    		<div class="meta">
						    			<div class="medium-12 cell">
						    				<div class="grid-x grid-margin-x grid-margin-y">
						    					<div class="medium-10 medium-offset-1 cell">
						    						<h4 class="blue" v-html="decorativeSinglePost[0].title.rendered"></h4>
						    						<p class="content" v-html="decorativeSinglePost[0].content.rendered"></p>
						    						<div class="grid-x grid-margin-y" v-if="decorativeSinglePost[0].acf.pdf_link" style="margin-bottom:20px">
						    							<div class="large-1 medium-2 cell text-center">
						    								<i class="fal fa-file-pdf blue" style="font-size: 2.875rem"></i>
						    							</div>
						    							<div class="medium-10 cell">
						    								<a :href="decorativeSinglePost[0].acf.pdf_link" target="_blank">Product Brochure</a>
						    								<p>Click to download brochure</p>
						    							</div>
						    						</div>
						    						<a class="btn-lt-blue border" @click="scrollToProducts(false);getDecorativePosts"><i class="fas fa-arrow-alt-left"></i> &nbsp;Back</a>
						    					</div>
						    				</div>
						    			</div>
						    		</div>
						    	</div>
						    </div>
						  </div>
						</div>`,
	created(){
		this.loading = true;
		this.getPostType(location.href);
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
			this.getDecorativePosts();
		},
		getDecorativePosts: function(){
			let $this = this;

			axios
			  .get(apiRoot + $this.postType + '?_embed&per_page=99')
			  .then(function (response) {
			    for (var i = 0; i < response.data.length; i++) {
			    	if (response.data[i].link.includes($this.taxParentSlug)) {
			    		$this.decorativePosts.push(response.data[i]);
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

			    $this.loading = false;
			    $this.decorativePosts.sort(compare)
			    $this.activeItem = $this.decorativePosts[0].title.rendered;
			  }
			)
		},
		getDecorativePostSingle: function(postSlug){
			let $this = this;

			axios
			  .get(apiRoot + $this.postType + '?_embed&slug=' + postSlug)
			  .then(function (response) {
			    $this.decorativeSinglePost = response.data;
			    $this.activeItem = $this.decorativeSinglePost[0].title.rendered;
			  }
			)
		},
		scrollToProducts: function(singlePostState){
			let $this = this;
			
	    $('html, body').animate({
        scrollTop: $('#posts-container').offset().top - 50
      }, 500, function() {
      	if (singlePostState === false) {
          $this.autoSinglePost = [];
      	}
      });
		}
	}
};