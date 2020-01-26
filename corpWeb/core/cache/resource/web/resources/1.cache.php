<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 1,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Главная',
    'longtitle' => '',
    'description' => '',
    'alias' => 'index',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 1,
    'introtext' => '',
    'content' => '',
    'richtext' => 0,
    'template' => 2,
    'menuindex' => 0,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1543312518,
    'editedby' => 1,
    'editedon' => 1543318110,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 0,
    'publishedby' => 0,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => 'index/',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    '_content' => '
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/popup.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mobile-menu.css">
    <link rel="stylesheet" href="css/menu-hover-effects.css">

    <!-- Glitch effects -->
    <link rel="stylesheet" href="css/glitch-effects.css">
    
    
    <title>БайПРО</title>
  </head>
  <body>
    <script>
(function() {

    var loc = window.location.href;
    if( loc.lastIndexOf(\'?service=logout\') != -1 ) {

        var num_1 = 0;
        var num_2 = loc.lastIndexOf(\'?service=logout\');
        loc = loc.substring(num_1, num_2 - 1);

        window.location.href = loc;
    } 
    
})();
</script>
    <div class="left_call_button d-block d-lg-none" id="mobile">
    <i class="fa fa-phone" aria-hidden="true"></i>
</div>
    <div class="countainer-fluid BYPRO_CONTAINER">

    <!--=== HEADER ===-->
      <header class="bypro_header">
        <div class="col-12">
          <div class="row align-items-center">

            <div class="col-6 col-xl-2 col-lg-2 col-md-2">
              <div class="bypro_div_logo"><a href="#">
                <a href="http://work1.d0022330.atservers.net/"><img src="images/logo/logo.png" alt="bypro-logo" title="ByPro"/></a>
              </a></div>
            </div>
            
            <div class="col-8 d-none d-xl-block d-lg-block text-center">
              <p class="my-auto"><strong>
                <span class="head_software">software</span>
                <span class="head_hardware">hardware</span>
                <span class="head_solutions">solutions</span>
              </strong></p>
            </div>

            <div class="col-8 col-xl-2 col-lg-2 col-md-4 ml-auto d-none d-xl-block d-lg-block d-md-block bypro_social">
              <div class="row">
                <div class="col-2"><a href="https://www.instagram.com/bypro.by/" target="_blank">In</a></div>
                <div class="col-2"><a href="https://www.facebook.com/bypro.by1/?ref=bookmarks" target="_blank">f</a></div>
                <div class="col-2"><a href="https://www.linkedin.com/company/bypro/" target="_blank">Li</a></div>
                <div class="col-2"><a href="https://plus.google.com/105026163117668235138?hl=ru" target="_blank">G+</a></div>
                <div class="col-2"><a href="https://www.youtube.com/channel/UCtbWWvQXy9NNGFz6Aq5qSCQ/featured?view_as=subscriber" target="_blank">You</a></div>
              </div>
            </div>
            
            <!-- Иконки быстрой связи -->
                  <div class="col-6 text-center left_menu_icons d-block d-md-none">
                    <div class="services_button_consult" id="consult">
                      <span title="Консультация"><img src="images/left-menu/consult.png"></span>
                    </div>
                    <div class="services_button_one" id="one">
                      <span title="Договор"><img src="images/left-menu/contract.png"></span>
                    </div>
                    [[!enter_or_cabinet_or_exit]]
                  </div>
            <!-- END Иконки быстрой связи -->

          </div>
        </div>
      </header>
    <!--=== HEADER ===-->

     <!--== Hamburger ==-->
    <div class="d-block d-xl-none d-lg-none bypro_hamburker">
      <div class="menu-icon">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
      </div>
    </div>
    <!--== end Hamburger ==-->

<!-- POP-UP Cabinet -->
              <div id="modal-cabinet">
                <div class="modal-background-cabinet">
                  <div class="modal-cabinet pl-0 pr-0">
                    <div class="popup_close" id="close_cabinet">
                        Закрыть
                      <div class="popup_dot"></div>
                      <div class="popup_dot"></div>
                    </div>
                    <div class="row" id="cabinet_form_content">
                      <div class="col-12">
                        <div class="row">
                          <div class="col-10 mx-auto mt-4 text-left">

                            [[!Login? &loginTpl=`Cabinet` &logoutTpl=`lgnLogoutTpl` &errTpl=`lgnErrTpl` &loginResourceId=`13` &logoutResourceId=`12`]] 
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
<!--end POP-UP Cabinet -->


<!-- POP-UP Mobile_call -->
              <div id="modal-mobile-call">
                <div class="modal-background-mobile">
                  <div class="modal-mobile pl-0 pr-0">
                    <div class="popup_close" id="close_mobile">
                        Закрыть
                      <div class="popup_dot"></div>
                      <div class="popup_dot"></div>
                    </div>
                    <div class="row" id="mobile_form_content">
                      <div class="col-12">
                        <div class="row">
                          <div class="col-12 mx-auto mt-4 text-left">
                            <div class="row">
                                <div class="col-10 mx-auto">
                                    <button class="mt-4 btn mobile-send"><a href="tel:+375(29) 385-08-08">Позвонить Менеджеру</a></button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-10 mx-auto">
                                    <button class="mt-4 btn mobile-send"><a href="tel:+375(29) 212-38-58">Техподдержка</a></button>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
<!--end POP-UP Mobile_call -->



<!-- POP-UP 1 Consult -->
              <div id="modal-container-consult">
                <div class="modal-background-consult">
                  <div class="modal-consult">
                    <div class="popup_close" id="close_consult">
                        Закрыть
                      <div class="popup_dot"></div>
                      <div class="popup_dot"></div>
                    </div>
                    <div class="row" id="consult_form_content">
                      <div class="col-12">
                        <div class="row">
                          <div class="col-12 mx-auto mt-4 text-left">
                            <div id="consult_title">
                                <h2 class="text-center">Вы можете заказать бесплатную консультацию</h2>
                                <h5 class="my-2 mt-4 text-center">Оставьте контактный номер телефона и мы свяжемся с Вами в течении 60 минут</h5>
                            </div>
                            <p><iframe id="frame_consult" class="frame_absolute" name="area" style="border:0; width: 100%;"></iframe></p>
                            <form class="sevrices_form_one" action="php/form_consult_validate.php" method="POST" name="consultForm" id="consultFormID" target="area"  onsubmit="return validateConsult()">
                              <div class="form-group mt-4 mb-4">
                              
                                <div class="row">
                                  <div class="col-12 col-xl-6">
                                    <p class="my-2">Телефон для связи</p><span id="phone_warning"></span>
                                    <input id="phoneID" class="form-control form-control-sm" name="phone" form="consultFormID" type="text" placeholder="(XXX)XXX-XXXX">
                                  </div>
                                  <div class="col-12 col-xl-6">
                                    <p class="my-2">Контактное лицо</p><span id="name_warning"></span>
                                    <input id="nameID" class="form-control form-control-sm" name="who" form="consultFormID" type="text" placeholder="Ф.И.О">
                                  </div>
                                </div>
                                
                                <div class="row">
                                  <div class="col-12 col-xl-6 mx-auto text-center" id="consult_captcha"><div class="mt-4" style="width: 100%; height: 50px; background-color:gray;"></div></div>
                                  <div class="col-12 col-xl-6 mx-auto text-center">
                                    <button type="submit" class="mt-4 btn popup_send">Отправить</button>
                                  </div>
                                </div>

                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
<!--end POP-UP Consult -->

    <!-- POP-UP 1 -->
              <div id="modal-container">
                <div class="modal-background">
                  <div class="modal">
                    <div class="popup_close" id="close_one">
                        Закрыть
                      <div class="popup_dot"></div>
                      <div class="popup_dot"></div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="row">
                          <div class="col-12 mx-auto mt-4 text-left">
                            <h2 id="form_contract_title" class="text-center">Форма для заключения договора</h2>
                            <h5 id="form_contract_text" class="my-2 mt-4">Согласно этой информации составляется договор на обслуживание, после чего
                                договор высылается Вам по почте и на указанный email.
                            </h5>
                            <p><iframe id="frame_contract" class="frame_absolute" name="area1" style="border:0; width: 100%;"></iframe></p>
                            <form class="sevrices_form_one" action="php/form_contract_validate.php" method="POST" target="area1"  name="oneForm" id="oneFormID">
                              <div class="form-group mt-4 mb-4">
                                    
                                <div class="row">
                                  <div class="col-12 col-xl-6 mx-auto my-2">
                                    <p>Выберите тип договора (разовый / годовой)</p>
                                    <select id="inputState" name="contract" class="form-control">
                                      <option selected value="one">Разовый договор</option>
                                      <option value="year">Годовой договор</option>
                                    </select>
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-12 col-xl-6">
                                    <p class="my-2">Название организации </p><span></span>
                                    <input name="organisation" id="organisation" class="form-control form-control-sm" form="oneFormID" type="text" placeholder="Например: ООО\'БайПРО\'">
                                  </div>
                                  <div class="col-12 col-xl-6">
                                    <p class="my-2">Ф.И.О. руководителя </p><span></span>
                                    <input name="director" id="director" class="form-control form-control-sm" form="oneFormID" type="text" placeholder="Будет указано в договоре">
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-12 col-xl-6">
                                    <p class="my-2">Телефон для связи</p><span id="tel"></span>
                                    <input name="phone" id="phone" class="form-control form-control-sm" form="oneFormID" type="text" placeholder="(XXX)XXX-XXXX">
                                  </div>
                                  <div class="col-12 col-xl-6">
                                    <p class="my-2">Дополнительный телефонный номер</p><span id="dop_tel"></span>
                                    <input name="phone2" id="phone2" class="form-control form-control-sm" form="oneFormID" type="text" placeholder="Номер телефона без маски">
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-12 col-xl-6">
                                    <p class="my-2">Юридический адрес организации </p><span></span>
                                    <input name="adres" id="adres" class="form-control form-control-sm" form="oneFormID" type="text" placeholder="Будет указан в договоре">
                                  </div>
                                  <div class="col-12 col-xl-6">
                                    <p class="my-2">Контактное лицо</p> <span></span>
                                    <input name="contact_face" id="contact_face" class="form-control form-control-sm" form="oneFormID" type="text" placeholder="Ф.И.О">
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-12 col-xl-6">
                                    <p class="my-2">Почтовый адрес организации </p><span></span>
                                    <input name="post_adress" id="post_adress" class="form-control form-control-sm" form="oneFormID" type="text" placeholder="Для отправки копии договора">
                                  </div>
                                  <div class="col-12 col-xl-6">
                                    <p class="my-2">Email организации </p><span></span>
                                    <input name="email" id="email" class="form-control form-control-sm" form="oneFormID" type="text" placeholder="Для электронных писем">
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-12 col-xl-6">
                                    <p class="my-2">Расчётный счёт организации </p><span></span>
                                    <input name="account" id="account" class="form-control form-control-sm" form="oneFormID" type="text" placeholder="">
                                  </div>
                                  <div class="col-12 col-xl-6">
                                    <p class="my-2">УНП организации </p><span></span>
                                    <input name="unp" id="unp" class="form-control form-control-sm" form="oneFormID" type="text" placeholder="">
                                  </div>
                                </div>
                                
                               <div class="row">
                                  <div class="col-12 col-xl-6 mx-auto text-center">
                                    <button type="submit" class="mt-4 btn popup_send" onclick="return validateContract();">Отправить</button>
                                  </div>
                                </div>

                              </div>
                            </form>
                            
                             
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--end POP-UP 1 -->

    <!--=== LEFT MENU ===-->
        <div class="col-12 col-xl-2 col-lg-2 bypro_menu_points">
          <div class="row align-items-center bypro_menu_points_wrapper">
            <div class="col-12">
              <div class="row">
                <menu>
                 
                  <li class="mt-2 mb-2">
                    <a href="o-kompanii" class="glitch-btn">
                      <div class="text">о компании</div>
                      <div class="mask mask1">
                        <span>о компании</span>
                      </div>
                       <div class="mask mask2">
                        <span>о компании</span>
                      </div>
                      <div class="mask mask3">
                        <span>о компании</span>
                      </div>
                    </a>
                  </li>
                  <li class="mt-2 mb-2">
                    <a href="uslugi" class="bypro_colorLogo glitch-btn">
                      <div class="text">услуги</div>
                      <div class="mask mask1">
                        <span>услуги</span>
                      </div>
                       <div class="mask mask2">
                        <span>услуги</span>
                      </div>
                      <div class="mask mask3">
                        <span>услуги</span>
                      </div>
                    </a>
                  </li>
                  <li class="mt-2 mb-2">
                    <a href="produktyi" class="bypro_colorLogo glitch-btn">
                      <div class="text">продукты</div>
                      <div class="mask mask1">
                        <span>продукты</span>
                      </div>
                       <div class="mask mask2">
                        <span>продукты</span>
                      </div>
                      <div class="mask mask3">
                        <span>продукты</span>
                      </div>
                    </a>
                  </li>
                  <li class="mt-2 mb-2">
                    <a href="otzyivyi" class="glitch-btn">
                      <div class="text">отзывы</div>
                      <div class="mask mask1">
                        <span>отзывы</span>
                      </div>
                       <div class="mask mask2">
                        <span>отзывы</span>
                      </div>
                      <div class="mask mask3">
                        <span>отзывы</span>
                      </div>
                    </a>
                  </li>
                  <li class="mt-2 mb-2">
                    <a href="kontaktyi" class="glitch-btn">
                      <div class="text">контакты</div>
                      <div class="mask mask1">
                        <span>контакты</span>
                      </div>
                       <div class="mask mask2">
                        <span>контакты</span>
                      </div>
                      <div class="mask mask3">
                        <span>контакты</span>
                      </div>
                    </a>
                  </li>
                  <li class="mt-2 mb-2">
                    <a href="novosti" class="glitch-btn">
                      <div class="text">новости</div>
                      <div class="mask mask1">
                        <span>новости</span>
                      </div>
                       <div class="mask mask2">
                        <span>новости</span>
                      </div>
                      <div class="mask mask3">
                        <span>новости</span>
                      </div>
                    </a>
                  </li>
                  <li class="mt-2 mb-2">
                    <a href="vakansii" class="glitch-btn">
                      <div class="text">вакансии</div>
                      <div class="mask mask1">
                        <span>вакансии</span>
                      </div>
                       <div class="mask mask2">
                        <span>вакансии</span>
                      </div>
                      <div class="mask mask3">
                        <span>вакансии</span>
                      </div>
                    </a>
                  </li>
                </menu>
              </div>
            
<!-- ПОДВАЛ -->
              <div class="row bypro_left_menu_footer">
                
                <!-- Иконки быстрой связи -->

                  <div class="col-12 text-center left_menu_icons d-none d-md-block">
                    <div class="py-4 services_button_consult" id="consult">
                      <span title="Консультация"><img src="images/left-menu/consult.png"></span>
                    </div>
                    <div class="py-4 services_button_one" id="one">
                      <span title="Договор"><img src="images/left-menu/contract.png"></span>
                    </div>
                    
                    [[!enter_or_cabinet_or_exit]] <!-- Снипет выводит либо ссылку на кабинет, либо форму входа -->
                   
                  </div>

                <!-- END Иконки быстрой связи -->

                <div class="bypro_left_menu_footer_logo">
                  <a href="http://work1.d0022330.atservers.net/">
                    <p class="mb-0 pt-2 text-right">ООО БайПРО</p>
                  </a>
                </div>
              </div>
            <!-- END ПОДВАЛ -->

            </div>
          </div>
        </div>

    <!--=== END LEFT MENU ===-->



    <!--=== CONTENT ===-->
        <content>
            <div class="col-12 col-xl-10 col-lg-10 float-xl-right float-lg-right home_content_wrapper">
              <div class="row">
                <div class="col-12 bypro_first_block services_content_wrapper" id="services_content_wrapper_ID">
                         
                  <!-- Заголовок -->
                  <div class="row">
                    <div class="col-12">
[[!user_id]]

                      <div class="row">
                        <div class="col-12 col-md-8 col-xl-8 col-lg-8 mx-auto">
                          <div class="row">
                            <div class="col-3">
                              <h1 class="glitch_big_one" id="home_big_one" data-text="IT">IT</h1>
                            </div>
                            <div class="col-12 col-sm-4 align-self-center text-right text-sm-left">
                              <div class="home_sumtitle d-none d-sm-block">
                                <p style="color: #c5004a">Администрирование</p>
                                <p style="color: #898989">Оборудование</p>
                                <p style="color: #434242">Безопасность</p>
                                <p style="color: #434242; white-space: nowrap" class="d-block d-sm-none">Web-разработка</p>
                                <p style="color: #434242" class="d-block d-sm-none">
                                  Программное <span style="color:#c5004a; padding-left: 10px;">обеспечение</span>
                                </p>
                              </div>
                              
                              <!-- Мобильные подразделения -->
                              <div class="home_sumtitle_mobile d-block d-sm-none">
                                <p><a href="#" style="color: #434242; text-decoration: none;">Безопасность</a></p>
                                <p class="d-block d-sm-none">
                                  <a href="#" style="color: #434242; text-decoration: none;">Программное</a><span style="color:#c5004a; padding-left: 10px; font-size: 14px; display: block; line-height: .5;">обеспечение</span>
                                </p>
                                <p><a href="https://ruckus.by/" style="color: #898989; text-decoration: none;">Оборудование</a></p>
                                <p class="d-block d-sm-none"><a href="https://web.bypro.by/" style="color: #434242; white-space: nowrap; text-decoration: none;">Web-разработка</a></p>
                                <p><a href="http://it911.by/" style="color: #c5004a; text-decoration: none;">Администрирование</a></p>
                              </div>

                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>         
                  <!-- End Заголовок -->

                  <!-- Администрирование оборудование безопасность -->

                  <div class="row">
                    <div class="col-12 col-xl-8 col-lg-8 mx-auto home_soft_hard_sol">
                      <div class="row">
                        <div class="col-2"></div>
                      </div>
                    </div>
                  </div>

                  <!-- END Администрирование оборудование безопасность -->

                 

                  <!-- БЛОКИ -->
                    
                 <!--  Вертикальные блоки -->
                  <div class="row">
                    <div class="col-12 col-xl-8 col-lg-8 mx-auto">
                      <div class="row">
                        <div class="col-12 mx-auto align-self-center home_services_blocks_wrapper">
                          <div class="row home_services_blocks">

                            <div style="background-image: url(images/home/outsorsing.jpg)" class="d-none d-sm-block" onclick="window.open(\'https://ruckus.by/\')">
                              <h2>Оборудование</h2>
                            </div>
                            <div class="home_cooler_wrapper d-none d-sm-block" onclick="window.open(\'http://it911.by/\')">
                              <div class="home_cooler">
                                <img class="home_cooler_img" src="images/home/cooler/cooler.png">
                              </div>
                              <div class="home_propeller">
                                <img class="home_propeller_img" src="images/home/cooler/prop.png">
                              </div>
                              <h2 class="d-none d-sm-block">Администрирование</h2>
                            </div>
                            
                            <!-- Куллер в мобильной версии -->
                            <div class="home_cooler_wrapper d-block d-sm-none">
                              <div class="home_cooler">
                                <img class="home_cooler_img" src="images/home/cooler/cooler.png">
                              </div>
                              <div class="home_propeller">
                                <img class="home_propeller_img" src="images/home/cooler/prop.png">
                              </div>
                              <h2 class="d-none d-sm-block">Администрирование</h2>
                            </div>
                            <!-- End Куллер в мобильной версии -->
                            
                            <div style="background-image: url(images/home/web_2.jpg)" class="d-none d-sm-block" onclick="window.open(\'https://web.bypro.by/\')">
                              <h2>Веб-разработка</h2>
                            </div>
                            <div style="background-image: url(images/home/soft.jpg)" class="d-none d-sm-block">
                              <h2>Програмное обеспечение</h2>
                            </div>
                            <div style="background-image: url(images/home/security_1.jpg)" class="d-none d-sm-block">
                              <h2>Безопасность</h2>
                            </div>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end Вертикальные блоки -->

                  <!-- END БЛОКИ -->                  

                  <!-- Отступ -->
                  <div class="row d-none d-lg-block">
                    <div class="col-12 mt-4 mb-4"></div>
                  </div>
                  <!------------>
                   <!-- Отступ -->
                  <div class="row d-none d-lg-block">
                    <div class="col-12 mt-4 mb-4"></div>
                  </div>
                  <!------------>
                  <!-- Отступ -->
                  <div class="row d-none d-sm-block">
                    <div class="col-12 mt-4 mb-4"></div>
                  </div>
                  <!------------>
                  <!-- Отступ -->
                  <div class="row d-none d-sm-block">
                    <div class="col-12 mt-4 mb-4"></div>
                  </div>
                  <!------------>
                  <!-- Отступ -->
                  <div class="row d-none d-sm-block">
                    <div class="col-12 mt-4 mb-4"></div>
                  </div>
                  <!------------>
                  <!-- Отступ -->
                  <div class="row">
                    <div class="col-12 mt-4 mb-4"></div>
                  </div>
                  <!------------>
                                  


                  <!-- РАБОТА С КРУПНЫМИ И СРЕДНИМИ КОМПАНИЯМИ -->
                  <div class="row">
                    <div class="col-12 home_our_advantages">

                      <div class="row">
                        <div class="col-12 col-xl-8 col-lg-8 mx-auto text-center text-lg-left">                                             
                          <h2>
                            <span class="glitch" data-text="Работа с" style="display:inline-block">Работа с</span> 
                            <span class="glitch" data-text="крупными и" style="display:inline-block">крупными и</span>
                            <span class="glitch" data-text="средними" style="display:inline-block">средними</span>
                            <span class="glitch" data-text="компаниями" style="display:inline-block">компаниями</span>
                          </h2>
                        </div>
                      </div>

                      <!-- Отступ -->
                      <div class="row">
                        <div class="col-12 mt-4"></div>
                      </div>
                      <!------------>
                     
                      <div class="row home_special_wrapper">
                        <div class="col-12 col-md-8 mx-auto home_work_with_big">

                          <div class="row">
                            <div class="col-12 col-xl-12 col-lg-12 ml-auto home_double_team">   
                              <div class="row">    
                                <div class="home_graf_wrapper">                                          
                                  <img src="images/home/advantages/graf_1.png">
                                </div>
                                <div class="home_team_wrapper text-center text-md-left">
                                  <img src="images/home/advantages/team_1.png">
                                </div>
                              </div>
                            </div>
                            <div class="col-12 home_double_code">
                            <p>0000111000101100001011100000111000101111000110100000111000101110001011010000111000101110001011100000111000101110000110110000111000101111000111000001010000001110001011100010110100001110001011100001100100001110001011110010000100001110001011100001111000001111011100010001000010100000011100010111000101010000011100010111000101110000011100010111000101100000011100010</p>
                            <p>01110001010100000111000101110001011100000111000101110001011000000111000101110000110010000111000101110001011010000111000101110000111010000111000101111001010110001010000001110001011110001101000001110001011100010111000001110001011110001101000001110001011110001101100001110001011100001100100001110001011100001101100001110001011100010101100001110001011110010111100001110</p>
                            <p>001011110010111000001110001011110001101100010100000011100010111000101111000011100010111100011001000011100010111000101110000011100010111100011101000011100010111000011110000011100010111100011010000011100010111100011010000011100010111000100001000011100010111001011100000111000101110001011010000</p>
                            <p>111000101110000110010000111000101110001010110000111000101111001010110000111000011011001011000001010000001110001011100001101000001110001011100010111000001110001011100010101100001110001011100001111000001110001011100001111000010100000110100001100100010100000111000101110001010110000111000101110</p>
                            <p>0001111000001110001011110001101100010100000011100010111100011100000011100010111100011010000011100010111000101111000011100010111000011110000011100010111100100001000011100010111000101101000011100010111000101110000101000000111000101111000110010000111000101110000110010000111000101110000110100000</p>
                            <p>1110001011100010111000001110001011110001101100001110001011100001100100001110001011110010111000001110001011110010001000001110001011100010000100001110001011100001111000010100000011100010111000101101000011100010111000011001000101000000111000101111000110010000111000101111001010110000111000101110</p>
                            <p>0010110100001110001011100010101000001110001011100001111000010100000011100010111000100001000011100010111000101101000011100010111100011101000011100010111000101110000011100010111100011001000011100010111000101100000011100010111000011001000011100010111100011110000111000101110001000010000111000101110001011100000111000101110001011010000111000101110001011010000111000101</p>
                            <p>1110010101100001110001011110001111000010100000011100010111100011011000011100010111000011110000011100010111100011110000011100010111000101101000011100010111000101110000011100010111000101011000011100010111000101110000011100010111000011100000011100010111000100001000011100010111000100010000101110</p>
                            <p>0010100000011100010110000101010000011100010111000011001000011100010111000101010000101000000111000101111000110010000111000101110000111100000111000101110001000000000111000101111000111000000111000101110001010110000111000101111001011000000111000101111000110110000111000101110000110010000111000101</p>
                            <p>11100011011000101000000111000101110001000010000111000101111000111100001010000001110001011110001110000001110001011110001101000001110001011100010000100001110001011100010101100001110001011100010000100001110001011100010001000010100000011100010001000011111000101000000111000101111000111000000111000101111000110100000111000101110001011110000111000101110000111100000111000</p>
                            <p>10111100100001000011100010111000101101000011100010111000101110000101000000111000101110001000000000111000101110000110010000111000101110000110110000111000101110000111100000111000101111000110010000111000101111001000010000111000101110000111100000111000101110001011010000111000101110001011010000111000101111001010110000111000101110000111100001010000001110001011100010111</p>
                            <p>1000011100010111100011001000011100010111000101110000011100010111000011110000011100010111000101010000011100010111100011011000011100010111100101011000101000000111000101110001011110000111000101110001011100001010000001110001011110001101000001110001011100010111000001110001011100010000000001110001</p>
                            <p>0111000011101000011100010111000011001000011100010111000101101000011100010111000100001000011100010111100101110000101000000111000101110001000010001010000001110001011110001101000001110001011100010111000001110001011100001101100001110001011100001111000001110001011110001100100001110001011110010000</p>
                            <p>100001110001011100001111000001110001011100010110100001110001011110001101000001110001011110001101100001110001011100001101100001110001011100010111000001110001011100001101100001110001011100001100100001110001011100010110100</p>
                            <p>0011100010111000100001000011100010111100101110000101000000111000101110001000010000111000101110001011010000111000101111000111010000111000101110001011100000111000101111000110010000111000101110001011000000111000101110000110010000111000101111000111110000111000101110001000010000111000101110001011</p>
                            <p>0010100000011100010111000101111000011100010111000101110000101000000111000101111000110100000111000101110001011100000111000101110001000000000111000101110000111010000111000101110000110010000111000101110001011010000111000101110001000010000111000101111001011100001010000001110001011100010000100010</p>
                            <p>1000000111000101111000110100000111000101110001011100000111000101110000110110000111000101110000111100000111000101111000110010000111000101111001000010000111000101110000111100000111000101110001011010000111000101111000110100000111000101111000110110000111000101110000110110000111000101110001011100</p>
                            <p>0001110001011100001101100001110001011100001100100001110001011100010110100001110001011100010000100001110001011110010111000010100000011100010111000100001000011100010111000101101000011100010111100011101000011100010111000101110000011100010111100011001000011100010111000101100000011100010111000011</p>
                            <p>0010000111000101111000111110000111000101110001000010000111000101110001011100000111000101110001011010000111000101110001011010000111000101111001010110000111000101111000111100001010000001110001011110001101000001110001011100010000100001110001011110001101000001110001011110001101100001110001011100</p>
                            <p>0011110000011100010111000101100000101000000111000101110000110110001010000001110001011100010101000001110001011110001100100001110001011110001110000001110001011100010111100001110001011100010110100001110001011110010101100001110001011110001111000010100000011100010111000100001000101000000111000101</p>
                            <p>111000110100000111000101111000110010000111000101110000111100000111000101110000111010000111000101110001011010000111000101110001000010000111000101111000111100001010000001110001011100010111000001110001011110001100100001110</p>
                            <p>0101110001000010000111000101110001000000000111000101110000110010000111000101111000111110000111000101110001000010000111000101111001011110000111000101111000111100001010000001110001011110001100100001110001011100001100100001110001011100010000000001110001011100010101100001110001011100010000100001</p>
                            <p>1100010111100100000000011100010111000101101000011100010111000101110000011100101110000111000000111000101110001011100001010000001110001011100010111100001110001011110001100100001110001011100010111000001110001011110001110100001110001011100010000100001110001011100010101100001110001011110010111100010111</p>
                           
                            
                            </div>                            
                          </div>

                        </div>
                        <div class="col-11 col-md-8 home_double_ul">
                              <ul>
                                  <li><p><span style="color:#c5004a;">Сохранность</span> интеллектуальной собственности<i class="fa fa-circle d-none d-md-inline-block" aria-hidden="true"></i></p></li>
                                  <li><p><span style="color:#c5004a;">Система скидок</span> для постоянных клиентов<i class="fa fa-circle d-none d-md-inline-block" aria-hidden="true"></i></p></li>
                              </ul>
                        </div>
                      </div>

                    </div>
                  </div>
                  <!-- end РАБОТА С КРУПНЫМИ И СРЕДНИМИ КОМПАНИЯМИ -->

                  <!-- Отступ -->
                  <div class="row">
                    <div class="col-12 mt-4 mb-4"></div>
                  </div>
                  <!------------>
                   <!-- Отступ -->
                  <div class="row">
                    <div class="col-12 mt-4 mb-4"></div>
                  </div>
                  <!------------>
                  <!-- Отступ -->
                  <div class="row">
                    <div class="col-12 mt-4 mb-4"></div>
                  </div>
                  <!------------>
                  
                 

                      <!-- ПОЛНЫЙ СПЕКТР КОМПЬЮТЕРНЫХ УСЛУГ -->
                  <div class="row">
                    <div class="col-12 home_our_advantages">

                      <div class="row">
                        <div class="col-12 col-xl-8 col-lg-8 mx-auto text-center text-lg-left">                                             
                          <h2>
                            <span class="glitch" data-text="Полный" style="display:inline-block">Полный</span> 
                            <span class="glitch" data-text="спектр" style="display:inline-block">спектр</span>
                            <span class="glitch" data-text="компьютерных" style="display:inline-block">компьютерных</span>
                            <span class="glitch" data-text="услуг" style="display:inline-block">услуг</span>
                          </h2>
                        </div>
                      </div>

                      <!-- Отступ -->
                      <div class="row">
                        <div class="col-12 mt-4"></div>
                      </div>
                      <!------------>
                     
                      <div class="row home_special_wrapper">
                        <div class="col-12 col-md-8 mx-auto home_work_with_big">
                          <div class="row">
                            <div class="home_klava_wrapper">
                              <img src="images/home/advantages/klava_1.png">
                            </div>
                            <div class="col-4 home_circle_wrapper">                                       
                              <img class="circle_one" src="images/home/advantages/circle_one.png">
                              <img class="circle_two" src="images/home/advantages/circle_two.png">
                              <img class="circle_three" src="images/home/advantages/circle_three.png">
                            </div>

                            <div class="home_double_code code_two" style="background-image: url(images/home/advantages/logo_layer.png)"></div>                            
                          </div>

                        </div>
                        <div class="col-11 col-md-8 home_double_ul home_ul_two">
                              <ul>
                                  <li><p><span>от</span> настройки компьютеров<i class="fa fa-circle d-none d-md-inline-block" aria-hidden="true"></i></p></li>
                                  <li><p><span>до</span> построения IT-инфраструктуры предприятия<i class="fa fa-circle d-none d-md-inline-block" aria-hidden="true"></i></p></li>
                              </ul>
                        </div>
                      </div>

                    </div>
                  </div>
                  <!-- end ПОЛНЫЙ СПЕКТР КОМПЬЮТЕРНЫХ УСЛУГ -->

                  <!-- Отступ -->
                  <div class="row">
                    <div class="col-12 mt-4 mb-4"></div>
                  </div>
                  <!------------>
                   <!-- Отступ -->
                  <div class="row">
                    <div class="col-12 mt-4 mb-4"></div>
                  </div>
                  <!------------>
                  <!-- Отступ -->
                  <div class="row">
                    <div class="col-12 mt-4 mb-4"></div>
                  </div>
                  <!------------>

                  <!-- БЕСПЛАТНЫЙ АУДИТ И КОНСУЛЬТАЦИЯ -->
                  <div class="row">
                    <div class="col-12 home_our_advantages">

                      <div class="row">
                        <div class="col-12 col-xl-8 col-lg-8 mx-auto text-center text-lg-left">                                             
                          <h2>
                            <span class="glitch" data-text="Бесплатный" style="display:inline-block">Бесплатный</span> 
                            <span class="glitch" data-text="аудит" style="display:inline-block">аудит</span>
                            <span class="glitch" data-text="и" style="display:inline-block">и</span>
                            <span class="glitch" data-text="консультация" style="display:inline-block">консультация</span>
                          </h2>
                        </div>
                      </div>

                      <!-- Отступ -->
                      <div class="row">
                        <div class="col-12 mt-4"></div>
                      </div>
                      <!------------>
                     
                      <div class="row home_special_wrapper">
                        <div class="col-12 col-md-8 mx-auto home_work_with_big">
                          <div class="row">
                            <div class="home_consult_wrapper">
                              <img src="images/home/advantages/consult.png">
                            </div>
                            <div class="home_connect_wrapper">                                       
                              <p>FREE</p>
                            </div>

                            <div class="col-12 home_net" style="background-image: url(images/home/advantages/net.png)"></div>                            
                          </div>

                        </div>
                        <div class="col-11 col-md-8 home_double_ul home_ul_three">
                              <ul>
                                  <li><p><span>Бесплатная</span> консультация по телефону<i class="fa fa-circle d-none d-md-inline-block" aria-hidden="true"></i></p></li>
                                  <li><p><span>Первичная</span> диагностика IT-инфраструктуры бесплатно<i class="fa fa-circle d-none d-md-inline-block" aria-hidden="true"></i></p></li>
                                  <li><p><span>Круглосуточная</span> поддержка клиентов<i class="fa fa-circle d-none d-md-inline-block" aria-hidden="true"></i></p></li>
                              </ul>
                        </div>
                      </div>

                    </div>
                  </div>
                  <!-- end БЕСПЛАТНЫЙ АУДИТ И КОНСУЛЬТАЦИЯ -->



                  <!-- Отступ -->
                  <div class="row d-none d-md-block d-lg-block">
                    <div class="col-12 mt-4 mb-4"></div>
                  </div>
                  <!------------>
                   <!-- Отступ -->
                  <div class="row">
                    <div class="col-12 mt-4 mb-4"></div>
                  </div>
                  <!------------>
                  <!-- Отступ -->
                  <div class="row">
                    <div class="col-12 mt-4 mb-4"></div>
                  </div>
                  <!------------>
                  <!-- Отступ -->
                  <div class="row">
                    <div class="col-12 mt-4 mb-4"></div>
                  </div>
                  <!------------>

                </div>
              </div>
            </div>
          </content>
    <!--== END CONTENT ==-->

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script src="libraries/mask/jquery.maskedinput.min.js"></script>
    <script src="js/mobile-menu.js"></script>
    <script src="js/popup.js"></script>
    <script type="text/javascript" src="js/script_form_validate.js"></script>

  </body>
</html>',
    '_isForward' => true,
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'elementCache' => 
  array (
    '[[$check_user]]' => '<script>
(function() {

    var loc = window.location.href;
    if( loc.lastIndexOf(\'?service=logout\') != -1 ) {

        var num_1 = 0;
        var num_2 = loc.lastIndexOf(\'?service=logout\');
        loc = loc.substring(num_1, num_2 - 1);

        window.location.href = loc;
    } 
    
})();
</script>',
    '[[$left_call_button]]' => '<div class="left_call_button d-block d-lg-none" id="mobile">
    <i class="fa fa-phone" aria-hidden="true"></i>
</div>',
    '[[$Header]]' => '<!--=== HEADER ===-->
      <header class="bypro_header">
        <div class="col-12">
          <div class="row align-items-center">

            <div class="col-6 col-xl-2 col-lg-2 col-md-2">
              <div class="bypro_div_logo"><a href="#">
                <a href="http://work1.d0022330.atservers.net/"><img src="images/logo/logo.png" alt="bypro-logo" title="ByPro"/></a>
              </a></div>
            </div>
            
            <div class="col-8 d-none d-xl-block d-lg-block text-center">
              <p class="my-auto"><strong>
                <span class="head_software">software</span>
                <span class="head_hardware">hardware</span>
                <span class="head_solutions">solutions</span>
              </strong></p>
            </div>

            <div class="col-8 col-xl-2 col-lg-2 col-md-4 ml-auto d-none d-xl-block d-lg-block d-md-block bypro_social">
              <div class="row">
                <div class="col-2"><a href="https://www.instagram.com/bypro.by/" target="_blank">In</a></div>
                <div class="col-2"><a href="https://www.facebook.com/bypro.by1/?ref=bookmarks" target="_blank">f</a></div>
                <div class="col-2"><a href="https://www.linkedin.com/company/bypro/" target="_blank">Li</a></div>
                <div class="col-2"><a href="https://plus.google.com/105026163117668235138?hl=ru" target="_blank">G+</a></div>
                <div class="col-2"><a href="https://www.youtube.com/channel/UCtbWWvQXy9NNGFz6Aq5qSCQ/featured?view_as=subscriber" target="_blank">You</a></div>
              </div>
            </div>
            
            <!-- Иконки быстрой связи -->
                  <div class="col-6 text-center left_menu_icons d-block d-md-none">
                    <div class="services_button_consult" id="consult">
                      <span title="Консультация"><img src="images/left-menu/consult.png"></span>
                    </div>
                    <div class="services_button_one" id="one">
                      <span title="Договор"><img src="images/left-menu/contract.png"></span>
                    </div>
                    [[!enter_or_cabinet_or_exit]]
                  </div>
            <!-- END Иконки быстрой связи -->

          </div>
        </div>
      </header>
    <!--=== HEADER ===-->',
    '[[$Pop_ups]]' => '<!-- POP-UP Cabinet -->
              <div id="modal-cabinet">
                <div class="modal-background-cabinet">
                  <div class="modal-cabinet pl-0 pr-0">
                    <div class="popup_close" id="close_cabinet">
                        Закрыть
                      <div class="popup_dot"></div>
                      <div class="popup_dot"></div>
                    </div>
                    <div class="row" id="cabinet_form_content">
                      <div class="col-12">
                        <div class="row">
                          <div class="col-10 mx-auto mt-4 text-left">

                            [[!Login? &loginTpl=`Cabinet` &logoutTpl=`lgnLogoutTpl` &errTpl=`lgnErrTpl` &loginResourceId=`13` &logoutResourceId=`12`]] 
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
<!--end POP-UP Cabinet -->


<!-- POP-UP Mobile_call -->
              <div id="modal-mobile-call">
                <div class="modal-background-mobile">
                  <div class="modal-mobile pl-0 pr-0">
                    <div class="popup_close" id="close_mobile">
                        Закрыть
                      <div class="popup_dot"></div>
                      <div class="popup_dot"></div>
                    </div>
                    <div class="row" id="mobile_form_content">
                      <div class="col-12">
                        <div class="row">
                          <div class="col-12 mx-auto mt-4 text-left">
                            <div class="row">
                                <div class="col-10 mx-auto">
                                    <button class="mt-4 btn mobile-send"><a href="tel:+375(29) 385-08-08">Позвонить Менеджеру</a></button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-10 mx-auto">
                                    <button class="mt-4 btn mobile-send"><a href="tel:+375(29) 212-38-58">Техподдержка</a></button>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
<!--end POP-UP Mobile_call -->



<!-- POP-UP 1 Consult -->
              <div id="modal-container-consult">
                <div class="modal-background-consult">
                  <div class="modal-consult">
                    <div class="popup_close" id="close_consult">
                        Закрыть
                      <div class="popup_dot"></div>
                      <div class="popup_dot"></div>
                    </div>
                    <div class="row" id="consult_form_content">
                      <div class="col-12">
                        <div class="row">
                          <div class="col-12 mx-auto mt-4 text-left">
                            <div id="consult_title">
                                <h2 class="text-center">Вы можете заказать бесплатную консультацию</h2>
                                <h5 class="my-2 mt-4 text-center">Оставьте контактный номер телефона и мы свяжемся с Вами в течении 60 минут</h5>
                            </div>
                            <p><iframe id="frame_consult" class="frame_absolute" name="area" style="border:0; width: 100%;"></iframe></p>
                            <form class="sevrices_form_one" action="php/form_consult_validate.php" method="POST" name="consultForm" id="consultFormID" target="area"  onsubmit="return validateConsult()">
                              <div class="form-group mt-4 mb-4">
                              
                                <div class="row">
                                  <div class="col-12 col-xl-6">
                                    <p class="my-2">Телефон для связи</p><span id="phone_warning"></span>
                                    <input id="phoneID" class="form-control form-control-sm" name="phone" form="consultFormID" type="text" placeholder="(XXX)XXX-XXXX">
                                  </div>
                                  <div class="col-12 col-xl-6">
                                    <p class="my-2">Контактное лицо</p><span id="name_warning"></span>
                                    <input id="nameID" class="form-control form-control-sm" name="who" form="consultFormID" type="text" placeholder="Ф.И.О">
                                  </div>
                                </div>
                                
                                <div class="row">
                                  <div class="col-12 col-xl-6 mx-auto text-center" id="consult_captcha"><div class="mt-4" style="width: 100%; height: 50px; background-color:gray;"></div></div>
                                  <div class="col-12 col-xl-6 mx-auto text-center">
                                    <button type="submit" class="mt-4 btn popup_send">Отправить</button>
                                  </div>
                                </div>

                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
<!--end POP-UP Consult -->

    <!-- POP-UP 1 -->
              <div id="modal-container">
                <div class="modal-background">
                  <div class="modal">
                    <div class="popup_close" id="close_one">
                        Закрыть
                      <div class="popup_dot"></div>
                      <div class="popup_dot"></div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="row">
                          <div class="col-12 mx-auto mt-4 text-left">
                            <h2 id="form_contract_title" class="text-center">Форма для заключения договора</h2>
                            <h5 id="form_contract_text" class="my-2 mt-4">Согласно этой информации составляется договор на обслуживание, после чего
                                договор высылается Вам по почте и на указанный email.
                            </h5>
                            <p><iframe id="frame_contract" class="frame_absolute" name="area1" style="border:0; width: 100%;"></iframe></p>
                            <form class="sevrices_form_one" action="php/form_contract_validate.php" method="POST" target="area1"  name="oneForm" id="oneFormID">
                              <div class="form-group mt-4 mb-4">
                                    
                                <div class="row">
                                  <div class="col-12 col-xl-6 mx-auto my-2">
                                    <p>Выберите тип договора (разовый / годовой)</p>
                                    <select id="inputState" name="contract" class="form-control">
                                      <option selected value="one">Разовый договор</option>
                                      <option value="year">Годовой договор</option>
                                    </select>
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-12 col-xl-6">
                                    <p class="my-2">Название организации </p><span></span>
                                    <input name="organisation" id="organisation" class="form-control form-control-sm" form="oneFormID" type="text" placeholder="Например: ООО\'БайПРО\'">
                                  </div>
                                  <div class="col-12 col-xl-6">
                                    <p class="my-2">Ф.И.О. руководителя </p><span></span>
                                    <input name="director" id="director" class="form-control form-control-sm" form="oneFormID" type="text" placeholder="Будет указано в договоре">
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-12 col-xl-6">
                                    <p class="my-2">Телефон для связи</p><span id="tel"></span>
                                    <input name="phone" id="phone" class="form-control form-control-sm" form="oneFormID" type="text" placeholder="(XXX)XXX-XXXX">
                                  </div>
                                  <div class="col-12 col-xl-6">
                                    <p class="my-2">Дополнительный телефонный номер</p><span id="dop_tel"></span>
                                    <input name="phone2" id="phone2" class="form-control form-control-sm" form="oneFormID" type="text" placeholder="Номер телефона без маски">
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-12 col-xl-6">
                                    <p class="my-2">Юридический адрес организации </p><span></span>
                                    <input name="adres" id="adres" class="form-control form-control-sm" form="oneFormID" type="text" placeholder="Будет указан в договоре">
                                  </div>
                                  <div class="col-12 col-xl-6">
                                    <p class="my-2">Контактное лицо</p> <span></span>
                                    <input name="contact_face" id="contact_face" class="form-control form-control-sm" form="oneFormID" type="text" placeholder="Ф.И.О">
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-12 col-xl-6">
                                    <p class="my-2">Почтовый адрес организации </p><span></span>
                                    <input name="post_adress" id="post_adress" class="form-control form-control-sm" form="oneFormID" type="text" placeholder="Для отправки копии договора">
                                  </div>
                                  <div class="col-12 col-xl-6">
                                    <p class="my-2">Email организации </p><span></span>
                                    <input name="email" id="email" class="form-control form-control-sm" form="oneFormID" type="text" placeholder="Для электронных писем">
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-12 col-xl-6">
                                    <p class="my-2">Расчётный счёт организации </p><span></span>
                                    <input name="account" id="account" class="form-control form-control-sm" form="oneFormID" type="text" placeholder="">
                                  </div>
                                  <div class="col-12 col-xl-6">
                                    <p class="my-2">УНП организации </p><span></span>
                                    <input name="unp" id="unp" class="form-control form-control-sm" form="oneFormID" type="text" placeholder="">
                                  </div>
                                </div>
                                
                               <div class="row">
                                  <div class="col-12 col-xl-6 mx-auto text-center">
                                    <button type="submit" class="mt-4 btn popup_send" onclick="return validateContract();">Отправить</button>
                                  </div>
                                </div>

                              </div>
                            </form>
                            
                             
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--end POP-UP 1 -->',
    '[[$Footer_left_menu]]' => '<!-- ПОДВАЛ -->
              <div class="row bypro_left_menu_footer">
                
                <!-- Иконки быстрой связи -->

                  <div class="col-12 text-center left_menu_icons d-none d-md-block">
                    <div class="py-4 services_button_consult" id="consult">
                      <span title="Консультация"><img src="images/left-menu/consult.png"></span>
                    </div>
                    <div class="py-4 services_button_one" id="one">
                      <span title="Договор"><img src="images/left-menu/contract.png"></span>
                    </div>
                    
                    [[!enter_or_cabinet_or_exit]] <!-- Снипет выводит либо ссылку на кабинет, либо форму входа -->
                   
                  </div>

                <!-- END Иконки быстрой связи -->

                <div class="bypro_left_menu_footer_logo">
                  <a href="http://work1.d0022330.atservers.net/">
                    <p class="mb-0 pt-2 text-right">ООО БайПРО</p>
                  </a>
                </div>
              </div>
            <!-- END ПОДВАЛ -->',
    '[[$Left_menu]]' => ' <!--== Hamburger ==-->
    <div class="d-block d-xl-none d-lg-none bypro_hamburker">
      <div class="menu-icon">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
      </div>
    </div>
    <!--== end Hamburger ==-->

<!-- POP-UP Cabinet -->
              <div id="modal-cabinet">
                <div class="modal-background-cabinet">
                  <div class="modal-cabinet pl-0 pr-0">
                    <div class="popup_close" id="close_cabinet">
                        Закрыть
                      <div class="popup_dot"></div>
                      <div class="popup_dot"></div>
                    </div>
                    <div class="row" id="cabinet_form_content">
                      <div class="col-12">
                        <div class="row">
                          <div class="col-10 mx-auto mt-4 text-left">

                            [[!Login? &loginTpl=`Cabinet` &logoutTpl=`lgnLogoutTpl` &errTpl=`lgnErrTpl` &loginResourceId=`13` &logoutResourceId=`12`]] 
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
<!--end POP-UP Cabinet -->


<!-- POP-UP Mobile_call -->
              <div id="modal-mobile-call">
                <div class="modal-background-mobile">
                  <div class="modal-mobile pl-0 pr-0">
                    <div class="popup_close" id="close_mobile">
                        Закрыть
                      <div class="popup_dot"></div>
                      <div class="popup_dot"></div>
                    </div>
                    <div class="row" id="mobile_form_content">
                      <div class="col-12">
                        <div class="row">
                          <div class="col-12 mx-auto mt-4 text-left">
                            <div class="row">
                                <div class="col-10 mx-auto">
                                    <button class="mt-4 btn mobile-send"><a href="tel:+375(29) 385-08-08">Позвонить Менеджеру</a></button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-10 mx-auto">
                                    <button class="mt-4 btn mobile-send"><a href="tel:+375(29) 212-38-58">Техподдержка</a></button>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
<!--end POP-UP Mobile_call -->



<!-- POP-UP 1 Consult -->
              <div id="modal-container-consult">
                <div class="modal-background-consult">
                  <div class="modal-consult">
                    <div class="popup_close" id="close_consult">
                        Закрыть
                      <div class="popup_dot"></div>
                      <div class="popup_dot"></div>
                    </div>
                    <div class="row" id="consult_form_content">
                      <div class="col-12">
                        <div class="row">
                          <div class="col-12 mx-auto mt-4 text-left">
                            <div id="consult_title">
                                <h2 class="text-center">Вы можете заказать бесплатную консультацию</h2>
                                <h5 class="my-2 mt-4 text-center">Оставьте контактный номер телефона и мы свяжемся с Вами в течении 60 минут</h5>
                            </div>
                            <p><iframe id="frame_consult" class="frame_absolute" name="area" style="border:0; width: 100%;"></iframe></p>
                            <form class="sevrices_form_one" action="php/form_consult_validate.php" method="POST" name="consultForm" id="consultFormID" target="area"  onsubmit="return validateConsult()">
                              <div class="form-group mt-4 mb-4">
                              
                                <div class="row">
                                  <div class="col-12 col-xl-6">
                                    <p class="my-2">Телефон для связи</p><span id="phone_warning"></span>
                                    <input id="phoneID" class="form-control form-control-sm" name="phone" form="consultFormID" type="text" placeholder="(XXX)XXX-XXXX">
                                  </div>
                                  <div class="col-12 col-xl-6">
                                    <p class="my-2">Контактное лицо</p><span id="name_warning"></span>
                                    <input id="nameID" class="form-control form-control-sm" name="who" form="consultFormID" type="text" placeholder="Ф.И.О">
                                  </div>
                                </div>
                                
                                <div class="row">
                                  <div class="col-12 col-xl-6 mx-auto text-center" id="consult_captcha"><div class="mt-4" style="width: 100%; height: 50px; background-color:gray;"></div></div>
                                  <div class="col-12 col-xl-6 mx-auto text-center">
                                    <button type="submit" class="mt-4 btn popup_send">Отправить</button>
                                  </div>
                                </div>

                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
<!--end POP-UP Consult -->

    <!-- POP-UP 1 -->
              <div id="modal-container">
                <div class="modal-background">
                  <div class="modal">
                    <div class="popup_close" id="close_one">
                        Закрыть
                      <div class="popup_dot"></div>
                      <div class="popup_dot"></div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="row">
                          <div class="col-12 mx-auto mt-4 text-left">
                            <h2 id="form_contract_title" class="text-center">Форма для заключения договора</h2>
                            <h5 id="form_contract_text" class="my-2 mt-4">Согласно этой информации составляется договор на обслуживание, после чего
                                договор высылается Вам по почте и на указанный email.
                            </h5>
                            <p><iframe id="frame_contract" class="frame_absolute" name="area1" style="border:0; width: 100%;"></iframe></p>
                            <form class="sevrices_form_one" action="php/form_contract_validate.php" method="POST" target="area1"  name="oneForm" id="oneFormID">
                              <div class="form-group mt-4 mb-4">
                                    
                                <div class="row">
                                  <div class="col-12 col-xl-6 mx-auto my-2">
                                    <p>Выберите тип договора (разовый / годовой)</p>
                                    <select id="inputState" name="contract" class="form-control">
                                      <option selected value="one">Разовый договор</option>
                                      <option value="year">Годовой договор</option>
                                    </select>
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-12 col-xl-6">
                                    <p class="my-2">Название организации </p><span></span>
                                    <input name="organisation" id="organisation" class="form-control form-control-sm" form="oneFormID" type="text" placeholder="Например: ООО\'БайПРО\'">
                                  </div>
                                  <div class="col-12 col-xl-6">
                                    <p class="my-2">Ф.И.О. руководителя </p><span></span>
                                    <input name="director" id="director" class="form-control form-control-sm" form="oneFormID" type="text" placeholder="Будет указано в договоре">
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-12 col-xl-6">
                                    <p class="my-2">Телефон для связи</p><span id="tel"></span>
                                    <input name="phone" id="phone" class="form-control form-control-sm" form="oneFormID" type="text" placeholder="(XXX)XXX-XXXX">
                                  </div>
                                  <div class="col-12 col-xl-6">
                                    <p class="my-2">Дополнительный телефонный номер</p><span id="dop_tel"></span>
                                    <input name="phone2" id="phone2" class="form-control form-control-sm" form="oneFormID" type="text" placeholder="Номер телефона без маски">
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-12 col-xl-6">
                                    <p class="my-2">Юридический адрес организации </p><span></span>
                                    <input name="adres" id="adres" class="form-control form-control-sm" form="oneFormID" type="text" placeholder="Будет указан в договоре">
                                  </div>
                                  <div class="col-12 col-xl-6">
                                    <p class="my-2">Контактное лицо</p> <span></span>
                                    <input name="contact_face" id="contact_face" class="form-control form-control-sm" form="oneFormID" type="text" placeholder="Ф.И.О">
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-12 col-xl-6">
                                    <p class="my-2">Почтовый адрес организации </p><span></span>
                                    <input name="post_adress" id="post_adress" class="form-control form-control-sm" form="oneFormID" type="text" placeholder="Для отправки копии договора">
                                  </div>
                                  <div class="col-12 col-xl-6">
                                    <p class="my-2">Email организации </p><span></span>
                                    <input name="email" id="email" class="form-control form-control-sm" form="oneFormID" type="text" placeholder="Для электронных писем">
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-12 col-xl-6">
                                    <p class="my-2">Расчётный счёт организации </p><span></span>
                                    <input name="account" id="account" class="form-control form-control-sm" form="oneFormID" type="text" placeholder="">
                                  </div>
                                  <div class="col-12 col-xl-6">
                                    <p class="my-2">УНП организации </p><span></span>
                                    <input name="unp" id="unp" class="form-control form-control-sm" form="oneFormID" type="text" placeholder="">
                                  </div>
                                </div>
                                
                               <div class="row">
                                  <div class="col-12 col-xl-6 mx-auto text-center">
                                    <button type="submit" class="mt-4 btn popup_send" onclick="return validateContract();">Отправить</button>
                                  </div>
                                </div>

                              </div>
                            </form>
                            
                             
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--end POP-UP 1 -->

    <!--=== LEFT MENU ===-->
        <div class="col-12 col-xl-2 col-lg-2 bypro_menu_points">
          <div class="row align-items-center bypro_menu_points_wrapper">
            <div class="col-12">
              <div class="row">
                <menu>
                 
                  <li class="mt-2 mb-2">
                    <a href="o-kompanii" class="glitch-btn">
                      <div class="text">о компании</div>
                      <div class="mask mask1">
                        <span>о компании</span>
                      </div>
                       <div class="mask mask2">
                        <span>о компании</span>
                      </div>
                      <div class="mask mask3">
                        <span>о компании</span>
                      </div>
                    </a>
                  </li>
                  <li class="mt-2 mb-2">
                    <a href="uslugi" class="bypro_colorLogo glitch-btn">
                      <div class="text">услуги</div>
                      <div class="mask mask1">
                        <span>услуги</span>
                      </div>
                       <div class="mask mask2">
                        <span>услуги</span>
                      </div>
                      <div class="mask mask3">
                        <span>услуги</span>
                      </div>
                    </a>
                  </li>
                  <li class="mt-2 mb-2">
                    <a href="produktyi" class="bypro_colorLogo glitch-btn">
                      <div class="text">продукты</div>
                      <div class="mask mask1">
                        <span>продукты</span>
                      </div>
                       <div class="mask mask2">
                        <span>продукты</span>
                      </div>
                      <div class="mask mask3">
                        <span>продукты</span>
                      </div>
                    </a>
                  </li>
                  <li class="mt-2 mb-2">
                    <a href="otzyivyi" class="glitch-btn">
                      <div class="text">отзывы</div>
                      <div class="mask mask1">
                        <span>отзывы</span>
                      </div>
                       <div class="mask mask2">
                        <span>отзывы</span>
                      </div>
                      <div class="mask mask3">
                        <span>отзывы</span>
                      </div>
                    </a>
                  </li>
                  <li class="mt-2 mb-2">
                    <a href="kontaktyi" class="glitch-btn">
                      <div class="text">контакты</div>
                      <div class="mask mask1">
                        <span>контакты</span>
                      </div>
                       <div class="mask mask2">
                        <span>контакты</span>
                      </div>
                      <div class="mask mask3">
                        <span>контакты</span>
                      </div>
                    </a>
                  </li>
                  <li class="mt-2 mb-2">
                    <a href="novosti" class="glitch-btn">
                      <div class="text">новости</div>
                      <div class="mask mask1">
                        <span>новости</span>
                      </div>
                       <div class="mask mask2">
                        <span>новости</span>
                      </div>
                      <div class="mask mask3">
                        <span>новости</span>
                      </div>
                    </a>
                  </li>
                  <li class="mt-2 mb-2">
                    <a href="vakansii" class="glitch-btn">
                      <div class="text">вакансии</div>
                      <div class="mask mask1">
                        <span>вакансии</span>
                      </div>
                       <div class="mask mask2">
                        <span>вакансии</span>
                      </div>
                      <div class="mask mask3">
                        <span>вакансии</span>
                      </div>
                    </a>
                  </li>
                </menu>
              </div>
            
<!-- ПОДВАЛ -->
              <div class="row bypro_left_menu_footer">
                
                <!-- Иконки быстрой связи -->

                  <div class="col-12 text-center left_menu_icons d-none d-md-block">
                    <div class="py-4 services_button_consult" id="consult">
                      <span title="Консультация"><img src="images/left-menu/consult.png"></span>
                    </div>
                    <div class="py-4 services_button_one" id="one">
                      <span title="Договор"><img src="images/left-menu/contract.png"></span>
                    </div>
                    
                    [[!enter_or_cabinet_or_exit]] <!-- Снипет выводит либо ссылку на кабинет, либо форму входа -->
                   
                  </div>

                <!-- END Иконки быстрой связи -->

                <div class="bypro_left_menu_footer_logo">
                  <a href="http://work1.d0022330.atservers.net/">
                    <p class="mb-0 pt-2 text-right">ООО БайПРО</p>
                  </a>
                </div>
              </div>
            <!-- END ПОДВАЛ -->

            </div>
          </div>
        </div>

    <!--=== END LEFT MENU ===-->
',
    '[[$script_form_validate]]' => '<script type="text/javascript" src="js/script_form_validate.js"></script>
',
  ),
  'sourceCache' => 
  array (
    'modChunk' => 
    array (
      'check_user' => 
      array (
        'fields' => 
        array (
          'id' => 28,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'check_user',
          'description' => '',
          'editor_type' => 0,
          'category' => 20,
          'cache_type' => 0,
          'snippet' => '<script>
(function() {

    var loc = window.location.href;
    if( loc.lastIndexOf(\'?service=logout\') != -1 ) {

        var num_1 = 0;
        var num_2 = loc.lastIndexOf(\'?service=logout\');
        loc = loc.substring(num_1, num_2 - 1);

        window.location.href = loc;
    } 
    
})();
</script>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<script>
(function() {

    var loc = window.location.href;
    if( loc.lastIndexOf(\'?service=logout\') != -1 ) {

        var num_1 = 0;
        var num_2 = loc.lastIndexOf(\'?service=logout\');
        loc = loc.substring(num_1, num_2 - 1);

        window.location.href = loc;
    } 
    
})();
</script>',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'left_call_button' => 
      array (
        'fields' => 
        array (
          'id' => 13,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'left_call_button',
          'description' => '',
          'editor_type' => 0,
          'category' => 13,
          'cache_type' => 0,
          'snippet' => '<div class="left_call_button d-block d-lg-none" id="mobile">
    <i class="fa fa-phone" aria-hidden="true"></i>
</div>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<div class="left_call_button d-block d-lg-none" id="mobile">
    <i class="fa fa-phone" aria-hidden="true"></i>
</div>',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'Header' => 
      array (
        'fields' => 
        array (
          'id' => 10,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'Header',
          'description' => 'Логотип и соцсети',
          'editor_type' => 0,
          'category' => 16,
          'cache_type' => 0,
          'snippet' => '<!--=== HEADER ===-->
      <header class="bypro_header">
        <div class="col-12">
          <div class="row align-items-center">

            <div class="col-6 col-xl-2 col-lg-2 col-md-2">
              <div class="bypro_div_logo"><a href="#">
                <a href="[[~1]]"><img src="images/logo/logo.png" alt="bypro-logo" title="ByPro"/></a>
              </a></div>
            </div>
            
            <div class="col-8 d-none d-xl-block d-lg-block text-center">
              <p class="my-auto"><strong>
                <span class="head_software">software</span>
                <span class="head_hardware">hardware</span>
                <span class="head_solutions">solutions</span>
              </strong></p>
            </div>

            <div class="col-8 col-xl-2 col-lg-2 col-md-4 ml-auto d-none d-xl-block d-lg-block d-md-block bypro_social">
              <div class="row">
                <div class="col-2"><a href="https://www.instagram.com/bypro.by/" target="_blank">In</a></div>
                <div class="col-2"><a href="https://www.facebook.com/bypro.by1/?ref=bookmarks" target="_blank">f</a></div>
                <div class="col-2"><a href="https://www.linkedin.com/company/bypro/" target="_blank">Li</a></div>
                <div class="col-2"><a href="https://plus.google.com/105026163117668235138?hl=ru" target="_blank">G+</a></div>
                <div class="col-2"><a href="https://www.youtube.com/channel/UCtbWWvQXy9NNGFz6Aq5qSCQ/featured?view_as=subscriber" target="_blank">You</a></div>
              </div>
            </div>
            
            <!-- Иконки быстрой связи -->
                  <div class="col-6 text-center left_menu_icons d-block d-md-none">
                    <div class="services_button_consult" id="consult">
                      <span title="Консультация"><img src="images/left-menu/consult.png"></span>
                    </div>
                    <div class="services_button_one" id="one">
                      <span title="Договор"><img src="images/left-menu/contract.png"></span>
                    </div>
                    [[!enter_or_cabinet_or_exit]]
                  </div>
            <!-- END Иконки быстрой связи -->

          </div>
        </div>
      </header>
    <!--=== HEADER ===-->',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<!--=== HEADER ===-->
      <header class="bypro_header">
        <div class="col-12">
          <div class="row align-items-center">

            <div class="col-6 col-xl-2 col-lg-2 col-md-2">
              <div class="bypro_div_logo"><a href="#">
                <a href="[[~1]]"><img src="images/logo/logo.png" alt="bypro-logo" title="ByPro"/></a>
              </a></div>
            </div>
            
            <div class="col-8 d-none d-xl-block d-lg-block text-center">
              <p class="my-auto"><strong>
                <span class="head_software">software</span>
                <span class="head_hardware">hardware</span>
                <span class="head_solutions">solutions</span>
              </strong></p>
            </div>

            <div class="col-8 col-xl-2 col-lg-2 col-md-4 ml-auto d-none d-xl-block d-lg-block d-md-block bypro_social">
              <div class="row">
                <div class="col-2"><a href="https://www.instagram.com/bypro.by/" target="_blank">In</a></div>
                <div class="col-2"><a href="https://www.facebook.com/bypro.by1/?ref=bookmarks" target="_blank">f</a></div>
                <div class="col-2"><a href="https://www.linkedin.com/company/bypro/" target="_blank">Li</a></div>
                <div class="col-2"><a href="https://plus.google.com/105026163117668235138?hl=ru" target="_blank">G+</a></div>
                <div class="col-2"><a href="https://www.youtube.com/channel/UCtbWWvQXy9NNGFz6Aq5qSCQ/featured?view_as=subscriber" target="_blank">You</a></div>
              </div>
            </div>
            
            <!-- Иконки быстрой связи -->
                  <div class="col-6 text-center left_menu_icons d-block d-md-none">
                    <div class="services_button_consult" id="consult">
                      <span title="Консультация"><img src="images/left-menu/consult.png"></span>
                    </div>
                    <div class="services_button_one" id="one">
                      <span title="Договор"><img src="images/left-menu/contract.png"></span>
                    </div>
                    [[!enter_or_cabinet_or_exit]]
                  </div>
            <!-- END Иконки быстрой связи -->

          </div>
        </div>
      </header>
    <!--=== HEADER ===-->',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'Left_menu' => 
      array (
        'fields' => 
        array (
          'id' => 7,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'Left_menu',
          'description' => '',
          'editor_type' => 0,
          'category' => 13,
          'cache_type' => 0,
          'snippet' => ' <!--== Hamburger ==-->
    <div class="d-block d-xl-none d-lg-none bypro_hamburker">
      <div class="menu-icon">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
      </div>
    </div>
    <!--== end Hamburger ==-->

[[$Pop_ups]]

    <!--=== LEFT MENU ===-->
        <div class="col-12 col-xl-2 col-lg-2 bypro_menu_points">
          <div class="row align-items-center bypro_menu_points_wrapper">
            <div class="col-12">
              <div class="row">
                <menu>
                 
                  <li class="mt-2 mb-2">
                    <a href="[[~2]]" class="glitch-btn">
                      <div class="text">о компании</div>
                      <div class="mask mask1">
                        <span>о компании</span>
                      </div>
                       <div class="mask mask2">
                        <span>о компании</span>
                      </div>
                      <div class="mask mask3">
                        <span>о компании</span>
                      </div>
                    </a>
                  </li>
                  <li class="mt-2 mb-2">
                    <a href="[[~3]]" class="bypro_colorLogo glitch-btn">
                      <div class="text">услуги</div>
                      <div class="mask mask1">
                        <span>услуги</span>
                      </div>
                       <div class="mask mask2">
                        <span>услуги</span>
                      </div>
                      <div class="mask mask3">
                        <span>услуги</span>
                      </div>
                    </a>
                  </li>
                  <li class="mt-2 mb-2">
                    <a href="[[~4]]" class="bypro_colorLogo glitch-btn">
                      <div class="text">продукты</div>
                      <div class="mask mask1">
                        <span>продукты</span>
                      </div>
                       <div class="mask mask2">
                        <span>продукты</span>
                      </div>
                      <div class="mask mask3">
                        <span>продукты</span>
                      </div>
                    </a>
                  </li>
                  <li class="mt-2 mb-2">
                    <a href="[[~5]]" class="glitch-btn">
                      <div class="text">отзывы</div>
                      <div class="mask mask1">
                        <span>отзывы</span>
                      </div>
                       <div class="mask mask2">
                        <span>отзывы</span>
                      </div>
                      <div class="mask mask3">
                        <span>отзывы</span>
                      </div>
                    </a>
                  </li>
                  <li class="mt-2 mb-2">
                    <a href="[[~6]]" class="glitch-btn">
                      <div class="text">контакты</div>
                      <div class="mask mask1">
                        <span>контакты</span>
                      </div>
                       <div class="mask mask2">
                        <span>контакты</span>
                      </div>
                      <div class="mask mask3">
                        <span>контакты</span>
                      </div>
                    </a>
                  </li>
                  <li class="mt-2 mb-2">
                    <a href="[[~7]]" class="glitch-btn">
                      <div class="text">новости</div>
                      <div class="mask mask1">
                        <span>новости</span>
                      </div>
                       <div class="mask mask2">
                        <span>новости</span>
                      </div>
                      <div class="mask mask3">
                        <span>новости</span>
                      </div>
                    </a>
                  </li>
                  <li class="mt-2 mb-2">
                    <a href="[[~8]]" class="glitch-btn">
                      <div class="text">вакансии</div>
                      <div class="mask mask1">
                        <span>вакансии</span>
                      </div>
                       <div class="mask mask2">
                        <span>вакансии</span>
                      </div>
                      <div class="mask mask3">
                        <span>вакансии</span>
                      </div>
                    </a>
                  </li>
                </menu>
              </div>
            
[[$Footer_left_menu]]

            </div>
          </div>
        </div>

    <!--=== END LEFT MENU ===-->
',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => ' <!--== Hamburger ==-->
    <div class="d-block d-xl-none d-lg-none bypro_hamburker">
      <div class="menu-icon">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
      </div>
    </div>
    <!--== end Hamburger ==-->

[[$Pop_ups]]

    <!--=== LEFT MENU ===-->
        <div class="col-12 col-xl-2 col-lg-2 bypro_menu_points">
          <div class="row align-items-center bypro_menu_points_wrapper">
            <div class="col-12">
              <div class="row">
                <menu>
                 
                  <li class="mt-2 mb-2">
                    <a href="[[~2]]" class="glitch-btn">
                      <div class="text">о компании</div>
                      <div class="mask mask1">
                        <span>о компании</span>
                      </div>
                       <div class="mask mask2">
                        <span>о компании</span>
                      </div>
                      <div class="mask mask3">
                        <span>о компании</span>
                      </div>
                    </a>
                  </li>
                  <li class="mt-2 mb-2">
                    <a href="[[~3]]" class="bypro_colorLogo glitch-btn">
                      <div class="text">услуги</div>
                      <div class="mask mask1">
                        <span>услуги</span>
                      </div>
                       <div class="mask mask2">
                        <span>услуги</span>
                      </div>
                      <div class="mask mask3">
                        <span>услуги</span>
                      </div>
                    </a>
                  </li>
                  <li class="mt-2 mb-2">
                    <a href="[[~4]]" class="bypro_colorLogo glitch-btn">
                      <div class="text">продукты</div>
                      <div class="mask mask1">
                        <span>продукты</span>
                      </div>
                       <div class="mask mask2">
                        <span>продукты</span>
                      </div>
                      <div class="mask mask3">
                        <span>продукты</span>
                      </div>
                    </a>
                  </li>
                  <li class="mt-2 mb-2">
                    <a href="[[~5]]" class="glitch-btn">
                      <div class="text">отзывы</div>
                      <div class="mask mask1">
                        <span>отзывы</span>
                      </div>
                       <div class="mask mask2">
                        <span>отзывы</span>
                      </div>
                      <div class="mask mask3">
                        <span>отзывы</span>
                      </div>
                    </a>
                  </li>
                  <li class="mt-2 mb-2">
                    <a href="[[~6]]" class="glitch-btn">
                      <div class="text">контакты</div>
                      <div class="mask mask1">
                        <span>контакты</span>
                      </div>
                       <div class="mask mask2">
                        <span>контакты</span>
                      </div>
                      <div class="mask mask3">
                        <span>контакты</span>
                      </div>
                    </a>
                  </li>
                  <li class="mt-2 mb-2">
                    <a href="[[~7]]" class="glitch-btn">
                      <div class="text">новости</div>
                      <div class="mask mask1">
                        <span>новости</span>
                      </div>
                       <div class="mask mask2">
                        <span>новости</span>
                      </div>
                      <div class="mask mask3">
                        <span>новости</span>
                      </div>
                    </a>
                  </li>
                  <li class="mt-2 mb-2">
                    <a href="[[~8]]" class="glitch-btn">
                      <div class="text">вакансии</div>
                      <div class="mask mask1">
                        <span>вакансии</span>
                      </div>
                       <div class="mask mask2">
                        <span>вакансии</span>
                      </div>
                      <div class="mask mask3">
                        <span>вакансии</span>
                      </div>
                    </a>
                  </li>
                </menu>
              </div>
            
[[$Footer_left_menu]]

            </div>
          </div>
        </div>

    <!--=== END LEFT MENU ===-->
',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'Pop_ups' => 
      array (
        'fields' => 
        array (
          'id' => 8,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'Pop_ups',
          'description' => 'Три всплывающих окна: Быстрая связь; Форма договора; Вход в ЛК',
          'editor_type' => 0,
          'category' => 14,
          'cache_type' => 0,
          'snippet' => '<!-- POP-UP Cabinet -->
              <div id="modal-cabinet">
                <div class="modal-background-cabinet">
                  <div class="modal-cabinet pl-0 pr-0">
                    <div class="popup_close" id="close_cabinet">
                        Закрыть
                      <div class="popup_dot"></div>
                      <div class="popup_dot"></div>
                    </div>
                    <div class="row" id="cabinet_form_content">
                      <div class="col-12">
                        <div class="row">
                          <div class="col-10 mx-auto mt-4 text-left">

                            [[!Login? &loginTpl=`Cabinet` &logoutTpl=`lgnLogoutTpl` &errTpl=`lgnErrTpl` &loginResourceId=`13` &logoutResourceId=`12`]] 
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
<!--end POP-UP Cabinet -->


<!-- POP-UP Mobile_call -->
              <div id="modal-mobile-call">
                <div class="modal-background-mobile">
                  <div class="modal-mobile pl-0 pr-0">
                    <div class="popup_close" id="close_mobile">
                        Закрыть
                      <div class="popup_dot"></div>
                      <div class="popup_dot"></div>
                    </div>
                    <div class="row" id="mobile_form_content">
                      <div class="col-12">
                        <div class="row">
                          <div class="col-12 mx-auto mt-4 text-left">
                            <div class="row">
                                <div class="col-10 mx-auto">
                                    <button class="mt-4 btn mobile-send"><a href="tel:+375(29) 385-08-08">Позвонить Менеджеру</a></button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-10 mx-auto">
                                    <button class="mt-4 btn mobile-send"><a href="tel:+375(29) 212-38-58">Техподдержка</a></button>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
<!--end POP-UP Mobile_call -->



<!-- POP-UP 1 Consult -->
              <div id="modal-container-consult">
                <div class="modal-background-consult">
                  <div class="modal-consult">
                    <div class="popup_close" id="close_consult">
                        Закрыть
                      <div class="popup_dot"></div>
                      <div class="popup_dot"></div>
                    </div>
                    <div class="row" id="consult_form_content">
                      <div class="col-12">
                        <div class="row">
                          <div class="col-12 mx-auto mt-4 text-left">
                            <div id="consult_title">
                                <h2 class="text-center">Вы можете заказать бесплатную консультацию</h2>
                                <h5 class="my-2 mt-4 text-center">Оставьте контактный номер телефона и мы свяжемся с Вами в течении 60 минут</h5>
                            </div>
                            <p><iframe id="frame_consult" class="frame_absolute" name="area" style="border:0; width: 100%;"></iframe></p>
                            <form class="sevrices_form_one" action="php/form_consult_validate.php" method="POST" name="consultForm" id="consultFormID" target="area"  onsubmit="return validateConsult()">
                              <div class="form-group mt-4 mb-4">
                              
                                <div class="row">
                                  <div class="col-12 col-xl-6">
                                    <p class="my-2">Телефон для связи</p><span id="phone_warning"></span>
                                    <input id="phoneID" class="form-control form-control-sm" name="phone" form="consultFormID" type="text" placeholder="(XXX)XXX-XXXX">
                                  </div>
                                  <div class="col-12 col-xl-6">
                                    <p class="my-2">Контактное лицо</p><span id="name_warning"></span>
                                    <input id="nameID" class="form-control form-control-sm" name="who" form="consultFormID" type="text" placeholder="Ф.И.О">
                                  </div>
                                </div>
                                
                                <div class="row">
                                  <div class="col-12 col-xl-6 mx-auto text-center" id="consult_captcha"><div class="mt-4" style="width: 100%; height: 50px; background-color:gray;"></div></div>
                                  <div class="col-12 col-xl-6 mx-auto text-center">
                                    <button type="submit" class="mt-4 btn popup_send">Отправить</button>
                                  </div>
                                </div>

                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
<!--end POP-UP Consult -->

    <!-- POP-UP 1 -->
              <div id="modal-container">
                <div class="modal-background">
                  <div class="modal">
                    <div class="popup_close" id="close_one">
                        Закрыть
                      <div class="popup_dot"></div>
                      <div class="popup_dot"></div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="row">
                          <div class="col-12 mx-auto mt-4 text-left">
                            <h2 id="form_contract_title" class="text-center">Форма для заключения договора</h2>
                            <h5 id="form_contract_text" class="my-2 mt-4">Согласно этой информации составляется договор на обслуживание, после чего
                                договор высылается Вам по почте и на указанный email.
                            </h5>
                            <p><iframe id="frame_contract" class="frame_absolute" name="area1" style="border:0; width: 100%;"></iframe></p>
                            <form class="sevrices_form_one" action="php/form_contract_validate.php" method="POST" target="area1"  name="oneForm" id="oneFormID">
                              <div class="form-group mt-4 mb-4">
                                    
                                <div class="row">
                                  <div class="col-12 col-xl-6 mx-auto my-2">
                                    <p>Выберите тип договора (разовый / годовой)</p>
                                    <select id="inputState" name="contract" class="form-control">
                                      <option selected value="one">Разовый договор</option>
                                      <option value="year">Годовой договор</option>
                                    </select>
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-12 col-xl-6">
                                    <p class="my-2">Название организации </p><span></span>
                                    <input name="organisation" id="organisation" class="form-control form-control-sm" form="oneFormID" type="text" placeholder="Например: ООО\'БайПРО\'">
                                  </div>
                                  <div class="col-12 col-xl-6">
                                    <p class="my-2">Ф.И.О. руководителя </p><span></span>
                                    <input name="director" id="director" class="form-control form-control-sm" form="oneFormID" type="text" placeholder="Будет указано в договоре">
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-12 col-xl-6">
                                    <p class="my-2">Телефон для связи</p><span id="tel"></span>
                                    <input name="phone" id="phone" class="form-control form-control-sm" form="oneFormID" type="text" placeholder="(XXX)XXX-XXXX">
                                  </div>
                                  <div class="col-12 col-xl-6">
                                    <p class="my-2">Дополнительный телефонный номер</p><span id="dop_tel"></span>
                                    <input name="phone2" id="phone2" class="form-control form-control-sm" form="oneFormID" type="text" placeholder="Номер телефона без маски">
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-12 col-xl-6">
                                    <p class="my-2">Юридический адрес организации </p><span></span>
                                    <input name="adres" id="adres" class="form-control form-control-sm" form="oneFormID" type="text" placeholder="Будет указан в договоре">
                                  </div>
                                  <div class="col-12 col-xl-6">
                                    <p class="my-2">Контактное лицо</p> <span></span>
                                    <input name="contact_face" id="contact_face" class="form-control form-control-sm" form="oneFormID" type="text" placeholder="Ф.И.О">
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-12 col-xl-6">
                                    <p class="my-2">Почтовый адрес организации </p><span></span>
                                    <input name="post_adress" id="post_adress" class="form-control form-control-sm" form="oneFormID" type="text" placeholder="Для отправки копии договора">
                                  </div>
                                  <div class="col-12 col-xl-6">
                                    <p class="my-2">Email организации </p><span></span>
                                    <input name="email" id="email" class="form-control form-control-sm" form="oneFormID" type="text" placeholder="Для электронных писем">
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-12 col-xl-6">
                                    <p class="my-2">Расчётный счёт организации </p><span></span>
                                    <input name="account" id="account" class="form-control form-control-sm" form="oneFormID" type="text" placeholder="">
                                  </div>
                                  <div class="col-12 col-xl-6">
                                    <p class="my-2">УНП организации </p><span></span>
                                    <input name="unp" id="unp" class="form-control form-control-sm" form="oneFormID" type="text" placeholder="">
                                  </div>
                                </div>
                                
                               <div class="row">
                                  <div class="col-12 col-xl-6 mx-auto text-center">
                                    <button type="submit" class="mt-4 btn popup_send" onclick="return validateContract();">Отправить</button>
                                  </div>
                                </div>

                              </div>
                            </form>
                            
                             
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--end POP-UP 1 -->',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<!-- POP-UP Cabinet -->
              <div id="modal-cabinet">
                <div class="modal-background-cabinet">
                  <div class="modal-cabinet pl-0 pr-0">
                    <div class="popup_close" id="close_cabinet">
                        Закрыть
                      <div class="popup_dot"></div>
                      <div class="popup_dot"></div>
                    </div>
                    <div class="row" id="cabinet_form_content">
                      <div class="col-12">
                        <div class="row">
                          <div class="col-10 mx-auto mt-4 text-left">

                            [[!Login? &loginTpl=`Cabinet` &logoutTpl=`lgnLogoutTpl` &errTpl=`lgnErrTpl` &loginResourceId=`13` &logoutResourceId=`12`]] 
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
<!--end POP-UP Cabinet -->


<!-- POP-UP Mobile_call -->
              <div id="modal-mobile-call">
                <div class="modal-background-mobile">
                  <div class="modal-mobile pl-0 pr-0">
                    <div class="popup_close" id="close_mobile">
                        Закрыть
                      <div class="popup_dot"></div>
                      <div class="popup_dot"></div>
                    </div>
                    <div class="row" id="mobile_form_content">
                      <div class="col-12">
                        <div class="row">
                          <div class="col-12 mx-auto mt-4 text-left">
                            <div class="row">
                                <div class="col-10 mx-auto">
                                    <button class="mt-4 btn mobile-send"><a href="tel:+375(29) 385-08-08">Позвонить Менеджеру</a></button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-10 mx-auto">
                                    <button class="mt-4 btn mobile-send"><a href="tel:+375(29) 212-38-58">Техподдержка</a></button>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
<!--end POP-UP Mobile_call -->



<!-- POP-UP 1 Consult -->
              <div id="modal-container-consult">
                <div class="modal-background-consult">
                  <div class="modal-consult">
                    <div class="popup_close" id="close_consult">
                        Закрыть
                      <div class="popup_dot"></div>
                      <div class="popup_dot"></div>
                    </div>
                    <div class="row" id="consult_form_content">
                      <div class="col-12">
                        <div class="row">
                          <div class="col-12 mx-auto mt-4 text-left">
                            <div id="consult_title">
                                <h2 class="text-center">Вы можете заказать бесплатную консультацию</h2>
                                <h5 class="my-2 mt-4 text-center">Оставьте контактный номер телефона и мы свяжемся с Вами в течении 60 минут</h5>
                            </div>
                            <p><iframe id="frame_consult" class="frame_absolute" name="area" style="border:0; width: 100%;"></iframe></p>
                            <form class="sevrices_form_one" action="php/form_consult_validate.php" method="POST" name="consultForm" id="consultFormID" target="area"  onsubmit="return validateConsult()">
                              <div class="form-group mt-4 mb-4">
                              
                                <div class="row">
                                  <div class="col-12 col-xl-6">
                                    <p class="my-2">Телефон для связи</p><span id="phone_warning"></span>
                                    <input id="phoneID" class="form-control form-control-sm" name="phone" form="consultFormID" type="text" placeholder="(XXX)XXX-XXXX">
                                  </div>
                                  <div class="col-12 col-xl-6">
                                    <p class="my-2">Контактное лицо</p><span id="name_warning"></span>
                                    <input id="nameID" class="form-control form-control-sm" name="who" form="consultFormID" type="text" placeholder="Ф.И.О">
                                  </div>
                                </div>
                                
                                <div class="row">
                                  <div class="col-12 col-xl-6 mx-auto text-center" id="consult_captcha"><div class="mt-4" style="width: 100%; height: 50px; background-color:gray;"></div></div>
                                  <div class="col-12 col-xl-6 mx-auto text-center">
                                    <button type="submit" class="mt-4 btn popup_send">Отправить</button>
                                  </div>
                                </div>

                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
<!--end POP-UP Consult -->

    <!-- POP-UP 1 -->
              <div id="modal-container">
                <div class="modal-background">
                  <div class="modal">
                    <div class="popup_close" id="close_one">
                        Закрыть
                      <div class="popup_dot"></div>
                      <div class="popup_dot"></div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="row">
                          <div class="col-12 mx-auto mt-4 text-left">
                            <h2 id="form_contract_title" class="text-center">Форма для заключения договора</h2>
                            <h5 id="form_contract_text" class="my-2 mt-4">Согласно этой информации составляется договор на обслуживание, после чего
                                договор высылается Вам по почте и на указанный email.
                            </h5>
                            <p><iframe id="frame_contract" class="frame_absolute" name="area1" style="border:0; width: 100%;"></iframe></p>
                            <form class="sevrices_form_one" action="php/form_contract_validate.php" method="POST" target="area1"  name="oneForm" id="oneFormID">
                              <div class="form-group mt-4 mb-4">
                                    
                                <div class="row">
                                  <div class="col-12 col-xl-6 mx-auto my-2">
                                    <p>Выберите тип договора (разовый / годовой)</p>
                                    <select id="inputState" name="contract" class="form-control">
                                      <option selected value="one">Разовый договор</option>
                                      <option value="year">Годовой договор</option>
                                    </select>
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-12 col-xl-6">
                                    <p class="my-2">Название организации </p><span></span>
                                    <input name="organisation" id="organisation" class="form-control form-control-sm" form="oneFormID" type="text" placeholder="Например: ООО\'БайПРО\'">
                                  </div>
                                  <div class="col-12 col-xl-6">
                                    <p class="my-2">Ф.И.О. руководителя </p><span></span>
                                    <input name="director" id="director" class="form-control form-control-sm" form="oneFormID" type="text" placeholder="Будет указано в договоре">
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-12 col-xl-6">
                                    <p class="my-2">Телефон для связи</p><span id="tel"></span>
                                    <input name="phone" id="phone" class="form-control form-control-sm" form="oneFormID" type="text" placeholder="(XXX)XXX-XXXX">
                                  </div>
                                  <div class="col-12 col-xl-6">
                                    <p class="my-2">Дополнительный телефонный номер</p><span id="dop_tel"></span>
                                    <input name="phone2" id="phone2" class="form-control form-control-sm" form="oneFormID" type="text" placeholder="Номер телефона без маски">
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-12 col-xl-6">
                                    <p class="my-2">Юридический адрес организации </p><span></span>
                                    <input name="adres" id="adres" class="form-control form-control-sm" form="oneFormID" type="text" placeholder="Будет указан в договоре">
                                  </div>
                                  <div class="col-12 col-xl-6">
                                    <p class="my-2">Контактное лицо</p> <span></span>
                                    <input name="contact_face" id="contact_face" class="form-control form-control-sm" form="oneFormID" type="text" placeholder="Ф.И.О">
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-12 col-xl-6">
                                    <p class="my-2">Почтовый адрес организации </p><span></span>
                                    <input name="post_adress" id="post_adress" class="form-control form-control-sm" form="oneFormID" type="text" placeholder="Для отправки копии договора">
                                  </div>
                                  <div class="col-12 col-xl-6">
                                    <p class="my-2">Email организации </p><span></span>
                                    <input name="email" id="email" class="form-control form-control-sm" form="oneFormID" type="text" placeholder="Для электронных писем">
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-12 col-xl-6">
                                    <p class="my-2">Расчётный счёт организации </p><span></span>
                                    <input name="account" id="account" class="form-control form-control-sm" form="oneFormID" type="text" placeholder="">
                                  </div>
                                  <div class="col-12 col-xl-6">
                                    <p class="my-2">УНП организации </p><span></span>
                                    <input name="unp" id="unp" class="form-control form-control-sm" form="oneFormID" type="text" placeholder="">
                                  </div>
                                </div>
                                
                               <div class="row">
                                  <div class="col-12 col-xl-6 mx-auto text-center">
                                    <button type="submit" class="mt-4 btn popup_send" onclick="return validateContract();">Отправить</button>
                                  </div>
                                </div>

                              </div>
                            </form>
                            
                             
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--end POP-UP 1 -->',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'Footer_left_menu' => 
      array (
        'fields' => 
        array (
          'id' => 9,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'Footer_left_menu',
          'description' => 'Содержит иконки быстрой связи, договора и личного кабинета. Также надпись ООО БайПРО',
          'editor_type' => 0,
          'category' => 15,
          'cache_type' => 0,
          'snippet' => '<!-- ПОДВАЛ -->
              <div class="row bypro_left_menu_footer">
                
                <!-- Иконки быстрой связи -->

                  <div class="col-12 text-center left_menu_icons d-none d-md-block">
                    <div class="py-4 services_button_consult" id="consult">
                      <span title="Консультация"><img src="images/left-menu/consult.png"></span>
                    </div>
                    <div class="py-4 services_button_one" id="one">
                      <span title="Договор"><img src="images/left-menu/contract.png"></span>
                    </div>
                    
                    [[!enter_or_cabinet_or_exit]] <!-- Снипет выводит либо ссылку на кабинет, либо форму входа -->
                   
                  </div>

                <!-- END Иконки быстрой связи -->

                <div class="bypro_left_menu_footer_logo">
                  <a href="[[~1]]">
                    <p class="mb-0 pt-2 text-right">ООО БайПРО</p>
                  </a>
                </div>
              </div>
            <!-- END ПОДВАЛ -->',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<!-- ПОДВАЛ -->
              <div class="row bypro_left_menu_footer">
                
                <!-- Иконки быстрой связи -->

                  <div class="col-12 text-center left_menu_icons d-none d-md-block">
                    <div class="py-4 services_button_consult" id="consult">
                      <span title="Консультация"><img src="images/left-menu/consult.png"></span>
                    </div>
                    <div class="py-4 services_button_one" id="one">
                      <span title="Договор"><img src="images/left-menu/contract.png"></span>
                    </div>
                    
                    [[!enter_or_cabinet_or_exit]] <!-- Снипет выводит либо ссылку на кабинет, либо форму входа -->
                   
                  </div>

                <!-- END Иконки быстрой связи -->

                <div class="bypro_left_menu_footer_logo">
                  <a href="[[~1]]">
                    <p class="mb-0 pt-2 text-right">ООО БайПРО</p>
                  </a>
                </div>
              </div>
            <!-- END ПОДВАЛ -->',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'script_form_validate' => 
      array (
        'fields' => 
        array (
          'id' => 12,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'script_form_validate',
          'description' => '',
          'editor_type' => 0,
          'category' => 18,
          'cache_type' => 0,
          'snippet' => '<script type="text/javascript" src="js/script_form_validate.js"></script>
',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<script type="text/javascript" src="js/script_form_validate.js"></script>
',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'lgnLogoutTpl' => 
      array (
        'fields' => 
        array (
          'id' => 15,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'lgnLogoutTpl',
          'description' => '',
          'editor_type' => 0,
          'category' => 19,
          'cache_type' => 0,
          'snippet' => '<div class="loginMessage">[[+errors]]</div>
<br />
<div class="loginLogin">
    <div class="loginRegister">
        <a href="[[+logoutUrl]]" title="[[+actionMsg]]">[[+actionMsg]]</a>
    </div>
</div>
',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<div class="loginMessage">[[+errors]]</div>
<br />
<div class="loginLogin">
    <div class="loginRegister">
        <a href="[[+logoutUrl]]" title="[[+actionMsg]]">[[+actionMsg]]</a>
    </div>
</div>
',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
        ),
      ),
    ),
    'modSnippet' => 
    array (
      'enter_or_cabinet_or_exit' => 
      array (
        'fields' => 
        array (
          'id' => 31,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'enter_or_cabinet_or_exit',
          'description' => '',
          'editor_type' => 0,
          'category' => 20,
          'cache_type' => 0,
          'snippet' => '$page_id = $modx->resource->get(\'id\');
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
}',
          'locked' => false,
          'properties' => 
          array (
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '$page_id = $modx->resource->get(\'id\');
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
}',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'Login' => 
      array (
        'fields' => 
        array (
          'id' => 24,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'Login',
          'description' => 'Displays a login and logout form.',
          'editor_type' => 0,
          'category' => 19,
          'cache_type' => 0,
          'snippet' => '/**
 * Login
 *
 * Copyright 2010 by Jason Coward <jason@modx.com> and Shaun McCormick
 * <shaun@modx.com>
 *
 * Login is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * Login is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Login; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package login
 */
/**
 * MODx Login Snippet
 *
 * This snippet handles login POSTs, sending the user back to where they came from or to a specific
 * location if specified in the POST.
 *
 * @package login
 *
 * @property textfield actionKey The REQUEST variable containing the action to take.
 * @property textfield loginKey The actionKey for login.
 * @property textfield logoutKey The actionKey for logout.
 * @property boolean loginViaEmail Enable login via username or email address (either one!) [default: false]
 * @property list tplType The type of template to expect for the views:
 *  modChunk - name of chunk to use
 *  file - full path to file to use as tpl
 *  embedded - the tpl is embedded in the page content
 *  inline - the tpl is inline content provided directly
 * @property textfield loginTpl The template for the login view (content based on tplType)
 * @property textfield logoutTpl The template for the logout view (content based on tplType)
 * @property textfield errTpl The template for any errors that occur when processing an view
 * @property list errTplType The type of template to expect for the error messages:
 *  modChunk - name of chunk to use
 *  file - full path to file to use as tpl
 *  inline - the tpl is inline content provided directly
 * @property integer logoutResourceId An explicit resource id to redirect users to on logout
 * @property string loginMsg The string to use for the login action. Defaults to
 * the lexicon string "login".
 * @property string logoutMsg The string to use for the logout action. Defaults
 * to the lexicon string "login.logout"
 */
require_once $modx->getOption(\'login.core_path\',null,$modx->getOption(\'core_path\').\'components/login/\').\'model/login/login.class.php\';
$login = new Login($modx,$scriptProperties);
if (!is_object($login) || !($login instanceof Login)) return \'\';

$controller = $login->loadController(\'Login\');
$output = $controller->run($scriptProperties);
return $output;',
          'locked' => false,
          'properties' => 
          array (
            'actionKey' => 
            array (
              'name' => 'actionKey',
              'desc' => 'prop_login.actionkey_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'service',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'The REQUEST variable that indicates what action to take.',
              'area_trans' => '',
            ),
            'loginKey' => 
            array (
              'name' => 'loginKey',
              'desc' => 'prop_login.loginkey_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'login',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'The login action key.',
              'area_trans' => '',
            ),
            'logoutKey' => 
            array (
              'name' => 'logoutKey',
              'desc' => 'prop_login.logoutkey_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'logout',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'The logout action key.',
              'area_trans' => '',
            ),
            'loginViaEmail' => 
            array (
              'name' => 'loginViaEmail',
              'desc' => 'prop_login.loginviaemail_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'Enable login via username or email address.',
              'area_trans' => '',
            ),
            'tplType' => 
            array (
              'name' => 'tplType',
              'desc' => 'prop_login.tpltype_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => 'modChunk',
                  'text' => 'opt_register.chunk',
                  'name' => 'Chunk',
                ),
                1 => 
                array (
                  'value' => 'file',
                  'text' => 'opt_register.file',
                  'name' => 'File',
                ),
                2 => 
                array (
                  'value' => 'inline',
                  'text' => 'opt_register.inline',
                  'name' => 'Inline',
                ),
                3 => 
                array (
                  'value' => 'embedded',
                  'text' => 'opt_register.embedded',
                  'name' => 'Embedded',
                ),
              ),
              'value' => 'modChunk',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'The type of tpls being provided for the login and logout forms.',
              'area_trans' => '',
            ),
            'loginTpl' => 
            array (
              'name' => 'loginTpl',
              'desc' => 'prop_login.logintpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'lgnLoginTpl',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'The login form tpl.',
              'area_trans' => '',
            ),
            'logoutTpl' => 
            array (
              'name' => 'logoutTpl',
              'desc' => 'prop_login.logouttpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'lgnLogoutTpl',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'The logout tpl.',
              'area_trans' => '',
            ),
            'preHooks' => 
            array (
              'name' => 'preHooks',
              'desc' => 'prop_login.prehooks_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'What scripts to fire, if any, before the user is logged in or out. This can be a comma-separated list of hooks, and if the first fails, the proceeding ones will not fire. A hook can also be a Snippet name that will execute that Snippet.',
              'area_trans' => '',
            ),
            'postHooks' => 
            array (
              'name' => 'postHooks',
              'desc' => 'prop_login.posthooks_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'What scripts to fire, if any, after the user has been logged in or out. This can be a comma-separated list of hooks, and if the first fails, the proceeding ones will not fire. A hook can also be a Snippet name that will execute that Snippet.',
              'area_trans' => '',
            ),
            'errTpl' => 
            array (
              'name' => 'errTpl',
              'desc' => 'prop_login.errtpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'lgnErrTpl',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'The error tpl.',
              'area_trans' => '',
            ),
            'errTplType' => 
            array (
              'name' => 'errTplType',
              'desc' => 'prop_login.errtpltype_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => 'modChunk',
                  'text' => 'opt_register.chunk',
                  'name' => 'Chunk',
                ),
                1 => 
                array (
                  'value' => 'file',
                  'text' => 'opt_register.file',
                  'name' => 'File',
                ),
                2 => 
                array (
                  'value' => 'inline',
                  'text' => 'opt_register.inline',
                  'name' => 'Inline',
                ),
                3 => 
                array (
                  'value' => 'embedded',
                  'text' => 'opt_register.embedded',
                  'name' => 'Embedded',
                ),
              ),
              'value' => 'modChunk',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'The type of error tpl.',
              'area_trans' => '',
            ),
            'loginResourceId' => 
            array (
              'name' => 'loginResourceId',
              'desc' => 'prop_login.loginresourceid_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'The resource to direct users to on successful login. 0 will redirect to self.',
              'area_trans' => '',
            ),
            'loginResourceParams' => 
            array (
              'name' => 'loginResourceParams',
              'desc' => 'prop_login.loginresourceparams_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'A JSON object of parameters to append to the login redirection URL. Ex: {"test":123}',
              'area_trans' => '',
            ),
            'logoutResourceId' => 
            array (
              'name' => 'logoutResourceId',
              'desc' => 'prop_login.logoutresourceid_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'Resource ID to redirect to on successful logout. 0 will redirect to self.',
              'area_trans' => '',
            ),
            'logoutResourceParams' => 
            array (
              'name' => 'logoutResourceParams',
              'desc' => 'prop_login.logoutresourceparams_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'A JSON object of parameters to append to the logout redirection URL. Ex: {"test":123}',
              'area_trans' => '',
            ),
            'loginMsg' => 
            array (
              'name' => 'loginMsg',
              'desc' => 'prop_login.loginmsg_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'Optional label message for login action. If blank, will default to lexicon string for Login.',
              'area_trans' => '',
            ),
            'logoutMsg' => 
            array (
              'name' => 'logoutMsg',
              'desc' => 'prop_login.logoutmsg_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'Optional label message for logout action. If blank, will default to lexicon string for Logout.',
              'area_trans' => '',
            ),
            'redirectToPrior' => 
            array (
              'name' => 'redirectToPrior',
              'desc' => 'prop_login.redirecttoprior_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If true, will redirect to the referring page (HTTP_REFERER) on successful login.',
              'area_trans' => '',
            ),
            'redirectToOnFailedAuth' => 
            array (
              'name' => 'redirectToOnFailedAuth',
              'desc' => 'prop_login.redirecttoonfailedauth_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If set to a non-zero number, will redirect the user to this page if their attempt to login is unsuccessful.',
              'area_trans' => '',
            ),
            'rememberMeKey' => 
            array (
              'name' => 'rememberMeKey',
              'desc' => 'prop_login.remembermekey_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'rememberme',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'prop_login.remembermekey_desc',
              'area_trans' => '',
            ),
            'contexts' => 
            array (
              'name' => 'contexts',
              'desc' => 'prop_login.contexts_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => '(Experimental) A comma-separated list of contexts to log in to. Defaults to the current context if not explicitly set.',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'prop_login.toplaceholder_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If set, will set the output of the login snippet to a placeholder of this name rather than directly outputting the return contents.',
              'area_trans' => '',
            ),
            'recaptchaTheme' => 
            array (
              'name' => 'recaptchaTheme',
              'desc' => 'prop_register.recaptchatheme_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => 'red',
                  'text' => 'opt_register.red',
                  'name' => 'Red',
                ),
                1 => 
                array (
                  'value' => 'white',
                  'text' => 'opt_register.white',
                  'name' => 'White',
                ),
                2 => 
                array (
                  'value' => 'clean',
                  'text' => 'opt_register.clean',
                  'name' => 'Clean',
                ),
                3 => 
                array (
                  'value' => 'blackglass',
                  'text' => 'opt_register.blackglass',
                  'name' => 'Black Glass',
                ),
              ),
              'value' => 'clean',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If `recaptcha` is set as a preHook, this will select a theme for the reCaptcha widget.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * Login
 *
 * Copyright 2010 by Jason Coward <jason@modx.com> and Shaun McCormick
 * <shaun@modx.com>
 *
 * Login is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * Login is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Login; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package login
 */
/**
 * MODx Login Snippet
 *
 * This snippet handles login POSTs, sending the user back to where they came from or to a specific
 * location if specified in the POST.
 *
 * @package login
 *
 * @property textfield actionKey The REQUEST variable containing the action to take.
 * @property textfield loginKey The actionKey for login.
 * @property textfield logoutKey The actionKey for logout.
 * @property boolean loginViaEmail Enable login via username or email address (either one!) [default: false]
 * @property list tplType The type of template to expect for the views:
 *  modChunk - name of chunk to use
 *  file - full path to file to use as tpl
 *  embedded - the tpl is embedded in the page content
 *  inline - the tpl is inline content provided directly
 * @property textfield loginTpl The template for the login view (content based on tplType)
 * @property textfield logoutTpl The template for the logout view (content based on tplType)
 * @property textfield errTpl The template for any errors that occur when processing an view
 * @property list errTplType The type of template to expect for the error messages:
 *  modChunk - name of chunk to use
 *  file - full path to file to use as tpl
 *  inline - the tpl is inline content provided directly
 * @property integer logoutResourceId An explicit resource id to redirect users to on logout
 * @property string loginMsg The string to use for the login action. Defaults to
 * the lexicon string "login".
 * @property string logoutMsg The string to use for the logout action. Defaults
 * to the lexicon string "login.logout"
 */
require_once $modx->getOption(\'login.core_path\',null,$modx->getOption(\'core_path\').\'components/login/\').\'model/login/login.class.php\';
$login = new Login($modx,$scriptProperties);
if (!is_object($login) || !($login instanceof Login)) return \'\';

$controller = $login->loadController(\'Login\');
$output = $controller->run($scriptProperties);
return $output;',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
        ),
      ),
      'user_id' => 
      array (
        'fields' => 
        array (
          'id' => 29,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'user_id',
          'description' => '',
          'editor_type' => 0,
          'category' => 20,
          'cache_type' => 0,
          'snippet' => '$user_id = $modx->user->get(\'id\');

if($user_id == 21) {
    echo $user_id;
}


if($user_id != 0) {

    $user = $modx->getObject(\'modUser\',array(\'active\' => true, \'id\' => $user_id ));
    
    
    if($user->isMember(\'users\')) {
        echo \'true\';
    }

}',
          'locked' => false,
          'properties' => 
          array (
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '$user_id = $modx->user->get(\'id\');

if($user_id == 21) {
    echo $user_id;
}


if($user_id != 0) {

    $user = $modx->getObject(\'modUser\',array(\'active\' => true, \'id\' => $user_id ));
    
    
    if($user->isMember(\'users\')) {
        echo \'true\';
    }

}',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modTemplateVar' => 
    array (
    ),
  ),
);