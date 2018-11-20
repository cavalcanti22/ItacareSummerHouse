<!DOCTYPE html>

<html lang="us">



<head>

	<meta charset="utf-8"/>

    <meta name="author" content="Gemini Web">

    <meta name="description" content="fancy house, security 24h e exclusive beach house for rental at Itacaré - BA">

    <meta name="keywords" content="rental,summer, house, itacare, bahia, beach, beachs,villas, villas de são jose, tiririca, prainha">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?=$titulo?></title>

    <link rel="icon" href="<?=site_url()?>resources/site/coconut-tree-on-an-island.png"  type="image/png">
	
    
	<!-- Social: Facebook / Open Graph -->
    <meta property="og:title" content="Itacaré Summer House">
    <meta property="og:type" content="company">
	<meta property="og:description" content="Fancy house for rental.">
	<meta property="og:image" content="http://itacaresummerhouse.com.br/img/piscina/1.jpg">
	<meta property="og:url" content="http://itacaresummerhouse.com.br">
    
	<!-- Social: Twitter -->
	<meta name="twitter:card" content="summary_large_image"> <!-- aqui fica o tipo de card -->
	<meta name="twitter:site" content="@Rod_Cavalcanti"> <!-- twitter handler do site -->
	<meta name="twitter:title" content="Itacaré Summer House">
	<meta name="twitter:description" content="Casa de alto padrão em Itacaré">
	<meta property="twitter:image:src" content="http://itacaresummerhouse.com.br/img/piscina/1.jpg">


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



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>

        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->

    

    



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

                        <a class="page-scroll" href="#services">The House</a>

                    </li>

                    <li>

                        <a class="page-scroll" href="#portfolio">Pictures</a>

                    </li>

                    <li>

                        <a class="page-scroll" href="#about">Itacaré</a>

                    </li>

                    <li>

                        <a class="page-scroll" href="#team">Rates</a>

                    </li>

                    <li>

                        <a class="page-scroll" href="#contact">Booking</a>

                    </li>

                </ul>

            </div>

            <!-- /.navbar-collapse -->

        </div>

        <!-- /.container-fluid -->

    </nav>



    <!-- Header -->

    <header style="background-image: url('<?=site_url().$headeringles['imagem']?>');">

        <div class="container">

            <div class="intro-text">

                <div class="intro-lead-in"><?=$headeringles['titulo']?></div>

                <div class="intro-heading"><?=$headeringles['subtitulo']?></div>

                <a href="#services" class="page-scroll btn btn-xl">Know More</a>

            </div>

        </div>

    </header>



    <?php require_once $view.".php" ?>


    <footer>

        <div class="container">

            <div class="row">

                <div class="col-md-4">

                    <span class="copyright">Copyright &copy; | <a href="http://geminiweb.com.br/" target="_blank">By Gemini Web 2016</a></span>

                </div>

                <div class="col-md-4">

                    <ul class="list-inline social-buttons">

                        <li><a href="<?=site_url()."Sites/index"?>" target="_blank"><img src="<?=site_url()?>resources/site/img/flag2.png" alt="" id="br"></a>

                        </li>

                        <li><a href="<?=$contato['airbnb']?>" target="_blank"><img src="<?=site_url()?>resources/site/img/airbnb.png" alt="" id="air" ></a>

                        </li>
                        
                        
                        <li><a href="<?=$contato['instagram']?>" target="_blank"><i class="fa fa-instagram"  ></i></a>
                        
                        </li>

                        <li><a href="h<?=$contato['facebook']?>" target="_blank"><i class="fa fa-facebook"  ></i></a>
                        
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
					<!---Booking-->
        	<div class="booking">
            	<a href="<?=$contato['booking']?>" target="_blank"><p class="book"><u>Book Here</u> through  <img src="<?=site_url()?>resources/site/img/logo_booking.png" alt="booking"> </p></a>
            </div>
    </footer>



    