var App = function () {
   // scroll
  var scrollWindow = function(){
    $(window).scroll(function() {
          // checks if window is scrolled more than 500px, adds/removes solid class
          if($(this).scrollTop() > 150) { 
              $('.fixed-top').addClass('resize-on-scroll');
              $('.fa').removeClass('fa-2x');
          } else {
              $('.fixed-top').removeClass('resize-on-scroll');
              $('.fa').addClass('fa-2x');
          }
        });
  };

  var canvas = function(){
    'use strict'
    $('[data-toggle="offcanvas"]').on('click', function () {
      $('.offcanvas-collapse').toggleClass('open');
      $('.navbar-toggler i').toggleClass('fa-bars');
      $('.navbar-toggler i').toggleClass('fa-times');
    })

    $('.nav-link').on('click', function () {
      $('.offcanvas-collapse').toggleClass('open');
      $('.navbar-toggler i').toggleClass('fa-bars');
      $('.navbar-toggler i').toggleClass('fa-times');
    })
  }

  return{
    init: function(){
      scrollWindow();
      canvas();
    }
  }
}();

jQuery(document).ready(function(){
  App.init();
});
(function($) {
  "use strict";
  // Clients carousel (uses the Owl Carousel library)
  $(".clients-carousel").owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    responsive: {
      0: {
        items: 2
      },
      768: {
        items: 4
      },
      900: {
        items: 6
      }
    }
  });
  // // Clients carousel (uses Init AOS)
  function aos_init() {
    AOS.init({
      duration: 1000,
      easing: "ease-in-out",
      once: true,
      mirror: false
    });
  }
  $(window).on('load', function() {
    aos_init();
  });
})(jQuery);