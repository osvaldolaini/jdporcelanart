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
      <div class="collapse navbar-collapse mt-0 pt-0 mx-5">
                <a href="{{url('')}}" class="logo ml-5 pl-5">
                    <picture class="lazyload img-fluid">
                        <source srcset="{{url('storage/images/site/logo.png')}}" />
                        <source srcset="{{url('storage/images/site/logo.webp')}}"/>
                        <img class="lazyload img-fluid" src="{{url('storage/images/site/logo.png')}}" />
                    </picture>
                </a>
            <div class="navbar-nav text-left" id="main-nav">
                <li class="has-children">
                  <a href="{{url('')}}" class="nav-link {{ Request::is('') ? 'active' : null }}">HOME</a>
                </li>
                <li class="has-children">
                  <a href="{{url('sobre')}}" class="nav-link {{ Request::is('sobre*') ? 'active' : null }}">SOBRE</a>
                </li>
                <li class="has-children">
                  <a href="{{url('servicos')}}" class="nav-link {{ Request::is('servicos*') ? 'active' : null }}">SERVIÇOS</a>
                </li>
                <li class="has-children">
                  <a href="{{url('trabalhos-realizados')}}" class="nav-link {{ Request::is('trabalhos-realizados*') ? 'active' : null }}">PORTFÓLIO</a>
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
      <a class="navbar-brand mr-auto mr-lg-0 my-0" href="#" >
        <picture class="lazyload img-fluid">
            <source srcset="{{url('storage/images/site/logo_small_text.png')}}" />
            <source srcset="{{url('storage/images/site/logo_small_text.webp')}}"/>
            <img class="lazyload img-fluid" src="{{url('storage/images/site/logo_small_text.png')}}" />
        </picture >
      </a>
      <a class="navbar-toggler p-1 pr-3" data-toggle="offcanvas">
          <i class="fa fa-2x fa-bars"></i>
      </a>
      <div class="navbar-collapse offcanvas-collapse mt-1" id="navbarsExampleDefault" style="background-color: #000;/*background-image: url({{url('storage/images/site/bg_nav_small.jpg')}});*/">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('') ? 'active' : null }}" href="{{url('')}}">HOME <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('sobre*') ? 'active' : null }}" href="{{url('sobre')}}">SOBRE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('nossos-servicos*') ? 'active' : null }}" href="{{url('nossos-servicos')}}">SERVIÇOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('artigos*') ? 'active' : null }}" href="{{url('artigos')}}">ARTIGOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('contato*') ? 'active' : null }}" href="{{url('contato')}}"></i> CONTATO</a>
          </li>
        </ul>
      </div>
  </nav>
<!-- END nav -->
