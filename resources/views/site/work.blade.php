@extends('site.app')
@section('body')

    <!-- ======= partners Section ======= -->
    <section id="header" class="header jarallax" style="background-image: url({{ url('storage/images/site/bg.jpg') }});">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7 mx-auto text-center">
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
    <!-- End Portfolio Section -->
    <div class="container newslatter-section mt-3">
        <div class="portfolio-single-wrap section" id="portfolio-single-section">
          <div class="portfolio-single-inner">
            <div class="section-heading-wrap text-center mb-5">
                <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">{{$work->title}}</span></h2>
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
                    <section id="portfolio" class="portfolio">
                        <div class="row blog align-items-stretch portfolio-container">
                            @if (isset($work->images))
                                @foreach ($work->images as $images)
                                    <div class="col-lg-4 col-md-6 portfolio-item"  data-gall="portfolioGallery" data-aos="fade-up" data-aos-delay="0">
                                            <div class="portfolio-wrap">
                                                <figure class="mb-1" style="max-height:400px;">
                                                    <img src="{{ url('storage/'.$images->path.'/'.$images->title) }}" alt="{{$images->title}}" class="lazyload w-100">
                                                </figure>
                                                <div class="portfolio-info">
                                                    <h4>Clique para ampliar</h4>
                                                    <div class="portfolio-links">
                                                        <a href="{{ url('storage/'.$images->path.'/'.$images->title) }}" data-gall="portfolioGallery" class="venobox" title="{{$work->title}}"><i class="fas fa-3x fa-search"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </section>
                </div>
                <div class="col-lg-12">
                    <div class="row text-white">
                        <div class="col-sm-6 col-md-6 col-lg-8">
                            <div class="status">
                                <span class="detail-label">Título: </span>
                                <span class="detail-val">{{$work->title}}</span>
                            </div>
                            <div class="status">
                                <span class="detail-label">Duração: </span>
                                <span class="detail-val">{{$work->duraction}}</span>
                            </div>
                            <div class="status">
                                <span class="detail-label">Descrição: </span>
                                <span class="detail-val text-white text-justify">{!!$work->text!!}</span>
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


    </section><!-- End Portfolio Section -->
    {{-- Courses --}}
    @include('site.sections.portfolio')

    {{-- Newslatter --}}
    @include('site.sections.newsletter')

    {{-- Contact --}}
    @include('site.sections.contact')

@stop
