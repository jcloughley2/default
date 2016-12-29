$(document).ready(function() {

	//Initializing Mobile Menu
	
	$('#menu-toggle').click(function() {
		$('body').toggleClass('mobile-menu-active');
	});

	$('.slider .xoxo').slick({
		adaptiveHeight: false,
		dots: true,
		arrows: false,
		customPaging : function(slider, i) {
        	return '<span class="slick-dot"></span>';
    	},
    	pauseOnHover: true,
    	pauseOnDotsHover:  true,
    	fade: true,
    	autoplay: true,
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

    	if (scrollPosition == 0 ) {
    		$('.page-scroller').addClass('holding');
    	} else {
			$('.page-scroller').removeClass('holding');
    	}

    if ($(window).scrollTop() == $(document).height()-$(window).height()){
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


