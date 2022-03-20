$('.js-single-slider').slick({
     dots: false,
     infinite: true,
     speed: 500,
     // cssEase: 'linear',
     nextArrow: '<div class="news-single__btn-next"><svg width="22" height="22" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M10.392.285a.972.972 0 000 1.375l8.937 8.938-8.937 8.937a.972.972 0 101.375 1.375l9.618-9.618.007-.007a.969.969 0 00-.007-1.381L11.767.285a.972.972 0 00-1.375 0zM1.704 11.598a1 1 0 110-2h12a1 1 0 110 2h-12z" fill="#fff"/></svg></div>',
     prevArrow: '<div class="news-single__btn-prev"><svg width="22" height="22" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M10.392.285a.972.972 0 000 1.375l8.937 8.938-8.937 8.937a.972.972 0 101.375 1.375l9.618-9.618.007-.007a.969.969 0 00-.007-1.381L11.767.285a.972.972 0 00-1.375 0zM1.704 11.598a1 1 0 110-2h12a1 1 0 110 2h-12z" fill="#fff"/></svg></div>',
     slidesToShow: 1,
     slidesToScroll: 1,
     responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ]
     // asNavFor: '.js-init-gallery-navslider'
   });