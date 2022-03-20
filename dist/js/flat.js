(function ($) {

	$('.js-popup-price').on('click', function() {
		$('.popup-price').addClass('open');	
	});

	$('.js-close-popup-price').on('click', function() {
		$('.popup-price').removeClass('open');
	});

	$('.js-flatplan-big').click(function(){
	  $('.modalbox-flatplan').fadeIn(800)
	});
	$('.js-close-flatplan').click(function(){
	  $('.modalbox-flatplan').fadeOut(800)
	});

	$('.flat__compare').on('click', function() {
		$('.compare-flat__info-block2').addClass('open');
		$('.icon-star').addClass('active');
	});

})(jQuery);