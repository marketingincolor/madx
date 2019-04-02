<?php 
/**
 * Template Name: Black Pearl NC Landing Page
 *
 * Landing page template without a sidebar
 */
?>
<!DOCTYPE html>
<html lang="en">
    <head> 
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-KQ2BB3');</script>
        <!-- End Google Tag Manager -->
        <script type="text/javascript">
            var _ss = _ss || [];
            _ss.push(['_setDomain', 'https://koi-3QNHJKLJ4E.marketingautomation.services/net']);
            _ss.push(['_setAccount', 'KOI-42O9KA253C']);
            _ss.push(['_trackPageView']);
        (function() {
            var ss = document.createElement('script');
            ss.type = 'text/javascript'; ss.async = true;
            ss.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'koi-3QNHJKLJ4E.marketingautomation.services/client/ss.js?ver=1.1.1';
            var scr = document.getElementsByTagName('script')[0];
            scr.parentNode.insertBefore(ss, scr);
        })();
        </script>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta charset="utf-8">
        <meta property="og:title" content="Black Pearl® Nano-Ceramic by Madico® | Madico, Inc." />
        <meta property="og:description" content="Drive sales with Black Pearl Nano-Ceramic's advanced heat rejection technology—and 50% savings on your first order." />
        <meta property="og:image" content="" />
        <title>Black Pearl&reg; Nano-Ceramic by Madico</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/foundation/6.1.2/foundation.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.1.1/motion-ui.min.css" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600" rel="stylesheet">
        <link rel="shortcut icon" type="image/x-icon" href="http://www.madico.com/wp-content/themes/madico.com/images/favicon.ico">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" id="main-stylesheet-css" href="<?php echo get_template_directory_uri(); ?>/dist/assets/css/app.css?ver=2.10.4" type="text/css" media="all">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script>jQueryWP = jQuery;</script>
        <!-- <script type='text/javascript' src='http://www.madico.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.2.1'></script>
        <script type='text/javascript' src='http://www.madico.com/wp-content/plugins/gravityforms/js/jquery.json.js?ver=1.9.16'></script>
        <script type='text/javascript' src='http://www.madico.com/wp-content/plugins/gravityforms/js/gravityforms.min.js?ver=1.9.16'></script>
        <script type='text/javascript' src='http://www.madico.com/wp-content/plugins/gravityforms/js/conditional_logic.min.js?ver=1.9.16'></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/js/foundation.min.js"></script>
        <style>
            /* Foundation Overrides */
            .row {
                margin: 0 auto;
                max-width: 100em; /*changes 62.5em (1000px) to 100mem (1600px)*/
                width: 100%;
            }
            .top-bar .row{
                max-width: 75rem;
                margin-left: auto;
                margin-right: auto;
            }
            /* Page Components */
            html,body,h1,h2,h3,h4,h5,h6,p {
            	font-family: 'Montserrat', sans-serif;
            }
            h3, h4 {
            	font-weight: 300;
            }
            a { color:#000; }
            a:hover { color:#787878; }
            a.button { margin-bottom:0; }
            p { font-size:18px; }
            .dm16 .gform_heading {display:none;}
            .dm16 .gform_description h3 { padding:0.175em 0;}
            .dm16 .gform_body { display:inline-block; color:#fff; }
            .dm16 .gform_body ul { list-style:none; margin:0; width:100%; text-align:center; }
            
            .dm16 .gform_body li { display:inline-table; margin:0 0.5em; }
            .dm16 .gform_body li:nth-child(n+5) { clear:unset; float:unset; width:95%; }
            .dm16 .gform_body li .gfield_checkbox li { float:left; text-align:left; }
            .dm16 .gform_body li:nth-last-child .gfield_description { display:none; }
            
            .dm16 .gform_body li label { color:#fff; text-align:left; }
            .dm16 .gform_body li .ginput_container_checkbox { width:100%; margin-top:10px; }
            .dm16 .gform_body li .ginput_container_textarea { width:100%; margin-top:8px; }
            #input_28_9{resize:none}
            .dm16 .gform_footer:before { clear:both; }
            .dm16 .gform_footer { margin:1em 2em 0em 2em; }
            .dm16 .gform_footer .button {
            	text-transform: uppercase;
            	color:#000;
            	background-color: #e09e10;
            	padding: 10px 35px;
            	border-radius: 20px;
            	font-size: 24px;
            	width: 100%;
            	transition: all 0.25s ease-in-out;
                margin:0 !important;
            }

            .validation_error,.validation_message{color:red}
            .validation_message{text-align:left}

            .dm16 .gform_footer .button:hover {
            	background-color: #FFF;
            	color: #e09e10;
            }
            input[type=text],input[type=email],select,textarea{border-radius:3px;color:#787878;}
            
            /* Small screens */
            @media only screen {
                .item { margin:1em 2em 0em 2em;}
                .item h3, item h4 { font-size:21px; margin: 0.5em 0; }
                .item h2, .item p, .item li { font-size:18px; }
                .item .mark { vertical-align:super; font-size:8px;}
                .fadein { height:258px; }
                .fadein img { left:-300px; top:-30px; }
                .dm16 .gform_body { margin:0 1em; margin-top:0px; }
                .dm16 .gform_heading { top:0px; }
                .dm16 .gform_body li { width:95%; }
                .dm16 .gform_body .optin li { width:95%; }
                .dm16 .gform_body .optin input { position:absolute; }
                .dm16 .gform_body .optin label { position:relative; top:-5px; left:18px; }
                .quote { margin: 3em 3em; }
                .logo { margin: 0 auto; display:block; height: auto; width:90%; /*width: 175px; padding: .5em;*/ }
                .fadein img { left: -100px; top: 7px; height: 192px; }
            /* Medium screens */
            @media only screen and (min-width: 40.063em) {
                .item { margin:1em 2em 0em 2em;}
                .item h3, item h4 { font-size:21px; margin: 0.5em 0; }
                .item h2, .item p, .item li { font-size:18px; }
                .item .mark { vertical-align:super; font-size:8px;}
                .fadein { height:396px; }
                .fadein img { left:-218px; top:0; height:390px;}
            }
            /* Large screens */
            @media only screen and (min-width: 64.063em) {
                .item { margin:2em 4em 0em 4em;}
                .item h3, item h4 { font-size:30px; margin: 0.75em 0; }
                .item h2, .item p, .item li { font-size:21px; }
                .item .mark { vertical-align:super; font-size:9px;}
                .fadein { height:396px; }
                .fadein img { left:0; top:0; }
                .dm16 .gform_body li { width:46%; }
                .dm16 .gform_body .optin li { width:95%; }
                .logo { margin: initial; display:initial; width:auto; }
                .fadein img { left:0px top: 0px;  height: auto;}
            }
            /*======= New Styles ======*/
            .top-bar{
                position: fixed;
                top:-108px;
                width:100%;
                padding:30px 0;
                background:#003967;
                background:linear-gradient(#FFF,#eeeef0);
                transition:top 0.2s ease-in-out;
                z-index: 99;
            }
            .top-bar.slide-down{top:0;box-shadow:0px 3px 50px rgba(0,0,0,0.2)}
            .top-bar .columns{
                display:flex;
                align-items:center;
            }
            .top-bar .top-bar-left{
                width:100%;
                text-align:left;
                float:none;
            }
            .top-bar .top-bar-right{
                width:100%;
                text-align:right;
                float:none;
            }
            .top-bar p{color:#000;font-size:20px}
            .top-bar .button,.top-bar p{ margin-bottom:0 }
            .top-bar .button{
                background-color: transparent;
                border:2px solid #e09e10;
                color:#e09e10;
                transition:all 0.25s ease-in-out;
                padding:15px 30px;
                border-radius:25px;
                text-transform:uppercase;
                font-weight:600;
            }
            .top-bar .button:hover{
                color:#000;
                background-color:#e09e10;
            }
            .hero{
            	background-image:url(<?php echo get_template_directory_uri(); ?>/dist/assets/images/bpnc-hero.jpg);
            	background-position: center center;
            	background-repeat: no-repeat;
            	background-size: cover;
            	padding: 60px 0;
            	text-align: center;
                height:unset;
                max-height:unset;
            }
            .hero img{
            	margin-bottom: 30px;
            }
            .hero h3 {
            	color:#FFF;
            	font-size: 48px;
                margin-bottom: 0;
                leter-spacing:-0.5px;
            }
            .hero h4 {
            	color:#e09e10;
            	text-transform: uppercase;
            	letter-spacing: 4px;
            	font-size: 24px;
            	margin-bottom: 20px;
            }
            .hero p {
                color:#FFF;
                margin-bottom:50px;
                font-size: 18px;
                letter-spacing:-0.5px;
            }
            .hero a{
            	text-transform: uppercase;
            	color:#000;
            	background-color: #e09e10;
            	padding: 15px 35px;
            	border-radius: 30px;
                font-size: 18px;
            	transition: all 0.25s ease-in-out;
            }
            .hero a:hover {
            	background-color: #FFF;
            	color: #e09e10;
            }

            .features{
            	background-image: url(<?php echo get_template_directory_uri(); ?>/dist/assets/images/bpnc-features-bg.jpg);
            	background-position: center center;
            	background-repeat: no-repeat;
            	background-size: cover;
            	padding: 8% 0;
            }
            .features p, .features .features-list li, .car li {font-weight: 300;color:#787878}
            .features .features-list li, .car li {list-style-type:none;padding:5px 0}
            .features i, .car i {color: #e09e10; position:absolute;}
            .features ul, .car ul {margin: 0}
            .features .features-list p,
            .car .features-list p { padding-left:20px; position:relative; top:-5px; }

            .car{
            	background-image: url(<?php echo get_template_directory_uri(); ?>/dist/assets/images/bpnc-car-bg.jpg);
            	background-position: center center;
            	background-repeat: no-repeat;
            	background-size: cover;
            	padding: 8% 0;
            }
            .car h3{
            	/*font-weight: 300;
            	font-size: 2.125rem;
            	color: #00467f;
            	margin: 0 0 30px;
                line-height: 1.2em;*/
            }
            .car p{
            	color: #787878;
            }
            h3 { font-size:48px; letter-spacing:-1.1px; }

            .testimonials{
                background-image: url(<?php echo get_template_directory_uri(); ?>/dist/assets/images/bpnc-couple-bg.jpg);
                background-position: center center;
                background-repeat: no-repeat;
                background-size: cover;
                padding: 8% 0;
            }
            .testimonials p,.testimonials .author,.testimonials .job{color: #787878;}
            .testimonials .author{font-weight: 700}
            .testimonials img{margin-bottom: 30px;}
            .orbit-container{ height: 222px !important; }
            .orbit-bullets{text-align:left}
            .orbit-bullets button{
                height: 15px;
                width: 15px;
                background-color: #fff;
                border: 1px solid #d1d1d1;
                cursor: pointer;
            }
            .orbit-bullets button.is-active{
                background-color: #000;
                border: none;
            }
            .blackpearl-form{
            	/*background-color: #00447c;*/
                background-color: #252525;
            	padding: 8% 0;
            }
            .blackpearl-form img{ margin-bottom: 30px; }
            .blackpearl-form h3{ color:#FFF; font-size: 30px; padding:0 30px; }
            .blackpearl-form p{ color:#FFF; margin-bottom:10px; font-size:0.875em; }
            .blackpearl-form .fdesc { padding:1em 2em; }
            .blackpearl-form #field_28_8 label{ margin-bottom:10px; }
            .blackpearl-form .questions { margin-top:1.75em !important; }
            .form-section { margin:30px !important; }
            .form-submit-button { margin-top:0px !important; }
            .footer{padding:5% 0; }
            .footer img{ margin-bottom:30px; }
            .footer p{ color:#787878; font-size:13px; }
            .footer a{ font-size: 13px; color:#787878; }
            .footer a:hover{ color:#d1d1d1; }
            .footer p:first-of-type{ margin-bottom: 0; }

            /*====== MOBILE ======*/
            @media(max-width: 1024px){
                .top-bar{top: -124px;}
                .dm16 .gform_footer .button{
                    padding: 10px 20px;
                    font-size: 17px;
                }
                .testimonials {padding: 8% 0;}
            }
            @media(max-width: 640px){
                .top-bar{
                    padding: 15px 0;
                    top: -124px;
                }
                .top-bar .columns{
                    display:block;
                }
                .top-bar p{
                    line-height:1.4;
                    margin-bottom:15px;
                    font-size: 16px;
                }
                .top-bar .button{padding: 10px 30px}
                .top-bar .top-bar-left,.top-bar .top-bar-right{
                    text-align:center;
                }
            	.hero h3{font-size: 36px;line-height: 40px; font-weight:400;}
            	.hero h4{font-size: 18px; font-weight:400;}
                .hero .columns {padding:0 30px}
            	.features{
            		background-image:none;
            		padding: 0;
            	}
            	.features .columns {padding:0 30px}
            	.features .mobile-features, .car .mobile-car {padding-top:8%; }

            	.testimonials{
            		background-image: none;
            		padding: 0;
            		background-color: #eaeef7;
            	}
            	.testimonials .columns {padding:0 30px}

            	.car{
            		background-image: none;
            		padding-bottom: 0;
            	}
            	.car .columns {padding:0 30px}
            	.car .orbit {padding-bottom: 20px}
                h3 { font-size:36px; }

            	.dm16 .gform_footer .button{
            		padding: 10px 20px;
            		font-size: 14px;
            	}
            }
            @media(max-width: 425px){
                .top-bar{top: -127px}
            }
        </style>
    </head>
    <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQ2BB3"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <div class="top-bar">
          <div class="row">
              <div class="small-12 columns">
                  <div class="top-bar-left">
                      <p>Drive Profits with Buy One, Get One <br class="show-for-small-only">50% Off Savings!</p>
                  </div>
                  <div class="top-bar-right">
                      <a href="#blackpearl-form" id="dealer-button" class="button">Start driving profits now</a>
                  </div>
              </div>
          </div>
        </div>

        <section class="hero">
        	<div class="row">
        	    <div class="header small-12 medium-8 medium-offset-2 columns">
        	     <img class="logo" src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/blackpearl-logo-white.png">
        	     <h3>Drive Profits with Buy One, Get One 50% Off Savings!</h3>
        	     <h4>Ceramic Window Tint at Its Finest</h4>
        	     <p>Rev up sales with the ceramic automotive window film that redefines beauty and performance. Black Pearl<sup>®</sup> Nano-Ceramic window film by Madico<sup>®</sup> is as protective as it is smart. Advanced ceramic technology makes for the coolest drive around, while its ceramic construction won't interfere with wireless or satellite connections.</p>
        	     <a href="#blackpearl-form" class="button">Start driving profits now</a>
        	    </div>
        	</div>
        </section>
        
        <section class="features">
            <div class="row">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/bpnc-features-mobile.jpg" alt="Black Pearl Nano-Ceramic Features" class="show-for-small-only">
                <div class="small-12 medium-5 medium-offset-6 large-4 large-offset-7 columns end">
                    <div class="mobile-features">
                        <h3>Buy Your First Roll, Get the Second Roll 50% Off!</h3>
                        <p>What's better than ceramic technology that blocks 99% of UV rays and rejects 87% of infrared rays? The same technology at significant costs savings, which means more profits for you. Black Pearl Nano-Ceramic is available in a wide variety of shades that minimize annoying glare with super high heat rejection.</p>
                        <br />
                        <p>To qualify:</p>
                        <ul class="features-list">
                        	<li><i class="fa fa-check" aria-hidden="true"></i><p>Purchase your first roll of Black Pearl NC film and get the second roll for 50% off</p></li>
                        	<li><i class="fa fa-check" aria-hidden="true"></i><p>Discount limited to first-time Black Pearl NC orders</p></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><p>Offer good for North American dealers only</p></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="car">
            <div class="row">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/bpnc-car-mobile.jpg" alt="black pearl nano-ceramic car" class="show-for-small-only">
                <div class="small-12 medium-5 medium-offset-1 columns end">
                    <div class="mobile-car">
                        <h3>Rev Up Performance and Sales</h3>
                        <p style="padding:10px 0px;">Black Pearl® NC Features:</p>
                        <ul class="features-list">
                            <li><i class="fa fa-check" aria-hidden="true"></i><p>High infrared heat rejection, nano-ceramic technology</p></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><p>Excellent conformability for easy installation</p></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><p>Rich, black color</p></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><p>Metal-free construction won't interfere with wireless or satellite connections</p></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><p>Available in a wide range of shades to accommodate any driver's preference</p></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><p>1.5 mil premium automotive film product</p></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><p>Helps keep shattered glass together in the event of an accident</p></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><p>Lifetime no-fade warranty</p></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="testimonials">
        	<div class="row">
        		<img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/bpnc-couple-mobile.jpg" alt="Black Pearl Nano-Ceramic testimonials" class="show-for-small-only">
                <div class="medium-5 medium-offset-7 columns end">
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/bpnc-quote-icon.png" alt="Testimonial Quote">
                </div>
                <div class="medium-5 medium-offset-7 columns end">
                    <div class="orbit" role="region" aria-label="Testimonial Slides" data-orbit data-timer-delay="9000">
                      <div class="orbit-wrapper">
                        <ul class="orbit-container">
                          <li class="is-active orbit-slide">
                            <p>"We absolutely love the Black Pearl<sup>®</sup> Nano-Ceramic film. Our technicians love to install it and our customers are always pleased with the result."</p>
                            <address class="gray-p">
                                  <span class="author">&mdash;Leslie Ewing</span><br>
                                  <span class="job">Made in the Shade, Mesa, Arizona</span>
                                </address>
                          </li>
                          <li class="orbit-slide">
                            <p>"I've found more and more people are coming in and asking for ceramic films and I'm happy to be able to provide my customers with a quality product that is easy to install and shrinks easily."</p>
                            <address class="gray-p">
                                  <span class="author">&mdash;David Lopez</span><br>
                                  <span class="job">Dwight's Auto Glass & Tint in Tucson, Arizona</span>
                                </address>
                          </li>
                        </ul>
                      </div>
                      <nav class="orbit-bullets">
                        <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
                        <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
                      </nav>
                    </div>
                </div>
        	</div>
        </section>


        
        <div class="blackpearl-form" id="blackpearl-form">
        	<div class="row">
        	  <div class="medium-offset-2 medium-8 large-6 large-offset-3 columns text-center">
        	    <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/blackpearl-form-icon.png" alt="">
        	    <h3>Put the pedal to the metal for buy one, get one <br class="show-for-large">50% OFF your first order.</h3>
        	    <p class="fdesc">Add Black Pearl NC to your portfolio and watch your business grow. Complete the form below to get started.</p>
                <p style="font-size:11px;">*Offer valid on first purchase of Black Pearl Nano-Ceramic and applies to the second roll purchased only. Dealer must purchase full film rolls (no partials) in a single order to qualify for the discounted roll. Discount applies to the least expensive roll. All sales are final.</p>
                <?php //gravity_form(33, false); /* staging */ ?>
        	    <?php //gravity_form(32, false); /* live */ ?>
                <?php echo do_shortcode('[jotspring jf="90855482739168" ss="15a9afd5-e633-4fb0-9a26-6e74c52b9add"]'); ?>
        	  </div>
        	</div>
        </div>

        <section class="footer">
        	<div class="row">
                <div class="small-12 columns text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/bpnc-footer-logo.png" alt="Black Pearl Nano-Ceramic Logo" width="330">
            	    <p><a href="https://madico.com/">madico.com</a>&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;<a href="https://madico.com/privacy-policy">Privacy Policy</a></p>
            	    <p>&copy; <?php echo date('Y'); ?> Madico<sup>&reg;</sup>, Inc. All rights reserved.</p>
        	    </div>
        	</div>
        </section>
        
        <script>
            jQuery(document).foundation();
        </script>

        <script type="text/javascript">
        adroll_adv_id = "L2B2VNCRHZDNPOKZWSZFWQ"; 
        adroll_pix_id = "JJLCAZAM25HUPALQ5DOR3G"; 
        (function () { 
        var oldonload = window.onload; 
        window.onload = function(){ 
           __adroll_loaded=true; 
           var scr = document.createElement("script"); 
           var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com"); 
           scr.setAttribute('async', 'true'); 
           scr.type = "text/javascript"; 
           scr.src = host + "/j/roundtrip.js"; 
           ((document.getElementsByTagName('head') || [null])[0] || 
            document.getElementsByTagName('script')[0].parentNode).appendChild(scr); 
           if(oldonload){oldonload()}}; 
        }()); 
        </script>

        <script>
            jQuery('.validation_message').each(function(){
              jQuery(this).prev('div').find('input').css({'border':'1px solid red'})
            });
            jQuery(document).ready(function(){
                var heroHeight = jQuery('.hero').outerHeight();
                if (jQuery(window).scrollTop() > heroHeight){
                    jQuery('.top-bar').addClass('slide-down');
                }else{
                    jQuery('.top-bar').removeClass('slide-down');
                }
            });
            jQuery(window).scroll(function(){
                var heroHeight = jQuery('.hero').outerHeight();
                if (jQuery(window).scrollTop() > heroHeight){
                    jQuery('.top-bar').addClass('slide-down');
                }else{
                    jQuery('.top-bar').removeClass('slide-down');
                }
            });
        </script>
    </body>
</html>