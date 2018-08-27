<div class="wrap">
    <h2>Sitecore</h2>
    <form method="post" action="options.php"> 
        <?php @settings_fields('sitecore-group', 'sitecore'); ?>
        <?php @do_settings_fields('sitecore-group', 'sitecore'); ?>
        <?php do_settings_sections('sitecore'); ?>

        <?php //@info_fields('sitecore-info-group', 'sitecore'); ?>
        <?php //@do_info_fields('sitecore-info-group', 'sitecore'); ?>
        <?php do_settings_sections('info'); ?>

        <?php @submit_button(); ?>
    </form>
</div>