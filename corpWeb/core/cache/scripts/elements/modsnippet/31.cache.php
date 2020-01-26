<?php  return '$page_id = $modx->resource->get(\'id\');
$user_id = $modx->user->get(\'id\');
$page_location = \'site\';
$is_user = false;

if($page_id == 27 || $page_id == 28 || $page_id == 25 || $page_id == 26 || $page_id == 30 || $page_id == 31) {
    $page_location = \'cabinet\';

}

if($user_id != 0) {

    $user = $modx->getObject(\'modUser\',array(\'active\' => true, \'id\' => $user_id ));
    $is_user = $user->isMember(\'users\');
    $is_first_line = $user->isMember(\'first_line\');
    
}
if( $modx->user->get(\'id\') > 1 && $is_user === true && $page_location == \'site\' ) {
    
    return               \'<div class="py-4 services_button_enter">
                            <a href="[[~25]]" title="Личный кабинет"><span><img src="images/left-menu/enter_in.png"></span></a>
                          </div>\';
                          
} else if ($modx->user->get(\'id\') > 1 && $is_user === true && $page_location == \'cabinet\') {
    
    return               \'<div class="py-4 services_button_enter">
                                              
                            <span><a href="[[~1]]?service=logout" title="Выход"><img src="images/left-menu/exit.png"></a></span>

                          </div>\';
 } else if ($modx->user->get(\'id\') > 1 && $is_first_line === true &&  $page_location == \'site\') {
      
    return              \'<div class="py-4 services_button_enter">
                            <a href="[[~30]]" title="Кабинет первой линии"><span><img src="images/left-menu/enter_in.png"></span></a>
                          </div>\';
      
} else if ($modx->user->get(\'id\') > 1 && $is_first_line === true &&  $page_location == \'cabinet\') {
    
    return               \'<div class="py-4 services_button_enter">
                                              
                            <span><a href="[[~1]]?service=logout" title="Выход"><img src="images/left-menu/exit.png"></a></span>

                          </div>\';
    
} else {
    
    return               \'<div class="py-4 services_button_enter" id="cabinet">
                            <span title="Личный кабинет"><img src="images/left-menu/enter.png"></span>
                          </div>\';
}
return;
';