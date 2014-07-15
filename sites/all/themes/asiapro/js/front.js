/*JS Specific to front page*/

jQuery(document).ready(function($) {
    $("#block-views-slider-block .view-content").royalSlider({
		//Doco: http://dimsemenov.com/plugins/royal-slider/documentation/
		autoScaleSlider: true,
    	keyboardNavEnabled: false,
		imgWidth: 960,
    	imgHeight: 425,
		imageScalePadding: 0,
		autoScaleSliderHeight: 425,
		autoScaleSliderWidth: 960,
    	autoScaleSlider: true,
		loop: true,
		fadeinLoadedSlide: true,
    	autoPlay: {
    		// autoplay options
    		enabled: true,
    		pauseOnHover: true,
			delay: 3000
    	}
    });  
	
	//setTimeout(function(){$('#featured').css("opacity",1);},100)
	
});