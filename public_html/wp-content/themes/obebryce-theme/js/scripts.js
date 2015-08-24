// Header Height
headerHeight = jQuery('#header').height();

jQuery(window).load(function(){
	
	jQuery('#header').addClass('loaded');

});

jQuery(window).scroll(function(){
	
	scrollTop = jQuery(this).scrollTop();

	if( scrollTop > 20 ) {
		jQuery('#header').addClass('scrolled');
	} else {
		jQuery('#header').removeClass('scrolled');
	}


});