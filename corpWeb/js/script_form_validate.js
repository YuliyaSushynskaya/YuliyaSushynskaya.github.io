
/*--- Форма консультации ---*/

function validateConsult() {
    
    var frame = document.getElementById('frame_consult');
    var id_back;                                                            // Возвращаемый результат
    var consultForm = document.getElementById('consultFormID');
    var phone = document.getElementById('phoneID').value;
    var name = document.getElementById('nameID').value;
    
    var pWrong = document.getElementById("phone_warning");
    var nWrong = document.getElementById("name_warning");

    var inputsArr = consultForm.getElementsByTagName('input');
    
    var count_warning = 0;
    
    for(var i = 0; i < inputsArr.length; i++) {
        if(inputsArr[i].value.length == 0) {
            inputsArr[i].parentNode.getElementsByTagName('span')[0].innerHTML = "*Данное поле обязательно для заполнения";
            count_warning += 1;
        } else {
            inputsArr[i].parentNode.getElementsByTagName('span')[0].innerHTML = "";
        }
    }
    
    if(count_warning > 0) {
        return false;
    }
    document.getElementById("consult_form_content").getElementsByTagName('iframe')[0].style.display = "block";
    document.getElementById("consult_title").style.display = "none";
    document.getElementById("consult_form_content").getElementsByTagName('iframe')[0].classList.remove('frame_special');
    document.getElementById("consult_form_content").getElementsByTagName('iframe')[0].classList.add('frame_height');
    document.getElementById("consult_form_content").getElementsByTagName('iframe')[0].classList.remove('frame_mobile');
    frame.addEventListener('load', function() {
        
        id_back = window.frames['area'].document.body.getElementsByTagName('h4')[0].id;
    
        if(id_back == 'ok') {
            
            document.getElementById("consult_title").style.display = "none";
            document.getElementById('consult_captcha').style.display = 'none';
            document.getElementById("consult_form_content").getElementsByTagName('iframe')[0].style.display = "block";
            document.getElementById("consult_form_content").getElementsByTagName('iframe')[0].classList.add('frame_special');
            document.getElementById("consult_form_content").getElementsByTagName('iframe')[0].classList.remove('frame_absolute');
            document.getElementById("consult_form_content").getElementsByTagName('iframe')[0].classList.remove('frame_static');
            document.getElementById("consult_form_content").getElementsByTagName('iframe')[0].classList.add('frame_mobile');
            document.getElementsByClassName('popup_send')[0].style.visibility = "hidden";
            consultForm.style.display = 'none';
            
            setTimeout(function() {
                closeConsult();
                setTimeout(function() {
                    document.getElementsByClassName('popup_send')[0].style.visibility = "visible";
                    document.getElementById("consult_title").style.display = "block";
                    document.getElementById("consult_form_content").getElementsByTagName('iframe')[0].classList.add('frame_absolute');
                    document.getElementById("consult_form_content").getElementsByTagName('iframe')[0].style.display = "none";
                    document.getElementById('consult_captcha').style.display = 'block';
                    document.getElementById("consult_form_content").getElementsByTagName('iframe')[0].classList.remove('frame_special');
                    document.getElementById("consult_form_content").getElementsByTagName('iframe')[0].classList.remove('frame_height');
                    document.getElementById("consult_form_content").getElementsByTagName('iframe')[0].classList.remove('frame_mobile');
                    consultForm.style.display = 'block';
                    for(var j = 0; j < inputsArr.length; j++) {
                        inputsArr[j].value = '';
                    }
                }, 1000);
            }, 2000);
        } else {
            
            document.getElementById("consult_title").style.display = "none";
            document.getElementById("consult_form_content").getElementsByTagName('iframe')[0].style.display = "block";
            document.getElementById("consult_form_content").getElementsByTagName('iframe')[0].classList.add('frame_mobile');
            document.getElementById("consult_form_content").getElementsByTagName('iframe')[0].classList.add('frame_static');
        }
    
    });
}

/*--- END Форма консультации ---*/

/*--- Форма Договора ---*/
function validateContract() {
    
    var frame = document.getElementById('frame_contract');
    var id_back;                                                            // Возвращаемый результат
    var contractForm = document.getElementById('oneFormID');
    var count_warning = 0;
    var title = document.getElementById('form_contract_title');
    var text = document.getElementById('form_contract_text');
    
    // Поля формы
    var type_contract = document.getElementById('inputState'); 
    var org = document.getElementById('organisation');
    var director = document.getElementById('director');
    var phone = document.getElementById('phone').value;
    var phone2 = document.getElementById('phone2').value;
    var adres = document.getElementById('adres').value;
    var contact_face = document.getElementById('contact_face').value;
    var post_adress = document.getElementById('post_adress').value;
    var email = document.getElementById('email').value;
    var account = document.getElementById('account').value;
    var unp = document.getElementById('unp').value;
    
    var inputsArr = contractForm.getElementsByTagName('input');

    for(var i = 0; i < inputsArr.length; i++) {
        if(inputsArr[i].value.length == 0 && inputsArr[i].id !== "phone" && inputsArr[i].id !== "phone2") {
            
            inputsArr[i].parentNode.getElementsByTagName('span')[0].innerHTML = "<span style='color:#c5004a;font-weight:bold'>Данное поле обязательно для заполнения</span>";
            count_warning += 1;
            
        } else {
            
            inputsArr[i].parentNode.getElementsByTagName('span')[0].innerHTML = "";
        }
    }
    
    if(phone.length == 0 && phone2.length == 0) {
        
        document.getElementById('phone').parentNode.getElementsByTagName('span')[0].innerHTML = "<span style='color:#1d4668;font-weight:bold'>Одно из этих полей должно быть заполнено</span>";
        document.getElementById('phone2').parentNode.getElementsByTagName('span')[0].innerHTML = "<span style='color:#1d4668;font-weight:bold'>Одно из этих полей должно быть заполнено</span>";
    }
    
    
    if(count_warning > 0) {
        return false;
    }

  
   //Проверим содержит ли значение введенное в поле email символы @ и .
   at=email.indexOf("@");
   dot=email.indexOf(".");
   //Если поле не содержит эти символы знач email введен не верно
   if (at < 1 || dot < 1){
      document.getElementById('email').parentNode.getElementsByTagName('span')[0].innerHTML = "email введён не верно";
      return false;
   }
   
   frame.addEventListener('load', function() {
       id_back = window.frames['area1'].document.body.getElementsByTagName('h4')[0].id;
       
       if(id_back == 'ok') {
       
            contractForm.style.visibility = "hidden";
            contractForm.style.position = "absolute";
            frame.classList.remove('frame_absolute');
            frame.classList.add('frame_mobile');
            frame.classList.add('frame_height');
            frame.classList.add('frame_mobile_contract');
            frame.style.display = "block";
            title.style.display = "none";
            text.style.display = "none";
       
            setTimeout(function() {
                closeOne();
                setTimeout(function() {
                    contractForm.style.visibility = "visible";
                    contractForm.style.position = "static";
                    frame.classList.add('frame_absolute');
                    frame.classList.remove('frame_mobile');
                    frame.classList.remove('frame_height');
                    frame.classList.remove('frame_mobile_contract');
                    title.style.display = "block";
                    text.style.display = "block";
                    frame.style.display = "none";
                    
                    for(var j = 0; j < inputsArr.length; j++) {
                        inputsArr[j].value = '';
                    }
                }, 1000);
               
            }, 2000);
       
       } else {
           
            frame.classList.remove('frame_absolute');
            frame.classList.add('frame_mobile_contract');
            frame.classList.add('frame_height');
            frame.classList.add('frame_mobile');
            frame.style.display = "block";
       }
   
   });

}
/*--- EnD Форма Договора ---*/


/*--- Форма На Контактах ---*/

function validateContacts() {

    var frame = document.getElementById('frame_contacts');
    var id_back;                                                            // Возвращаемый результат
    var consultForm = document.getElementById('contactsFormID');
    var phone = document.getElementById('phone').value;
    var title = document.getElementById('contacts_title');
    var text = document.getElementById('contacts_text');
    
    var inputsArr = consultForm.getElementsByTagName('input');
    
    var count_warning = 0;
    
    for(var i = 0; i < inputsArr.length; i++) {
        if(inputsArr[i].value.length == 0) {
            inputsArr[i].parentNode.getElementsByTagName('span')[0].innerHTML = "<span style='color:#c5004a;font-weight:bold'>Данное поле обязательно для заполнения</span>";
            count_warning += 1;
        } else {
            inputsArr[i].parentNode.getElementsByTagName('span')[0].innerHTML = "";
        }
    }
    
    if(count_warning > 0) {
        return false;
    }
    
    frame.addEventListener('load', function() {
        
        id_back = window.frames['area_contacts'].document.body.getElementsByTagName('h4')[0].id;
    
        if(id_back == 'ok') {
            
            frame.classList.remove('frame_absolute');
            frame.classList.add('frame_mobile');
            frame.classList.add('frame_height');
            frame.classList.add('frame_mobile_contract');
            frame.style.display = "block";
            
            title.style.display = "none";
            text.style.display = "none";
            consultForm.style.display = 'none';
            
            setTimeout(function() {
                closeQuickcall();
                setTimeout(function() {
                    
                    for(var j = 0; j < inputsArr.length; j++) {
                        inputsArr[j].value = '';
                    }
                    
                    frame.classList.add('frame_absolute');
                    frame.classList.remove('frame_mobile');
                    frame.classList.remove('frame_height');
                    frame.classList.remove('frame_mobile_contract');
                    frame.style.display = "none";
                    
                    title.style.display = "block";
                    text.style.display = "block";
                    consultForm.style.display = 'block';
                    
                }, 1000);
            }, 2000);
            
        } else {
            
            frame.classList.remove('frame_absolute');
            frame.classList.add('frame_mobile_contract');
            frame.classList.add('frame_height');
            frame.classList.add('frame_mobile');
            
            frame.style.display = "block";
        }
    
    });
}

/*--- END Форма на контактах ---*/



/*--- Форма для Вакансий ---*/

function validateJobs() {

    var frame = document.getElementById('frame_jobs');
    var id_back;                                                            // Возвращаемый результат
    var consultForm = document.getElementById('jobsFormID');
    var phone = document.getElementById('phone2').value;
    var name = document.getElementById('name').value;
    var reference = document.getElementById('ref').value;
    var title = document.getElementById('jobs_title');
    var text = document.getElementById('jobs_text');
    
    var inputsArr = consultForm.getElementsByTagName('input');
    
    var count_warning = 0;
    
    for(var i = 0; i < inputsArr.length; i++) {
        if(inputsArr[i].value.length == 0) {
            inputsArr[i].parentNode.getElementsByTagName('span')[0].innerHTML = "<span style='color:#c5004a;font-weight:bold'>Данное поле обязательно для заполнения</span>";
            count_warning += 1;
        } else {
            inputsArr[i].parentNode.getElementsByTagName('span')[0].innerHTML = "";
        }
    }
    
    if(count_warning > 0) {
        return false;
    }
    
    frame.addEventListener('load', function() {
        
        id_back = window.frames['area_jobs'].document.body.getElementsByTagName('h4')[0].id;
    
        if(id_back == 'ok') {
            
            frame.classList.remove('frame_absolute');
            frame.classList.add('frame_mobile');
            frame.classList.add('frame_height');
            frame.classList.add('frame_mobile_contract');
            frame.style.display = "block";
            
            title.style.display = "none";
            text.style.display = "none";
            consultForm.style.display = 'none';
            
            setTimeout(function() {
                closeJobsAdmin();
                setTimeout(function() {
                    
                    for(var j = 0; j < inputsArr.length; j++) {
                        inputsArr[j].value = '';
                    }
                    
                    frame.classList.add('frame_absolute');
                    frame.classList.remove('frame_mobile');
                    frame.classList.remove('frame_height');
                    frame.classList.remove('frame_mobile_contract');
                    frame.style.display = "none";
                    
                    title.style.display = "block";
                    text.style.display = "block";
                    consultForm.style.display = 'block';
                    
                }, 1000);
            }, 2000);
            
        } else {
            
            frame.classList.remove('frame_absolute');
            frame.classList.add('frame_mobile_contract');
            frame.classList.add('frame_height');
            frame.classList.add('frame_mobile');
            
            frame.style.display = "block";
        }
    
    });
}

/*--- END Форма для Вакансий ---*/
