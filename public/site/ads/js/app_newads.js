var App_ads = function () {
  const APP_URL = 'https://osvaldolaini.com.br/api/ads'
  //const APP_URL = 'http://localhost/site/public/ads'
  const API = 'https://osvaldolaini.com.br/api/ads'
    let controller = function(){
        const pathname = window.location.pathname
        var url = location.href; //pega endereço que esta no navegador
        url = url.split("/");
        return url[2]+pathname
    }
    let device = function(){
        var width = screen.width;
        if(width <= 767){
            return 'Smartphone ou tablet'
        }else{
            return 'Desktop'
        }
    }
    /*Faz a pesquisa e inseri os ADS nas divs */
    function large(id) {
        $.ajax({
            url: APP_URL, // página da requisição externa
            type: 'GET',
            // parâmetro "html" vem com o conteúdo da página completo
            success: function(html) {
             // Pegamos somente <li> da página externa
              var lis = $(html).find('.largeAds')
              console.log(lis)
             // Mandamos para o elemento de id "cabecalho" da nossa página
             $('#'+id).html(lis)
          }
        });
    }
    function small(id) {

        $.ajax({
            url: APP_URL, // página da requisição externa
            type: 'GET',
            // parâmetro "html" vem com o conteúdo da página completo
            success: function(html) {
             // Pegamos somente <li> da página externa
              var lis = $(html).find('.smallAds')
              console.log(lis)
             // Mandamos para o elemento de id "cabecalho" da nossa página
             $('#'+id).html(lis)
          },
          error: function(html) {
              console.log(html)
            
          },
        });
    }
    /*Pega as divs com class large e envia para ser inserido os ADS */
    let marketing = function(){
      $('.adsLarge').ready(function() {
        var cont = 0
          $(".adsLarge").each(function () {
            cont += Number(1)
            /*inseri ID nas divs para diferenciar */
            $(this).attr('id','adsLarge_'+cont)
            large('adsLarge_'+cont)
          });
      })
      $('.adsSmall').ready(function() {
        var cont = 0
          $(".adsSmall").each(function () {
            cont += Number(1)
            /*inseri ID nas divs para diferenciar */
            $(this).attr('id','adsSmall_'+cont)
            small('adsSmall_'+cont)
          });
      })
    }
    let close = function(){
        $(document).on('click', '.close', function () {
            $(this).parent().remove()
        })
    }
    let ads_click = function(){
      $(document).on('click', '.data-link', function () {
          var link = $(this).data('link')
          var id = $(this).data('id')
          var table = $(this).data('ads')
          var page = controller()
          var ua = window.navigator.userAgent;
          var plataforma = device()
          $.ajax({
              url:API,
              data:{id:id,table:table,page:page,ua:ua,plataforma:plataforma},
              method:'POST',
              success:function(response){
                //console.log(response)
              },
              error:function(response){
                //console.log(response)
              }
          })
      })
    }
    let ads_touch = function(){
      $(document).on('ontouchstart', '.data-link', function () {
          var link = $(this).data('link')
          var id = $(this).data('id')
          var table = $(this).data('ads')
          var page = controller()
          var ua = window.navigator.userAgent;
          var plataforma = device()
          $.ajax({
              url:API,
              data:{id:id,table:table,page:page,ua:ua,plataforma:plataforma},
              method:'POST',
              success:function(response){
                //console.log(response)
              },
              error:function(response){
                //console.log(response)
              }
          })
      })
    }

  return{
    init: function(){
      marketing()
      close()
      ads_click()
      ads_touch()
    }
  }
}();

jQuery(document).ready(function(){
  App_ads.init();
});

(function($) {
    "use strict";
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
