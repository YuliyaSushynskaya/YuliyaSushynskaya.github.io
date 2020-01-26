var initialSlide = $('.slides-container [data-order="1"]'); //первый слайд
var initalSelected = $('.slide-navigation__txt [data-order="1"]'); // первая ссылка на слайд
var mq_medium = window.matchMedia( '(min-width: 860px)' ); //для адаптива
var mq_big = window.matchMedia( '(min-width: 1200px)' ); 

/*
* Показать очередной слайд
* 
* order - номер слайда
*/
function activate_slide(order){
  var unactiveSlide = $('.slide.active'); // ищем слайд, который нужно спрятать
  var activeSlide = $('.slides-container .slide[data-order="'+order+'"]'); //ищем слайд, который нужно показать
  
  if( !(activeSlide.hasClass('active')) ){ // если кликнули на слайд, который активен в данный момент - ничего не делаем
      slide_in(activeSlide); // показываем новый слайд
      slide_out(unactiveSlide); // скрываем старый слайд
  }
}

/*
* показать новый слайд
* slide - объект, который нужно показать
*/
function slide_in(slide) {
  var _this = slide;
  animation_in(slide); // запускаем анимацию отображения слайда
  _this.addClass('active'); // присваиваем класс, чтобы знать, какой именно слайд активен в данный момент
  TweenMax.to(_this, 1, {autoAlpha:1}, '-=1'); // анимация с помощью TweenMax
}

/*
* скрыть старый слайд
* slide - объект, который нужно показать
*/
function slide_out(slide){
  var _this = slide;
  _this.css( 'z-index', '2' ); //смещаем слайд вниз(чтобы новый слайд был "выше")
  _this.removeClass('active'); // удаляем метку активности со скрываемого слайда
  TweenMax.to(_this, 1, {autoAlpha:0, onComplete: removeZ}); // анимация с помощью TweenMax
  
  function removeZ(){
    _this.css( 'z-index', '1' );
  }  
  
  animation_out(slide); // запускаем анимацию скрытия слайда
}

/*
* анимация отображения слайда
* slide - объект, который нужно показать
*/
function animation_in(slide){
  var title = slide.find('h2');
  var button = $(slide).find('button');
  var image = $(slide).find('img');
  
  TweenMax.fromTo(title, 0.9,{autoAlpha:0, x:100}, {autoAlpha:0.9, x:0, ease: Power2.easeOut}); // анимация с помощью TweenMax
  TweenMax.fromTo(button, 0.5,{autoAlpha:0 }, {autoAlpha:1}); // анимация с помощью TweenMax
  TweenMax.to(image, 0, {autoAlpha:1,scale:1}); // анимация с помощью TweenMax
}

/*
* анимация скрытия слайда
* slide - объект, который нужно показать
*/
function animation_out(slide){
  var title = slide.find('h2');
  var text = $(slide).find('p');
  var button = $(slide).find('button');
  var image = $(slide).find('img');
  
  TweenMax.to(title, 0.9, {autoAlpha:0, x:0}); // анимация с помощью TweenMax
  TweenMax.to(button, 0.5,{autoAlpha:0}); // анимация с помощью TweenMax
  TweenMax.to(image, 1, {scale:1.1}); // анимация с помощью TweenMax
  
}

$('.slide-navigation__txt span').on('click', function(){ // при клике на названия слайдов будем переходить к новому слайду
  var _this = $(this);
  var order = _this.data('order');
  var spans = $('.slide-navigation__txt span');
  var current = $('.active').data('order');
  
  spans.removeClass('active'); // убирем активность текущего слайда
  _this.addClass('active'); // делаем активным новый слайд
  activate_slide(order);  // запускаем анимацию отображения и скрытия слайдов
  stagger_rounds(order, current); // запускаем анимацию "кружочков"
});

/*
* Анимация "кружочков"
*
* order - номер слайда
* current - текущий слайд
*
*/
function stagger_rounds(order, current) {
  var mq = 0.7;
  var moveY;
  var squares = $('.slides-container .square');
  var staggerTime = -0.12;
  
  if( order < current ) {
    staggerTime = staggerTime * -1; 
  }
  
  if( mq_medium.matches) { mq = 1 }
  if( mq_big.matches) { mq = 1.3 }
  
  moveY = (order-1) * (15 * mq );
  TweenMax.staggerTo(squares, 0.1, {y: moveY}, staggerTime); // анимация с помощью TweenMax
  
}

$(document).ready(function() {
  initialSlide.addClass('active'); // отмечаем первый активный слайд
  initalSelected.addClass('active'); // отмечаем первый активный слайд(название)
  TweenMax.to(initialSlide, 0.5, {autoAlpha:1}); // отображаем первый слайд с помощью TweenMax
});




