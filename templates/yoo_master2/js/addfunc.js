/*jQuery(document).ready(function () {
jQuery(".group1").colorbox({
        rel: 'group1',
        maxWidth: "95%",
        maxHeight: "95%"
    });
 
 DisableColorboxMobile();
 
 //In case of window being resized
 jQuery(window).smartresize(function () {
     DisableColorboxMobile();
 });
window.addEventListener("orientationchange", function () {
    DisableColorboxMobile();
}, false);
 
 function DisableColorboxMobile() {
     if (matchMedia) {
         // Establishing media check
         width700Check = matchMedia("(max-width: 700px)");
         if (width700Check.matches) {
             jQuery.colorbox.remove();
         } else {
             jQuery(".group1").colorbox({
                 rel: 'group1',
                 maxWidth: "95%",
                 maxHeight: "95%"
             });
         }
 
     }
});
 }*/
 
 

	// Make ColorBox responsive
	jQuery.colorbox.settings.maxWidth  = '95%';
	jQuery.colorbox.settings.maxHeight = '95%';

	// ColorBox resize function
	var resizeTimer;
	function resizeColorBox()
	{
		if (resizeTimer) clearTimeout(resizeTimer);
		resizeTimer = setTimeout(function() {
				if (jQuery('#cboxOverlay').is(':visible')) {
						jQuery.colorbox.load(true);
				}
		}, 300);
	}

	// Resize ColorBox when resizing window or changing mobile device orientation
	jQuery(window).resize(resizeColorBox);
	window.addEventListener("orientationchange", resizeColorBox, false);
