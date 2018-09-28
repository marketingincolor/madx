import { apiRoot, acfApiRoot } from './config.js';
export default{
	name: 'filmSelector',
	data(){
		return{
			energySavings: 50,
			glareReduction: 50,
			safetySecurity: 50,
			heatReduction: 50,
			postType: '',
			results: [],
			maskColor: '',
			carSize: '',
			autoSwatches: {
				0:  { color: 'rgba(0,0,0,.05)',percent: '5%' },
				1:  { color: 'rgba(0,0,0,.1)' ,percent: '10%' },
				2:  { color: 'rgba(0,0,0,.15)',percent: '15%' },
				3:  { color: 'rgba(0,0,0,.2)' ,percent: '20%' },
				4:  { color: 'rgba(0,0,0,.25)',percent: '25%' },
				5:  { color: 'rgba(0,0,0,.3)' ,percent: '30%' },
				6:  { color: 'rgba(0,0,0,.35)',percent: '35%' },
				7:  { color: 'rgba(0,0,0,.4)' ,percent: '40%' },
				8:  { color: 'rgba(0,0,0,.45)',percent: '45%' },
				9:  { color: 'rgba(0,0,0,.5)' ,percent: '50%' },
				10: { color: 'rgba(0,0,0,.55)',percent: '55%' },
				11: { color: 'rgba(0,0,0,.6)' ,percent: '60%' },
				12: { color: 'rgba(0,0,0,.65)',percent: '65%' },
				13: { color: 'rgba(0,0,0,.7)' ,percent: '70%' },
				14: { color: 'rgba(0,0,0,.75)',percent: '75%' },
				15: { color: 'rgba(0,0,0,.8)' ,percent: '80%' },
				16: { color: 'rgba(0,0,0,.85)',percent: '85%' },
				17: { color: 'rgba(0,0,0,.9)' ,percent: '90%' }
			},
		}
	},
	template:
	 `<v-app id="inspire">
	  <div class="grid-x grid-margin-x grid-margin-y">
			<div class="small-12 cell">
				<div class="grid-x">
					<div class="small-1 cell icon-container">
						<i class="fas fa-info-circle"></i>
					</div>
					<div class="small-11 cell">
						<p>Film Warning</p>
					</div>
				</div>
			</div>
			<div class="small-12 cell"><hr></div>
			<div class="medium-5 cell">
				<div class="grid-x grid-margin-x">
					<div class="small-3 medium-2 cell text-center">
						<div class="number"><span>1</span></div>
					</div>
					<div class="small-9 medium-8 cell">
						<h5 class="blue">Heat Reduction</h5>
						<p>Comfortable interior, infared rejection.</p>
					</div>
				</div>
			</div>
			<div class="medium-7 cell flex-column">
				<v-flex xs12>
	        <v-slider
	          v-model="heatReduction"
	        ></v-slider>
					<ul class="range-labels">
					  <li>Low Importance</li>
					  <li class="text-center">Medium</li>
					  <li class="text-right">High Importance</li>
					</ul>
	      </v-flex>
			</div>
			<div class="medium-5 cell">
				<div class="grid-x grid-margin-x">
					<div class="small-3 medium-2 cell text-center">
						<div class="number"><span>2</span></div>
					</div>
					<div class="small-9 medium-8 cell">
						<h5 class="blue">Glare and Fade Reduction</h5>
						<p>Reduce unwanted glare for exterior light sources and help protect furniture from fading.</p>
					</div>
				</div>
			</div>
			<div class="medium-7 cell flex-column">
				<v-flex xs12>
	        <v-slider
	          v-model="glareReduction"
	        ></v-slider>
					<ul class="range-labels">
					  <li>Low Importance</li>
					  <li class="text-center">Medium</li>
					  <li class="text-right">High Importance</li>
					</ul>
	      </v-flex>
			</div>
			<div class="medium-5 cell">
				<div class="grid-x grid-margin-x">
					<div class="small-3 medium-2 cell text-center">
						<div class="number"><span>3</span></div>
					</div>
					<div class="small-9 medium-8 cell">
						<h5 class="blue">Privacy &amp; Security</h5>
						<p>Prevent window breakage, deter break-ins, and holds glass together.</p>
					</div>
				</div>
			</div>
			<div class="medium-7 cell flex-column">
				<v-flex xs12>
	        <v-slider
	          v-model="safetySecurity"
	        ></v-slider>
					<ul class="range-labels">
					  <li>Low Importance</li>
					  <li class="text-center">Medium</li>
					  <li class="text-right">High Importance</li>
					</ul>
	      </v-flex>				
			</div>
			<div class="medium-12 cell">
				<div class="grid-x grid-margin-x">
					<div class="small-3 medium-1 cell text-center">
						<div class="number"><span>4</span></div>
					</div>
					<div class="small-9 medium-10 cell appearance">
						<h5 class="blue">Appearance</h5>
						<p>Madico window film is offered in a variety of styles and hues, giving you the freedom to design as bold or as subtle as you’d like.</p>
					</div>
				</div>
			</div>
			<div class="medium-12 cell">
				<div class="grid-x grid-margin-x grid-margin-y">
					<div class="small-3 medium-1 cell text-center"></div>
					<div class="small-9 medium-11 cell appearance">
						<div class="film-image">
							<img id="car-original" src="../images/film-selector-car.png">
							<div id="mask" :style="{backgroundColor: maskColor,height: this.carSize}"></div>
							<img id="car-transparent" src="../images/film-selector-car-transparent.png">
						</div>
						<ul class="film-colors">
							<li v-for="(swatch,index) in autoSwatches">
							{{autoSwatches.length}}
								<div class="color-swatch" @click="changeSwatch" :style="{ backgroundColor: swatch.color }"></div>
								<div class="img-wrap" v-bind:class="{ 'active-film':index == 0 }"></div>
							  <p v-bind:class="[index == 0 || index == Object.keys(autoSwatches).length - 1 ? 'outer-percent' : 'middle-percent']">{{ swatch.percent }}</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="medium-12 cell">
				<div class="grid-x grid-margin-x">
					<div class="small-3 medium-1 cell text-center">
						<div class="number"><span>5</span></div>
					</div>
					<div class="small-9 medium-11 cell appearance">
						<h5 class="blue">Find Recommendations for Your Home</h5>
						<hr>
						<div class="grid-x grid-margin-x">
							<div class="medium-7 cell">
								<p>The follwing recommendations are meant to show a variety of solutions that may meet your needs. Please consult an authorized Madio film dealer to discuss your individual window film needs and to determine the most appropriate window film for your residence.</p>
							</div>
							<div class="medium-5 cell btn-container">
								<a href="#!" class="btn-yellow solid">View My Results</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<hr>
		<div class="medium-12 cell top-results">
			<div class="left">
				<span class="energy">
					<span><strong>Energy:</strong> {{ energySavings | importance }}</span>
				</span>
				<span class="glare">
					<span><strong>Glare:</strong> {{ glareReduction | importance }}</span>
				</span>
				<span class="safety">
					<span><strong>Safety:</strong> {{ safetySecurity | importance }}</span>
				</span>
			</div>
			<div class="right text-right">
				<span><i class="fal fa-print"></i>&nbsp;&nbsp;Print List</span>
				<span><i class="fal fa-envelope"></i>&nbsp;&nbsp;Email List</span>
			</div>
		</div>
		<hr>
		</v-app>`,
	created(){
		this.getPostType(location.href);
	},
	mounted(){
		this.carSize = $('#car-original').height() + 'px';
		window.addEventListener('resize', () => {
			this.carSize = $('#car-original').height() + 'px';
			console.log(this.carSize)
		});
	},
	methods:{
		getPostType: function(currentURL){
		  if (currentURL.includes('residential')) {
		  	this.postType = 'residential';
		  }else if (currentURL.includes('auto')) {
		  	this.postType = 'auto';
		  }
		},
		changeSwatch: function(event){
			$('.img-wrap').removeClass('active-film');
			$('.middle-percent').css({'display':'none'});
			let $imgWrap = $(event.target).next('div');
			let bgColor  = event.target.style.backgroundColor
			let $watches = $('.color-swatch');

			$imgWrap.addClass('active-film');
			$imgWrap.next('p').css({'display':'block'});
			this.maskColor = bgColor;
		},
	},
	watch:{
		
	}
};