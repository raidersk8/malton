//Для инициализации плагинов которым важно дождаться загрузки картинок
$(window).load(
	function() {		
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
		
		//$('.wrap-jcarousel').wrapJcarousel();	
		
		
	}
);