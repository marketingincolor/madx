import { apiRoot, acfApiRoot } from './config.js';
export default{
	name: 'findDealerForm',
	data(){
		return{
			googleKey: '',
			zipCode: '',
			zipCodesInRadius: [],
			radius: 25
		}
	},
	template:
	 `<div>
			<form class="zip-search" id="zip-form" v-on:submit.prevent="zipCodeLookup">
				<input v-model="zipCode" type="text" name="zip" id="zip" placeholder="Zip Code" required>
				<button type="submit" id="submit-form" onclick="">
				   <i class="fas fa-map-marker-alt yellow"></i>
				</button>
			</form>
			<div class="use-location">
				<a id="use-location" @click="findLocation" class="yellow"><i class="far fa-location-arrow yellow"></i> &nbsp;Use My Location</a>
			</div>
		</div>`,
	created(){
		this.getGoogleApiKey();
	},
	methods:{
		zipCodeLookup: function(){
		  this.sendZip(this.zipCode);
		},
		findLocation: function() {
	    if (navigator.geolocation) {
	      navigator.geolocation.getCurrentPosition(this.getPosition);
	    }else{
	      alert("Geolocation is not supported by this browser. Please manually type in your zip code and press Enter");
	    }
		},
		getPosition: function(position) {
			let $this = this;
	    let apiURL = 'https://maps.googleapis.com/maps/api/geocode/json?latlng='+ position.coords.latitude +','+ position.coords.longitude +'&key=' + this.googleKey;
	    
  		axios
  		  .get(apiURL)
  		  .then(function (response) {
  	    	$this.zipCode = response.data.results[0].address_components[7].long_name;
  	    	$this.sendZip($this.zipCode);
  		  }
  		)
		},
		getGoogleApiKey: function(){
			let $this = this;

			axios
			  .get('/google-api-key.php')
			  .then(function (response) {
		    	$this.googleKey = response.data;
			  }
			)
		},
		sendZip: function(zip){
			let $this = this;

		    $.ajax({
    			url: '/wp-content/themes/madx/zip-code-search.php',
    			type: 'POST',
    			data: { zip: $this.zipCode, radius: $this.radius },
    			dataType: 'json',
    			success:function(data){
    				if (data.error_code) {
    					alert(data.error_msg + ' Please enter a valid zip code');
    				}else{
    					console.log(data.zip_codes);
    				}
    			}
    		});
		},
	}
};