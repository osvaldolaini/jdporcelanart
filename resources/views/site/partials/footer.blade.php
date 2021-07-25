<!-- ======= Footer Section ======= -->
<footer class="footer jarallax" style="background-image: url({{ url('storage/images/site/bg_footer.jpg') }});">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="single_footer">
                        <a class="navbar-brand mr-auto mr-lg-0 my-0 pl-3" href="#">
                            <picture class="lazyload img-fluid">
                                <source srcset="{{url('storage/images/site/logo_small_text.png')}}" />
                                <source srcset="{{url('storage/images/site/logo_small_text.webp')}}"/>
                                <img class="lazyload img-fluid" src="{{url('storage/images/site/logo_small_text.png')}}" />
                            </picture >
                        </a>
                        <p>
                            {{ $config->meta_description }}
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 text center">
                    <div class="single_footer">
                        <h4>Siga-nos nas rede sociais</h4>
                        <ul class="list-unstyled list-inline">
                            @if (isset($socialMedias))
                                @foreach ($socialMedias as $socialMedia)
                                    <li class="list-inline-item">
                                        <a class="footer_icon" href="https://www.instagram.com/{{$socialMedia->link}}" target="_blank">
                                            <i class="fab fa-3x {{$socialMedia->icon}}"></i>
                                        </a>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2 text center">
                    <div class="single_footer">
                        <h4>Links</h4>
                        <ul class="list-unstyled">
                            <li><a href="{{url('sobre')}}">Sobre</a></li>
                            <li><a href="{{url('servicos')}}">Serviços</a></li>
                            <li><a href="{{url('trabalhos-realizados')}}">Portfólio</a></li>
                            <!--<li><a href="{{url('artigos')}}">Artigos</a></li>-->
                            <li><a href="{{url('contato')}}">Contato</a></li>
                            <li><a href="{{url('termo-de-uso')}}">Termo de uso</a></li>
                            <li><a href="{{url('politica-de-privacidade')}}">Política de privacidade</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_footer">
                        <h4>Newsletter</h4>
                        <p>Quer saber mais sobre nossos serviços?
                            Inscreva-se para receber todas essas informações.
                        </p>
                        <div id="mc_embed_signup">
                            <div class="newsletter" id="newsletter">
                                <div class="newsletter_form_container">
                                    <form method="post" class="form-outline-style" id="newsletterForm" >
                                        <div class="d-flex flex-row align-items-start justify-content-start">
                                            <input type="email" class="newsletter_input" name="email"
                                                placeholder="Insira seu email" required="required">
                                            <button class="newsletter_button">
                                                <i class="far fa-paper-plane"></i>
                                            </button>
                                        </div>
                                    </form>
                                    <div id="newsletter-message-warning" class="mt-4"></div>
                                    <div id="newsletter-message-success">
                                        <p>Assinatura concluída, obrigado!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer><!-- End Footer Section -->
