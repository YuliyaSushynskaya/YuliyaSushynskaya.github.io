$(window).load(function(){
  $(window).scroll(function() {
    var wintop = $(window).scrollLeft(), docwidth = $('body').width(), winwidth = $(window).width();
    
    var totalScroll = (wintop/(docwidth-winwidth))*100;
   
    $(".progressBar").css("width",totalScroll+"%");
  });

});