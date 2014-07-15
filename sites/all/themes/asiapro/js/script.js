/*NOTE: THIS FILE IS LOADED ON EVERY PAGE*/

(function($) {
  /* Author: Dan Linn */
  $(window).resize(function(){
    if(!$(".mobileselect").length) {
      createMobileMenu();
    } else if ($(window).width()>=480) {
      $('#navigation ul').show();
      $('.mobileselect').hide();
    } else {
      $('#navigation ul').hide();
      $('.mobileselect').show();
    }
  });
  function createMobileMenu(){
    $('#navigation ul').mobileSelect({
      autoHide: true, // Hide the ul automatically
      defaultOption: "Navigation", // The default select option
      deviceWidth: 480, // The select will be added for screensizes smaller than this
      appendTo: '', // Used to place the drop-down in some location other than where the primary nav exists
      className: 'mobileselect', // The class name applied to the select element
      useWindowWidth: true // Use the width of the window instead of the width of the screen
    });
  }
  Drupal.behaviors.mobileMenu = {
    attach: function (context) {
      createMobileMenu();
    }
  }
})(jQuery);



jQuery(document).ready(function($) {
	
	//testing column classes
	$("#change li").click(function() {
		//console.log( index + ": " + $(this).text() );
		$("body").removeClass("cols134 cols14 cols1 cols34 cols4 cols");
		$("body").addClass($(this).text());
		$("html").toggleClass("touch");
	});
	
	$(".form-actions .form-submit").addClass("btn btn-primary btn-small");
	
	$(".scrollto").click(function(event) {
		event.preventDefault();
		$('body').stop().scrollTo($(this).attr("href"),{duration:100, offsetTop : '90'});
	});
	
	$(".col.c1").not(".open").click(function(e) {
		//console.log( index + ": " + $(this).text() );
		e.stopPropagation();
		$(this).addClass("open");
	});
	$(".col.c1 .closer").click(function(e) {
		e.stopPropagation();
		$(".col.c1").removeClass("open");
	});
	
	var navigation = responsiveNav("#nav", { // Selector: The ID of the wrapper
	  animate: true, // Boolean: Use CSS3 transitions, true or false
	  transition: 400, // Integer: Speed of the transition, in milliseconds
	  label: "Menu", // String: Label for the navigation toggle
	  insert: "after", // String: Insert the toggle before or after the navigation
	  customToggle: "", // Selector: Specify the ID of a custom toggle
	  openPos: "relative", // String: Position of the opened nav, relative or static
	  jsClass: "js", // String: 'JS enabled' class which is added to <html> el
	  init: function(){}, // Function: Init callback
	  open: function(){}, // Function: Open callback
	  close: function(){} // Function: Close callback
	});
	
	//scrollup - see plugins.js
	$(function () {$.scrollUp();});

	$(function () {
	  
	  var msie6 = $.browser == 'msie' && $.browser.version < 7;
	  
	  if (!msie6 && $('body').hasClass('admin-menu')) {
		var top = $('#header').offset().top - parseFloat($('#header').css('margin-top')) || 84
		$(window).scroll(function (event) {
		  // what the y position of the scroll is
		  var y = $(this).scrollTop();
		  
		  // whether that's below the form
		  if (y >= top) {
			// if so, ad the fixed class
			if (y >= (top+$("#content-header").height())) {$('body').addClass('col1fixed');} else {$('body').removeClass('col1fixed');}
			$('#header').addClass('fixed');
			$('#wrap').addClass('fixed');
		  } else {
			// otherwise remove it
			$('#header').removeClass('fixed');
			$('#wrap').removeClass('fixed');
			$('body').removeClass('col1fixed'); 
		  }
		});
	  }
	  
	});

});/*end document.ready*/

