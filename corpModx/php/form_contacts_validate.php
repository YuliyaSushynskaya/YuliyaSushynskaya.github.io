<?php

$phone = $_POST['phone'];
$time = $_POST['time'];

$theme = 'Заявка на БЫСТРЫЙ ЗВОНОК';

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
$time = clean($time);

if(!empty($phone)) {

    if(check_length($phone, 2, 15)) {
        
        $send = mail("gdi@bypro.by", $theme, 'Телефон: '.$phone. "\r\n" . 'Предпочитаемое время звонка: ' .$time); 
        if($send) {
            echo    '<h4 id=\'ok\' style="text-align: center; font-size: 18px; font-family:\'Arial\'; color:#03A04C;">Спасибо! Ваша заявка принята! Ожидайте звонка.</h4>';
        } else {
            echo    '<h4 id=\'troble\' style="text-align: center; font-size: 18px; font-family:\'Arial\'; color: #c5004a;">Проблемы на сервере. Попробуйте позже.</h4>';
        }
        
    } else { 
        echo '<h4 id=\'wrong\' style="text-align: center; font-size: 18px; font-family:\'Arial\'; color: #c5004a;">Пожалуйста, проверьте корректность введённых даных.</h4>';
    }
} else { 
    echo '<h4 id=\'empty\' style="text-align: center; font-size: 18px; font-family:\'Arial\'; color: #c5004a;">Пожалуйста, заполните пустые поля.</h4>';
}