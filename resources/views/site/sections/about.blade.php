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
