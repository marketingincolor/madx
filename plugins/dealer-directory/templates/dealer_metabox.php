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
        <label for="meta_fb">Facebook</label>
        <input type="text" id="meta_fb" name="facebook" value="<?php echo @get_post_meta($post->ID, 'facebook', true); ?>" />
    </li>
    <li>
        <label for="meta_fbs">Facebook Status</label>
        <input type="text" id="meta_fbs" name="facebook_status" value="<?php echo @get_post_meta($post->ID, 'facebook_status', true); ?>" />
    </li>
    <li>
        <label for="meta_tw">Twitter</label>
        <input type="text" id="meta_tw" name="twitter" value="<?php echo @get_post_meta($post->ID, 'twitter', true); ?>" />
    </li>
    <li>
        <label for="meta_tws">Twitter Status</label>
        <input type="text" id="meta_tws" name="twitter_status" value="<?php echo @get_post_meta($post->ID, 'twitter_status', true); ?>" />
    </li>
    <li>
        <label for="meta_li">LinkedIn</label>
        <input type="text" id="meta_li" name="linkedin" value="<?php echo @get_post_meta($post->ID, 'linkedin', true); ?>" />
    </li>
    <li>
        <label for="meta_lis">LinkedIn Status</label>
        <input type="text" id="meta_lis" name="linkedin_status" value="<?php echo @get_post_meta($post->ID, 'linkedin_status', true); ?>" />
    </li>
    <li>
        <label for="_enable_dealer">Dealer Enabled</label>
        <input type="text" id="_enable_dealer" name="_enable_dealer" value="<?php echo @get_post_meta($post->ID, '_enable_dealer', true); ?>" />
    </li>
</ul>
