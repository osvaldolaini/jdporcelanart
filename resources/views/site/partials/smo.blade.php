    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="app_url" content="{{url('')}}">
    <meta name="keywords" content="{{$config->meta_tags}}">
    <!--SMO FACEBOOK-->
        <!--IDIOMA-->
        <meta property="og:locale" content="pt_BR">
        <!--URL DO SITE-->
        <meta property="og:url" content="">
        <!--TITULO-->

        <meta property="og:title" content="{{$config->title}} @yield('title_postfix', config('adminlte.title_postfix', ''))">
        <meta property="og:site_name" content="{{$config->title}} @yield('title_postfix', config('adminlte.title_postfix', ''))">
        <!--DESCRIÇÃO NÃO MAIOR QUE 200-->
        <meta property="og:description" content="{{$config->meta_description}}">
        <!--TAG NÃO MAIOR QUE 80-->
        <meta property="og:keywords" content="{{$config->meta_tags}}">
        <!--IMAGEM-->
        <meta property="og:image" content="{{url('storage/images/logos/'.$config->image)}}">
        <meta property="og:image:type" content="image/jpeg">
        <meta property="og:image:width" content="800"> <!-- PIXELS -->
        <meta property="og:image:height" content="600"> <!-- PIXELS -->
        <!--TIPO DO SITE OU DA PÁGINA-->
        <!-- CASO SEJA UM SITE NORMAL -->
        <meta property="og:type" content="website">
        <!-- CASO SEJA UM ARTIGO -->
        @if(isset($article))
            <meta property="og:type" content="{{$article->title}}">
            <meta property="article:author" content="{{$article->autor}}">
            <meta property="article:section" content="{{$article->category}}">
            <meta property="article:tag" content="{{$article->tags}}">
            <meta property="article:published_time" content="{{$article->published_at}}">
        @endif
    <!--SMO TWITTER-->
        <!--TIPO DO SITE OU DA PÁGINA
        photo (para imagens), player (para vídeos) e Summary (para todo o resto).-->
        <meta name="twitter:card " content="summary">
        <!--URLs DA PAGINA-->
        <meta name="twitter:domain" content="{{url('')}}">
        <meta name="twitter:url" content="{{url('')}}">
        <!--TITULO-->
        <meta name="twitter:title" content="{{$config->about}}" >
        <!--DESCRIÇÃO NÃO MAIOR QUE 200-->
        <meta name="twitter:description" content="{{$config->meta_description}}">
        <!--IMAGEM
        menores que 1 MB de tamanho de arquivo, > 60px por 60px e < 120px por 120px serão automaticamente redimensionadas.-->
        <meta name="twitter:image" content="{{url('storage/images/logos/'.$config->image)}}">
