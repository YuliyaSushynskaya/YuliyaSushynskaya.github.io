
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////			REVIEWS 			//////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////

(function() {

/*--- Utils ---*/
function noPX(str) {
	if(typeof(str) == 'string') {
		return str.replace('px', '') * 1;
	} else {
		return str * 1;
	}
}
/*--- end Utils ---*/

	var leftButton = document.getElementsByClassName('about_slider_reviews_left')[0];
	var leftButtonI = document.getElementsByClassName('about_slider_arrow_left')[0];
	var rightButton = document.getElementsByClassName('about_slider_reviews_right')[0];
	var rightButtonI = document.getElementsByClassName('about_slider_arrow_right')[0];

	var tape = document.getElementById('about_reviews_ul'); 

	var left = 1, right = 1, step = 1;

	var parent_row = document.getElementsByClassName('about_slider_reviews_wrapper')[0]; 	// блок для сравнения ширины
	var parent_row_width = parent_row.getBoundingClientRect().width;							// ширина блока для сравнения
	var img_wrapper = document.getElementsByClassName('about_slider_reviews')[0];			// родительский блок для картинок
	var img_wrapper_left = img_wrapper.getBoundingClientRect().left;							// найдём позицию левого края обёртки																		// координата x левого края родителя
	var img_wrapper_width = img_wrapper.getBoundingClientRect().width; 							// ширина родителя

	var img_mass = document.getElementsByClassName('img_reviews'); 						// массив картинок
	var img_width = img_mass[0].getBoundingClientRect().width;									// ширина одной картинки без отступов

	var img_margin = window.getComputedStyle(img_mass[0], null).marginLeft 						// получим значение margin одной картинки
		img_margin = noPX(img_margin);															// уберём 'px'

	var img_wrapper_calc;

	var interval = (img_mass[1].getBoundingClientRect().left - img_margin) - (img_mass[0].getBoundingClientRect().right + img_margin);	// растояние между изображениями 'px'

	var distance = img_mass[1].getBoundingClientRect().left - img_mass[0].getBoundingClientRect().left;	// расстояние между левыми краями двух соседних картинок

	function calculateImgQuantity() {														// расчитаем, сколько картинок влезает в обёртку целиком
		return Math.floor(img_wrapper_width / distance) - 1;
	}

	var quantity_of_img = calculateImgQuantity();											// максимальное количество картинок кот. влезают в родителя

	var quantity_of_steps = Math.floor(img_mass.length / quantity_of_img);					// количество шагов кот. можно сделать

/*--- Отзывчивое позиционирование --*/

	function calculateWidth() {																// расчитаем ширину блока для количества картинок кот. в него помещаются
		img_wrapper_calc = distance * quantity_of_img; 																								
		img_wrapper.style.width = img_wrapper_calc + 'px';
	}


	function forTV() {																// если экран широкий и все картинки влазят...
		if(quantity_of_img >= img_mass.length) {
			tape.style.width = '100%';
			tape.style.textAlign = 'center';
		}
	}

	forTV(calculateImgQuantity);
	calculateWidth();
/*--- end Отзывчивое позиционирование --*/


/*--- Передвижение ---*/

  /*-- Влево --*/
	function oneStepLeft() {
		left += 10;
		tape.style.marginLeft = left + 'px';
	}

	function takeLeft() {
		var intervalLeft = setInterval(function() {
			if( left < -(distance * quantity_of_img) * (step - 2)) {
				oneStepLeft();
				rightButton.removeEventListener('click', takeRight);
				leftButton.removeEventListener('click', takeLeft);

				rightButtonI.removeEventListener('click', takeRight);
				leftButtonI.removeEventListener('click', takeLeft);
			} else {
				clearInterval(intervalLeft);
				step -= 1;
				if(step > 1) {
					rightButton.addEventListener('click', takeRight);
					leftButton.addEventListener('click', takeLeft);

					rightButtonI.addEventListener('click', takeRight);
					leftButtonI.addEventListener('click', takeLeft);
				} else {
					leftButton.removeEventListener('click', takeLeft);
					rightButton.addEventListener('click', takeRight);

					leftButtonI.removeEventListener('click', takeLeft);
					rightButtonI.addEventListener('click', takeRight);
				}
			}
		}, 10);
	}

  /*-- Вправо --*/
	function oneStepRight() {
		left -= 10; //35.96;
		tape.style.marginLeft = left + 'px';
	}

	function takeRight() {
		var intervalRight = setInterval(function() {
			if( left > -( distance * quantity_of_img) * step + interval) {
				oneStepRight();
				rightButton.removeEventListener('click', takeRight);
				leftButton.removeEventListener('click', takeLeft);

				rightButtonI.removeEventListener('click', takeRight);
				leftButtonI.removeEventListener('click', takeLeft);
			} else {
				clearInterval(intervalRight);
				step += 1;
				if(step <= quantity_of_steps) {
					rightButton.addEventListener('click', takeRight);
					leftButton.addEventListener('click', takeLeft);

					rightButtonI.addEventListener('click', takeRight);
					leftButtonI.addEventListener('click', takeLeft);
				} else {
					rightButton.removeEventListener('click', takeRight);
					leftButton.addEventListener('click', takeLeft);

					rightButtonI.removeEventListener('click', takeRight);
					leftButtonI.addEventListener('click', takeLeft);
				}
			}
		}, 10);
	}

	
	rightButton.addEventListener('click', takeRight);
	rightButtonI.addEventListener('click', takeRight);

/*--- end Передвижение ---*/

})();
