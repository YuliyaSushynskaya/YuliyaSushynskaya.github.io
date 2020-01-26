window.onload = function() { 
	setInterval(function() { 
		right();
	},5000);
};

slides=['searh1.jpg','searh2.jpg','searh3.jpg','searh4.jpg'],
frame=0; 
var i = slides.length; 
$( right=function () { 
	frame--;
	if(frame < 0) frame = i-1;
		$("#scr").css('backgroundImage','url(img/'+slides[frame]+')');
});