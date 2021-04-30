    <!-- ======= Contact Section ======= -->
    <section class="section contact_form" id="contact">
        <div class="container">
            <div class="section-heading-wrap text-center mb-5">
                <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">Fale conosco</span></h2>
                <span class="gsap-reveal">
                    <picture class="lazyload img-fluid" alt="divider" width="150">
                        <source srcset="{{ url('storage/images/site/divider_alvo_gold.png') }}" />
                        <source srcset="{{ url('storage/images/site/divider_alvo_gold.webp') }}"/>
                        <img class="lazyload img-fluid" src="{{ url('storage/images/site/divider_alvo_gold.png') }}" alt="divider" width="150"/>
                    </picture >
                </span>
            </div>

            <div class="row justify-content-between">
                <div class="col-md-6">
                    <form method="post" class="form-outline-style" id="contactForm" >
                        <div class="form-group row mb-0">
                            <div class="col-lg-6 form-group gsap-reveal">
                                <label for="name">Name</label>
                                <input name="name" type="text" class="form-control" id="name">
                            </div>
                            <div class="col-lg-6 form-group gsap-reveal">
                                <label for="email">Email</label>
                                <input name="email" type="email" class="form-control" id="email">
                            </div>
                            <div class="col-lg-12 form-group gsap-reveal">
                                <label for="message">Escreva sua mensagem...</label>
                                <textarea name="message" id="message" cols="30" rows="7" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group row gsap-reveal">
                            <div class="col-md-12 d-flex align-items-center">
                                <input type="submit" class="btn btn-outline-pill btn-custom-light mr-3" value="Enviar">
                            </div>
                        </div>
                    </form>
                    <div id="form-message-warning" class="mt-4"></div>
                    <div id="form-message-success">
                        <p>Sua mensagem foi enviada, obrigado!</p>
                        <p>Em alguns dias nossa equipe entrará em contato.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-info">
                        <div class="gsap-reveal d-block">
                            <span class="d-block contact-info-label">Email</span>
                            <a href="#" class="contact-info-val">{{ $config->email }}</a>
                        </div>
                        <div class="gsap-reveal d-block">
                            <span class="d-block contact-info-label">Fone</span>
                            <a href="#" class="contact-info-val">{{ $config->phone }}</a>
                        </div>
                        <div class="gsap-reveal d-block">
                            <span class="d-block contact-info-label">Endereço</span>
                            <address class="contact-info-val">273 South Riverview Rd. <br> New York, NY 10011</address>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section><!-- End Contact Section -->
