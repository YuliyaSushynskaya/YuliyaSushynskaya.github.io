/*--- Форма личного кабинета ---*/
function addOneOrder(number, text, urgency) {
    
    // Получаем дату и время
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth() + 1;
    var yyyy = today.getFullYear();
    
    var hh = today.getHours();
    var min = today.getMinutes();
    var ss = today.getSeconds();
    
    if(dd < 10) { dd = '0' + dd } 
    if(mm < 10) { mm = '0' + mm } 
    
    if(hh < 10) { hh = '0' + hh }
    if(min < 10) { min = '0' + min }
    if(ss < 10) { ss = '0' + ss }
    
    var fullData = dd + '.' + mm + '.' + yyyy;
    var fullTime = hh + ':' + min + ':' + ss;
    
    // Создадим оболочку для новой заявки в виде аккордиона
   var new_div = document.createElement('div');      
   new_div.classList.add('accordion');
   new_div.id = 'accordion' + number;
   new_div.innerHTML = '<!-- ОДНА ЗАЯВКА -->'+
                      '<div class="card">'+
                        '<div class="card-header d-block d-lg-none" id="heading' + number + '">'+

                            '<button class="btn alert-danger" type="button" data-toggle="collapse" data-target="#collapse' + number + '" aria-expanded="true" aria-controls="collapse' + number + '" style="width: 100%;">'+
                              '<div class="row">'+
                                  '<div class="col-6 text-left">'+
                                     '<p>' + fullData + '</p>'+
                                  '</div>'+
                                  '<div class="col-6 text-left">'+
                                      '<p>открыто</p>'+
                                  '</div>'+
                              '</div>'+
                            '</button>'+

                        '</div>'+
                    
                        '<div id="collapse' + number + '" class="collapse show alert-danger cabinet_special_show" aria-labelledby="heading' + number + '" data-parent="#accordion' + number + '">'+
                          '<div class="card-body py-0 " style="padding: .88rem;">'+
                            
                            '<!-- Тело таблицы -->'+
                            '<div class="row">'+
                                '<div class="col-12 col-xl-6 cabinet_que">'+
                                    '<div class="row">'+
                                        '<div class="col-4 col-lg-3">'+
                                            '<p>№ <span class="number">' + number + '</span></p>'+
                                        '</div>'+
                                       ' <div class="col-3  d-none d-lg-block">'+
                                            '<p>Дата заявки: <span>' + fullData + '</span></p>'+
                                        '</div>'+
                                        '<div class="col-4 col-lg-3">'+
                                            '<p>Время: </p>'+
                                            '<span>' + fullTime + '</span>'+
                                        '</div>'+
                                        '<div class="col-4 col-lg-3 pl-0 text-center">'+
                                            '<p>Срочность:</p>'+
                                            '<span>' + urgency + '</span>'+
                                       ' </div>'+
                                    '</div>'+
                                    '<div class="row">'+
                                        '<div class="col-12">'+
                                            '<p>Описание:</p>'+
                                            '<span>' + text + '</span>'+
                                        '</div>'+
                                    '</div>'+
                                    '<!-- Отступ -->'+
                                      '<div class="row d-block">'+
                                        '<div class="col-12 mt-2"></div>'+
                                      '</div>'+
                                      '<!------------>'+
                                '</div>'+
                                
                                '<div class="col-12 col-xl-6 cabinet_ans">'+
                                        
                                   '<div class="row">'+
                                        '<div class="col-12">'+
                                            '<p>Статус: <span>открыто</span></p>'+
                                        '</div>'+
                                    '</div>'+
                                    
                                    '<!-- Отступ -->'+
                                    '<div class="row d-block">'+
                                        '<div class="col-12 my-1 my-md-4"></div>'+
                                    '</div>'+
                                    '<!------------>'+
                                    
                                    '<div class="row">'+
                                        '<div class="col-12 text-center">'+
                                            '<h5>Заявка ждёт выполнения</h5>'+
                                        '</div>'+
                                    '</div>'+
                                    
                                    '<!-- Отступ -->'+
                                    '<div class="row d-block">'+
                                        '<div class="col-12 my-1 my-md-4"></div>'+
                                    '</div>'+
                                    '<!------------>'+
                                    
                                '</div>'+
                            '</div>'+
                           ' <!-- end Тело таблицы -->'+
                            
                          '</div>'+
                        '</div>'+
                    '</div>'+
            '<!-- END ОДНА ЗАЯВКА -->'+
            '<!-- Отступ -->'+
               '<div class="row d-block">'+
                 '<div class="col-12 mt-2"></div>'+
               '</div>'+
              '<!------------>';
              
    return new_div;
}


function orderFormCheck() {
    var form = document.getElementById('user_order_form');
    var textArea = form.order;
    var frame = document.getElementById('frame_error');
    var table = document.getElementsByClassName('cabinet_table')[0];     // Таблица с заявками
    var urgency = form.getElementsByTagName('select')[0].value;          // срочность 

    // Определим номер новой заявки
    var number = document.getElementsByClassName('number').length;       // последний номер
    if(number != 0) { 
        number = number + 1;
    } else { 
        
        number = 1;
        var h5 = table.getElementsByTagName('h5')[0];
        table.removeChild(h5);                                          // Если ещё не было заявок, то удалим сообщение
    }

    // проверим тесктовое поле
    if(textArea.value.length == 0) {
            form.error.innerHTML = "Пожалуйста, сформируйте текст заявки";
            return false;
            
    } else if(textArea.value.length <= 5) {
        form.error.innerHTML = "Пожалуйста, опишите заявку подробнее";
        return false;
    } else {
        form.error.innerHTML = "";
    }
    
    // Добавляем заявку в таблицу
       table.insertBefore( addOneOrder( number, textArea.value, urgency ), table.firstChild );
      
    frame.addEventListener('load', function() {
    // события по загрузке ответа от сервера
       textArea.value = '';                                                // очищаем текстовое поле
       form.getElementsByTagName('select')[0].value = 10;                  // устанавливаем селект в исходное значение
    });
}
/*- end Форма личного кабинета ---*/