@extends('site.app')
@section('body')
    <header class="masthead">
  <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in">Desenvolvedor Web!</div>
        <div class="intro-heading text-uppercase">Vamos construir juntos?</div>
        <a class="btn btn-ol-color btn-xl text-uppercase" href="#projects">Conheça nossos serviços</a>
      </div>
    </div>
</header>
<section class="section about" id="about">
  <div class="container">
    <h1 class="about-header">SOBRE</h1>
    <div class="about-body">
      <p >{!!$config->about!!}</p>
    </div>
    <div class="row">
      <div class="col-lg-3">
        <div class="adsSmall"></div>
      </div>
      <div class="col-lg-3">
        <div class="adsSmall"></div>
      </div>
      <div class="col-lg-3">
        <div class="adsSmall"></div>
      </div>
    </div>
  </div>

</section>
<section class="section services" id="services">
  <div class="container">
    <h1 class="services-header">Serviços</h1>
    <div class="services-body">
      <div class="row text-center">
        <div class="col-md-4">
          <ul class="stage clearfix">
            <li class="scene">
              <div class="movie" onclick="return true">
                <div class="poster" >
                  <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-ol-theme"></i>
                    <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                  </span>
                    <h4 class="service-heading">E-Commerce</h4>
                </div>
                <div class="info">
                  <div class="imgInfo" >
                    <span class="fa-stack fa-4x">
                      <i class="fas fa-circle fa-stack-2x text-ol-theme"></i>
                      <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                  </div>
                  <h4 class="service-heading">E-Commerce</h4>
                  <p class="text-muted">
                    Vamos montar sua loja vitual e maximizar as suas vendas? As E-Commerce vieram para ficar.
                  </p>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="stage clearfix">
            <li class="scene">
              <div class="movie" onclick="return true" >
                <div class="poster" >
                  <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-ol-theme"></i>
                    <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                  </span>
                    <h4 class="service-heading">Design Responsivo</h4>
                </div>
                <div class="info">
                  <div class="imgInfo" >
                    <span class="fa-stack fa-4x">
                      <i class="fas fa-circle fa-stack-2x text-ol-theme"></i>
                      <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                  </div>
                    <h4 class="service-heading">Design Responsivo</h4>
                    <p class="text-muted">Veja o seu projeto ou página em todos as telas tablets, notebooks e smatphones.</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="stage clearfix">
            <li class="scene">
              <div class="movie" onclick="return true">
                <div class="poster" >
                  <span class="fa-stack fa-4x">
                      <i class="fas fa-circle fa-stack-2x text-ol-theme"></i>
                      <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                  </span>
                    <h4 class="service-heading">Sistemas de gestão web</h4>
                </div>
                <div class="info">
                  <div class="imgInfo" >
                    <span class="fa-stack fa-4x">
                      <i class="fas fa-circle fa-stack-2x text-ol-theme"></i>
                      <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                  </div>
                    <h4 class="service-heading">Sistemas de gestão web</h4>
                    <p class="text-muted">Sistemas de gestão são a solução para o seu negócio! Tenha o controle na palma da sua mão.</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
  <!-- <section id="clients" class="clients partners">
      <div class="container">
        <div class="row">
            @if (isset($partners))
                @foreach ($partners as $partner)
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="100">
                        <img class="img-fluid" src="{{url('storage/images/partners/'.$partner->image)}}" alt="{{$partner->title}}">
                    </div>
                @endforeach
            @endif
        </div>
      </div>
    </section>--><!-- End Clients Section -->
    <section id="clients" class="clients partners">
      <div class="container" data-aos="zoom-in">
        <div class="owl-carousel clients-carousel">
          @if (isset($partners))
                @foreach ($partners as $partner)
                    <img class="img-fluid" src="{{url('storage/images/partners/'.$partner->image)}}" alt="{{$partner->title}}">
                @endforeach
            @endif
        </div>
      </div>
    </section><!-- End Clients Section -->
    <div class="adsLarge"></div>
    <section class="section projects" id="projects">
    <div class="container">
        <h1 class="projects-header">Projetos</h1>
        <div class="projects-body">
            <div class="row">
                @if (isset($portfolios))
                    @foreach ($portfolios as $work)
                        <div class="col-sm-6 col-md-4 col-lg-4 projects-item">
                            <img class="img-fluid lazyload" data-src="{{url('storage/images/portfolios/'.$work->image)}}" alt="{{$work->title}}">
                            <div class="projects-caption">
                                <h4>{{$work->title}}</h4>
                                <p ><a href="{{$work->link}}" target="_blank">{{$work->link}}</a></p>
                            </div>
                        </div>
                    @endforeach
                @endif      
            </div>
        </div>
    </div>
    </section>

    <div class="adsLarge"></div>
<section class="section contacts my-0 py-0" id="contact" style="background-image: url('public/images/map-image.png');">
    <div class="container">
        <h1 class="contacts-header">Fale conosco</h1>
        <h3 class="text-muted text-center">Envie um email com seu projeto.</h3>
        <div class="contacts-body">
            <div class="row">
                <div class="col-lg-12">
                  <form id="contactForm" name="sentMessage" novalidate="novalidate">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                              <input class="form-control" id="name" type="text" placeholder="Seu Nome *" required="required" data-validation-required-message="Por favor digite seu Nome.">
                              <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                              <input class="form-control" id="email" type="email" placeholder="Seu Email *" required="required" data-validation-required-message="Por favor digite seu email address.">
                              <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                              <input class="form-control" id="phone" type="tel" placeholder="Seu número de contato *" required="required" data-validation-required-message="Por favor digite seu número de telefone.">
                              <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" id="message" placeholder="Sua Mensagem *" required="required" data-validation-required-message="Por favor digite sua message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                            <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Enviar</button>
                        </div>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</section> <!-- Header -->
  
@stop
