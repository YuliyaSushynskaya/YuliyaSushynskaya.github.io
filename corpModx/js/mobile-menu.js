
	(function() {

		var hamburger = document.getElementsByClassName("menu-icon")[0];
		var leftMenu = document.getElementsByClassName("bypro_menu_points")[0];

		var num_leftPos = -100; // Текущая позиция мобильного меню

		// Выезд меню
		function leftMenuOn() {
			hamburger.removeEventListener("click", leftMenuOn);
			hamburger.classList.add("clicked");
			var menuIntervalOn = setInterval(function() {

				if(num_leftPos != 0) {

					num_leftPos += 5;
					leftMenu.style.left = num_leftPos + "%";
				} else {
					clearInterval(menuIntervalOn);
					num_leftPos = 0; 
					hamburger.addEventListener("click", leftMenuOff);
				}
			}, 12);
		}

		// Уход меню
		function leftMenuOff() {
			hamburger.removeEventListener("click", leftMenuOff);
			hamburger.classList.remove("clicked");
			var menuIntervalOff = setInterval(function() {

				if(num_leftPos != -100) {

					num_leftPos -= 5;
					leftMenu.style.left = num_leftPos + "%";
				} else {
					clearInterval(menuIntervalOff);
					num_leftPos = -100;
					hamburger.addEventListener("click", leftMenuOn);
				}

			}, 12);
		}

			hamburger.addEventListener("click", leftMenuOn);
	})();
