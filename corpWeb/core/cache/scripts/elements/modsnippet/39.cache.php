<?php  return '// Подключение к БД
$link = mysqli_connect(\'mysql5.activeby.net\', \'work10\', \'Gtht_Gbgthfpby199\', \'user2051533_work10\');
mysqli_query($link, "SET NAMES UTF8");

$query = $modx->newQuery(\'modUser\');
$users = $modx->getCollection(\'modUser\',$query);
$count = 0;                                      // Счётчик поп-апов

foreach ($users as $oneuser) {

    if( $oneuser->isMember(\'users\') ) {
        // связь с профилем пользователя
        $profile = $oneuser->getOne(\'Profile\');
         // получаем имя поль
        $name = $profile->get(\'username\');
        // получаем электонный адрес
        $email = $profile->get(\'email\');
        $job = $profile->get(\'job_position\');
       // проверяем есть ли у профиля  дополнительные поля
       if ($profile->get(\'extended\')) {
            // получаем дополнильные поля
            $fields = $profile->get(\'extended\');    
            // получаем должность
            $org = $fields[\'organisation\'];  
       } else {
           $org = "organisation_is_not_defined";
       }    
 
    


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    $existence = mysqli_query($link, \'DESCRIBE `\' . $org . \'`\');                // Проверяем, существует ли таблица с именем организации  ...or die ( mysqli_error() )
    
    if($existence) {
        
        $query ="SELECT * FROM `" . $org . "`";
        $result = mysqli_query($link, $query);
        $count_rows = mysqli_num_rows($result);                                 // Определим количество строк таблицы, т.е. количество заявок
       
       
                                                       /*========================= Компания начало =============================*/
                                                        echo \'<div class="card first_line_one_order my-3">
                                                                  <a class="collapsed" data-toggle="collapse" data-target="#collapse\' . $org . \'" aria-expanded="false" aria-controls="collapse\' . $org . \'">
                                                                    <div class="card-header first_line_order_header" id="heading\' . $org . \'">
                                                                      <div class="row">
                                                        
                                                                        <div class="col-12 col-lg-6">
                                                                          <div class="row">
                                                                            <div class="col-8">
                                                                              <h5 class="mb-0 px-3 py-2 py-lg-3">\' . $org . \'</h5>
                                                                            </div>
                                                                            <div class="col-4">
                                                                              <h5 class="mb-0 px-3 py-2 py-lg-3"><span class="first_new">0</span></h5>
                                                                            </div>
                                                                          </div>
                                                                        </div>
                                                        
                                                                        <div class="col-12 col-lg-6">
                                                                          <div class="row">
                                                                            <div class="col-4">
                                                                              <h5 class="mb-0 px-3 py-2 py-lg-3"><span class="first_green">0</span></h5>
                                                                            </div>
                                                                            <div class="col-4">
                                                                              <h5 class="mb-0 px-3 py-2 py-lg-3"><span class="first_red">0</span></h5>
                                                                            </div>
                                                                            <div class="col-4">
                                                                              <h5 class="mb-0 px-3 py-2 py-lg-3"><span class="first_all">0</span></h5>
                                                                            </div>
                                                                          </div>
                                                                        </div>
                                                        
                                                                      </div>
                                                                    </div>
                                                                  </a>
                                                        
                                                                  <div id="collapse\' . $org . \'" class="collapse" aria-labelledby="heading\' . $org . \'">
                                                                    <div class="card-body">\';
                                                       /*===================== END Компания начало ==============================*/
       
        
        for($i = $count_rows; $i > 0; $i--) {
          
            mysqli_data_seek($result, $i - 1);                                  // Переносим указатель выборки на последнюю заявку
            $res_array = mysqli_fetch_row($result);                             // Возвращает массив следующей строки при каждом новом вызове
            
            $date_open = $res_array[2];
            $date_open = date(\'d.m.Y\', strtotime($date_open));                  // Меняем формат даты открытия заявки
            $date_close = $res_array[6];
            $date_close = date(\'d.m.Y\', strtotime($date_close));                // Меняем формат даты закрытия заявки
            
            // Результаты передаём параметрами в чанк с html кодом вывода
            $modx->setPlaceholder(\'number\', $res_array[1]);
            $modx->setPlaceholder(\'date\', $date_open);
            
            $modx->setPlaceholder(\'time\', $res_array[3]);
            $modx->setPlaceholder(\'description\', $res_array[4]);
            $modx->setPlaceholder(\'urgency\', $res_array[5]);
            $modx->setPlaceholder(\'date_close\', $date_close);
            $modx->setPlaceholder(\'time_close\', $res_array[7]);
            $modx->setPlaceholder(\'description_close\', $res_array[8]);
            $modx->setPlaceholder(\'status\', $res_array[9]);
            $modx->setPlaceholder(\'organisation\', $org);
            
            
            
            if( $res_array[9] == \'закрыто\') {
                
                $modx->setPlaceholder(\'color_order\', \'success\');                                        // Цвет карточки зелёный
                $modx->setPlaceholder(\'first_line_if_open_or_close\', \'$first_if_order_closed\');        // Если заявка закрыта передадим чанк с кодом для закрытой заявки
            
            } else {
                
                
                $modx->setPlaceholder(\'count\', $count); // Для подсчёта поп-апов
               
                $modx->setPlaceholder(\'color_order\', \'danger\');                                 // Цвет карточки красный
                $modx->setPlaceholder(\'first_line_if_open_or_close\', \'$first_if_order_open\');  // Если заявка открыта передадим другой чанк
                 /*-- Вызовем чанк с профилями в поп-апе --*/
                echo $modx->getChunk(\'pop-up_profiles_info\');
                /*-- END POP-UPS PROFILES INFO --*/
                $count += 1;
            }
                                   
            echo $modx->getChunk(first_line_table_of_orders);                      // Внутри сниппета чанк выводиться именно таким образом
            
            echo      \'<!-- Отступ -->
                       <div class="row d-block">
                         <div class="col-12 mt-2"></div>
                       </div>
                      <!------------>\';
        }
        
                                                        /*=================================== Компания конец ===================================*/
                                                       echo            \'</div>
                                                                      </div>
                                                                    </div>\';
                                                        /*================================ END Компания конец ==================================*/
        
    }
  }
}
return;
';
