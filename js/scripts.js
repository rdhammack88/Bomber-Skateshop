var gMapAPIKey = 'AIzaSyBTlimL7hbG2VRKxmHD_f3xqd5EcRzNXJI';

function Markers(coords, map, title) {
//	this.coords = coords;
//	this.map = map;
//	this.title = title
	this.marker = new google.maps.Marker({
		position: coords,
		map: map,
		title: title
	})
}

Markers.prototype.showInfo = function(store, map, marker) {
	this.addListener('click', function() {
		store.open(map, marker);
	})
}


function initMap() {
	var storeInformation = 'Bomber Skate Shop<br>932 Russel Rd<br>Everman, Tx 76140';
	var shopLocation = {lat: 32.6296109, lng: -97.2960488};
	var map = new google.maps.Map(document.getElementById('bss-map'), {
//		center: {lat: 32.6296109, lng: -97.2960488},
		center: shopLocation,
		zoom: 11,
		maxZoom: 15,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		mapTypeControl: false,
		fullscreenControl: false,
		draggable: false,
		scrollwheel: false,
		streetViewControl: false
	});
	
	var marker = new Markers({lat: 32.6296109, lng: -97.2960488}, map, 'Bomber Skate Shop');
	
	var marker = new google.maps.Marker({
		position: shopLocation,
		map: map,
		title: 'Bomber Skate Shop'
	});
	
	var storeInfo = new google.maps.InfoWindow({
		content: storeInformation
	});
	
//	marker.showInfo(storeInfo, map, marker);
	
	marker.addListener('click', function() {
		storeInfo.open(map, marker);
	});
}

$(document).ready(function() {
//	(function() {
		
//	})();
	
	$('body').on('click', '.close', function() {
		$(this).parents('.branding-ad').slideUp();
	});
	
	
});