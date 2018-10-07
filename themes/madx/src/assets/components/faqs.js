import { apiRoot, acfApiRoot } from './config.js';
export default {
	name: 'safetyPosts',
	data() {
		return{
			searchText: '',
	    faqPosts: [],
	    taxonomyName: 'All',
	    postType: 'faq',
	    activeIndex: 0
		}
	},
	template: `<div class="small-10 small-offset-1 cell">
							<form class="subhead" id="faq-search">
								<div class="input-group relative">
								  <span class="input-group-label">
										<select v-model="taxonomyName">
									    <option value="all">All</option>
									    <option value="auto">Auto</option>
									    <option value="commercial">Commercial</option>
									    <option value="residential">Residential</option>
									  </select>
								  </span>
								  <input class="input-group-field" :keyup="getSearchResults" type="text" v-model="searchText" placeholder="Start your search">
								  <button type="submit" class="absolute">
								     <i class="fas fa-search"></i>
								  </button>
								</div>
							</form>
							<article id="faq-results">
								<ul class="accordion" data-accordion>
								  <li @click="setActive(post,index)" class="accordion-item" :class="{ 'is-active': activeIndex === index }" data-accordion-item  v-for="(post,index) in faqPosts" :key="post.id">
								    <div class="yellow-triangle"></div><a href="#!" class="accordion-title" v-html="'Q: ' + post.title.rendered"></a>
								    <transition
											name="custom-classes-transition"
									    enter-active-class="animated fadeIn"
									    leave-active-class="animated fadeOut"
								    >
											<div v-if="activeIndex === index"  class="accordion-content" data-tab-content v-html="'A. ' + post.content.rendered"></div>
								    </transition>
								  </li>
								</ul>
							</article>
					  </div>`,
		created (){
			this.getAllFAQs();
		},
		methods:{
			getAllFAQs: function(){
				let $this = this;

				axios
				  .get(apiRoot + $this.postType)
				  .then(function (response) {
				    console.log(response.data)
				    $this.faqPosts = response.data;
				  }
				)
			},
			setActive: function(post,index){
				this.activeIndex = index;
			},
			getSearchResults: function(){
				let $this = this;

				if (this.taxonomyName == 'all'){

					axios
					  .get(apiRoot + $this.postType)
					  .then(function (response) {
					    console.log(response.data)
					  }
					)

				}else{

					axios
					  .get(apiRoot + $this.postType + '?_embed&filter['+ $this.postType +'_taxonomies]=' + taxonomyName)
					  .then(function (response) {
					    for (var i = 0; i < response.data.length; i++) {
					    	if (response.data[i].link.includes($this.taxParentSlug)) {
					    		$this.safetyPosts.push(response.data[i]);
					    	}
					    }
					    $this.activeItem = $this.safetyPosts[0].title.rendered;
					    let slug = $this.safetyPosts[0].slug;
					    $this.getSafetyPostSingle(slug);
					  }
					)
				}
			},
			getSafetyPostSingle: function(postSlug){
				let $this    = this;

				axios
				  .get(apiRoot + $this.postType + '?_embed&slug=' + postSlug)
				  .then(function (response) {
				    $this.safetySinglePost = response.data;
				    $this.activeItem = $this.safetySinglePost[0].title.rendered;
				  }
				)
			}
		}
};