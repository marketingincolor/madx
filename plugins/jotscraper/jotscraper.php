<?php
/*
Plugin Name: Jot & SharpSpring Integrator
Description: A CUSTOM Wordpress plugin for grabbing Jot Forms and integrating SharpSpring
Version: 0.1
Author: Nate Beers
Author URI: http://www.marketingincolor.com
License: GPL2

Copyright 2018 Marketing In Color  (email : developer@marketingincolor.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/




include 'simple_html_dom.php';

function OLD_short_sharp_jot($atts, $content = null){

	$a = shortcode_atts(array(
		'jf' => '',
		'ss' => ''
	), $atts);

	// this parameter should be passed by the SHORTCODE - [ jotspring jf='' ss='' ]
	$jot_id     = $a['jf'];
	$ss_id      = $a['ss'];

	$simplehtml = file_get_html("https://form.jotform.com/{$jot_id}",false,null,0);
	$page_html  = $simplehtml->find('html',0);
	$page_head  = $simplehtml->find('head', 0);
	$page_form  = $simplehtml->find('form', 0);
  $url = $_SERVER['REQUEST_URI'];

  if (strpos($url, 'specialty-solutions/products') !== false) {
 
	$page_ss    = <<<EOT
	<script type="text/javascript">
		var _ss = _ss || [];
    var __ss_noform = __ss_noform || [];
		var callThisOnReturn = function(resp) {
			console.log(resp);
      if(location.href.indexOf('specialty-solutions/products') > -1){
	      jQuery('.data-sheet').on('click',function(){
	      	var that = $(this);
		      if (resp && resp.contact) {
		      	jQuery('#specialty-pdf-modal').find('iframe').attr('src',jQuery(this).data('pdf'))
		      	jQuery('#specialty-pdf-modal').foundation('open');
		      } else{
						jQuery('#specialty-form-modal').foundation('open');
						var pdfLink = jQuery(this).data('pdf');
						console.log(pdfLink);
						jQuery('#input_6').val(pdfLink);
						jQuery('#$jot_id').find('button[type=submit]').on('click',function(event){
							event.preventDefault();
							submitForm(pdfLink);
						});
		      }
	      });
      }
    };
    _ss.push(['_setResponseCallback', callThisOnReturn]);
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
    window.onload = function(){
	    __ss_noform.push(['baseURI', 'https://app-3QNHJKLJ4E.marketingautomation.services/webforms/receivePostback/MzawMDE3NjSzBAA/']);
	    __ss_noform.push(['form', '$jot_id','$ss_id']);
	    __ss_noform.push(['submitType', 'manual']);
    }; 
    
	</script>
	<script type="text/javascript" src="https://koi-3QNHJKLJ4E.marketingautomation.services/client/noform.js?ver=1.24"></script>
	<script>

		function submitForm(pdfLink){
			jQuery.ajax({
				type: 'POST',
				success: function(data){
				  if(location.href.indexOf('specialty-solutions/products') > -1){
				  	function goToPdf(){
				  		$('#specialty-form-modal').foundation('close');
							$('#specialty-pdf-modal').find('iframe').attr('src',pdfLink)
							$('#specialty-pdf-modal').foundation('open');
				  	}
						__ss_noform.push(['submit',null, '$ss_id']);
						goToPdf();
				  }else{
				  	__ss_noform.push(['submit',function(event){window.location = '/success'}, '$ss_id']);
				  }
				}
			});
		}
	</script>
EOT;

  $form_output = $page_ss . $page_html;

}else{

	$page_ss = <<<EOT
		<script>
        
      var jotBtn = jQuery('.form-buttons-wrapper').find('button[type=submit]');
      jotBtn.css('display','none');

      jQuery('.form-buttons-wrapper').append('<button id="ss-btn" class="btn-yellow solid">Submit</button>');

      setTimeout(function(){
        jQuery('#ss-btn').on('click',function(){
          __ss_noform.push(['submit',function(){jotBtn.click()}, '$ss_id']);
        });
      },2000)
			
		</script>
		<script type="text/javascript">
			var address = document.getElementsByClassName('form-address-line')[1];
			if(address){
				address.removeAttribute('required');
			}
	    var __ss_noform = __ss_noform || [];
	    __ss_noform.push(['baseURI', 'https://app-3QNHJKLJ4E.marketingautomation.services/webforms/receivePostback/MzawMDE3NjSzBAA/']);
	    __ss_noform.push(['form', '$jot_id','$ss_id']);
	    __ss_noform.push(['submitType', 'manual']);
		</script>
		<script type="text/javascript" src="https://koi-3QNHJKLJ4E.marketingautomation.services/client/noform.js?ver=1.24"></script>
EOT;

	$form_output = $page_html . $page_ss;
}

	return $form_output;

}


function short_sharp_jot($atts, $content = null){
	$a = shortcode_atts(array(
		'jf' => '',
		'ss' => ''
	), $atts);

	// this parameter should be passed by the SHORTCODE - [ jotspring jf='' ss='' ]
	$jot_id     = $a['jf'];
	$ss_id      = $a['ss'];

	$url = $_SERVER['REQUEST_URI'];

	if (strpos($url, 'specialty-solutions/products') !== false) {

	$page_ss = <<<EOT
	<script type="text/javascript">
	    var ss_form = {'account': 'MzawMDE3NjSzBAA', 'formID': '$ss_id'};
	    ss_form.width = '100%';
	    ss_form.height = 'auto';
	    ss_form.domain = 'app-3QNHJKLJ4E.marketingautomation.services';
	    // ss_form.hidden = {'Company': 'Anon'}; // Modify this for sending hidden variables, or overriding values
	</script>
	<script type="text/javascript" src="https://koi-3QNHJKLJ4E.marketingautomation.services/client/form.js?ver=1.1.1"></script>
EOT;

	$form_output = $page_ss;
	} else {

	$page_ss = <<<EOT
	<script type="text/javascript">
	    var ss_form = {'account': 'MzawMDE3NjSzBAA', 'formID': '$ss_id'};
	    ss_form.width = '100%';
	    ss_form.height = '1250';
	    ss_form.domain = 'app-3QNHJKLJ4E.marketingautomation.services';
	    // ss_form.hidden = {'Company': 'Anon'}; // Modify this for sending hidden variables, or overriding values
	</script>
	<script type="text/javascript" src="https://koi-3QNHJKLJ4E.marketingautomation.services/client/form.js?ver=1.1.1"></script>
EOT;
	
	$form_output = $page_ss;
	}

	return $form_output;
}

add_shortcode('jotspring', 'short_sharp_jot');
