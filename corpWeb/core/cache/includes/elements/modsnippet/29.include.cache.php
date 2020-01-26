<?php
$user_id = $modx->user->get('id');

if($user_id == 21) {
    echo $user_id;
}


if($user_id != 0) {

    $user = $modx->getObject('modUser',array('active' => true, 'id' => $user_id ));
    
    
    if($user->isMember('users')) {
        echo 'true';
    }

}
return;
