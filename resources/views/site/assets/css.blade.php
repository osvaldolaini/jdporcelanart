    <!--Css do template -->
    <link rel="preload" href="{{asset('site/assets/css/style.min.css')}}" as="style" />
    <link rel="stylesheet" href="{{asset('site/assets/css/style.min.css')}}" />
    <!--Css do Font Awesome -->
    <link rel="preload" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" as="style" />
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="preload" href="{{ asset('vendor/overlayScrollbars/css/OverlayScrollbars.min.css') }}" as="style" />
    <link rel="stylesheet" href="{{ asset('vendor/overlayScrollbars/css/OverlayScrollbars.min.css') }}">

    <link href="{{asset('site/template/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('site/template/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('site/ads/css/ads.min.css')}}" rel="stylesheet">

@if (isset($styles))
    @foreach ($styles as $style_name)
        @php $href = asset('site/assets/css/'.$style_name); @endphp
        <link href="{{$href}}" rel="stylesheet">
    @endforeach
@endif