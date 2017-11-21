<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <title>Sintracolpen</title>
        <meta name="description" content="">
        <!--[if IE]> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Lato:400,300,700,900,300italic,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,400italic,600italic,700italic,600,800,300,700,800italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
        
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('cssUser/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('cssUser/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('cssUser/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('cssUser/style.css') }}">
        <link rel="stylesheet" href="{{ asset('cssUser/revslider/revslider-index11.css') }}">
        <link rel="stylesheet" id="color-scheme" href="{{ asset('cssUser/colors/green.css') }}">
        
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{ asset('imgUser/favicon.ico') }}">
        <script src="{{ asset('jsUser/modernizr.js') }}"></script>
        <script src="{{ asset('jsUser/jquery.min.js') }}"></script>
        <script src="{{ asset('jsUser/queryloader2.min.js') }}"></script>
    </head>

    <body>
        <div class="boss-loader-overlay"></div>
        <div id="wrapper" class="bg-gray">
            <header id="header" role="banner">
                <nav class="navbar navbar-default animated-dropdown btt-dropdown" role="navigation">
                    <div class="navbar-top navbar-color clearfix">
                        <div class="container">
                            <div class="pull-right">
                               <div class="social-icons pull-right hidden-xs">
                                    <a href="https://twitter.com/sintracolpen1?lang=es" target="_blank" class="social-icon icon-twitter" title="Twitter">
                                        <i class="fa fa-twitter sizeIcons-header"></i>
                                    </a>
                                    <a href="https://www.instagram.com/sintracolpen/?hl=es" target="_blank" class="social-icon icon-instagram" title="Instagram">
                                        <i class="fa fa-instagram sizeIcons-header"></i>
                                    </a>
                                    <a href="https://www.youtube.com/channel/UCca6tePo-yD1tmmoQYJTn1g" class="social-icon icon-youtube" target="_blank" title="Youtube">
                                        <i class="fa fa-youtube-play sizeIcons-header"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="navbar-inner sticky-menu">
                        <div class="container">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle pull-right collapsed" data-toggle="collapse" data-target="#main-navbar-container">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                </button>

                                <div class="navbar-header">
                                    <a href="inicio.html"><img src="{{ asset('imgUser/logoSintracolpen.png') }}" id="logoHeader" class="pull-left marginLogo"></a>
                                </div>
                            </div>

                            <div class="collapse navbar-collapse marginMenu" id="main-navbar-container">
                                <ul class="nav navbar-nav">
                                    <li class="dropdown active megamenu-container">
                                        <a href="inicio.html">Inicio</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Nosotros<span class="angle"></span></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li class="dropdown sub-dropdown">
                                                <a href="nosotros.html">Misión - Visión</a>
                                            </li>
                                            <li class="dropdown sub-dropdown">
                                                <a href="nosotros.html">¿Quiénes somos?</a>
                                            </li>
                                            <li class="dropdown sub-dropdown">
                                                <a href="nosotros.html">¿Qué hacemos?</a>
                                            </li>
                                            <li class="dropdown sub-dropdown">
                                                <a href="nosotros.html">Principios Organizacionales</a>
                                            </li>
                                            <li class="dropdown sub-dropdown">
                                                <a href="nosotros.html">Valores Organizacionales</a>
                                            </li>
                                            <li class="dropdown sub-dropdown">
                                                <a href="nosotros.html">Comites, juntas y organismos</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Afiliaciones<span class="angle"></span></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li class="dropdown sub-dropdown">
                                                <a href="afiliate-ya.html">Afiliate ya!</a>
                                            </li>
                                            <li class="dropdown sub-dropdown">
                                                <a href="nuestros-afiliados.html">Nuestros afiliados</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Contenidos<span class="angle"></span></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li class="dropdown sub-dropdown">
                                                <a href="boletines-generales.html">Boletines Generales</a>
                                            </li>
                                            <li class="dropdown sub-dropdown">
                                                <a href="comunicados-oficiales.html">Comunicados Oficiales</a>
                                            </li>
                                            <li class="dropdown sub-dropdown">
                                            <li class="dropdown sub-dropdown">
                                                <a href="contenido-sindical.html">Contenido Sindical</a>
                                            </li>
                                            <li class="dropdown sub-dropdown">
                                                <a href="documentos-oficiales.html">Documentos Oficiales</a>
                                            </li>
                                            <li class="dropdown sub-dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Multimedia<span class="angle"></span></a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="galeria.html">Galería</a></li>
                                                    <li><a href="videos.html">Vídeos</a></li> 
                                                </ul>
                                            </li>
                                            <li class="dropdown sub-dropdown">
                                                <a href="http://cursosvirtualesintracolpen.com/" target="blank">Capacitaciones</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown megamenu-container">
                                        <a href="preguntas-frecuentes.html">Preguntas</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{url('contactanos')}}">Contáctanos</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>