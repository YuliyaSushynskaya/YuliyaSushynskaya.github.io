<?php 

$contract = $_POST['contract'];
$organisation = $_POST['organisation'];
$director = $_POST['director'];
$phone = $_POST['phone'];
$phone2 = $_POST['phone2'];
$adres = $_POST['adres'];
$contact_face = $_POST['contact_face'];
$post_adress = $_POST['post_adress'];
$email = $_POST['email'];
$account = $_POST['account'];
$unp = $_POST['unp'];

$theme = $contract;

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

$contract = clean($contract);
$organisation = clean($organisation);
$director = clean($director);
$phone = clean($phone);
$phone2 = clean($phone2);
$adres = clean($adres);
$contact_face = clean($contact_face);
$post_adress = clean($post_adress);
$email = clean($email);
$account = clean($account);
$unp = clean($unp);

if(!empty($organisation) &&
   !empty($director)     &&
   !empty($adres)        &&
   !empty($contact_face) &&
   !empty($post_adress)  &&
   !empty($email)        &&
   !empty($account)      &&
   !empty($unp) ) {
    
    $email_validate = filter_var($email, FILTER_VALIDATE_EMAIL); 
    
    if(check_length($organisation, 2, 50) &&
       check_length($director, 2, 50)     &&
       check_length($adres, 2, 60)        &&
       check_length($contact_face, 2, 30) &&
       check_length($post_adress, 2, 20)  &&
       check_length($email, 2, 50)        &&
       check_length($account, 2, 50)      &&
       check_length($unp, 2, 50)          &&
       $email_validate) {
        
        $send = mail("gdi@bypro.by", $theme, 'Тип договора: '.$contract.
                                      "\r\n".'Организация: '.$organisation.
                                      "\r\n".'Руководитель: '.$director.
                                      "\r\n".'Адрес: '.$adres.
                                      "\r\n".'Контактное лицо: '.$contact_face.
                                      "\r\n".'Телефон: '.$phone.
                                      "\r\n".'Доп.телефон: '.$phone2.
                                      "\r\n".'Почтовый адрес: '.$post_adress.
                                      "\r\n".'Email: '.$email.
                                      "\r\n".'Расчётный счёт: '.$account.
                                      "\r\n".'УНП: '.$unp); 
        if($send) {
            echo    '<h4 id=\'ok\' style="text-align: center; font-size: 18px; font-family:\'Arial\'; color:#03A04C;">Спасибо! Ваша заявка принята! Мы свяжемся с Вами в ближайшее время что бы подтвердить данные.</h4>';
        } else {
            echo    '<h4 id=\'troble\' style="text-align: center; font-size: 18px; font-family:\'Arial\'; color: #c5004a;">Проблемы на сервере. Попробуйте позже.</h4>';
        }
        
    } else { 
        echo '<h4 id=\'wrong\' style="text-align: center; font-size: 18px; font-family:\'Arial\'; color: #c5004a;">Пожалуйста, проверьте корректность введённых даных.</h4>';
    }
} else { 
    echo '<h4 id=\'empty\' style="text-align: center; font-size: 18px; font-family:\'Arial\' color: #c5004a;;">Пожалуйста, заполните пустые поля.</h4>';
}
