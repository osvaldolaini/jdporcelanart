var App = function () {
  // scroll
  var scrollWindow = function(){
    $(window).scroll(function() {
          // checks if window is scrolled more than 500px, adds/removes solid class
          if($(this).scrollTop() > 150) {
              $('.fixed-top').addClass('resize-on-scroll');
          } else {
              $('.fixed-top').removeClass('resize-on-scroll');
          }
        });
  };
  // Navbar offcanvas
  var canvas = function(){
    'use strict'
    const navLinks = document.querySelector('.navbar-nav')
    const links = document.querySelectorAll('.navbar-nav .nav-item')
    $('[data-toggle="offcanvas"]').on('click', function () {
      $('.offcanvas-collapse').toggleClass('open')
      $('.fixed-top').addClass('resize-on-scroll')
      $('.navbar-toggler i').toggleClass('fa-bars')
      $('.navbar-toggler i').toggleClass('fa-times')
      navLinks.classList.toggle('open')
        links.forEach(link => {
          link.classList.toggle('nav-fade')
        })
    })

    $('.nav-link').on('click', function () {
      $('.offcanvas-collapse').toggleClass('open')
      $('.navbar-toggler i').toggleClass('fa-bars')
      $('.navbar-toggler i').toggleClass('fa-times')
      navLinks.classList.toggle('open')
        links.forEach(link => {
          link.classList.toggle('nav-fade')
        })
    })
  }
  var jarallaxPlugin = function() {
    $('.jarallax').jarallax({
      speed: 0.2
    });
    jarallax(document.querySelectorAll('.jarallax-video'), {
      speed: 0.2,
      videoSrc: 'https://www.youtube.com/watch?v=mwtbEGNABWU',
      videoStartTime: 8,
      videoEndTime: 70,
    });
  };
  var carousel = function(){
    $(".partners-carousel").owlCarousel({
        autoplay: true,
        //dots: true,
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
  }
  var animateReveal = function() {
      var controller = new ScrollMagic.Controller();
      var greveal = $('.gsap-reveal');
      // gsap reveal
      $('.gsap-reveal').each(function() {
        $(this).append('<span class="cover"></span>');
      });
      if ( greveal.length ) {
        var revealNum = 0;
        greveal.each(function() {
          var cover = $(this).find('.cover');
          var tl = new TimelineMax();
          setTimeout(function() {
            tl
              .fromTo(cover, 2, { skewX: 0 }, { xPercent: 101, transformOrigin: "0% 100%", ease:Expo.easeInOut })
          }, revealNum * 0);

          var scene = new ScrollMagic.Scene({
            triggerElement: this,
            duration: "0%",
            reverse: false,
            offset: "-300%",
          })
          .setTween(tl)
          .addTo(controller);

          revealNum++;

        });
      }

      // gsap reveal hero
      $('.gsap-reveal-hero').each(function() {
        var html = $(this).html();
        $(this).html('<span class="reveal-wrap"><span class="cover"></span><span class="reveal-content">'+html+'</span></span>');
      });
      var grevealhero = $('.gsap-reveal-hero');
      if ( grevealhero.length ) {
        var heroNum = 0;
        grevealhero.each(function() {
          var cover = $(this).find('.cover'),
            revealContent = $(this).find('.reveal-content');
          var tl2 = new TimelineMax();
          setTimeout(function() {
            tl2
              .to(cover, 1, { marginLeft: '0', ease:Expo.easeInOut, onComplete() {
                tl2.set(revealContent, { x: 0 });
                tl2.to(cover, 1, { marginLeft: '102%', ease:Expo.easeInOut });
              } } )
          }, heroNum * 0 );

          var scene = new ScrollMagic.Scene({
            triggerElement: this,
            duration: "0%",
            reverse: false,
            offset: "-300%",
          })
          .setTween(tl2)
          .addTo(controller);

          heroNum++;
        });
      }
  }
    var siteIstotope = function() {
      var $container = $('#posts').isotope({
        itemSelector : '.item',
        isFitWidth: true
      });

      $(window).resize(function(){
        $container.isotope({
          columnWidth: '.col-sm-3'
        });
      });

      $container.isotope({ filter: '*' });

      $('#filters').on( 'click', 'a', function(e) {
          e.preventDefault();
          var filterValue = $(this).attr('data-filter');
          $container.isotope({ filter: filterValue });
          $('#filters a').removeClass('active');
          $(this).addClass('active');
      });

      $container.imagesLoaded()
      .progress( function() {
          $container.isotope('layout');
      })
      .done(function() {
          $('.gsap-reveal-img').each(function() {
              var html = $(this).html();
              $(this).html('<div class="reveal-wrap"><span class="cover"></span><div class="reveal-content">'+html+'</div></div>');
          });

          var controller = new ScrollMagic.Controller();
          var revealImg = $('.gsap-reveal-img');
          if ( revealImg.length ) {
              var i = 0;
                revealImg.each(function() {
              var cover = $(this).find('.cover'),
                revealContent = $(this).find('.reveal-content'),
                img = $(this).find('.reveal-content img');
              var tl2 = new TimelineMax();
              setTimeout(function() {
                  tl2
                    tl2.set(img, {  scale: '2.0', autoAlpha: 1, })
                    .to(cover, 1, { marginLeft: '0', ease:Expo.easeInOut, onComplete() {
                      tl2.set(revealContent, { autoAlpha: 1 });
                      tl2.to(cover, 1, { marginLeft: '102%', ease:Expo.easeInOut });
                      tl2.to(img, 2, { scale: '1.0', ease:Expo.easeOut }, '-=1.5');
                    } } )
              }, i * 700);

              var scene = new ScrollMagic.Scene({
                  triggerElement: this,
                  duration: "0%",
                  reverse: false,
                  offset: "-300%",
              })
              .setTween(tl2)
              .addTo(controller);
              i++;
            });
          }
      })

    $('.js-filter').on('click', function(e) {
        e.preventDefault();
        $('#filters').toggleClass('active');
    });

    }
    var gallery = function () {
        // Porfolio isotope and filter
        var galleryIsotope = $('.gallery-container').isotope({
            itemSelector: '.gallery-item'
        });

        $('#gallery-filters li').on('click', function() {
            $("#gallery-filters li").removeClass('filter-active')
            $(this).addClass('filter-active')
            galleryIsotope.isotope({
                filter: $(this).data('filter')
            });
        });

        // Initiate venobox (lightbox feature used in portofilo)
        $(document).ready(function() {
            $('.venobox').venobox({
                'share': false
            });
        });

        // gallery details carousel
        $(".gallery-details-carousel").owlCarousel({
            autoplay: true,
            dots: true,
            loop: true,
            items: 1
        });
    }
    var contactForm = function() {
        $('.form-control').on('input', function() {
        var $field = $(this).closest('.form-group');
        if (this.value) {
            $field.addClass('field-not-empty');
        } else {
            $field.removeClass('field-not-empty');
        }
        });

        if ($('#contactForm').length > 0 ) {
            $( "#contactForm" ).validate( {
                rules: {
                    name: "required",
                    email: {
                        required: true,
                        email: true
                    },
                    message: {
                        required: true,
                        minlength: 5
                    }
                },
                messages: {
                    name: "Por favor, insira seu nome",
                    email: "Por favor, insira um email válido",
                    message: "Por favor, insira sua mensagem"
                },
                errorElement: 'span',
                errorLabelContainer: '.form-error',
                /* submit via ajax */
                submitHandler: function(form) {
                    var $submit = $('.submitting'),
                        waitText = 'Enviando...';

                    $.ajax({
                      type: "POST",
                      url: APP_URL + "/enviar-email",
                      data: $(form).serialize(),

                      beforeSend: function() {
                          $submit.css('display', 'block').text(waitText);
                      },
                      success: function(msg) {
                        console.log(msg)
                       if (msg.success==true) {

                           $('#form-message-warning').hide();
                            setTimeout(function(){
                               $('#contactForm').fadeOut();
                           }, 1000);
                            setTimeout(function(){
                               $('#form-message-success').fadeIn();
                           }, 1400);

                        } else {
                           $('#form-message-warning').html(message);
                            $('#form-message-warning').fadeIn();
                            $submit.css('display', 'none');
                        }
                      },
                      error: function(msg) {
                          $('#form-message-warning').html("Ocorreu um erro, por favor tente novamente.");
                         $('#form-message-warning').fadeIn();
                         $submit.css('display', 'none');
                      }
                  });
                  }

            } );
        }
    }
    var newsletterForm = function() {
        if ($('#newsletterForm').length > 0 ) {
            $( "#newsletterForm" ).validate( {
                rules: {
                    email: {
                        required: true,
                        email: true
                    },
                },
                messages: {
                    email: "Por favor, insira um email válido"
                },
                errorElement: 'span',
                errorLabelContainer: '.form-error',
                /* submit via ajax */
                submitHandler: function(form) {
                    var $submit = $('.submitting'),
                        waitText = 'Enviando...';

                    $.ajax({
                      type: "POST",
                      url: APP_URL + "/newsletter",
                      data: $(form).serialize(),

                      beforeSend: function() {
                          $submit.css('display', 'block').text(waitText);
                      },
                      success: function(msg) {

                       if (msg.success==true) {
                           $('#newsletter-message-warning').hide();
                            setTimeout(function(){
                               $('#newsletterForm').fadeOut();
                           }, 1000);
                            setTimeout(function(){
                               $('#newsletter-message-success').fadeIn();
                           }, 1400);

                        } else {
                           $('#newsletter-message-warning').html(message);
                            $('#newsletter-message-warning').fadeIn();
                            $submit.css('display', 'none');
                        }
                      },
                      error: function(msg) {
                        //console.log(msg)
                          $('#newsletter-message-warning').html("Email já está cadastrado.");
                         $('#newsletter-message-warning').fadeIn();
                         $submit.css('display', 'none');
                      }
                  });
                  }
            } );
        }
    }
    var owlSingleSlider = function () {
      if ( $( '.single-slider' ).length ) {
        $('.single-slider').owlCarousel({
          center: false,
          items: 1,
          loop: true,
          stagePadding: 0,
          margin: 0,
          smartSpeed: 1500,
          autoplay: true,
          autoplayHoverPause: true,
          dots: true,
          nav: true,
          navText: ['<span class="icon-keyboard_arrow_left">', '<span class="icon-keyboard_arrow_right">'],

          responsive:{
            400:{
              stagePadding: 0,
              margin: 0,
            },
            600:{
              stagePadding: 0,
              margin: 0,
            }
          }
        });
      }
    }
    return{
        init: function(){
            scrollWindow()
            canvas()
            jarallaxPlugin()
            carousel()
            animateReveal()
            //siteIstotope()
            gallery()
            contactForm()
            newsletterForm()
            owlSingleSlider()
        }
    }
}();

jQuery(document).ready(function(){
    if ($('.preloader').length) {
        $('.preloader').delay(1000).fadeOut('slow', function() {
          $(this).remove();
        });
    }
    AOS.init({
        duration: 800,
        easing: 'ease',
        once: true,
        offset: -100
    });
    App.init();
});
