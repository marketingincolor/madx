<?php 
/**
 * Template Name: Protekt PPF Landing Success Page
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
        <title>Protekt&reg; PPF by Madico</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/foundation/6.1.2/foundation.min.css" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
        <link rel="shortcut icon" type="image/x-icon" href="http://www.madico.com/wp-content/themes/madico.com/images/favicon.ico">
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
            .dm16 .gform_body li .ginput_container_checkbox { width:100%; }
            .dm16 .gform_body li .ginput_container_textarea { width:100%; }
            #input_28_9{resize:none}
            .dm16 .gform_footer:before { clear:both; }
            .dm16 .gform_footer {margin:1em 2em}
            .dm16 .gform_footer .button {
                text-transform: uppercase;
                color:#FFF;
                background-color: #e09e10;
                padding: 10px 35px;
                border-radius: 20px;
                font-size: 24px;
                width: 100%;
                transition: all 0.25s ease-in-out;
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
                .quote { margin: 3em 3em; }
                .logo { margin: 0 auto; display:block; height: auto; /*width: 175px; padding: .5em;*/ }
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
                .logo { margin: initial; display:initial; }
                .fadein img { left:0px top: 0px;  height: auto;}
            }
            /*======= New Styles ======*/
            .header { text-align:left; }
            .header img { padding:3em 0em; }
            .hero{
                background-image:url(<?php echo get_template_directory_uri(); ?>/dist/assets/images/protekt-hero-alt.jpg);
                background-position: center center;
                background-repeat: no-repeat;
                background-size: cover;
                padding: 10% 0;
                text-align: left;
            }
            .hero img{
                margin-bottom: 30px;
            }
            .hero .sm-ico img { margin-bottom:0; padding:0; }
            .hero h3 {
                color:#FFF;
                font-size: 48px;
                margin-bottom: 0;
                letter-spacing:-0.5px;
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

            .features{
                background-image: url(<?php echo get_template_directory_uri(); ?>/dist/assets/images/bpnc-features-bg.jpg);
                background-position: center center;
                background-repeat: no-repeat;
                background-size: cover;
                padding: 8% 0;
            }
            .features p,.features li, .car li {font-weight: 300;color:#787878}
            .features li, .car li {list-style-type:none;padding:5px 0}
            .features i, .car i {color: #e09e10}
            .features ul, .car ul {margin: 0}

            .car{
                background-image: url(<?php echo get_template_directory_uri(); ?>/dist/assets/images/bpnc-car-bg.jpg);
                background-position: center center;
                background-repeat: no-repeat;
                background-size: cover;
                padding: 8% 0;
            }
            .car p{ color: #787878; }
            h3 { font-size:48px; letter-spacing:-1.1px; }

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

            .footer{padding:5% 0}
            .footer img{margin-bottom:30px;}
            .footer p{color:#000}
            .footer p,.footer a{font-size: 13px; font-weight:600;}
            .footer a{ color:#000; }
            .footer a:hover{ color:#777; }
            .footer p:first-of-type{margin-bottom: 0}

            /*====== MOBILE ======*/
            @media(max-width: 1024px){
                .top-bar{top: -124px}
                .hero{ background-position: center center; }
            }
            @media(max-width: 640px){
                .top-bar{
                    padding: 15px 0;
                    top: -124px
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
                .hero h3{font-size: 36px;line-height: 40px}
                .hero h4{font-size: 18px}
                .hero{ background-position: 34% 50%; background-image:linear-gradient( rgba(1, 1, 1, 0.90), rgba(1, 1, 1, 0.10) ),url(<?php echo get_template_directory_uri(); ?>/dist/assets/images/protekt-hero-alt.jpg); }
                .hero .sm-ico img { max-width:42px; }
                .header { text-align:center; }
                .features{
                    background-image:none;
                    padding:0;
                }
                .features .columns {padding:0 30px}
                .features .mobile-fleet {padding: 8%}

                .testimonials{
                    background-image: none;
                    padding: 8% 0;
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
                .q-item { text-align:center; }
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
        <div class="row">
            <div class="header small-12 columns" style="text-align:center;">
             <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/protekt-logo-header.png" width="360">
            </div>
        </div>
        
        <section class="hero">
            <div class="row">
                <div class="header small-10 small-offset-1 medium-4 medium-offset-1 columns">
                    <h3>Well Done!</h3>
                    <p>Thank you! We’ve received your information and will be in touch with you very shortly. We appreciate your interest and look forward to helping you grow your business.</p>
                 
                    <div class="small-12 small-centered">
                        <div class="q-item">
                        <div style="position:relative; margin-bottom:20px;">
                            <div class="sm-meta" style="position:relative; display:inline-block; vertical-align:middle; padding:10px 10px 10px 0px;" >
                                <a href="https://www.facebook.com/MadicoInc" target="_blank" class="sm-ico"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/protekt-ico-fb.png" alt="Facebook" width="54" /></a>
                            </div>

                            <div class="sm-meta" style="position:relative; display:inline-block; vertical-align:middle; padding:10px;" >
                                <a href="https://twitter.com/MadicoInc" target="_blank" class="sm-ico"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/protekt-ico-tw.png" alt="Twitter" width="54" /></a>
                            </div> 

                            <div class="sm-meta" style="position:relative; display:inline-block; vertical-align:middle; padding:10px;" >
                                <a href="https://www.linkedin.com/company/madicoinc/" target="_blank" class="sm-ico"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/protekt-ico-li.png" alt="LinkedIn" width="54" /></a>
                            </div>

                            <div class="sm-meta" style="position:relative; display:inline-block; vertical-align:middle; padding:10px;" >
                                <a href="https://youtube.com/c/MadicoInc" target="_blank" class="sm-ico"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/protekt-ico-yt.png" alt="YouTube" width="54" /></a>
                            </div>
                        </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        
        <section class="footer">
            <div class="row">
                <div class="small-12 columns text-center">
                    <p><a href="https://madico.com/">madico.com</a>&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;<a href="https://madico.com/privacy-policy">Privacy Policy</a></p>
                    <p>&copy; <?php echo date('Y'); ?> Madico<sup>&reg;</sup>, Inc. All rights reserved.</p>
                </div>
            </div>
        </section>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/foundation/6.1.2/foundation.min.js"></script>
        <script>
            $(document).foundation();
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

    </body>
</html>