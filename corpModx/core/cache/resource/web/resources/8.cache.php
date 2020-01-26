<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 8,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Вакансии',
    'longtitle' => '',
    'description' => '',
    'alias' => 'vakansii',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 0,
    'introtext' => '',
    'content' => '',
    'richtext' => 1,
    'template' => 9,
    'menuindex' => 7,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1543389065,
    'editedby' => 1,
    'editedon' => 1543389068,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 1543389060,
    'publishedby' => 1,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => 'vakansii',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    '_content' => '<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- ByPro styles -->
    <link rel="stylesheet" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/popup.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mobile-menu.css">
    <link rel="stylesheet" href="css/menu-hover-effects.css">
    <link rel="stylesheet" href="css/button-hover.css">
    
    <!-- Glitch effects -->
    <link rel="stylesheet" href="css/glitch-effects.css">
    <title>Вакансии</title>
  </head>
  <body>
  
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
            <div class="col-12 col-xl-10 col-lg-10 float-xl-right float-lg-right bypro_content_wrapper">
              <div class="row">
                <div class="col-12 bypro_first_block services_content_wrapper" id="services_content_wrapper_ID">
                
                  <!-- Вступление -->
                  <div class="row">
                    <div class="col-12">

                      <div class="row">
                        <div class="col-10 col-xl-8 col-lg-8 col-md-8 mx-auto">
                          <div class="row">
                            <div class="col-8">
                              <h1 class="glitch" data-text="Вакансии">Вакансии</h1>
                            </div>
                          </div>
                          <!-- Отступ -->
                          <div class="row">
                            <div class="col-12 mt-4 mb-4"></div>
                          </div>
                          <!------------>
                          <div class="row">
                            <div class="col-12 col-xl-8 col-lg-8 col-md-12">
                              <p class="text-justify">
                                  Наша компания успешно работает на рынке более 10 лет и услуги, которые мы оказываем, выполняются с высокой эфективностью.
                                  Это достигается слаженной работой специалистов, каждый из которых владеет своей профессиональной областью в совершенстве. 
                              </p>
                            </div>
                            <div class="col-4 d-none d-xl-block d-lg-block">
                              
                            </div>
                          </div>
                          
                          <!-- Отступ -->
                          <div class="row">
                            <div class="col-12 mt-4 mb-4"></div>
                          </div>
                          <!------------>
                          
                          
                          <div class="row">
                            <div class="col-12 my-4 ">
                              <h2>В настоящее время для компании актуальны следующие вакансии: </h2>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>         
                  <!-- End Вступление -->

                 
                   <!-- Отступ -->
                  <div class="row">
                    <div class="col-12 my-2"></div>
                  </div>
                  <!------------>

                  <!--========= ВАКАНСИЯ ===========-->

                  <div class="row">
                    <div class="col-12">

                      <div class="row">
                        <div class="col-10 col-xl-8 col-lg-8 col-md-8 mx-auto">
                          
                          <div class="row">
                            <div class="col-12 col-xl-8 col-lg-8 col-md-8 my-4">
                              <h2>Системный администратор</h2>
                            </div>
                          </div>

                          <!-- Тех требования -->
                          <div class="row">
                            <div class="col-12 col-xl-8 col-lg-8 col-md-10 col-sm-10 mb-4">
                              <p class="my-4">Технические требования</p>
                              <ul class="jobs_skils">
                                <li><span>техническое среднее специальное, незаконченное высшее, высшее образование</span></li>
                                <li><span>опыт работы от 1 года по системным администратором, помощником системного администратора, эникейщиком</span></li>
                                <li><span>знание компьютерного железа</span></li>
                                <li><span>навыки диагностики и минимального ремонта компьютерного оборудования</span></li>
                                <li><span>опыт работы с оборудованием Ruckus или Mikrotik будет преимуществом</span></li>
                              </ul>
                            </div>
                            <!-- Картинка -->
                            <div class="col-2 col-xl-4 col-lg-4 text-right text-xl-center px-1 d-none d-sm-block">
                              <div class="jobs-image-wrapper">
                                <img src="images/jobs/admin.png" alt="" title="">
                              </div>
                            </div>
                          </div>

                          <!-- Подробнее -->
                          <div class="row">
                            <div class="col-10 col-xl-4 col-lg-4 mx-auto mx-md-0 align-self-end text-right px-1 my-4">
                              <button type="button" class="btn news-more news_button_jobsAdmin" id="jobsAdmin">Оставить заявку</button>
                            </div>
                          </div> 

                        </div>
                      </div>
                      
                    </div> 
                  </div>    

                    <!-- POP-UP 1 Consult -->
                    <div id="modal-container-jobsAdmin">
                      <div class="modal-background-jobsAdmin">
                        <div class="modal-jobsAdmin">
                          <div class="popup_close" id="close_jobsAdmin">
                              Закрыть
                            <div class="popup_dot"></div>
                            <div class="popup_dot"></div>
                          </div>

                           <!-- Отступ -->
                          <div class="row">
                            <div class="col-12 mt-4 mb-4"></div>
                          </div>
                          <!------------>

                          <div class="row">
                            <div class="col-12">
                              <div class="row">
                                <div class="col-12 mx-auto text-left">
                                  <h2 id="jobs_title" class="text-center">Подать заявку</h2>
                                  <h5 id="jobs_text" class="my-2 mt-4 text-center">Отправьте своё резюме и мы свяжемся с Вами</h5>
                                  <p><iframe id="frame_jobs" class="frame_absolute" name="area_jobs" style="border:0; width: 100%;"></iframe></p>
                                  <form class="sevrices_form_one" action="php/form_jobs_validate.php" method="POST" target="area_jobs" name="jobsForm" id="jobsFormID" onsubmit="return validateJobs();">
                                    <div class="form-group mt-4 mb-4">
                                    
                                      <div class="row">
                                        <div class="col-12 col-lg-12 col-xl-6 col-md-6">
                                          <p class="my-2">Телефон для связи</p><span></span>
                                          <input id="phone2" name="phone2" class="form-control form-control-sm" form="jobsFormID" type="text" placeholder="">
                                        </div>
                                        <div class="col-12 col-lg-12 col-xl-6 col-md-6">
                                          <p class="my-2">Фамилия Имя Отчество</p><span></span>
                                          <input id="name" name="name" class="form-control form-control-sm" form="jobsFormID" type="text" placeholder="Ф.И.О">
                                        </div>
                                      </div>

                                      <div class="row">
                                        <div class="col-12 col-lg-12  col-xl-6 col-md-6">
                                          <p class="my-2">Ссылка на резюме</p><span></span>
                                          <input id="ref" name="ref" class="form-control form-control-sm" form="jobsFormID" type="text" placeholder="">
                                        </div>

                                        <div class="col-12 col-lg-12 col-xl-6 col-md-6 align-self-end">
                                           <!-- Отступ -->
                                            <div class="row d-block d-lg-none d-xl-none">
                                              <div class="col-12 mt-4 mb-4"></div>
                                            </div>
                                          <!------------>  
                                          <button type="submit" class="btn news-more">Отправить</button>
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

                  <!--========== End ВАКАНСИЯ ============-->

                  <!-- Отступ -->
                  <div class="row">
                    <div class="col-12 mt-4 mb-4"></div>
                  </div>
                  <!------------>

                  <!-- УСЛОВИЯ -->
                  <div class="row">
                    <div class="col-12">

                      <div class="row">
                        <div class="col-10 col-xl-8 col-lg-8 col-md-8 mx-auto mb-4">

                          <div class="row jobs_conditions_wrapper">
                            
                            <div class="col-12 col-xl-6 col-lg-10 col-md-10 mx-auto">
                               <h2 class="my-4">Условия</h2>
                                <ul class="jobs_conditions">
                                  <li><span>официальное оформление по ТК РБ</span></li>
                                  <li><span>стабильная оплата труда</span></li>
                                  <li><span>профессиональное обучение за счет компании</span></li>
                                  <li><span>демократичное и толковое руководство</span></li>
                                  <li><span>корпоративные праздники, спортивные мероприятия</span></li>
                                  <li><span>дополнительные выплаты к различным жизненным событиям</span></li>
                                  <li><span>график работы: пн.-пт. 09.00-18.00</span></li>
                                </ul>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                  <!-- END УСЛОВИЯ -->

                  <!-- Отступ -->
                  <div class="row">
                    <div class="col-12 mt-4 mb-4"></div>
                  </div>
                  <!------------>

                </div>
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

    <script src="js/mobile-menu.js"></script>
    <script src="js/popup.js"></script>

    <script src="js/popup-jobs.js"></script>

    <script src="libraries/mask/jquery.maskedinput.min.js"></script>
    <script type="text/javascript" src="js/script_form_validate.js"></script>

  </body>
</html>',
    '_isForward' => false,
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
    ),
    'modTemplateVar' => 
    array (
    ),
  ),
);