    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>

    <script src="{{asset('site/template/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('site/template/vendor/aos/aos.js')}}"></script>

    <script defer src="{{asset('site/assets/js/app_site.js')}}"></script>
    <script defer src="{{asset('site/assets/js/lazysizes.min.js')}}"></script>
    <script defer src="{{asset('site/assets/js/jqBootstrapValidation.js')}}"></script>
    <script defer src="{{asset('site/assets/js/contact_me.js')}}"></script>

    <script src="{{asset('site/assets/js/app_views.js')}}"></script>
        {{--Laini Ads--}}
        <script defer src="{{asset('site/ads/js/app_ads.min.js')}}"></script>

        @if (isset($scripts))
            @foreach ($scripts as $script_name)
                @php $src = asset('site/assets/js/'.$script_name); @endphp
                <script src="{{$src}}"></script>
            @endforeach
        @endif

		<script>
			$("a.portfolio-link").click(function(event) {
				event.preventDefault();
				var href = $(this).attr("href");
				var id = $(this).attr("id");
				var categoria = 'portifolio';
				$.ajax({
						type: "POST",
						url: "http://localhost/l41n1/clique/"+categoria+"/"+ id,
						dataType: 'json',
				});
			});
		</script>
