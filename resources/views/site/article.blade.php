@extends('site.app')
@section('body')

    <!-- ======= partners Section ======= -->
    <section id="header" class="header jarallax" style="background-image: url({{ url('storage/images/site/bg.jpg') }});">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7 mx-auto text-center">
                    <!--<h1 class="heading gsap-reveal-hero">SPARK</h1>-->
                    <h1 class="heading gsap-reveal-hero">
                        {{$title_postfix}}
                    </h1>
                    <h2 class="subheading gsap-reveal-hero">
                        <picture class="lazyload img-fluid" width="300">
                            <source srcset="{{ url('storage/images/site/logo_cover.png') }}" />
                            <source srcset="{{ url('storage/images/site/logo_cover.webp') }}"/>
                            <img class="lazyload img-fluid" src="{{ url('storage/images/site/logo_cover.png') }}" width="300"/>
                        </picture >
                    </h2>
                </div>
            </div>
        </div>
        <a href="#gallery" class="mouse-wrap smoothscroll">
            <span class="mouse">
                <span class="scroll"></span>
            </span>
            <span class="mouse-label">Role para baixo</span>
        </a>
    </section><!-- End Home Section -->
 <!--================Blog Area =================-->
    <section class="blog_area section_padding mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                    @if (isset($article))
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    @foreach ($article->images as $images)
                                        @if($images->featured == '1')
                                            @php 
                                                $img = 'storage/'.$images->path.'/'.$images->title; 
                                                $alt = $images->title;
                                            @endphp
                                        @endif
                                    @endforeach
                                    <img src="{{ url($img) }}" class="card-img rounded-0 lazyload img-fluid" alt="{{$alt}}" />
                                    <a href="#" class="blog_item_date">
                                        <h3>15</h3>
                                        <p>Jan</p>
                                    </a>
                                </div>

                                <div class="blog_details">
                                   
                                        <h2 class="has-children"> 
                                            <a class="d-inline-block" href="{{url('artigos/'.$article->slug)}}">
                                                {{$article->title}}
                                            </a> 
                                        </h2>
                            
                                        {!!$article->text!!}
                                    <ul class="blog-info-link">
                                        <li><a href="#"><i class="far fa-user"></i> {{$article->created_by}}</a></li>
                                        <li><a href="#"><i class="fas fa-calendar-alt"></i>  {{($article->created_at ? date( 'd/m/Y H:i' , strtotime($article->created_at)) : "")}}</a></li>
                                    </ul>
                                </div>
                            </article>
                    @endif
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <!--<aside class="single_sidebar_widget search_widget">
                            <form action="#">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder='Search Keyword'
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Search Keyword'">
                                        <div class="input-group-append">
                                            <button class="btn" type="button"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1"
                                    type="submit">Search</button>
                            </form>
                        </aside>-->

                        <!--<aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Category</h4>
                            <ul class="list cat-list">
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Resaurant food</p>
                                        <p>(37)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Travel news</p>
                                        <p>(10)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Modern technology</p>
                                        <p>(03)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Product</p>
                                        <p>(11)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Inspiration</p>
                                        <p>21</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Health Care (21)</p>
                                        <p>09</p>
                                    </a>
                                </li>
                            </ul>
                        </aside>-->

                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Artigos em destaque</h3>
                            @if (isset($trendTopics))
                                @foreach($trendTopics as $tt)
                                    @foreach ($tt->images as $ttimages)
                                        @if($ttimages->featured == '1')
                                            @php 
                                                $ttimg = 'storage/'.$ttimages->path.'/'.$ttimages->title; 
                                                $ttalt = $ttimages->title;
                                            @endphp
                                        @endif
                                    @endforeach
                                <div class="media post_item">
                                    <img src="{{ url($ttimg) }}" class="lazyload" alt="{{$ttalt}}" />
                                    <div class="media-body">
                                        <a href="{{url('artigos/'.$tt->slug)}}">
                                            <h3>{{$tt->title}}</h3>
                                        </a>
                                        <p>{{($tt->created_at ? date( 'd/m/Y' , strtotime($tt->created_at)) : "")}}</p>
                                    </div>
                                </div>
                                @endforeach
                            @endif
                        </aside>

                        <!--<aside class="single_sidebar_widget tag_cloud_widget">
                            <h4 class="widget_title">Tag Clouds</h4>
                            <ul class="list">
                                <li>
                                    <a href="#">project</a>
                                </li>
                                <li>
                                    <a href="#">love</a>
                                </li>
                                <li>
                                    <a href="#">technology</a>
                                </li>
                                <li>
                                    <a href="#">travel</a>
                                </li>
                                <li>
                                    <a href="#">restaurant</a>
                                </li>
                                <li>
                                    <a href="#">life style</a>
                                </li>
                                <li>
                                    <a href="#">design</a>
                                </li>
                                <li>
                                    <a href="#">illustration</a>
                                </li>
                            </ul>
                        </aside>-->
                        <aside class="single_sidebar_widget newsletter_widget">
                            <div class="single_footer">
                                <h4>Newsletter</h4>
                                <p>Quer saber mais sobre porte, registro, armamento e legislações?
                                    Inscreva-se para receber todas essas informações.
                                </p>
                                <div id="mc_embed_signup">
                                    <div class="newsletter" id="newsletter">
                                        <div class="newsletter_form_container">
                                            <form method="post" class="form-outline-style" id="newsletterForm" >
                                                <div class="d-flex flex-row align-items-start justify-content-start">
                                                    <input type="email" class="newsletter_input" name="email"
                                                        placeholder="Insira seu email" required="required">
                                                    <button class="newsletter_button">
                                                        <i class="far fa-paper-plane"></i>
                                                    </button>
                                                </div>
                                            </form>
                                            <div id="newsletter-message-warning" class="mt-4"></div>
                                            <div id="newsletter-message-success">
                                                <p>Assinatura concluída, obrigado!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                       
                        <aside class="single_sidebar_widget newsletter_widget">
                            <div class="adsSmall"></div>
                        </aside>
                        <aside class="single_sidebar_widget newsletter_widget">
                            <div class="adsSmall"></div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->


    {{-- Newslatter --}}
    @include('site.sections.newsletter')

    {{-- Contact --}}
    @include('site.sections.contact')

@stop
