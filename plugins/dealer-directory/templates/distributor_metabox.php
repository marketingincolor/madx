<?php
    // Collect Distributor Meta values for display and edit in Admin view
    //  
    $current_active = @get_post_meta($post->ID, '_enable_dealer', true);
    $enable_value = ( $current_active =='1' ) ? 'value="1" checked' : 'value="0"';
?>

<style>
    ul.distributor_meta {}
    ul.distributor_meta li {}
    ul.distributor_meta li label { display:inline-block; text-align:right; min-width:20%; }
    ul.distributor_meta li input[type=text] { min-width:40%; }
</style>

<ul class="distributor_meta">
    <li>
        <label for="meta_dname">Distributor Name</label>
        <input type="text" id="meta_dname" name="dist_name" value="<?php echo @get_post_meta($post->ID, 'dist_name', true); ?>" />
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
        <label for="meta_altphone">Alt Phone</label>
        <input type="text" id="meta_altphone" name="alt_phone_number" value="<?php echo @get_post_meta($post->ID, 'alt_phone_number', true); ?>" />
    </li>

    <li>
        <label for="meta_fax">Fax</label>
        <input type="text" id="meta_fax" name="fax" value="<?php echo @get_post_meta($post->ID, 'fax', true); ?>" />
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
        <label for="meta_markets">Markets</label>
        <input type="text" id="meta_markets" name="markets" value="<?php echo @get_post_meta($post->ID, 'markets', true); ?>" />
    </li>
    <li>
        <label for="_enable_dealer">Dealer Enabled</label>
        <input type="checkbox" id="_enable_dealer" name="_enable_dealer" <?php echo $enable_value; ?> />
    </li>
</ul>

<script>
    function dealerEnable() {
        if (this.checked) {
            document.getElementById('_enable_dealer').setAttribute('value', '1');
        } else {
            document.getElementById('_enable_dealer').setAttribute('value', '0');
        }
    }
    document.getElementById('_enable_dealer').addEventListener('click', dealerEnable);
</script>