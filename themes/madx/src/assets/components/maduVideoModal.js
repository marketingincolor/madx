
export default{
	data() {
		return{
	    videoTitle: '',
	    videoUrl: '',
	    videoInfo: '',
	    videoFile: ''
		}
	},
	name: 'maduVideoModal',
	template:`<div class="small reveal" id="video-modal" v-reveal>
							<div class="grid-container">
								<div class="grid-x">
									<div id="modal-content" class="small-10 small-offset-1 cell">
										<div class="flex-video">
										    <iframe allowfullscreen frameborder="0" height="315" :src="videoUrl" width="420"></iframe>
										</div>
										<h2 v-html="videoTitle"></h2>
										<p v-html="videoInfo"></p>
										<p class="file-link" v-if="videoFile"><a :href="videoFile" target="_blank" style="vm-dl-btn">Download</a></p>
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
		$(document).find('.videolink').on('click',function(){
			$this.videoTitle  = $(this).data('videotitle');
			$this.videoUrl = $(this).data('videourl')+'?rel=0';
			$this.videoInfo = $(this).data('videometa');
			$this.videoFile = $(this).data('attach');
		});

	},
	methods:{

	}
};