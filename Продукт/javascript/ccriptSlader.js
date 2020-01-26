 	
	window.onload = function() { // запуск слайдера после загрузки документа
		slider.init();
		slider.right();
	
	};
	var slider = {
		
		slides1:['Советы опытного дизайнера помогут выбрать именно Ваш интерьер <span>&#x2764;</span>','При оформлении рассрочки мы состав индивидуальный график внесения платежей<span>&#x2764;</span>','Мебель на заказ точно впишется в Вашу комнату, даже если планировка далека от совершенства <span>&#x2764;</span>','Хотите заказать мебель, но бюджет ограничен? Теперь это возможно с рассрочкой!<span>&#x2764;</span>','Рассрочка – это не кредит! Вы сами выбираете, когда погашать рассрочку<span>&#x2764;</span>'],
		frame:0, // текущий кадр для отбражения - индекс картинки из массива
		
		set1: function(image1) { // установка нужного фона слайдеру
			document.getElementById("coment").innerHTML  = "<p>"+image1+"</p>";
		},
		
		init: function() { // запуск слайдера с картинкой с нулевым индексом
			this.set1(this.slides1[this.frame]);
		},
		left: function() { // крутим на один кадр влево
			this.frame--;
			if(this.frame < 0) {
			this.frame = this.slides1.length-1;
			}
			
			this.set1(this.slides1[this.frame]);
		},
		right: function() { // крутим на один кадр вправо
			this.frame++;
			if(this.frame == this.slides1.length) this.frame = 0;
			this.set1(this.slides1[this.frame]);		
		}
	};
	