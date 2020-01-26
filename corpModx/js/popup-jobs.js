/*-- pop-up jobsAdmin --*/

function openJobsAdmin() {
	var buttonId = $(this).attr('id');
	$('#modal-container-jobsAdmin').removeAttr('class').addClass(buttonId);
	$('body').addClass('modal-active');
}

function closeJobsAdmin() {
	$('#modal-container-jobsAdmin').addClass('out');
  	$('body').removeClass('modal-active');
}
/*-- end pop-up jobsAdmin --*/

function loadPopup() {
	$('.news_button_jobsAdmin').bind('click', openJobsAdmin);
	$('#close_jobsAdmin').bind('click', closeJobsAdmin);

/*--- МАСКА ДЛЯ ТЕЛЕФОНА ---
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
	--------------------------*/

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
									$('.news_button_jobsAdmin').bind('click', openJobsAdmin);
									$('#close_jobsAdmin').bind('click', closeJobsAdmin);

									

									$(function() {
								        $.mask.definitions['~'] = "[+-]";
								  //      $("#phone").mask("(999) 999-9999");
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