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
            <img src="{{url('storage/images/site/preloader-fixo.png')}}" id="preloader-fixo">
            <img src="{{url('storage/images/site/preloader-spinner.png')}}" id="preloader-spinner">
        </div>
    </main>

  <!--Nav bar large-->
  <nav class="navbar navbar-expand-md fixed-top nav-spark mt-0 pt-0" >
      <div class="collapse navbar-collapse mt-0 pt-0">
            <div class="navbar-nav " id="main-nav">
                <li class="has-children">
                  <a href="{{url('')}}" class="nav-link active">HOME</a>
                </li>
                <li class="has-children">
                  <a href="{{url('sobre')}}" class="nav-link">SOBRE</a>
                </li>
                <li class="has-children">
                  <a href="{{url('servicos')}}" class="nav-link">SERVIÇOS</a>
                </li>
                  <a href="{{url('')}}" class="logo">
                    <img src="{{url('storage/images/site/logo.png')}}" class="logo">
                  </a>
                <li class="has-children">
                  <a href="{{url('cursos')}}" class="nav-link">CURSOS</a>
                </li>
                <li class="has-children">
                  <a href="{{url('artigo')}}" class="nav-link">ARTIGOS</a>
                </li>
                <li class="has-children">
                  <a href="{{url('contato')}}" class="nav-link">CONTATO</a>
                </li>
            </div>
        </div>
  </nav>
  <!--Nav bar small-->
  <nav class="navbar navbar-expand-lg fixed-top d-lg-none nav-spark nav-spark-small" >
      <a class="navbar-brand mr-auto mr-lg-0 my-0 pl-3" href="#" >
        <picture>
            <source media="(min-width: 650px)" srcset="{{url('storage/images/site/logo_small_text.png')}}" />
            <source media="(min-width: 465px)" srcset="{{url('storage/images/site/logo_small_text.webp')}}"/>
            <source media="(min-width: 650px)" srcset="{{url('storage/images/site/logo_small_text.png')}}" />
            <source media="(min-width: 465px)" srcset="{{url('storage/images/site/logo_small_text.webp')}}" />
            <img src="{{url('storage/images/site/logo_small_text.png')}}" />
        </picture>
      </a>
      <a class="navbar-toggler p-1 border-0 pr-3" type="button" data-toggle="offcanvas">
        <i class="fa fa-2x fa-bars"></i>
      </a>
      <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault" style="background-image: url({{url('storage/images/site/bg.jpg')}});">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{url('')}}"><i class="fas fa-crosshairs"></i> HOME <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('sobre')}}"><i class="fas fa-2x fa-crosshairs"></i> SOBRE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('servicos')}}"><i class="fas fa-2x fa-crosshairs"></i> SERVIÇOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('cursos')}}"><i class="fas fa-2x fa-crosshairs"></i> CURSOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('artigos')}}"><i class="fas fa-2x fa-crosshairs"></i> ARTIGOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('contato')}}"> <i class="fas fa-2x fa-crosshairs"></i> CONTATO</a>
          </li>
        </ul>
      </div>
  </nav>
<!-- END nav -->
