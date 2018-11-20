
<!DOCTYPE html>

<html lang="pt-br"><head>

    <meta charset="utf-8"/>

    <meta name="author" content="Gemini Web">

    <meta name="description" content="Casa de alto pradrão, condomínio com segurança 24h e praia exclusiva disponível para alugar em Itacaré - BA">

    <meta name="keywords" content="aluguel,temporada, casa, itacare, bahia, praia, praias,comdominio, villas de são jose, tiririca, prainha">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Título -->
    <title><?=$titulo?></title>

    <!-- Social: Facebook / Open Graph -->
    <meta property="og:title" content="Itacaré Summer House">
    <meta property="og:description" content="Casa de alto padrão para alugar.">
    <meta property="og:type" content="company">
    <meta property="og:image" content="http://itacaresummerhouse.com.br/<?=site_url()?>resources/site/img/piscina/1.jpg">
    <meta property="og:url" content="http://itacaresummerhouse.com.br">

    <!-- Social: Twitter -->
    <meta name="twitter:card" content="summary_large_image"> <!-- aqui fica o tipo de card -->
    <meta name="twitter:site" content="@Rod_Cavalcanti"> <!-- twitter handler do site -->
    <meta name="twitter:title" content="Itacaré Summer House">
    <meta name="twitter:description" content="Casa de alto padrão em Itacaré">
    <meta property="twitter:image:src" content="http://itacaresummerhouse.com.br/<?=site_url()?>resources/site/img/piscina/1.jpg">

    <!-- Ícone da Página -->
    <link rel="icon" href="<?=site_url()?>resources/site/coconut-tree-on-an-island.png"  type="image/png">



    <!-- Bootstrap Core CSS -->

    <link href="<?=site_url()?>resources/site/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">



    <!-- Custom Fonts -->

    <link href="<?=site_url()?>resources/site/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css">



    <!-- Theme CSS -->

    <link href="<?=site_url()?>resources/site/css/agency.min.css" rel="stylesheet">
    <link href="<?=site_url()?>resources/site/css/style.css" rel="stylesheet">



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>

        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->


    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
    <script>
      var OneSignal = window.OneSignal || [];
      OneSignal.push(function() {
        OneSignal.init({
          appId: "d184247a-320b-495e-91a5-32ddca6415d9",
      });
    });
</script>




</head>



<body id="page-top" class="index">

    <!--google analytics-->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-89511401-1', 'auto');
      ga('send', 'pageview');

  </script>
  <!--google analytics-->

  <!-- Navigation -->

  <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">

    <div class="container">

        <!-- Brand and toggle get grouped for better mobile display -->

        <div class="navbar-header page-scroll">

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">

                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>

            </button>

            <a class="navbar-brand page-scroll" href="#page-top"><span class="itc">Itacaré Summer House</span></a>

        </div>



        <!-- Collect the nav links, forms, and other content for toggling -->

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav navbar-right">

                <li class="hidden">

                    <a href="#page-top"></a>

                </li>

                <li>

                    <a class="page-scroll" href="#services">A Casa</a>

                </li>

                <li>

                    <a class="page-scroll" href="#portfolio">Fotos</a>

                </li>

                <li>

                    <a class="page-scroll" href="#about">Itacaré</a>

                </li>

                <li>

                    <a class="page-scroll" href="#team">Tarifas</a>

                </li>

                <li>

                    <a class="page-scroll" href="#contact">Reservas</a>

                </li>

             <!--    <li>

                    <a class="page-scroll" href="blog.html">Blog</a>

                </li> -->

            </ul>

        </div>

        <!-- /.navbar-collapse -->

    </div>

    <!-- /.container-fluid -->

</nav>


<!-- Header -->

<header style="background-image: url('<?=site_url().$header['imagem']?>')">

    <div class="container">

        <div class="intro-text">

            <div class="intro-lead-in"><?=$header['titulo']?></div>

            <div class="intro-heading" id="hosp"><?=$header['subtitulo']?></div>

            <a href="#services" id="botaomais" class="page-scroll btn btn-xl">Saiba Mais</a>

        </div>


    </div>

</header>



<!-- php -->
<?php require $view.".php"; ?>  
<!-- php -->



<footer>

    <div class="container">

        <div class="row">

            <div class="col-md-4">

                <span class="copyright">Copyright &copy; | <a href="http://geminiweb.com.br/" target="_blank">By Gemini Web 2016</a></span>

            </div>

            <div class="col-md-4">

                <ul class="list-inline social-buttons">

                   <li><a href="<?=site_url()."Sites/ingles"?>" target="_blank"><img src="<?=site_url()?>resources/site/img/flag.png" alt="" id="flag"></a>

                   </li>

                   <li><a href="<?=$contato['airbnb']?>" target="_blank"><img src="<?=site_url()?>resources/site/img/airbnb.png" alt="" id="air" ></a>

                   </li>


                   <li><a href="<?=$contato['instagram']?>" target="_blank"><i class="fa fa-instagram"  ></i></a>

                   </li>

                   <li><a href="<?=$contato['facebook']?>" target="_blank"><i class="fa fa-facebook"  ></i></a>

                   </li>

               </ul>

           </div>

           <div class="col-md-4">

            <ul class="list-inline quicklinks">

                <li><a href="#"><?=$contato['endereco']?></a>

                </li>

                <li><a href="#"><?=$contato['email']?></a>

                </li>

            </ul>

        </div>

    </div>

</div>
<!--Booking-->
<div class="booking">
    <a href="<?=$contato['booking']?>" target="_blank"><p class="book"><u>Faça aqui</u> a sua reserva online através do <img src="<?=site_url()?>resources/site/img/logo_booking.png" alt="booking"> </p></a>
</div>
</footer>



<!-- Portfolio Modals  -->

<!-- Use the modals below to showcase details about your portfolio projects! -->



<!-- Portfolio Modal 1 -->

<?php foreach ($fotos as $foto): ?>
    <div class="portfolio-modal modal fade" id="portfolioModal<?=$foto['id']?>" tabindex="-1" role="dialog" aria-hidden="true">

        <div class="modal-dialog">

            <div class="modal-content">

                <div class="close-modal" data-dismiss="modal">

                    <div class="lr">

                        <div class="rl">

                        </div>

                    </div>

                </div>

                <div class="container">

                    <div class="row">

                        <div class="col-lg-8 col-lg-offset-2">

                            <div class="modal-body">

                                <!-- Project Details Go Here -->

                                <h2><?=$foto['titulo2']?></h2>

                                <p class="item-intro text-muted"><?=$foto['subtitulo2']?></p>

                                <img class="img-responsive img-centered" src="<?=site_url().$foto['imagem']?>" alt="">

                                <p><?=$foto['texto']?></p>



                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Fechar</button>

                            </div>

                        </div>



                    </div>

                </div>

            </div>

        </div>

    </div>
<?php endforeach ?>







<!-- jQuery -->

<script src="<?=site_url()?>resources/site/vendor/jquery/jquery.min.js"></script>



<!-- Bootstrap Core JavaScript -->

<script src="<?=site_url()?>resources/site/vendor/bootstrap/js/bootstrap.min.js"></script>



<!-- Plugin JavaScript -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>



<!-- Contact Form JavaScript -->

<script src="<?=site_url()?>resources/site/js/jqBootstrapValidation.js"></script>

<!--<script src="js/contact_me.js"></script>-->



<!-- Theme JavaScript -->

<script src="<?=site_url()?>resources/site/js/agency.min.js"></script>



</body>



</html>

