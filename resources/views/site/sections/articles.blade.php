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
                @if (isset($articles))
                    @php $id = 0; @endphp
                    @foreach ($articles as $article)
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
                            <a href="{{url('artigos/'.$article->slug)}}" class="grid-item blog-item w-100 h-100">
                                <div class="overlay">
                                    <div class="blog-item-content">
                                        <h3>{{$article->title}}</h3>
                                        <p class="post-meta">{{$article->created_by}} <span class="small">&bullet;</span> {{($article->created_at ? date( 'd/m/Y H:i' , strtotime($article->created_at)) : "")}}</p>
                                    </div>
                                </div>
                                @foreach ($article->images as $images)
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
                    <p class="gsap-reveal"><a href="{{url('artigos')}}" class="btn btn-outline-pill btn-custom-light">Leia mais...</a></p>
                </div>

            </div>
        </div>
    </section><!-- End Article Section -->
