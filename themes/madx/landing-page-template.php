<?php
/* Template Name: Landing Page Template */
// Fully customized to allow for completely custom layouts 

if (get_field('landing_page_header')) {
	$page_header = get_field('landing_page_header');
}else{
	//field is empty, do not show
}
if (get_field('landing_page_hero')) {
	$page_hero = get_field('landing_page_hero');
}else{
	//field is empty, do not show
}
if (get_field('landing_page_primary_content')) {
	$page_primary = get_field('landing_page_primary_content');
}else{
	//field is empty, do not show
}
if (get_field('landing_page_secondary_content')) {
	$page_secondary = get_field('landing_page_secondary_content');
}else{
	//field is empty, do not show
}
if (get_field('landing_page_tertiary_content')) {
	$page_tertiary = get_field('landing_page_tertiary_content');
}else{
	//field is empty, do not show
}
if (get_field('landing_page_footer')) {
	$page_footer = get_field('landing_page_footer');
}else{
	//field is empty, do not show';
}
?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
<?php
if (get_field('disable_defaults')) {
	// remove all Theme Default scripts and content
}else{ ?>		
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-KQ2BB3');</script>
		<!-- End Google Tag Manager -->
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- SS -->
		<script type="text/javascript">
		    var _ss = _ss || [];
		    _ss.push(['_setDomain', 'https://koi-3QNHJKLJ4E.marketingautomation.services/net']);
		    _ss.push(['_setAccount', 'KOI-42O9KA253C']);
		    _ss.push(['_trackPageView']);
		(function() {
		    var ss = document.createElement('script');
		    ss.type = 'text/javascript'; ss.async = true;
		    ss.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'koi-3QNHJKLJ4E.marketingautomation.services/client/ss.js?ver=1.1.1';
		    var scr = document.getElementsByTagName('script')[0];
		    scr.parentNode.insertBefore(ss, scr);
		})();
		</script>
		<!-- SS -->
		<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('stylesheet_directory');?>/dist/assets/images/madico-favicon.png">
<?php } ?>
<?php
if (get_field('landing_page_meta')) {
		$landing_meta = get_field('landing_page_meta');
		$revised_meta = strip_tags($landing_meta, '<meta><title></title><style></style><script></script><link>');
		echo $revised_meta;
}else{
	//$page_meta = 'Landing Page Meta<br>';
}
?>
<?php
if (get_field('disable_wp_head')) {
	// do not process wp_head();
}else{
	wp_head();
}
?>
</head>
<body>
<?php
if (get_field('disable_defaults')) {
	// remove all Theme Default scripts and content
}else{ ?>	
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQ2BB3"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
<?php } ?>

<?php echo $page_header . $page_hero . $page_primary . $page_secondary . $page_tertiary . $page_footer; ?>

<?php
if (get_field('disable_defaults')) {
	// remove all Theme Default scripts and content
}else{ ?>	
<script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.auto.min.js"></script>
<!-- Vue.js v2.5.17 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.min.js"></script>
<!-- Axios v0.18.0 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
<?php } ?>
<?php
if (get_field('disable_wp_footer')) {
	// do not process wp_footer();
}else{
	wp_footer();
}
?>
<?php
if (get_field('disable_defaults')) {
// remove all Theme Default scripts and content
}else{ ?>	
<script src="//cdn.leadmanagerfx.com/js/mcfx/2201" type="text/javascript"></script>
<script type='text/javascript' src='//cdn.leadmanagerfx.com/phone/js/2201'></script>
<?php } ?>
</body>
</html>
