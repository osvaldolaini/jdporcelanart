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
     <!-- ======= About Section ======= -->
     <section id="about" class="section">
        <div class="container">
            <div class="section-heading-wrap text-center mb-5">
                <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">Nossos serviços</span></h2>
                <span class="gsap-reveal">
                    <picture class="lazyload img-fluid" alt="divider" width="150">
                        <source srcset="{{ url('storage/images/site/divider_alvo_gold.png') }}" />
                        <source srcset="{{ url('storage/images/site/divider_alvo_gold.webp') }}"/>
                        <img class="lazyload img-fluid" src="{{ url('storage/images/site/divider_alvo_gold.png') }}" alt="divider" width="150"/>
                    </picture >
                </span>
            </div>
            <div class="row mt-5 justify-content-between">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <figure class="dotted-bg gsap-reveal-img">
                        <picture class="lazyload img-fluid">
                            <source srcset="{{ url('storage/images/site/registro.jpg') }}" />
                            <source srcset="{{ url('storage/images/site/registro.webp') }}"/>
                            <img class="lazyload img-fluid" src="{{ url('storage/images/site/registro.jpg') }}" alt="{{$config->about}}-registro-de-arma-de-fogo"/>
                        </picture >
                    </figure>
                </div>
                <div class="col-lg-4 pr-lg-5">
                    <h3 class="mb-4 heading-h3"><span class="gsap-reveal">Registro de <br> Arma de Fogo</span></h3>
                        {!!$config->about!!}
                </div>
            </div>
            <div class="row mt-5 justify-content-between">
                <div class="col-lg-4 pr-lg-5">
                    <h3 class="mb-4 heading-h3"><span class="gsap-reveal">Assessoria para aquisição<br> de Arma de Fogo</span></h3>
                        {!!$config->about!!}
                </div>
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <figure class="dotted-bg gsap-reveal-img">
                        <picture class="lazyload img-fluid">
                            <source srcset="{{ url('storage/images/site/assessoria.jpg') }}" />
                            <source srcset="{{ url('storage/images/site/assessoria.webp') }}"/>
                            <img class="lazyload img-fluid" src="{{ url('storage/images/site/assessoria.jpg') }}" alt="{{$config->about}}-assessoria-para-aquisicao-de-arma-de-fogo"/>
                        </picture >
                    </figure>
                </div>
            </div>
            <div class="row mt-5 justify-content-between">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <figure class="dotted-bg gsap-reveal-img">
                        <picture class="lazyload img-fluid">
                            <source srcset="{{ url('storage/images/site/cr.jpg') }}" />
                            <source srcset="{{ url('storage/images/site/cr.webp') }}"/>
                            <img class="lazyload img-fluid" src="{{ url('storage/images/site/cr.jpg') }}" alt="{{$config->about}}-concessao-de-cr-de-arma-de-fogo"/>
                        </picture >
                    </figure>
                </div>
                <div class="col-lg-4 pr-lg-5">
                    <h3 class="mb-4 heading-h3"><span class="gsap-reveal">Concessão de <br> CR</span></h3>
                        {!!$config->about!!}
                </div>
            </div>
        </div>
    </section><!-- End About Section -->


    {{-- Newslatter --}}
    @include('site.sections.newsletter')

    {{-- Articles --}}
    @include('site.sections.articles')


    {{-- Contact --}}
    @include('site.sections.contact')

@stop
