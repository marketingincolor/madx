
export default{
	data() {
		return{
	    videoTitle: '',
	    videoUrl: ''
		}
	},
	name: 'maduVideoModal',
	template:`			<div class="small reveal" id="video-modal" v-reveal>
							<div class="grid-container">
								<div class="grid-x">
									<div id="modal-content" class="small-10 small-offset-1 cell">
										<div class="flex-video">
										    <iframe allowfullscreen frameborder="0" height="315" :src="videoUrl" width="420"></iframe>
										</div>
										<h2>{{ videoTitle }}</h2>
										<p>Video Runtime / Description</p>
										<button class="close-button" data-close aria-label="Close modal" type="button">
										<span aria-hidden="true">&times;</span>
										</button>
									</div>
								</div>
							</div>
						</div>`,
	created(){
		$(document).on('open.zf.reveal', '#video-modal[data-reveal]', function(event) {
		  
		});
	},
	mounted(){
		let $this = this;
		$(document).find('a').on('click',function(){
			$this.videoTitle  = $(this).parent().data('videotitle');
			$this.videoUrl = $(this).parent().next('.meta').find('.videolink').data('videourl')+'?rel=0';
			//$this.videoUrl = $(this).parent().find('.videolink').data('videourl');
		});
	},
	methods:{

	}
};