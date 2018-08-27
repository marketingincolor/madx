<table> 
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="meta_did">Dealer ID</label>
        </th>
        <td>
            <input type="text" id="meta_did" name="meta_did" value="<?php echo @get_post_meta($post->ID, 'meta_did', true); ?>" />
        </td>
    </tr>
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="meta_logo">Logo</label>
        </th>
        <td>
            <input type="text" id="meta_logo" name="meta_logo" value="<?php echo @get_post_meta($post->ID, 'meta_logo', true); ?>" />
        </td>
    </tr>
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="meta_name">Company Name</label>
        </th>
        <td>
            <input type="text" id="meta_name" name="meta_name" value="<?php echo @get_post_meta($post->ID, 'meta_name', true); ?>" />
        </td>
    </tr>
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="meta_address">Address</label>
        </th>
        <td>
            <input type="text" id="meta_address" name="meta_address" value="<?php echo @get_post_meta($post->ID, 'meta_address', true); ?>" />
        </td>
    </tr>

    <tr valign="top">
        <th class="metabox_label_column">
            <label for="meta_city">City</label>
        </th>
        <td>
            <input type="text" id="meta_city" name="meta_city" value="<?php echo @get_post_meta($post->ID, 'meta_city', true); ?>" />
        </td>
    </tr>
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="meta_state">State</label>
        </th>
        <td>
            <input type="text" id="meta_state" name="meta_state" value="<?php echo @get_post_meta($post->ID, 'meta_state', true); ?>" />
        </td>
    </tr>
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="meta_zip">ZIP</label>
        </th>
        <td>
            <input type="text" id="meta_zip" name="meta_zip" value="<?php echo @get_post_meta($post->ID, 'meta_zip', true); ?>" />
        </td>
    </tr>
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="meta_country">Country</label>
        </th>
        <td>
            <input type="text" id="meta_country" name="meta_country" value="<?php echo @get_post_meta($post->ID, 'meta_country', true); ?>" />
        </td>
    </tr>
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="meta_phone">Phone</label>
        </th>
        <td>
            <input type="text" id="meta_phone" name="meta_phone" value="<?php echo @get_post_meta($post->ID, 'meta_phone', true); ?>" />
        </td>
    </tr>
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="meta_email">Email</label>
        </th>
        <td>
            <input type="text" id="meta_email" name="meta_email" value="<?php echo @get_post_meta($post->ID, 'meta_email', true); ?>" />
        </td>
    </tr>
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="meta_website">Website</label>
        </th>
        <td>
            <input type="text" id="meta_website" name="meta_website" value="<?php echo @get_post_meta($post->ID, 'meta_website', true); ?>" />
        </td>
    </tr>
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="meta_fb">Facebook</label>
        </th>
        <td>
            <input type="text" id="meta_fb" name="meta_fb" value="<?php echo @get_post_meta($post->ID, 'meta_fb', true); ?>" />
        </td>
    </tr>
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="meta_fbs">Facebook Status</label>
        </th>
        <td>
            <input type="text" id="meta_fbs" name="meta_fbs" value="<?php echo @get_post_meta($post->ID, 'meta_fbs', true); ?>" />
        </td>
    </tr>
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="meta_tw">Twitter</label>
        </th>
        <td>
            <input type="text" id="meta_tw" name="meta_tw" value="<?php echo @get_post_meta($post->ID, 'meta_tw', true); ?>" />
        </td>
    </tr>
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="meta_tws">Twitter Status</label>
        </th>
        <td>
            <input type="text" id="meta_tws" name="meta_tws" value="<?php echo @get_post_meta($post->ID, 'meta_tws', true); ?>" />
        </td>
    </tr>
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="meta_li">LinkedIn</label>
        </th>
        <td>
            <input type="text" id="meta_li" name="meta_li" value="<?php echo @get_post_meta($post->ID, 'meta_li', true); ?>" />
        </td>
    </tr>
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="meta_lis">LinkedIn Status</label>
        </th>
        <td>
            <input type="text" id="meta_lis" name="meta_lis" value="<?php echo @get_post_meta($post->ID, 'meta_lis', true); ?>" />
        </td>
    </tr>
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="_enable_dealer">Dealer Enabled</label>
        </th>
        <td>
            <input type="text" id="_enable_dealer" name="_enable_dealer" value="<?php echo @get_post_meta($post->ID, '_enable_dealer', true); ?>" />
        </td>
    </tr>

</table>