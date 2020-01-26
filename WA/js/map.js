var colors = ['#7BAEE0', '#FF0000', '#00FF00', '#0000FF', '#FFFF00']; //массив цветов для подсветки границ стран
var map; //переменная, которая будет хранить объект карт
var mapMarkers = []; //пустой массив который будет хранить все маркеры
var countriesData = { //объект который будет хранить инфу о странах
	"belarus": {
		"center": {
			"lat": 53.917640,
			"lng": 27.537130,
			"zoom": 7,
		},
		"places": {
			"minsk": {
				"coordinates": {
					"lat": 53.917640,
					"lng": 27.537130,
				},
				"img": {
					"orig":"img/markers/minsk.jpg",
					"marker":"img/markers/map_marker_minsk.png",
				},
			},
			"grodno": {
				"coordinates": {
					"lat": 53.669824,
					"lng": 23.814496,
				}, 
				"img": {
					"orig":"img/markers/grodno.jpg",
					"marker":"img/markers/map_marker_grodno.png",
				},
			},
			"brest": {
				"coordinates": {
					"lat": 52.097081, 
					"lng": 23.731817,
				}, 
				"img": {
					"orig":"img/markers/brest.jpg",
					"marker":"img/markers/map_marker_brest.png",
				},
			},
			"mir": {
				"coordinates": {
					"lat": 53.451973, 
					"lng": 26.478038,
				}, 
				"img": {
					"orig":"img/markers/mir.jpg",
					"marker":"img/markers/map_marker_mir.png",
				},
			},
			"nesvizh": {
				"coordinates": {
					"lat": 53.223016, 
					"lng": 26.691801,
				}, 
				"img": {
					"orig":"img/markers/nesvizh.jpg",
					"marker":"img/markers/map_marker_nesvizh.png",
				},
			},
			"vitebsk": {
				"coordinates": {
					"lat": 55.185413, 
					"lng": 30.203947,
				}, 
				"img": {
					"orig":"img/markers/vitebsk.jpg",
					"marker":"img/markers/map_marker_vitebsk.png",
				},
			},
		},
	},
};

// Ждем полной загрузки страницы, после этого запускаем initMap()
google.maps.event.addDomListener(window, "load", initMap);

// initMap() - функция инициализации карты
function initMap() {
    // Координаты центра на карте.
    var centerLatLng = new google.maps.LatLng(25.389633, 17.648311);
 
    // Обязательные опции с которыми будет проинициализированна карта
    var mapOptions = {
        center: centerLatLng, // Координаты центра мы берем из переменной centerLatLng
        zoom: 2,               // Зум по умолчанию. Возможные значения от 0 до 21
        disableDefaultUI: true, // отключить стандартные кнопки управления
        zoomControl: true, // отобразить кнопки зума
        styles: [
		    {
		        "featureType": "landscape",
		        "elementType": "geometry",
		        "stylers": [
		            {
		                "hue": "#f3f4f4"
		            },
		            {
		                "saturation": -84
		            },
		            {
		                "lightness": 59
		            },
		            {
		                "visibility": "on"
		            }
		        ]
		    },
		    {
		        "featureType": "landscape",
		        "elementType": "labels",
		        "stylers": [
		            {
		                "hue": "#ffffff"
		            },
		            {
		                "saturation": -100
		            },
		            {
		                "lightness": 100
		            },
		            {
		                "visibility": "off"
		            }
		        ]
		    },
		    {
		        "featureType": "poi.park",
		        "elementType": "geometry",
		        "stylers": [
		            {
		                "hue": "#96c11f"
		            },
		            {
		                "saturation": 1
		            },
		            {
		                "lightness": -15
		            },
		            {
		                "visibility": "on"
		            }
		        ]
		    },
		    {
		        "featureType": "poi.school",
		        "elementType": "all",
		        "stylers": [
		            {
		                "hue": "#ccffff"
		            },
		            {
		                "saturation": -60
		            },
		            {
		                "lightness": 23
		            },
		            {
		                "visibility": "on"
		            }
		        ]
		    },
		    {
		        "featureType": "road",
		        "elementType": "geometry",
		        "stylers": [
		            {
		                "hue": "#ffffff"
		            },
		            {
		                "saturation": -100
		            },
		            {
		                "lightness": 100
		            },
		            {
		                "visibility": "on"
		            }
		        ]
		    },
		    {
		        "featureType": "road",
		        "elementType": "labels",
		        "stylers": [
		            {
		                "hue": "#bbbbbb"
		            },
		            {
		                "saturation": -100
		            },
		            {
		                "lightness": 26
		            },
		            {
		                "visibility": "on"
		            }
		        ]
		    },
		    {
		        "featureType": "road.highway",
		        "elementType": "geometry",
		        "stylers": [
		            {
		                "hue": "#ffdd00"
		            },
		            {
		                "saturation": 100
		            },
		            {
		                "lightness": -22
		            },
		            {
		                "visibility": "on"
		            }
		        ]
		    },
		    {
		        "featureType": "road.arterial",
		        "elementType": "geometry",
		        "stylers": [
		            {
		                "hue": "#ffdd00"
		            },
		            {
		                "saturation": 100
		            },
		            {
		                "lightness": -35
		            },
		            {
		                "visibility": "simplified"
		            }
		        ]
		    },
		    {
		        "featureType": "water",
		        "elementType": "all",
		        "stylers": [
		            {
		                "color": "#7baee0"
		            },
		            {
		                "visibility": "on"
		            }
		        ]
		    },
		    {
		        "featureType": "water",
		        "elementType": "labels",
		        "stylers": [
		            {
		                "hue": "#21bbef"
		            },
		            {
		                "saturation": 5
		            },
		            {
		                "lightness": -6
		            },
		            {
		                "visibility": "off"
		            }
		        ]
		    }
		]
    };

    // нашла код, который запрашивает базу с координатами границ стран
    var script = document.createElement('script');
    var url = ['https://www.googleapis.com/fusiontables/v1/query?'];
    url.push('sql=');
    var query = 'SELECT name, kml_4326 FROM 1foc3xO9DyfSIF6ofvN0kp2bxSfSeKog5FbdWdQ';
    var encodedQuery = encodeURIComponent(query);
    url.push(encodedQuery);
    url.push('&callback=drawMap');
    url.push('&key=AIzaSyAm9yWCV7JPCTHCJut8whOjARd7pwROFDQ');
    script.src = url.join('');
    var body = document.getElementsByTagName('body')[0];
    body.appendChild(script);

    // Создаем карту внутри элемента #map
    map = new google.maps.Map(document.getElementById("map"), mapOptions);
}

function constructNewCoordinates(polygon) {
  var newCoordinates = [];
  var coordinates = polygon['coordinates'][0];
  for (var i in coordinates) {
    newCoordinates.push(
        new google.maps.LatLng(coordinates[i][1], coordinates[i][0]));
  }
  return newCoordinates;
}
 
$(document).ready(function(){
	var mapDestination = $(".map").offset().top;
	$(".show-on-map").bind("click", function() {
		var lat = $(this).data("lat");
		var lng = $(this).data("lng");
		var zoom = parseInt($(this).data("zoom"));
		if (zoom <= 0 || zoom == undefined || zoom == null || isNaN(zoom)) {
			zoom = 10;
		}
		var marker = $(this).data("marker");
		$('html,body').stop().animate({
			scrollTop: mapDestination
		}, 1000, function() {
			map.setZoom(zoom);
			map.setCenter(new google.maps.LatLng( lat, lng ) );

			removeMarkers();
			addMarker(map, {lat: parseFloat(lat), lng: parseFloat(lng)}, marker)
		});
	})
});

/*Функция отрисовки карты
* 
* data - данные с границами карты
*/
function drawMap(data) {
  var rows = data['rows'];
  for (var i in rows) {
    if (rows[i][0] != 'Antarctica') {
      var newCoordinates = [];
      var geometries = rows[i][1]['geometries'];
      if (geometries) {
        for (var j in geometries) {
          newCoordinates.push(constructNewCoordinates(geometries[j]));
        }
      } else {
        newCoordinates = constructNewCoordinates(rows[i][1]['geometry']);
      }
      var randomnumber = Math.floor(Math.random() * 5); //цвет границ текущей страны
      var country = new google.maps.Polygon({
        paths: newCoordinates,
        strokeColor: colors[randomnumber],
        strokeOpacity: 0,
        strokeWeight: 3,
        fillColor: colors[randomnumber],
        fillOpacity: 0,
        country: rows[i][0],
        countryData: countriesData[rows[i][0].toLowerCase()] // добавляем в обьект страны нужные нам данные с координатами маркеров
      });

      country.setMap(map);

      google.maps.event.addListener(country, 'mouseover', function() {
        this.setOptions({strokeOpacity: 1}); // при наведении на страну - показать границу
      });
      google.maps.event.addListener(country, 'mouseout', function() {
        this.setOptions({strokeOpacity: 0}); // при уходе мыши - скрываем границы страны
      });
      google.maps.event.addListener(country, 'click', function() { // при клике на страну - покажем ее в большем зума и выставим маркеры по этой стране
      	if (this.countryData === undefined) { // если данных по стране нет - просто удалим все маркеры
      		removeMarkers();
      		return false;
      	}

        map.setZoom(this.countryData.center.zoom); // изменяем зум на специальный для страны
		map.setCenter(new google.maps.LatLng( this.countryData.center.lat, this.countryData.center.lng ) ); // смещаем центр на страну

		for(var place in this.countryData.places) { // добавляем маркеры для конкретной страны
			addMarker(map, {lat: this.countryData.places[place].coordinates.lat, lng: this.countryData.places[place].coordinates.lng}, this.countryData.places[place].img.marker);
		}
      });
    }
  }
}

/*
* Добавление маркера на карту
*
* map - объект карты
* coords - объект с координатам маркера
* marker - ссылка на картинку маркера
*/
function addMarker(map, coords, marker) {
  if (marker !== undefined && marker !== null) {
	  var marker = new google.maps.Marker({
	        position: coords,
	        map: map,
	        icon: marker,
	      });
	  mapMarkers.push(marker);
	}
}

/*удаляет все маркеры с карты*/
function removeMarkers(){
    for(i=0; i<mapMarkers.length; i++){
        mapMarkers[i].setMap(null);
    }
}
