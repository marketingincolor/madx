<?php

// Get Available Languages
function icl_post_languages(){

  $languages = icl_get_languages('skip_missing=0');
  $langs      = array();
  
  foreach($languages as $l){
    if(!$l['active']) {
      $langs[$l['translated_name']] = $l['url'];
    }
  }
  
  // Sort languages alphabetically by name
  ksort($langs);

  if(1 < count($languages)){
    echo '<a href="#!"><i class="fal fa-globe-americas"></i>&nbsp; '. __('Language','madx') .'&nbsp; <i class="fas fa-chevron-down"></i></a>';

    echo '<ul class="menu vertical" v-dropdown>';
    
    foreach ($langs as $key => $value) {
      echo '<li><a href="'.$value.'">'.$key.'</a></li>';
    }
    echo '</ul>';
  }
}

function icl_post_languages_mobile(){

  $languages = icl_get_languages('skip_missing=0');
  $langs      = array();
  
  foreach($languages as $l){
    if(!$l['active']) {
      $langs[$l['translated_name']] = $l['url'];
    }
  }
  // Sort languages alphabetically by name
  ksort($langs);
  
  if(1 < count($languages)){
    echo '<a href="#" data-toggle="submenu-dropdown">'. __('Language','madx') . '&nbsp;<i class="fa fa-chevron-down"></i></a>';

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
