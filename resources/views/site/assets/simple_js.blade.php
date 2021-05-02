    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('site/template/vendor/app_scripts.js') }}"></script>

    <script src="{{asset('admin/js/app_views.min.js')}}"></script>
    <script src="{{asset('site/assets/js/app_site.min.js')}}"></script>


        {{--Laini Ads--}}
        <script defer src="{{asset('site/ads/js/app_ads.min.js')}}"></script>

        <script>
                const appurlAPI = document.querySelector("meta[name='app_url']");
                const API_URL = appurlAPI.getAttribute("content");
            $('.blog').ready(function() {
                $.ajax({
                    url:API_URL + '/api/apiArticles',
                    method:'get',
                    success:function(response){
                        if(response.success){
                            var id = 0
                            response.data.forEach(article => {
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

                                $(".blog").append(
                                    '<div class="col-sm-6 col-md-6 '+col+' blog-post-entry " data-aos="fade-up" data-aos-delay="0">'+
                                        '<a href="'+article.slug+'" class="grid-item blog-item w-100 h-100">'+
                                            '<div class="overlay">'+
                                                '<div class="blog-item-content">'+
                                                    '<h3>'+article.title+'</h3>'+
                                                    '<p class="post-meta">'+article.created_by+' <span class="small">&bullet;</span> '+article.date+'</p>'+
                                                '</div>'+
                                            '</div>'+
                                            '<img src="'+article.src+'" class="lazyload img-fluid" alt="'+article.alt+'" />'+
                                        '</a>'+
                                    '</div>'
                                )
                            });
                        }
                    },
                    error:function(response){
                        console.log(response)
                    }
              })
            })
            $('.apiCourses').ready(function() {
                $.ajax({
                    url:API_URL + '/api/apiCourses',
                    method:'get',
                    success:function(response){
                        if(response.success){
                            var id = 0
                            response.data.forEach(course => {
                               
                                $(".apiCourses").append(
                                    '<div class="row">'+
                                        '<div class="col-md-4 gsap-reveal">'+
                                            '<a href="'+course.slug+'" class="main-property" style="background-image: url('+course.src+');">'+
                                                '<span class="status">Duração '+course.duraction+'</span>'+
                                                '<div class="prop-details">'+
                                                    '<span class="price">Valor sob consulta</span>'+
                                                    '<h3>'+course.title+'</h3>'+
                                                '</div>'+
                                            '</a>'+
                                        '</div>'+
                                    '</div>'
                                )
                            });
                        }
                    },
                    error:function(response){
                        console.log(response)
                    }
              })
            })
        </script>
