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

    <div class="container newslatter-section mt-3">
        <div class="portfolio-single-wrap section" id="portfolio-single-section">
          <div class="portfolio-single-inner">
            <div class="section-heading-wrap text-center mb-5">
                <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">{{$portfolio->title}}</span></h2>
                <span class="gsap-reveal">
                    <picture class="lazyload img-fluid" alt="divider" width="150">
                        <source srcset="{{ url('storage/images/site/divider_alvo_gold.png') }}" />
                        <source srcset="{{ url('storage/images/site/divider_alvo_gold.webp') }}"/>
                        <img class="lazyload img-fluid" src="{{ url('storage/images/site/divider_alvo_gold.png') }}" alt="divider" width="150"/>
                    </picture >
                </span>
            </div>
            <div class="row justify-content-between mb-5">
              <div class="col-12 mb-1">
                <div class="owl-carousel single-slider">
                    @foreach ($portfolio->images as $images)
                        <figure class="mb-1">
                            <img src="{{ url('storage/'.$images->path.'/'.$images->title) }}" alt="{{$images->title}}" class="lazyload img-fluid">
                        </figure>
                    @endforeach
                </div>
              </div>
              <div class="col-lg-12">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-8">
                        <div class="status">
                            <span class="detail-label">Nome: </span>
                            <span class="detail-val">{{$portfolio->title}}</span>
                        </div>
                        <div class="status">
                            <span class="detail-label">Duração: </span>
                            <span class="detail-val">{{$portfolio->duraction}}</span>
                        </div>
                        <div class="status">
                            <span class="detail-label">Descrição: </span>
                            <span class="detail-val text-white text-justify">{!!$portfolio->text!!}</span>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4 ads">
                        <div class="adsSmall"></div>
                    </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    {{-- Courses --}}
    @include('site.sections.portfolio')

    {{-- Newslatter --}}
    @include('site.sections.newsletter')

    {{-- Contact --}}
    @include('site.sections.contact')

@stop
