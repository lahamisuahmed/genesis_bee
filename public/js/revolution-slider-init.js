$(function(){var revapi;

		jQuery(document).ready(function() {

			   revapi = jQuery('.tp-banner-full').revolution(
				{
					delay:9000,
					startwidth:1170,
					navigationType:'none',
					startheight:600,
					hideThumbs:10,
					fullWidth:"on",
					forceFullWidth:"on",
					fullScreen:"on",
					onHoverStop:"off",
					hideAllCaptionAtLimit: 767,
					hideTimerBar:"on"
				});

		});	//ready
		
		jQuery(document).ready(function() {

			   revapi = jQuery('.tp-limited').revolution(
				{
					delay:4000,
					startwidth:1170,
					startheight:450,
					hideThumbs:300,
					thumbWidth:150,
					thumbHeight:50,
					thumbAmount:3,
					navigationType:"none",
					navigationArrows:"solo",
					navigationStyle:"round",
					navigationHAlign:"center",
					navigationVAlign:"bottom",
					navigationHOffset:0,
					navigationVOffset:20,
					soloArrowLeftHalign:"center",
					soloArrowLeftValign:"bottom",
					soloArrowLeftHOffset:-20,
					soloArrowLeftVOffset:20,
					soloArrowRightHalign:"center",
					soloArrowRightValign:"bottom",
					soloArrowRightHOffset:30,
					soloArrowRightVOffset:20,
					touchenabled:"on",
					fullWidth:"on",
					onHoverStop:"on",
					hideTimerBar:"on"
				});

		});	//ready
		
		jQuery(document).ready(function() {

			   revapi = jQuery('.tp-boxed').revolution(
				{
					delay:4000,
					startwidth:1170,
					startheight:400,
					hideThumbs:300,
					thumbWidth:150,
					thumbHeight:50,
					thumbAmount:3,
					navigationType:"bullet",
					touchenabled:"on",
					onHoverStop:"on",
					hideTimerBar:"on",
					fullWidth:"off",
					forceFullWidth:"off",
					fullScreen:"off",
				});

		});	//ready
		
		
		jQuery(document).ready(function() {

			   revapi = jQuery('.kenburns-slideshow').revolution(
				{
					delay:9000,
					startwidth:1170,
					navigationType:'none',
					startheight:600,
					hideThumbs:10,
					fullWidth:"on",
					forceFullWidth:"on",
					fullScreen:"on",
					onHoverStop:"off",
					hideTimerBar:"on"
				});

		});	//ready
});
