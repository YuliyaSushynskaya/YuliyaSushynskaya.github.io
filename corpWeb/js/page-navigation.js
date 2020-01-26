(function() {

	var scrollHeight = Math.max(																	// Высота прокрутки
	  document.body.scrollHeight, document.documentElement.scrollHeight,
	  document.body.offsetHeight, document.documentElement.offsetHeight,
	  document.body.clientHeight, document.documentElement.clientHeight
	);

	var scrollTop = window.pageYOffset || document.documentElement.scrollTop;						// Текущая прокрутка

	var lights_mass = document.getElementsByClassName('special_contact');							// Массив ламп

	var submenu = document.getElementsByClassName('services_submenu')[0];
	var submenu_points = submenu.getElementsByTagName('li');

	var y = 10; 	// Один шаг смещения в px

	var lightOn_onClick = 0; // переменная для определения совершается ли прокрутка от клика, если да то равна 1

					// Кнопки
					var button_outsorsing;
					var button_web;
					var button_security;
					var button_equipment;
					var button_software;

					// Лампочки
					var light_outsorsing;
					var light_web;
					var light_security;
					var light_equipment;
					var light_software;

					// Блоки
					var block_outsorsing;
					var block_web;
					var block_security;
					var block_equipment;
					var block_software;

					// Top блоков
					var block_outsorsing_top;
					var block_web_top;
					var block_security_top;
					var block_equipment_top;
					var block_software_top;

					// Bottom блоков
					var block_outsorsing_bottom;
					var block_web_bottom;
					var block_security_bottom;
					var block_equipment_bottom;
					var block_software_bottom; 

	/*---------------------------- Назначение и удаление обработчиков клика -----------------------*/
	function clickOn(elem) {
		elem.addEventListener('click', blockFind);
	}

	function clickOff(elem) {
		elem.removeEventListener('click', blockFind);
	}

	function AllOn() {
		if(button_outsorsing) clickOn(button_outsorsing);
		if(light_outsorsing) clickOn(light_outsorsing);

		if(button_web) clickOn(button_web);
		if(light_web) clickOn(light_web);

		if(button_security) clickOn(button_security);
		if(light_security) clickOn(light_security);

		if(button_equipment) clickOn(button_equipment);
		if(light_equipment) clickOn(light_equipment);

		if(button_software) clickOn(button_software);
		if(light_software) clickOn(light_software);
	}

	function AllOff() {
		if(button_outsorsing) clickOff(button_outsorsing);
		if(light_outsorsing) clickOff(light_outsorsing);

		if(button_web) clickOff(button_web);
		if(light_web) clickOff(light_web);

		if(button_security) clickOff(button_security);
		if(light_security) clickOff(light_security);

		if(button_equipment) clickOff(button_equipment);
		if(light_equipment) clickOff(light_equipment);

		if(button_software) clickOff(button_software);
		if(light_software) clickOff(light_software);
	}
	/*------------------------ END Назначение и удаление обработчиков клика -----------------------*/

	/*---------------------- Находим кнопки подменю и вешаем обработку клика -----------------------------------*/
				
	for(var j = 0; j < submenu_points.length; j++) {

		switch( submenu_points[j].getAttribute('name') ) {
			case 'outsorsing':
				button_outsorsing = submenu_points[j];
				light_outsorsing = submenu_points[j].getElementsByClassName('special_contact')[0];
				block_outsorsing = document.getElementById(button_outsorsing.getAttribute('name') + '_wrapper');

				clickOn(button_outsorsing);
				clickOn(light_outsorsing);
			break;
			case 'web':
				button_web = submenu_points[j];
				light_web = submenu_points[j].getElementsByClassName('special_contact')[0];
				block_web = document.getElementById(button_web.getAttribute('name') + '_wrapper');

				clickOn(button_web);
				clickOn(light_web);
			break;
			case 'security':
				button_security = submenu_points[j];
				light_security = submenu_points[j].getElementsByClassName('special_contact')[0];
				block_security = document.getElementById(button_security.getAttribute('name') + '_wrapper');

				clickOn(button_security);
				clickOn(light_security);
			break;
			case 'equipment':
				button_equipment = submenu_points[j];
				light_equipment = submenu_points[j].getElementsByClassName('special_contact')[0];
				block_equipment = document.getElementById(button_equipment.getAttribute('name') + '_wrapper');

				clickOn(button_equipment);
				clickOn(light_equipment);
			break;
			case 'software':
				button_software = submenu_points[j];
				light_software = submenu_points[j].getElementsByClassName('special_contact')[0];
				block_software = document.getElementById(button_software.getAttribute('name') + '_wrapper');

				clickOn(button_software);
				clickOn(light_software);
			break;
		}
	}	
	/*--------------------- END Находим кнопки подменю и вешаем обработку клика ------------------------------------*/

	/*-------------------------------------- Вкл - Выкл лампочек на кнопках ----------------------------------------*/

	function lightsOnOff(this_id) {

		for(var x = 0; x < lights_mass.length; x++) {

			if(lights_mass[x].id == this_id) {
				lights_mass[x].classList.add('active');
			} else {
				lights_mass[x].classList.remove('active');
			}

		}
	}

	/*------------------------------------ END Вкл - Выкл лампочек на кнопках --------------------------------------*/

	/*------------------- Находим блоки подразделений на странице и их координаты и скролим ------------------------*/

	// Если существует блок с этим id, то вернём его координеты top
	function blockFind(event) {
		var name = event.target.getAttribute('name');
		var target_name = name + '_wrapper';
		var this_light_id = 'light_' + name;

		if( document.getElementById( target_name )) {
			
			var target_coord = document.getElementById(target_name).getBoundingClientRect().top;

			/*-------------- Скроллинг к нужному месту -----------------*/
			var scrollIntervalUp, scrollIntervalDown;

			if(target_coord > 120) {
			    console.log(target_coord);
				lightOn_onClick = 1;
				AllOff();
				lightsOnOff(this_light_id);
				scrollIntervalDown = setInterval(function() {
					target_coord = document.getElementById(target_name).getBoundingClientRect().top;

					if(target_coord > 120) {
						window.scrollTo(0, scrollTop);
						scrollTop += 20;
					} else {
						clearInterval(scrollIntervalDown);
						scrollTop = window.pageYOffset || document.documentElement.scrollTop;
						AllOn();
						lightOn_onClick = 0;
					}

				}, 1);

			} else if(target_coord <= 90) {
				lightOn_onClick = 1;
				AllOff();
				lightsOnOff(this_light_id);
				scrollIntervalUp = setInterval(function() {
					target_coord = document.getElementById(target_name).getBoundingClientRect().top;

					if(target_coord < 90) {
						window.scrollTo(0, scrollTop);
						scrollTop -= 20;
					} else {
						clearInterval(scrollIntervalUp);
						scrollTop = window.pageYOffset || document.documentElement.scrollTop;
						AllOn();
						lightOn_onClick = 0;
					}

				}, 1);

			}
			/*------------ END  Скроллинг к нужному месту --------------*/

		} else {
			return null;
		}
	}

	window.onscroll = function() {
		scrollTop = window.pageYOffset || document.documentElement.scrollTop;

		if(block_outsorsing) {
			block_outsorsing_top = block_outsorsing.getBoundingClientRect().top;
			block_outsorsing_bottom = block_outsorsing.getBoundingClientRect().bottom;
			if( block_outsorsing_top <= 350 && block_outsorsing_bottom >= 350 && lightOn_onClick == 0) {
				lightsOnOff('light_outsorsing');
			}
		}
		if(block_web) {
			block_web_top = block_web.getBoundingClientRect().top;
			block_web_bottom = block_web.getBoundingClientRect().bottom;
			if( block_web_top <= 350 && block_web_bottom >= 350 && lightOn_onClick == 0) {
				lightsOnOff('light_web');
			}
		}
		if(block_security) {
			block_security_top = block_security.getBoundingClientRect().top;
			block_security_bottom = block_security.getBoundingClientRect().bottom;
			if( block_security_top <= 350 && block_security_bottom >= 350 && lightOn_onClick == 0) {
				lightsOnOff('light_security');
			}
		} 
		if(block_equipment) {
			block_equipment_top = block_equipment.getBoundingClientRect().top;
			block_equipment_bottom = block_equipment.getBoundingClientRect().bottom;
			if( block_equipment_top <= 350 && block_equipment_bottom >= 350 && lightOn_onClick == 0) {
				lightsOnOff('light_equipment');
			}
		}
		if(block_software) {
			block_software_top = block_software.getBoundingClientRect().top;
			block_software_bottom = block_software.getBoundingClientRect().bottom;
			if( block_software_top <= 350 && block_software_bottom >= 350 && lightOn_onClick == 0) {
				lightsOnOff('light_software');
			}
		}
	
	}
})();