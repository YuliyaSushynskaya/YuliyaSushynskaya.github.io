(function () {
	var submenu = document.getElementsByClassName('services_submenu')[0];
	var submenu_points = submenu.getElementsByTagName('li');
	var content_wrapper = document.getElementById('services_content_wrapper_ID');
	var xhr = new XMLHttpRequest();
	var idSubmenuPoint; 																							// Для записи активного пункта меню

	function subMenuPoints() {
		
		var class_value = content_wrapper.getElementsByTagName('h1')[0].className;
		for(var j = 0; j < submenu_points.length; j++) {

			if(submenu_points[j].getAttribute('name') == class_value) {
				submenu_points[j].getElementsByClassName('special_contact')[0].classList.add('active');
			} else {
				submenu_points[j].getElementsByClassName('special_contact')[0].classList.remove('active');
			}
		}
		idSubmenuPoint = class_value;
	}

	function LoadContent() {
		if((xhr.readyState == 4) && (xhr.status == 200)) {
			content_wrapper.innerHTML = xhr.responseText;

			subMenuPoints();

			if(idSubmenuPoint == "outsorsing") {
				loadPopup();
			}
		} 
	}

	function Send(event) {
		var name = "name=" + event.target.getAttribute('name');

		xhr.open("POST", "php/services.php", true);
		xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xhr.send(name);
		xhr.addEventListener("readystatechange", LoadContent); 
	}

	for (var i = 0; i < submenu_points.length; i++) {
		submenu_points[i].addEventListener('click', Send);
	}
})();