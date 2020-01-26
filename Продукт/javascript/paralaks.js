$(document).ready(function(){
    $('body').toggle(1000);
});

$(document).on("scroll", function() {
   $('#section4').each(function() {
	 if ($(this).position().top <= $(document).scrollTop() + $(window).height()) {
		$('.VideoBlock').css('animation', 'VideoBloc 2s 0s  forwards');
		$('.textSwimsClass').css('animation-name', 'comentGalery');
		$('#ourWork').css('animation', 'Video 1.5s 0s forwards');
		$(this).animate({
			opacity: 1
		}, 1000);
	 }
	});
  $('#section2').each(function() {
	 if ($(this).position().top <= $(document).scrollTop() + $(window).height()) {
		 $('.galleryCss').css('animation', 'Video 1.5s 0s forwards');
		var scrolled = $(window).scrollTop();
		$('.imgVideo').css('bottom',(0+(scrolled*.8))+'px');
		$('h2').css('bottom',(0+(scrolled*.8))+'px');
		$('#backgroundMedium').css('top',(0-(scrolled*.3))+'px');
		$('#svgPanorama').css('stroke-dashoffset', (0-(scrolled*1)));
		$('#svgVideo').css('stroke-dashoffset', (0-(scrolled*1)));
		$('.arrow').css('top', (0+(scrolled*.25)));
		$(this).animate({
			opacity: 1
		}, 1000);
	 }
	});
	
});


 

