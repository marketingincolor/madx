
export default{
	data() {
		return{
	    dealerName: '',
	    dealerEmail: 'nbeers22@gmail.com',
	    firstName: '',
	    lastName: '',
	    email: '',
	    phone: '',
	    message: '',
	    successMessage: '',
	    showSuccess: false,
	    error: false,
	    errorMessage: ''
		}
	},
	name: 'findDealerModal',
	template:`<div class="reveal" id="dealer-modal" v-reveal>
							<div class="grid-container">
								<div class="grid-x">
									<div id="modal-content" class="small-10 small-offset-1 cell">
										<div id="modal-form" v-if="!showSuccess">	
											<h3 class="blue">{{ dealerName }}</h3>
											<aside class="yellow-underline center"></aside>
											<p class="subhead">Please fill out the information below to contact {{ dealerName }} directly</p>
										  <form method="post">
												<div class="grid-x grid-margin-x">
													<div class="medium-6 cell">
														<input id="first-name" v-model="firstName" type="text" name="first_name" placeholder="First Name *" required>
													</div>
													<div class="medium-6 cell">
														<input id="last-name" v-model="lastName" type="text" name="last_name" placeholder="Last Name *" required>
													</div>
													<div class="medium-6 cell">
														<input id="email" v-model="email" type="email" name="email" placeholder="Email *" required email>
													</div>
													<div class="medium-6 cell">
														<input id="phone-num" v-model="phone" type="number" name="phone" placeholder="Phone Number *" required>
													</div>
													<div class="medium-12 cell">
														<textarea id="user-message" v-model="message" name="message" id="message" cols="20" rows="10" placeholder="Message *" required></textarea>
														<input v-model="dealerEmail" type="hidden" name="dealer_email" value="dealerEmail">
													</div>
													<div class="medium-12 cell">
														<p v-if="error" style="color:red">{{ errorMessage }}</p>
													</div>
													<div class="medium-12 cell">
														<button class="btn-blue solid" type="submit" @click="validateForm">Submit</button>
													</div>
												</div>
										  </form>
										</div>
										<div id="modal-success" v-if="showSuccess">
											<div class="medium-12 cell">
												<p>{{ successMessage }}</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>`,
	created(){
		let $this = this;

		$(document).on('closed.zf.reveal', '#dealer-modal', function(event) {
			$this.showSuccess = false;  
		});
	},
	mounted(){
		let $this = this;
		$(document).find('a').on('click',function(){
			$this.dealerName  = $(this).parent().data('dealername');
			$this.dealerEmail = $(this).parent().next('.dealer-meta').find('.email').data('dealeremail');
		});
	},
	methods:{
		validateForm: function(){
			let emailInput = document.getElementById('email');

			if ($this.firstName === '') {
				document.getElementById('first-name').style.border = '2px solid red';
				$this.errorMessage = 'Please enter your first name';
				return false;
			}else if($this.lastName === ''){
				document.getElementById('last-name').style.border = '2px solid red';
				$this.errorMessage = 'Please enter your last name';
				return false;
			}else if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test($this.email) || $this.email === ''){
		    $this.errorMessage = 'Please enter a valid email';
		    return false;
      }else if($this.phone === ''){
      	document.getElementById('phone-num').style.border = '2px solid red';
      	$this.errorMessage = 'Please enter your phone number';
      	return false;
      }else{
      	$this.sendForm();
      }
		},
		sendForm: function(event){
			let $this = this;
			event.preventDefault();

	    $.ajax({
  			url: '/wp-content/themes/madx/email-dealer.php',
  			type: 'POST',
  			data: { 
  				firstName: $this.firstName,
  				lastName: $this.lastName,
  				email: $this.email,
  				phone: $this.phone,
  				message: $this.message,
  				dealer_email: $this.dealerEmail
  			},
  			success:function(data){
  				$this.successMessage = $this.dealerName + ' has received your message and will respond soon. Thank you!';
  				$this.showSuccess    = true;
  			},
  			error: function(error){
  				alert(error);
  			}
  		});
		}
	}
};