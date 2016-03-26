$(document).ready(function() {

	console.log('initializing js...');

	$('#header .menu').clone().addClass('mobile-menu').prependTo('#wrapper');
	$('#employee-portal-link').clone().addClass('mobile-menu-item').appendTo('.mobile-menu');
	$('#contact-us-link').clone().addClass('mobile-menu-item').appendTo('.mobile-menu');

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
	});

	// $( window ).resize(function() {
 //  		$('.quadrant').each(function() {
 //  			var quadrantHeight = $(this).width();
 //  			$(this).height(quadrantHeight);
 //  		}); 
	// });
}); 
