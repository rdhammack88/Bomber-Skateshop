if(document.title.includes('Find a store')) {
	var gMapAPIKey = 'AIzaSyBTlimL7hbG2VRKxmHD_f3xqd5EcRzNXJI';
	var map;

	function showInfo(location, address, contact) {
		var hours = '9am - 9pm';
		var storeName = 'Bomber Skateboard Shop - ' + location;
		var storeAddress = address;
		var contact = contact;
		document.getElementById('storeHours').innerHTML = hours;
		document.getElementById('storeName').innerHTML = storeName;
		document.getElementById('storeAddress').innerHTML = storeAddress;
		document.getElementById('storeContact').innerHTML = contact;

	}

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
		var storeOneInformation = 'Bomber Skate Shop<br>932 Russel Rd<br>Everman, Tx 76140';
		var storeTwoInformation = 'Bomber Skate Shop<br>416 Kennedy Dr<br>Crowley, Tx 76036';
		var shopOneLocation = {lat: 32.6296109, lng: -97.2960488};
		var shopTwoLocation = {lat: 32.5844943, lng: -97.3353952};
		var shopCentralLocation = {lat: 32.61399632177125, lng: -97.3189157078125};
		map = new google.maps.Map(document.getElementById('bss-map'), {
	//		center: {lat: 32.6296109, lng: -97.2960488},
			center: shopCentralLocation,
			zoom: 12,
			maxZoom: 15,
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			mapTypeControl: false,
			fullscreenControl: false,
			draggable: false,
			scrollwheel: false,
			streetViewControl: false
		});

	//	var marker = new Markers({lat: 32.6296109, lng: -97.2960488}, map, 'Bomber Skate Shop');

		var shopOneMarker = new google.maps.Marker({
			position: shopOneLocation,
			map: map,
			title: 'Bomber Skate Shop'
		});

		var shopTwoMarker = new google.maps.Marker({
			position: shopTwoLocation,
			map: map,
			title: 'Bomber Skate Shop'
		});

		var storeOneInfo = new google.maps.InfoWindow({
			content: storeOneInformation
		});
		var storeTwoInfo = new google.maps.InfoWindow({
			content: storeTwoInformation
		});


	//	marker.showInfo(storeInfo, map, marker);

		shopOneMarker.addListener('click', function() {
			storeOneInfo.open(map, shopOneMarker);
			var address = storeOneInformation.substr(storeOneInformation.indexOf('p')+5);
			var location = 'Everman';
			showInfo(location, address, '817-293-1234');
		});
		shopTwoMarker.addListener('click', function() {
			storeTwoInfo.open(map, shopTwoMarker);
			var address = storeTwoInformation.substr(storeTwoInformation.indexOf('p')+5);
			var location = 'Crowley';
			showInfo(location, address, '817-297-1234');
		});
	}
}

$(document).ready(function() {
//	(function() {
		
//	})();
	
	/* Check if user has closed .branding-ad banner since current session was opened */
	if(!sessionStorage.getItem('hideAd')) {
		$('.branding-ad').slideDown(1000);
	}
	/* On click of .branding-ad banner close, hide the banner and keep it hidden for duration of opened session */
	$('body').on('click', '.close', function() {
		$(this).parents('.branding-ad').slideUp(1000);
		sessionStorage.setItem('hideAd', 'true');
	});
	
	
	
});