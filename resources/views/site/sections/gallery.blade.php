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
                    <img alt="teste" src="{{ url('storage/images/events/1/gallery-1.jpg') }}" data-src="{{ url('storage/images/events/1/gallery-1.jpg') }}" class="lazyload img-fluid" />
                    <div class="gallery-info">
                        <h4>App 1</h4>
                        <p>App</p>
                        <div class="gallery-links">
                            <a href="{{ url('storage/images/events/1/gallery-1.jpg') }}" data-gall="galleryGallery"
                                class="venobox" title="Web 3"><i class="fas fa-fw fa-search"></i></a>
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
