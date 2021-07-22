    <!-- ======= Courses Section ======= -->
    <section class="section portfolio" id="portfolio">
        <div class="container">
            <div class="section-heading-wrap text-center mb-5">
                <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">Portfólio</span></h2>
                <span class="gsap-reveal">
                    <picture class="lazyload img-fluid" alt="divider" width="150">
                        <source srcset="{{ url('storage/images/site/divider_alvo_gold.png') }}" />
                        <source srcset="{{ url('storage/images/site/divider_alvo_gold.webp') }}"/>
                        <img class="lazyload img-fluid" src="{{ url('storage/images/site/divider_alvo_gold.png') }}" alt="divider" width="150"/>
                    </picture >
                </span>
            </div>

            <div class="container apiPortfolio">
                @if (isset($portfolio))
                    <div class="row apiPortfolio">
                        @foreach ($portfolio as $work)
                            <div class="col-md-4 gsap-reveal">
                                    @foreach ($work->images as $images)
                                        @if($images->featured == '1')
                                            @php
                                                $img = 'storage/'.$images->path.'/'.$images->title;
                                                $alt = $images->title;
                                            @endphp
                                        @endif
                                    @endforeach
                                <a href="{{url('trabalhos-realizados/'.$work->slug)}}" class="main-property" style="background-image: url({{ url($img) }});">
                                    <span class="status">Duração {{$work->duraction}}</span>
                                    <div class="prop-details">
                                        <span class="price">Valor sob consulta</span>
                                        <h3>{{$work->title}}</h3>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
            <div class="col-lg-12 text-center pt-3">
                <p class="gsap-reveal"><a href="{{url('trabalhos-realizados')}}" class="btn btn-outline-pill btn-custom-light">Veja mais...</a></p>
            </div>
        </div>
    </section><!-- End Courses Section -->
