    <!-- ======= Courses Section ======= -->
    <section class="section courses" id="courses">
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
                @if (isset($courses))
                    <div class="row">
                        @foreach ($courses as $course)
                            <div class="col-md-4 gsap-reveal">
                                    @foreach ($course->images as $images)
                                        @if($images->featured == '1')
                                            @php 
                                                $img = 'storage/'.$images->path.'/'.$images->title; 
                                                $alt = $images->title;
                                            @endphp
                                        @endif
                                    @endforeach
                                <a href="{{url('nossos-cursos/'.$course->slug)}}" class="main-property" style="background-image: url({{ url($img) }});">
                                    <span class="status">Duração {{$course->duraction}}</span>
                                    <div class="prop-details">
                                        <span class="price">Valor sob consulta</span>
                                        <h3>{{$course->title}}</h3>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
            <div class="col-lg-12 text-center pt-3">
                <p class="gsap-reveal"><a href="{{url('cursos')}}" class="btn btn-outline-pill btn-custom-light">Mais cursos...</a></p>
            </div>
        </div>
    </section><!-- End Courses Section -->
