/**
 * File navigation.js.
 */

jQuery(document).ready(function($) {
	console.log('Hello world');

	var button = $('.nav-toggle');

	console.log(button);

	$('.nav-toggle').click(function () {
		if ($(this).hasClass('nav-active')) {
			$(this).removeClass('nav-active');
			console.log('Close menu')
		} else {
			$(this).addClass('nav-active');
			console.log('Open menu')
		}
		if ($('#site-navigation').hasClass('nav-active')) {
			$('#site-navigation').removeClass('nav-active');
			console.log('Close menu')
		} else {
			$('#site-navigation').addClass('nav-active');
			console.log('Open menu')
		}
	});

	// Footer navigation
	$('.news h3').click(function() {
		$('.news ul').slideToggle('fast');
		$(this).toggleClass('rotate-arrow');
	});
	$('.company h3').click(function() {
		$('.company ul').slideToggle('fast');
		$(this).toggleClass('rotate-arrow');
	});
});
