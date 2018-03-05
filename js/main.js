(function ($) {
	"use strict";

    jQuery(document).ready(function($){


        $(".embed-responsive iframe").addClass("embed-responsive-item");
        $(".carousel-inner .item:first-child").addClass("active");
        
        $('[data-toggle="tooltip"]').tooltip();
        $(".logo_menu_area").sticky({topSpacing:0});
        $('li.smooth-menu a').bind('click',function(event){
			var $anchor= $(this);
			var headerH='60';
			$('html,body').stop().animate({
				scrollTop:$($anchor.attr('href')).offset().top - headerH + "px"
			},1000,'easeInOutExpo');
			
			event.preventDefault();
		});
		
		$('body').scrollspy({
			target:'.navbar-collapse',
			offset:95
		});;
		$('.paralax_bg').scrolly({bgParallax: true});

        new WOW().init();


    });


    $(window).load(function(){
          $('#preloader').fadeOut(); 
          $('.preloader_spinner').delay(222350).fadeOut('slow'); 
          $("body").removeClass("preloader_active");
        
        
    });


}(jQuery));	