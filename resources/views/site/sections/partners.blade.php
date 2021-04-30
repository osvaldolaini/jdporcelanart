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
    <!-- ======= About Section ======= -->
    <section id="about" class="section">
        <div class="container">
            <div class="section-heading-wrap text-center mb-5">
                <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">Sobre</span></h2>
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
                            <source srcset="{{ url('storage/images/site/about.jpg') }}" />
                            <source srcset="{{ url('storage/images/site/about.webp') }}"/>
                            <img class="lazyload img-fluid" src="{{ url('storage/images/site/about.jpg') }}" alt="{{$config->about}}"/>
                        </picture >
                    </figure>
                </div>
                <div class="col-lg-4 pr-lg-5">
                    <h3 class="mb-4 heading-h3"><span class="gsap-reveal">Nossa história</span></h3>
                        {!!$config->about!!}
                    <p class="gsap-reveal"><a href="{{url('sobre')}}" class="btn btn-outline-pill btn-custom-light">Saiba mais...</a></p>
                </div>
            </div>
        </div>
    </section><!-- End About Section -->
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

    <!-- ======= Article Section ======= -->
    <section class="section articles" id="articles">
        <div class="container">
            <div class="section-heading-wrap text-center mb-5">
                <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">Artigos em destaque</span></h2>
                <span class="gsap-reveal">
                    <picture class="lazyload img-fluid" alt="divider" width="150">
                        <source srcset="{{ url('storage/images/site/divider_alvo_gold.png') }}" />
                        <source srcset="{{ url('storage/images/site/divider_alvo_gold.webp') }}"/>
                        <img class="lazyload img-fluid" src="{{ url('storage/images/site/divider_alvo_gold.png') }}" alt="divider" width="150"/>
                    </picture >
                </span>
            </div>

            <div class="row blog align-items-stretch">
                <div class="col-sm-6 col-md-6 col-lg-8 blog-post-entry " data-aos="fade-up" data-aos-delay="0">
                    <a href="blog-single.html" class="grid-item blog-item w-100 h-100">
                        <div class="overlay">
                            <div class="blog-item-content">
                                <h3>A Mounteering Guide For Beginners</h3>
                                <p class="post-meta">By Joefrey <span class="small">&bullet;</span> 5 mins read</p>
                            </div>
                        </div>
                        <img src="{{ url('storage/images/articles/1/post_1.jpg') }}" class="lazyload img-fluid" alt="Image" />
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 blog-post-entry" data-aos="fade-up" data-aos-delay="100">
                    <a href="blog-single.html" class="grid-item blog-item w-100 h-100">
                        <div class="overlay">
                            <div class="blog-item-content">
                                <h3>A Mounteering Guide For Beginners</h3>
                                <p class="post-meta">By Joefrey <span class="small">&bullet;</span> 5 mins read</p>
                            </div>
                        </div>
                        <img src="{{ url('storage/images/articles/1/post_2.jpg') }}" class="lazyload img-fluid" alt="Image" />
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 blog-post-entry" data-aos="fade-up" data-aos-delay="0">
                    <a href="blog-single.html" class="grid-item blog-item w-100 h-100">
                        <div class="overlay">
                            <div class="blog-item-content">
                                <h3>A Mounteering Guide For Beginners</h3>
                                <p class="post-meta">By Joefrey <span class="small">&bullet;</span> 5 mins read</p>
                            </div>
                        </div>
                        <img src="{{ url('storage/images/articles/1/post_3.jpg') }}" class="lazyload img-fluid" alt="Image" />
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 blog-post-entry" data-aos="fade-up" data-aos-delay="100">
                    <a href="blog-single.html" class="grid-item blog-item w-100 h-100">
                        <div class="overlay">
                            <div class="blog-item-content">
                                <h3>A Mounteering Guide For Beginners</h3>
                                <p class="post-meta">By Joefrey <span class="small">&bullet;</span> 5 mins read</p>
                            </div>
                        </div>
                        <img src="{{ url('storage/images/articles/1/post_4.jpg') }}" class="lazyload img-fluid" alt="Image" />
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 blog-post-entry" data-aos="fade-up" data-aos-delay="200">
                    <a href="blog-single.html" class="grid-item blog-item w-100 h-100">
                        <div class="overlay">
                            <div class="blog-item-content">
                                <h3>A Mounteering Guide For Beginners</h3>
                                <p class="post-meta">By Joefrey <span class="small">&bullet;</span> 5 mins read</p>
                            </div>
                        </div>
                        <img src="{{ url('storage/images/articles/1/post_5.jpg') }}" class="lazyload img-fluid" alt="Image" />
                    </a>
                </div>
            </div>
        </div>
    </section><!-- End Article Section -->
    <!-- ======= Newslatter Section ======= -->
    <section class="section newslatter-section jarallax" id="newslatter" style="background-image: url({{ url('storage/images/site/newsletter_7.png') }});">
        <div class="d-flex align-items-center " >
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-7 text-center heading-section heading-section-white " data-aos="fade-up"
                        data-aos-delay="0">
                        <h2 class="heading-h2 " >Newsletter</h2>
                        <h4>Quer saber mais sobre porte, registro, armamento e legislações?</h4>
                            <p>Inscreva-se para receber todas essas informações.</p>
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
            </div>
        </div>
    </section><!-- End Newslatter Section -->


    <!-- ======= Courses Section ======= -->
    <section class="section articles" id="articles">
        <div class="container">
            <div class="section-heading-wrap text-center mb-5">
                <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">Cursos</span></h2>
                <span class="gsap-reveal">
                    <picture class="lazyload img-fluid" alt="divider" width="150">
                        <source srcset="{{ url('storage/images/site/divider_alvo_gold.png') }}" />
                        <source srcset="{{ url('storage/images/site/divider_alvo_gold.webp') }}"/>
                        <img class="lazyload img-fluid" src="{{ url('storage/images/site/divider_alvo_gold.png') }}" alt="divider" width="150"/>
                    </picture >
                </span>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-4 gsap-reveal">
                        <a href="#" class="main-property" style="background-image: url({{ url('storage/images/events/2/curso_1.jpg') }});">
                            <span class="status">Duração 10h</span>
                            <div class="prop-details">
                                <span class="price">Valor sob consulta</span>
                                <h3>Curso de controle de distúrbio civil</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gsap-reveal">
                        <a href="#" class="main-property"
                            style="background-image: url({{ url('storage/images/events/2/curso_2.jpg') }});">
                            <span class="status">Duração 8h</span>
                            <div class="prop-details">
                                <span class="price">Valor sob consulta</span>
                                <h3>Curso de entrada tática</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gsap-reveal">
                        <a href="#" class="main-property"
                            style="background-image: url({{ url('storage/images/events/2/curso_3.jpg') }});">
                            <span class="status">Duração 6h</span>
                            <div class="prop-details">
                                <span class="price">Valor sob consulta</span>
                                <h3>Curso de tiro de precisão</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Courses Section -->


    <!-- ======= Contact Section ======= -->
    <section class="section contact_form" id="contact">
        <div class="container">
            <div class="section-heading-wrap text-center mb-5">
                <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">Fale conosco</span></h2>
                <span class="gsap-reveal">
                    <picture class="lazyload img-fluid" alt="divider" width="150">
                        <source srcset="{{ url('storage/images/site/divider_alvo_gold.png') }}" />
                        <source srcset="{{ url('storage/images/site/divider_alvo_gold.webp') }}"/>
                        <img class="lazyload img-fluid" src="{{ url('storage/images/site/divider_alvo_gold.png') }}" alt="divider" width="150"/>
                    </picture >
                </span>
            </div>

            <div class="row justify-content-between">
                <div class="col-md-6">
                    <form method="post" class="form-outline-style" id="contactForm" >
                        <div class="form-group row mb-0">
                            <div class="col-lg-6 form-group gsap-reveal">
                                <label for="name">Name</label>
                                <input name="name" type="text" class="form-control" id="name">
                            </div>
                            <div class="col-lg-6 form-group gsap-reveal">
                                <label for="email">Email</label>
                                <input name="email" type="email" class="form-control" id="email">
                            </div>
                            <div class="col-lg-12 form-group gsap-reveal">
                                <label for="message">Escreva sua mensagem...</label>
                                <textarea name="message" id="message" cols="30" rows="7" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group row gsap-reveal">
                            <div class="col-md-12 d-flex align-items-center">
                                <input type="submit" class="btn btn-outline-pill btn-custom-light mr-3" value="Enviar">
                            </div>
                        </div>
                    </form>
                    <div id="form-message-warning" class="mt-4"></div>
                    <div id="form-message-success">
                        <p>Sua mensagem foi enviada, obrigado!</p>
                        <p>Em alguns dias nossa equipe entrará em contato.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-info">
                        <div class="gsap-reveal d-block">
                            <span class="d-block contact-info-label">Email</span>
                            <a href="#" class="contact-info-val">{{ $config->email }}</a>
                        </div>
                        <div class="gsap-reveal d-block">
                            <span class="d-block contact-info-label">Fone</span>
                            <a href="#" class="contact-info-val">{{ $config->phone }}</a>
                        </div>
                        <div class="gsap-reveal d-block">
                            <span class="d-block contact-info-label">Endereço</span>
                            <address class="contact-info-val">273 South Riverview Rd. <br> New York, NY 10011</address>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section><!-- End Contact Section -->
@stop
