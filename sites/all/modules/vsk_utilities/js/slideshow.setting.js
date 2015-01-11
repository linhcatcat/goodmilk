Drupal.slideshow_setting = {};
Drupal.behaviors.slideshow_setting = function() {
	// initialize slideshow (Cycle)
	if ($('#Slides').length > 0) {
		$('#Slides').cycle({ 
			fx: 'fade',
			speed: 3000,
			timeout: 5000, 
			randomizeEffects: true,
			easing: 'easeOutCubic',
			pager: '#slidePager',
			cleartypeNoBg: true
		}); 
	}	
}

//$('#nav li ul.sub-menu').css({visibility: "visible",display: "none"});
$("ul.nice-menu-down > li").hover(function(){
	$(this).find('ul:first').css({visibility: "visible",display: "none"}).show(400);
},function(){
	$(this).find('ul:first').css({visibility: "hidden"});
}); 