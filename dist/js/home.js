(function ($) {

	var scene = document.getElementById('scene');
	var parallaxInstance = new Parallax(scene);

	$('.js-popup-preview').click(function(){
		$('.popup-preview').addClass('open');	
	});

	$('.js-close-popup-preview').click(function(){
		$('.popup-preview').removeClass('open');
	});

})(jQuery);