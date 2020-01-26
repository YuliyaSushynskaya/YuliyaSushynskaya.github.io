$(document).ready(function(){
	$('a').bind("click", function(e){
		var anchor = $(this);
		$('html, body').stop().animate({
		scrollTop: $(anchor.attr('href')).offset().top - 0
	}, 2000);
	e.preventDefault();
	});
	return false;
});
	
	