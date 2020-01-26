/*-- pop-up PROFILES INFO --*/
(function() {
    var count = 0;
    var numb;
    function openfirst_line_profiles_info(event) {
        numb = event.srcElement.className.slice(-1);                                // Возьмём номер элемента из класса кнопки, по которой кликаем
        var din_class = document.getElementsByClassName('special_name_' + numb); 
        din_class[0].classList.remove('pro_out');
    	din_class[0].classList.add('first_line_profiles_info');
        console.log(din_class[0]);

    	$('body').addClass('modal-active');
    }
    
    function closeopenfirst_line_profiles_info(event) {
        numb = event.srcElement.className.slice(-1);
        var din_class = document.getElementsByClassName('special_name_' + numb);
        din_class[0].classList.add('pro_out');
      	$('body').removeClass('modal-active');
    }
    
    if( document.getElementsByClassName('first_profile') ) {
        
       var open_btn = document.getElementsByClassName('first_profile');

        
        for( var i = 0; i < open_btn.length; i++ ) {
            count = i;
            document.getElementsByClassName('first_profile_' + i)[0].addEventListener('click', openfirst_line_profiles_info);
            document.getElementsByClassName('popup_close_' + i)[0].addEventListener('click', closeopenfirst_line_profiles_info);

        }
    }
    	
})();
/*-- end pop-up PROFILES INFO --*/