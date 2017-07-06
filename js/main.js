
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
	$( ".wrap-input-slider .input-slider" ).each(function(){
		 var $this = $(this);
		 var dataSetting = JSON.parse(JSON.stringify($this.data()));
		 var settings = $.extend( {
			range: true,
			slide: function( event, ui ) {
				newPositionSlider($(this), ui);
			},
			change: function( event, ui ) {
				newPositionSlider($(this), ui);
			}
		}, dataSetting);
		 $this.slider(settings);
	});
	function newPositionSlider(thisElem, ui) {
		var parent = thisElem.parents('.wrap-input-slider');
		var presentValue = parent.find('.present-value');
		presentValue.css({ left: ui.handle.offsetLeft });		
		presentValue.html(ui.value);
		
		var min = thisElem.slider( "option", "min" );
		
		if(ui.value > min) {
			presentValue.show();
		} else {
			presentValue.hide();
		}		
		
		var maxRightOffset = parent.find('.max-right').offset();
		var parentOffset = parent.offset();
		var presentValueWidth = presentValue.width();
		var maxRightOffsetLeft = maxRightOffset.left - parentOffset.left;
		
		
		if(ui.handle.offsetLeft + presentValueWidth > maxRightOffsetLeft) {
			presentValue.css({ left: maxRightOffsetLeft - presentValueWidth });		
			parent.addClass('is-right-value');
		}
		else {
			parent.removeClass('is-right-value');
		}	
		parent.find('input').val(ui.value);	
	}
	///////////////////////////////////////////////////////////// инпут в стиле слайдера
	
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