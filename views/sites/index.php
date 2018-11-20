
<!-- Services Section -->

<section id="services">

    <h1>Informações Gerais</h1>

    <div class="container">

        <div class="row">

            <div class="col-lg-12 text-center">

                <h2 class="section-heading">A Casa</h2>

                <a href="<?=$contato['booking']?>" target="_blank" class="logos"><img src="<?=site_url()?>resources/site/img/booking.png"></a>
                <a href="<?=$contato['airbnb']?>" target="_blank" class="logos"><img src="<?=site_url()?>resources/site/img/air.png"></a>

                <h3 class="section-subheading text-muted">INFORMAÇÕES SOBRE A CASA</h3>

            </div>

        </div>

        <div id="fotos">



            <div id="com">



                <img src="<?=site_url().$infos['imagem']?>"  alt="comodidades">

            </div>



        </div><!--fotos-->



        <div class="row text-center">





            <div class="desc">

                <h4 class="service-heading">Localização</h4>

                <p class="text-muted">A casa fica a 64 km do aeroporto da cidade de Ilhéus, ao sul do estado da Bahia, e a poucos minutos da Cidade de Itacaré (5km do centro). No interior do condomínio Vilas de São José onde se encontram 1 resort (Itacaré Eco Resort, vilas residenciais, dentro de uma ampla reserva ambiental, com rios, trilhas, cachoeiras e próximo às duas praias mais bonitas do litoral baiano, a praia de São José (a apenas 200 metros da casa) e a Prainha, que está entre as 10 praias mais bonitas do Brasil.</p>

            </div>



            <div class="desc">



                <h4 class="service-heading">Estrutura</h4>

                <p class="text-muted">A casa está em meio a Mata Atlântica e tem vista total para o mar, possui Três suítes equipadas com ar-condicionado, uma com cama de casal queen size e as outras com 2 camas de solteiro, deck com piscina, sala, lavabo, cozinha americana e lavanderia. Acomoda confortávelmente 6 pessoas.</p>

            </div>

            <div class="desc">

                <h4 class="service-heading">Sobre o Condomínio</h4>

                <p class="text-muted">Condomínio com segurança e guarita 24 h, portão automático. Acesso a 2 lindas praias e Mata Atlântica. A cidade de Itacaré oferece supermercados, farmácias, posto de gasolina e restaurantes.</p>

            </div>

        </div>

    </div>

</section>



<!-- Portfolio Grid Section -->

<section id="portfolio" class="bg-light-gray">

    <div class="container">

        <div class="row">

            <div class="col-lg-12 text-center">

                <h2 class="section-heading">Fotos</h2>
                <a href="<?=$contato['booking']?>" target="_blank" class="logos"><img src="<?=site_url()?>resources/site/img/booking.png"></a>
                <a href="<?=$contato['airbnb']?>" target="_blank" class="logos"><img src="<?=site_url()?>resources/site/img/air.png"></a>
                <h3 class="section-subheading text-muted">Fotos da Casa</h3>



                <h3 class="section-subheading text-muted">INFORMAÇÕES SOBRE A CASA</h3>

            </div>

        </div>


        <div class="row">
            <?php foreach ($fotos as $foto): ?>

                <div class="col-md-4 col-sm-6 portfolio-item"><!--foto psicina1-->


                    <a href="#portfolioModal<?=$foto['id']?>" class="portfolio-link" data-toggle="modal"> 

                        <div class="portfolio-hover">

                            <div class="portfolio-hover-content">

                                <i class="fa fa-plus fa-3x"></i>

                            </div>

                        </div>

                        <img src="<?=site_url().$foto['imagem']?>" class="img-responsive" alt="">

                    </a>

                    <div class="portfolio-caption">

                        <h4><?=$foto['titulo']?></h4>

                        <p class="text-muted"><?=$foto['subtitulo']?></p>

                    </div>

                </div>
            <?php endforeach ?>


        </div>


    </div>

</section>



<!-- About Section -->

<section id="about">

    <div class="container">

        <div class="row">

            <div class="col-lg-12 text-center">

                <h2 class="section-heading">Itacaré</h2>
                <a href="<?=$contato['booking']?>" target="_blank" class="logos"><img src="<?=site_url()?>resources/site/img/booking.png"></a>
                <a href="<?=$contato['airbnb']?>" target="_blank" class="logos"><img src="<?=site_url()?>resources/site/img/air.png"></a>

                <h3 class="section-subheading text-muted">Dicas da cidade</h3>

                <!-- <img src="<?=site_url()?>resources/site/img/portfolio/foto.jpg" class="ft" alt="Itacaré"> -->

                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9 texto">
                    <iframe class="embed-responsive-item" src="<?=$video['facebook']?>" width="" height="" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
                </div>

                <p class="texto">Itacaré possui uma paisagem encantadora, formada por uma seqüência de praias, cuja natureza ainda está praticamente intocada pelo homem, com morros cobertos por florestas e muitos coqueiros. É a primeira praia da “Costa do Cacau”, no litoral baiano, ao sul de Salvador.

                Situada entre o mar e a Mata Atlântica, Itacaré é a opção ideal para quem gosta de praia aliada à vida noturna com bastante agitação, pois sempre há shows e festas, além dos bares e boates que funcionam o ano todo.</p>

                <p class="texto">Itacaré também é um ótimo destino para os adeptos do ecoturismo e os praticantes de esportes radicais. Há uma Área de Preservação Ambiental, por onde é possível fazer rafting, moutain bike, arvorismo, trilhas e rapel – ou simplesmente curtir a exuberância da Mata Atlântica com seus rios e cachoeiras.</p>

                <p class="texto">São 14 praias principais em Itacaré, cada qual com características bem particulares. As próximas à cidade possuem boa infra-estrutura turística, com restaurantes e pousadas. Já as mais distantes são quase desertas, sendo acessíveis apenas por trilhas.

                Antigo refúgio de coronéis do cacau, a vila de Itacaré conserva a arquitetura do passado. Muitos casarões foram reformados e agora abrigam restaurantes, bares, cafés, boates e lojas.</p>

                <p class="texto">As praias de Itacaré atraem muitos surfistas, em função das ondas fortes, consideradas as melhores da Bahia, e das águas quentes o ano inteiro, inclusive no inverno.</p>

            </div>

        </div>

        <div class="row">

            <div class="col-lg-12">

                <ul class="timeline">

                    <li>

                        <div class="timeline-image">

                            <img class="img-circle img-responsive" src="<?=site_url()?>resources/site/img/about/2.jpg" alt="">

                        </div>

                        <div class="timeline-panel">

                            <div class="timeline-heading">

                                <h4>Avião</h4>

                                <h4 class="subheading">Como Chegar?</h4>

                            </div>

                            <div class="timeline-body">

                                <p class="text-muted">Chegam a Ilhéus (IOS) - á 72 km - de Itacaré vôos diários das companhias TAM, GOL, AZUL e AVIANCA originários de São Paulo, Brasília, Belo Horizonte e Salvador.</p>

                            </div>

                        </div>

                    </li>

                    <li class="timeline-inverted">

                        <div class="timeline-image">

                            <img class="img-circle img-responsive" src="<?=site_url()?>resources/site/img/about/1.jpg" alt="">

                        </div>

                        <div class="timeline-panel">

                            <div class="timeline-heading">

                                <h4>Via Terrestre</h4>

                                <h4 class="subheading">Veículo Particular</h4>

                            </div>

                            <div class="timeline-body">

                                <p class="text-muted">A BR-101 é o principal acesso para quem vem da região sul do País. Para quem vem da região norte o melhor acesso é pela própria BA-001.</p> <p class="text-muted">  ara quem vem de Salvador a melhor opção é pegar o ferry boat para Bom Despacho, na Ilha de Itaparica, e seguir pela BA-001.

                                Partindo do sul, como Porto Seguro, Arraial D'Ajuda ou Trancoso, é melhor ir pela BR-367 até Eunápolis,depois seguir pela BR-101 sentido Itabuna. No entroncamento com a BA-263, vire à direita para Ilhéus. Em Ilhéus siga pela BA-001, sentido praias do norte/Itacaré. </p>



                            </div>

                        </div>

                    </li>

                    <li>





                        <div class="timeline-panel">

                            <div class="timeline-heading">

                                <h4>Viajar de Carro?</h4>

                                <h4 class="subheading">Distância em km</h4>

                            </div>

                            <div class="timeline-body">

                                <img src="<?=site_url()?>resources/site/img/about/cidades.jpg" alt="">

                            </div>

                        </div>

                    </li>



                    <li class="timeline-inverted">

                        <div class="timeline-image">

                            <h4>Bem-Vindo

                                <br> à

                                <br>Itacaré!</h4>

                            </div>

                        </li>

                    </ul>

                </div>

            </div>

        </div> 
    </section>





    <!-- Team Section -->

    <section id="team" class="bg-light-gray">

        <div class="container">

            <div class="row">

                <div class="col-lg-12 text-center">

                    <h2 class="section-heading">Tarifas Itacaré Summer House</h2>
                    <a href="<?=$contato['booking']?>" target="_blank" class="logos"><img src="<?=site_url()?>resources/site/img/booking.png"></a>
                    <a href="<?=$contato['airbnb']?>" target="_blank" class="logos"><img src="<?=site_url()?>resources/site/img/air.png"></a>
                    <h3 class="section-subheading text-muted">Faça a sua reserva diretamente pelos sites acima (clique na sua plataforma preferida):</h3>

                </div>

            </div>

        </div>

    </section>


    <!-- Clients Aside -->

    <aside class="clients">

        <div class="container">

            <div class="row">

                <div id="mapa">

                    <h2>LOCALIZAÇÃO GOOGLE MAP</h2>

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1718.512801488137!2d-38.99544571856556!3d-14.31452016683626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTTCsDE4JzUyLjMiUyAzOMKwNTknMzkuMyJX!5e1!3m2!1spt-BR!2sbr!4v1477532701489" frameborder="0" style="border:0" allowfullscreen></iframe>

                </div><!--mapa-->   

            </div>

        </div>



    </aside>



    <!-- Contact Section -->

    <section id="contact">

        <div class="container">

            <div class="row">

                <div class="col-lg-12 text-center">

                    <h2 class="section-heading">Reservas</h2>

                    <h3 class="section-subheading text-muted">Solicite a sua cotação no campo abaixo:</h3>

                </div>

            </div>

            <div class="row">

                <div class="col-lg-12">

                    <form  name="contato" id="contactForm" method="post" novalidate>

                        <div class="row">

                            <div class="col-md-6">

                                <div class="form-group">

                                    <input type="text" name="nomeremetente" class="form-control" placeholder="Nome *" id="name" required data-validation-required-message="Please enter your name.">

                                    <p class="help-block text-danger"></p>

                                </div>

                                <div class="form-group">

                                    <input type="email" name="emailremetente" class="form-control" placeholder="Seu Email *" id="email" required data-validation-required-message="Please enter your email address.">

                                    <p class="help-block text-danger"></p>

                                </div>

                                <div class="form-group">

                                    <input type="tel" name="phone" class="form-control" placeholder="Telefone *" id="phone" required data-validation-required-message="Please enter your phone number.">

                                    <p class="help-block text-danger"></p>

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">

                                    <textarea name="mensagem" class="form-control" placeholder="Sua Messagem *" id="message" required data-validation-required-message="Please enter a message."></textarea>

                                    <p class="help-block text-danger"></p>

                                </div>

                            </div>

                            <div class="clearfix"></div>

                            <div class="col-lg-12 text-center">

                                <div id="success"></div>

                                <button name="Submit" type="submit" class="btn btn-xl">Enviar</button>

                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>
    </section>

  

