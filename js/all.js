$(document).ready(function() {

	console.log('initializing js...');

	$('#header .menu').clone().addClass('mobile-menu').prependTo('#wrapper');

	//Initializing Mobile Menu
	$('#menu-toggle').click(function() {
		$('body').toggleClass('mobile-menu-active');
	})

}); 
