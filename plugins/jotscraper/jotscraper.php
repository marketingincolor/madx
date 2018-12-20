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

function short_sharp_jot($atts, $content = null){

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
	      $('.data-sheet').on('click',function(){
	      	var that = $(this);
		      if (resp && resp.contact) {
		      	$('#specialty-pdf-modal').find('iframe').attr('src',$(this).data('pdf'))
		      	$('#specialty-pdf-modal').foundation('open');
		      } else{
						$('#specialty-form-modal').foundation('open');
						var pdfLink = $(this).data('pdf').split('.com')[1];
						$('#input_6').val(pdfLink);
						$('#$jot_id').find('button[type=submit]').on('click',function(event){
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
			$.ajax({
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
			setTimeout(function(){
				$('#$jot_id').find('button[type=submit]').on('click',function(event){
					__ss_noform.push(['submit',null, '$ss_id']);
				});
			},1000)
		</script>
		<script type="text/javascript">
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
add_shortcode('jotspring', 'short_sharp_jot');
