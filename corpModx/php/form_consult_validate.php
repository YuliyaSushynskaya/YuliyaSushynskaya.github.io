<?php 

$phone = $_POST['phone'];

$who = $_POST['who'];

$theme = 'Заявка на консультацию';

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

$who = clean($who);


if(!empty($phone) && !empty($who)) {

    if(check_length($phone, 2, 25) && check_length($who, 2, 50)) {
        
        $send = mail("gdi@bypro.by", $theme, 'Телефон: '.$phone."\r\n".'Контактное лицо: '.$who); 
        if($send) {
            echo    '<h4 id=\'ok\' style="text-align: center; font-size: 18px; font-family:\'Arial\';">Спасибо! Ваша заявка принята! Мы свяжемся с Вами в течении 60 минут.</h4>';
        } else {
            echo    '<h4 id=\'troble\' style="text-align: center; font-size: 18px; font-family:\'Arial\';">Проблемы на сервере. Попробуйте позже.</h4>';
        }
        
    } else { 
        echo '<h4 id=\'wrong\' style="text-align: center; font-size: 18px; font-family:\'Arial\';">Пожалуйста, проверьте корректность введённых даных.</h4>';
    }
} else { 
    echo '<h4 id=\'empty\' style="text-align: center; font-size: 18px; font-family:\'Arial\';">Пожалуйста, заполните пустые поля.</h4>';
}
