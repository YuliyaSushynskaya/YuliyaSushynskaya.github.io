/* 
* удаление пробелов в начале и в конце строки
*
* x - строка (string)
*/
function myTrim(x) { 
    return x.replace(/^\s+|\s+$/gm,'');
}

/*
* проверка поля поиска перед отправкой данных на сервер
*/
function checkForm() {
	var text = document.getElementById("search_form");
	text = myTrim(text.value);
	if (text.length > 27) {
		alert("Вы ввели слишком длинный запрос. Длина запроса не должна превышать 27 символов!");
	} else if (text == "") {
		alert("Вы не ввели запрос!");
	} else {
		alert("Подождите, пожалуйста, ищем...");
	}
}

$(document).ready(function(){
	$('#sendMail').confirmMailto({ //подключаем плагин confirmmail
		message: 	'Вы уверены, что хотите отправить сообщение $to? ',
		to: 		'html',
		callback:	function(result){ //анонимная функция, вызовется после того, как пользователь нажал кнопку на запросе.
					if(result){
						alert('Спасибо!');
					}else{
						alert('Очень жаль...');
					}
				}
	});	
});
