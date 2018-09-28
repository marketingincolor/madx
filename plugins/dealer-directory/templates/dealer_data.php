<?php
/**
 * Initial Variables for ALL CONTENT
 *
 */
global $post;
$type = get_post_type( $post->ID );
$dealer_id = get_post_meta($post->ID, 'dealer_id', true);
$dealer_logo = get_post_meta($post->ID, 'logo', true);
$dealer_compan = get_post_meta($post->ID, 'company_name', true);
$dealer_street = get_post_meta($post->ID, 'street', true);
$dealer_city = get_post_meta($post->ID, 'city', true);
$dealer_state = get_post_meta($post->ID, 'state', true);
$dealer_zip = get_post_meta($post->ID, 'zip', true);
$dealer_country = get_post_meta($post->ID, 'country', true);
$dealer_phone = get_post_meta($post->ID, 'phone_number', true);
$dealer_email = get_post_meta($post->ID, 'email', true);
$dealer_web = get_post_meta($post->ID, 'website', true);
$dealer_fb = get_post_meta($post->ID, 'facebook', true);
$dealer_fbs = get_post_meta($post->ID, 'facebook_status', true);
$dealer_tw = get_post_meta($post->ID, 'twitter', true);
$dealer_tws = get_post_meta($post->ID, 'twitter_status', true);
$dealer_li = get_post_meta($post->ID, 'linkedin', true);
$dealer_lis = get_post_meta($post->ID, 'linkedin_status', true);
$dealer_enable = get_post_meta($post->ID, '_enable_dealer', true);
?>


<?php
/**
 * Dealer Social Content
 *
 */
$dealer_social = '<div class="'.$type.'"> ';
$dealer_social .= ($dealer_fbs == 1 && ($dealer_fb) ? '<a target="_blank" href="' . $dealer_fb . '"><i class="fa fa-facebook-official" aria-hidden="true"></i>%</a> ' : '' );
$dealer_social .= ($dealer_tws == 1 && ($dealer_tw) ? '<a target="_blank" href="' . $dealer_tw . '"><i class="fa fa-twitter" aria-hidden="true"></i>%</a> ' : '' );
$dealer_social .= ($dealer_lis == 1 && ($dealer_li) ? '<a target="_blank" href="' . $dealer_li . '"><i class="fa fa-linkedin-square" aria-hidden="true"></i>%</a> ' : '' );
$dealer_social .= '</div>';

/**
 * Dealer Taxonomy Content - ALL 
 *
 */
$term_obj = get_the_terms( $post->ID, array('types','designation') );
$term_list = join(', ', wp_list_pluck($term_obj, 'name'));
?>



<h2 class="<?php echo $type; ?>">Dealer Data</h2>

<ul>
<?php
echo ($dealer_fbs == 1 && ($dealer_fb) ? '<a target="_blank" href="' . $dealer_fb . '"><i class="fa fa-facebook-official" aria-hidden="true"></i></a> ' : '' );
echo ($dealer_tws == 1 && ($dealer_tw) ? '<a target="_blank" href="' . $dealer_tw . '"><i class="fa fa-twitter" aria-hidden="true"></i></a> ' : '' );
echo ($dealer_lis == 1 && ($dealer_li) ? '<a target="_blank" href="' . $dealer_li . '"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a> ' : '' );
?>
<ul>