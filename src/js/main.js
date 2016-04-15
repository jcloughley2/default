$(document).ready(function() {

	console.log('initializing js...'); 

	//Initializing Mobile Menu
	$('#menu-toggle').click(function() {
		$('body').toggleClass('mobile-menu-active');
	});

	$('.slider').slick({
		adaptiveHeight: true,
		dots: true,
		arrows: false,
		customPaging : function(slider, i) {
        	return '<span class="slick-dot"></span>';
    	},
    	fade: true,
    	mobileFirst: true,
    	prevArrow: '<div class="prev-arrow"></div>',
    	nextArrow: '<div class="next-arrow"></div>',
    	responsive: [
	    {
	      breakpoint: 1024,
	      settings: {
	        arrows: true
	      }
	    }
	  ]
	});

	$(window).scroll(function() {
    	var scrollPosition = $(document).scrollTop();
    	var footerHeight = $('.footer-text').height();
    	    console.log('footer-height:' + footerHeight);

    	if (scrollPosition == 0 ) {
    		$('.page-scroller').addClass('holding');
    	} else {
			$('.page-scroller').removeClass('holding');
    	}

    if ($(window).scrollTop() == $(document).height()-$(window).height()){
	    	console.log('bottom') ;
    		$('.page-scroller').css('bottom', footerHeight + 30 + 'px');
		} else {
			$('.page-scroller').css('bottom', '30px');
    	}
	});

	$('a[href*="#"]:not([href="#"])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				$('html, body').animate({
					scrollTop: target.offset().top
				}, 1000);
				return false;
			}
		}
	});
}); 


