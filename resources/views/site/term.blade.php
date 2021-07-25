@extends('site.app')
@section('body')

    <!-- ======= partners Section ======= -->
    <section id="header" class="header jarallax" style="background-image: url({{ url('storage/images/site/bg.jpg') }});">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7 mx-auto text-center">
                    <!--<h1 class="heading gsap-reveal-hero">SPARK</h1>-->
                    <h1 class="heading gsap-reveal-hero">
                        {{$title_postfix}}
                    </h1>
                    <h2 class="subheading gsap-reveal-hero">
                        <picture class="lazyload img-fluid" width="300">
                            <source srcset="{{ url('storage/images/site/logo_cover.png') }}" />
                            <source srcset="{{ url('storage/images/site/logo_cover.webp') }}"/>
                            <img class="lazyload img-fluid" src="{{ url('storage/images/site/logo_cover.png') }}" width="300"/>
                        </picture >
                    </h2>
                </div>
            </div>
        </div>
        <a href="#gallery" class="mouse-wrap smoothscroll">
            <span class="mouse">
                <span class="scroll"></span>
            </span>
            <span class="mouse-label">Role para baixo</span>
        </a>
    </section><!-- End Home Section -->
    <section class="section" style="background-color: #000;">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="subheading gsap-reveal-hero text-center">1. Termos</h2>
                    <span class="gsap-reveal text-center w-100 align-items-center">
                        <picture class="lazyload img-fluid" alt="divider" width="150">
                            <source srcset="{{ url('storage/images/site/divider_alvo_gold.png') }}" />
                            <source srcset="{{ url('storage/images/site/divider_alvo_gold.webp') }}"/>
                            <img class="lazyload img-fluid" src="{{ url('storage/images/site/divider_alvo_gold.png') }}" alt="divider" width="150"/>
                        </picture >
                    </span>
                    <p>
                        Ao acessar ao site <a href='https://www.sparkdespachantedearmas.com.br/'>spark despachante de armas</a>,
                        concorda em cumprir estes termos de serviço, todas as leis e regulamentos aplicáveis ​​e
                        concorda que é responsável pelo cumprimento de todas as leis locais aplicáveis.
                        Se você não concordar com algum desses termos, está proibido de usar ou acessar
                        este site. Os materiais contidos neste site são protegidos pelas leis de direitos
                        autorais e marcas comerciais aplicáveis.
                    </p>
                    <h2 class="subheading gsap-reveal-hero text-center">2. Uso de Licença</h2>
                    <span class="gsap-reveal text-center w-100 align-items-center">
                        <picture class="lazyload img-fluid" alt="divider" width="150">
                            <source srcset="{{ url('storage/images/site/divider_alvo_gold.png') }}" />
                            <source srcset="{{ url('storage/images/site/divider_alvo_gold.webp') }}"/>
                            <img class="lazyload img-fluid" src="{{ url('storage/images/site/divider_alvo_gold.png') }}" alt="divider" width="150"/>
                        </picture >
                    </span>
                    <p>É concedida permissão para baixar temporariamente uma cópia dos materiais
                        (informações ou software) no site spark despachante de armas , apenas para
                        visualização transitória pessoal e não comercial. Esta é a concessão de uma
                        licença, não uma transferência de título e, sob esta licença, você não pode: 
                    </p>
                    <ol>
                        <li>
                            modificar ou copiar os materiais; 
                        </li>
                        <li>usar os materiais para qualquer finalidade comercial ou para exibição pública
                            (comercial ou não comercial); 
                        </li>
                        <li>tentar descompilar ou fazer engenharia reversa de qualquer software contido no
                            site spark despachante de armas; 
                        </li>
                        <li>
                            remover quaisquer direitos autorais ou outras notações de propriedade dos materiais; ou 
                        </li>
                        <li>
                            transferir os materiais para outra pessoa ou 'espelhe' os materiais em qualquer
                            outro servidor.
                        </li>
                    </ol>
                    <p>Esta licença será automaticamente rescindida se você violar alguma dessas restrições e
                        poderá ser rescindida por spark despachante de armas a qualquer momento. Ao encerrar a
                        visualização desses materiais ou após o término desta licença, você deve apagar todos os
                        materiais                baixados em sua posse, seja em formato eletrónico ou impresso.
                    </p>
                    <h2 class="subheading gsap-reveal-hero text-center">3. Isenção de responsabilidade</h2>
                    <span class="gsap-reveal text-center w-100 align-items-center">
                        <picture class="lazyload img-fluid" alt="divider" width="150">
                            <source srcset="{{ url('storage/images/site/divider_alvo_gold.png') }}" />
                            <source srcset="{{ url('storage/images/site/divider_alvo_gold.webp') }}"/>
                            <img class="lazyload img-fluid" src="{{ url('storage/images/site/divider_alvo_gold.png') }}" alt="divider" width="150"/>
                        </picture >
                    </span>
                    <ol>
                        <li>
                            Os materiais no site da spark despachante de armas são fornecidos 'como estão'.
                            spark despachante de armas não oferece garantias, expressas ou implícitas, e,
                            por este meio, isenta e nega todas as outras garantias, incluindo, sem limitação,
                            garantias implícitas ou condições de comercialização, adequação a um fim específico
                            ou não violação de propriedade intelectual ou outra violação de direitos.
                        </li>
                        <li>
                            Além disso, o spark despachante de armas não garante ou faz qualquer representação
                            relativa à precisão, aos resultados prováveis ​​ou à confiabilidade do uso dos
                            materiais em seu site ou de outra forma relacionado a esses materiais ou em sites
                            vinculados a este site.
                        </li>
                    </ol>
                    <h2 class="subheading gsap-reveal-hero text-center">4. Limitações</h2>
                    <span class="gsap-reveal text-center w-100 align-items-center">
                        <picture class="lazyload img-fluid" alt="divider" width="150">
                            <source srcset="{{ url('storage/images/site/divider_alvo_gold.png') }}" />
                            <source srcset="{{ url('storage/images/site/divider_alvo_gold.webp') }}"/>
                            <img class="lazyload img-fluid" src="{{ url('storage/images/site/divider_alvo_gold.png') }}" alt="divider" width="150"/>
                        </picture >
                    </span>
                    <p>
                        Em nenhum caso o spark despachante de armas ou seus fornecedores serão responsáveis ​​
                        por quaisquer danos (incluindo, sem limitação, danos por perda de dados ou lucro ou
                        devido a interrupção dos negócios) decorrentes do uso ou da incapacidade de usar os
                        materiais em spark despachante de armas,
                        mesmo que spark despachante de armas ou um
                        representante autorizado da spark despachante de armas tenha sido notificado oralmente
                        ou por escrito da possibilidade de tais danos. Como algumas jurisdições não permitem limitações
                        em garantias implícitas, ou limitações de responsabilidade
                        por danos conseqüentes ou incidentais, essas limitações podem não se aplicar a você.
                    </p>
                    <h2 class="subheading gsap-reveal-hero text-center">5. Precisão dos materiais</h2>
                    <span class="gsap-reveal text-center w-100 align-items-center">
                        <picture class="lazyload img-fluid" alt="divider" width="150">
                            <source srcset="{{ url('storage/images/site/divider_alvo_gold.png') }}" />
                            <source srcset="{{ url('storage/images/site/divider_alvo_gold.webp') }}"/>
                            <img class="lazyload img-fluid" src="{{ url('storage/images/site/divider_alvo_gold.png') }}" alt="divider" width="150"/>
                        </picture >
                    </span>
                    <p>
                        Os materiais exibidos no site da spark despachante de armas podem incluir erros técnicos,
                        tipográficos ou fotográficos. spark despachante de armas não garante que qualquer material
                        em seu site seja preciso, completo ou atual. spark despachante de armas pode fazer alterações
                        nos materiais contidos em seu
                        site a qualquer momento, sem aviso prévio. No entanto, spark despachante de armas não se
                        compromete a atualizar os materiais.
                    </p>
                    <h2 class="subheading gsap-reveal-hero text-center">6. Links</h2>
                    <span class="gsap-reveal text-center w-100 align-items-center">
                        <picture class="lazyload img-fluid" alt="divider" width="150">
                            <source srcset="{{ url('storage/images/site/divider_alvo_gold.png') }}" />
                            <source srcset="{{ url('storage/images/site/divider_alvo_gold.webp') }}"/>
                            <img class="lazyload img-fluid" src="{{ url('storage/images/site/divider_alvo_gold.png') }}" alt="divider" width="150"/>
                        </picture >
                    </span>
                    <p>
                        O spark despachante de armas não analisou todos os sites vinculados ao seu site e não é
                        responsável pelo conteúdo de nenhum site vinculado. A inclusão de qualquer link não implica
                        endosso por spark despachante de armas do site. O uso de qualquer site vinculado é por conta
                        e risco do usuário.
                    </p>
                <h3>Modificações</h3>
                <p>
                    O spark despachante de armas pode revisar estes termos de serviço do site a qualquer momento,
                    sem aviso prévio. Ao usar este site, você concorda em ficar vinculado à versão atual desses
                    termos de serviço.
                </p>
                <h3>Lei aplicável</h3>
                <p>Estes termos e condições são regidos e interpretados de acordo com as leis do spark
                    despachante de armas e você se submete irrevogavelmente à jurisdição exclusiva dos
                    tribunais naquele estado ou localidade.
                </p>
                </div>
            </div>
        </div>
    </section>
    {{-- Contact --}}
    @include('site.sections.contact')

    {{-- Newslatter --}}
    @include('site.sections.newsletter')

    {{-- Portfólio --}}
    @include('site.sections.portfolio')


@stop
