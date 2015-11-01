$(function(){
	L.mapbox.accessToken = 'pk.eyJ1IjoibWlrZTAxMTAxMDExIiwiYSI6ImNpZnR1bXV6NzJueTVsZmtyc2V5YzQzZzAifQ.i9jTnV1WtjNSEZF3wB8rrQ';
	var map = L.mapbox.map('map', 'mapbox.streets').setView([43.7000, -79.4000], 10);

	//Click event to scroll to top
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});

});