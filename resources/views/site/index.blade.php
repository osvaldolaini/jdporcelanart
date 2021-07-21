@extends('site.app')
@section('body')

    <!-- ======= partners Section ======= -->
    <section id="home" class="header jarallax" style="background-image: url({{ url('storage/images/site/bg.jpg') }});">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7 mx-auto text-center">
                    <h1 class="heading gsap-reveal-hero">ARTE EM PORCELANATO</h1>
                    <!--<h1 class="heading gsap-reveal-hero">
                        <picture class="lazyload img-fluid" width="300">
                            <source srcset="{{ url('storage/images/site/logo_cover.png') }}" />
                            <source srcset="{{ url('storage/images/site/logo_cover.webp') }}"/>
                            <img class="lazyload img-fluid" src="{{ url('storage/images/site/logo_cover.png') }}" width="300"/>
                        </picture >
                    </h1>-->
                    <!--<h2 class="subheading gsap-reveal-hero">Despachante de armas</h2>-->
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

    {{-- About --}}
    @include('site.sections.partners')

    {{-- About --}}
    @include('site.sections.about')

    {{-- Services --}}
    @include('site.sections.services')

    {{-- Portfólio --}}
    @include('site.sections.portfolio')

    {{-- Gallery --}}

    {{-- Articles --}}
    @include('site.sections.articles')

    {{-- Newslatter --}}
    @include('site.sections.newsletter')

    {{-- Contact --}}
    @include('site.sections.contact')

@stop
