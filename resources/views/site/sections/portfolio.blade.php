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

            <div class="row blog align-items-stretch">
                @if (isset($portfolio))
                    @php $id = 0; @endphp
                    @foreach ($portfolio as $work)
                    @php $id += 1;
                       switch ($id) {
                           case 1:
                               $col = 'col-lg-8';
                               break;
                            case 4:
                               $col = 'col-lg-8';
                               break;
                           default:
                                $col = 'col-lg-4';
                               break;
                       }
                    @endphp
                        <div class="col-sm-6 col-md-6 {{$col}} blog-post-entry " data-aos="fade-up" data-aos-delay="0">
                            <a href="{{url('trabalhos-realizados/'.$work->slug)}}" class="grid-item blog-item w-100 h-100">
                                <div class="overlay">
                                    <div class="blog-item-content">
                                        <h3>{{$work->title}}</h3>
                                        <p class="post-meta">
                                            <!--{{$work->created_by}}-->
                                            Postado em <span class="small">&bullet;</span>
                                            {{($work->created_at ? date( 'd/m/Y H:i' , strtotime($work->created_at)) : "")}}
                                            <span class="small">&bullet;</span> <i class="fas fa-eye"></i> {{$work->clicks}}
                                        </p>
                                    </div>
                                </div>
                                @foreach ($work->images as $images)
                                    @if($images->featured == '1')
                                       @php
                                            $img = 'storage/'.$images->path.'/'.$images->title;
                                            $alt = $images->title;
                                       @endphp
                                    @endif
                                @endforeach
                                <img src="{{ url($img) }}" class="lazyload img-fluid" alt="{{$alt}}" />
                            </a>
                        </div>
                    @endforeach
                @endif

                <div class="col-lg-12 text-center pt-3">
                    <p class="gsap-reveal"><a href="{{url('trabalhos-realizados')}}" class="btn btn-outline-pill btn-custom-light">Veja mais...</a></p>
                </div>

            </div>
        </div>
    </section><!-- End Courses Section -->
