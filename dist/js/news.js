
(function ($) {
  var gallerySlaider = function () {
  $('.js-init-gallery-slider').slick({
       dots: false,
       infinite: true,
       speed: 500,
       // cssEase: 'linear',
       nextArrow: '<div class="gallery-slider__btn-next"><svg width="22" height="22" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M10.392.285a.972.972 0 000 1.375l8.937 8.938-8.937 8.937a.972.972 0 101.375 1.375l9.618-9.618.007-.007a.969.969 0 00-.007-1.381L11.767.285a.972.972 0 00-1.375 0zM1.704 11.598a1 1 0 110-2h12a1 1 0 110 2h-12z" fill="#fff"/></svg></div>',
       prevArrow: '<div class="gallery-slider__btn-prev"><svg width="22" height="22" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M10.392.285a.972.972 0 000 1.375l8.937 8.938-8.937 8.937a.972.972 0 101.375 1.375l9.618-9.618.007-.007a.969.969 0 00-.007-1.381L11.767.285a.972.972 0 00-1.375 0zM1.704 11.598a1 1 0 110-2h12a1 1 0 110 2h-12z" fill="#fff"/></svg></div>',
       slidesToShow: 2,
       slidesToScroll: 1,
       responsive: [
              {
                breakpoint: 1024,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                  arrows: false
                }
              }
            ]
       
       // asNavFor: '.js-init-gallery-navslider'
     });
   // $('.js-init-gallery-navslider').slick({
   //   slidesToShow: ,
   //   slidesToScroll: 1,
   //   asNavFor: $('.js-init-gallery-slider'),
   //   dots: false,
   //   infinite: true,
   //   arrows: false,
   //   centerMode: true,
   //   responsive: [
   //     {
   //       breakpoint: 577,
   //       settings: {
   //         slidesToShow: 3,
   //         slidesToScroll: 1
   //       }
   //     }
   //   ]
   // });

   // $('.gallery-slider__btn-prev').on('click', function(){
   //    $('.js-init-gallery-slider').slick('slickPrev');
   //  });

   //  $('.gallery-slider__btn-next').on('click', function(){
   //    $('.js-init-gallery-slider').slick('slickNext');
   //  });

    var slItems = $('.js-slider-item'),
      slNavBtn = $('.sl-btn-js');
      slList = $('.js-slider-list');

      slNavBtn.on('click', function(){
        var btnCount = $(this).attr('data-sl');
        slNavBtn.removeClass('active');
        $(this).addClass('active');
        console.log(btnCount)
        $(slItems).removeClass('active');
        $(slItems[btnCount]).addClass('active');
        $(slList).height($('.js-slider-item.active').height());
      })
      };

    /* Initialize 
       * ------------------------------------------------------ */
      (function hpInit() {
        gallerySlaider();
      })();
})(jQuery)