<?php 
//header('Content-Type: text/html; charset=UTF-8');
//mb_internal_encoding('UTF-8');


// Подключаем глобальный объект ModX
require_once '../config.core.php';
require_once MODX_CORE_PATH.'model/modx/modx.class.php';
$modx = new modX();
$modx->initialize('web');

// Получаем объект юзера, получаем основные поля профиля и дополнительные
$user = $modx->getUser();
$profile = $user->getOne('Profile');                                        // основные поля
$fields = $profile->get('extended');                                        // дополнительные поля

// Данные пользователя
$id = $user->get('id');                                                     // ID пользователя
$org = $fields['organisation'];                                             // Организация 
$username = $user->get('username');                                         // Логин пользователя
$full_name = $profile->get('fullname');                                     // Полное имя
$job_position = $fields['job_position'];                                    // Должность
$email = $profile->get('email');    
$phone = $profile->get('phone');
$mobilephone = $profile->get('mobilephone');

// Дата и время
$date = date("Y-m-d");
$time = date("H:i:s");

$order = $_POST['order'];                                                   // Текст заявки
$urgency = $_POST['urgency'];                                               // Срочность
$theme = 'Заявка! Срочность: '.$urgency;                                    // Тема в письме

function clean($value = "") {
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);
    
    return $value;
}

$order = clean($order);


if(!empty($order)) {

    $send = true; //mail("gdi@bypro.by", $theme, 'Текст заявки: '.$order."\r\n".'Контактное лицо: '.'Пока нету'."\r\n".'Срочность: '.$urgency); 
    
    if($send) {
        
        echo    '<h4 id=\'ok\' style="text-align: center; font-size: 18px; font-family:\'Arial\';">Спасибо! Ваша заявка принята! Наши специалисты рассмотрят её в кратчайшие сроки!</h4>';
    } else {
        
        echo    '<h4 id=\'troble\' style="text-align: center; font-size: 18px; font-family:\'Arial\';">Проблемы на сервере. Попробуйте позже.</h4>';
    }
 
} else { 
    echo '<h4 id=\'empty\' style="text-align: center; font-size: 18px; font-family:\'Arial\';">Пожалуйста, заполните пустые поля.</h4>';
}



/////////////////////////////////////////////////////////////////////////////
///////////////////////// [ ЗАПИСЬ В БАЗУ ] /////////////////////////////////
/////////////////////////////////////////////////////////////////////////////

$link = mysqli_connect('mysql5.activeby.net', 'work10', 'Gtht_Gbgthfpby199', 'user2051533_work10');           // Подключаемся к базе
mysqli_query($link, "SET NAMES UTF8");                                                              // Устанавливаем кодировку для кириллицы !!!сразу после соединения с базой!!!

                                    /////////////// [ Создание таблицы ] ////////////
                                    function creation_table($link, $org, $id) {

                                        $query = "CREATE TABLE " . $org . " ( `user_id` INT NOT NULL default ". $id .",
                                                                                `number` MEDIUMINT AUTO_INCREMENT,
                                                                                `date` DATE,
                                                                                `time` TIME,
                                                                                `description` TEXT CHARACTER SET utf8,
                                                                                `urgency` INT NOT NULL,
                                                                                `date_close` DATE,
                                                                                `time_close` TIME,
                                                                                `description_close` TEXT CHARACTER SET utf8,
                                                                                `status` CHAR(50) CHARACTER SET utf8,
                                                                                PRIMARY KEY (`number`) 
                                                                                )";

                                        mysqli_query($link, $query) or die( ' Таблицу создать не удалось' . mysqli_error() ); 
                                        //mysqli_query($link, "ALTER TABLE ". $org ." CONVERT TO CHARACTER SET utf8 COLLATE utf8_general_ci");        // Устанавливает кодировку utf8_general_ci для создаваемой таблицы

                                    }
                                    ///////////////// [ end создание ] //////////////
                                    
                                    
                                    ////////////// [ Заполнение таблицы ] ///////////
                                    function filling($link, $org, $date, $time, $order, $urgency, $status = 'открыто') {
                                        
                                        $query = "INSERT INTO " . $org . " (date, time, description, urgency, status) VALUES
                                                                             ( '".$date."', '".$time."', '".$order."', '".$urgency."', '".$status."' )";
                                        mysqli_query($link, $query) or die( ' Проблемы с заполнением' . mysqli_error() ); 
                                    }
                                    //////////////// [ end Заполнение ] /////////////
                                    
                                    

// Отправляем запрос базе mysqli_query($link, $query); 

$existence = mysqli_query($link, 'DESCRIBE `' . $org . '`');            // Проверяем, существует ли таблица с именем организации  ...or die ( mysqli_error() )

if($existence) {

    filling($link, $org, $date, $time, $order, $urgency);
} else {
  
    creation_table($link, $org, $id);
    filling($link, $org, $date, $time, $order, $urgency);
}

