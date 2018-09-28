<?php
    // Collect Dealer Meta values for display and edit in Admin view
    //  
    $current_fbs = @get_post_meta($post->ID, 'facebook_status', true);
    $fbs_value = ( $current_fbs =='1' ) ? 'value="1" checked' : 'value="0"';
    
    $current_tws = @get_post_meta($post->ID, 'twitter_status', true);
    $tws_value = ( $current_tws =='1' ) ? 'value="1" checked' : 'value="0"';

    $current_lis = @get_post_meta($post->ID, 'linkedin_status', true);
    $lis_value = ( $current_lis =='1' ) ? 'value="1" checked' : 'value="0"';

    $current_active = @get_post_meta($post->ID, '_enable_dealer', true);
    $enable_checked = ( $current_active == '1' ) ? 'checked' : '';
    $enable_value = ( $current_active =='1' ) ? 'value="1" checked' : 'value="0"';
?>
<ul>
    <li>
        <label for="meta_did">Dealer ID</label>
        <input type="text" id="meta_did" name="dealer_id" value="<?php echo @get_post_meta($post->ID, 'dealer_id', true); ?>" />
    </li>
    <li>
        <label for="meta_logo">Logo</label>
        <input type="text" id="meta_logo" name="logo" value="<?php echo @get_post_meta($post->ID, 'logo', true); ?>" />
    </li>
    <li>
        <label for="meta_name">Company Name</label>
        <input type="text" id="meta_name" name="company_name" value="<?php echo @get_post_meta($post->ID, 'company_name', true); ?>" />
    </li>
    <li>
        <label for="meta_address">Address</label>
        <input type="text" id="meta_address" name="street" value="<?php echo @get_post_meta($post->ID, 'street', true); ?>" />
    </li>
    <li>
        <label for="meta_city">City</label>
        <input type="text" id="meta_city" name="city" value="<?php echo @get_post_meta($post->ID, 'city', true); ?>" />
    </li>
    <li>
        <label for="meta_state">State</label>
        <input type="text" id="meta_state" name="state" value="<?php echo @get_post_meta($post->ID, 'state', true); ?>" />
    </li>
    <li>
        <label for="meta_zip">ZIP</label>
        <input type="text" id="meta_zip" name="zip" value="<?php echo @get_post_meta($post->ID, 'zip', true); ?>" />
    </li>
    <li>
        <label for="meta_country">Country</label>
        <input type="text" id="meta_country" name="country" value="<?php echo @get_post_meta($post->ID, 'country', true); ?>" />
    </li>
    <li>
        <label for="meta_phone">Phone</label>
        <input type="text" id="meta_phone" name="phone_number" value="<?php echo @get_post_meta($post->ID, 'phone_number', true); ?>" />
    </li>
    <li>
        <label for="meta_email">Email</label>
        <input type="text" id="meta_email" name="email" value="<?php echo @get_post_meta($post->ID, 'email', true); ?>" />
    </li>
    <li>
        <label for="meta_website">Website</label>
        <input type="text" id="meta_website" name="website" value="<?php echo @get_post_meta($post->ID, 'website', true); ?>" />
    </li>
    <li>
        <label for="meta_fb">Facebook URL</label>
        <input type="text" id="meta_fb" name="facebook" value="<?php echo @get_post_meta($post->ID, 'facebook', true); ?>" />
    </li>
    <li>
        <label for="meta_fbs">Facebook Active</label>
        <!--<input type="text" id="zzzmeta_fbs" name="zzzfacebook_status" value="<?php //echo @get_post_meta($post->ID, 'facebook_status', true); ?>" />-->
        
        <input type="checkbox" id="facebook_status" name="facebook_status" <?php echo $fbs_value; ?> />
    </li>
    <li>
        <label for="meta_tw">Twitter URL</label>
        <input type="text" id="meta_tw" name="twitter" value="<?php echo @get_post_meta($post->ID, 'twitter', true); ?>" />
    </li>
    <li>
        <label for="twitter_status">Twitter Active</label>
        <!--<input type="text" id="zzzmeta_tws" name="zzztwitter_status" value="<?php //echo @get_post_meta($post->ID, 'twitter_status', true); ?>" />-->
        
        <input type="checkbox" id="twitter_status" name="twitter_status" <?php echo $tws_value; ?> />
    </li>
    <li>
        <label for="meta_li">LinkedIn URL</label>
        <input type="text" id="meta_li" name="linkedin" value="<?php echo @get_post_meta($post->ID, 'linkedin', true); ?>" />
    </li>
    <li>
        <label for="linkedin_status">LinkedIn Active</label>
        <!--<input type="text" id="zzzmeta_lis" name="zzzlinkedin_status" value="<?php //echo @get_post_meta($post->ID, 'linkedin_status', true); ?>" />-->

        <input type="checkbox" id="linkedin_status" name="linkedin_status" <?php echo $lis_value; ?> />
    </li>
    <li>
        <label for="_enable_dealer">Dealer Enabled</label>
        <!--<input type="text" id="zzzz_enable_dealer" name="zzzz_enable_dealer" value="<?php //echo @get_post_meta($post->ID, '_enable_dealer', true); ?>" />-->

        <input type="checkbox" id="_enable_dealer" name="_enable_dealer" <?php echo $enable_value; ?> />
    </li>
</ul>

<script>
    function dealerFbs() {
        if (this.checked) {
            document.getElementById('facebook_status').setAttribute('value', '1');
        } else {
            document.getElementById('facebook_status').setAttribute('value', '0');
        }
    }

    function dealerTws() {
        if (this.checked) {
            document.getElementById('twitter_status').setAttribute('value', '1');
        } else {
            document.getElementById('twitter_status').setAttribute('value', '0');
        }
    }

    function dealerLis() {
        if (this.checked) {
            document.getElementById('linkedin_status').setAttribute('value', '1');
        } else {
            document.getElementById('linkedin_status').setAttribute('value', '0');
        }
    }

    function dealerEnable() {
        if (this.checked) {
            document.getElementById('_enable_dealer').setAttribute('value', '1');
        } else {
            document.getElementById('_enable_dealer').setAttribute('value', '0');
        }
    }
    
    document.getElementById('facebook_status').addEventListener('click', dealerFbs);
    document.getElementById('twitter_status').addEventListener('click', dealerTws);
    document.getElementById('linkedin_status').addEventListener('click', dealerLis);
    document.getElementById('_enable_dealer').addEventListener('click', dealerEnable);
</script>