
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