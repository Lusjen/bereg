(function ($) {

	$('.js-btn-popup-contact').on('click', function() {
		$('.popup-contact').addClass('open');
		
	});

	$('.js-close-popup-contact').on('click', function() {
		$('.popup-contact').removeClass('open');
	});

})(jQuery);