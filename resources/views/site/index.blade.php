@extends('site.app')
@section('body')

    <!-- ======= partners Section ======= -->
    <section id="home" class="header jarallax" style="background-image: url({{ url('storage/images/site/bg.jpg') }});">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7 mx-auto text-center">
                    <!--<h1 class="heading gsap-reveal-hero">SPARK</h1>-->
                    <h1 class="heading gsap-reveal-hero">
                        <picture class="lazyload img-fluid" width="300">
                            <source srcset="{{ url('storage/images/site/logo_cover.png') }}" />
                            <source srcset="{{ url('storage/images/site/logo_cover.webp') }}"/>
                            <img class="lazyload img-fluid" src="{{ url('storage/images/site/logo_cover.png') }}" width="300"/>
                        </picture >
                    </h1>
                    <h2 class="subheading gsap-reveal-hero">Despachante de armas</h2>
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

    <!-- ======= Partners Section ======= -->
    <section id="partners" class="section partners">
        <div class="container" data-aos="zoom-in">
            <div class="owl-carousel partners-carousel">
                @if (isset($partners))
                    @foreach ( $partners as $partner)
                    <a href="{{$partner->link}}" target="_BLANK">
                        <img class="lazyload" src="{{ url('storage/images/partners/'.$partner->image) }}" alt="{{$partner->slug}}">
                    </a>
                    @endforeach
                @endif
            </div>
        </div>
    </section><!-- End Partners Section -->

    {{-- About --}}
    @include('site.sections.about')

    {{-- Services --}}
    @include('site.sections.services')

    <!-- ======= Gallery Section ======= -->
    <section class="section gallery" id="gallery">
        <div class="container">
            <div class="section-heading-wrap text-center mb-5">
                <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">Galeria</span></h2>
                <span class="gsap-reveal">
                    <picture class="lazyload img-fluid" alt="divider" width="150">
                        <source srcset="{{ url('storage/images/site/divider_alvo_gold.png') }}" />
                        <source srcset="{{ url('storage/images/site/divider_alvo_gold.webp') }}"/>
                        <img class="lazyload img-fluid" src="{{ url('storage/images/site/divider_alvo_gold.png') }}" alt="divider" width="150"/>
                    </picture >
                </span>
            </div>

            <div class="row gallery-container" data-aos="fade-up" data-aos-delay="200">
                <div class="col-lg-4 col-md-6 gallery-item filter-app isotope-item gsap-reveal-img">
                    <div class="gallery-wrap">
                        <img src="{{ url('storage/images/events/1/gallery-1.jpg') }}" class="lazyload img-fluid" alt="">
                        <div class="gallery-info">
                            <h4>App 1</h4>
                            <p>App</p>
                            <div class="gallery-links">
                                <a href="{{ url('storage/images/events/1/gallery-1.jpg') }}" data-gall="galleryGallery"
                                    class="venobox" title="Web 3"><i class="fas fa-fw fa-search"></i></a>
                                <a href="gallery-details.html" title="More Details"><i
                                        class="lazyload fas fa-fw fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 gallery-item filter-web isotope-item gsap-reveal-img">
                    <div class="gallery-wrap">
                        <img src="{{ url('storage/images/events/1/gallery-2.jpg') }}" class="lazyload img-fluid" alt="">
                        <div class="gallery-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <div class="gallery-links">
                                <a href="{{ url('storage/images/events/1/gallery-2.jpg') }}" data-gall="galleryGallery"
                                    class="venobox" title="Web 3"><i class="fas fa-fw fa-search"></i></a>
                                <a href="gallery-details.html" title="More Details"><i class="fas fa-fw fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 gallery-item filter-app isotope-item gsap-reveal-img">
                    <div class="gallery-wrap">
                        <img src="{{ url('storage/images/events/1/gallery-3.jpg') }}" class="lazyload img-fluid" alt="">
                        <div class="gallery-info">
                            <h4>App 2</h4>
                            <p>App</p>
                            <div class="gallery-links">
                                <a href="{{ url('storage/images/events/1/gallery-3.jpg') }}" data-gall="galleryGallery"
                                    class="venobox" title="Web 3"><i class="fas fa-fw fa-search"></i></a>
                                <a href="gallery-details.html" title="More Details"><i class="fas fa-fw fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 gallery-item filter-card isotope-item gsap-reveal-img">
                    <div class="gallery-wrap">
                        <img src="{{ url('storage/images/events/1/gallery-4.jpg') }}" class="lazyload img-fluid" alt="">
                        <div class="gallery-info">
                            <h4>Card 2</h4>
                            <p>Card</p>
                            <div class="gallery-links">
                                <a href="{{ url('storage/images/events/1/gallery-4.jpg') }}" data-gall="galleryGallery"
                                    class="venobox" title="Web 3"><i class="fas fa-fw fa-search"></i></a>
                                <a href="gallery-details.html" title="More Details"><i class="fas fa-fw fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="section-heading-wrap text-center mb-5">
                <h2 class="heading-h4 text-center divider"><span class="gsap-reveal">Quer ver mais fotos? </span></h2>
                <p class="gsap-reveal "><a href="#" class="btn btn-outline-pill btn-custom-light">Clique aqui</a></p>
            </div>

        </div>
    </section><!-- End Gallery Section -->

    {{-- Articles --}}
    @include('site.sections.articles')

    {{-- Newslatter --}}
    @include('site.sections.newsletter')

    {{-- Courses --}}
    @include('site.sections.courses')

    {{-- Contact --}}
    @include('site.sections.contact')

@stop
