<?php  return '/* Получим логин пользователя и проверим, к какой группе принадлежит пользователь с таким логином. 
    В зависимости от этого передадим в снипет Login id станицы, которую должен увидеть пользователь 
    при успешной авторизации.
*/

$login = $_POST[\'username\'];    // логин пользователя

$user = $modx->getObject(\'modUser\', array(\'username\' => $login));  // получим объект с именем, введённым в форму входа

$page_id = 25; // по умолчанию Главная

if( $user ) {
    
 if( $user->isMember(\'first_line\') ) {         // проверим, к какой группе принадлежит пользователь
    $page_id = 30;  // кабинет первой линии
 } else if( $user->isMember(\'users\') ) {
    $page_id = 25;  // кабинет заказчика
 } 
 
}
 
 /* Установим параметры для сниппета Login */
$params[\'loginTpl\'] = \'Cabinet\';
$params[\'logoutTpl\'] = \'lgnLogoutTpl\';
$params[\'errTpl\'] = \'lgnErrTpl\';
$params[\'loginResourceId\'] = $page_id;
$params[\'logoutResourceId\'] = 1;
/*--- end ---*/

$html = $modx->runSnippet(\'Login\', $params);
return;
';