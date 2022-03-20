(function($) {

	var checkFloor = function() {
		//// проблеск по дому
			var floorBox = $('.floor-item-link');
			    var itemLevel = $('.floor-item-link path');
			    var a = 0.0;
			    
			    var floorAnimate = setInterval(function(){
			      
			      for (let i = 0; i < itemLevel.length; i++) {
			        const element = itemLevel[i];
			        element.classList.add('stagger');
			        $(element).css({ 'animation-delay': (a + i * 1 / 10) + 's' });
			        element.addEventListener("animationend", function(){
			          element.classList.remove('stagger');
			        });
			        if (i+1 == itemLevel.length) {
			          clearInterval(floorAnimate);
			          break;
			        }

			      }
			    }, 1000);

			//// функционал при наведении на єтаж

			$( ".floor-item-link" ).each(function() {

			  var myBox = $(".info-block-floor");
			  var infoBox2 = $(".info-block-appartments");
			  var newlink = $('.floor-item-link');
			  if ($(window).width() > 768) {

				$(this).mouseenter(function() {
					// $(this).css('opacity','0.8');
				  var level = this.dataset.level;
				  var flatSale = this.dataset.sale;
				  myBox.html(level);
				  infoBox2.html(flatSale);
				});
				$(this).mouseleave(function() {
					// $(this).css('opacity','0');
				});
			  }
			  else{

				$(this).click(function(e){
				  var level = this.dataset.level;
				  var flatSale = this.dataset.sale;

				 // console.log(href, $(this).closest('a'));
				  myBox.html(level);
				  infoBox2.html(flatSale);

				});
			}
			  var href = this.dataset.href;
			  $(this).closest('a').attr("href", href);
			  $(this).closest('a').attr("xlink:href", href);
			});

	};

	/* Initialize
	 * ------------------------------------------------------ */
	 (function hpInitchangeFloor() {
			checkFloor();
	 })();

})(jQuery);