		//set up markers 
		var myMarkers = {"markers": [
				{"latitude": "44.040079", "longitude":"5.394716", "icon": "img/map-marker2.png"}
			]
		};
		
		//set up map options
		$("#map").mapmarker({
			zoom	: 8,
			center	: 'Mon Ventoux',
			markers	: myMarkers
		});
	