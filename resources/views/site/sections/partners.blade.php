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