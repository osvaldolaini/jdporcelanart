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
                   <p>Ao acessar ao site <a href='https://www.jdporcelanart.com.br/'>JD PORCELAN'ART</a>, concorda em cumprir estes termos de servi??o, todas as leis e regulamentos aplic??veis ??????e concorda que ?? respons??vel pelo cumprimento de todas as leis locais aplic??veis. Se voc?? n??o concordar com algum desses termos, est?? proibido de usar ou acessar este site. Os materiais contidos neste site s??o protegidos pelas leis de direitos autorais e marcas comerciais aplic??veis.</p>
                    <h2 class="subheading gsap-reveal-hero text-center">2. Uso de Licen??a</h2>
                    <span class="gsap-reveal text-center w-100 align-items-center">
                        <picture class="lazyload img-fluid" alt="divider" width="150">
                            <source srcset="{{ url('storage/images/site/divider_alvo_gold.png') }}" />
                            <source srcset="{{ url('storage/images/site/divider_alvo_gold.webp') }}"/>
                            <img class="lazyload img-fluid" src="{{ url('storage/images/site/divider_alvo_gold.png') }}" alt="divider" width="150"/>
                        </picture >
                    </span>
                    <p>?? concedida permiss??o para baixar temporariamente uma c??pia dos materiais (informa????es ou software) no site JD PORCELAN'ART , apenas para visualiza????o transit??ria pessoal e n??o comercial. Esta ?? a concess??o de uma licen??a, n??o uma transfer??ncia de t??tulo e, sob esta licen??a, voc?? n??o pode: </p> <ol> <li>modificar ou copiar os materiais;  </li> <li>usar os materiais para qualquer finalidade comercial ou para exibi????o p??blica (comercial ou n??o comercial);  </li> <li>tentar descompilar ou fazer engenharia reversa de qualquer software contido no site JD PORCELAN'ART;  </li> <li>remover quaisquer direitos autorais ou outras nota????es de propriedade dos materiais; ou  </li> <li>transferir os materiais para outra pessoa ou 'espelhe' os materiais em qualquer outro servidor.</li> </ol> <p>Esta licen??a ser?? automaticamente rescindida se voc?? violar alguma dessas restri????es e poder?? ser rescindida por JD PORCELAN'ART a qualquer momento. Ao encerrar a visualiza????o desses materiais ou ap??s o t??rmino desta licen??a, voc?? deve apagar todos os materiais baixados em sua posse, seja em formato eletr??nico ou impresso.</p> 
                    <h2 class="subheading gsap-reveal-hero text-center">3. Isen????o de responsabilidade</h2>
                    <span class="gsap-reveal text-center w-100 align-items-center">
                        <picture class="lazyload img-fluid" alt="divider" width="150">
                            <source srcset="{{ url('storage/images/site/divider_alvo_gold.png') }}" />
                            <source srcset="{{ url('storage/images/site/divider_alvo_gold.webp') }}"/>
                            <img class="lazyload img-fluid" src="{{ url('storage/images/site/divider_alvo_gold.png') }}" alt="divider" width="150"/>
                        </picture >
                    </span>
 <ol> <li>Os materiais no site da JD PORCELAN'ART s??o fornecidos 'como est??o'. JD PORCELAN'ART n??o oferece garantias, expressas ou impl??citas, e, por este meio, isenta e nega todas as outras garantias, incluindo, sem limita????o, garantias impl??citas ou condi????es de comercializa????o, adequa????o a um fim espec??fico ou n??o viola????o de propriedade intelectual ou outra viola????o de direitos. </li> <li>Al??m disso, o JD PORCELAN'ART n??o garante ou faz qualquer representa????o relativa ?? precis??o, aos resultados prov??veis ??????ou ?? confiabilidade do uso dos materiais em seu site ou de outra forma relacionado a esses materiais ou em sites vinculados a este site.</li> </ol> 
                    <h2 class="subheading gsap-reveal-hero text-center">4. Limita????es</h2>
                    <span class="gsap-reveal text-center w-100 align-items-center">
                        <picture class="lazyload img-fluid" alt="divider" width="150">
                            <source srcset="{{ url('storage/images/site/divider_alvo_gold.png') }}" />
                            <source srcset="{{ url('storage/images/site/divider_alvo_gold.webp') }}"/>
                            <img class="lazyload img-fluid" src="{{ url('storage/images/site/divider_alvo_gold.png') }}" alt="divider" width="150"/>
                        </picture >
                    </span>
                    <p>Em nenhum caso o JD PORCELAN'ART ou seus fornecedores ser??o respons??veis ??????por quaisquer danos (incluindo, sem limita????o, danos por perda de dados ou lucro ou devido a interrup????o dos neg??cios) decorrentes do uso ou da incapacidade de usar os materiais em JD PORCELAN'ART, mesmo que JD PORCELAN'ART ou um representante autorizado da JD PORCELAN'ART tenha sido notificado oralmente ou por escrito da possibilidade de tais danos. Como algumas jurisdi????es n??o permitem limita????es em garantias impl??citas, ou limita????es de responsabilidade por danos conseq??entes ou incidentais, essas limita????es podem n??o se aplicar a voc??.</p> 
                    <h2 class="subheading gsap-reveal-hero text-center">5. Precis??o dos materiais</h2>
                    <span class="gsap-reveal text-center w-100 align-items-center">
                        <picture class="lazyload img-fluid" alt="divider" width="150">
                            <source srcset="{{ url('storage/images/site/divider_alvo_gold.png') }}" />
                            <source srcset="{{ url('storage/images/site/divider_alvo_gold.webp') }}"/>
                            <img class="lazyload img-fluid" src="{{ url('storage/images/site/divider_alvo_gold.png') }}" alt="divider" width="150"/>
                        </picture >
                    </span>
                   <p>Os materiais exibidos no site da JD PORCELAN'ART podem incluir erros t??cnicos, tipogr??ficos ou fotogr??ficos. JD PORCELAN'ART n??o garante que qualquer material em seu site seja preciso, completo ou atual. JD PORCELAN'ART pode fazer altera????es nos materiais contidos em seu site a qualquer momento, sem aviso pr??vio. No entanto, JD PORCELAN'ART n??o se compromete a atualizar os materiais.</p>
                    <h2 class="subheading gsap-reveal-hero text-center">6. Links</h2>
                    <span class="gsap-reveal text-center w-100 align-items-center">
                        <picture class="lazyload img-fluid" alt="divider" width="150">
                            <source srcset="{{ url('storage/images/site/divider_alvo_gold.png') }}" />
                            <source srcset="{{ url('storage/images/site/divider_alvo_gold.webp') }}"/>
                            <img class="lazyload img-fluid" src="{{ url('storage/images/site/divider_alvo_gold.png') }}" alt="divider" width="150"/>
                        </picture >
                    </span>
                   <p>O JD PORCELAN'ART n??o analisou todos os sites vinculados ao seu site e n??o ?? respons??vel pelo conte??do de nenhum site vinculado. A inclus??o de qualquer link n??o implica endosso por JD PORCELAN'ART do site. O uso de qualquer site vinculado ?? por conta e risco do usu??rio.</p> </p> <h3>Modifica????es</h3> <p>O JD PORCELAN'ART pode revisar estes termos de servi??o do site a qualquer momento, sem aviso pr??vio. Ao usar este site, voc?? concorda em ficar vinculado ?? vers??o atual desses termos de servi??o.</p> <h3>Lei aplic??vel</h3> <p>Estes termos e condi????es s??o regidos e interpretados de acordo com as leis do JD PORCELAN'ART e voc?? se submete irrevogavelmente ?? jurisdi????o exclusiva dos tribunais naquele estado ou localidade.</p>
                </div>
            </div>
        </div>
    </section>
    {{-- Contact --}}
    @include('site.sections.contact')

    {{-- Newslatter --}}
    @include('site.sections.newsletter')

    {{-- Portf??lio --}}
    @include('site.sections.portfolio')


@stop
