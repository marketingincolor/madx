
export default{
	data() {
		return{
	    videoTitle: '',
	    videoUrl: '',
	    videoInfo: '',
	    videoFile: '',
	    videoText: '',
	    videoTitleJoined: ''
		}
	},
	name: 'maduVideoModal',
	template:`<div class="reveal" id="video-modal" v-reveal>
							<div class="grid-container">
								<div class="grid-x">
									<div id="modal-content" class="small-10 small-offset-1 cell">
										<div class="flex-video">
										    <iframe allowfullscreen frameborder="0" height="315" :src="videoUrl" width="420"></iframe>
										</div>
										<h3 class="blue" v-html="videoTitle"></h3>
										<p v-html="videoText"></p>
										<p class="file-link" v-if="videoFile"><a :href="videoFile" target="_blank" style="vm-dl-btn" :class="'madicou-' + videoTitleJoined + '-download'">Download</a></p>
										<button class="close-button" data-close aria-label="Close modal" type="button">
										<span aria-hidden="true">&times;</span>
										</button>
									</div>
								</div>
							</div>
						</div>`,
	created(){
		let $this = this;
		$(document).on('closed.zf.reveal', '#video-modal', function(event) {
		  $this.videoUrl = '';
		});
	},
	mounted(){
		let $this = this;
		$(document).find('.videolink').on('click',function(){
			$this.videoTitle = $(this).data('videotitle');
			$this.videoUrl   = $(this).data('videourl')+'?rel=0';
			$this.videoInfo  = $(this).data('videometa');
			$this.videoFile  = $(this).data('attach');
			$this.videoText  = $(this).data('videotxt');
			var titleCharsRemoved = $this.videoTitle.replace(/[`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi, '');
			let titleSplit = titleCharsRemoved.split(' ');
			$this.videoTitleJoined = titleSplit.join('-');
		});

	},
	methods:{

	}
};