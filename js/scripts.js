$(function(){
	L.mapbox.accessToken = 'pk.eyJ1IjoibWlrZTAxMTAxMDExIiwiYSI6ImNpZnR1bXV6NzJueTVsZmtyc2V5YzQzZzAifQ.i9jTnV1WtjNSEZF3wB8rrQ';
	var map = L.mapbox.map('map', 'mapbox.streets', {zoomControl: false}).setView([43.7000, -79.4000], 15);
	
	map.dragging.disable();
	map.touchZoom.disable();
	map.doubleClickZoom.disable();
	map.scrollWheelZoom.disable();
	if (map.tap) map.tap.disable();

	L.mapbox.featureLayer({
	    type: 'Feature', 
	    geometry:	{type: 'Point', coordinates: [-79.4000, 43.7000]},
	    properties:	{title: 'Peregrine Espresso', description: '1718 14th St NW, Toronto, ON', 
	    			'marker-size': 'small', 'marker-color': '#FFFF66', 'marker-symbol': 'cafe'}
	}).addTo(map);

	//Click event to scroll to top
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});

});