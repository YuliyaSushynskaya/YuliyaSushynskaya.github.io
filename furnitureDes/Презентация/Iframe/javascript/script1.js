	
	    function new2(){
			document.getElementById('idframe').style.display='block';
			document.getElementById('fon').style.filter= "blur(5px)";
			return true;
		}
		
	
		
		//карта
		var map;
		var markers = [];

		function initMap() {
			var haightAshbury = {lat: 53.769, lng: 27.446};
			map = new google.maps.Map(document.getElementById('map'), {
				zoom: 3,
		        center: haightAshbury,
				gestureHandling: 'cooperative', //обработка жестов(для моб. устройств)двумя пальцами – чтобы двигать карту.
				mapTypeControl: true, //меняем тип карты
				mapTypeControlOptions: { 
					style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
					mapTypeIds: ['roadmap', 'terrain']
				}
			});
			//будет подключена геолокация, ограничение клика маркеров в рамках Беларуси, маркет будет другой(свой)
				
			//создание маркеров
			map.addListener('click', function(event) {
				addMarker(event.latLng);
			});
			addMarker(haightAshbury);
		}

		// Заносим в массив
		function addMarker(location) {
			var marker = new google.maps.Marker({
				position: location,
				map: map,
				draggable:true //перемещение маркера
			});
			markers.push(marker);
		}

		// маркеры не удаляются
		function setMapOnAll(map) {
			for (var i = 0; i < markers.length; i++) {
				markers[i].setMap(map);
			}
		}
		//создание
		function clearMarkers() {
			setMapOnAll(null);
		}

		// удаление
		function deleteMarkers() {
			clearMarkers();
			markers = [];
		}
 
	//инфогафика
	function value(){
		document.getElementById('color').style.background='#008080';
    
	}