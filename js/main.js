
//Иницализация костомных selectov
$('.selectpicker').selectpicker({
  style: 'btn-selectpicker'
});

//Перелистование на главной на первом экране
$('.front-page .first-screen .slider').runByElements();
$('.scroll-to').scrollToAnim();
//Для инициализации плагинов которым важно дождаться загрузки картинок
$(window).load(
	function() {	
		fullWindowHeight();
		//$('.wrap-jcarousel').wrapJcarousel();		
	}
);
$( window ).resize(function() {
	fullWindowHeight();
});
$(function() {
	//Инпут в стиле слайдера
	$( ".input-slider" ).slider({
		range: true,
		value:100,
		min: 250,
		max: 1000,
		step: 50,
		slide: function( event, ui ) {
			console.log(ui);
		}
	});
	
	//Постраничный слайдер на весь экран
	$('#fullpage').fullpage({
		scrollBar: true,	
		hideElement: function($elem) { $elem.show(); },
	});	
	$.stellar();
});
function fullWindowHeight() {
	//Делаем блоки с классом full-window-height на всю ширину
	if(!$('body').hasClass('is-tablet')) {
		if($('.full-window-height').length) {
			var fullScreenHeight = $(window).innerHeight();
			if(!$('body').hasClass('is-front-page')) {
				fullScreenHeight -= $('.header').height();
			}
			$('.full-window-height').innerHeight(fullScreenHeight);
		}
	}
}