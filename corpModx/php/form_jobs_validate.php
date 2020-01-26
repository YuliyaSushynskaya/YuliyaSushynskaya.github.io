<?php

$phone = $_POST['phone2'];
$name = $_POST['name'];
$ref = $_POST['ref'];

$theme = 'Отклик на вакансию';

function clean($value = "") {
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);
    
    return $value;
}

function check_length($value = "", $min, $max) {
    $result = (mb_strlen($value) < $min || mb_strlen($value) > $max);
    return !$result;
}

$phone = clean($phone);
$name = clean($name);
$ref = clean($ref);

if(!empty($phone) && !empty($name) && !empty($ref)) {

    if(check_length($phone, 2, 15) && check_length($name, 2, 30) && check_length($ref, 2, 50)) {
        
        $send = mail("gdi@bypro.by", $theme, 'Телефон: '.$phone."\n\r".'Имя: '.$name."\n\r".'Ссылка на резюме: '.$ref); 
        if($send) {
            echo    '<h4 id=\'ok\' style="text-align: center; font-size: 18px; font-family:\'Arial\'; color:#03A04C;">Спасибо! Вашe резюме принято к рассмотрению! Мы свяжемся с вами в ближайшее время.</h4>';
        } else {
            echo    '<h4 id=\'troble\' style="text-align: center; font-size: 18px; font-family:\'Arial\'; color: #c5004a;">Проблемы на сервере. Попробуйте позже.</h4>';
        }
        
    } else { 
        echo '<h4 id=\'wrong\' style="text-align: center; font-size: 18px; font-family:\'Arial\'; color: #c5004a;">Пожалуйста, проверьте корректность введённых даных.</h4>';
    }
} else { 
    echo '<h4 id=\'empty\' style="text-align: center; font-size: 18px; font-family:\'Arial\'; color: #c5004a;">Пожалуйста, заполните пустые поля.</h4>';
}