<?php
// Получаем объект юзера, получаем основные поля профиля и дополнительные
$user = $modx->getUser();
$profile = $user->getOne('Profile');                                        // основные поля
$fields = $profile->get('extended');                                        // дополнительные поля

// Данные пользователя
$id = $user->get('id');                                                     // ID пользователя
$org = $fields['organisation'];                                             // Организация 

// Подключение к БД
$link = mysqli_connect('mysql5.activeby.net', 'work10', 'Gtht_Gbgthfpby199', 'user2051533_work10');
mysqli_query($link, "SET NAMES UTF8");

$existence = mysqli_query($link, 'DESCRIBE `' . $org . '`');                // Проверяем, существует ли таблица с именем организации  ...or die ( mysqli_error() )

if($existence) {
    
    $query ="SELECT * FROM `" . $org . "`";
    $result = mysqli_query($link, $query);
    $count_rows = mysqli_num_rows($result);                                 // Определим количество строк таблицы, т.е. количество заявок
   
    
    for($i = $count_rows; $i > 0; $i--) {
        
        mysqli_data_seek($result, $i - 1);                                  // Переносим указатель выборки на последнюю заявку
        $res_array = mysqli_fetch_row($result);                             // Возвращает массив следующей строки при каждом новом вызове
        
        $date_open = $res_array[2];
        $date_open = date('d.m.Y', strtotime($date_open));                  // Меняем формат даты открытия заявки
        $date_close = $res_array[6];
        $date_close = date('d.m.Y', strtotime($date_close));                // Меняем формат даты закрытия заявки
        
        // Результаты передаём параметрами в чанк с html кодом вывода
        $modx->setPlaceholder('number', $res_array[1]);
        $modx->setPlaceholder('date', $date_open);
        
        $modx->setPlaceholder('time', $res_array[3]);
        $modx->setPlaceholder('description', $res_array[4]);
        $modx->setPlaceholder('urgency', $res_array[5]);
        $modx->setPlaceholder('date_close', $date_close);
        $modx->setPlaceholder('time_close', $res_array[7]);
        $modx->setPlaceholder('description_close', $res_array[8]);
        $modx->setPlaceholder('status', $res_array[9]);
        
        if( $res_array[9] == 'закрыто') {
            
            $modx->setPlaceholder('color_order', 'success');                    // Цвет карточки зелёный
            $modx->setPlaceholder('closed_or_open', '$if_order_closed');        // Если заявка закрыта передадим чанк с кодом для закрытой заявки
        
        } else {
            
            $modx->setPlaceholder('color_order', 'danger');                   // Цвет карточки красный
            $modx->setPlaceholder('closed_or_open', '$if_order_open');        // Если заявка открыта передадим другой чанк
        }
                               
        echo $modx->getChunk(cabinet_table_of_orders);                      // Внутри сниппета чанк выводиться именно таким образом
        
        echo      '<!-- Отступ -->
                   <div class="row d-block">
                     <div class="col-12 mt-2"></div>
                   </div>
                  <!------------>';
    }
    
} else {
    echo '<h5 class="ml-4">История заявок пуста</h5>';
}
return;
