<div class="wrap">
    <h2>Dealer Directory</h2>
    <form method="post" action="options.php"> 
        <?php @settings_fields('dealer-directory-group', 'dealer-directory'); ?><!-- creates hidden form content -->
        <?php @do_settings_fields('dealer-directory-group', 'dealer-directory'); ?>

        <?php do_settings_sections('dealer-directory'); ?><!--displays all form content-->

        <?php @submit_button(); ?>
    </form>
</div>