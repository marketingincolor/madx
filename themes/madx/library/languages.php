<?php

// Get Available Languages
function icl_post_languages(){

  $languages = icl_get_languages('skip_missing=0&link_empty_to=/{%lang}/international');
  $langs      = array();
  
  foreach($languages as $l){
    if(!$l['active']) {
      $langs[$l['translated_name']] = $l['url'];
    }
  }
  
  // Sort languages alphabetically by name
  ksort($langs);

  if(1 < count($languages)){
    echo '<a id="nav-drop" href="#!"><i class="fal fa-globe-americas"></i>&nbsp; '. __('Language','madx') .'&nbsp; <i class="fas fa-chevron-down"></i></a>';

    echo '<ul class="menu vertical" v-dropdown>';
    
    foreach ($langs as $key => $value) {
      echo '<li><a href="'.$value.'">'.$key.'</a></li>';
    }
    echo '</ul>';
  }
}

function icl_post_languages_mobile(){

  $languages = icl_get_languages('skip_missing=0&link_empty_to=/{%lang}/international');
  $langs      = array();
  
  foreach($languages as $l){
    if(!$l['active']) {
      $langs[$l['translated_name']] = $l['url'];
    }
  }
  // Sort languages alphabetically by name
  ksort($langs);
  
  if(1 < count($languages)){
    echo '<a href="#" data-toggle="submenu-dropdown"><i class="fal fa-globe-americas"></i>&nbsp;&nbsp;'. __('Language','madx') . '&nbsp;</a>';

    echo '<ul class="menu" v-dropdown>';
    
    foreach ($langs as $key => $value) {
      echo '<li><a href="'.$value.'">'.$key.'</a></li>';
    }
    echo '</ul>';
  }
}

// Register jotforms international form strings for translation
do_action( 'wpml_register_single_string', 'Jot Forms', 'Form Label', 'First Name');
do_action( 'wpml_register_single_string', 'Jot Forms1', 'Form Label', 'Last Name');
do_action( 'wpml_register_single_string', 'Jot Forms2', 'Form Label', 'Organization');
do_action( 'wpml_register_single_string', 'Jot Forms3', 'Form Label', 'Phone Number');
do_action( 'wpml_register_single_string', 'Jot Forms4', 'Form Label', 'Email');
do_action( 'wpml_register_single_string', 'Jot Forms5', 'Form Label', 'Address');
do_action( 'wpml_register_single_string', 'Jot Forms6', 'Form Label', 'Street Address');
do_action( 'wpml_register_single_string', 'Jot Forms7', 'Form Label', 'City');
do_action( 'wpml_register_single_string', 'Jot Forms8', 'Form Label', 'State/Province');
do_action( 'wpml_register_single_string', 'Jot Forms9', 'Form Label', 'Postal/Zip Code');
do_action( 'wpml_register_single_string', 'Jot Forms10', 'Form Label', 'Country');
do_action( 'wpml_register_single_string', 'Jot Forms11', 'Form Label', 'What products are you interested in? Check all that apply.');
do_action( 'wpml_register_single_string', 'Jot Forms12', 'Form Label', 'Architectural Film');
do_action( 'wpml_register_single_string', 'Jot Forms13', 'Form Label', 'Automotive Film');
do_action( 'wpml_register_single_string', 'Jot Forms14', 'Form Label', 'Decorative Film');
do_action( 'wpml_register_single_string', 'Jot Forms15', 'Form Label', 'Device Protection');
do_action( 'wpml_register_single_string', 'Jot Forms16', 'Form Label', 'Paint Protection Film');
do_action( 'wpml_register_single_string', 'Jot Forms17', 'Form Label', 'Safety & Security Film');
do_action( 'wpml_register_single_string', 'Jot Forms18', 'Form Label', 'Specialty Solutions');
do_action( 'wpml_register_single_string', 'Jot Forms19', 'Form Label', 'Windshield Protection');
do_action( 'wpml_register_single_string', 'Jot Forms20', 'Form Label', 'Other');
do_action( 'wpml_register_single_string', 'Jot Forms21', 'Form Label', 'Questions/Comments');
do_action( 'wpml_register_single_string', 'Jot Forms22', 'Form Label', 'Submit');
