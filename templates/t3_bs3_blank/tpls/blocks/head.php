<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

<!-- META FOR IOS & HANDHELD -->
<?php if ($this->getParam('responsive', 1)): ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<style type="text/stylesheet">
		@-webkit-viewport   { width: device-width; }
		@-moz-viewport      { width: device-width; }
		@-ms-viewport       { width: device-width; }
		@-o-viewport        { width: device-width; }
		@viewport           { width: device-width; }
	</style>
	<script type="text/javascript">
		//<![CDATA[
		if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
			var msViewportStyle = document.createElement("style");
			msViewportStyle.appendChild(
				document.createTextNode("@-ms-viewport{width:auto!important}")
			);
			document.getElementsByTagName("head")[0].appendChild(msViewportStyle);
		}
		//]]>
	</script>
<?php endif ?>
<meta name="HandheldFriendly" content="true"/>
<meta name="apple-mobile-web-app-capable" content="YES"/>
<!-- //META FOR IOS & HANDHELD -->

<?php
// SYSTEM CSS
$this->addStyleSheet(JURI::base(true) . '/templates/system/css/system.css');
$this->addStyleSheet(JURI::base(true) . '/templates/t3_bs3_blank/css/mycss.css');
$this->addStyleSheet(JURI::base(true) . '/media/system/js/owl/assets/owl.carousel.css');
$this->addStyleSheet(JURI::base(true) . '/templates/t3_bs3_blank/css/galery/css/bottom.css');
$this->addStyleSheet(JURI::base(true) . '/templates/t3_bs3_blank/css/galery/css/base.css');

?>

<?php
// T3 BASE HEAD
$this->addHead();
$this->addScript('/media/system/js/owl/owl.carousel.min.js');

//slider+galery
$this->addScript('/media/system/js/gal/lib/jquery.jcarousel.min.js');
$this->addScript('/media/system/js/gal/lib/jquery.pikachoose.min.js');
$this->addScript('/media/system/js/gal/lib/jquery.touchwipe.min.js');
$this->addScript('/media/system/js/addfunc.js');
?>
<script language="javascript">
			jQuery(document).ready(function (){
					jQuery("#pikame").PikaChoose({showTooltips:true});
					//jQuery('.pikachoose').css('display', 'block');
					jQuery('.pikachoose').fadeIn('slow');
				});

</script>
<script>
 jQuery(document).ready(function(){
  jQuery('.cck_value_field_x').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
});
jQuery('.owl-stage-outer').fadeIn('slow');
 });
 </script>
<?php
// CUSTOM CSS
if (is_file(T3_TEMPLATE_PATH . '/css/custom.css')) {
	$this->addStyleSheet(T3_TEMPLATE_URL . '/css/custom.css');
}
?>

<!-- Le HTML5 shim and media query for IE8 support -->
<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<script type="text/javascript" src="<?php echo T3_URL ?>/js/respond.min.js"></script>
<![endif]-->

<!-- You can add Google Analytics here or use T3 Injection feature -->
