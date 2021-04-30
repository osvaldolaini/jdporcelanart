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


    <!-- ======= Services Section ======= -->
    <section class="section" id="services">
        <div class="container">
            <div class="section-heading-wrap text-center mb-5">
                <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">Serviços</span></h2>
                <span class="gsap-reveal">
                    <picture class="lazyload img-fluid" alt="divider" width="150">
                        <source srcset="{{ url('storage/images/site/divider_alvo_gold.png') }}" />
                        <source srcset="{{ url('storage/images/site/divider_alvo_gold.webp') }}"/>
                        <img class="lazyload img-fluid" src="{{ url('storage/images/site/divider_alvo_gold.png') }}" alt="divider" width="150"/>
                    </picture >
                </span>
            </div>

            <div class="row gutter-v3">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="feature-v1" data-aos="fade-up" data-aos-delay="600">
                        <div class="wrap-icon">
                            <i class="fas fa-5x fa-user-shield"></i>
                        </div>
                        <h3>Registro de <br> Arma de Fogo</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="feature-v1" data-aos="fade-up" data-aos-delay="700">
                        <div class="wrap-icon">
                            <i class="fas fa-5x fa-file-signature"></i>
                        </div>
                        <h3>Assessoria para aquisição<br> de Arma de Fogo</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="feature-v1" data-aos="fade-up" data-aos-delay="800">
                        <div class="wrap-icon">
                            <i class="fas fa-5x fa-address-card"></i>
                        </div>
                        <h3>Concessão de <br> CR</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Services Section -->

    {{-- Newslatter --}}
    @include('site.sections.newsletter')

    {{-- Contact --}}
    @include('site.sections.contact')

@stop
