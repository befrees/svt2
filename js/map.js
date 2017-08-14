function initialize() {
	var site_link = window.location.protocol + "//" + window.location.host + "/";

	/** Google Map */
	var isDraggable = !('ontouchstart' in document.documentElement);
	var mapOptions = {
		center: new google.maps.LatLng(50.453112, 30.375188),
		zoom: 15,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		zoomControl: true,
        scrollwheel: false,
        draggable: isDraggable,
	};
	var map = new google.maps.Map(document.getElementById("map"),mapOptions);	
	var mapInfo = [
		{
			pos: new google.maps.LatLng(50.453112, 30.375188),
			icon: 'marker.png',
			label: ''
		},
		{
			pos: new google.maps.LatLng(50.455233, 30.388108),
			icon: 'market.png',
			label: 'Новус'
		},
		{
			pos: new google.maps.LatLng(50.456658, 30.383349),
			icon: 'market.png',
			label: 'Сильпо и Фокстрот'
		},
		{
			pos: new google.maps.LatLng(50.455625, 30.380397),
			icon: 'school.png',
			label: 'Специализированная школа №40'
		},
		{
			pos: new google.maps.LatLng(50.456294, 30.380869),
			icon: 'rga.png',
			label: 'Святошинская РГА'
		},
		{
			pos: new google.maps.LatLng(50.453815, 30.369121),
			icon: 'school.png',
			label: 'Открытый международный университет развития человека "Украина"'
		},
		{
			pos: new google.maps.LatLng(50.453551, 30.365591),
			icon: 'school.png',
			label: 'Киевская гимназия восточных языков №1'
		},
		{
			pos: new google.maps.LatLng(50.450449, 30.377586),
			icon: 'medical.png',
			label: 'Киевская городская клиническая больница №5'
		},
		{
			pos: new google.maps.LatLng(50.456128, 30.364976),
			icon: 'metro.png',
			label: 'Станция метро Житомирская'
		},
		{
			pos: new google.maps.LatLng(50.457762, 30.390196),
			icon: 'metro.png',
			label: 'Станция метро Святошин'
		},
	];

	var i;

	for(i = 0; i < mapInfo.length; i++){
		var marker = new google.maps.Marker({
		   position: mapInfo[i].pos,
		   map: map,
		   icon: site_link + '/img/markers/' + mapInfo[i].icon,
	    });

		attachMsg(marker, mapInfo[i].label);
	}


	function attachMsg(marker, msg) {
	  var infowindow = new google.maps.InfoWindow({
	    content: msg
	  });

	  marker.addListener('click', function() {
	  	map.setCenter(marker.getPosition());
	    infowindow.open(marker.get('map'), marker);
	  });
	}

	/** Style map */
	var styles = [
	    {
	        "featureType": "all",
	        "elementType": "all",
	        "stylers": [
	            {
	                "hue": "#f6ecda"
	            },
	            {
	                "saturation": -100
	            },
	            {
	                "lightness": -30
	            }
	        ]
	    },
	    {
	        "featureType": "all",
	        "elementType": "labels.text.fill",
	        "stylers": [
	            {
	                "color": "#ffffff"
	            }
	        ]
	    },
	    {
	        "featureType": "landscape",
	        "elementType": "geometry",
	        "stylers": [
	            {
	                "color": "#cccccc"
	            }
	        ]
	    },
	    {
	        "featureType": "poi",
	        "elementType": "geometry.fill",
	        "stylers": [
	            {
	                "color": "#ffd4b8"
	            }
	        ]
	    },
	    {
	        "featureType": "poi",
	        "elementType": "geometry.stroke",
	        "stylers": [
	            {
	                "color": "#f6ecda"
	            }
	        ]
	    },
	    {
	        "featureType": "road",
	        "elementType": "all",
	        "stylers": [
	            {
	                "color": "#ffffff"
	            }
	        ]
	    },
	   
	];
	map.setOptions({styles: styles});

	/** Circles */
	var circlesCenter = new google.maps.LatLng(50.453112, 30.375188);
	var circle_700 = new google.maps.Circle({
      strokeWeight: 0,
      fillColor: '#dcdcdc',
      fillOpacity: 0.20,
      map: map,
      center: circlesCenter,
      radius: 505
    });

	var circle_500 = new google.maps.Circle({
      strokeWeight: 0,
      fillColor: '#dcdcdc',
      fillOpacity: 0.25,
      map: map,
      center: circlesCenter,
      radius:1200
    });

	var circle_300 = new google.maps.Circle({
      strokeWeight: 0,
      fillColor: '#cbcbcb',
      fillOpacity: 0.30,
      map: map,
      center: circlesCenter,
      radius:960
    });

    var circle_200 = new google.maps.Circle({
      strokeWeight: 0,
      fillColor: '#bababa',
      fillOpacity: 0.30,
      map: map,
      center: circlesCenter,
      radius:640
    });

    var circle_50 = new google.maps.Circle({
      strokeWeight: 0,
      fillColor: '#c9dcae',
      fillOpacity: 0.65,
      map: map,
      center: circlesCenter,
      radius:320
    });
}

google.maps.event.addDomListener(window, 'load', initialize);