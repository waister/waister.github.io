<!doctype html>
<html lang="en">
<head>
    <title>Waister Nunes - Portfolio</title>
    <meta charset="UTF-8">
    <meta name="description" content="Desenvolvedor full stack de aplicações web e aplicações mobile para Android. Solicite um orçamento.">
    <meta name="keywords" content="waister, nunes, desenvolvedor, android, web, developer, android developer, web developer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />

    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/reset.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/animate.css"/>
    <link rel="stylesheet" href="css/magnific-popup.css"/>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

    <link rel="stylesheet" href="icon-fonts/font-awesome-4.5.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="icon-fonts/essential-regular-fonts/essential-icons.css"/>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

    <div id="preloader">
    	<div class="spinner">
            <div class="uil-ripple-css" style="transform:scale(0.29);"><div></div><div></div></div>
        </div>
    </div>

    <nav>
        <div class="row">
            <div class="container">
                <div class="logo">
                    Waister Nunes
                </div>
                <div class="responsive"><i data-icon="m" class="icon"></i></div>
                <ul class="nav-menu">
                    <li><a href="#home" class="smoothScroll">Home</a></li>
                    <li><a href="#about" class="smoothScroll">Sobre</a></li>
                    <li><a href="#portfolio" class="smoothScroll">Portfolio</a></li>
                    <li><a href="#contact" class="smoothScroll">Contato</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="home" id="home">
        <div class="home-content">
            <h1><span class="element">Waister Nunes</span></h1>
            <div class="social">
                <a href="https://www.linkedin.com/in/waister" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                <a href="https://www.facebook.com/waistern" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="https://twitter.com/waister" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="https://www.instagram.com/waisternunes/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </div>
            <a class="home-down bounce" href="#about"><i class="fa fa-angle-down"></i></a>
        </div>
    </section>

    <section class="about" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6 about-image wow fadeInUp" data-wow-delay="0.4s">
                    <img src="images/about.jpg" alt="">
                </div>
                <div class="col-md-6 about-text wow fadeInUp" data-wow-delay="0.8s">
                    <div class="out">
                        <h2>Uma Breve História de Waister...</h2>
                        <br />
                        <p>28 anos, natural de Caçu Goiás, casado, pai de três e apaixonado por aprender. Comecei com software quase que para não seguir os sonhos do meu pai. Contra a vontade dele, transformei o computador no meu ganha pão e ferramenta de entretenimento.</p>
                        <br />
                        <p>Em 2009 comecei com páginas simples, contruindo tudo da pior forma possível, sem seguir nenhum padrão. Mas logo corri atrás de conhecimento e seguir padrões de projetos. Já pouco empolgado com web, me vi seduzido pelo ambiente mobile, onde em 2015, mergulhei de cara no mundo do Android, onde estou até hoje.</p>
                    </div>
                </div>
            </div>
        </div> <!-- Container end -->
        <div class="container-fluid gray-bg">
            <div class="container what-can">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 feature">
                    <!--<i data-icon="1" class="icon"></i>-->
                    <h3>ANDROID APPS</h3>
                    <p>Desenvolvimento de aplicativos nativos com Android Studio e Java.</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 feature">
                    <!--<i data-icon="!" class="icon"></i>-->
                    <h3>MATERIAL DESIGN</h3>
                    <p>Apps lindos segundo o padrão de design oficial do Android.</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 feature">
                    <!--<i data-icon="C" class="icon"></i>-->
                    <h3>WEB SERVICES</h3>
                    <p>Desenvolvimento completo de um app com API Rest.</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 feature">
                    <!--<i data-icon="#" class="icon"></i>-->
                    <h3>WEBSITES</h3>
                    <p>Desenvolvimento de sites e sistemas web modernos e responsivos.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="portfolio" id="portfolio">
        <div class="container">
            <div class="section-title">
                <h2>PORTFOLIO</h2>
                <div class="portfolio_filter">
                    <ul>
                        <li class="select-cat" data-filter="*">Tudo</li>
                        <li data-filter=".applications">Aplicativos</li>
                        <li data-filter=".websites">Websites</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="isotope_items row">
                        <a href="https://play.google.com/store/apps/details?id=br.taxi.mo" class="single_item applications col-md-4 col-sm-6" target="_blank">
                            <img src="images/jobs/ongo.jpg" alt="">
                            <span class="details">
                                <span class="name">ON GO</span>
                                <span class="info">Aplicativo de mobilidade para facilitar a comunicação entre mototaxistas, taxistas e motofretistas a seus clientes.</span>
                            </span>
                        </a>
                        <a href="https://play.google.com/store/apps/details?id=me.waister.hinodeestoque" class="single_item applications col-md-4 col-sm-6" target="_blank">
                            <img src="images/jobs/meuestoque.jpg" alt="">
                            <span class="details">
                                <span class="name">Meu Estoque</span>
                                <span class="info">Inicialmente desenvolvi ele por conta própria com o nome de Hinode Estoque, que era para ajudar os consultores da Hinode a gerenciarem seus estoques de produtos.</span>
                            </span>
                        </a>
                        <a href="https://play.google.com/store/apps/details?id=com.radio96fm.radio" class="single_item applications col-md-4 col-sm-6" target="_blank">
                            <img src="images/jobs/radio96fm.jpg" alt="">
                            <span class="details">
                                <span class="name">Rádio 96 FM</span>
                                <span class="info">Aplicativo de rádio desenvolvido para a Rádio 96 FM de Rio Verde - GO. Com ele os ouvintes podem ouvir a rádio ao vivo e interagir com a programação em tempo real.</span>
                            </span>
                        </a>
                        <a href="https://play.google.com/store/apps/details?id=br.com.comigo.tecnoshowcomigo" class="single_item applications col-md-4 col-sm-6" target="_blank">
                            <img src="images/jobs/tecnoshow.jpg" alt="">
                            <span class="details">
                                <span class="name">Tecnoshow Comigo</span>
                                <span class="info">Aplicativo par auxiliar os visitantes da feira Tecnoshow Comigo. Come ele os visitantes podem acompanhar a programação, ver o mapa da feira, lista dos expositores e mais.</span>
                            </span>
                        </a>
                        <a href="http://www.jspecas.com.br/" class="single_item websites col-md-4 col-sm-6" target="_blank">
                            <img src="images/jobs/jspecas.jpg" alt="">
                            <span class="details">
                                <span class="name">JS Peças</span>
                                <span class="info">Desenvolvimento completo do portal, tanto front-end quanto back-end e painel administrativo, todo responsivo.</span>
                            </span>
                        </a>
                        <a href="https://play.google.com/store/apps/details?id=br.com.coopadf.agrobrasilia" class="single_item applications col-md-4 col-sm-6" target="_blank">
                            <img src="images/jobs/agrobrasilia.jpg" alt="">
                            <span class="details">
                                <span class="name">AgroBrasília</span>
                                <span class="info">Aplicativo par auxiliar os visitantes da feira AgroBrasília. Come ele os visitantes podem acompanhar a programação, ver o mapa da feira, lista dos expositores e mais.</span>
                            </span>
                        </a>
                        <a href="https://play.google.com/store/apps/details?id=me.waister.qualcompensa" class="single_item applications col-md-4 col-sm-6" target="_blank">
                            <img src="images/jobs/qualcompensa.jpg" alt="">
                            <span class="details">
                                <span class="name">Qual Compensa</span>
                                <span class="info">É um aplicativo bem simples, serve para calcular entre dois produtos com preços e tamanhos diferentes, qual deles sai mais barato.</span>
                            </span>
                        </a>
                        <a href="http://www.bradel.com.br/" class="single_item websites col-md-4 col-sm-6" target="_blank">
                            <img src="images/jobs/bradel.jpg" alt="">
                            <span class="details">
                                <span class="name">Grupo Bradel</span>
                                <span class="info">Desenvolvimento completo do portal, tanto front-end quanto back-end e painel administrativo. Também foi aplicato múltiplos idiomas em todo o site.</span>
                            </span>
                        </a>
                        <a href="https://play.google.com/store/apps/details?id=br.com.universalcsj.universalcsj" class="single_item applications col-md-4 col-sm-6" target="_blank">
                            <img src="images/jobs/universalcsj.jpg" alt="">
                            <span class="details">
                                <span class="name">Universal CSJ</span>
                                <span class="info">Aplicativo desenvolvido para auxiliar os vendedores da empresa a venderem os produtos.</span>
                            </span>
                        </a>
                        <a href="http://www.douglasranngel.com.br/" class="single_item websites col-md-4 col-sm-6" target="_blank">
                            <img src="images/jobs/douglasranngel.jpg" alt="">
                            <span class="details">
                                <span class="name">Douglas Ranngel</span>
                                <span class="info">Desenvolvimento completo do portal, tanto front-end quanto back-end e painel administrativo.</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact" id="contact">
        <div class="container">
            <div class="section-title">
                <h2>FALE COMIGO</h2>
                <p>Trabalho com desenvolvimento de software a mais de sete anos, confie seu projeto em mim e teremos uma parceria duradoura e profissional.</p>
            </div>
            <div class="row">
                <div class="col-md-offset-2 col-md-8 contact-information">
                    <div class="col-md-4 col-sm-4 col-xs-12 contact-info wow fadeInUp" data-wow-delay="0.4s">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <p>(62) 98228-3280<br><small>(WhatsApp)</small></p>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 contact-info wow fadeInUp" data-wow-delay="0.6s">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <p>Rua U-002, Setor Universitário, Rio Verde - GO, 75909-290</p>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 contact-info wow fadeInUp" data-wow-delay="0.8s">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <p>waisters@gmail.com<br><small>(Hangout)</small></p>
                    </div>
                </div>
                <div class="col-md-8 col-md-offset-2 wow fadeInUp" data-wow-delay="1s">
                    <form class="col-md-12 contact-form" method="POST" action="mail.php">
                        <div class="row">
                            <div class="col-md-6">
                                <input id="con_name" name="con_name" class="form-inp requie" type="text" placeholder="Nome">
                            </div>
                            <div class="col-md-6">
                                <input id="con_email" name="con_email" class="form-inp requie" type="email" placeholder="Email">
                            </div>
                            <div class="col-md-12">
                                <textarea name="con_message" id="con_message" class="requie" placeholder="Mensagem" rows="8"></textarea>
                                <input id="con_submit" class="site-button" type="submit" value="ENVIAR MENSAGEM">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="social">
                <a href="https://www.linkedin.com/in/waister" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                <a href="https://www.facebook.com/waistern" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="https://twitter.com/waister" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="https://www.instagram.com/waisternunes/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </div>
            <p>Copyright © <?php echo date("Y"); ?> Waister Nunes.</p>
        </div>
    </footer>

    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/typed.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/main.js"></script>

</body>
</html>
