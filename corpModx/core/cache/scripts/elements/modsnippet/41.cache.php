<?php  return '$query = $modx->newQuery(\'modUser\');
$users = $modx->getCollection(\'modUser\',$query);

foreach ($users as $oneuser) {
    if( $oneuser->isMember(\'users\') ) {
        // связь с профилем пользователя
        $profile = $oneuser->getOne(\'Profile\');
        
        // получаем дополнильные поля
        $fields = $profile->get(\'extended\');    
        
                // получаем данные пользователя
                //$username = $profile->get(\'username\'); // Через поля пользователя получить username почему то не удаётся, по этому получаем через id
                $id = $profile->get(\'id\');
                $user_obj = $modx->getObject(\'modUser\', $id);
                $username = $user_obj->get(\'username\');

                $fullname = $profile->get(\'fullname\');
                $job_position = $fields[\'job_position\'];
                $org = $fields[\'organisation\'];  
                $email = $profile->get(\'email\');
                $phone = $profile->get(\'phone\');
                $mobilephone = $profile->get(\'mobilephone\');
                $fax = $profile->get(\'fax\');
                $address = $profile->get(\'address\');
                $country = $profile->get(\'country\');
                $city = $profile->get(\'city\');
                $state = $profile->get(\'state\');
                $zip = $profile->get(\'zip\');
                $website = $profile->get(\'website\');
                
       /*================================ Компания начало ====================================*/
        echo     \'<div class="card first_line_one_order my-3">
                  <a class="collapsed" data-toggle="collapse" data-target="#collapse\' . $org . \'" aria-expanded="false" aria-controls="collapse\' . $org . \'">
                    <div class="card-header first_line_order_header" id="heading\' . $org . \'">
                      <div class="row">
        
                        <div class="col-12 col-lg-6">
                          <div class="row">
                            <div class="col-12">
                              <h5 class="mb-0 px-3 py-2">\' . $org . \'</h5>
                            </div>
                          </div>
                        </div>
        
                      </div>
                    </div>
                  </a>
        
                  <div id="collapse\' . $org . \'" class="collapse" aria-labelledby="heading\' . $org . \'">
                    <div class="card-body">\';
       /*================================ END Компания начало =================================*/
       
       
       // Результаты передаём параметрами в чанк с html кодом вывода
        $modx->setPlaceholder(\'username\', $username);
        $modx->setPlaceholder(\'fullname\', $fullname);
        $modx->setPlaceholder(\'job_position\', $job_position);
        $modx->setPlaceholder(\'organisation\', $org);
        $modx->setPlaceholder(\'email\', $email);
        $modx->setPlaceholder(\'phone\', $phone);
        $modx->setPlaceholder(\'mobilephone\', $mobilephone);
        $modx->setPlaceholder(\'fax\', $fax);
        $modx->setPlaceholder(\'address\', $address);
        $modx->setPlaceholder(\'country\', $country);
        $modx->setPlaceholder(\'city\', $city);
        $modx->setPlaceholder(\'state\', $state);
        $modx->setPlaceholder(\'zip\', $zip);
        $modx->setPlaceholder(\'website\', $website);
       
        echo $modx->getChunk(first_line_all_profile);                      // Внутри сниппета чанк выводиться именно таким образом
        
        
       /*=================================== Компания конец ===================================*/
       echo            \'</div>
                      </div>
                    </div>\';
        /*================================ END Компания конец =================================*/
    }
}
return;
';