$(window).on('load', function () {
    setTimeout(function() {
		$loader = $('body').find('#preloader');
		$loader.fadeOut();
		$loader.delay(350).fadeOut('slow');
	}, 4000);//секунды
 });
