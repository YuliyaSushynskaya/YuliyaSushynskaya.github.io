/*-- pop-up mobile --*/

function openCabinet() {
	$('.services_button_one').unbind('click', openOne);
	$('.services_button_year').unbind('click', openYear);
	$('.services_button_consult').unbind('click', openConsult);
	$('.services_button_enter').unbind('click', openCabinet);

	var buttonId = $(this).attr('id');
	$('#modal-cabinet').removeAttr('class').addClass(buttonId);
	$('body').addClass('modal-active');
}

function closeCabinet() {
	$('#modal-cabinet').addClass('out');
  	$('body').removeClass('modal-active');

  	$('.services_button_one').bind('click', openOne);
  	$('.services_button_year').bind('click', openYear);
  	$('.services_button_consult').bind('click', openConsult);
  	$('.services_button_enter').bind('click', openCabinet);
}
/*-- end pop-up mobile --*/

/*-- pop-up mobile --*/

function openMobile() {
	$('.services_button_one').unbind('click', openOne);
	$('.services_button_year').unbind('click', openYear);
	$('.services_button_consult').unbind('click', openConsult);

	var buttonId = $(this).attr('id');
	$('#modal-mobile-call').removeAttr('class').addClass(buttonId);
	$('body').addClass('modal-active');
}

function closeMobile() {
	$('#modal-mobile-call').addClass('out');
  	$('body').removeClass('modal-active');

  	$('.services_button_one').bind('click', openOne);
  	$('.services_button_year').bind('click', openYear);
  	$('.services_button_consult').bind('click', openConsult);
}
/*-- end pop-up mobile --*/

/*-- pop-up consult --*/

function openConsult() {
	$('.services_button_one').unbind('click', openOne);
	$('.services_button_year').unbind('click', openYear);

	var buttonId = $(this).attr('id');
	$('#modal-container-consult').removeAttr('class').addClass(buttonId);
	$('body').addClass('modal-active');
}

function closeConsult() {
	$('#modal-container-consult').addClass('out');
  	$('body').removeClass('modal-active');

  	$('.services_button_one').bind('click', openOne);
  	$('.services_button_year').bind('click', openYear);
}
/*-- end pop-up consult --*/


/*-- pop-up 1 --*/

function openOne() {
	$('.services_button_consult').unbind('click', openConsult);
	$('.services_button_year').unbind('click', openYear);

	var buttonId = $(this).attr('id');
	$('#modal-container').removeAttr('class').addClass(buttonId);
	$('body').addClass('modal-active');
}

function closeOne() {
	$('#modal-container').addClass('out');
  	$('body').removeClass('modal-active');

  	$('.services_button_consult').bind('click', openConsult);
	$('.services_button_year').bind('click', openYear);
}
/*-- end pop-up 1 --*/


/*-- pop-up 2 --*/

function openYear() {
	$('.services_button_consult').unbind('click', openConsult);
	$('.services_button_one').unbind('click', openOne);

	var buttonId = $(this).attr('id');
  	$('#modal-container-2').removeAttr('class').addClass(buttonId);
  	$('body').addClass('modal-active');
}

function closeYear() {
	$('#modal-container-2').addClass('out');
  	$('body').removeClass('modal-active');

  	$('.services_button_consult').bind('click', openConsult);
	$('.services_button_one').bind('click', openOne);
}

/*-- end popup 2 --*/

function loadPopup() {
	$('.services_button_consult').bind('click', openConsult);
	$('#close_consult').bind('click', closeConsult);

	$('.services_button_year').bind('click', openYear);
	$('#close_year').bind('click', closeYear);

	$('.services_button_one').bind('click', openOne);
	$('#close_one').bind('click', closeOne);

	/*--- МАСКА ДЛЯ ТЕЛЕФОНА ---*/
	$(function() {
        $.mask.definitions['~'] = "[+-]";
         $("#phone").mask("(999) 999-9999");

  //       $("#date").mask("99/99/9999",{completed:function(){alert("completed!");}});
  //       $("#phoneExt").mask("(999) 999-9999? x99999");
  //       $("#iphone").mask("+33 999 999 999");
  //       $("#tin").mask("99-9999999");
  //       $("#ssn").mask("999-99-9999");
  //       $("#product").mask("a*-999-a999", { placeholder: " " });
  //       $("#eyescript").mask("~9.99 ~9.99 999");
  //       $("#po").mask("PO: aaa-999-***");
		// $("#pct").mask("99%");

        $("input").blur(function() {
            $("#info").html("Unmasked value: " + $(this).mask());
        }).dblclick(function() {
            $(this).unmask();
        });
    });
	/*--------------------------*/

    /*--- ДЛЯ ДОП.НОМЕРА ТЕЛЕФОНА, ЧТО-БЫ ВВОДИТЬ ТОЛЬКО ЦИФРЫ ---*/
	(function() {
    	document.getElementById('phone2').onkeypress = function(e) {
		  
			e = e || event;
	        if (e.ctrlKey || e.altKey || e.metaKey) return;
	        var chr = getChar(e);
	        // с null надо осторожно в неравенствах, т.к. например null >= '0' => true!
	        // на всякий случай лучше вынести проверку chr == null отдельно
	        if (chr == null) return;
	        if (chr < '0' || chr > '9') {
	          return false;
	        }
    	}
    	function getChar(event) {
		      if (event.which == null) {
		        if (event.keyCode < 32) return null;
		        return String.fromCharCode(event.keyCode) // IE
		      }
		      if (event.which != 0 && event.charCode != 0) {
		        if (event.which < 32) return null;
		        return String.fromCharCode(event.which) // остальные
		      }
		      return null; // специальная клавиша
		}

	})();
	/*-------------------------------------------------------------*/
}

							/*----- УДАЛИТЬ -----*/
									$('.services_button_consult').bind('click', openConsult);
									$('#close_consult').bind('click', closeConsult);

									$('.services_button_year').bind('click', openYear);
									$('#close_year').bind('click', closeYear);

									$('.services_button_one').bind('click', openOne);
									$('#close_one').bind('click', closeOne);
									
									$('.left_call_button').bind('click', openMobile);
									$('#close_mobile').bind('click', closeMobile);
									
									$('.services_button_enter').bind('click', openCabinet);
									$('#close_cabinet').bind('click', closeCabinet);
									

									$(function() {
								        $.mask.definitions['~'] = "[+-]";
								         $("#phone").mask("(999) 999-9999");
								  //       $("#date").mask("99/99/9999",{completed:function(){alert("completed!");}});
								  //       $("#phoneExt").mask("(999) 999-9999? x99999");
								  //       $("#iphone").mask("+33 999 999 999");
								  //       $("#tin").mask("99-9999999");
								  //       $("#ssn").mask("999-99-9999");
								  //       $("#product").mask("a*-999-a999", { placeholder: " " });
								  //       $("#eyescript").mask("~9.99 ~9.99 999");
								  //       $("#po").mask("PO: aaa-999-***");
										// $("#pct").mask("99%");

								        // $("input").blur(function() {
								        //     $("#info").html("Unmasked value: " + $(this).mask());
								        // }).dblclick(function() {
								        //     $(this).unmask();
								        // });
							    	});


									/*--- ДЛЯ ДОП.НОМЕРА ТЕЛЕФОНА, ЧТО-БЫ ВВОДИТЬ ТОЛЬКО ЦИФРЫ ---*/
									(function() {
								    	document.getElementById('phone2').onkeypress = function(e) {
										  
											e = e || event;
									        if (e.ctrlKey || e.altKey || e.metaKey) return;
									        var chr = getChar(e);
									        // с null надо осторожно в неравенствах, т.к. например null >= '0' => true!
									        // на всякий случай лучше вынести проверку chr == null отдельно
									        if (chr == null) return;
									        if (chr < '0' || chr > '9') {
									          return false;
									        }
								    	}
								    	function getChar(event) {
										      if (event.which == null) {
										        if (event.keyCode < 47) return null;
										        return String.fromCharCode(event.keyCode) // IE
										      }
										      if (event.which != 0 && event.charCode != 0) {
										        if (event.which < 47) return null;
										        return String.fromCharCode(event.which) // остальные
										      }
										      return null; // специальная клавиша
										}

									})();
									/*-------------------------------------------------------------*/