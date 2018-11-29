<?php
/*
Plugin Name: Jot & SharpSpring Integrator
Description: A CUSTOM Wordpress plugin for grabbing Jot Forms and integrating SharpSpring
Version: 0.1
Author: Marketing In Color
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
	// $page_head  = $simplehtml->find('head', 0);
	// $page_form  = $simplehtml->find('form', 0);
	$page_ss    = <<<EOT
	<script>
		setTimeout(function(){
			$('#$jot_id').find('button[type=submit]').on('click',function(event){
				__ss_noform.push(['submit',function(event){window.location = '/success'}, '$ss_id']);
			});
		},1000)
	</script>
	<script type="text/javascript">
    var __ss_noform = __ss_noform || [];
    __ss_noform.push(['baseURI', 'https://app-3QN6SVTYI8.marketingautomation.services/webforms/receivePostback/MzawMDE1MbQwAgA/']);
    __ss_noform.push(['form', '$jot_id','$ss_id']);
    __ss_noform.push(['submitType', 'manual']);
	</script>
	<script type="text/javascript" src="https://koi-3QN6SVTYI8.marketingautomation.services/client/noform.js?ver=1.24"></script>
EOT;

	$form_output = $page_html . $page_ss;
	return $form_output;

}
add_shortcode('jotspring', 'short_sharp_jot');
