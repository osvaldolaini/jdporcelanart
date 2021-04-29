<!-- ======= Footer Section ======= -->
<footer class="footer jarallax" style="background-image: url({{ url('storage/images/site/bg.jpg') }});">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="single_footer">
                        <a class="navbar-brand mr-auto mr-lg-0 my-0 pl-3" href="#">
                            <picture>
                                <source media="(min-width: 650px)"
                                    srcset="{{ url('storage/images/site/logo_small_text.png') }}" />
                                <source media="(min-width: 465px)"
                                    srcset="{{ url('storage/images/site/logo_small_text.webp') }}" />
                                <source media="(min-width: 650px)"
                                    srcset="{{ url('storage/images/site/logo_small_text.png') }}" />
                                <source media="(min-width: 465px)"
                                    srcset="{{ url('storage/images/site/logo_small_text.webp') }}" />
                                <img src="{{ url('storage/images/site/logo_small_text.png') }}" />
                            </picture>
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
                            <li class="list-inline-item">
                                <a class="footer_icon" href="https://www.facebook.com/crosscanoas" target="_blank">
                                    <i class="fab fa-3x fa-facebook-square"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="footer_icon" href="https://www.instagram.com/crossfit_canoas"  target="_blank">
                                    <i class="fab fa-3x fa-instagram-square"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="footer_icon" href="https://www.youtube.com/channel/UC9sWQoZ0Ww6phxnRoSGYmPQ"  target="_blank">
                                    <i class="fab fa-3x fa-youtube-square"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2 text center">
                    <div class="single_footer">
                        <h4>Links</h4>
                        <ul class="list-unstyled">
                            <li><a href="{{url('sobre')}}">Sobre</a></li>
                            <li><a href="{{url('servicos')}}">Serviços</a></li>
                            <li><a href="{{url('cursos')}}">Cursos</a></li>
                            <li><a href="{{url('artigos')}}">Artigos</a></li>
                            <li><a href="{{url('contato')}}">Contato</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_footer">
                        <h4>Newsletter</h4>
                        <p>Quer saber mais sobre porte, registro, armamento e legislações?
                            Inscreva-se para receber todas essas informações.
                        </p>
                        <div id="mc_embed_signup">
                            <div class="newsletter" id="newsletter">
                                <div class="newsletter_form_container">
                                    <form class="form-alterar" action="{{ url('/receber-noticias') }}" method="post"
                                        accept-charset="utf-8" enctype="multipart/form-data">
                                        <div class="d-flex flex-row align-items-start justify-content-start">
                                            <input type="email" class="newsletter_input" name="email"
                                                placeholder="Insira seu email" required="required">
                                            <button class="newsletter_button">
                                                <i class="far fa-paper-plane"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer><!-- End Footer Section -->

    <div class="row text-right copyright">
        <div class="col-lg-10">
            <span>Copyright &copy; @php date('Y') @endphp - {{ $config->title }}, todos os direitos
                reservados. Desenvolvido Por
                <picture>
                    <source data-srcset="{{ url('storage/images/logos/logo-ol.png') }}" class="lazyload" />
                    <source data-srcset="{{ url('storage/images/logos/logo-ol.webp') }}" class="lazyload" />
                    <img data-src="{{ url('storage/images/logos/logo-ol.png') }}" class="lazyload"
                        style="width:10%" />
                </picture>
            </span>
        </div>
    </div>
