import { apiRoot, acfApiRoot } from './config.js';
export default{
	data() {
		return{
	    activeItem: '',
	    autoPosts: [],
	    autoPostID: 0,
	    autoSinglePost: [],
	    taxParentSlug: 'window-tint',
	    postType: 'automotive',
	    loading: false
		}
	},
	name: 'autoPosts',
	template:`<div class="grid-container" id="posts-container">
	            <div class="grid-x">
	            <div class="small-12 cell text-center" v-if="loading">
	              <img src="/wp-content/themes/madx/dist/assets/images/loader.gif" alt="Loading Products" />
	            </div>
								<div class="small-10 small-offset-1 large-12 large-offset-0 cell animated fadeIn" v-if="autoSinglePost.length == 0">
							    <div class="grid-x grid-margin-x grid-margin-y">
										<div class="medium-6 large-4 cell module auto-height" v-for="post in autoPosts">
											<a @click="scrollToProducts(true);getAutoPostSingle(post.slug)"><div class="module-bg" :class="post.slug + '-product-image'" v-bind:style="{backgroundImage: 'url(' + post._embedded['wp:featuredmedia'][0].source_url + ')'}"></div></a>
											<div class="meta">
												<a @click="scrollToProducts(true);getAutoPostSingle(post.slug)"><h4 class="blue" :class="post.slug + '-product-heading'" v-html="post.title.rendered"></h4></a>
												<div class="content" v-html="$options.filters.limitWords(post.content.rendered,25)"></div>
												<a @click="scrollToProducts(true);getAutoPostSingle(post.slug)" class="read-more" :class="post.slug + '-product-read-more'">View Product Details &nbsp;<i class="far fa-long-arrow-right"></i></a>
											</div>
										</div>
							    </div>
								</div>
								<div class="small-10 small-offset-1 large-8 large-offset-2 cell" v-if="autoSinglePost.length > 0">
							    <div class="grid-x grid-margin-x grid-margin-y animated fadeIn">
							    	<div class="medium-12 cell breadcrumbs">
							    		<h5 class="breadcrumb-title"><a @click="scrollToProducts(false)">{{ taxParentSlug | changeSlug }}</a> <i class="fas fa-chevron-right"></i> <span v-html="activeItem"></span></h5>
							    	</div>
							    	<div class="medium-12 cell module auto-height">
							    		<img :src="autoSinglePost[0]._embedded['wp:featuredmedia'][0].source_url" :alt="autoSinglePost[0]._embedded['wp:featuredmedia'][0].alt_text">
							    		<div class="meta">
							    			<div class="medium-12 cell">
							    				<div class="grid-x grid-margin-x grid-margin-y">
							    					<div class="medium-10 medium-offset-1 cell">
							    						<h4 class="blue" v-html="autoSinglePost[0].title.rendered"></h4>
							    						<p class="content" v-html="autoSinglePost[0].content.rendered"></p>
							    						<div class="grid-x grid-margin-y" v-if="autoSinglePost[0].acf.pdf_link" style="margin-bottom:20px">
							    							<div class="large-1 small-2 cell text-center">
							    								<i class="fal fa-file-pdf blue" style="font-size: 2.875rem"></i>
							    							</div>
							    							<div class="small-10 cell">
							    								<a :href="autoSinglePost[0].acf.pdf_link" target="_blank">Product Brochure</a>
							    								<p>Click to download</p>
							    							</div>
							    						</div>
							    						<div class="grid-x grid-margin-y" v-if="autoSinglePost[0].acf.spec_sheet" style="margin-bottom:20px">
							    							<div class="large-1 small-2 cell text-center">
							    								<i class="fal fa-file-pdf blue" style="font-size: 2.875rem"></i>
							    							</div>
							    							<div class="small-10 cell">
							    								<a :href="autoSinglePost[0].acf.spec_sheet" target="_blank">Solar Performance Specifications</a>
							    								<p>Click to download</p>
							    							</div>
							    						</div>
							    						<a class="btn-lt-blue border" @click="scrollToProducts(false)"><i class="fas fa-arrow-alt-left"></i> &nbsp;Back</a>
							    					</div>
							    				</div>
							    			</div>
							    		</div>
							    	</div>
							    </div>
							</div>
						</div>`,
	created(){
		this.getAutoPosts();
		this.loading = true;
	},
	methods:{
		getAutoPosts: function(){
			let $this = this;

			axios
			  .get(apiRoot + $this.postType + '?_embed&per_page=99')
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

			    $this.loading = false;
			    $this.autoPosts.sort(compare)
			    $this.activeItem = $this.autoPosts[0].title.rendered;
			  }
			)
		},
		getAutoPostSingle: function(postSlug){
			let $this = this;

			axios
			  .get(apiRoot + $this.postType + '?_embed&slug=' + postSlug)
			  .then(function (response) {
			    $this.autoSinglePost = response.data;
			    $this.activeItem = $this.autoSinglePost[0].title.rendered;
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