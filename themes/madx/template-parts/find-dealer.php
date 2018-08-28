<section class="find-dealer" style="background-image: url(<?php bloginfo('template_directory'); ?>/dist/assets/images/commercial-find-dealer.png);">
	<div class="grid-container">
		<div class="grid-x">
			<div class="medium-8 large-7 cell">
				<h2 class="white">Find a Commercial Film Dealer</h2>
				<aside class="yellow-underline left"></aside>
				<p class="white">Madico Dealers represent and deliver the highest standards of service, quality, and customer satisfaction. Find the nearest dealer by entering your information below.</p>
				<form action="/" class="zip-search" id="zip-form" onsubmit="return zipCodeLookup()">
					<input type="text" name="zip" id="zip" placeholder="Zip Code" required>
					<button type="submit" id="submit-form" onclick="">
					   <i class="fas fa-map-marker-alt yellow"></i>
					</button>
				</form>
				<div class="use-location">
					<a id="use-location" onclick="findLocation()" class="yellow"><i class="far fa-location-arrow yellow"></i> &nbsp;Use My Location</a>
				</div>
			</div>
		</div>
	</div>
</section>

<script>
	let zip     = document.getElementById('zip');
	let api_key = '<?php echo $GOOGLE_API_KEY; ?>';

	// If user types in zip code
	function zipCodeLookup(){
		let form = document.getElementById('submit-form');
		let zipCode = +zip.value;

    sendZip(zipCode);
    return false;
	}
	// If user wants browser to get their current location
	function findLocation() {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(getPosition);
    }else{
      alert("Geolocation is not supported by this browser. Please manually type in your zip code and press Enter");
    }
	}
	function getPosition(position) {
	    let apiURL = 'https://maps.googleapis.com/maps/api/geocode/json?latlng='+ position.coords.latitude +','+ position.coords.longitude +'&key=' + api_key;

	    $.ajax({
	    	url: apiURL,
	    	success: function(data){
	    		let currentZip = data.results[0].address_components[7].long_name;
	    		// After turn lat/long into a zip code, call sendZip
	    		// to get all zip codes in a set radius
	    		sendZip(currentZip);
	    	},
	    	error: function(error){
	    		console.log(error);
	    	}
	    });
	}
	function sendZip(zip){
		$.ajax({
			url: '/wp-content/themes/madx/zip-code-search.php',
			type: 'POST',
			data: { zip:zip },
			dataType: 'json',
			success:function(data){
			  
				if (data.error_code) {
					alert(data.error_msg + ' Please enter a valid zip code');
				}else{
					alert(data);
				}
			}
		})
	}
</script>