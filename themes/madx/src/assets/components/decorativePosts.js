import { apiRoot, acfApiRoot } from './config.js';
export default{
	data() {
		return{
	    activeItem: '',
	    decorativePosts: [],
	    decorativePostID: 0,
	    decorativeSinglePost: [],
	    taxParentSlug: 'decorative',
	    postType: 'residential',
		}
	},
	name: 'decorativePosts',
	template:`<div class="grid-container" id="posts-container">
	            <div class="grid-x grid-margin-x">
								<div class="medium-3 cell">
									<ul id="tax-menu" class="tax-menu vertical menu">
								    <li v-for="post in decorativePosts" v-bind:class="{active: (activeItem == post.title.rendered)}"><a href="#!" @click="getDecorativePostSingle(post.slug)" v-html="post.title.rendered"></a></li>
							    </ul>
								</div>
								<div class="medium-9 cell animated fadeIn" id="single-post" v-if="decorativeSinglePost.length > 0">
									<div class="grid-x grid-margin-x grid-margin-y">
										<div class="medium-12 cell breadcrumbs">
											<h5 class="breadcrumb-title">{{ taxParentSlug | changeSlug }} > <span v-html="activeItem"></span></h5>
										</div>
										<div class="medium-12 cell module auto-height">
											<img :src="decorativeSinglePost[0]._embedded['wp:featuredmedia'][0].source_url" :alt="decorativeSinglePost[0].title.rendered">
											<div class="meta">
												<div class="medium-12 cell">
													<h4 class="blue" v-html="decorativeSinglePost[0].title.rendered"></h4>
													<p class="content" v-html="decorativeSinglePost[0].content.rendered"></p>
													<div class="grid-x grid-margin-y subhead" v-if="decorativeSinglePost[0].acf.pdf_link">
														<div class="medium-2 cell text-center">
															<i class="fal fa-file-pdf"></i>
														</div>
														<div class="medium-10 cell">
															<a :href="decorativeSinglePost[0].acf.pdf_link" target="_blank">Product Specs Doc</a>
															<p>Specification Sheet Description</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>`,
	created(){
		this.getDecorativePosts();
	},
	methods:{
		getDecorativePosts: function(){
			let $this = this;

			axios
			  .get(apiRoot + $this.postType)
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

			    $this.decorativePosts.sort(compare)
			    $this.activeItem = $this.decorativePosts[0].title.rendered;
			    $this.getDecorativePostSingle($this.decorativePosts[0].slug);
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
		}
	}
};