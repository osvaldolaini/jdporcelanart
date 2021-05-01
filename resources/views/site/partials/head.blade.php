<!-- Lines -->
<div class="lines-wrap">
    <div class="lines-inner ">
      <div class="lines"></div>
    </div>
</div>
<!-- END lines -->

<!-- Preloader -->
    <main id="main" >
        <div id="preloader" class="preloader">
            <picture class="lazyload img-fluid">
                        <source srcset="{{url('storage/images/site/preloader-fixo.png')}}" />
                        <source srcset="{{url('storage/images/site/preloader-fixo.webp')}}"/>
                        <img class="lazyload img-fluid"  src="{{url('storage/images/site/preloader-fixo.png')}}" id="preloader-fixo"/>
                    </picture>
                    <picture class="lazyload img-fluid">
                        <source srcset="{{url('storage/images/site/preloader-spinner.png')}}" />
                        <source srcset="{{url('storage/images/site/preloader-spinner.webp')}}"/>
                        <img class="lazyload img-fluid" src="{{url('storage/images/site/preloader-spinner.png')}}" id="preloader-spinner"/>
                    </picture>
        </div>
    </main>

  <!--Nav bar large-->
  <nav class="navbar navbar-expand-md fixed-top nav-spark mt-0 pt-0" >
      <div class="collapse navbar-collapse mt-0 pt-0">
            <div class="navbar-nav " id="main-nav">
                <li class="has-children">
                  <a href="{{url('')}}" class="nav-link {{ Request::is('') ? 'active' : null }}">HOME</a>
                </li>
                <li class="has-children">
                  <a href="{{url('sobre')}}" class="nav-link {{ Request::is('sobre*') ? 'active' : null }}">SOBRE</a>
                </li>
                <li class="has-children">
                  <a href="{{url('servicos')}}" class="nav-link {{ Request::is('servicos*') ? 'active' : null }}">SERVIÇOS</a>
                </li>
                  <a href="{{url('')}}" class="logo">
                    <picture class="lazyload img-fluid">
                        <source srcset="{{url('storage/images/site/logo.png')}}" />
                        <source srcset="{{url('storage/images/site/logo.webp')}}"/>
                        <img class="lazyload img-fluid" src="{{url('storage/images/site/logo.png')}}" />
                    </picture>
                  </a>
                <li class="has-children">
                  <a href="{{url('nossos-cursos')}}" class="nav-link {{ Request::is('nossos-cursos*') ? 'active' : null }}">CURSOS</a>
                </li>
                <li class="has-children">
                  <a href="{{url('artigos')}}" class="nav-link {{ Request::is('artigos*') ? 'active' : null }}">ARTIGOS</a>
                </li>
                <li class="has-children">
                  <a href="{{url('contato')}}" class="nav-link {{ Request::is('contato*') ? 'active' : null }}">CONTATO</a>
                </li>
            </div>
        </div>
  </nav>
  <!--Nav bar small-->
  <nav class="navbar navbar-expand-lg fixed-top d-lg-none nav-spark nav-spark-small" >
      <a class="navbar-brand mr-auto mr-lg-0 my-0 pl-3" href="#" >
        <picture class="lazyload img-fluid">
            <source srcset="{{url('storage/images/site/logo_small_text.png')}}" />
            <source srcset="{{url('storage/images/site/logo_small_text.webp')}}"/>
            <img class="lazyload img-fluid" src="{{url('storage/images/site/logo_small_text.png')}}" />
        </picture >
      </a>
      <a class="navbar-toggler p-1 border-0 pr-3" type="button" data-toggle="offcanvas">
        <i class="fa fa-2x fa-bars"></i>
      </a>
      <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault" style="background-image: url({{url('storage/images/site/bg.jpg')}});">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('') ? 'active' : null }}" href="{{url('')}}"><i class="fas fa-crosshairs"></i> HOME <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('sobre*') ? 'active' : null }}" href="{{url('sobre')}}"><i class="fas fa-2x fa-crosshairs"></i> SOBRE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('servicos*') ? 'active' : null }}" href="{{url('servicos')}}"><i class="fas fa-2x fa-crosshairs"></i> SERVIÇOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('nossos-cursos*') ? 'active' : null }}" href="{{url('nossos-cursos')}}"><i class="fas fa-2x fa-crosshairs"></i> CURSOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('artigos*') ? 'active' : null }}" href="{{url('artigos')}}"><i class="fas fa-2x fa-crosshairs"></i> ARTIGOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('contato*') ? 'active' : null }}" href="{{url('contato')}}"> <i class="fas fa-2x fa-crosshairs"></i> CONTATO</a>
          </li>
        </ul>
      </div>
  </nav>
<!-- END nav -->
