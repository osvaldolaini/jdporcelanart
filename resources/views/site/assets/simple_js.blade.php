    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('site/template/vendor/app_scripts.min.js') }}"></script>

    <script src="{{asset('admin/js/app_views.min.js')}}"></script>
    <script src="{{asset('site/assets/js/app_site.min.js')}}"></script>


        {{--Laini Ads--}}
        <script defer src="{{asset('site/ads/js/app_ads.min.js')}}"></script>

        <script>
                const appurlAPI = document.querySelector("meta[name='app_url']");
                const API_URL = appurlAPI.getAttribute("content");
            $('.works').ready(function() {
                $.ajax({
                    url:API_URL + '/api/apiPortfolio',
                    method:'get',
                    success:function(response){
                        if(response.success){

                            var id = 0
                            response.data.forEach(work => {
                                id += 1
                                switch (id) {
                                    case 1:
                                        var col = 'col-lg-8';
                                        break;
                                    case 4:
                                        var col = 'col-lg-8';
                                        break;
                                    default:
                                        var col = 'col-lg-4';
                                        break;
                                }

                                $(".works").append(
                                    '<div class="col-sm-6 col-md-6 '+col+' blog-post-entry " data-aos="fade-up" data-aos-delay="0">'+
                                        '<a href="'+work.slug+'" class="grid-item blog-item w-100 h-100">'+
                                            '<div class="overlay">'+
                                                '<div class="blog-item-content">'+
                                                    '<h3>'+work.title+'</h3>'+
                                                    '<p class="post-meta">Postado em <span class="small">&bullet;</span>'+ work.created_at +
                                                        '<span class="small">&bullet;</span> <i class="fas fa-eye"></i>' + work.clicks +
                                                    '</p>'+
                                                '</div>'+
                                            '</div>'+
                                            '<img src="'+work.src+'" class="lazyload img-fluid" alt="'+work.alt+'" />'+
                                        '</a>'+
                                    '</div>'
                                )
                            });
                                $(".works").append(
                                    '<div class="col-lg-12 text-center pt-3">'+
                                            '<p class="gsap-reveal"><a href="'+response.more+'" class="btn btn-outline-pill btn-custom-light">Veja mais...</a></p>' +
                                    '</div>'
                                )
                        }
                    },
                    error:function(response){
                        console.log(response)
                    }
              })
            })

        </script>
