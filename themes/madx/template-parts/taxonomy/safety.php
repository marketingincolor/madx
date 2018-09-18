<?php 

get_template_part('template-parts/menus/safety-header-menu');
$term = get_queried_object();
include( locate_template( '/template-parts/taxonomy/safety-security/safety-'.$term->slug.'.php', false, false ) );
get_template_part('/template-parts/top-level-page/find-dealer');

?>