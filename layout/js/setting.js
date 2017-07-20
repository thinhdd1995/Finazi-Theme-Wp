$(document).ready(function() {
	'use strict';
	$('.scroll').click(function () {
		console.log("Clicked");
		$('html, body').animate({
			scrollTop: $('#top-bar').offset().top,
			duration: 2000
		});
	});
});